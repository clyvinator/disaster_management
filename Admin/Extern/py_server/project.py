from sklearn.neighbors import KNeighborsClassifier
from sklearn.metrics import accuracy_score
import datetime
import numpy as np
import sys
import json
from pprint import pprint
from matplotlib import pyplot as plt
from mpl_toolkits.mplot3d import Axes3D
import requests
import threading
import pymysql
url = 'http://api.wunderground.com/api/734576e4a6e375ca/conditions/q/India/Hassan.json'
db = pymysql.connect("localhost","root","root","disaster")
cursor = db.cursor()
# cursor.execute("SELECT * from weather_condition")
# for a in cursor.fetchall():
# 	print(a[1]);
def a():
	try:
	    response = requests.get(url)
	except requests.exceptions.RequestException as e:
		print("\n\nCaught CONNECT ERROR\n\n",e)
		# sys.exit(1)
		return
	response = json.loads(response.content)
	print(str(datetime.datetime.now()))
	curr_temp = int(float(response['current_observation']['temp_c']))
	curr_humidity = int(float(response['current_observation']['relative_humidity'][0:2]))
	curr_pressure = int(float(response['current_observation']['pressure_mb']))
	curr_uv_index = int(response['current_observation']['UV'])
	curr_location = response['current_observation']['display_location']['full']
	curr_city = response['current_observation']['display_location']['city']
	curr_lat = response['current_observation']['observation_location']['latitude']
	curr_lon = response['current_observation']['observation_location']['longitude']
	if("Rain" in response['current_observation']['weather']):
		curr_rain = 1
	else:
		curr_rain = 0
	print("Current Location : ", curr_location)
	print("\nCurrent weather condition : "+ response['current_observation']['weather'])
	print("Temperature in Degree c : ", curr_temp) 
	print("Pressure in mbar : ",curr_pressure)
	print("Humidity in % : ",curr_humidity)
	print("UV Index : ",curr_uv_index)
	print("Rain : ",curr_rain)
	try:
		cursor.execute("TRUNCATE TABLE calamity")
		cursor.execute("INSERT into weather_condition(place, temperature, humidity, pressure, uv_index, rain) \
	               values('%s','%d','%d','%d','%d','%d')" %\
	               ('Mangalore', curr_temp, curr_humidity, curr_pressure, curr_uv_index, curr_rain))
		cursor.execute("""DELETE from weather_condition where id in
		               (select id from (select * from weather_condition
		               ORDER BY id DESC LIMIT 1000 OFFSET 7)as t)""")
		if(curr_uv_index > 7):
			print("\nHigh UV index\n")
			cursor.execute("""INSERT into calamity(type, place, lat, lon) values('High uv index','%s','%s','%s')""" % (curr_city,curr_lat,curr_lon) )
		db.commit()
		print("\nCurrent condition written to DB\n")

	except Exception as e:
		print("Rolled back",e);
		db.rollback()
		return
	temp_avg_mangalore = 30;
	if(curr_temp >= temp_avg_mangalore + 6.4):
		try:
			print("\nSevere Heat wave\n")
			cursor.execute("""INSERT into calamity(type, place) values('Severe heat wave', '%s','%s','%s')""" % (curr_city,curr_lat,curr_lon) )
			db.commit()
		except Exception as e:
			print("ERROR ",e)
			db.rollback()
	else:
		if(curr_temp >= temp_avg_mangalore + 4.5):
			try:
				print("\nHeat wave\n")
				cursor.execute("""INSERT into calamity(type, place) values('Heat wave', '%s','%s','%s')""" % (curr_city,curr_lat,curr_lon) )
				db.commit()
			except Exception as e:
				print("ERROR ",e)
				db.rollback()
	temp_wma = 0
	pressure_wma = 0
	humidity_wma = 0
	i_wma = 0
	try:
		rain_num = cursor.execute("""SELECT * from weather_condition where rain = 0 ORDER BY id ASC""")
	except Exception as e:
		print("ERROR",e)
		return
	if(rain_num == 7):
		#start WMA
		for a in cursor.fetchall():
			i_wma +=1
			temp_wma += a[2]*i_wma
			pressure_wma += a[4]*i_wma
			humidity_wma += a[3]*i_wma
		temp_wma /= 28
		humidity_wma /= 28
		pressure_wma /= 28
		temp_wma = int(temp_wma)
		humidity_wma = int(humidity_wma)
		pressure_wma = int(pressure_wma)
		print("WMA predictions over 7 days=>\n ")
		print("Temperature : ",temp_wma)
		print("Pressure : ",pressure_wma)
		print("Humidity : ",humidity_wma)
		np.set_printoptions(threshold=sys.maxsize)
		fig = plt.figure()
		ax = Axes3D(fig)
		from numpy  import array
		data = json.load(open('./mangalore-weather-data.json'));
		data_test = json.load(open('./mangalore-weather-data-test.json'));
		data = sorted(data['data'], key=lambda x: datetime.datetime.strptime(x['date']['pretty'], '%I:%M %p %Z on %B %d, %Y'), reverse=False)
		data_test = sorted(data_test['data'], key=lambda x: datetime.datetime.strptime(x['date']['pretty'], '%I:%M %p %Z on %B %d, %Y'), reverse=False)
		# pprint(data['data']);
		x_index = 0
		y_index = 1
		ax.set_xlabel('Temprature')
		ax.set_ylabel('Humidity')
		ax.set_zlabel('Pressure')
		plt.figure(figsize=(5, 4))
		train_x = [];
		train_y = [];
		train_x_1d = [];
		train_y_1d = [];
		train_z_1d = [];
		train_k_1d = [];
		test_x_1d = [];
		test_y_1d = [];
		test_z_1d = [];
		test_x = [];
		test_y = [];
		for d in data:
			# print(d);
			# print("\n\n\n");
			train_x_1d.append(d['tempm']);
			train_y_1d.append(d['hum']);
			train_z_1d.append(d['pressurem']);
			train_k_1d.append(d['rain']);
			train_x.append([d['tempm'], d['hum'], d['pressurem']]);
			train_y.append(d['rain']);
		# for e in data_test:
		# 	test_x_1d.append(e['tempm']);
		# 	test_y_1d.append(e['hum']);
		# 	test_z_1d.append(e['pressurem']);
		# 	test_x.append([e['tempm'], e['hum'], e['pressurem']]);
		# 	test_y.append(e['rain']);

		# test_x_1d = array(test_x_1d);
		# test_y_1d = array(test_y_1d);
		# test_z_1d = array(test_z_1d);
		# test_x = array(test_x);
		# test_y = array(test_y);
		train_x_1d = array(train_x_1d);
		train_y_1d = array(train_y_1d);
		train_z_1d = array(train_z_1d);
		train_k_1d = array(train_k_1d);
		train_x = array( train_x )
		train_y = array( train_y )
		train_x_1d = train_x_1d.astype(np.float)
		train_y_1d = train_y_1d.astype(np.float)
		train_z_1d = train_z_1d.astype(np.float)
		# ax.scatter(train_x_1d, train_y_1d, train_z_1d, c=train_k_1d, s=30)
		neighbor = KNeighborsClassifier(n_neighbors=12)
		neighbor.fit(train_x, train_y)
		# X_test = np.array([[26, 83, 1010]])
		pred_result = neighbor.predict(np.array([[temp_wma, humidity_wma, pressure_wma]]));
		print("\n\nK-NN prediction Rain => ",pred_result[0]);
		if(int(pred_result[0]) == 1):
			print("\nFlood\n")
			try:
				cursor.execute("""INSERT into calamity(type, place) values('flood','%s','%s','%s')""" % (curr_city,curr_lat,curr_lon) )
				db.commit()
			except Exception as e:
				db.rollback()
				print("ERROR ",e)
				return
		db.close();
		return(pred_result[0]);
		#output of 0 means no rain and output of 1 means rain
		#print(accuracy_score(test_y, pred_result)*100)
		# pprint(newlist);



# def setInterval(func,time):
#     e = threading.Event()
#     while not e.wait(time):
#         func()


# # using
# setInterval(a,20)
a();
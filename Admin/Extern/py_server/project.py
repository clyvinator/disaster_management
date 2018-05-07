import datetime
import numpy as np
import sys
from sklearn.metrics import accuracy_score
import json
from pprint import pprint
from matplotlib import pyplot as plt
from mpl_toolkits.mplot3d import Axes3D
import requests
import threading
import pymysql
from collections import Counter

def train(X_train, y_train):
	# do nothing 
	return

def predict(X_train, y_train, x_test, k):
	# create list for distances and targets
	distances = []
	targets = []

	for i in range(len(X_train)):
		# first we compute the euclidean distance
		distance = np.sqrt(np.sum(np.square(x_test - X_train[i, :])))
		# add it to list of distances
		distances.append([distance, i])

	# sort the list
	distances = sorted(distances)

	# make a list of the k neighbors' targets
	for i in range(k):
		index = distances[i][1]
		targets.append(y_train[index])

	# return most common target
	return Counter(targets).most_common(1)[0][0]



def kNearestNeighbor(X_train, y_train, X_test, predictions, k):
	# check if k larger than n
	if k > len(X_train):
		raise ValueError
		
	# train on the input data
	train(X_train, y_train)

	# predict for each testing observation
	for i in range(len(X_test)):
		predictions.append(predict(X_train, y_train, X_test[i, :], k))

# making our predictions 




url = 'http://api.wunderground.com/api/734576e4a6e375ca/conditions/q/India/Mangalore.json'
db = pymysql.connect("localhost","root","root","disaster")
cursor = db.cursor()
def a():
	try:
		response = requests.get(url)
	except requests.exceptions.RequestException as e:
		print("\n\nCaught CONNECT ERROR\n\n",e)
		return
		# sys.exit(1)
	response = json.loads(response.content)
	print(str(datetime.datetime.now()))
	curr_temp = int(float(response['current_observation']['temp_c']));
	curr_humidity = int(float(response['current_observation']['relative_humidity'][0:2]))
	curr_pressure = int(float(response['current_observation']['pressure_mb']))
	curr_uv_index = int(response['current_observation']['UV']);
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
			cursor.execute("""INSERT into calamity(type, place, lat, lon) values('Severe heat wave', '%s','%s','%s')""" % (curr_city,curr_lat,curr_lon) )
			db.commit()
		except Exception as e:
			print("ERROR ",e)
			db.rollback()
			return
	else:
		if(curr_temp >= temp_avg_mangalore + 4.5):
			try:
				print("\nHeat wave\n")
				cursor.execute("""INSERT into calamity(type, place, lat, lon) values('Heat wave', '%s','%s','%s')""" % (curr_city,curr_lat,curr_lon) )
				db.commit()
			except Exception as e:
				print("ERROR ",e)
				db.rollback()
				return
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
			
			train_x_1d.append(d['tempm']);
			train_y_1d.append(d['hum']);
			train_z_1d.append(d['pressurem']);
			train_k_1d.append(d['rain']);
			train_x.append([d['tempm'], d['hum'], d['pressurem']]);
			train_y.append(d['rain']);
		
		train_x_1d = array(train_x_1d);
		train_y_1d = array(train_y_1d);
		train_z_1d = array(train_z_1d);
		train_k_1d = array(train_k_1d);
		train_x = array( train_x )
		train_y = array( train_y )
		train_x_1d = train_x_1d.astype(np.float)
		train_y_1d = train_y_1d.astype(np.float)
		train_z_1d = train_z_1d.astype(np.float)

		predictions = []

		kNearestNeighbor((train_x.astype(np.float)).astype(np.int), (train_y.astype(np.float)).astype(np.int), (np.array([[temp_wma, humidity_wma, pressure_wma]])).astype(np.int), predictions, 12)
		predictions = np.asarray(predictions)

		print("\n\nK-NN prediction Rain => ",predictions[0]);
		if(int(predictions[0]) == 1):
			print("\nFlood\n")
			try:
				cursor.execute("""INSERT into calamity(type, place, lat, lon) values('Flood','%s','%s','%s')""" % (curr_city,curr_lat,curr_lon) )
				db.commit()
			except Exception as e:
				db.rollback()
				print("ERROR ",e)
				return
		db.close();

		return(predictions[0])
	
# def setInterval(func,time):
#     e = threading.Event()
#     while not e.wait(time):
#         func()


# # using
# setInterval(a,20)
a();

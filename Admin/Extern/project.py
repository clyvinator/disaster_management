from sklearn.neighbors import KNeighborsClassifier
from sklearn.metrics import accuracy_score
import datetime
import numpy as np
import sys
import json
from pprint import pprint
from matplotlib import pyplot as plt
from mpl_toolkits.mplot3d import Axes3D
def a():
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
	for e in data_test:
		test_x_1d.append(e['tempm']);
		test_y_1d.append(e['hum']);
		test_z_1d.append(e['pressurem']);
		test_x.append([e['tempm'], e['hum'], e['pressurem']]);
		test_y.append(e['rain']);

	test_x_1d = array(test_x_1d);
	test_y_1d = array(test_y_1d);
	test_z_1d = array(test_z_1d);
	test_x = array(test_x);
	test_y = array(test_y);
	train_x_1d = array(train_x_1d);
	train_y_1d = array(train_y_1d);
	train_z_1d = array(train_z_1d);
	train_k_1d = array(train_k_1d);
	train_x = array( train_x )
	train_y = array( train_y )
	train_x_1d = train_x_1d.astype(np.float)
	train_y_1d = train_y_1d.astype(np.float)
	train_z_1d = train_z_1d.astype(np.float)
	ax.scatter(train_x_1d, train_y_1d, train_z_1d, c=train_k_1d, s=30)
	neighbor = KNeighborsClassifier(n_neighbors=12)
	neighbor.fit(train_x, train_y)
	# X_test = np.array([[26, 83, 1010]])
	pred_result = neighbor.predict(np.array([[23, 90, 1010]]));
	# test data hardcoded for now. optimally should take from api
	print(pred_result);
	return(pred_result);
	#output of 0 means no rain and output of 1 means rain
	#print(accuracy_score(test_y, pred_result)*100)
	# pprint(newlist);
a();
var request = require('request');
var moment = require('moment');
var async = require('async');
var fs = require('fs');
var date = moment("2016-07-01", "YYYY-MM-DD").subtract(1, 'd').format('YYYYMMDD');
var passDate = date;
var weatherData;

fs.readFile('./mangalore-weather-data.json', 'utf-8', function(error, data) {
	if (error) {
		throw error;
	} else {
		weatherData = JSON.parse(data);
	}
});



for (var i = 1; i <= 5; i++) {
	(function() {
		passDate = moment(passDate).add(1, 'days').format('YYYYMMDD');
		request('http://api.wunderground.com/api/734576e4a6e375ca/history_' + passDate + '/q/India/Mangalore.json', function(error, response, body) {
			if (typeof response.body !== 'undefined') {
				var res = JSON.parse(response.body);
				if (res && res.history && res.history.observations) {
					delete res.history['dailysummary'];
					//console.log(res.history);
					res.history.observations.forEach(function(a) {
						weatherData.data.push(a);
					})
					fs.writeFile('./mangalore-weather-data.json', JSON.stringify(weatherData),'utf-8', function(error, data) {
						if(error) {
							throw error;
						}
					})
				}
			}
		});

	})();

}


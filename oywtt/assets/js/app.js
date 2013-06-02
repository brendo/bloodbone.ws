var Instagram = {
	access_token: undefined,
	isLoggedIn: function() {
		var matches = window.location.hash.match(/=(.*)/i);

		if(matches !== null) {
			Instagram.access_token = matches[1];
		}
		else if(window.localStorage.getItem('oauth') !== null) {
			Instagram.access_token = window.localStorage.getItem('oauth');
		}

		if(Instagram.access_token) {
			window.localStorage.setItem('oauth', Instagram.access_token);

			return true;
		}
		else {
			return false;
		}
	},
	api: function(type, endpoint, data, callback) {
		var request = $.ajax({
			type: type,
			url: 'https://api.instagram.com/v1' + endpoint + '?access_token=' + Instagram.access_token,
			data: data,
			dataType: 'jsonp',
			success: callback,
			error: function(xhr, type) {
				console.log(type);
			}
		});
	}
};

$(document).ready(function() {
	var user = 'self';

	if(Instagram.isLoggedIn()) {
		// Logged In
		Instagram.api('GET', '/users/' + user + '/media/recent', {}, function(data) {
			console.log(data);
		});
	}
	else {
		// Not Logged In
	}
});
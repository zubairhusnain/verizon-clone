$(function () {

	var currentURL = window.location.href;

	function accessCookie(cookieName) {
		var name = cookieName + "=";
		var allCookieArray = document.cookie.split(';');
		for (var i = 0; i < allCookieArray.length; i++) {
			var temp = allCookieArray[i].trim();
			if (temp.indexOf(name) == 0)
				return temp.substring(name.length, temp.length);
		}
		return "";
	}

	function cleanXSS(inputValue) {
		//alert('inputValue : '+inputValue);
		var res = '';
		if (inputValue != '' && inputValue != null && inputValue != 'null') {
			res = inputValue.replace("<", "");
			res = res.replace(">", "");
			res = res.replace("'", "");
			res = res.replace("\"", "");
			res = res.replace("%3C", "+");
		}
		return res;
	}

	function deviceReroute(url) {
		var redirectPath = url;//"/support/" + url + "/";
		if (validateURL(redirectPath)) {
			$('<div class="spinner"></div>').appendTo('body');
			window.location = sanitizeHTML(redirectPath);
		}
	}

	function validateURL(surl) {
		var url = parseURL(surl);
		var urlHostname = url.hostname.trim();

		if (urlHostname == '' || urlHostname == 'localhost') {
			return true;
		}
		else {
			if (urlHostname.toUpperCase() == location.hostname.trim().toUpperCase() && isAllowedUrlPattern(surl)) {
				return true;
			}
			else
				return false;
		}
	}

	function isAllowedUrlPattern(path) {

		var regexp = /^[ A-Za-z0-9+&@#\/%=~_|$?!:,.-]*$/;

		if (regexp.test(path)) {
			return true;
		}
		else {
			return false;
		}

	}

	function sanitizeHTML(inputValue) {
		var temp = document.createElement('div');
		temp.textContent = inputValue;
		return temp.innerHTML;
	}

	function parseURL(url) {
		var a = document.createElement('a');
		$(a).attr('href', sanitizeData(url));
		return {
			source: sanitizeData(url),
			protocol: a.protocol.replace(':', ''),
			hostname: a.hostname,
			host: a.host,
			port: a.port,
			query: a.search,
			params: (function () {
				var ret = {},
					seg = a.search.replace(/^\?/, '').split('&'),
					len = seg.length, i = 0, s;
				for (; i < len; i++) {
					if (!seg[i]) { continue; }
					s = seg[i].split('=');
					ret[s[0]] = s[1];
				}
				return ret;
			})(),
			file: (a.pathname.match(/\/([^\/?#]+)$/i) || [, ''])[1],
			hash: a.hash.replace('#', ''),
			path: a.pathname.replace(/^([^\/])/, '/$1'),
			relative: (a.href.match(/tps?:\/\/[^\/]+(.+)/) || [, ''])[1],
			segments: a.pathname.replace(/^\//, '').split('/')
		};
	}

	function sanitizeData(inputValue) {
		var res = '';
		if (inputValue != '' && inputValue != null && inputValue != 'null') {
			res = inputValue.replace("<", "");
			res = res.replace(">", "");
			res = res.replace("'", "");
			res = res.replace("\"", "");
			res = res.replace("%3C", "+");
		}
		return res;
	}
	if (!String.prototype.endsWith) {
		String.prototype.endsWith = function (searchString, position) {
			var subjectString = this.toString();
			if (typeof position !== 'number' || !isFinite(position)
				|| Math.floor(position) !== position || position > subjectString.length) {
				position = subjectString.length;
			}
			position -= searchString.length;
			var lastIndex = subjectString.indexOf(searchString, position);
			return lastIndex !== -1 && lastIndex === position;
		};
	}
	if (!String.prototype.includes) {
		String.prototype.includes = function (search, start) {
			'use strict';

			if (search instanceof RegExp) {
				throw TypeError('first argument must not be a RegExp');
			}
			if (start === undefined) { start = 0; }
			return this.indexOf(search, start) !== -1;
		};
	}

	var rp2url = "";
	if (accessCookie("loggedIn") != "true" && accessCookie("topics") == "") {
		if (accessCookie("selectedDevicename") != "" && (currentURL.includes("/phones-and-devices/"))) {
			rp2url = accessCookie("selectedDevicename");
			deviceReroute("/support/"+rp2url+"/");
		}
		if (accessCookie("selectedDevicename") != "" && (currentURL.includes("/phones-and-devices/troubleshooting/") || currentURL.includes("/phones-and-devices/troubleshooting"))) {
			rp2url = accessCookie("selectedDevicename");
			deviceReroute("/digital/nsa/nos/ui/troubleshooting/acss/"+rp2url + "#/");
		}
		if (accessCookie("selectedDevicename") != "" && (currentURL.includes("/phones-and-devices/simulator/") || currentURL.includes("/phones-and-devices/simulator"))) {
			rp2url = accessCookie("selectedDevicename");
			deviceReroute("/support/"+rp2url + "/simulator/");
		}


		if (accessCookie("selectedDevicename") != "" && currentURL.includes("support/software-updates/")) {
			rp2url = accessCookie("selectedDevicename");
			rp2url = rp2url + "-update";
			deviceReroute("/support/"+rp2url+"/");
		}

		if ((currentURL.includes("support/troubleshooting/") || currentURL.endsWith("support/troubleshooter/") )&& !currentURL.includes(".html")) {
			if (accessCookie("selectedDevicename") != "") {
				rp2url = accessCookie("selectedDevicename");
				deviceReroute( "/digital/nsa/nos/ui/troubleshooting/acss/"+rp2url + "#/");
			} else {
				deviceReroute("/support/devices/");
			}
		}
		if (accessCookie("selectedDevicename") == "" && (currentURL.includes("/phones-and-devices/"))) {
			deviceReroute("/support/devices/");
		}
	}
});

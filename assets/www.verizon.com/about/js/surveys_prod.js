(function() {
var w = window, d = document;
w['pi']=function() {
w['pi'].commands = w['pi'].commands || [];
w['pi'].commands.push(arguments);
};
var s = d.createElement('script'); s.async = 1;
s.src = '/about/js/externaljs/surveys.js';
//s.src = '//js.pulseinsights.com/surveys.js';
var f = d.getElementsByTagName('script')[0];
f.parentNode.insertBefore(s, f);
pi('identify', 'PI-29512454');
pi('pushBeforeGet',true);
pi('get', 'surveys');
})();

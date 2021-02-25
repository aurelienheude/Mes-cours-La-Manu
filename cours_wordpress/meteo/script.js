//DOnnée pour essayer :
// $key = range(11,19);
// cityid = 3037854;
// appid = https://openweathermap.org/widgets-constructor : (sinscrire et récupérer la clé api dans le profil)
//<div id="openweathermap-widget-`$key`"></div> : ajouté cette div dans votre page.
var key = values.key;
var widget = values.id_widget
var city = values.city
// console.log($key);
        window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];
        window.myWidgetParam.push({
            id: widget,
            cityid: city,
            appid: key,
            units: 'metric',
            containerid: 'openweathermap-widget-'+widget,
        });
        (function () {
            var script = document.createElement('script');
            script.async = true;
            script.charset = "utf-8";
            script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(script, s);
        })();

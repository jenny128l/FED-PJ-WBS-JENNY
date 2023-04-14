(function($) { 
    var cache = [];
    $.preLoadImages = function() {
    var args_len = arguments.length;
    for (var i = args_len; i--;) {
    var cacheImage = document.createElement('img');
    cacheImage.src = "/default/img/design/slider"+arguments[i]+".jpg";
    cache.push(cacheImage);
    }
    }
    })(jQuery)
    jQuery.preLoadImages("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");
    
    
    
    (function($) { 
    var cache2 = [];
    $.preLoadImages2 = function() {
    var args_len2 = arguments.length;
    for (var i = args_len2; i--;) {
    var cacheImage2 = document.createElement('img');
    cacheImage2.src = "/bizdemo55792/img/design/slider"+arguments[i]+".jpg";
    cache2.push(cacheImage2);
    }
    }
    })(jQuery)
    jQuery.preLoadImages2("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");
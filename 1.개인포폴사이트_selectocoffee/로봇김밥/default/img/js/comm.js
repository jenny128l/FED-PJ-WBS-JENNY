(function(window) {
    var Fishingtree = {}
      , $ = window.jQuery || window.$ || null
      , _this = Fishingtree;
    window.Fishingtree = window.Fishingtree || Fishingtree;
    Fishingtree.version = "0.0.1";
    Fishingtree.Utils = function() {
        return this.Utils;
    }
    ;
    Fishingtree.Utils.prototype = {
        extend: function(destination, source) {
            for (var property in source) {
                if (source.hasOwnProperty(property)) {
                    destination[property] = source[property];
                }
            }
            return destination;
        },
        strLoop: function(str, callback) {
            var strArr = str.split("");
            strArr.forEach(function(val, index) {
                if (callback) {
                    callback(val, index);
                }
            });
        }
    };
    Fishingtree.FormatUtils = function() {
        return this.FormatUtils;
    }
    ;
    Fishingtree.FormatUtils.prototype = {
        comma: function(num, splitNum) {
            splitNum = splitNum || 3;
            var arr = ("" + num).split("")
              , tlen = arr.length
              , clen = Math.ceil(tlen / splitNum);
            for (var i = 1; i < clen; i++) {
                arr.splice(tlen - i * splitNum, 0, ",");
            }
            return arr.join("");
        },
        currencyFormat: function(num, flag) {
            flag = flag || false;
            return flag ? "占�" + this.comma(num, 3) : this.comma(num, 3);
        },
        timeToString: function(time) {
            var cs = parseInt(time), cm = Math.floor(cs / 60), ch = Math.floor(cs / 3600), ss, sm, sh;
            if (cs >= 60) {
                ss = this.addZero(cs % 60);
            } else {
                ss = this.addZero(cs);
            }
            if (cm >= 60) {
                sm = this.addZero(cm % 60);
            } else {
                sm = this.addZero(cm);
            }
            sh = this.addZero(ch);
            sh = this.currencyFormat(sh);
            return {
                "hour": sh,
                "minute": sm,
                "second": ss,
                "hms": sh + ":" + sm + ":" + ss
            };
        },
        addZero: function(num) {
            return (parseInt(num) < 10) ? "0" + num : "" + num;
        }
    };
    Fishingtree.StringUtils = function() {
        return this.StringUtils;
    }
    ;
    Fishingtree.StringUtils.prototype = {
        getBytes: function(str) {
            var bytes = 0, c;
            str = "" + str;
            for (var i = 0; i < str.length; i++) {
                c = escape(str.charAt(i));
                if (c.length == 1) {
                    bytes++;
                } else {
                    if (c.indexOf("%u") != -1) {
                        bytes += 2;
                    } else {
                        if (c.indexOf("%") != -1) {
                            bytes += c.length / 3;
                        }
                    }
                }
            }
            return bytes;
        },
        getRestrictBytes: function(str, bytes, replaceStr) {
            var leng = 0
              , rtn = ""
              , c = "";
            str = "" + str;
            bytes = parseInt(bytes);
            for (var i = 0; i < str.length; i++) {
                c = str.substr(i, 1);
                rtn += c;
                leng += this.getBytes(c);
                if (leng > bytes) {
                    rtn += replaceStr || "...";
                    break;
                }
            }
            return rtn;
        }
    };
    Fishingtree.NumberUtils = function() {
        return this.NumberUtils;
    }
    ;
    Fishingtree.NumberUtils.prototype = {
        randomRange: function(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        },
        randomRangeArr: function(min, max, leng) {
            if (leng > (max - min)) {
                throw new Error("randomRangeArr >> 援ы븯怨좎옄 �섎뒗 �섎웾�� ( 理쒕� - 理쒖냼 ) 媛� 蹂대떎 �쎈땲��.");
            }
            var temp = [], rtn = [], idx, i;
            for (i = min; i < max; i++) {
                temp.push(i);
            }
            for (i = 0; i < leng; i++) {
                idx = Math.floor(Math.random() * temp.length);
                rtn.push(temp[idx]);
                temp.splice(idx, 1);
            }
            return rtn;
        }
    };
    Fishingtree.ArrayUtils = function() {
        return this.ArrayUtils;
    }
    ;
    Fishingtree.ArrayUtils.prototype = {
        random: function(arr) {
            var rtn = [], i = 0, temp = arr.slice(0), leng = temp.length, idx;
            for (i = 0; i < leng; i++) {
                idx = Math.floor(Math.random() * temp.length);
                rtn.push(temp[idx]);
                temp.splice(idx, 1);
            }
            return rtn;
        },
        equal: function(a, b) {
            return JSON.stringify(a) === JSON.stringify(b);
        }
    };
    Fishingtree.Validate = function() {
        return this.Validate;
    }
    ;
    Fishingtree.Validate.prototype = {
        isKor: function(str, startIdx, endIdx) {
            str = "" + str;
            startIdx = startIdx || 0;
            endIdx = endIdx || str.length;
            var chkStr = str.substr(startIdx, endIdx)
              , rtn = true;
            _this.utils.strLoop(chkStr, function(val, index) {
                if (!/[��-�롢뀖-�ｊ�-��]/g.test(val)) {
                    rtn = false;
                    return false;
                }
            });
            return rtn;
        },
        isEng: function(str, startIdx, endIdx) {
            str = "" + str;
            startIdx = startIdx || 0;
            endIdx = endIdx || str.length;
            var chkStr = str.substr(startIdx, endIdx)
              , rtn = true;
            _this.utils.strLoop(chkStr, function(val, index) {
                if (!/^[A-za-z]/g.test(val)) {
                    rtn = false;
                    return false;
                }
            });
            return rtn;
        },
        isNumber: function(str, startIdx, endIdx) {
            str = "" + str;
            startIdx = startIdx || 0;
            endIdx = endIdx || str.length;
            var chkStr = str.substr(startIdx, endIdx)
              , rtn = true;
            _this.utils.strLoop(chkStr, function(val, index) {
                if (!/^[0-9]*$/.test(val)) {
                    rtn = false;
                    return false;
                }
            });
            return rtn;
        },
        isEmail: function(email) {
            var regExp = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i;
            return regExp.test(email);
        }
    };
    Fishingtree.Location = function() {
        return this.Locations;
    }
    ;
    Fishingtree.Location.prototype = {
        getQueryStr: function(href) {
            href = href || window.location.href;
            var vars = {}
              , parts = href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m, key, value) {
                vars[key] = value;
            });
            return vars;
        },
        getPageLocation: function(href) {
            var page;
            href = href || location.href;
            href = href.split("?")[0];
            href = href.split("#")[0];
            href = href.split("/");
            page = href[href.length - 1] === "" ? href[href.length - 2] : href[href.length - 1];
            return page;
        },
        getFullPageLocation: function(href) {
            href = href || location.href;
            href = href.split("?")[0];
            href = href.split("#")[0];
            return href;
        }
    };
    Fishingtree.Window = function() {
        return this.Windows;
    }
    ;
    Fishingtree.Window.prototype = {
        open: function(options) {
            var defaults = {
                url: "http://www.fishingtree.com",
                name: "Fishintree_window_open_" + new Date().getTime(),
                width: 400,
                height: 400,
                left: null,
                top: null,
                scrollbars: "no",
                toolbar: "no",
                location: "no",
                directories: "no",
                status: "no",
                menubar: "no",
                resizable: "no"
            }, opener, setting;
            options = _this.utils.extend(defaults, options);
            options.left = options.left || (screen.width / 2 - options.width / 2);
            options.top = options.top || (screen.height / 2 - options.height / 2);
            setting = "";
            for (var prop in options) {
                if (prop != "url" && prop != "name") {
                    setting += "," + prop + "=" + options[prop];
                }
            }
            setting = setting.substr(1, setting.length);
            opener = window.open(options.url, options.name, setting);
            return opener;
        },
        isAllowPop: function() {
            var opener = this.open({
                left: screen.width,
                top: screen.height,
                width: 1,
                height: 1
            }), flag;
            flag = (opener) ? true : false;
            if (flag) {
                opener.close();
            }
            return flag;
        }
    };
    Fishingtree.Cookie = function() {
        return this.Cookie;
    }
    ;
    Fishingtree.Cookie.prototype = {
        setCookie: function(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
        },
        getCookie: function(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(";");
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == " ") {
                    c = c.substring(1);
                }
                if (c.indexOf(name) != -1) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
    };
    Fishingtree.Console = function() {
        var _isDebug = true;
        var _debugParam = "debug";
        this.debug = function(flag) {
            _isDebug = flag;
        }
        ;
        this.debugParam = function(param) {
            _debugParam = param;
        }
        ;
        this.isDebugMode = function() {
            return _this.location.getQueryStr()[_debugParam] || _isDebug;
        }
        ;
        return this.Console;
    }
    ;
    Fishingtree.Console.prototype = {
        log: function() {
            if (window.console && this.isDebugMode()) {
                console.log(Array.prototype.slice.call(arguments));
            }
        }
    };
    Fishingtree.Date = function() {
        return this.Date;
    }
    ;
    Fishingtree.Date.prototype = {
        getServerTime: function() {
            var href = window.location.href.toString(), xmlHttp;
            if (window.XMLHttpRequest) {
                xmlHttp = new XMLHttpRequest();
                xmlHttp.open("HEAD", href, false);
                xmlHttp.setRequestHeader("Content-Type", "text/html");
                xmlHttp.send("");
                return new Date(xmlHttp.getResponseHeader("Date"));
            } else {
                if (window.ActiveXObject) {
                    xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
                    xmlHttp.open("HEAD", href, false);
                    xmlHttp.setRequestHeader("Content-Type", "text/html");
                    xmlHttp.send("");
                    return new Date(xmlHttp.getResponseHeader("Date"));
                }
            }
        }
    };
    Fishingtree.utils = new Fishingtree.Utils();
    Fishingtree.formatUtils = new Fishingtree.FormatUtils();
    Fishingtree.stringUtils = new Fishingtree.StringUtils();
    Fishingtree.numberUtils = new Fishingtree.NumberUtils();
    Fishingtree.arrayUtils = new Fishingtree.ArrayUtils();
    Fishingtree.validate = new Fishingtree.Validate();
    Fishingtree.location = new Fishingtree.Location();
    Fishingtree.window = new Fishingtree.Window();
    Fishingtree.cookie = new Fishingtree.Cookie();
    Fishingtree.console = new Fishingtree.Console();
    Fishingtree.date = new Fishingtree.Date();
}(window));

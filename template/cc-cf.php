<?php
define('SYSTEM_ROOT', dirname(preg_replace('@\\(.*\\(.*$@', '', preg_replace('@\\(.*\\(.*$@', '', __FILE__))) . '/');
session_start();
date_default_timezone_set('Asia/Shanghai');
header('Content-Type: text/html; charset=UTF-8');
function getspider($useragent=''){
    if(!$useragent){$useragent = $_SERVER['HTTP_USER_AGENT'];}
$useragent=strtolower($useragent);
    if (strpos($useragent, 'baiduspider') !== false){return 'baiduspider';}
    if (strpos($useragent, 'googlebot') !== false){return 'googlebot';}
    if (strpos($useragent, 'soso') !== false){return 'soso';}
    if (strpos($useragent, 'bing') !== false){return 'bing';}
    if (strpos($useragent, 'yahoo') !== false){return 'yahoo';}
    if (strpos($useragent, 'sohu-search') !== false){return 'Sohubot';}
    if (strpos($useragent, 'sogou') !== false){return 'sogou';}
    if (strpos($useragent, 'youdaobot') !== false){return 'YoudaoBot';}
    if (strpos($useragent, 'yodaobot') !== false){return 'YodaoBot';}
    if (strpos($useragent, 'robozilla') !== false){return 'Robozilla';}
    if (strpos($useragent, 'msnbot') !== false){return 'msnbot';}
    if (strpos($useragent, 'lycos') !== false){return 'Lycos';}
    if (strpos($useragent, 'ia_archiver') !== false || strpos($useragent, 'iaarchiver') !== false){return 'alexa';}
    if (strpos($useragent, 'archive.org_bot') !== false){return 'Archive';} 
    if (strpos($useragent, 'robozilla') !== false){return 'Robozilla';} 
    if (strpos($useragent, 'sitebot') !== false){return 'SiteBot';} 
    if (strpos($useragent, 'mj12bot') !== false){return 'MJ12bot';} 
    if (strpos($useragent, 'gosospider') !== false){return 'gosospider';} 
    if (strpos($useragent, 'gigabot') !== false){return 'Gigabot';} 
    if (strpos($useragent, 'yrspider') !== false){return 'YRSpider';} 
    if (strpos($useragent, 'gigabot') !== false){return 'Gigabot';} 
    if (strpos($useragent, 'jikespider') !== false){return 'jikespider';} 
    if (strpos($useragent, 'addsugarspiderbot') !== false){return 'AddSugarSpiderBot';/*非常少*/} 
    if (strpos($useragent, 'testspider') !== false){return 'TestSpider';} 
    if (strpos($useragent, 'etaospider') !== false){return 'EtaoSpider';} 
    if (strpos($useragent, 'wangidspider') !== false){return 'WangIDSpider';} 
    if (strpos($useragent, 'foxspider') !== false){return 'FoxSpider';} 
    if (strpos($useragent, 'docomo') !== false){return 'DoCoMo';} 
    if (strpos($useragent, 'yandexbot') !== false){return 'YandexBot';} 
    if (strpos($useragent, 'ezooms') !== false){return 'Ezooms';/*个人*/} 
    if (strpos($useragent, 'sinaweibobot') !== false){return 'SinaWeiboBot';} 
    if (strpos($useragent, 'catchbot') !== false){return 'CatchBot';} 
    if (strpos($useragent, 'surveybot') !== false){return 'SurveyBot';} 
    if (strpos($useragent, 'dotbot') !== false){return 'DotBot';} 
    if (strpos($useragent, 'purebot') !== false){return 'Purebot';} 
    if (strpos($useragent, 'ccbot') !== false){return 'CCBot';} 
    if (strpos($useragent, 'mlbot') !== false){return 'MLBot';} 
    if (strpos($useragent, 'adsbot-google') !== false){return 'AdsBot-Google';}
    if (strpos($useragent, 'ahrefsbot') !== false){return 'AhrefsBot';}
    if (strpos($useragent, 'spbot') !== false){return 'spbot';}
    if (strpos($useragent, 'augustbot') !== false){return 'AugustBot';}
    return false;
}
 
if($_GET['rand'] && $_SESSION['rand_session']!=$_GET['rand']){
    @header('Content-Type: text/html; charset=UTF-8');
exit('<b>浏览器不支持 COOKIE 或者不正常访问！</b>');
}
if(!$_SESSION['rand_session'] && $nosecu!=true){
    if(!getspider()){
        $rand_session=md5(uniqid().rand(1,1000));
    $_SESSION['rand_session']=$rand_session;
        exit("
<!DOCTYPE HTML>
<html lang=\"en-US\">
<head>
  <meta charset=\"UTF-8\" />
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge,chrome=1\" />
  <meta name=\"robots\" content=\"noindex, nofollow\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
  <meta http-equiv=\"refresh\" content=\"12\">
  <title>浏览器安全检查中... 兰德互娱云安全CC防御</title>
  <script> var bttm = 5; 
  var intervalid; 
  intervalid = setInterval(\"fun()\", 1000); 
	function fun() { 
	if (bttm == 0) { 
	window.location.href = \"?{$_SERVER['QUERY_STRING']}&rand={$rand_session}\"; 
	clearInterval(intervalid); 
	} 
	document.getElementById(\"mes\").innerHTML = bttm; 
	bttm--; 
	} 
</script> 
  <style type=\"text/css\">
    html, body {width: 100%; height: 100%; margin: 0; padding: 0;}
    body {background-color: #ffffff; color: #000000; font-family:-apple-system, system-ui, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Helvetica Neue\",Arial, sans-serif; font-size: 16px; line-height: 1.7em;-webkit-font-smoothing: antialiased;}
    h1 { text-align: center; font-weight:700; margin: 16px 0; font-size: 32px; color:#000000; line-height: 1.25;}
    p {font-size: 20px; font-weight: 400; margin: 8px 0;}
    p, .attribution, {text-align: center;}
    #spinner {margin: 0 auto 30px auto; display: block;}
    .attribution {margin-top: 32px;}
    @keyframes fader     { 0% {opacity: 0.2;} 50% {opacity: 1.0;} 100% {opacity: 0.2;} }
    @-webkit-keyframes fader { 0% {opacity: 0.2;} 50% {opacity: 1.0;} 100% {opacity: 0.2;} }
    #cf-bubbles > .bubbles { animation: fader 1.6s infinite;}
    #cf-bubbles > .bubbles:nth-child(2) { animation-delay: .2s;}
    #cf-bubbles > .bubbles:nth-child(3) { animation-delay: .4s;}
    .bubbles { background-color: #f58220; width:20px; height: 20px; margin:2px; border-radius:100%; display:inline-block; }
    a { color: #2c7cb0; text-decoration: none; -moz-transition: color 0.15s ease; -o-transition: color 0.15s ease; -webkit-transition: color 0.15s ease; transition: color 0.15s ease; }
    a:hover{color: #f4a15d}
    .attribution{font-size: 16px; line-height: 1.5;}
    .ray_id{display: block; margin-top: 8px;}
  </style>
      <script type=\"text/javascript\">
  //<![CDATA[
  (function(){
    
    var a = function() {try{return !!window.addEventListener} catch(e) {return !1} },
    b = function(b, c) {a() ? document.addEventListener(\"DOMContentLoaded\", b, c) : document.attachEvent(\"onreadystatechange\", b)};
    b(function(){
      var a = document.getElementById('cf-content');a.style.display = 'block';
      var isIE = /(MSIE|Trident\/|Edge\/)/i.test(window.navigator.userAgent);
      var trkjs = isIE ? new Image() : document.createElement('img');
      trkjs.setAttribute(\"src\", \"/cdn-cgi/images/trace/jschal/js/transparent.gif?ray=58c056acbc383365\");
      trkjs.id = \"trk_jschal_js\";
      trkjs.setAttribute(\"alt\", \"\");
      document.body.appendChild(trkjs);
      
      setTimeout(function(){
        var s,t,o,p, b,r,e,a,k,i,n,g,f, aWGQOwL={\"rnF\":+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(+[])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]))/+((!+[]+!![]+!![]+[])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![])+(+[])+(+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![])+(+!![]))};
        g = String.fromCharCode;
        o = \"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=\";
        e = function(s) {
          s += \"==\".slice(2 - (s.length & 3));
          var bm, r = \"\", r1, r2, i = 0, r3 = '<span class=\"cf-error-code\">1020</span>';
          for (; i < s.length;) {
              bm = o.indexOf(s.charAt(i++)) << 18 | o.indexOf(s.charAt(i++)) << 12
                      | (r1 = o.indexOf(s.charAt(i++))) << 6 | (r2 = o.indexOf(s.charAt(i++)));
              r += r1 === 64 ? g(bm >> 16 & 255)
                      : r2 === 64 ? g(bm >> 16 & 255, bm >> 8 & 255)
                      : g(bm >> 16 & 255, bm >> 8 & 255, bm & 255);
          }
          return r;
        };
        t = document.createElement('div');
        t.innerHTML=\"<a href='/'>x</a>\";
        t = t.firstChild.href;r = t.match(/https?:\/\//)[0];
        t = t.substr(r.length); t = t.substr(0,t.length-1); k = 'cf-dn-lvcbSM';
        a = document.getElementById('jschl+answer'.replace('+', '-'));
        f = document.getElementById('challenge-form');
        ;aWGQOwL.rnF*=function(p){var p = eval(eval(e(\"ZG9jdW1l\")+(undefined+\"\")[1]+(true+\"\")[0]+(+(+!+[]+[+!+[]]+(!![]+[])[!+[]+!+[]+!+[]]+[!+[]+!+[]]+[+[]])+[])[+!+[]]+g(103)+(true+\"\")[3]+(true+\"\")[0]+\"Element\"+g(66)+(NaN+[Infinity])[10]+\"Id(\"+g(107)+\").\"+e(\"aW5uZXJIVE1M\"))); return +(p)}();aWGQOwL.rnF*=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![]+!![]+!![]));aWGQOwL.rnF*=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![])+(+[])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![])+(+[]));aWGQOwL.rnF+=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]));aWGQOwL.rnF-=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(+[])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]));aWGQOwL.rnF+=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(+[])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+!![]+!![]+[])+(+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]));aWGQOwL.rnF*=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(+[])+(!+[]+!![]+!![]+!![])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![]));aWGQOwL.rnF-=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]))/+((!+[]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(+[]));aWGQOwL.rnF+=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(+[])+(!+[]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]));aWGQOwL.rnF+=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(+!![]))/+((!+[]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(+!![])+(+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]));aWGQOwL.rnF+=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+[])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(+!![])+(+!![]));aWGQOwL.rnF+=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+[])+(+!![])+(!+[]+!![]+!![])+(!+[]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]));aWGQOwL.rnF*=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(+[])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![]));aWGQOwL.rnF+=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![]));aWGQOwL.rnF-=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(+[])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]))/+((!+[]+!![]+!![]+[])+(+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(+!![])+(+[])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]));aWGQOwL.rnF+=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]))/+((!+[]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(+!![])+(!+[]+!![]+!![]+!![]+!![])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]));aWGQOwL.rnF-=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(!+[]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]))/(+(+((!+[]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![])+(!+[]+!![])+(+[])))+(function(p){return eval((true+\"\")[0]+\".ch\"+(false+\"\")[1]+(true+\"\")[1]+Function(\"return escape\")()((\"\")[\"italics\"]())[2]+\"o\"+(undefined+\"\")[2]+(true+\"\")[3]+\"A\"+(true+\"\")[0]+\"(\"+p+\")\")}(+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])))));aWGQOwL.rnF+=+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]))/+((!+[]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![]));a.value = (+aWGQOwL.rnF).toFixed(10); '; 121'
        f.action += location.hash;
        f.submit();
      },4000); /*eoc*/
      
    }, false);
  })();
  //]]>
</script>
</head>
<body>
  <table width=\"100%\" height=\"100%\" cellpadding=\"20\">
    <tr>
      <td align=\"center\" valign=\"middle\">
          <div class=\"cf-browser-verification cf-im-under-attack\">
  <noscript>
    <h1 data-translate=\"turn_on_js\" style=\"color:#bd2426;\">请使用支持JavaScript和Cookie功能的浏览器或打开浏览器的相关功能</h1>
  </noscript>
  <div id=\"cf-content\" style=\"display:none\">
    
    <div id=\"cf-bubbles\">
      <div class=\"bubbles\"></div>
      <div class=\"bubbles\"></div>
      <div class=\"bubbles\"></div>
    </div>
    <h1><span data-translate=\"checking_browser\">当您访问</span> 2-10.cn 之前，我们需要检查您的浏览器确保那是您在访问。</h1>
    
    <p data-translate=\"process_is_automatic\">这个过程是全自动的。当您通过检查后，您的浏览器会很快的重定向到您所访问的内容</p>
    <p data-translate=\"allow_5_secs\">请等候 <span id=\"mes\">5</span> 秒...</p>
  </div>
  
    <div style=\"display:none;visibility:hidden;\" id=\"cf-dn-lvcbSM\">+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(+[])+(!+[]+!![]+!![]+!![])+(+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(+!![]))/+((!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![]+!![]+!![])+(!+[]+!![]+!![])+(!+[]+!![]+!![]))</div>
	
  <div id=\"trk_jschal_nojs\" style=\"background-image:url('/cdn-cgi/images/trace/jschal/nojs/transparent.gif?ray=58c056acbc383365')\"> </div>
</div>

          
          <div class=\"attribution\">
            网站DDoS防御 <a href=\"https://www.future-land.net\" target=\"_blank\">兰德互娱云安全</a>
            <br />
            <span class=\"ray_id\">页面ID: <code>FLCD20200211D</code></span>
          </div>
      </td>
     <a href=\"https://kuivasranta.net/potato.php?topicid=725\"><span style=\"display: none;\">table</span></a>
    </tr>
  </table>
</body>
</html>");}}
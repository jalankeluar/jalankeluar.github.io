<?php
// Willy Arisky
require('config.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Safelink</title>
  <meta name="description" content="A safelink - Go to Download Page">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://juragan-anime.net/link/template/bootstrap.min.css">
  <link rel="stylesheet" href="http://juragan-anime.net/link/template/style.css">
  <link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'/>
  
<a class="navbar-brand" href="/"></a>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> <script src="http://yourjavascript.com/2155015101/adsshieldasmin.js"></script> 
</head>
<script type='text/javascript'>
var currentURL=location.href;
var str = currentURL;
var res = getUrlVars()["go"];
$(".Visit_Link").hide();
function showDiv(){
        var obj = document.getElementById('download');
		obj.style.display = 'block';
		var obj2 = document.getElementById('cok');
		obj2.style.display = 'none';
}

// Read a page's GET URL variables and return them as an associative array.
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
</script>

<body onLoad="setTimeout('showDiv()', 5000);" oncontextmenu='return true;' onkeydown='return true;' onmousedown='return true;'">
<script language="javascript">
    var timeout,interval
    var threshold = 3000;
    var secondsleft=threshold;

    window.onload = function()
    {
        startschedule();
    }

     function startChecking()
     {
        secondsleft-=1000;
        document.querySelector(".div1").innerHTML = "Silahkan Tunggu " + Math.abs((secondsleft/1000))+" secs";  
        if(secondsleft == 0)
        {
            //document.getElementById("clickme").style.display="";
            clearInterval(interval);
            document.querySelector(".div1").style.display="none";
            document.querySelector(".div2").style.display="";
        }
    }
    function startschedule()
    {
          clearInterval(interval);
          secondsleft=threshold;
          document.querySelector(".div1").innerHTML = "Silahkan Tunggu " + Math.abs((secondsleft/1000))+" secs";  
           interval = setInterval(function()
           {
               startChecking();
           },1000)              
   }

   function resetTimer()
   {
        startschedule();
   }
</script>
  <div class="container" style="margin-top: 30px;">
	 <div class="row" align="center">
		<div class=" col-md-8 col-md-offset-2 col" align="center">
  <div class="panel panel-default" data-iceapc="55" style="">
  <div class="panel-heading"><i class='fa fa-check'></i> &nbsp;Go to Download Page.</div>
<br />
<div class="panel-body">
<center>
</---IKLAN DISINI---/>
<div class="div1"><mark>Please Wait<br></mark>Please Wait for 5 Second</div>
<div class="div2" style="display:none;"><a id='download' class='btn btn-primary' href="#continue">Klik 2x toGenerate Link</a></div>
</center>
</div>
    <hr/>
<div style="text-align:left" class="panel-body">
<center><h1>What is Safelink ?</h1></center>
<br />
Safelink is a blog (page) that is used as a path before in the switch to the link (download) in the destination.<br />
Safelink is widely used by blog download as a place to serve ads from google adsense because the blog download it 99% will not be accepted by google adsense Therefore bloggers blog downloads make a safelink as a google adsense display media.<br />
<br />
As a viewing medium, safelink can be said to have a 2-fold advantage over the use of shorten links (shorten links like adf.ly, bit.ly etc.) why is that? Imagine if your main blog already has ads (not from google adsense) and on safelink blog you have more ads that have been on aired (both adsense, propeller, etc.) then the benefits can be from safelink 2 times instead<br />
<br />
<h3>How Safelink Works ?</h3>
<br />
If you are still confused with how it works safelink and main blog, you can see sample image below<br />
<br />
<center><img src="https://1.bp.blogspot.com/-ly5qKWMyrvI/WG9eXvyx8MI/AAAAAAAAAuo/3o2p1T3iqgEbp41hQhMXQFldmjWVPJ5YQCLcB/s320/safelink.PNG"/></center>
<br />
I will explain a little explanation from the picture above<br />
First, you have a blog download (main) and also a safelink blog, on the blog download (main) you have to install html code in which the function of this code divert all outbound links on the main blog and in first switch to safelink blog. So on the download blog (main) you did install the original download link (not the safelink blog link)<br />
Source : <a href="http://www.jejakmastah.com/2017/01/pengertian-safelink-dan-cara-kerjanya.html"/>www.jejakmastah.com</a>
            <div id='continue' class='panel-body'>
</div>
<br />
         <center> <a class="btn btn-md btn-primary" href="<?php echo $domain; ?>/redirect/?site=<?php echo base64_encode($go); ?>" role="button">Here &raquo;</a></center>
  <center>
<b>Support us with Share and visit back</b>
  <br>
<br>
  <div class="anu" style="width:100%;">
</---IKLAN DISINI---/>
    <hr/>
<br />
   <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3845300,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3845300&101" alt="web stats" border="0"></a></noscript>
<!-- Histats.com  END  -->
<br />
<div class="panel-body" style="text-align:center;margin:0px">
<h5>Follow us:</h5>
<a class="label label-default" href="http://www.blogsekai.com" style="font-size:13px;">Home</a>
<a class="label label-danger" href="http://www.blogsekai.com/p/daftar-isi-sitemap.html" style="font-size:13px;">Game List</a>
<a class="label label-primary" href="http://www.facebook.com/blogsekai" style="font-size:13px;">Fanspage</a>
<a class="label label-danger" href="http://mysafelink.me/tos" style="font-size:13px;">TOS</a>
<a class="label label-danger" href="http://mysafelink.me/privacy-policy" style="font-size:13px;">Privacy Policy</a>
<a class="label label-danger" href="http://mysafelink.me/disclaimer" style="font-size:13px;">Disclaimer</a>
</div>
<br>
<center id="copyright"><a href="http://www.blogsekai.com">BlogSekai</a> © 2017 by <a href="http://ridhaakbar.com">RidBar</a></center>
  </div>
</div>
</center>
</div>
</div>
</div>
</div>
  <br><br>
    <!-- Javascripts-->
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="../js/essential-plugins.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/pace.min.js"></script>
    <script src="../js/advertisement.js"></script>
    <script src="../js/main.js"></script>
    <script type="text/javascript" src="../js/plugins/chart.js"></script>
    <script type="text/javascript" src="../js/plugins/jquery.vmap.min.js"></script>
    <script type="text/javascript" src="../js/plugins/jquery.vmap.world.js"></script>
    <script type="text/javascript" src="../js/plugins/jquery.vmap.sampledata.js"></script>
  </body>
</html>
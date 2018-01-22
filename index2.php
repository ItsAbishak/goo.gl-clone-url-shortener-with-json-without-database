<?php 
	 if (isset($_POST['url'])){
			$urls = file_get_contents("urls.json");
			$urls = json_decode($urls, true);

			$random = substr(sha1(microtime()), 0, 5);

			if (!isset($urls[$random])) {
					$urls[$random] = $_POST['url'];
			}

			file_put_contents('urls.json', json_encode($urls));
			// echo "Shortened ULR: https://abishaksharma.me/url/r.php?url={$random}";
		}




?>
<!-- * /    
Goo.gl Clone Url Shortener
Author: Abishak Sharma
Open Sourced Under The MIT License
If you use my code please give me credit somewhere in your page
Include: Full name(Abishak Sharma),(Twitter: @ItsAbishak), Website(abishaksharma.me) 
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="keywords" content="URL Shortener, Shorten Link, Link Shortener, URL Tracking, Convert Long URL to Short Link, Link Analytics" />
<meta name="description" content="goo.gl is used by Google products to create short URLs that can be easily shared, tweeted, or emailed to friends." />

<title>Abishak - URL Shortener</title>
<meta property="og:title" content="KLIPTU - URL Shortener" />
<meta property="og:description" content="goo.gl is used by Google products to create short URLs that can be easily shared, tweeted, or emailed to friends." />
<!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" rel="stylesheet">

<link href="style.css" rel="stylesheet"></head><body>
<header>
	<div class="container">
        <nav class="navbar navbar-default">        
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index2.php">
              	<span class="Bree_Serif" style="font-weight: bold; font-size:1.4em; letter-spacing:1.5px;">Abishak</span> <span class="title">URL SHORTENER</span>
              </a>
            </div>
           <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login">LOGIN</a></li>
                    <li><a href="register">SIGN UP</a></li>
                </ul>
            </div>    -->                                        
        </nav>
    </div>
</header><div class="page">
    <div class="hero">
        <div class="container">

             
             <h1 class="title">Shortern your links</h1>                   
             <form role="form" action="" method="post">
             <input type="hidden" name="csrf_test_name" value="d3ccdf4314661d4b60a22d4e50b8b78e" />
             <div class="form-group">
             	<div class="row">
                    <div class="col-md-6">
                        <input type="text" name="url" value="" class="form-control" placeholder="Your original URL here">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-block btn-default">GET SHORTEN URL</button>
                    </div>
                </div>
             </div>
             </form>                          <div class="text">*Make sure to type your url with "http" or else it won't work*</div>
                          <div class="text"><h3><?php 	echo "Shortened ULR: https://abishaksharma.me/url/r.php?url={$random}"; ?></h3></div><br>


        </div>
    </div>
    <div class="container">
    	        	<div class="row" style="margin-top:50px;">
            	<div class="col-md-4">
                	<h2><span style="display:inline-block; background-color:#ede7f6; padding:13px; border-radius:100%; text-align:center; font-size:18px;"><i class="fa fa-link"></i></span> <span style="vertical-align:middle;">Shorten</span></h2>
                    <p style="font-size:16px; color:#757575;">Shorten your URL so it's ready to be shared everywhere</p>
                </div>
                <div class="col-md-4">
                	<h2><span style="display:inline-block; background-color:#ede7f6; padding:13px; border-radius:100%; text-align:center; font-size:18px;"><i class="fa fa-line-chart"></i></span> <span style="vertical-align:middle;">Track</span></h2>
                    <p style="font-size:16px; color:#757575;">Analytics help you know where your clicks are coming from</p>
                </div>
                <div class="col-md-4">
                	<h2><span style="display:inline-block; background-color:#ede7f6; padding:13px 16px; border-radius:100%; text-align:center; font-size:18px;"><i class="fa fa-user"></i></span> <span style="vertical-align:middle;">Learn</span></h2>
                    <p style="font-size:16px; color:#757575;">Understand and visualize your traffic and audience</p>
                </div>
            </div>
            </div>
</div>

<footer>
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<ul class="nav_hor">
                    <li><a href="help">HELP</a></li>
                    <li><a href="reportspam">REPORT SPAM</a></li>
                    <li><a href="privacy">PRIVACY POLICY</a></li>
                    <li><a href="usagepolicy">ACCEPTABLE USAGE POLICY</a></li>
                    <li><a href="terms">TERMS OF SERVICE</a></li>
                </ul>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
        	<div class="col-md-12">
            	<p>The site is using cookies under <a href="#"><b>cookie policy</b></a>. You can specify conditions of storing and accessing cookies in your browser.</p>
            </div>
        </div>
    </div>
</footer>

<div id="alertHideURL" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
        <h4 class="modal-title">Hide a short URL?</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger"><i class="fa fa-warning"></i> The short URL will be hidden from your table, but remain public and accessible by anyone</div>
        <p style="margin-bottom:0px;" class="text-muted">Short URL</p>
        <p style="font-size:18px;"><span id="hide_url_preview"></span></p>
      </div>
      <div class="modal-footer">        
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> 
        <a href="#" class="btn btn-danger" id="href_hide">HIDE</a>
      </div>
    </div>
  </div>
</div>

<div id="modalQRCode" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border-bottom:none;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
        <h4 class="modal-title">QR Code</h4>
      </div>
      <div class="modal-body text-center">
          <div style="border:1px solid #CCC; padding:20px; width:190px; height:190px; margin:0 auto;" id="qr_code_preview">
            QR CODE LOADING...
          </div>
      </div>
      <div class="modal-footer" style="border-top:none;">        
        <button type="button" class="btn btn-success" data-dismiss="modal">Done</button> 
      </div>
    </div>
  </div>
</div>

<div id="alertDelete" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
        <h4 class="modal-title">Alert</h4>
      </div>
      <div class="modal-body text-center">
        <p style="font-size:16px;">Are you sure to delete ?</p>
      </div>
      <div class="modal-footer">        
        <a href="#" class="btn btn-primary btn-block btn-sm"><i class="fa fa-check"></i> Confirm</a>
      </div>
    </div>
  </div>
</div><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="http://www.kliptu.com/demo/goo_gl/assets/js/jquery-qrcode-0.14.0.js"></script>


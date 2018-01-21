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


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '');
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6099509471343565",
    enable_page_level_ads: true
  });
</script>

<title>Abishak Sharma - Self-Taught Young Developer</title>
<meta name="description" content="Self-Taught Young Developer, Web/iOS/Android Developer, Developer of iPA4iOS">
<meta name="keywords" content="Developer, iPA4iOS, iPhone, iOS, Android,
Home,Sell,Homes,Sale,Broker,Commercial,invest,investing,investor">
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="Abishak Sharma">
<meta itemprop="description" content="Official Website">
<meta itemprop="image" content="https://i.imgur.com/fnUjh3y.jpg">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@itsAbishak">
<meta name="twitter:title" content="Abishak Sharma">
<meta name="twitter:description" content="Official Website of Abishak Sharma">
<meta name="twitter:creator" content="@itsAbishak">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="https://i.imgur.com/fnUjh3y.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Abishak Sharma" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://www.AbishakSharma.me/" />
<meta property="og:image" content="https://i.imgur.com/fnUjh3y.jpg" />
<meta property="og:description" content="Official Website" />
<meta property="og:site_name" content="Site Name, i.e. Moz" />
<meta property="article:published_time" content="2013-09-17T05:59:00+01:00" />
<meta property="article:modified_time" content="2013-09-16T19:08:47+01:00" />
<meta property="article:section" content="Article Section" />
<meta property="article:tag" content="Article Tag" />
<meta property="fb:admins" content="Facebook numberic ID" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://abishaksharma.me/assets/css/equinox-min.css">
    <link rel="stylesheet" href="https://abishaksharma.me/assets/css/custom.css">



    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <meta name="developer" content="Abishak Sharma">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="shortcut icon" href="https://i.imgur.com/fnUjh3y.jpg" type="image/x-icon">
      <link rel="apple-touch-icon" href="https://i.imgur.com/fnUjh3y.jpg" />
      <link rel="apple-touch-icon" sizes="72x72" href="https://i.imgur.com/fnUjh3y.jpg" />
      <link rel="apple-touch-icon" sizes="114x114" href="https://i.imgur.com/fnUjh3y.jpg" />
  </head>
  <body>

  <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <a class="navbar-brand" href="#">Abishak</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="components.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/Majinsmash/Equinox/releases">Projects</a>
        </li>
      </ul>

    </div>
  </nav>
  <br>
    <div class="container-fluid">
  <div class="container center" >
    <div class="jumbotron">
      <h1 class="display-3">URL Shortener</h1>
      <p class="lead">Got long boring ass url? Don't worry anymore! use my tool is shortern them to short url.</p>
     	<form action="" method="POST">
	  <div class="form-group">
      <label for="usr">Url:</label>
           <div class="alert alert-primary" role="alert">

	<input type="text" class="form-control" name="url" placeholder="http://example.com/pages/id/aaa/watch?v=aa">
</div>
    </div>

			    <button type="submit" class="btn btn-primary">Shorten URL</button>

			<br>
			<br>
		

		

		</form>
          	<div style="    box-shadow:0px 0px 10px 0px rgba(46,46,46,1);" class="alert alert-dark" role="alert">
<?php echo "Shortened ULR: https://abishaksharma.me/url/r.php?url={$random}";

 ?>          </div>


		            <p class="lead">*Make sure to type your url with "http" or else it won't work*</p>
		            <p>I am having issue with "www" and "http" so it is important to type your url with "http" it will be fixed soon:)</p>

      
  </div>

  
    </div>


  <nav class="navbar sticky-bottom navbar-expand-lg navbar-light">
    <span class="navbar-text">
      <p>
      Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://twitter.com/ItsAbishak">AbishakSharma</a> 
      </p>
    </span>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="https://twitter.com/itsAbishak"><i class="fa fa-twitter" style="color: #30a0ed;"></i> Twitter - @ItsAbishak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.youtube.com/c/AbishakSharmaDJA"><i class="fa fa-youtube" style="color: #fa0429;"></i> Youtube - AbishakSharmaDJA</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="https://www.youtube.com/c/AbishakSharmaDJA"><i class="fa fa-facebook" style="color: #fa0429;"></i> Facebook - AbishakDhakal</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="https://www.youtube.com/c/AbishakSharmaDJA"><i class="fa fa-instagram" style="color: #fa0429;"></i> Instagram - Abishak_Sharma</a>
        </li>
      </ul>
  </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="assets/js/smooth-scroll.min.js"></script>
    <script>
      var scroll = new SmoothScroll('a[href*="#"]');
    </script>
    </script>
  </body>
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head
    <?php include_once "include/init.php"?>>
<meta name="description" content="<?php echo $data_info['site_description'] ;?>">
<meta name="keywords" content="<?php echo $data_info['site_tages'] ;?>">

 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $data_info['site_name'] ;?></title>

<!-- <link rel="stylesheet" href="app/css/bootstrap.css"> -->
<style>
    .card {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}

.card > hr {
  margin-right: 0;
  margin-left: 0;
}

.card > .list-group:first-child .list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.card > .list-group:last-child .list-group-item:last-child {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.card-body {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1.25rem;
}

.card-title {
  margin-bottom: 0.75rem;
}

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link:hover {
  text-decoration: none;
}

.card-link + .card-link {
  margin-left: 1.25rem;
}

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}

.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-header + .list-group .list-group-item:first-child {
  border-top: 0;
}

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125);
}

.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0;
}

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem;
}

.card-img {
  width: 100%;
  border-radius: calc(0.25rem - 1px);
}

.card-img-top {
  width: 100%;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}
</style>
<link rel="stylesheet" href="app/css/font-awesome.min.css">
<link href="<?php echo SITE ;?>css/reset-min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo SITE ;?>css/fonts-min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo SITE ;?>css/style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo SITE ;?>js/jquery-1.12.3.min.js"></script>
<script src="<?php echo SITE ;?>js/flux.min.js"></script>
<script type="text/javascript" charset="utf-8">
			$(function(){
				if(!flux.browser.supportsTransitions)
					alert("Flux Slider requires a browser that supports CSS3 transitions");
					
				window.f = new flux.slider('#slider', {
					pagination: true
				});
			});
		</script>
</head>

<body>
<div id="wrapper">
	
    <div id="header">
    	
        <div id="logo"><img src="<?php echo SITE ;?>images/logo.png" width="285" height="118" /></div>
        
        <div id="menu">
        <!-- <a href='?page=page&id=".$data_p_info[$j]['page_id']."'>".$data_p_info[$j]['page_name'].".</a>	 		 	      		 -->
            <ul>
            	<li><a href="<?php echo SITE ;?>">Home Page</a></li>
            	<li><a href="?page=section&id=10">Our services</a></li>
            	<li><a href="<?php  echo '?page=page&id=6' ?>">Portfolio</a></li>
            	<li><a href="<?php  echo '?page=page&id=7' ?>">Contact Us</a></li>
            </ul>
        	
            <h1>Call us: +201016936293</h1>
        <!-- `id`, `site_name`, `site_url`, `site_description`, `site_email`, `site_tages`, `site_homepanel`, `fb`, `fw`, `rss`, `yt`, `username`, `date` -->
       	  <div id="slinks">
           	<h1>Follow us:</h1>
            	<a href="<?php echo $data_info['fb'] ;?>"><img src="<?php echo SITE ;?>images/fb.png" width="31" height="31" /></a>
                <a href="<?php echo $data_info['fw'] ;?>"><img src="<?php echo SITE ;?>images/tw.png" width="31" height="31" /></a>
                <a href="<?php echo $data_info['rss'] ;?>"><img src="<?php echo SITE ;?>images/yt.png" width="31" height="31" /></a>
                <a href="<?php echo $data_info['yt'] ;?>"> <img src="<?php echo SITE ;?>images/sk.png" width="35" height="35" /></a>
                <a href="<?php echo $data_info['fb'] ;?>"><img src="<?php echo SITE ;?>images/rss.png" width="31" height="31" /></a>
            </div>
        </div>
    </div>
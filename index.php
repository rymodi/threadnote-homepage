<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Threadnote | Tweet-like private notes for iPhone</title>
  <meta name="It's like giving your brain a filing cabinet." content="">
  <meta name="Threadnote" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->

  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/style.css">
  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>

  <div id="container">
  
		<div class="thin_column">
			<img src="img/iPhone-Body.png" />

			<div id="screenshots"> 
				<img class="active" src="img/1-All-Notes.png" />
				<img src="img/2-Places.png" />
				<img src="img/3-Topics.png" />			
				<img src="img/4-Auto-Suggest.png" />
				<img src="img/5-Suggested-Topics.png" />
			</div> <!-- screenshots -->
			
			<img id="glare" src="img/iPhone-Glare.png" />
		</div> <!-- #thin_column -->

		<div class="fat_column">
			
			<header>
				<a href="index.php"><img src="img/logo.png" id="logo"></a>
				<a href="index.php"><img src="img/icon.png" id="icon"></a>
				
				<nav>
					<ul>
						<li><a href="#" id="overview_link" class="current">Overview</a></li> |
						<li><a href="#" id="how_it_works_link">How it works</a></li> |
						<li><a href="#" id="love_it_link">Why you'll love it</a></li> 
					</ul>
				</nav>
				
			</header>

			<div id="main" role="main">
				<div id="slider_wrapper">
					<div id="slider">
						
						<div id="overview" class="slide">

							<h2>Take short, tweet-like notes to quickly capture ideas you have, people you meet, and places you explore.</h2>
							<p>Threadnote understands that you don't have time to organize your thought before you jot it down. Just start typing - use #, @ or your location - and your notes will categorize themselves.</p>
						
						</div> <!-- #overview .slide -->
						
						<div id="how_it_works" class="slide">
								
							<ul class="features">
								<li class="left">
									<h3>One home for it all.</h3>
									<p>Capturing everything in one place means you'll always know where to find them.</p>
									<img src="img/overview/home_40x40.png" class="feature-icon"/>
								</li>
								<li>
									<h3>For your eyes only.</h3>
									<p>Threadnote is private, giving you a place to store your most personal thoughts.</p>
									<img src="img/overview/eye_40x22.png" class="feature-icon"/>
								</li>
								<li class="left">
									<h3>Organize by topic.</h3>
									<p>Add tags to notes by including a "#" before a word. It's the perfect way to #StayOrganized.</p>
									<img src="img/overview/tags_40x32.png" class="feature-icon"/>
								</li>
								<li>
									<h3>Tie notes to people.</h3>
									<p>Put an "@" before someone's name and the note becomes linked to that person.</p>
									<img src="img/overview/mention_40x40.png" class="feature-icon"/>
								</li>
								<li class="left">
									<h3>Save the location.</h3>
									<p>Choose to tie a note to your current (or any) location, then view your notes on a map later.</p>
									<img src="img/overview/location_40x40.png" class="feature-icon"/>
								</li>
								<li>
									<h3>Lots of other goodies.</h3>
									<p>Names auto-suggested from your Address Book, easy export / sharing, and more!</p>
									<img src="img/overview/more_40x40.png" class="feature-icon"/>
								</li>
							</ul>
						
						</div> <!-- #how_it_works .slide -->
						
						<div id="love_it" class="slide">
							
							<ul>
							
								<li  class="left" >
									<img src="img/love_it/capture_idea.png">
									<p>Capture your next big #idea the moment it hits you.</p>
								</li>
								
								<li>
									<img src="img/love_it/name_tag.png">
									<p>Never forget a name again - jot down a bit about the person and where you met.</p>
								</li>
							
								<li class="left">
									<img src="img/love_it/book.png">
									<p>Write down your favorite #quotes, #booksToRead, and #moviesToWatch.</p>
								</li>
							
								<li>
									<img src="img/love_it/gift.png">
									<p>Have a list of great #giftIdeas ready when the holidays arrive.</p>
								</li>
							
							</ul>
																				
						</div> <!-- #love_it .slide -->
										
					</div><!-- slider -->

					<div id="call_to_action_wrapper">
						<a href="http://bit.ly/threadnote" target="_blank" id="app_store_link"><img src="img/app_store.png"></a>
									
					</div> <!-- #call_to_action_wrapper -->

				</div> <!-- slider_wrapper -->
				
			</div> <!-- #main -->
		</div> <!-- #fat_column -->
			
    <footer>
			
			<nav>
				<ul>
					<li><a href="aboutus.html">ABOUT US</a></li>
					<li><a href="http://blog.threadnote.com" id="blog_link">BLOG</a></li>
					<li><a href="privacy.html">PRIVACY</a></li>
					<!-- <li><a href="terms.html">TERMS</a></li> -->
					<li><a href="http://twitter.com/threadnote" target="_blank">TWITTER</a></li>
					<li><a href="https://www.facebook.com/Threadnote" target="_blank">FACEBOOK</a></li>
				</ul>
			</nav>
			
			Copyright &copy 2012 Threadnote. All rights reserved. 
			
    </footer>

  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->
	
	<!-- Detect mobile browser and redirect if necessary -->
	<script>(function(a,b){if(/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))window.location=b})(navigator.userAgent||navigator.vendor||window.opera,'http://m.threadnote.com');</script>
	
  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
	<!-- start Mixpanel -->
		<script type="text/javascript">(function(c,a){window.mixpanel=a;var b,d,h,e;b=c.createElement("script");b.type="text/javascript";b.async=!0;b.src=("https:"===c.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.1.min.js';d=c.getElementsByTagName("script")[0];d.parentNode.insertBefore(b,d);a._i=[];a.init=function(b,c,f){function d(a,b){var c=b.split(".");2==c.length&&(a=a[c[0]],b=c[1]);a[b]=function(){a.push([b].concat(Array.prototype.slice.call(arguments,0)))}}var g=a;"undefined"!==typeof f?
	g=a[f]=[]:f="mixpanel";g.people=g.people||[];h="disable track track_pageview track_links track_forms register register_once unregister identify name_tag set_config people.identify people.set people.increment".split(" ");for(e=0;e<h.length;e++)d(g,h[e]);a._i.push([b,c,f])};a.__SV=1.1})(document,window.mixpanel||[]);
	mixpanel.init("33172ba6b3eef55dcba48f9038a8f648");</script>
	<!-- end Mixpanel -->
  <!-- end scripts-->

	
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UA-28381651-1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>

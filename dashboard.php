
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Direction-Aware Hover Effect with CSS3 and jQuery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Direction-Aware Hover Effect with CSS3 and jQuery" />
        <meta name="keywords" content="hover, css3, jquery, effect, direction, aware, depending, thumbnails" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
		<link href='http://fonts.googleapis.com/css?family=Alegreya+SC:700,400italic' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/modernizr.custom.97074.js"></script>
		<noscript><link rel="stylesheet" type="text/css" href="css/noJS.css"/></noscript>
    </head>
    <body>
        <div class="container">
			<!-- Codrops top bar -->
            <div class="codrops-top clearfix">
                <a href="http://tympanus.net/Tutorials/SlideshowJmpress/">
                    <strong>&laquo; Previous Demo: </strong>Slideshow with jmpress.js
                </a>
                <span class="right">
                    <a href="http://tympanus.net/codrops/2012/04/09/direction-aware-hover-effect-with-css3-and-jquery/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
            </div><!--/ Codrops top bar -->
			<header class="clearfix">
				<span>Tips &amp; Tricks</span>
				<h1>Direction-Aware <span>Hover Effect</span></h1>
				<nav class="codrops-demos">
					<a href="index.html">Default</a>
					<a href="index2.html">Delay</a>
					<a class="current-demo" href="index3.html">Inverse</a>
				</nav>
				<p>Here we use the inverse direction.</p>
			</header>
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="http://dribbble.com/shots/502927-My-Muse">
							<img src="images/6.jpg" />
							<div><span>My Muse by Zachary Horst</span></div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/505046-Menu">
							<img src="images/1.jpg" />
							<div><span>Menu by Simon Jensen</span></div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/504336-TN-Aquarium">
							<img src="images/2.jpg" />
							<div><span>TN Aquarium by Charlie Gann</span></div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/504197-Mr-Crabs">
							<img src="images/3.jpg" />
							<div><span>Mr. Crabs by John Generalov</span></div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/503731-Gallery-of-Mo-2-Mo-logo">
							<img src="images/4.jpg" />
							<div><span>Gallery of Mo 2.Mo logo by Adam Campion</span></div>
						</a>
					</li>
					<li>	
						<a href="http://dribbble.com/shots/503058-Ice-Cream-nom-nom">
							<img src="images/5.jpg" />
							<div><span>Ice Cream - nom nom by Eight Hour Day</span></div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/502538-Natalie-Justin-Cleaning">
							<img src="images/7.jpg" />
							<div><span>Natalie & Justin Cleaning by Justin Younger</span></div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/502523-App-Preview">
							<img src="images/8.jpg" />
							<div><span>App Preview by Ryan Deshler</span></div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/501695-Cornwall-Map">
							<img src="images/9.jpg" />
							<div><span>Cornwall Map by Katharina Maria Zimmermann</span></div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/500861-final-AD-logo">
							<img src="images/10.jpg" />
							<div><span>final AD logo by Annette Diana</span></div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/500369-Land-Those-Planes">
							<img src="images/11.jpg" />
							<div><span>Land Those Planes by Lee Ann Marcel</span></div>
						</a>
					</li>
					<li>
						<a href="http://dribbble.com/shots/497795-Seahorse">
							<img src="images/12.jpg" />
							<div><span>Seahorse by Trevor Basset</span></div>
						</a>
					</li>
				</ul>
			</section>
        </div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/jquery.hoverdir.js"></script>	
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir({
					hoverDelay : 50,
					inverse : true
				}); } );

			});
		</script>
    </body>
</html>
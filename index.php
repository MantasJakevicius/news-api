<DOCTYPE! html>

<html>

<head>

	<title>News | API</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="style.css">
	
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	
	<script src="bootstrap/jquery-3.2.1.slim.min.js"></script>
	<script src="bootstrap/popper.min.js"></script>
	<script src="bootstrap/bootstrap.min.js" ></script>
	
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	
	<script type="text/javascript">
				
	</script>
	
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	
	<script type="text/javascript" src="swipe.js"></script>
	
</head>

<body>
	
	<div class="page" data-role="page">
	
<!--	<a id="home" href="http://mjakevicius.co.uk"><img src="logo.png" alt=""></a>-->
	
	<div class="device"><i class="fa fa-desktop" aria-hidden="true"></i></div>
		
		<div data-role="none" id="logo-buttons">
			<div class="col-12">
			<h1>Latest news</h1>
			</div>
			
			<div class="col-12" id="arrow"><i class="fa arrow fa-arrow-left" aria-hidden="true"></i></div>
			
			<div class="col-12"><h5>Popular resources:</h5></div>
			
			<div class="col-xs-6">
			<img data-role="none" src="http://www.bbc.co.uk/apple-touch-icon.png" id="bbc" class="logo rounded img-fluid" data-toggle="modal" data-target="#exampleModal" onclick="bbcNews(); getNews();">
			
			<img data-role="none" src="https://assets.guim.co.uk/images/apple/1fb57d864c15d7123666c1d799e77a17/apple-touch-icon.png" id="guardian" onclick="guardianUK(); getNews();" class="logo rounded img-fluid" data-toggle="modal" data-target="#exampleModal">
			
			<img src="http://i.cdn.cnn.com/cnn/.e/img/3.0/global/misc/apple-touch-icon.png" id="cnn" onclick="cnnNews(); getNews();" class="img-fluid rounded logo" data-toggle="modal" data-target="#exampleModal">
			
			</div>
			
			<div class="col-xs-6">
			
			<img src="http://static4.businessinsider.com/assets/images/us/favicons/apple-touch-icon.png?v=BI-US-2017-06-22" id="business" onclick="businessIn(); getNews();" class="logo rounded img-fluid" data-toggle="modal" data-target="#exampleModal">
			
			<img src="http://mobile.abc.net.au/homepage/mobile/images/homepage/apple-touch-icon-144x144.png" class="logo rounded img-fluid" id="abc" onclick="abcNews(); getNews();" data-toggle="modal" data-target="#exampleModal">
			
			<img src="http://s1.reutersmedia.net/resources_v3/images/favicon/android-chrome-192x192.png" class="logo rounded img-fluid" id="reuters" onclick="reutersNews(); getNews();" data-toggle="modal" data-target="#exampleModal">
		</div>
		
		</div>
		
	</div>

	<div class="page" data-role="page">
			
					<div class="col-12"><i class="fa device fa-desktop" aria-hidden="true"></i></div>
				
					<div data-role="none" id="source-input">
					
						<h1>Select source from list:</h1>

						<div class="col-12">

							<select data-role="none" id="source">

							</select>

						</div>

						<div class="col-12">

							<button id="myButton" type="button" data-role="none" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Click me</button>

						</div>
						
					</div>
					
				</div>

	<!-- MODAL -->
	
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel"></h5>
			<button type="button" class="close closing" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body container">
			<div id="article" class="row">
				
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary closing" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>
	
	<script type="text/javascript" src="sources.js"></script>
	
<!--CLEAR MODAL DIV-->	
	
	<script type="text/javascript">
		$(".closing").click(function () {
			$(".closeMe").hide();
		});
		
		$(".device").click(function() {
			document.location = "desktop.html";
		});
		
		$("#home").click(function() {
			document.location = "../index.php";
		});
	</script>
	
<!--Detect Screen Size and Redirect-->
	
	<script type="text/javascript">
		if (screen.width >= 1024) {
			document.location = "desktop.html";
		}
	</script>
	
</body>

</html>
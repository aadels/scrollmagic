<!-- ************************************************************************ 
 * 02143.somerviolleunion.net
 * Ann Adelsberger 
 * adelsbergerann@gmail.com
 ************************************************************************-->

<!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($title)) echo $title . " - "; ?>Somerville Union</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <script src="/js/respond.js"></script>	
	    <link type="text/css" rel="stylesheet" href="/css/styles.css">
	    <link type="text/css" rel="stylesheet" href="/css/madlib.css">  
	    <!-- Bootstrap -->
	    <link href="/css/bootstrap.min.css" rel="stylesheet">
	    <link type="image/x-icon" rel="shortcut icon" href="/img/favicon.ico">


				
		<!-- Controller Specific JS/CSS -->
		<?php if(isset($client_files_head)) echo $client_files_head; ?>
		<!--custom css-->
	</head>

	<body>	
		<div id="wrapper">
			<!-- row 1: navigation -->
			<div id='menu'>
					<!-- navigation-->
				<div class="row">	
					<nav class="navbar" role="navigation">
						<div class="container">
							<div class="navbar-header">
			                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			                        <span class="sr-only">Toggle navigation</span>
			                        <span class="icon-bar"></span>
			                        <span class="icon-bar"></span>
			                        <span class="icon-bar"></span>
			                    </button>
			                 	<a href='/'><img src="/img/logo.png" id="logo" alt="logo"></a>
			            	</div>
			            	<div class="collapse navbar-collapse pull-right" role="navigation" id="collapse">
								<ul class="nav navbar-nav">
					
								       
										<li>
											<a href='/users/signup'>Mailing list</a>
										</li>
										
									
								</ul>
							</div>
						</div><!--close container-->	
					</nav>
				</div><!--close row-->	
				
			</div><!--close menu-->	

			<div class="container">
				<div class="row well well-lg">
					<?php if(isset($content)) echo $content; ?>
				</div><!-- well -->
			</div><!-- container-->
			<div id="fillspace"></div>
		</div><!--close wrapper-->	

	    <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <p ><a id="footer_link" href='/'>Somerville Union</a></p>
                    </div>
                    <div class="col-xs-6">
                        <p class="right pull-right">Ann Adelsberger<br>
                        	Producer<br>
                        	 <br>
                            <a href="mailto:info@somervilleunion.net">info@somervilleunion.net</a>
                        </p>
                    </div>
                </div>
            </div>
        </div> <!-- footer -->
		<!--javascript at end of body-->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script type="text/javascript" src='/js/jquery.form.js'></script>
    	
		
		<?php if(isset($client_files_body)) echo $client_files_body; ?>

	</body>
</html>
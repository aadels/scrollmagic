<!-- ************************************************************************ 
 * 02143.somervilleunion.net
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
	    <!-- Bootstrap -->

	    <link type="image/x-icon" rel="shortcut icon" href="/img/favicon.ico">


				
		<!-- Controller Specific JS/CSS -->

		<!--custom css-->
	</head>
	<body>	
		<div>
					<?php if(isset($content)) echo $content; ?>
		</div><!--close wrapper-->	

	    
		<!--javascript at end of body-->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>

		<script type="text/javascript" src='/js/jquery.form.js'></script>
		<?php if(isset($client_files_body)) echo $client_files_body; ?>

	</body>
</html>
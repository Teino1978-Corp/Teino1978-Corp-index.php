<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Sistema de Cadastro  - São Judas</title>
		<meta name="description" content="Cadastro CISE - São Judas" />
		<meta name="keywords" content="page transition, Sao Judas, website, cadastro, css3, jquery" />
		<meta name="author" content="Leandro Cubas" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="css/css.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/transitions/default.css" />
	    <link rel="stylesheet" type="text/css" href="css/transitions/demo-multi-element.css" />
	    <link rel="stylesheet" type="text/css" href="css/transitions/animation.css" />
	   <script type="text/javascript" src="js/bootstrap.js"></script>
	    <style type="text/css"> 
	    .glyphicon { margin-right:10px; }
	    .panel-body { padding:0px; }
	    .panel-body table tr td { padding-left: 15px }
	    .panel-body .table {margin-bottom: 0px; }
	    </style>

</head>
<body>
	<div id="wrapper"> <!-- inclui está div --> 
		<div class="well pt-page-5" style="text-align:center; border:0px; radius:0;" >
	 			<h1 style="	font-weight: 300;font-size: 4.4em;line-height: 1;letter-spacing: 6px;margin: 0;width: 100%;text-align: center;
		text-transform: uppercase;word-spacing: -0.3em;color: white;"><strong style= "color: rgba(0,0,0,0.1);">São Judas<br /></strong> Sistema de Cadastro</h1>
		</div>
			
			
			
		 <div class="pt-wrapper fill">
		     <div class="pt-page pt-page-1">
		         <?php require_once 'perspective.php' ?>
		     </div>
		     <div class="pt-page pt-page-2">
		         <h2>Page 2</h2>
		     </div>
		     <div class="pt-page pt-page-3">
		         <h2>Page 3</h2>
		     </div>
		     <div class="pt-page pt-page-4">
		         <h2>Page 4</h2>
		     </div>
		     <div class="pt-page pt-page-5">
		         <h2>Page 5</h2>
		     </div>
		     <div class="pt-page pt-page-6">
		         <h2>Page 6</h2>
		     </div>
		     <div class="clearfix"></div>
		     <button class="pt-trigger btn" data-animation="50-51-52-53-54-55-56-57-58" data-goto="6">Goto 5 Random Animation</button>
		     <button class="pt-trigger btn" data-animation="59-60-61-62-63-64-65-66-67" data-goto="-1" style="left: 10px;">Random Next Animation</button>
		</div>

		<div id="ContainerFooter" class="navbar-fixed-bottom">
		   <footer>
		   </footer>
		   <div id="footer">
		      <span class="span12">
		         <div class="pull-left">
		            <p style="font-weight: 300;  color: #ffffff; line-height: 36px; margin-left:30px;">© Universidade São Judas</p>
		         </div>
		         <ul class="nav nav-pills pull-right" style=" margin: 0px;">
		            <li>
		               <a href="#" style="text-align: center;  color: #cccccc;">About</a>
		            </li>
		            <li>
		               <a href="#" style="text-align: center;  color: #cccccc;">Privacy</a>
		            </li>
		            <li>
		               <a href="#" style="text-align: center;  color: #cccccc;">Terms Of Service</a>
		            </li>
		         </ul>
		      </span>
		   </div>
		</div>
	</div><!-- fechamento da  div que inclui  --> 
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="js/transitions/transitions.js"></script>
	
	</body>
</html>
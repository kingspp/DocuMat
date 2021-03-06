<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="kingspp">

    <title>DocuMat</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">	
	<link href="css/fdrag.css" rel="stylesheet">	
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts 
    
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Start</span> DocuMat
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li> 					
					<li>
                        <a class="page-scroll" href="#download">Files</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#documat">DocuMat</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">DocuMat</h1>
                        <p class="intro-text">Responsive Document formatter for everyone and for all purposes</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center" style="margin-bottom: -200px;">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About DocuMat</h2>
                <p>Formatting is always a pain! How about an automated formatter to format your paper to conference styles (IEEE)? Documat - The name "Docu" - Document and "Mat"- Format helps to ease the formatting issue of papers.</p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2>File Management</h2>
                     <a onClick="listf();" class="btn btn-default btn-lg">List Files</a> &nbsp&nbsp
					 <a onClick="deleteall();" class="btn btn-default btn-lg">Delete Files</a><br><br>
					 <a id="FMStatus" style="font-size:20px;"></a>
                </div>				
            </div>
			<div class="container">
				<div id="fileList" class="col-lg-4 col-lg-offset-4">
				
				
				</div>
				
				<div id="delFile">
				</div>
			</div>
        </div>
    </section>
	
	<section id="documat" class="documat-section">
				<h2 class="text-center">DocuMat</h2>
				<div id="response" class="container">		
			<div class="row">
				<div class="col-md-6">
					<div class="form-area">					
						<br style="clear:both">
						<h3 style="margin-bottom: 25px; text-align: center; font-weight: bold">Block ID</h3>
						<form id="form-content" action="php/db/insert.php" method="POST" accept-charset="UTF-8"
						enctype="application/x-www-form-urlencoded"  validate>
							<div class="form-group">
								<input type="text" class="form-control" id="head" name="head" placeholder="Heading" required>
							</div>						
							<div class="form-group">
								<textarea class="form-control" type="textarea" name="data" id="data" placeholder="Content" rows="15" required></textarea>  
							</div>  
							<input type="submit" class="btn btn-default btn-lg pull-right" value="Save">
							<!--<button id="save" onclick="save();return false;" class="btn btn-default btn-lg pull-right">Save</button>-->
						</form>
						<div id="table" style="padding-top:70px;">
							
							<a style="font-size:20px;"><b>Tabular Input</b><a id="tableBtn" ><i id="icn_plusT" class="fa fa-plus-circle" style="font-size:25px; padding-left:22px;"></i></a></a>
							<div id="rcinput" style="display:none; padding-top:30px;">
								<input type="number" style="width:40%;" class="form-control" id="rows" name="rows" placeholder="Rows" >
								<input type="number" class="form-control" id="columns" name="columns" placeholder="Column" style="width:40%;">	
								<button id="create" onclick="create();" class="btn btn-default btn-lg pull-right">Create</button>
							</div>
						</div>
						<div id="image" style="padding-top:25px;">							
							<a style="font-size:20px;"><b>Image Upload</b><a id="imageBtn" ><i id="icn_plusI" class="fa fa-plus-circle" style="font-size:25px; padding-left:20px;"></i></a></a>
							<div id="imginput" style="display:none; padding-top:30px;">
								<form id="upload" action="php/upload.php" method="POST" enctype="multipart/form-data">
									<fieldset>										
										<input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />
										<div>
											<label for="fileselect">Files to upload:</label>
											<input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />
											<div id="filedrag">or drop files here</div>
										</div>
										<div id="submitbutton">
											<button type="submit" class="btn btn-default btn-sg ">Upload Files</button>
										</div>
									</fieldset>
								</form>								
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<br style="clear:both">
					<h3 style="margin-bottom: 25px; text-align: center; font-weight: bold">Files on Server</h3>
					<input type="hidden" value="0" id="theValue" />		
					<div id="myDiv" style="color:#42dca3"> </div>
					<div style="padding-top:10px;">
						<button type="button" onclick="window.location='/php/sort.php';" class="btn btn-default btn-lg pull-right">Finish</button>	
					</div>
				</div>
			</div>		
		</div>				
	</section>

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
		<div class="download-section">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact DocuMat</h2>
                <p>Feel free to email us to provide some feedback on our application, </p>
                <p><a href="mailto:dcompiler23@gmail.com">dcompiler23@gmail.com</a>
                </p>
                <!-- <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul> -->
            </div>
        </div>
		</div>
    </section>

    <!-- Map Section 
    <div id="map"></div>-->

    <!-- Footer -->
   <footer class="footer"><div class="container" id="footer"></div></footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	
	 <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

   

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ 
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
	<script src="js/filedrag.js"></script>
	<script src="js/db.js"></script> 
	<script src="js/main.js"></script> 

</body>

</html>

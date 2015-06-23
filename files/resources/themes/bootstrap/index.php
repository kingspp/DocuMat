<!DOCTYPE html>

<html>

    <head>

        <title>Files <?php echo $lister->getListedPath(); ?></title>
        <link rel="shortcut icon" href="<?php echo THEMEPATH; ?>/img/folder.png">

        <!-- STYLES -->
		<link href="../../../../css/main.css" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/css/style.css">

        <!-- SCRIPTS -->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/directorylister.js"></script>

        <!-- FONTS -->
        <link rel="stylesheet" type="text/css"  href="//fonts.googleapis.com/css?family=Cutive+Mono">

        <!-- META -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

        <?php file_exists('analytics.inc') ? include('analytics.inc') : false; ?>

    </head>

    <body>

       <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
		  <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../">DCompiler- DocuMat</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="../">Home</a></li>		    
			<li class="active dropdown">
              <a href="/files" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Files <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/files">List</a></li>
                <li><a href="../del.php">Delete Files</a></li>
                
              </ul>
            </li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
	  </nav>

        <div id="page-content" class="container">

            <?php file_exists('header.php') ? include('header.php') : include($lister->getThemePath(true) . "/default_header.php"); ?>

            <?php if($lister->getSystemMessages()): ?>
                <?php foreach ($lister->getSystemMessages() as $message): ?>
                    <div class="alert alert-<?php echo $message['type']; ?>">
                        <?php echo $message['text']; ?>
                        <a class="close" data-dismiss="alert" href="#">&times;</a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

            <div id="directory-list-header">
                <div class="row">
                    <div class="col-md-7 col-sm-6 col-xs-10">File</div>
                    <div class="col-md-2 col-sm-2 col-xs-2 text-right">Size</div>
                    <div class="col-md-3 col-sm-4 hidden-xs text-right">Last Modified</div>
                </div>
            </div>

            <ul id="directory-listing" class="nav nav-pills nav-stacked">

                <?php foreach($dirArray as $name => $fileInfo): ?>
                    <li data-name="<?php echo $name; ?>" data-href="<?php echo $fileInfo['url_path']; ?>">
                        <a href="<?php echo $fileInfo['url_path']; ?>" class="clearfix" data-name="<?php echo $name; ?>">


                            <div class="row">
                                <span class="file-name col-md-7 col-sm-6 col-xs-9">
                                    <i class="fa <?php echo $fileInfo['icon_class']; ?> fa-fw"></i>
                                    <?php echo $name; ?>
                                </span>

                                <span class="file-size col-md-2 col-sm-2 col-xs-3 text-right">
                                    <?php echo $fileInfo['file_size']; ?>
                                </span>

                                <span class="file-modified col-md-3 col-sm-4 hidden-xs text-right">
                                    <?php echo $fileInfo['mod_time']; ?>
                                </span>
                            </div>

                        </a>

                        <?php if (is_file($fileInfo['file_path'])): ?>

                            <a href="javascript:void(0)" class="file-info-button">
                                <i class="fa fa-info-circle"></i>
                            </a>

                        <?php else: ?>

                            <?php if ($lister->containsIndex($fileInfo['file_path'])): ?>

                                <a href="<?php echo $fileInfo['file_path']; ?>" class="web-link-button">
                                    <i class="fa fa-external-link"></i>
                                </a>

                            <?php endif; ?>

                        <?php endif; ?>

                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
		<div class="container">		
			<div class ="row">
				<div class="col-md-6">
					<button type="button" onclick="window.location='../';" class="btn btn-primary ">Back</button>	
					<button type="button" onclick="window.location='../php/pword.php';" class="btn btn-primary ">Next</button>	
				</div>
			</div>
		</div>
        <?php file_exists('footer.php') ? include('footer.php') : include($lister->getThemePath(true) . "/default_footer.php"); ?>
		
        <div id="file-info-modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{modal_header}}</h4>
                    </div>

                    <div class="modal-body">

                        <table id="file-info" class="table table-bordered">
                            <tbody>

                                <tr>
                                    <td class="table-title">MD5</td>
                                    <td class="md5-hash">{{md5_sum}}</td>
                                </tr>

                                <tr>
                                    <td class="table-title">SHA1</td>
                                    <td class="sha1-hash">{{sha1_sum}}</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
		
		<!-- Footer -->
   <footer class="footer"><div class="container" id="footer"></div></footer>
	
	
	<script src="../../../../js/main.js"></script> 
	
    </body>

</html>

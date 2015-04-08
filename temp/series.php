
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 2 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Note there is no responsive meta tag here -->

    <link rel="icon" href="../../favicon.ico">

    <title>Home Page</title>
    <link href='//fonts.googleapis.com/css?family=Roboto:100,400,300,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="non-responsive.css" rel="stylesheet">
    
    <link href="bxslider/jquery.bxslider.css" rel="stylesheet">
    
    <link href="jssor/css/style.css" rel="stylesheet">
    
    <script type="text/javascript" src="jssor/js/jquery-1.9.1.min.js"></script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
  </head>

  <body class="home blog group-blog">

    <!-- Fixed navbar -->
    <?php require_once 'navbar.php'; ?>
    <!-- #End fixed navbar -->

    <div class="container" id="mainContent">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
        
        <div id="sliderFrame">
            <div class="row">
                <div class="thumbnail col-xs-9"><?php require_once 'slider.php'; ?></div>
                <img src="http://placehold.it/270x300" class="thumbnail pull-right">
            </div>
        </div>
        
        <br>
        <div id="temp1">
            <div class="row">
                <div class="col-xs-8">
                    <div class="border-head">
                        <h3>
                            <strong class="color-blue">Series</strong>
                        </h3>
                    </div>

                    <div class="col-xs-8" id="box-content">
                        <h3 style="margin-top:0px;"><strong class="text-orange">Always (2011)</strong></h3>
                        <p><strong>Alternative Titles: </strong>Always, Only You, Ohjik Geudaeman, Only You (2011)</p>
                        <p><strong>Cast: </strong>So Ji-sub, Han Hyo-joo, Yun Jong-Hwa, Kang Shin-Il, Park Cheol-Min, Jo Sung-Ha</p>
                        <p><strong>Episodes: </strong>Finished</p>
                        <p><strong>Category: </strong>Korean Drama Movies</p>
                        <p><strong>Genres : </strong> Drama, Romance</p>
                        <p><strong>Type: </strong>Movie</p>
                        <p><strong>Release: </strong>2013</p>
                        <p><strong>Status: </strong>Finished</p>
                        <p><strong>Description : </strong>Cheol-Min (So Ji-Sub), a man with a dark, mysterious past, picks up a part-time night job as a parking lot attendant. He sits in the tiny pay booth in the parking lot and stares at the small television. A woman named Jung-Hwa (Han Hyo-Joo) walks into the booth. She offers something to Cheol-Min and sits next to him. Cheol-Min realizes the woman is blind and she is confusing him for the parking attendant who worked their previously. </p>
                         
                    </div>
                    <div class="col-xs-4">
                        <img class="thumbnail" alt="" src="http://placehold.it/210x300">
                    </div>
                    
                    <div id="listEpisode">
	                    <div class="border-head">
	                        <h3>
	                            <strong class="color-blue">Always (2011) Episodes</strong>
	                        </h3>
	                    </div>
	                    <?php for ($i = 0; $i < 10; $i++): ?>
	                    <dl class="ele-item">
	                        <dd class="ele-item"><i class="fa fa-long-arrow-right text-primary"></i> Hyde, Jekyll, Me Episode 20 FINAL</dd>
	                    </dl>
	                    <?php endfor; ?>
                    </div>
                    
                    <div id="similarDramas">
	                    <div class="border-head">
	                        <h3>
	                            <strong class="color-blue">Smilar Dramas</strong>
	                        </h3>
	                    </div>
	                    <?php for ($i = 0; $i< 4; $i++): ?>
	                    <?php $a = htmlspecialchars('Set in the town of Furano in Hokkaido, Kita no Kunikara centers around the story of the Kuroita family.', ENT_QUOTES) ?>
	                    <a href="series.php" class="col-xs-3 drama-box popoverData" data-content="<?php echo htmlentities('<span class="text-danger">Cast: </span> Long Do, Luu Do ..... <br><span class="text-info">Description: </span> ' . $a .' <br> '); ?>"
	                    rel="popover" data-placement="top" data-original-title="Bouty Lady <?php echo $i; ?>" data-trigger="hover">
	                        <div class="thumbnail">
	                            <img src="http://placehold.it/170x180">
	                            <div class="caption">
	                                <h5 style="margin-top:0px;" class="text-center text-orange">Bouty Lady <?= $i ?></h5>
	                                <p style="margin: 0px; font-size:85%;"><strong class="text-purple">Genres</strong> <span class="text-concrete">Drama, Romance, Family</span></p>
	                            </div>
	                        </div>
	                    </a>
	                    <a href="#" class="col-xs-3 drama-box popoverData" data-content="Popover with data-trigger" rel="popover" data-placement="top" data-original-title="In The Room Large Large <?= $i ?>" data-trigger="hover">
	                        <div class="thumbnail">
	                            <img src="http://placehold.it/170x180">
	                            <div class="caption">
	                                <h5 style="margin-top:0px;" class="text-center text-orange">In The Room Large Large <?= $i ?></h5>
	                                <p style="margin: 0px; font-size:85%;"><strong class="text-purple">Genres</strong> <span class="text-concrete">Drama, Romance, Family</span></p>
	                            </div>
	                        </div>
	                    </a>
	                    <?php endfor; ?>
                    </div>
                    
                    
                </div><!-- #End col-md-8 -->
                
                <div class="col-xs-4 rightSidebar">
                    <div class="border-head">
                        <h3>
                            <strong class="color-blue">Popular Movies</strong>
                        </h3>
                    </div>
                    <div class="temp2">
                        <?php for($i = 0; $i < 10; $i++) : ?>
                        <ul class="media-list sidebar-list">
                          <li class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object" src="images/angel-eyes-57.jpg" alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <strong class="media-heading">Angel Eyes</strong><br>
                              <span>Watched 123456 times.</span><br>
                              <a href="#" class="btn btn-success btn-xs">See episodes</a>
                            </div>
                          </li>
                        </ul>
                        <?php endfor; ?>
                    </div>
                    <br>
                    
                    <div class="border-head">
                        <h3>
                            <strong class="color-blue">Newly Added</strong>
                        </h3>
                    </div>
                    <div class="temp3">
                        <?php for($i = 0; $i < 11; $i++) : ?>
                        <ul class="media-list sidebar-list">
                          <li class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object" src="images/angel-eyes-57.jpg" alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <strong class="media-heading">Angel Eyes</strong><br>
                              <span>Friday, March 24</span><br>
                              <a href="#" class="btn btn-success btn-xs">See episodes</a>
                            </div>
                          </li>
                        </ul>
                        <?php endfor; ?>
                    </div>
                    
                </div>
            </div><!-- End row -->
        </div> <!-- End #temp1 -->
        <!-- 
        <div id="slider">
            <ul class="bxslider">
              <li><img style="width: 170px; height: 200px;" src="images/neko-zamurai-210.jpg" /></li>
              <li><img style="width: 170px; height: 200px;" src="images/neko-zamurai-210.jpg" /></li>
              <li><img style="width: 170px; height: 200px;" src="images/neko-zamurai-210.jpg" /></li>
              <li><img style="width: 170px; height: 200px;" src="images/neko-zamurai-210.jpg" /></li>
              <li><img style="width: 170px; height: 200px;" src="images/neko-zamurai-210.jpg" /></li>
              <li><img style="width: 170px; height: 200px;" src="images/neko-zamurai-210.jpg" /></li>
              <li><img style="width: 170px; height: 200px;" src="images/neko-zamurai-210.jpg" /></li>
            </ul>
        </div>
         -->
        <hr>
        <div class="text-center">
            DramaHD.Net<br>
            Loremispur Loremispur Loremispur
        </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bxslider/jquery.bxslider.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>

    <script>
    $('.bxslider').bxSlider({
          minSlides: 3,
          maxSlides: 8,
          slideWidth: 145,
          slideMargin: 10,
          pager: false
        });
    </script>
    
    <script>
    $(document).ready(function(){
        $(".popoverData").popover({
        	html : true,
        	content: function() {
        		return $('#popover_content_wrapper').html();
            }
        });
    })
    </script>
  </body>
</html>

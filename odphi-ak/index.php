<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Omega Delta Phi</title>
        <style>
            @import url("css/home-header.css");
            @import url("css/home-body.css");
            @import url("font-import/css/font-awesome.min.css");
            
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
    </head>
    <body>
    
    <!-- Header with Crest -->
        <header id="top" class="header">
            <div class="text-vertical-center">
                <br><br><br><br><br><br>
                <h1 id = "title-color">Omega Delta Phi Inc.<br>
                <div id = "AK-color">Alpha Kappa Chapter</div></h1>
                <a href="#Alpha-Kappa" id = "findOutMore" class="btn btn-dark btn-lg">Find Out More</a>
            </div>
        </header>
    
    <!--- =============================== --->
    
    <!-- About -->
        <section id="Alpha-Kappa" class="about" style = "background-color: #a01616" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center" style = "color:#FFFFFF">
                        <h2>What we're all about!</h2>
                        <hr class="small">
                        <!-- <p class="lead">This theme features some wonderful photography courtesy of <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>.</p> -->
                        <p>The purpose of this Brotherhood, a Service/Social fraternity dedicated to the needs and concerns of the community, is and shall be to promote and maintain the traditional values of Unity, Honesty, Integrity, and Leadership. This Brotherhood was founded in order to provide, to ANY man, a diverse fraternal experience which coincides with a higher education.<br></p>
                        <p>Since its beginning in 1987, Omega Delta Phi has been an organization perpetually dedicated to the idea of constant growth and improvement. As such, we face the new challenges of tomorrow with a growing sense of optimism and newfound awareness that “good” will not be good enough. We must work to form an organization which not only challenges the traditional perception of fraternities, but also one with deals with the issues of culture and race for a completely new perspective. Thinking outside the box is no longer an acceptable plateau; the box must now be removed completely.</p>
                    </div>
                </div>
            </div>
        </section>
        
    <!--- ===================================== --->
    <br>
     <!--- Carousel of Pictures --->
     <center>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style = "width: 1100px">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
                    $files = scandir("slideshow-images/",1);
                    $images = array();
                     for($i =0; $i < count($files)-2 ; $i++){
                        array_push($images, $files[$i]);
                     }
                    
                    for($i = 0; $i < count($images) ; $i++) {
                        echo "<li data-target='#carousel-example-generic' data-slide-to='$i'";
                        echo ($i == 0) ? "class='active'" : "";
                        echo "></li>";
                    }
                ?>
            </ol>
            
            <div class="carousel-inner" role="listbox">
                <?php
                    for($i = 0; $i < count($images) ; $i++) {
                        echo '<div class="item ';
                        echo ($i == 0) ? "active" : "";
                        echo '">';
                        echo '<img src="slideshow-images/' . $images[$i] . '">';
                        echo '</div>';
                    }
                ?>
            </div>
        
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
       
        </div>
    </center>
    <!--- =========================================================== --->
    <br>
    
    
    <!-- More Info Bar -->
    <!-- The circle icons come from the font-import file! -->
        <section id="services" class="services bg-primary">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h2>Learn More</h2>
                        <hr class="small">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-globe fa-stack-1x text-primary"></i>
                                </span>
                                    <h4>
                                        <strong>Service</strong>
                                    </h4>
                                    <p>Since 1987, the Brothers of Omega Delta Phi have striven ceaselessly to create and maintain a strong, rich tradition of community service to bring our communities together.</p>
                                    <a href="/service" class="btn btn-light">Learn More</a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-group fa-stack-1x text-primary"></i>
                                </span>
                                    <h4>
                                        <strong>Social</strong>
                                    </h4>
                                    <p>As an organization we value the power of connections and relations. Omega Delta Phi also serves as a social outlet to meet others and enjoy your college experience.</p>
                                    <a href="/social" class="btn btn-light">Learn More</a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-road fa-stack-1x text-primary"></i>
                                </span>
                                    <h4>
                                        <strong>Join</strong>
                                    </h4>
                                    <p> If you are looking for a Brotherhood, want to give back to the community, or want to realize your leadership potential, we encourage you to join us at one of our Rush events.</p>
                                    <a href="/join" class="btn btn-light">Learn More</a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-shield fa-stack-1x text-primary"></i>
                                </span>
                                    <h4>
                                        <strong>Meet Our Members</strong>
                                    </h4>
                                    <p>Omega Delta Phi is a multicultural service/social fraternity that aims at graduating its members while giving back to the community. Here are some of those members from this chapter.</p>
                                    <a href="/about" class="btn btn-light">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    
    
    
   
    
    <!-- Footer -->
        <footer>
            <div id = "containerBot" class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 text-center">
                        <h4><strong>Alpha Kappa Chapter</strong>
                        </h4>
                        <p>100 Campus Center <br>Seaside, CA 93955</p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-envelope-o fa-fw"></i>  <a id = "containerBot" href="mailto:name@example.com">President.alphakappa@omegadeltaphi.org</a>
                            </li>
                        </ul>
                    
                        <ul id = "list-inline-bot" class="list-inline">
                            <li>
                                <a id = "containerBot" href="https://www.facebook.com/OmegaDeltaPhi/"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                            </li>
                            <li>
                                <a id = "containerBot" href="https://twitter.com/ODPhi"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                            </li>
                            <li>
                                <a id = "containerBot" href="https://www.instagram.com/ak_knights_csumb/"><i class="fa fa-instagram fa-fw fa-3x"></i></a>
                            </li>
                        </ul>
                        <hr class="small">
                        
                    </div>
                </div>
            </div>
        </footer>
    
    <!---============================================= -->
    </body>
</html>

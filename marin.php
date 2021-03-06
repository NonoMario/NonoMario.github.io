<?php include("res/pages/conf.php");?>
<!DOCTYPE html>
<html>

<head>
    <?php include("res/pages/head-tag-contents.php");?>
</head>

<body>

    <?php include("res/pages/navigation.php");?>

    <div style="background-color:#b1d3e3">
        <div id="content" class='content-style'>
        <div id="marin" class="content-block">
                <!-- Carousel -->
                <div class="row no-margin">
                    <div class="col-12 no-padding">
                        <div id="carousel-marin" class="carousel slide" data-ride="carousel">
                            <ol id="carousel-marin-indicators" class="carousel-indicators"></ol>
                            <div id="carousel-marin-pictures" class="carousel-inner" role="listbox"></div>
                            <a class="carousel-control-prev" href="#carousel-marin" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-marin" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <!-- Description-->
                    <div id="marin-text-section" class="row text-section text"></div>
                    <!-- Map -->
                    <div class="map-container">
                        <iframe width="100%" height="500px" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Vidalijeva%204%206330%20Piran+(Apartma%20Nono%20Mario%20-%20Marin)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed"
                            frameborder="0" marginheight="0" marginwidth="0" alt="Map: Vidalijeva 4 Piran">
                            <a href="https://www.maps.ie/create-google-map/">
                                Create Google Map
                            </a>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="language-dropdown" class="language-chooser">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-language"></i>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a id="english-lang" style="margin-left:10px" href="#">English</a></li>
            <li><a id="sloveninan-lang" style="margin-left:10px" href="#">Slovenian</a></li>
        </ul>
    </div>

    <?php include("res/pages/footer.php");?>
    <?php include("res/pages/scripts.php");?>

</body>

</html>
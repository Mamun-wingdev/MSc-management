<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
<style>

.hide-bullets {
list-style:none;
margin-left: -40px;
margin-top:20px;
}
</style>
</head>

<body class="">
<div class="row" style="height:200px; background:hsla(116,73%,72%,1.00)">


<h1 style="text-align:center">Your website's upper part</h1>

</div>
<div class="row">

<div class="col-lg-7" style="height:400px; background-color:hsla(0,16%,84%,1.00)"></div>

<div class="col-lg-5" style="height:400px; background-color:hsla(359,88%,80%,1.00)">

<h3 style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; text-align:center">Top most students</h3>

<div class="container">
        <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-5" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                        <img src="http://placehold.it/770x300&text=one"></div>

                                        <div class="item" data-slide-number="1">
                                        <img src="http://placehold.it/770x300&text=two"></div>

                                        <div class="item" data-slide-number="2">
                                        <img src="http://placehold.it/770x300&text=three"></div>

                                        <div class="item" data-slide-number="3">
                                        <img src="http://placehold.it/770x300&text=four"></div>

                                        <div class="item" data-slide-number="4">
                                        <img src="http://placehold.it/770x300&text=five"></div>

                                        
                                    </div><!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                    </a>                                
                                    </div>
                            </div>

                            <div class="col-sm-2" id="carousel-text"></div>

                            <div id="slide-content" style="display: none;">
                                <div id="slide-content-0">
                                    <h2>Slider One</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    
                                </div>

                                <div id="slide-content-1">
                                    <h2>Slider Two</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                   
                                </div>

                                <div id="slide-content-2">
                                    <h2>Slider Three</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                   
                                </div>

                                <div id="slide-content-3">
                                    <h2>Slider Four</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    
                                </div>

                                <div id="slide-content-4">
                                    <h2>Slider Five</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                   
                                </div>

                            
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->

                <div class="row hidden-xs" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            <li class="col-sm-1">
                                <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x100&text=one"></a>
                            </li>

                            <li class="col-sm-1">
                                <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=two"></a>
                            </li>

                            <li class="col-sm-1">
                                <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
                            </li>

                            <li class="col-sm-1">
                                <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x100&text=four"></a>
                            </li>

                            <li class="col-sm-1">
                                <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100&text=five"></a>
                            </li>

                           
                        </ul>                 
                </div>
        </div>
</div>


</div>


</div>














<script src="Bootstrap/js/jquery-2.2.1.min.js" > </script>
<script>
  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});

</script>
<script src="Bootstrap/js/bootstrap.min.js"> </script>
</body>
</html>
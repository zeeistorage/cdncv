<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
    
    .gallery-title
    {
        font-size: 36px;
        color: #42B32F;
        text-align: center;
        font-weight: 500;
        margin-bottom: 70px;
    }
    .gallery-title:after {
        content: "";
        position: absolute;
        width: 7.5%;
        left: 46.5%;
        height: 45px;
        border-bottom: 1px solid #5e5e5e;
    }
    .filter-button
    {
        font-size: 18px;
        border: 1px solid #42B32F;
        border-radius: 5px;
        text-align: center;
        color: #42B32F;
        margin-bottom: 30px;

    }
    .filter-button:hover
    {
        font-size: 18px;
        border: 1px solid #42B32F;
        border-radius: 5px;
        text-align: center;
        color: #ffffff;
        background-color: #42B32F;

    }
    .btn-default:active .filter-button:active
    {
        background-color: #42B32F;
        color: white;
    }

    .port-image
    {
        width: 100%;
    }

    .gallery_product
    {
        margin-bottom: 30px;
    }

    .filter {
    display: none;
    }
    #loadMore {
    width: 200px;
    color: #fff;
    display: block;
    text-align: center;
    margin: 20px auto;
    padding: 10px;
    border-radius: 10px;
    border: 1px solid transparent;
    background-color: blue;
    transition: .3s;
    }
    #loadMore:hover {
    color: blue;
    background-color: #fff;
    border: 1px solid blue;
    text-decoration: none;
    }
    .noContent {
    color: #000 !important;
    background-color: transparent !important;
    pointer-events: none;
    }

    .hidden {
    display: none;
    }
</style>

    <div class="container">
        <div class="row">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="gallery-title">Gallery</h1>
            </div>

            <div align="center">
                <button class="btn btn-default filter-button" data-filter="all">All</button>
                <button class="btn btn-default filter-button" data-filter="hdpe">HDPE Pipes</button>
                <button class="btn btn-default filter-button" data-filter="sprinkle">Sprinkle Pipes</button>
                <button class="btn btn-default filter-button" data-filter="spray">Spray Nozzle</button>
                <button class="btn btn-default filter-button" data-filter="irrigation">Irrigation Pipes</button>
            </div>
            <br/>



            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            

            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
            <div id="imgku" class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <input type="hidden" name="filternyakak" id="filternyakak" value="">

        </div>
    </div>
</section>
<a href="#" id="loadMore">Load Moreo</a>

<script>
    $(document).ready(function(){
        $(".filter").slice(0, 3).show();

        $(".filter-button").click(function(){
            console.log("filter klik");
            var element = document.getElementById("loadMore");
            element.classList.remove("noContent");
            $("a#loadmore").text("Load More");

            var value = $(this).attr('data-filter');
            $("#filternyakak").val(value);
            
            if(value == "all")
            {
                $('.filter').show('1000');
            }
            else
            {
                $('.filter').filter('.'+value).slice(0, 3).show('3000');

                $(".filter").not('.'+value).hide('3000');
            }

        });

        $("#loadMore").on("click", function(e){
            e.preventDefault();
            console.log('kliked ');
            var filternyakak = $("#filternyakak").val();

            $(".filter:hidden").filter('.'+filternyakak).slice(0, 3).slideDown();
            
            var x, i;
            x = document.querySelectorAll('.filter:not(.'+filternyakak+')');
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }

            var img_hide = $('.filter:hidden').filter('.'+filternyakak);
            if(img_hide.length == 0) {
                $("#loadMore").text("No Content").addClass("noContent");
                console.log('max');
            }
        });

        if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");

    });

    
</script>
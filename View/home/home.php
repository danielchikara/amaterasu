<div class="container ">
    <div class="panel panel-default"style="margin-top:100px;">
        <div class="panel-body">
            
                <div class="container-fluid"> 
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="assets/img/carruselAma01.jpg" alt="Amaterasu">
                        </div>

                        <div class="item">
                            <img class="img-responsive" src="assets/img/carruselAma02.jpg" alt="Chicago">
                        </div>

                        <div class="item">
                            <img class="img-responsive" src="assets/img/carruselAma03.jpg" alt="New york">
                        </div>

                        <div class="item">
                            <img class="img-responsive" src="assets/img/carruselAma04.jpg" alt="New york">
                        </div>

                        <div class="item">
                            <img class="img-responsive" src="assets/img/carruselAma05.jpg" alt="New york">
                        </div>

                        <div class="item">
                            <img class="img-responsive" src="assets/img/carruselAma06.jpg" alt="New york">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <script>
                $(document).ready(function () {
                    // Activate Carousel
                    $("#myCarousel").carousel({interval: 2000});

                    // Enable Carousel Indicators
                    $(".item1").click(function () {
                        $("#myCarousel").carousel(0);
                    });
                    $(".item2").click(function () {
                        $("#myCarousel").carousel(1);
                    });
                    $(".item3").click(function () {
                        $("#myCarousel").carousel(2);
                    });
                    $(".item4").click(function () {
                        $("#myCarousel").carousel(3);
                    });

                    $(".item5").click(function () {
                        $("#myCarousel").carousel(4);
                    });
                    $(".item6").click(function () {
                        $("#myCarousel").carousel(5);
                    });

                    // Enable Carousel Controls
                    $(".left").click(function () {
                        $("#myCarousel").carousel("prev");
                    });
                    $(".right").click(function () {
                        $("#myCarousel").carousel("next");
                    });
                });
            </script>
        </div>
    </div>
</div>

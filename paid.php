<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>License animls - Serengeti National Park</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Creature Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- color switch -->
    <link href="css/blast.min.css" rel="stylesheet" />
    <!-- portfolio -->
    <link href="css/portfolio.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <div id="home">
        <!-- color scheme -->
        <div class="blast-box">
            <div class="blast-frame">
                <p>color schemes</p>
                <div class="blast-colors d-flex justify-content-center">
                    <div class="blast-color">#23d48f</div>
                    <div class="blast-color">#d3b800</div>
                    <div class="blast-color">#18e7d3</div>
                    <div class="blast-color">#e5902a</div>
                    <div class="blast-color">#16d9e9</div>
                    <!-- you can add more colors here -->
                </div>
                <p class="blast-custom-colors">Choose Custom color</p>
                <input type="color" name="blastCustomColor" value="#d3b800">

            </div>
            <div class="blast-icon"><span class="fa fa-paint-brush" aria-hidden="true"></span></div>
        </div>

        <!-- header -->
      <?php include "components/top_nav.php"; ?>
       
    </div>

    <section class="w3_stats py-sm-5 py-4" id="stats">
        <div class="container">
            <div class="py-lg-5 w3-stats mt-5">
                <h2 class="w3pvt-title  my-5">Licensed Animals to Hunt!
                </h2>
                <p class=" text-white">You need to have Licence to hunt these Animals</p>

            </div>
        </div>
    </section>

    <!-- wanyama icence -->
    <section class="blog_w3ls pb-lg-5 pb-4" id="posts">
        <div class="container py-sm-5 py-4">
            <div class="row mt-4">
                <?php

                include "connection.php";

                $sql = "SELECT * FROM wanyama_license";
                $check = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($check)) {
                ?>
                    <div class="col-lg-4 col-md-6 mt-sm-0 my-4">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#exampleModal2" data-toggle="modal" aria-pressed="false" data-target="#exampleModal2" role="button">
                                    <img class="card-img-bottom" src="<?php echo $row['picha']; ?>" style="height: 300px;" alt="Picha ya Mnyama haipo">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="blog-title card-title font-weight-bold">
                                    <a href="#exampleModal2" data-toggle="modal" aria-pressed="false" data-target="#exampleModal2" role="button"><?php echo $row['mnyama']; ?></a>
                                </h5>
                                <div class="d-flex justify-content-between">
                                    <p>Bei ya kuwinda:</p>
                                    <p class="fw-bold text-danger">Tzsh <?php echo number_format($row['bei_tzsh']); ?>/=</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>Bei ya kuwinda:</p>
                                    <p class="fw-bold text-danger">$ <?php echo number_format($row['bei_dollar']); ?>/=</p>
                                </div>
                                <label class="mt-2"> <span class="fa fa-map-marker mr-3"></span><?php echo $row['location']; ?></label> <br>
                                <a href="https://www.tanzaniaparks.go.tz/" target="_blank" class="btn btn-sm w-100 btn-success " >
                                    Pata Kibali hapa
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- orodha ya wanyama na licence zao -->
    <?php include "components/footer.php" ?>

    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->

    <!-- Banner  Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use"$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //Banner  Responsiveslides -->
    <!-- Scrolling Nav JavaScript -->
    <script src="js/scrolling-nav.js"></script>
    <script src="js/counter.js"></script>
    <!-- portfolio -->
    <script src="js/jquery.picEyes.js"></script>
    <script>
        $(function() {
            //picturesEyes($('.demo li'));
            $('.demo li').picEyes();
        });
    </script>
    <!-- //portfolio -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- color switch -->
    <script src="js/blast.min.js"></script>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>
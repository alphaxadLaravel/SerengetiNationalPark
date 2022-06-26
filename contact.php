<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Contact US - Serengeti National Park</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="description" content="Wanyama Pori wa kila ain na Vibari vyao" />
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
      <?php include "components/top_nav.php"; ?>
        
    </div>

    <section class="w3_stats py-sm-5 py-4" id="stats">
        <div class="container">
            <div class="py-lg-5 w3-stats mt-5">
                <h2 class="w3pvt-title  my-5">Contact Us
                </h2>

            </div>
        </div>
    </section>


    <section class="contact-wthree py-sm-5 py-4" id="contact">
    <div class="container pt-lg-5">
        <div class="row mt-4 text-center">
            <div class="contact-w3 col-md-4 ">
                <span class="fa fa-envelope-open  mb-3" data-blast="color"></span>
                <div class="d-flex flex-column">
                    <a href="mailto:example@email.com" class="d-block">serengeti@gmail.com</a>
                </div>
            </div>
            <div class="contact-w3 col-md-4">
                <span class="fa fa-phone  mb-3" data-blast="color"></span>
                <div class="d-flex flex-column">
                    <a href="mailto:example@email.com" class="d-block">+255 754 243 110</a>
                </div>

            </div>
            <div class="contact-w3 col-md-4">
                <span class="fa fa-map-marker  mb-3" data-blast="color"></span>
                <div class="d-flex flex-column">
                    <a href="mailto:example@email.com" class="d-block">Dar-es-Salaam</a>
                </div>
            </div>
        </div>

</section>

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
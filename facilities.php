<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SH Hotel -FACITITIES</title>
    <?php  require("inc/link.php") ?>


</head>

<body class='bg-light'>
    <!-- header -->
    <?php
        require('inc/header.php');
    ?>


    <div class="container my-5 px-4">
        <h2 class="text-uppercase text-center fw-bold"> our facilities</h2>
        <div class="h-line"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ea
            sed
            ratione,
            non
            iure quae
            delectus
            magni fuga, temporibus tenetur ad neque totam vero ducimus earum animi sit voluptatem explicabo.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2 ">
                        <img src="image/fetures/wifi.jpg" alt="" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, dolores?</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark">
                    <div class="d-flex align-items-center mb-2 ">
                        <img src="image/fetures/wifi.jpg" alt="" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, dolores?</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2 ">
                        <img src="image/fetures/wifi.jpg" alt="" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, dolores?</p>
                </div>
            </div>
        </div>
    </div>


    <!-- foooter -->
    <?php  require("inc/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script>
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            340: {
                slidesPerView: "1",

            },
            640: {
                slidesPerView: "1",

            },
            768: {
                slidesPerView: "2",

            },
            1024: {
                slidesPerView: "3",

            },


        }
    });
    </script>

</body>


</html>
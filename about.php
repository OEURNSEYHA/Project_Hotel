<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SH Hotel -ABOUT</title>
    <?php  require("inc/link.php") ?>


</head>

<body class='bg-light'>
    <!-- header -->
    <?php
        require('inc/header.php');
    ?>


    <div class="container my-5 px-4">
        <h2 class="text-uppercase text-center fw-bold"> about us</h2>
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
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-4 mb-4  order-lg-1 order-2">
                <h3 class="mb-3">Lorem, ipsum dolor.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni repellendus omnis libero quos?
                    Corporis,
                    illo. Possimus odio eveniet, necessitatibus soluta fuga, ipsum temporibus eos quaerat ipsam officiis
                    totam laudantium labore.</p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-1">
                <img src="image/carousel/s1.jpg" alt="" width="100%" height="250px" class="object-fit-cover mb-2">
            </div>
        </div>

    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded- shadow p-4 border-top border-4 text-center">
                    <img src="image/rooms/icons_room.jpg" alt="" width="70px" class="object-fit-cover mb-2">
                    <h4>100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded- shadow p-4 border-top border-4 text-center">
                    <img src="image/rooms/customer.jpg" alt="" width="70px" class="object-fit-cover mb-2">
                    <h4>200+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded- shadow p-4 border-top border-4 text-center">
                    <img src="image/rooms/rating.png" alt="" width="70px" class="object-fit-cover mb-2">
                    <h4>150+ REVIEWS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded- shadow p-4 border-top border-4 text-center">
                    <img src="image/rooms/staff.jpg" alt="" width="70px" class="object-fit-cover mb-2">
                    <h4>200+ STAFF</h4>
                </div>
            </div>
        </div>

    </div>

    <h1 class="my-5 fw-bold h-font text-center">MANAGERMENT TEAM</h1>
    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="image/carousel/s1.jpg" alt="" width="100%" height="280px" class="object-fit- mb-3">
                    <h3 class="text-center">SEYHA OEURN</h3>
                </div>
                <div class="swiper-slide">
                    <img src="image/carousel/s2.jpg" alt="" width="100%" height="280px" class="object-fit- mb-3">
                    <h3 class="text-center">SEYHA OEURN</h3>

                </div>
                <div class=" swiper-slide">
                    <img src="image/carousel/s3.jpg" alt="" width="100%" height="280px" class="object-fit- mb-3">
                    <h3 class="text-center">SEYHA OEURN</h3>

                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- foooter -->
    <?php  require("inc/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPreView: 3,
        spaceBetween: 40,
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
    });
    </script>

</body>


</html>
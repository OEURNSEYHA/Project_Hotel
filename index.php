<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SH Hotel -Home</title>
    <?php  require("inc/link.php") ?>


</head>

<body class='bg-light'>

    <!-- header -->

    <?php
    require('inc/header.php')
?>

    <!--  slide-->
    <div class="container-fluid p-0 slider">
        <div id="carouselExampleFade" class="carousel slide carousel-fade  " data-bs-ride="carousel">
            <div class="carousel-inner box-slide">
                <div class="carousel-item active box-img">
                    <img src="image/carousel/s1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item box-img">
                    <img src="image/carousel/s2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item box-img">
                    <img src="image/carousel/s3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


    </div>
    <!-- Check ability form  -->
    <div class="container ability-form">
        <div class="row">
            <div class="col-12 bg-white shadow p-4 rounded">
                <h5>Check Booking Availability</h5>
                <form>
                    <div class="row">
                        <div class="col-lg-3 mt-2">
                            <label> CHECK-IN </label>
                            <input type="date" name="" id="" class="form-control">
                        </div>
                        <div class="col-lg-3 mt-2">
                            <label> CHECK-OUT </label>
                            <input type="date" name="" id="" class="form-control">
                        </div>
                        <div class="col-lg-3 mt-2">
                            <label> ADULT </label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>OPEN THIS SELECT </option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mt-2">
                            <label> CHILD</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>OPEN THIS SELECT </option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mt-2">
                            <label for=""></label>
                            <button class="btn btn-secondary">SUBMIT</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>


    <!-- Our Rooms -->
    <h2 class="mt-5 p-4 text-center text-uppercase ">Our Room</h2>
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow">
                    <div class="box-img" style="width:100%; height:200px">
                        <img src="image/carousel/s1.jpg" class=" card-img-top" alt="..."
                            style="width:100%; height:100%; object-fit:cover;">

                    </div>
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-2">60$ Per Night</h6>
                        <div class="fetures mb-2">
                            <h6>Fetures</h6>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">1 BathRooms</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">3 Sofas</span>
                        </div>
                        <div class="facilities mb-2">
                            <h6>Facilities</h6>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">Wifi</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">Televesion</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">AC</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">Room Header</span>
                        </div>
                        <div class="rating mb-2">
                            <h6>Rating</h6>
                            <div class="badge text-wrapp rounded bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>


                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="" class=" btn btn-sm text-white bg-secondary shadow-none">BookNow</a>
                            <a href="" class="btn btn-sm btn-outline-dark shadow-none">BookNow</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow">
                    <div class="box-img" style="width:100%; height:200px">
                        <img src="image/carousel/s1.jpg" class=" card-img-top" alt="..."
                            style="width:100%; height:100%; object-fit:cover;">

                    </div>
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-2">60$ Per Night</h6>
                        <div class="fetures mb-2">
                            <h6>Fetures</h6>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">1 BathRooms</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">3 Sofas</span>
                        </div>
                        <div class="facilities mb-2">
                            <h6>Facilities</h6>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">Wifi</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">Televesion</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">AC</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">Room Header</span>
                        </div>
                        <div class="rating mb-2">
                            <h6>Rating</h6>
                            <div class="badge text-wrapp rounded bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>


                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="" class=" btn btn-sm text-white bg-secondary shadow-none">BookNow</a>
                            <a href="" class="btn btn-sm btn-outline-dark shadow-none">BookNow</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 shadow">
                    <div class="box-img" style="width:100%; height:200px">
                        <img src="image/carousel/s1.jpg" class=" card-img-top" alt="..."
                            style="width:100%; height:100%; object-fit:cover;">

                    </div>
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-2">60$ Per Night</h6>
                        <div class="fetures mb-2">
                            <h6>Fetures</h6>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">1 BathRooms</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">3 Sofas</span>
                        </div>
                        <div class="facilities mb-2">
                            <h6>Facilities</h6>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">Wifi</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">Televesion</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">AC</span>
                            <span class="badge rounded-pill bg-light text-secondary text-wrap ">Room Header</span>
                        </div>
                        <div class="rating mb-2">
                            <h6>Rating</h6>
                            <div class="badge text-wrapp rounded bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>


                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="" class=" btn btn-sm text-white bg-secondary shadow-none">BookNow</a>
                            <a href="" class="btn btn-sm btn-outline-dark shadow-none">BookNow</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center">
                <a href="#" class="btn btn-sm btn-outline-dark rounded fw-bold shadow-none">More Rooms</a>
            </div>
        </div>
    </div>

    <!-- Our facilities-->
    <h2 class="mt-5 p-4 text-center text-uppercase ">Our Facilities</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-3">
            <div class="col-lg-2 col-md-2  bg-white shadow  px-3 py-4 d-flex flex-column align-items-center mb-4 my-3">
                <img src="../HWebsite/image/fetures/wifi.jpg" alt="" width='80px'>
                <h5>Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2  bg-white shadow  px-3 py-4 d-flex flex-column align-items-center  mb-4 my-3">
                <img src="../HWebsite/image/fetures/star.jpg" alt="" width='80px'>
                <h5>Star</h5>
            </div>
            <div class="col-lg-2 col-md-2  bg-white shadow  px-3 py-4 d-flex flex-column align-items-center  mb-4 my-3">
                <img src="../HWebsite/image/fetures/wifi.jpg" alt="" width='80px'>
                <span>Wifi</span>
            </div>
            <div class="col-lg-2 col-md-2  bg-white shadow  px-3 py-4 d-flex flex-column align-items-center  mb-4 my-3">
                <img src="../HWebsite/image/fetures/wifi.jpg" alt="" width='80px'>
                <span>Wifi</span>
            </div>
            <div class="col-lg-2 col-md-2  bg-white shadow  px-3 py-4 d-flex flex-column align-items-center  mb-4 my-3">
                <img src="../HWebsite/image/fetures/wifi.jpg" alt="" width='80px'>
                <span>Wifi</span>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded fw-bold shadow-none">More Facilities</a>
            </div>




        </div>
    </div>

    <!-- testimonials -->
    <h2 class="mt-5 p-4 text-center text-uppercase ">Testimonials</h2>
    <div class="container mb-5">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center ">
                        <img src="../HWebsite/image/fetures/star.jpg" alt="" width="50px">
                        <h6>Room User1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos natus explicabo sapiente
                        quas quia odit perferendis, esse, unde ullam vero rerum, aspernatur et omnis. Odit error quasi
                        iste repellat cum?
                    </p>
                    <div class="badge text-wrapp rounded bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center ">
                        <img src="../HWebsite/image/fetures/star.jpg" alt="" width="60px">
                        <h6>Room User1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos natus explicabo sapiente
                        quas quia odit perferendis, esse, unde ullam vero rerum, aspernatur et omnis. Odit error quasi
                        iste repellat cum?
                    </p>
                    <div class="badge text-wrapp rounded bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center ">
                        <img src="../HWebsite/image/fetures/star.jpg" alt="" width="50px">
                        <h6>Room User1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos natus explicabo sapiente
                        quas quia odit perferendis, esse, unde ullam vero rerum, aspernatur et omnis. Odit error quasi
                        iste repellat cum?
                    </p>
                    <div class="badge text-wrapp rounded bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>


            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <h2 class="mt-5 pt-4 text-center fw-bold h-font text-uppercase"> Reach us </h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 md-lg-0 mb-3 bg-white">
                <iframe class="w-100 rounded"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9849.637493410297!2d104.92527849298452!3d11.563949825826416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109513dc76a6be3%3A0x9c010ee85ab525bb!2sPhnom%20Penh!5e0!3m2!1sen!2skh!4v1688199558303!5m2!1sen!2skh"
                    height="320" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white  p-4 mb-4">
                    <h5>Call Us</h5>
                    <a href=" tel: 017431324" class="d-inline-block mb-2 text-decoration-none text-dark"> <i
                            class="bi bi-telephone-fill"></i> 017431324
                    </a></br>
                    <a href=" tel: 017431324" class="d-inline-block mb-2 text-decoration-none text-dark"> <i
                            class="bi bi-telephone-fill"></i>099999999
                    </a>
                </div>
                <div class="bg-white  p-4 mb-4">

                    <h5>Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2 "><i class="bi bi-twitter"></i> Twitter</span>
                    </a><br />
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2 "><i class="bi bi-facebook"></i> FaceBook</span>
                    </a><br />
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2 "><i class="bi bi-instagram"></i>
                            Instagram</span>
                    </a><br />

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
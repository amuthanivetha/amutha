<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel-FACILITIES</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <?php require('inc/links.php'); ?>
<style>
    .box{
        border-top-color:var(--teal) !important
    }
</style>
</head>
<body class="bg-light">

<?php require('inc/header.php');?>

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">About us</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
        Lorem Omnis et debitis eaque fuga quis. Exercitation/em, aperiam possimus. Temporibus, deserunt <br>ex blanditiis obcaecati fugiat libero laboriosam a rem porro odit. Debitis doloribus enim temp 
        voluptatum illo. Nam ab quod et voluptas porro distinctio corrupti iusto. Error, mollitia!
    </p>
</div>

<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4">
            <h3 class="mb-3">CEO </h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Beatae facilis provident voluptate, blanditiis labore cum natus nostrum ullam quas ex! Tempora amet fuga, 
                aut ipsam ad autem quo ut, ea ullam deleniti omnis soluta ab quisquam odit saepe possimus a repellat? Sequi exercitationem eum sint. Debitis animi deleniti quasi molestias!
            </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4">
            <img src="Rooms/jee.jpg" class="w-90" height="380px">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
                <img src="Rooms/hotel.jpg" width="70px">
                <h4 class="mt-3">100+ ROOMS</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
                <img src="Rooms/customer.jpg" width="70px">
                <h4 class="mt-3">200+ CUSTOMER</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
                <img src="Rooms/review.jpg" width="70px">
                <h4 class="mt-3">150+ REVIEWS</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
                <img src="Rooms/staff.jpg" width="70px">
                <h4 class="mt-3">200+ STAFFS</h4>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden roundd">
                    <img src="Rooms/jeeva.jpg" class="w-100">
                    <h5 class="mt-2">Random user1</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden roundd">
                    <img src="Rooms/jeeva.jpg" class="w-100">
                    <h5 class="mt-2">Random User 2</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden roundd">
                    <img src="Rooms/jeeva.jpg" class="w-100">
                    <h5 class="mt-2">Random User 3</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden roundd">
                    <img src="Rooms/jeeva.jpg" class="w-100">
                    <h5 class="mt-2">Random User 4</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden roundd">
                    <img src="Rooms/jeeva.jpg" class="w-100">
                    <h5 class="mt-2">Random User 2</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden roundd">
                    <img src="Rooms/jeeva.jpg" class="w-100">
                    <h5 class="mt-2">Random User 3</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden roundd">
                    <img src="Rooms/jeeva.jpg" class="w-100">
                    <h5 class="mt-2">Random User 4</h5>
                </div>
            </div> <!-- Closing swiper-wrapper div -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<?php require('inc/footer.php');?>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView:4,
        spaceBetween:40,
        pagination: {
            el: ".swiper-pagination",
        },
        pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        }
      }
    });
</script>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="common.css/common.css">
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
        
        .h-font {
            font-family: "Merienda", cursive;
        }
        
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button{
           -webkit-appearance: none;
           margin: 0;
        }
        input[type=number]{
          -moz-appearance: textfield;
        }
        .custom-bg{
          background-color: #2ec1ac;
        }
        .custom-bg:hover{
          background-color: #279e8c;
        }
        .availability-form{
          margin-top: -50px;
          z-index: 2;
          position: relative;
        }
        @media screen and (max-width: 575px){
          .availability-form{
            margin-top: 25px;
            padding: 0 35px;
          }
        }

    </style>
</head>
<body class="bg-light">
  <?php require('<inc/header.php');?>
 


<!-- Carousel -->

<div class="container-fluid px-lg-4 mt-4">
  <div class=" swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="Rooms/room1.jpg" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="Rooms/room2.jpg" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="Rooms/room3.jpg" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="Rooms/room4.jpg" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="Rooms/room5.jpg" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="Rooms/room6.jpg" class="w-100 d-block"/>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<!-- check availability form -->

<!-- check availability form -->
<!-- check availability form -->
<div class="container availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Check Booking Availability</h5>
            <form class="row">
                <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight: 500;">Check-in</label>
                    <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight: 500;">Check-out</label>
                    <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight: 500;">Adult</label>
                    <select class="form-select shadow-none">
                        
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>

                    </select>
                </div>
                <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight: 500;">Children</label>
                    <select class="form-select shadow-none">
                        <option value="1">None</option>
                        <option value="2">One</option>
                        <option value="3">Two</option>
                        <option value="4">Three</option>
                    </select>
                </div>
                <div class="col-lg-12 text-end">
                    <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--Our Roooms-->

<div class="container">
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
    <div class="row">
        <!-- First Room Card -->
        <div class="col mb-3">
            <div class="card border-0 shadow" style="max-width: 300px;margin:auto;">
                <img src="Rooms/IMG8.jpg" class="card-img-top" alt="Room Image" height="150">
                <div class="card-body">
                    <h5 class="card-title">Simple Room</h5>
                    <h6 class="card-subtitle mb-4 text-muted">₹1000 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Room</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 fan</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">WiFi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                    </div>
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                    </div>
                    <div class="rating">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </span>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Second Room Card -->
        <div class="col mb-3">
            <div class="card border-0 shadow" style="max-width: 300px;margin:auto;">
                <img src="Rooms/IMG6.jpg" class="card-img-top" alt="Room Image" height="150">
                <div class="card-body">
                    <h5 class="card-title">Deluxe Room</h5>
                    <h6 class="card-subtitle mb-4 text-muted">₹8000 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">3 Rooms</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">2 Bathrooms</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">2 Balconies</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">WiFi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Mini Bar</span>
                    </div>
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                    </div>
                    <div class="rating">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill"></i>
                        </span>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Third Room Card -->
        <div class="col mb-3">
            <div class="card border-0 shadow" style="max-width: 300px;margin:auto;">
                <img src="Rooms/IMG7.jpg" class="card-img-top" alt="Room Image" height="150">
                <div class="card-body">
                    <h5 class="card-title">Luxury Room</h5>
                    <h6 class="card-subtitle mb-4 text-muted">₹10000 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">4 Rooms</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">3 Bathrooms</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">3 Balconies</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">WiFi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Mini Bar</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Hot Tub</span>
                    </div>
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                    </div>
                    <div class="rating">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill"></i>
                        </span>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fourth Room Card (AC Room) -->
        <div class="col mb-3">
            <div class="card border-0 shadow" style="max-width: 300px;margin:auto;">
                <img src="Rooms/IMG4.jpg" class="card-img-top" alt="AC Room Image" height="150">
                <div class="card-body">
                    <h5 class="card-title">AC Deluxe</h5>
                    <h6 class="card-subtitle mb-4 text-muted">₹5500 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark">1 King Bed</span>
                        <span class="badge rounded-pill bg-light text-dark">1 Bathroom</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Balcony</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">WiFi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Mini-fridge</span>
                    </div>
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">2 Adults</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">2 Children</span>
                    </div>
                    <div class="rating">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </span>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fifth Room Card (Non-AC Room) -->
        <div class="col mb-3">
            <div class="card border-0 shadow" style="max-width: 300px;margin:auto;">
                <img src="Rooms/IMG3.jpg" class="card-img-top" alt="Non-AC Room Image" height="150">
                <div class="card-body">
                    <h5 class="card-title">Standard Room</h5>
                    <h6 class="card-subtitle mb-4 text-muted">₹1500 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">2 Queen Beds</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Balcony</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">WiFi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Fan</span>
                    </div>
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">3 Adults</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">2 Children</span>
                    </div>
                    <div class="rating">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </span>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold">More Rooms</a>
</div>


  <!--our facilities-->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
      <img src="Rooms/wifi.jpg" width="80px">
      <h5 class="mt-3">Wifi</h5>
      
  </div>

 <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
      <img src="Rooms/cat.jpg" width="80px">
      <h5 class="mt-3">Catering</h5>
      
  </div>
  <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
      <img src="Rooms/laun.jpg" width="80px">
      <h5 class="mt-3">Laundry&dry cleaning</h5>
      
  </div>
  <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
      <img src="Rooms/park.jpg" width="80px">
      <h5 class="mt-3">Parking</h5>
      
  </div>
  <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
      <img src="Rooms/mini.jpg" width="80px">
      <h5 class="mt-3">Minibar</h5>
      
  </div>
<div class="col-lg-12 text-center mt-5">
<a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>

      </div>
</div>
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

<div class="container mt-5">
<div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
            <img src="images/user1.jpeg" width="30px">
            <h6 class="m-0 ms-2">Random User1</h6>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Ullam facere minima impedit nisi alias omnis ea voluptatum. 
                Vero, alias iste consequuntur temporibus reprehenderit rerum, perferendis aliquid voluptatum eos laboriosam saepe?
            </p>
            <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
            </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          <img src="images/user2.jpeg" width="30px">
          <h6 class="m-0 ms-2">Random User2</h6>
          </div>
          <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
              Ullam facere minima impedit nisi alias omnis ea voluptatum. 
              Vero, alias iste consequuntur temporibus reprehenderit rerum, perferendis aliquid voluptatum eos laboriosam saepe?
          </p>
          <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
          </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
        <img src="images/star.jpeg" width="30px">
        <h6 class="m-0 ms-2">Random User3</h6>
        </div>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Ullam facere minima impedit nisi alias omnis ea voluptatum. 
            Vero, alias iste consequuntur temporibus reprehenderit rerum, perferendis aliquid voluptatum eos laboriosam saepe?
        </p>
        <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
        </div>
    </div>
       
        <!-- Add more swiper-slide divs for additional testimonials -->
    </div>
    <div class="swiper-pagination"></div>
</div><div class="col-lg-12 text-center mt-5">
<a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>

      </div>

<!--reach us-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
  <div class="row">
    <!-- Left column with map -->
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <!-- Embedded Google Maps iframe -->
      <iframe class="w-100 rounded" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.9635179388833!2d80.19984866888007!3d13.037994185341566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526752db8ffe35%3A0x7f6a2a2d0ebbdc94!2sSoftlogic%20Systems!5e0!3m2!1sen!2sin!4v1711427345972!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
    <!-- Right column with contact info -->
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call us</h5>
        <!-- Phone numbers with icons -->
        <a href="tel: +919867543278" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +91986754327
        </a>
        <br>
        <a href="tel: +919867543278" class="d-inline-block text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +91986754327
        </a>
      </div>

      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow us</h5>
        <!-- Social media badges with icons -->
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter-x me-1"></i>Twitter-x
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook"></i>Facebook
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram"></i>Instagram
          </span>
        </a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="container-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
<h3 class="h-font fw-bold fs-3 mb-2">ATTACKS & TITANS</h3>
<p>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
   Ratione porro sint saepe quod eius dolores, quos ipsam nulla sequi nisi asperiores, a iure sit voluptatibus assumenda soluta hic aliquid aut dicta recusandae expedita accusantium molestias, tempore eum. 
  Quod asperiores commodi, porro, nemo, blanditiis voluptatem aliquid perspiciatis fugiat iste eos voluptates?
</p>
    </div>
    <div class="col-lg-4 p-4">
<h5 class="mb-3">Links</h5>
<a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
<a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
<a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
<a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>


a<a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a><br>
    </div>
    <div class="col-lg-4 p-4">
<h5 class="mb-3">Follow us</h5>
<a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
 
    <i class="bi bi-twitter-x me-1"></i>Twitter-x</span>  </a><br>
    <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
 
    <i class="bi bi-facebook me-1"></i>Facebook</span>  </a><br>

    <a href="#" class="d-inline-block text-dark text-decoration-none ">
 
    <i class="bi bi-instagram me-1"></i>Instagram</span>  </a><br>










    </div>
  </div>

</div>
<br><br><br>
<br><br><br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    autoplay:{
      delay:3500,
      disableoninteraction: false
    }
  });

  var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
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
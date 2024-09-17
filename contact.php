<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel-CONTACT US</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
    <?php require('inc/header.php');?>
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem Omnis et debitis eaque fuga quis. Exercitation/em, aperiam possimus. Temporibus, deserunt <br>ex blanditiis obcaecati fugiat libero laboriosam a rem porro odit. Debitis doloribus enim temp 
            voluptatum illo. Nam ab quod et voluptas porro distinctio corrupti iusto. Error, mollitia!
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                <iframe class="w-100 rounded mb-4" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.9635179388833!2d80.19984866888007!3d13.037994185341566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526752db8ffe35%3A0x7f6a2a2d0ebbdc94!2sSoftlogic%20Systems!5e0!3m2!1sen!2sin!4v1711427345972!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href ="https://maps.app.goo.gl/ziPanmi1R1x3Jnvq5"target="-blank">
                    <i class="bi bi-geo-alt-fill"></i>No: 10, PT Rajan Rd, K K Nagar, MGR Nagar, K. K. Nagar, Chennai, Tamil Nadu 600078
                </a>
                
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel:+917778889991" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +917778889991
                    </a>
                    <br>
                    <a href="tel:+917778889991" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +917778889991
                    </a>

                    <h5 class="mt-4">Email</h5>
                    <a href="mailto:ask.tjuebdev@gmail.com" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> webdev@gmail.com
                    </a>

                    <h5 class="mt-4">Follow us</h5>
                    <div class="d-flex">
                        <a href="#" class="text-dark fs-5 me-2">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#" class="text-dark fs-5 me-2">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="text-dark fs-5">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                    <button type="submit" class="btn text-dark custom-bg mt-3">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require('inc/footer.php');?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Custom Owl Carousel Testimonial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <style>
    body {
        background-color: #f4f6f9;
        font-family: 'Segoe UI', sans-serif;
        margin: 0;
        padding: 40px 0;
    }

    .custom-testimonial-slider {
        max-width: 700px;
        margin: 0 auto;
    }

    .custom-testimonial-item {
        background: #fff;
        padding: 30px 25px;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin: 15px;
    }

    .custom-profile-img {
        width: 80px !important;
        height: 80px;
        object-fit: cover;
        border-radius: 50%;
        display: block;
        margin: 0 auto 15px;
    }

    .custom-stars {
        color: #f5a623;
        font-size: 1.1rem;
        margin-bottom: 10px;
    }

    .custom-testimonial-item p {
        font-size: 1rem;
        color: #444;
        line-height: 1.6;
        margin-bottom: 10px;
    }

    .custom-testimonial-item h4 {
        font-weight: 600;
        color: #333;
        margin-top: 10px;
    }

    /* Owl nav and dots customization */
    .custom-testimonial-slider .owl-nav button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: #333 !important;
        color: white !important;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        font-size: 20px !important;
        line-height: 1;
    }

    .custom-testimonial-slider .owl-nav .owl-prev {
        left: -45px;
    }

    .custom-testimonial-slider .owl-nav .owl-next {
        right: -45px;
    }

    .custom-testimonial-slider .owl-dots .owl-dot span {
        background: #ccc;
    }

    .custom-testimonial-slider .owl-dots .owl-dot.active span {
        background: #333;
    }
    </style>
</head>

<body>

    <!-- Custom Testimonial Carousel -->
    <div class="custom-testimonial-slider owl-carousel owl-theme">
        <div class="custom-testimonial-item">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah" class="custom-profile-img">
            <div class="custom-stars">★★★★★</div>
            <p>"This platform is intuitive and efficient — a real game-changer!"</p>
            <h4>- Sarah Johnson</h4>
        </div>
        <div class="custom-testimonial-item">
            <img src="https://randomuser.me/api/portraits/men/33.jpg" alt="Mike" class="custom-profile-img">
            <div class="custom-stars">★★★★☆</div>
            <p>"Outstanding support and beautiful user experience!"</p>
            <h4>- Mike Thompson</h4>
        </div>
        <div class="custom-testimonial-item">
            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Priya" class="custom-profile-img">
            <div class="custom-stars">★★★★★</div>
            <p>"The only service I trust for quality and speed. Five stars."</p>
            <h4>- Priya Kumar</h4>
        </div>
    </div>

    <!-- Owl Carousel Init -->
    <script>
    $(document).ready(function() {
        $(".custom-testimonial-slider").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            nav: true,
            dots: true,
            navText: ["❮", "❯"]
        });
    });
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">


    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body>
    <!-- Header Section -->
    <header class="text-white py-2 primary-header">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left: Social Icons (hidden on mobile) -->
                <div class="col-md-3 d-none d-md-flex justify-content-start">
                    <a href="#" class="text-white me-3"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="text-white"><i class="fa-brands fa-instagram"></i></a>
                </div>

                <!-- Center: Offer Text (always visible) -->
                <div class="col-12 col-md-6 text-center">
                    <marquee behavior="scroll" direction="left" scrollamount="6" onmouseover="this.stop();"
                        onmouseout="this.setAttribute('scrollamount', '3'); this.start();" loop="infinite">
                        <a href="#" class="text-white text-decoration-none">🔥 50% OFF on all items! Click here 🔥</a>
                        <a href="#" class="text-white text-decoration-none px-5 ">🔥 90% OFF on all items! Click here
                            🔥</a>
                    </marquee>
                </div>

                <!-- Right: Cart and Profile Icons (hidden on mobile) -->
                <div class="col-md-3 d-none d-md-flex justify-content-end">
                    <a href="#" class="text-white me-3"><i class="fa-solid fa-cart-plus"></i></a>
                    <a href="#" class="text-white"><i class="fa-solid fa-user"></i></a>
                </div>

            </div>
        </div>
    </header>



    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-white
     sticky-top">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand text-dark" href="#"><img src="assets/image/logo-bold.png" width="100px" alt=""></a>

            <div class="d-md-none d-flex align-items-center">
                <!-- Cart Icon -->
                <a href="#" class="text-white me-3">
                    <i class="fa-solid fa-cart-plus"></i>
                </a>

                <!-- Offcanvas Toggle Button (User/Profile Icon) -->
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                    <i class="fa-solid fa-user text-white"></i>
                </button>
            </div>

            <!-- Offcanvas Menu (slides from right) -->
            <div class="offcanvas offcanvas-end bg-dark text-white" tabindex="-1" id="mobileMenu"
                aria-labelledby="mobileMenuLabel" style="width:85%">
                <div class=" offcanvas-header">
                    <h5 class="offcanvas-title" id="mobileMenuLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active text-dark" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="main">
        <div class="carosel-section">
            <div id="animatedCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.shutterstock.com/image-photo/different-perfume-bottles-sampler-on-260nw-1236977521.jpg"
                            class="d-block w-100" alt="Slide 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First Slide</h5>
                            <p>This is a fade-in animated caption.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://static.vecteezy.com/system/resources/previews/030/200/785/non_2x/banner-features-a-selection-of-fragrances-in-elegant-bottles-generative-ai-photo.jpg"
                            class="d-block w-100" alt="Slide 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second Slide</h5>
                            <p>Caption with animation on slide transition.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://t3.ftcdn.net/jpg/08/35/00/26/360_F_835002696_N1DLVjPhmjDBpJ6GJLIt927G5DEulLWm.jpg"
                            class="d-block w-100" alt="Slide 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third Slide</h5>
                            <p>Enjoy smooth fade transitions.</p>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#animatedCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#animatedCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        <div class="product-type-section pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-4">
                        <a href="#">
                            <div class="text-center">
                                <img src="assets/image/perfume.png" class="product-type-image">
                                <h3 class="mt-2">Perfume</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-4">
                        <a href="#">
                            <div class="text-center">
                                <img src="assets/image/car.png" class="product-type-image">
                                <h3 class="mt-2">Car </h3>
                            </div>
                        </a>

                    </div>
                    <div class="col-md-4 col-4">
                        <a href="#">
                            <div class="text-center">
                                <img src="assets/image/candle.png" class="product-type-image">
                                <h3 class="mt-2">Candle</h3>
                            </div>
                        </a>

                    </div>

                </div>
            </div>
        </div>

        <div class="best-seller mt-5">
            <div class="container">
                <h3 class="text-center">BEST SELLER</h3>
                <div class="row mt-5">
                    <div class="col-md-3 " data-aos="fade-up" data-aos-delay="0">
                        <div class="card product-card position-relative">

                            <!-- Ribbon -->
                            <div class="ribbon"><span>NEW</span></div>

                            <!-- Price -->
                            <div class="price-badge">$29.99</div>

                            <img src="https://visualeducation.com/wp-content/uploads/2017/12/Chanel5_product_photography.jpg"
                                class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Wireless Headphones</h5>
                                <p class="text-muted mb-3">High-quality sound with noise cancellation.</p>
                                <a href="#" class="btn btn-danger w-100 rounded-pill">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="card product-card position-relative">

                            <!-- Ribbon -->
                            <div class="ribbon"><span>NEW</span></div>

                            <!-- Price -->
                            <div class="price-badge">$29.99</div>

                            <img src="https://visualeducation.com/wp-content/uploads/2017/12/Chanel5_product_photography.jpg"
                                class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Wireless Headphones</h5>
                                <p class="text-muted mb-3">High-quality sound with noise cancellation.</p>
                                <a href="#" class="btn btn-danger w-100 rounded-pill">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="card product-card position-relative">

                            <!-- Ribbon -->
                            <div class="ribbon"><span>NEW</span></div>

                            <!-- Price -->
                            <div class="price-badge">$29.99</div>

                            <img src="https://visualeducation.com/wp-content/uploads/2017/12/Chanel5_product_photography.jpg"
                                class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Wireless Headphones</h5>
                                <p class="text-muted mb-3">High-quality sound with noise cancellation.</p>
                                <a href="#" class="btn btn-danger w-100 rounded-pill">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="card product-card position-relative">

                            <!-- Ribbon -->
                            <div class="ribbon"><span>NEW</span></div>

                            <!-- Price -->
                            <div class="price-badge">$29.99</div>

                            <img src="https://visualeducation.com/wp-content/uploads/2017/12/Chanel5_product_photography.jpg"
                                class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Wireless Headphones</h5>
                                <p class="text-muted mb-3">High-quality sound with noise cancellation.</p>
                                <a href="#" class="btn btn-danger w-100 rounded-pill">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 " data-aos="fade-up" data-aos-delay="0">
                        <div class="card product-card position-relative">

                            <!-- Ribbon -->
                            <div class="ribbon"><span>NEW</span></div>

                            <!-- Price -->
                            <div class="price-badge">$29.99</div>

                            <img src="https://visualeducation.com/wp-content/uploads/2017/12/Chanel5_product_photography.jpg"
                                class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Wireless Headphones</h5>
                                <p class="text-muted mb-3">High-quality sound with noise cancellation.</p>
                                <a href="#" class="btn btn-danger w-100 rounded-pill">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="card product-card position-relative">

                            <!-- Ribbon -->
                            <div class="ribbon"><span>NEW</span></div>

                            <!-- Price -->
                            <div class="price-badge">$29.99</div>

                            <img src="https://visualeducation.com/wp-content/uploads/2017/12/Chanel5_product_photography.jpg"
                                class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Wireless Headphones</h5>
                                <p class="text-muted mb-3">High-quality sound with noise cancellation.</p>
                                <a href="#" class="btn btn-danger w-100 rounded-pill">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="card product-card position-relative">

                            <!-- Ribbon -->
                            <div class="ribbon"><span>NEW</span></div>

                            <!-- Price -->
                            <div class="price-badge">$29.99</div>

                            <img src="https://visualeducation.com/wp-content/uploads/2017/12/Chanel5_product_photography.jpg"
                                class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Wireless Headphones</h5>
                                <p class="text-muted mb-3">High-quality sound with noise cancellation.</p>
                                <a href="#" class="btn btn-danger w-100 rounded-pill">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="card product-card position-relative">

                            <!-- Ribbon -->
                            <div class="ribbon"><span>NEW</span></div>

                            <!-- Price -->
                            <div class="price-badge">$29.99</div>

                            <img src="https://visualeducation.com/wp-content/uploads/2017/12/Chanel5_product_photography.jpg"
                                class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Wireless Headphones</h5>
                                <p class="text-muted mb-3">High-quality sound with noise cancellation.</p>
                                <a href="#" class="btn btn-danger w-100 rounded-pill">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gender-section mt-5">


            <div class="container my-5">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="gender-card text-white"
                            style="background-image: url('https://www.ellisbrooklyn.com/cdn/shop/files/myth_b8d24b6c-ce1c-49a7-9a8e-464dc279341d.jpg?v=1746632036&width=360');">
                            <div class="overlay-text">
                                FOR HER <span class="arrow">↓</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gender-card text-white"
                            style="background-image: url('https://img.freepik.com/premium-photo/male-holding-up-bottle-perfume_293990-452.jpg?semt=ais_hybrid&w=740');">
                            <div class="overlay-text">
                                FOR HIM <span class="arrow">→</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gender-card text-white"
                            style="background-image: url('https://www.shutterstock.com/image-photo/young-couple-bottles-perfume-on-600nw-2475178043.jpg');">
                            <div class="overlay-text">
                                FOR UNISEX <span class="arrow">→</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="new-arrivel p-3">

            <div class="container">
                <h1 class="text-center">New Arrivle</h1>
                <div class="text-end">
                    <a href="" class="fw-bold">View All >> </a>
                </div>

                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card product-card position-relative">

                            <!-- Ribbon -->
                            <div class="ribbon"><span>NEW</span></div>

                            <!-- Price -->
                            <div class="price-badge">$29.99</div>

                            <img src="https://visualeducation.com/wp-content/uploads/2017/12/Chanel5_product_photography.jpg"
                                class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Wireless Headphones</h5>
                                <p class="text-muted mb-3">High-quality sound with noise cancellation.</p>
                                <a href="#" class="btn btn-danger w-100 rounded-pill">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card product-card position-relative">

                            <!-- Ribbon -->
                            <div class="ribbon"><span>NEW</span></div>

                            <!-- Price -->
                            <div class="price-badge">$29.99</div>

                            <img src="https://visualeducation.com/wp-content/uploads/2017/12/Chanel5_product_photography.jpg"
                                class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Wireless Headphones</h5>
                                <p class="text-muted mb-3">High-quality sound with noise cancellation.</p>
                                <a href="#" class="btn btn-danger w-100 rounded-pill">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card product-card position-relative">

                            <!-- Ribbon -->
                            <div class="ribbon"><span>NEW</span></div>

                            <!-- Price -->
                            <div class="price-badge">$29.99</div>

                            <img src="https://visualeducation.com/wp-content/uploads/2017/12/Chanel5_product_photography.jpg"
                                class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Wireless Headphones</h5>
                                <p class="text-muted mb-3">High-quality sound with noise cancellation.</p>
                                <a href="#" class="btn btn-danger w-100 rounded-pill">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card product-card position-relative">

                            <!-- Ribbon -->
                            <div class="ribbon"><span>NEW</span></div>

                            <!-- Price -->
                            <div class="price-badge">$29.99</div>

                            <img src="https://visualeducation.com/wp-content/uploads/2017/12/Chanel5_product_photography.jpg"
                                class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Wireless Headphones</h5>
                                <p class="text-muted mb-3">High-quality sound with noise cancellation.</p>
                                <a href="#" class="btn btn-danger w-100 rounded-pill">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card product-card position-relative">

                            <!-- Ribbon -->
                            <div class="ribbon"><span>NEW</span></div>

                            <!-- Price -->
                            <div class="price-badge">$29.99</div>

                            <img src="https://visualeducation.com/wp-content/uploads/2017/12/Chanel5_product_photography.jpg"
                                class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Wireless Headphones</h5>
                                <p class="text-muted mb-3">High-quality sound with noise cancellation.</p>
                                <a href="#" class="btn btn-danger w-100 rounded-pill">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="offer-banner">
            <div class="container-fulid">
                <div class="col-md-12">
                    <img width="100%"
                        src="https://prod.parcoscom.hyperx.cloud/media/mageplaza/bannerslider/banner/image/3/_/3_selective_brand_offers_desktop_2.webp?w=3840&q=75"
                        alt="">
                </div>
            </div>

        </div>
        <div class="notes">
            <div class="container">
                <div class="text-center">
                    <p>Best For You</p>
                    <h1>
                        Shop By Notes
                    </h1>
                </div>
                <div class="row  pt-5">


                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="clipboard">
                            <div class="clip">
                                <div class="clip-line"></div>
                            </div>
                            <img src="https://i.pinimg.com/originals/57/fb/de/57fbdebb5816b7bb0156079e9d19dbe3.gif"
                                alt="Spices">
                            <div class="clipboard-title">Citrus Blend</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="clipboard">
                            <div class="clip">
                                <div class="clip-line"></div>
                            </div>
                            <img src="https://www.parcos.com/luxezine/wp-content/uploads/2023/03/Fragrance-Notes.jpg"
                                alt="Spices">
                            <div class="clipboard-title">Citrus Blend</div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="clipboard">
                            <div class="clip">
                                <div class="clip-line"></div>
                            </div>
                            <img src="https://i.pinimg.com/originals/57/fb/de/57fbdebb5816b7bb0156079e9d19dbe3.gif"
                                alt="Spices">
                            <div class="clipboard-title">Citrus Blend</div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="clipboard">
                            <div class="clip">
                                <div class="clip-line"></div>
                            </div>
                            <img src="https://www.parcos.com/luxezine/wp-content/uploads/2023/03/Fragrance-Notes.jpg"
                                alt="Spices">
                            <div class="clipboard-title">Citrus Blend</div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="clipboard">
                            <div class="clip">
                                <div class="clip-line"></div>
                            </div>
                            <img src="https://i.pinimg.com/originals/57/fb/de/57fbdebb5816b7bb0156079e9d19dbe3.gif"
                                alt="Spices">
                            <div class="clipboard-title">Citrus Blend</div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="clipboard">
                            <div class="clip">
                                <div class="clip-line"></div>
                            </div>
                            <img src="https://www.parcos.com/luxezine/wp-content/uploads/2023/03/Fragrance-Notes.jpg"
                                alt="Spices">
                            <div class="clipboard-title">Citrus Blend</div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="clipboard">
                            <div class="clip">
                                <div class="clip-line"></div>
                            </div>
                            <img src="https://i.pinimg.com/originals/57/fb/de/57fbdebb5816b7bb0156079e9d19dbe3.gif"
                                alt="Spices">
                            <div class="clipboard-title">Citrus Blend</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="clipboard">
                            <div class="clip">
                                <div class="clip-line"></div>
                            </div>
                            <img src="https://www.parcos.com/luxezine/wp-content/uploads/2023/03/Fragrance-Notes.jpg"
                                alt="Spices">
                            <div class="clipboard-title">Citrus Blend</div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="clipboard">
                            <div class="clip">
                                <div class="clip-line"></div>
                            </div>
                            <img src="https://i.pinimg.com/originals/57/fb/de/57fbdebb5816b7bb0156079e9d19dbe3.gif"
                                alt="Spices">
                            <div class="clipboard-title">Citrus Blend</div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="clipboard">
                            <div class="clip">
                                <div class="clip-line"></div>
                            </div>
                            <img src="https://www.parcos.com/luxezine/wp-content/uploads/2023/03/Fragrance-Notes.jpg"
                                alt="Spices">
                            <div class="clipboard-title">Citrus Blend</div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="clipboard">
                            <div class="clip">
                                <div class="clip-line"></div>
                            </div>
                            <img src="https://i.pinimg.com/originals/57/fb/de/57fbdebb5816b7bb0156079e9d19dbe3.gif"
                                alt="Spices">
                            <div class="clipboard-title">Citrus Blend</div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="clipboard">
                            <div class="clip">
                                <div class="clip-line"></div>
                            </div>
                            <img src="https://www.parcos.com/luxezine/wp-content/uploads/2023/03/Fragrance-Notes.jpg"
                                alt="Spices">
                            <div class="clipboard-title">Citrus Blend</div>

                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="testimonial mt-5">
            <h1 class="text-center pt-4">Happy Customers</h1>
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
        </div>

        <footer class="footer py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-logo">
                            <ul>
                                <li><a href="">Home</a></li>
                                <li><a href="">About</a></li>
                                <li><a href="">Shop</a></li>
                                <li><a href="">Privacy And Policy</a></li>
                                <li><a href="">Term And Condition </a></li>
                            </ul>

                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="footer-logo">
                            <ul>
                                <li><a href="">For Her</a></li>
                                <li><a href="">For Him</a></li>
                                <li><a href="">For Unisex</a></li>

                            </ul>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="text-white">Satair Lake side CHS, Mountain Bridge CHS (New Mhada
                            Colony), Powai, JVL Road, Kulra (W), Mumbai – 400072
                            (0.632)</p>
                        <p><a href="" class="text-white"><i class="fa-solid fa-phone-volume"></i> 0987654321</a></p>
                        <p><a href="" class="text-white"><i class="fa-solid fa-envelope"></i>
                                example@gmail.com</a></p>
                        <p>
                            <a href="" class="text-white  social-icone"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="" class="text-white px-2 social-icone"><i class="fa-brands fa-instagram"></i></a>
                            <a href="" class="text-white px-2 social-icone"><i class="fa-brands fa-youtube"></i></a>
                        </p>

                    </div>


                </div>
            </div>
            <div class="text-center border-top pt-4">
                <p class="text-white">© 2025 , Perfumes . All Rights Reserved</p>
            </div>

        </footer>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
    AOS.init({
        duration: 800,
        once: true
    });
    </script>
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

    <script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            // nav: true ,
            autoplay: true, // Enable autoplay
            autoplayTimeout: 5000, // 10 seconds = 10000 milliseconds
            autoplayHoverPause: true, // Pause on hover
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
    });
    </script>


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
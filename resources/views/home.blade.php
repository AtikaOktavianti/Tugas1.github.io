@extends('app')
@section('content')
   <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">Welcome to <strong class="text-dark">KWT Anggrek</strong></p>
                                    <h1 class="display-1 text-dark mb-4 animated zoomIn">Produksi Serbuk Daun Kelor</h1>
                                    <a href="" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">Welcome to <strong class="text-dark">KWT Anggrek</strong></p>
                                    <h1 class="display-1 text-dark mb-4 animated zoomIn">Produksi Serbuk Daun Kelor</h1>
                                    <a href="" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div id="about" class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s" src="img/about-1.jpeg" alt="">
                            <img class="img-fluid bg-white w-50 wow fadeIn" data-wow-delay="0.2s" src="img/about-3.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s" src="img/about-4.jpeg" alt="">
                            <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s" src="img/about-2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">About Us</p>
                        <h1 class="display-6">Daun Kelor</h1>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="img/about-5.jpeg" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h5>Kesegaran Wedang Kelor</h5>
                            <p class="mb-0">Wedang Daun Kelor adalah minuman herbal dari daun kelor yang kaya nutrisi dan antioksidan. Dikenal dapat meningkatkan kekebalan tubuh, energi, dan kesehatan kulit, wedang ini memiliki rasa ringan herba, sering disajikan dengan tambahan madu atau jahe.</p>
                        </div>
                    </div>
                    <div class="border-top mb-4"></div>
                    <div class="row g-3">
                        <div class="col-sm-8">
                            <h5>Serbuk Daun Kelor</h5>
                            <p class="mb-0">Serbuk Daun Kelor adalah bubuk dari daun kelor yang dikeringkan dan digiling. Kaya akan nutrisi, termasuk protein, vitamin, dan antioksidan, serbuk ini digunakan sebagai suplemen kesehatan untuk meningkatkan energi dan mendukung sistem kekebalan tubuh. Cocok dicampurkan dalam makanan atau minuman.</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="img/about-6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Products Start -->
    <div id="products" class="container-xxl py-5">
        <div class="container">
    </div>
    <div class="container-fluid product py-5 my-5">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p>
                <h1 class="display-6">Daun Kelor Memiliki Efek Posistif yang Kompleks pada Tubuh</h1>
            </div>
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
                <a href="" class="d-block product-item rounded">
                    <img src="img/product-1.jpg" alt="">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Rempah-Rempah</h4>
                        <span class="text-body">Rempah-rempah seperti jahe, kayu manis, dan kunyit meningkatkan rasa dan kesehatan. Jahe membantu pencernaan, kayu manis mengatur gula darah, dan kunyit bersifat anti-inflamasi.</span>
                    </div>
                </a>
                <a href="" class="d-block product-item rounded">
                    <img src="img/product-2.jpg" alt="">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Wedang Kelor</h4>
                        <span class="text-body">Wedang Kelor adalah minuman herbal dari daun kelor (Moringa oleifera) yang diseduh dengan air panas. Kaya nutrisi, termasuk vitamin dan antioksidan, wedang ini bermanfaat untuk meningkatkan kekebalan tubuh dan energi, serta biasanya disajikan dengan madu atau jahe.</span>
                    </div>
                </a>
                <a href="" class="d-block product-item rounded">
                    <img src="img/product-3.jpg" alt="">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Serbuk Kelor</h4>
                        <span class="text-body">Serbuk Kelor adalah bubuk dari daun kelor yang dikeringkan dan digiling. Kaya akan nutrisi, termasuk vitamin, mineral, dan antioksidan, serbuk ini digunakan sebagai suplemen untuk meningkatkan energi dan mendukung kekebalan tubuh, serta dapat ditambahkan ke dalam smoothie atau makanan lainnya.</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Products End -->
    @endsection
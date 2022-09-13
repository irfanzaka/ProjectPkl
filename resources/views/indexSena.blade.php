@extends('layouts.indexNew')
@section('main')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="sena/img/home1.JPG" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To PT SENA</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Engineer Berpengalaman</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Engineer yang telah melalui pelatihan berkelanjutan dan sertifikasi untuk menjaga standar kualitas tertinggi.</p>
                                <a href="#first" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="sena/img/home2.JPG" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To PT SENA</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Portofolio Nasional</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Membangun reputasi yang baik selama beberapa tahun dengan menyediakan layanan engineering tepat sasaran</p>
                                <a href="#first" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="sena/img/home3.JPG" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To PT SENA</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Aliansi Internasional</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Menjadi perusahaan penyedia layanan engineering yang terpercaya dan dapat diandalkan.</p>
                                <a href="#first" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div id="first">
        <br>
        <br>
        <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
            <div class="container about px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 ps-lg-0" style="min-height: 700px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="sena/img/aboutSena.jpg" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-lg-5 pe-lg-0">
                            <div class="section-title text-start">
                                <h1 class="display-5 mb-4">Tentang Kami</h1>
                            </div>
                            <p class="mb-4 pb-2">PT Solusi Energy Nusantara (SENA) yang didirikan di Jakarta pada tanggal 20 April 2015, merupakan anak perusahaan dari PT PGAS Solution, 
                                                 perusahaan terkemuka di Indonesia dalam bidang transmisi dan distribusi gas bumi. Tujuan dari pendirian SENA adalah untuk memberikan layanan 
                                                 jasa engineering di industri oil dan gas.</p>
                            <div class="row g-4 mb-4 pb-2">
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                            <i class="fa fa-users fa-2x text-primary"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                            <p class="fw-medium mb-0">Happy Clients</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                            <i class="fa fa-check fa-2x text-primary"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                            <p class="fw-medium mb-0">Projects Done</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="about.html" class="btn btn-primary py-3 px-5">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Job Listed -->
    <div id="second">
    <br><br><br><br><br>
    <div class="joblisted">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="section-title text-center">
                    <h1 class="display-5 mb-5">Job Listed</h1>
                </div>
                    <ul class="job-listings mb-5">
                        <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                            <a href="job-single"></a>
                            <div class="job-listing-logo">
                                <img src="sena/img/mechanicalEngineer.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                            </div>
                            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                                <div class="job-listing-position">
                                    <h2>MECHANICAL ENGINEER</h2>
                                    <strong>Jakarta</strong>
                                </div>
                                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                    <span class="fa fa-map-marker-alt">Jakarta</span>
                                </div>
                                <div class="job-listing-meta">
                                    <span class="badge badge-warning">apply</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="job-listings mb-5">
                        <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                            <a href="job-single"></a>
                            <div class="job-listing-logo">
                                <img src="img/mechanicalEngineer.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                            </div>
                            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                                <div class="job-listing-position">
                                    <h2>MECHANICAL ENGINEER</h2>
                                    <strong>Jakarta</strong>
                                    <i class="bi bi-dot"></i>
                                    <strong>4d</strong>
                                </div>
                                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                    <span class="fa fa-map-marker-alt">Jakarta</span>
                                </div>
                                <div class="job-listing-meta">
                                    <span class="badge badge-danger">document</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="job-listings mb-5">
                        <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                            <a href="job-single"></a>
                            <div class="job-listing-logo">
                                <img src="img/mechanicalEngineer.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                            </div>
                            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                                <div class="job-listing-position">
                                    <h2>MECHANICAL ENGINEER</h2>
                                    <strong>Jakarta</strong>
                                    <i class="bi bi-dot" style="color: #b3b3b3;"></i>
                                    <strong>4d</strong>
                                </div>
                                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-15">
                                    <span class="icon-room">Jakarta</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="job-listings mb-5">
                        <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                            <a href="job-single"></a>
                            <div class="job-listing-logo">
                                <img src="img/mechanicalEngineer.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                            </div>
                            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                                <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                    <h2>MECHANICAL ENGINEER</h2>
                                    <strong>Jakarta</strong>
                                </div>
                                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                    <span class="icon-room">Jakarta</span>
                                </div>
                                <div class="job-listing-meta">
                                    <span class="badge badge-danger">document</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="row pagination-wrap">
                        <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
                            <span>Showing 1-7 Of 43,167 Jobs</span>
                        </div>
                        <div class="col-md-6 text-center text-md-right">
                            <div class="custom-pagination ml-auto">
                                <a href="#" class="prev">Prev</a>
                                <div class="d-inline-block">
                                    <a href="#" class="active">1</a>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#">4</a>
                                </div>
                                <a href="#" class="next">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- End Job Listed -->

    <!-- Contact Start -->
    <div id="last"></div>
    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Contact Us</h1>
                        </div>
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    @endsection
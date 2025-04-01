<!DOCTYPE html>
<html lang="en">
<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="themepaa">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Zemo - Portfolio Template">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <!-- title -->
    <title>Shravan - Personal Portfolio</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- theme css -->
    <link href="static/css/dark/style.css" rel="stylesheet">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- jQuery (Required) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function () {
            @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}");
            @endif

            @if(Session::has('error'))
                toastr.error("{{ Session::get('error') }}");
            @endif

            @if(Session::has('info'))
                toastr.info("{{ Session::get('info') }}");
            @endif

            @if(Session::has('warning'))
                toastr.warning("{{ Session::get('warning') }}");
            @endif
    });
    </script>
</head>
<!-- Body Start -->
<body class="dark-bg">
    <!-- page loading -->
    <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>
    <!-- End -->
    <!-- Header -->
    <header class="main-header">
        <nav class="navbar header-nav header-white header-transparent navbar-expand-lg one-page-nav">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="#">SK<span style="color: #f71735;"> .TECH.</span></a>
                <!-- / -->
                <!-- Mobile Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-collapse-toggle" aria-controls="navbar-collapse-toggle"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- / -->
                <!-- Top Menu -->
                <div class="collapse navbar-collapse justify-content-end" id="navbar-collapse-toggle">
                    <ul class="navbar-nav ml-auto">
                        <li><a class="nav-link" data-scroll-nav="0" href="#home"><span>Home</span></a></li>
                        <li><a class="nav-link" data-scroll-nav="1" href="#about"><span>About Us</span></a></li>
                        <li><a class="nav-link" data-scroll-nav="2" href="#services"><span>Services</span></a></li>
                        <li><a class="nav-link" data-scroll-nav="3" href="#work"><span>Portfolio</span></a></li>
                        <li><a class="nav-link" data-scroll-nav="4" href="#blog"><span>Blog</span></a></li>
                        <li><a class="nav-link" data-scroll-nav="5" href="#contactus"><span>Contact</span></a></li>
                    </ul>
                </div>
                <!-- / -->
            </div><!-- Container -->
        </nav> <!-- Navbar -->
    </header>
    <!-- End Header -->
    <main>
        <!-- section -->
        <section id="home" data-scroll-index="0" class="home-banner">
            <div class="social-share nav d-none d-lg-flex">
                <a href="#">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="#">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="#">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="#">
                    <i class="bi bi-linkedin"></i>
                </a>
            </div>
            <div class="placeholder">
                <h5>S<br />H<br />R<br />A<br>V<br>A<br>N</h5>
            </div>
            <div class="container">
                <div class="row min-vh-100 align-items-center">
                    <div class="col-lg-6">
                        <div class="typo-box">
                            <h6>Hi There, I'm</h6>
                            <h1 class="font-alt">Shravan Kumar</h1>
                            <h2>Web <span id="type-it"></span></h2>
                            <p>The namics of how users interact with interactive elements within a user interface flow
                                chart based on container proportion.</p>
                            <div class="btn-bar">
                                <a class="px-btn px-btn-white" href="#contactus">Contact Me</a>
                                <a class="px-btn px-btn-white" href="#" download="{{asset('ShravanKumarResume.pdf')}}">Download Resume</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="home-avatar-box">
                            <div class="home-avatar-in">
                                <img src="static/img/personal.png" title="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-ani dark-text-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 40" preserveAspectRatio="none">
                    <path fill="currentColor" d="">
                        <animate attributeName="d" begin="0s" dur="10s" repeatCount="indefinite" values="
                      M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;
                      M0,40 C200,40 400,0 600,0 C800,0 800,40 1000,40 L1000,50 L0,50 L0,40 Z;
                      M0,30 C200,30 200,0 400,0 C600,0 800,40 1000,40 L1000,50 L0,50 L0,30 Z;
                      M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;"></animate>
                    </path>
                </svg>
            </div>
        </section>
        <!-- End section -->
        <!-- About Us -->
        <section id="about" data-scroll-index="1" class="section about-section dark-bg-1">
            <div class="placeholder">
                <h5>About</h5>
            </div>
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-7 ps-xl-5">
                        <div class="about-row about-text">
                            <div class="sm-title">
                                <h3>About Me</h3>
                            </div>
                            <h6>Hello, my name is <span>Shravan Kumar</span> and i am <span>full stack developer</span>
                            </h6>
                            <p>web developer specializing in HTML, CSS, JavaScript, PHP, and Laravel. I am focuses on
                                security and is currently working on projects like a job portal, personal portfolio, and
                                e-commerce website. His interests include LMS development, cooking, reading, and
                                traveling..</p>
                        </div>
                        {{-- <div class="about-row tag-text">
                            <div class="sm-title">
                                <h3>Design Tools</h3>
                            </div>
                            <div class="nav">
                                <span>Adobe Xd</span>
                                <span> Illustrator</span>
                                <span>Photoshop </span>
                                <span>Figma </span>
                                <span>Sketch</span>
                            </div>
                        </div> --}}
                        <div class="about-row tag-text">
                            <div class="sm-title">
                                <h3>Technologies and Skills</h3>
                            </div>
                            <div class="nav">
                                <span>Html</span>
                                <span>Css</span>
                                <span>Bootstrap</span>
                                <span>jQuery</span>
                                <span>PHP</span>
                                <span>Laravel</span>
                                <span>React</span>
                                <span>Javascript</span>
                                <span>Ui/Ux Design</span>
                            </div>
                        </div>
                        <div class="about-row progress-text">
                            <div class="sm-title">
                                <h3>Work Process</h3>
                            </div>
                            <div class="row g-1">
                                <div class="col-6 col-sm-3">
                                    <div class="d-flex align-items-center">
                                        <span>#01</span>
                                        <label class="col ps-2">Research</label>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="d-flex align-items-center">
                                        <span>#02</span>
                                        <label class="col ps-2">Design</label>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="d-flex align-items-center">
                                        <span>#03</span>
                                        <label class="col ps-2">Codeing</label>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="d-flex align-items-center">
                                        <span>#04</span>
                                        <label class="col ps-2">Launch</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-left">
                            <img src="static/img/personal.png" title="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us -->
        <!-- Services -->
        <section id="services" data-scroll-index="2" class="section services-section">
            <div class="placeholder">
                <h5>Services</h5>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h2><span>My Services</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4 my-3">
                        <div class="feature-box-1">
                            <div class="icon hexagon">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Unique design</h5>
                                <p>I design and develop services for customers of all sizes, specializing in creating
                                    stylish, modern websites.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4 my-3">
                        <div class="feature-box-1">
                            <div class="icon hexagon">
                                <i class="bi bi-layout-text-window"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Different Layout</h5>
                                <p>I offer various layouts: Grid, Flexbox, Single-Column, Two-Column, Card, Responsive,
                                    Fixed, Sidebar, Hero.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4 my-3">
                        <div class="feature-box-1">
                            <div class="icon hexagon">
                                <i class="bi bi-layers"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Make it Simple</h5>
                                <p>I create simple, user-friendly websites that focus on clean design and easy
                                    navigation and so on.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4 my-3">
                        <div class="feature-box-1">
                            <div class="icon hexagon">
                                <i class="bi bi-phone"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Responsiveness</h5>
                                <p>I provide responsive designs that ensure your website looks great on all devices,
                                    from desktops to mobiles.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4 my-3">
                        <div class="feature-box-1">
                            <div class="icon hexagon">
                                <i class="bi bi-bug"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Testing for Perfection</h5>
                                <p>I focus on thorough testing to ensure your website works flawlessly and delivers a
                                    perfect user experience.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4 my-3">
                        <div class="feature-box-1">
                            <div class="icon hexagon">
                                <i class="bi bi-command"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Advanced Options</h5>
                                <p>I offer advanced options to customize your website with enhanced features and
                                    functionality to meet your needs.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                </div>
            </div>
        </section>
        <!-- End Services -->
        <!-- Resume -->
        <section class="section section-resume dark-bg-1">
            <div class="placeholder">
                <h5>Experience</h5>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h2><span>My Experience</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-lg-10">
                        <div class="resume-box">
                            <ul>
                                <li class="row g-0">
                                    <div class="col-sm-4 col-xl-3">
                                        <h6>Aug, 2024 – Sep, 2024</h6>
                                    </div>
                                    <div class="col-sm-8 col-xl-9 ps-xl-4">
                                        <h5>Junior Designer</h5>
                                        <p>I work as a Junior Designer, focusing on creating clean, user-friendly
                                            designs while gaining experience in various design tools and techniques.</p>
                                        <span>- Softpro India, Lucknow</span>
                                    </div>
                                </li>
                                <li class="row g-0">
                                    <div class="col-sm-4 col-xl-3">
                                        <h6>Sep, 2024 – Oct, 2024</h6>
                                    </div>
                                    <div class="col-sm-8 col-xl-9 ps-xl-4">
                                        <h5>Web Developer</h5>
                                        <p>I am a Web Developer, specializing in creating responsive, secure, and
                                            user-friendly websites using technologies like HTML, CSS,
                                            JavaScript,Bootstrap</p>
                                        <span>- SoftPro India, Lucknow</span>
                                    </div>
                                </li>
                                <li class="row g-0">
                                    <div class="col-sm-4 col-xl-3">
                                        <h6>Nov, 2024 – March, 2025</h6>
                                    </div>
                                    <div class="col-sm-8 col-xl-9 ps-xl-4">
                                        <h5>Full Stack Developer</h5>
                                        <p>I am a Full Stack Developer, skilled in both front-end and back-end
                                            development, working with technologies like HTML, CSS, JavaScript, PHP,
                                            Laravel, and databases to build complete, dynamic web applications</p>
                                        <span>- Softpro India, Lucknow</span>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Resume -->
        <!-- Portfolio -->
        <section id="work" data-scroll-index="3" class="section portfolio-section">
            <div class="placeholder">
                <h5>portfolio</h5>
            </div>
            <div class="container">
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h2><span>My Portfolio</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row g-3 lightbox-gallery">
                    @if (count($port) > 0)
                        @foreach ($port as $portItem)
                        <div class="col-lg-6">
                            <div class="portfolio-box row g-0">
                                <div class="portfolio-img col-sm-6 col-lg-7 h-100">
                                    <a class="p-icon gallery-link" href="{{asset($portItem->image)}}">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                    <img src="{{asset($portItem->image)}}" title="" alt="">
                                </div>
                                <div class="portfolio-info col-sm-6 col-lg-5 h-100">
                                    <h2>{{$portItem->title}}</h2>
                                    <p>{{$portItem->description}}.</p>
                                    <div class="nav"><span>{{$portItem->btnName}}</span></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                    <p>Data Not Found</p>
                    @endif
                   
                    
                </div>
            </div>
        </section>
        <!-- End Portfolio -->
        <!-- Testimonisla -->
        <section class="section testimonials-section dark-bg-1">
            <div class="placeholder">
                <h5>testimonials</h5>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h2><span>Testimonials</span></h2>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel pt-3" data-items="2" data-nav-dots="true" data-md-items="2" data-sm-items="1"
                    data-xs-items="1" data-xx-items="1" data-space="30">
                    <!-- testimonials -->
                    @if (count($feed) > 0)
                        @foreach ($feed as $feedItem)
                            @if ($feedItem->aprove == 'Approve')
                                <div class="testimonial-col">
                                    <div class="d-flex">
                                        <div class="img">
                                            <img src="{{asset($feedItem->image)}}" title="" alt="">
                                        </div>
                                        <div class="col">
                                            <p>{{$feedItem->description}}.</p>
                                            <div class="tc-info">
                                                <h6>{{$feedItem->name}}</h6>
                                                <span>
                                                    @for ($i=1;$i<=$feedItem->rating;$i++)
                                                    <label for="rate-1" style="--i:1"><i class="fa-solid fa-star text-warning"></i></label>
                                                    @endfor
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <p>No Feedback Found</p>
                    @endif

                    <!-- / -->

                    <!-- / -->
                </div>
            </div>
        </section>
        <!-- End Testimonisla -->
        <!-- Blog -->
        <section id="blog" data-scroll-index="4" class="section">
            <div class="placeholder">
                <h5>Blog</h5>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h2><span>Latest Blog</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if (count($lblogs) > 0)
                        @foreach ($lblogs as $blogItem)
                        <div class="col-lg-4 my-3">
                            <div class="blog-post">
                                <div class="blog-img">
                                    <div class="data">

                                        <span>14</span>
                                        <small>JAN</small>
                                    </div>
                                    <a href="blog.html">
                                        <img src="{{asset($blogItem->image)}}" title="" alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h6><a href="blog.html">{{$blogItem->title}}</a></h6>
                                    <p>{{$blogItem->description}}.</p>
                                    <div class="btn-bar">
                                        <a href="blog.html" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                    <p>No Blog Found</p>
                    @endif
                   
                   
                </div>
            </div>
        </section>
        <!-- End Blog -->
        <!-- Contact -->
        <section id="contactus" data-scroll-index="5" class="section dark-bg-1 contactus-section">
            <div class="placeholder">
                <h5>Contact</h5>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h2><span>Contact Me</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 my-3">
                        <div class="contact-info">
                            <div class="contact-name">
                                <div class="sm-title">
                                    <h3>Email</h3>
                                </div>
                                <p>sharvanmaurya608@gmail.com<br />support@domain.com</p>
                            </div>
                            <div class="contact-name">
                                <div class="sm-title">
                                    <h3>Visit My Studio</h3>
                                </div>
                                <p>Jankipuram sector j Lucknow, <br>Sector j 226006 Lucknow</p>
                            </div>
                            <div class="contact-name">
                                <div class="sm-title">
                                    <h3>Phone</h3>
                                </div>
                                <p>+91 7992196200</p>
                            </div>
                            <div class="social-share nav">
                                <a href="#">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 my-3">
                        <div class="contact-form">
                            <div class="sm-title">
                                <h3>Get In Touch</h3>
                            </div>
                            <form action="{{route('Homeindex')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="name" id="name" placeholder="Name *" class="form-control @error('name')
                                               is-invalid @enderror" type="text">
                                            @error('name')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="email" id="email" placeholder="Email *" class="form-control @error('email')
                                               is-invalid @enderror" type="email">
                                            @error('email')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input name="subject" id="subject" placeholder="Subject *"
                                                class="form-control @error('subject')  is-invalid @enderror"
                                                type="text">
                                            @error('subject')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="msg" id="message" placeholder="Your message *" rows="3"
                                                class="form-control @error('msg')
                                                   is-invalid @enderror"></textarea>
                                            @error('msg')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="send">
                                            <button class="px-btn px-btn-white" type="submit" value="Send"><span>Contact
                                                    Us</span></button>
                                        </div>
                                        <span id="suce_message" class="text-success" style="display: none">Message Sent
                                            Successfully</span>
                                        <span id="err_message" class="text-danger" style="display: none">Message Sending
                                            Failed</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="p-3 dark-bg shadow grayscale">
                            <div class="ratio ratio-21x9">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3151.840107317064!2d144.955925!3d-37.817214!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1520156366883"
                                    allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact -->
    </main>
    <!-- Footer -->
    {{-- <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 my-2">
                    <div class="nav justify-content-center justify-content-md-start">
                        <a href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 my-2 text-center text-md-end">
                    <p>© 2021 copyright <a href="https://pxdraft.com/wrap/zemo/zemo/pxdraft.com">pxdraft</a> </p>
                </div>
            </div>
        </div>
    </footer> --}}
    <!-- End Footer -->

    <!-- footer section start  -->
    <div class="row bg footer py-3" style="background:#011627;">
        <div class="col-sm-10 mx-auto" data-aos="fade-up" data-aos-duration="2000">
            <div class="row d-flex px-3 justify-content-between">
                <div class="col-sm-4">
                    <a href="{{route('index')}}" class="">
                        <h2 style="font-weight: 900;" class="m-0"><span>SK.</span>Tech<span>.</span></h2>
                    </a>
                    <p class="footer_text mt-2 text-muted">
                        SK.Tech is a platform where I provide responsive, secure, and user-friendly web development solutions, including front-end, back-end, and custom feature integration.
                    </p>
                    <div class="footer_icon mt-2">
                        <a href="#">
                            <i class="fa-brands fa-facebook-f px-3"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-google"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3 col-6">
                    <h2 class="pink fe-bold">Services</h2>
                    <ul class="footer_link">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">App Developemnt</a></li>
                        <li><a href="#">Cloud Services</a></li>
                        <li><a href="#">Domain adn Hosting</a></li>
                        <li><a href="#">Seo Optimization</a></li>
                        <li><a href="#">Social Media</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-6">
                    <h2 class="pink fe-bold">Feedback</h2>
                    <form action="{{route('feedback')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="contact-form p-0">
                            <input name="name" id="name" placeholder="Name *" class="form-control @error('name')
                               is-invalid @enderror" type="text">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="contact-form p-0 mt-2">
                            <input name="image" id="image" class="form-control @error('image')
                               is-invalid @enderror" type="file">
                            @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="contact-form p-0 mt-2">
                            <textarea name="description" id="msg" placeholder="Enter your message *" class="form-control @error('msg')
                               is-invalid @enderror" type="file"></textarea>
                            @error('msg')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <p><span class="star-rating">
                                    <label for="rate-1" style="--i:1"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" id="rate-1" value="1">
                                    <label for="rate-2" style="--i:2"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" id="rate-2" value="2" checked>
                                    <label for="rate-3" style="--i:3"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" id="rate-3" value="3">
                                    <label for="rate-4" style="--i:4"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" id="rate-4" value="4">
                                    <label for="rate-5" style="--i:5"><i class="fa-solid fa-star"></i></label>
                                    <input type="radio" name="rating" id="rate-5" value="5">
                                </span></p>
                        </div>
                        <div class="mt-2">
                            <button class="px-btn px-btn-white">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="bg-light">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-between align-items-center">
                    <p><a href="#">Sk.Tech. </a>© 2025 All Right Reserved</p>
                    <p>
                        <a href="#" style="font-size: 14px">Terms of Service |</a>
                        <a href="#" style="font-size: 14px">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section End  -->

    <script src="static/js/jquery-3.5.1.min.js"></script>
    <script src="static/plugin/appear/jquery.appear.js"></script>
    <script src="static/plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="static/plugin/one-page/scrollIt.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/5.0.2/typeit.min.js"></script>
    <script src="static/js/newCustom.js"></script>
    <script src="static/js/custom.js"></script>
    <script src="static/js/mail_send.js"></script>
    <!-- end -->
</body>
</html>
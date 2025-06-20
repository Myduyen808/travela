<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Travela - {{ $title }}</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon"href="{{ asset('clients/assets/images/logos/favicon.png') }}" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- Flaticon -->
    <link rel="stylesheet"href="{{ asset('clients/assets/css/flaticon.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet"href="{{ asset('clients/assets/css/fontawesome-5.14.0.min.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet"href="{{ asset('clients/assets/css/bootstrap.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet"href="{{ asset('clients/assets/css/magnific-popup.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet"href="{{ asset('clients/assets/css/nice-select.min.css') }}">
    <!-- jQuery UI -->
    <link rel="stylesheet"href="{{ asset('clients/assets/css/jquery-ui.min.css') }}">
    <!-- Animate -->
    <link rel="stylesheet"href="{{ asset('clients/assets/css/aos.css') }}">
    <!-- Slick -->
    <link rel="stylesheet"href="{{ asset('clients/assets/css/slick.min.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet"href="{{ asset('clients/assets/css/style.css') }}">
        <!-- date time picker -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/jquery.datetimepicker.min.css') }}" />

     {{--boxicons--}}
     <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel='stylesheet'>
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="custom-loader"></div>
        </div>

        <!-- main header -->
        <header class="main-header header-one">
            <!--Header-Upper-->
            <div class="header-upper bg-white py-30 rpy-0">
                <div class="container-fluid clearfix">

                    <div class="header-inner rel d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo"><a href="index.html"><img
                                        src="{{ asset('clients/assets/images/logos/logo-two.png') }}" alt="Logo"
                                        title="Logo"></a></div>
                        </div>

                        <div class="nav-outer mx-lg-auto ps-xxl-5 clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <div class="mobile-logo">
                                        <a href="index.html">
                                            <img src="{{ asset('clients/assets/images/logos/logo-two.png') }}"
                                                alt="Logo" title="Logo">
                                        </a>
                                    </div>

                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                        data-bs-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class=" current"><a href="{{ route('home') }}">Trang chủ</a> </li>
                                        <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                                        <li class="dropdown"><a href="#">Tours</a>
                                            <ul>
                                                <li><a href="{{ route('tours') }}">Tour</a></li>
                                                <li><a href="{{ route('team') }}">Hướng dẫn viên</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('destination') }}">Điểm đến</a></li>
                                        <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                                        {{-- <li><a href="{{ route('blog') }}">blog</a> --}}
                                        </li>
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>

                        <!-- Menu Button -->
                        <div class="menu-btns py-10">
                            <a href="contact.html" class="theme-btn style-two bgc-secondary">
                                <span data-hover="Book Now">Đặt Ngay</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                            <!-- menu sidbar -->
                            <div class="menu-sidebar">
                                <button class="bg-transparent">
                                    <i class='bx bxs-user bx-tada'
                                     style="font-size: 36px; color:rgba(0, 0, 0, 0.3);"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>


        {{-- <!--Form Back Drop-->
        <div class="form-back-drop"></div> --}}

        {{-- <!-- Hidden Sidebar -->
        <section class="hidden-bar">
            <div class="inner-box text-center">
                <div class="cross-icon"><span class="fa fa-times"></span></div>
                <div class="title">
                    <h4 tyle="font-family: 'Segoe UI', Tahoma, sans-serif; font-size: 22px;  color: beige; text-align: center; font-weight: 600; letter-spacing: 1px; margin: 10px 0; text-transform: capitalize; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);">Đặt lịch hẹn</h4>
                </div>

                <!--Appointment Form-->
                <div class="appointment-form">
                    <form method="post" action="https://webtendtheme.net/html/2024/ravelo/contact.html">
                        <div class="form-group">
                            <input type="text" name="text" value="" placeholder="Tên" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Địa chỉ email" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="theme-btn style-two">
                                <span data-hover="Gửi ngay">Gửi ngay</span>
                                <i class="fal fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!--Social Icons-->
                <div class="social-style-one">
                    <a href="contact.html"><i class="fab fa-twitter"></i></a>
                    <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                    <a href="contact.html"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </section>
        <!--End Hidden Sidebar --> --}}


        <!-- Page Banner Start -->
        <section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover"
            style="background-image: url({{ asset('clients/assets/images/hero/thuyennhieu.png') }});">
            <div class="container">
                <div class="banner-inner text-white mb-50">
                    <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50"
                        style="font-size: 36px; font-weight: 700; color: #fff; text-transform: capitalize; font-family: 'Segoe UI', sans-serif; letter-spacing: 2px; margin-bottom: 20px; line-height: 1.2; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);">
                        Tours</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                            data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="index.html">Trang chủ </a></li>
                            <li class="breadcrumb-item active">Hướng Dẫn Viên</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
          {{-- <div class="container container-1400">
            <div class="search-filter-inner" data-aos="zoom-out-down" data-aos-duration="1500" data-aos-offset="50">
                <div class="filter-item clearfix">
                    <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
                    <span class="title">Điểm đến</span>
                    <select name="city" id="city">
                         <option value="value1">City or Region</option>
                        <option value="value2">City</option>
                        <option value="value2">Region</option>
                    </select>
                </div>
                <div class="filter-item clearfix">
                    <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                    <span class="title">Ngày khởi hành</span>
                    <input type="text" id="start_date" name="start_date" class="datetimepicker datetimepicker-custom" placeholder="Chọn ngày đi" readonly>
                </div>
                <div class="filter-item clearfix">
                    <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                    <span class="title">Ngày kết thúc</span>
                    <input type="text" id="end_date" name="end_date" class="datetimepicker datetimepicker-custom" placeholder="Chọn ngày về" readonly>
                </div>
                <div class="search-button">
                    <button class="theme-btn">
                        <span data-hover="Search">Search</span>
                        <i class="far fa-search"></i>
                    </button>
                </div>
            </div>
        </div> --}}
        <!-- Page Banner End -->


        <!-- Tour Grid Area start -->
        <section class="tour-grid-page py-100 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-10 rmb-75">
                        <div class="shop-sidebar">
                            <div class="widget widget-filter" data-aos="fade-up" data-aos-delay="50"
                                data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="widget-title">Lọc theo giá</h6>
                                <div class="price-filter-wrap">
                                    <div class="price-slider-range"></div>
                                    <div class="price">
                                        <span>Giá </span>
                                        <input type="text" id="price" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="widget widget-activity" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <h6 class="widget-title">Các hoạt động</h6>
                                <ul class="radio-filter">
                                    <li>
                                        <input class="form-check-input" type="radio" checked name="ByActivities"
                                            id="activity1">
                                        <label for="activity1">Đền Asakusa, Tokyo, Nhật Bản<span>18</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity2">
                                        <label for="activity2"> Rome, Ý <span>29</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity3">
                                        <label for="activity3">Tamnougalt, Morocco<span>23</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity4">
                                        <label for="activity4"> Bali, Indonesia<span>25</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity5">
                                        <label for="activity5">Vịnh Hạ Long, Việt Nam<span>30</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity6">
                                        <label for="activity6">Bangkok, Thái Lan<span>28</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity6">
                                        <label for="activity6">Machu Picchu, Peru<span>16</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity6">
                                        <label for="activity6">New York, Mỹ<span>22</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity6">
                                        <label for="activity6">Rio de Janeiro, Brazil<span>25</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity6">
                                        <label for="activity6"> Barcelona, Tây Ban Nha<span>15</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity6">
                                        <label for="activity6">Cairo, Ai Cập<span>17</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities"
                                            id="activity6">
                                        <label for="activity6">Cape Town, Nam Phi<span>12</span></label>
                                    </li>
                                </ul>
                            </div>

                            <div class="widget widget-reviews" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <h6 class="widget-title">Theo đánh giá</h6>
                                <ul class="radio-filter">
                                    <li>
                                        <input class="form-check-input" type="radio" checked name="ByReviews"
                                            id="review1">
                                        <label for="review1">
                                            <span class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByReviews"
                                            id="review2">
                                        <label for="review2">
                                            <span class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt white"></i>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByReviews"
                                            id="review3">
                                        <label for="review3">
                                            <span class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star-half-alt white"></i>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByReviews"
                                            id="review4">
                                        <label for="review4">
                                            <span class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star-half-alt white"></i>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByReviews"
                                            id="review5">
                                        <label for="review5">
                                            <span class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star-half-alt white"></i>
                                            </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>

                            <div class="widget widget-languages" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <h6 class="widget-title">Các Nước</h6>
                                <ul class="radio-filter">
                                    <li>
                                        <input class="form-check-input" type="radio" checked name="ByLanguages"
                                            id="language1">
                                        <label for="language1">Anh Mỹ</label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByLanguages"
                                            id="language2">
                                        <label for="language2">Anh</label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByLanguages"
                                            id="language3">
                                        <label for="language3">Đức</label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByLanguages"
                                            id="language4">
                                        <label for="language4">Nhật Bản</label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByLanguages"
                                            id="language5">
                                        <label for="language5">Việt Nam</label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByLanguages"
                                            id="language6">
                                        <label for="language6">Pháp</label>
                                    </li>
                                </ul>
                            </div>

                            <div class="widget widget-duration" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <h6 class="widget-title">Thời gian</h6>
                                <ul class="radio-filter">
                                    <li>
                                        <input class="form-check-input" type="radio" checked name="Duration"
                                            id="duration1">
                                        <label for="duration1">1 - 2 ngày</label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="Duration"
                                            id="duration2">
                                        <label for="duration2">2 - 4 ngày</label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="Duration"
                                            id="duration3">
                                        <label for="duration3">4 - 8 ngày</label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="Duration"
                                            id="duration4">
                                        <label for="duration4">hơn 8 ngày</label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="Duration"
                                            id="duration5">
                                        <label for="duration5">Nhiều ngày</label>
                                    </li>
                                </ul>
                            </div>

                            {{-- <div class="widget widget-tour" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <h6 class="widget-title">Các tour du lịch phổ biến</h6>
                                <div class="destination-item tour-grid style-three bgc-lighter">
                                    <div class="image">
                                        <span class="badge">giảm 10%</span>
                                        <img src="{{asset('clients/assets/images/widgets/bien.jpg')}}" alt="Tour">
                                    </div>
                                    <div class="content">
                                        <div class="destination-header">
                                            <span class="location"><i class="fal fa-map-marker-alt"></i> Bali,
                                                Indonesia</span>
                                            <div class="ratting">
                                                <i class="fas fa-star"></i>
                                                <span>(4.8)</span>
                                            </div>
                                        </div>
                                        <h6><a href="tour-details.html">Biển Bali, Indonesia</a></h6>
                                    </div>
                                </div>
                                <div class="destination-item tour-grid style-three bgc-lighter">
                                    <div class="image">
                                        <span class="badge">giảm 10%</span>
                                        <img src="{{asset('clients/assets/images/widgets/phap.jpg')}}" alt="Tour">
                                    </div>
                                    <div class="content">
                                        <div class="destination-header">
                                            <span class="location"><i class="fal fa-map-marker-alt"></i> Paris, Pháp</span>
                                            <div class="ratting">
                                                <i class="fas fa-star"></i>
                                                <span>(4.8)</span>
                                            </div>
                                        </div>
                                        <h6><a href="tour-details.html">Paris, Thành phố tình yêu</a></h6>
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        {{-- <div class="widget widget-cta mt-30" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="content text-white">
                                <span class="h6">Khám phá thế giới</span>
                                <h3 style="font-size: 20px; font-weight: bold; color: #fff; text-align: left; font-family: 'Arial', sans-serif; margin: 0;">Những địa điểm du lịch tốt nhất</h3>
                                <a href="tour-list.html" class="theme-btn style-two bgc-secondary">
                                    <span data-hover="Khám phá ngay">Khám phá ngay</span>
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="image">
                                <img src="{{ asset('assets/images/widgets/cta-widget.png') }}" alt="CTA">
                            </div>
                            <div class="cta-shape"><img
                                    src="{{ asset('clients/assets/images/widgets/cta-shape2.png') }}" alt="Shape">
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-9">
                        <div class="shop-shorter rel z-3 mb-20">
                            <ul class="grid-list mb-15 me-2">
                                <li><a href="#"><i class="fal fa-border-all"></i></a></li>
                                <li><a href="#"><i class="far fa-list"></i></a></li>
                            </ul>
                            <div class="sort-text mb-15 me-4 me-xl-auto">
                                Tìm thấy 34 tour
                            </div>
                            <div class="sort-text mb-15 me-4">
                                Sắp xếp theo
                            </div>
                            <select>
                                <option value="default" selected="">Sắp xếp theo</option>
                                <option value="new">Mới nhất</option>
                                <option value="old">Cũ nhất</option>
                                <option value="hight-to-low">Từ cao đến thấp</option>
                                <option value="low-to-high">Từ thấp đến cao</option>
                            </select>
                        </div>

                        <div class="tour-grid-wrap">
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-offset="50">
                                        <div class="image">
                                            <span class="badge bgc-pink">Nổi bật</span>
                                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                            <img src="{{asset('clients/assets/images/destinations/vhl2.png')}}" alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i>Vịnh Hạ Long, Việt Nam</span>
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html"  style="text-decoration: none; color: inherit;">Vịnh Hạ Long là kỳ quan thiên nhiên nổi bật của Quảng Ninh, nằm ở phía bắc Việt Nam.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i> 3 ngày 2 đêm</li>
                                                <li><i class="far fa-user"></i> 5-8 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$58.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                                        <div class="image">
                                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                            <img src="{{ asset('clients/assets/images/destinations/japan.png') }}"
                                                alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i>Đền Asakusa, Tokyo, Nhật Bản</span>
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html" style="text-decoration: none; color: inherit;">Senso-ji là ngôi đền cổ nhất Tokyo, nổi tiếng với kiến trúc truyền thống.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i> 3 ngày 2 đêm</li>
                                                <li><i class="far fa-user"></i> 6-7 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$59.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                                        <div class="image">
                                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                            <img src="{{ asset('clients/assets/images/destinations/samac.png') }}"
                                                alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i>Tamnougalt, Morocco</span>
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html"  style="text-decoration: none; color: inherit;">Một ốc đảo cổ kính nằm bên dòng sông Draa, nổi bật với pháo đài cổ kasbah và nét văn hóa Berber.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i> 3 ngày 2 đêm</li>
                                                <li><i class="far fa-user"></i> 5-8 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$58.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-offset="50">
                                        <div class="image">
                                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                            <img src="{{ asset('clients/assets/images/destinations/Bangkok.png') }}"
                                                alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i>Bangkok, Thái Lan</span>
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html" style="text-decoration: none; color: inherit;"> Thành phố sôi động kết hợp giữa truyền thống và hiện đại.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i> 2 ngày 1 đêm</li>
                                                <li><i class="far fa-user"></i> 4-6 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$50.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                                        <div class="image">
                                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                            <img src="{{asset('clients/assets/images/destinations/Roma.png')}}" alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Ý</span>
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html" style="text-decoration: none; color: inherit;"> Thủ đô lịch sử lừng danh với những công trình cổ đại như Đấu trường La Mã, Đền Pantheon...</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i> 4 ngày 3 đêm</li>
                                                <li><i class="far fa-user"></i> 6-8 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$80.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                                        <div class="image">
                                            <span class="badge">giảm 10%</span>
                                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                            <img src="{{ asset('clients/assets/images/destinations/bali.png') }}"
                                                alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html" style="text-decoration: none; color: inherit;">Thiên đường nhiệt đới nổi tiếng với những bãi biển tuyệt đẹp, thu hút du khách khắp thế giới.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i> 2 ngày 1 đêm</li>
                                                <li><i class="far fa-user"></i> 3-4 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$45.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-offset="50">
                                        <div class="image">
                                            <span class="badge">giảm 10%</span>
                                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                            <img src="{{ asset('clients/assets/images/destinations/tbn.png') }}"
                                                alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i> Barcelona, Tây Ban Nha</span>
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html" style="text-decoration: none; color: inherit;">Thành phố nổi tiếng với kiến trúc độc đáo của Gaudí, bãi biển xinh đẹp và văn hóa sống động.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i>5 ngày 4 đêm</li>
                                                <li><i class="far fa-user"></i> 8-10 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$90.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                                        <div class="image">
                                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                            <img src="{{ asset('clients/assets/images/destinations/newyork.png') }}"
                                                alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i> New York, Mỹ</span>
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html" style="text-decoration: none; color: inherit;"> Thành phố sôi động với biểu tượng như tượng Nữ thần Tự do, Central Park và Times Square.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i> 3 ngày 2 đêm</li>
                                                <li><i class="far fa-user"></i> 4-6 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$68.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                                        <div class="image">
                                            <span class="badge bgc-pink">Nổi bật</span>
                                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                            <img src="{{ asset('clients/assets/images/destinations/aicap.png') }}"
                                                alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i>Cairo, Ai Cập</span>
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html" style="text-decoration: none; color: inherit;"> Thành phố lịch sử nổi tiếng với những kim tự tháp cổ đại và bảo tàng Ai Cập.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i>7 ngày 6 đêm</li>
                                                <li><i class="far fa-user"></i> 15-20 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$101.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-xl-4 col-md-6">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-offset="50">
                                        <div class="image">
                                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                            <img src="{{ asset('clients/assets/images/destinations/Brazil.png') }}"
                                                alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i>Rio de Janeiro, Brazil</span>
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html" style="text-decoration: none; color: inherit;">Thành phố nổi tiếng với lễ hội Carnival, bãi biển Copacabana và tượng Chúa cứu thế.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i> 2 ngày 1 đêm</li>
                                                <li><i class="far fa-user"></i> 5-7 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$49.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                                        <div class="image">
                                            <span class="badge">giảm 10%</span>
                                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                            <img src="{{ asset('clients/assets/images/destinations/peru2.png') }}"
                                                alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i>Machu Picchu, Peru</span>
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html" style="text-decoration: none; color: inherit;">Di tích Inca cổ kính nằm trên đỉnh núi, nổi tiếng với vẻ đẹp huyền bí và kiến trúc độc đáo.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i> 6 ngày 5 đêm</li>
                                                <li><i class="far fa-user"></i> 12-14 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$79.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                                        <div class="image">
                                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                            <img src="{{ asset('clients/assets/images/destinations/namphi.png') }}"
                                                alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i>Cape Town, Nam Phi </span>
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: bold; color: #333; line-height: 1.5;"><a href="tour-details.html" style="text-decoration: none; color: inherit;"> Thành phố ven biển nổi tiếng với núi Table, bãi biển đẹp và sự kết hợp văn hóa đa dạng.</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i>4 ngày 3 đêm</li>
                                                <li><i class="far fa-user"></i> 3-4 khách</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$89.00</span>/người</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="col-lg-12">
                                    <ul class="pagination justify-content-center pt-15 flex-wrap" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-offset="50">
                                        <li class="page-item disabled">
                                            <span class="page-link"><i class="far fa-chevron-left"></i></span>
                                        </li> --}}
                                        {{-- <li class="page-item active">
                                            <span class="page-link">
                                                1
                                                <span class="sr-only">(current)</span>
                                            </span>
                                        </li> --}}
                                        {{-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i
                                                    class="far fa-chevron-right"></i></a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Tour Grid Area end -->


        <!-- Newsletter Area start -->
        <section class="newsletter-three bgc-primary py-100 rel z-1"
            style="background-image: url({{ asset('clients/assets/images/newsletter/newsletter-bg-lines.png') }});">
            <div class="container container-1500">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="newsletter-content-part text-white rmb-55" data-aos="zoom-in-right"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title counter-text-wrap mb-45">
                                <h2
                                    style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold; color: #333333; text-align: center; line-height: 1.5; margin-top: 20px; margin-bottom: 20px; letter-spacing: 1px;">
                                    Đăng ký nhận bản tin của chúng tôi để không bỏ lỡ những ưu đãi hấp dẫn và những mẹo
                                    vặt hữu ích.</h2>
                                <p>Một trang web với <span class="count-text plus" data-speed="3000"
                                        data-stop="34500">0</span> trải nghiệm phổ biến nhất</p>
                            </div>
                            <form class="newsletter-form mb-15" action="#">
                                <input id="news-email" type="email" placeholder="Địa chỉ email" required>
                                <button type="submit" class="theme-btn bgc-secondary style-two">
                                    <span data-hover="Đăng ký">Đăng ký</span>
                                    <i class="fal fa-arrow-right"></i>
                                </button>
                            </form>
                            <p>Không yêu cầu thẻ tín dụng. Không có cam kết</p>
                        </div>
                        <div class="newsletter-bg-image" data-aos="zoom-in-up" data-aos-delay="100"
                            data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('clients/assets/images/newsletter/newsletter-bg-image.png') }}"
                                alt="Newsletter">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="newsletter-image-part bgs-cover"
                            style="background-image: url({{ asset('clients/assets/images/newsletter/newsletter-two-right.jpg') }});"
                            data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter Area end -->


        <!-- footer area start -->
        <footer class="main-footer bgs-cover overlay rel z-1 pb-25"
            style="background-image: url({{ asset('clients/assets/images/backgrounds/footer.jpg') }});">
            <div class="container">
                <div class="footer-top pt-100 pb-30">
                    <div class="row justify-content-between">
                        <div class="col-xl-5 col-lg-6" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="footer-widget footer-text">
                                <div class="footer-logo mb-25">
                                    <a href="index.html"><img
                                            src="{{ asset('clients/assets/images/logos/logo.png') }}"
                                            alt="Logo"></a>
                                </div>
                                <p>Chúng tôi tạo ra những hành trình tùy chỉnh phù hợp với sở thích của bạn, đảm bảo mỗi
                                    chuyến đi đều mượt mà và khám phá những viên ngọc ẩn mà ít người biết đến.</p>
                                <div class="social-style-one mt-15">
                                    <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                                    <a href="contact.html"><i class="fab fa-youtube"></i></a>
                                    <a href="contact.html"><i class="fab fa-pinterest"></i></a>
                                    <a href="contact.html"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6" data-aos="fade-up" data-aos-delay="50"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title counter-text-wrap mb-35">
                                <h2>Đăng ký nhận bản tin</h2>
                                <p>Một trang web với <span class="count-text plus" data-speed="3000"
                                        data-stop="34500">0</span> trải nghiệm phổ biến mà bạn sẽ nhớ mãi</p>
                            </div>
                            <form class="newsletter-form mb-50" action="#">
                                <input id="news-email" type="email" placeholder="Địa chỉ email" required>
                                <button type="submit" class="theme-btn bgc-secondary style-two">
                                    <span data-hover="Đăng ký">Đăng ký</span>
                                    <i class="fal fa-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-area pt-95 pb-45">
                <div class="container">
                    <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
                        <div class="col col-small" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="footer-widget footer-links">
                                <div class="footer-title">
                                    <h5>Các dịch vụ</h5>
                                </div>
                                <ul class="list-style-three">
                                    <li><a href="destination-details.html">Đặt tour du lịch</a></li>
                                    <li><a href="destination-details.html"> Đặt khách sạn</a></li>
                                    <li><a href="destination-details.html">Đặt vé</a></li>
                                    <li><a href="destination-details.html">Dịch vụ cho thuê</a></li>
                                    <li><a href="destination-details.html">Hướng dẫn viên du lịch</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-small" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="footer-widget footer-links">
                                <div class="footer-title">
                                    <h5>Công ty</h5>
                                </div>
                                <ul class="list-style-three">
                                    <li><a href="about.html">Giới thiệu về công ty</a></li>
                                    <li><a href="blog.html">Blog cộng đồng</a></li>
                                    <li><a href="contact.html">Việc làm và cơ hội nghề nghiệp</a></li>
                                    <li><a href="blog.html"> Blog tin tức mới nhất</a></li>
                                    <li><a href="contact.html">Liên hệ với chúng tôi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-small" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="footer-widget footer-links">
                                <div class="footer-title">
                                    <h5>Điểm đến</h5>
                                </div>
                                <ul class="list-style-three">
                                    <li><a href="destination-details.html">Chuyến đi săn ở châu Phi</a></li>
                                    <li><a href="destination-details.html">Alaska & Canada</a></li>
                                    <li><a href="destination-details.html">Nam Mỹ</a></li>
                                    <li><a href="destination-details.html">Trung Đông</a></li>
                                    <li><a href="destination-details.html">Châu Âu</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-small" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="footer-widget footer-links">
                                <div class="footer-title">
                                    <h5>Danh mục</h5>
                                </div>
                                <ul class="list-style-three">
                                    <li><a href="contact.html">Phiêu lưu mạo hiểm</a></li>
                                    <li><a href="contact.html">Đi bộ đường dài & leo núi</a></li>
                                    <li><a href="contact.html">Tour đạp xe</a></li>
                                    <li><a href="contact.html">Tour gia đình</a></li>
                                    <li><a href="contact.html"> Tour khám phá động vật hoang dã</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-md-6 col-10 col-small" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="footer-widget footer-contact">
                                <div class="footer-title">
                                    <h5> Liên hệ với chúng tôi</h5>
                                </div>
                                <ul class="list-style-one">
                                    <li><i class="fal fa-map-marked-alt"></i> Tầng 83, khu D-block, số 45 đường 4, Việt
                                        Nam</li>
                                    <li><i class="fal fa-envelope"></i> <a
                                            href="duyenb2203435@student.ctu.edu.vn">duyenb2203435@student.ctu.edu.vn</a>
                                    </li>
                                    <li><i class="fal fa-clock"></i> Thứ 2 - Thứ 6, 7 sáng - 5 chiều</li>
                                    <li><i class="fal fa-phone-volume"></i> <a href="callto:+88012334588">+880 (123)
                                            345 88</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pt-20 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="copyright-text text-center text-lg-start">
                                <p> 2025 <a href="{{ route('home') }}">Travela</a>, Đã đăng ký bản quyền</p>
                            </div>
                        </div>
                        <div class="col-lg-7 text-center text-lg-end">
                            <ul class="footer-bottom-nav">
                                <li><a href="about.html">Điều khoản sử dụng</a></li>
                                <li><a href="about.html">Chính sách bảo mật
                                    </a></li>
                                <li><a href="about.html">Thông báo pháp lý</a></li>
                                <li><a href="about.html">Khả năng truy cập</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Scroll Top Button -->
                    <button class="scroll-top scroll-to-target" data-target="html"><img
                            src="{{ asset('clients/assets/images/icons/scroll-up.png') }}" alt="Scroll  Up"></button>
                </div>
            </div>
        </footer>
        <!-- footer area end -->




        <!-- Jquery -->
        <script src="{{ asset('clients/assets/js/jquery-3.6.0.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('clients/assets/js/bootstrap.min.js') }}"></script>
        <!-- Appear Js -->
        <script src="{{ asset('clients/assets/js/appear.min.js') }}"></script>
        <!-- Slick -->
        <script src="{{ asset('clients/assets/js/slick.min.js') }}"></script>
        <!-- Magnific Popup -->
        <script src="{{ asset('clients/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Nice Select -->
        <script src="{{ asset('clients/assets/js/jquery.nice-select.min.js') }}"></script>
        <!-- Image Loader -->
        <script src="{{ asset('clients/assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- Jquery UI -->
        <script src="{{ asset('clients/assets/js/jquery-ui.min.js') }}"></script>
        <!-- Isotope -->
        <script src="{{ asset('clients/assets/js/isotope.pkgd.min.js') }}"></script>
        <!--  AOS Animation -->
        <script src="{{ asset('clients/assets/js/aos.js') }}"></script>
        <!-- Custom script -->
        <script src="{{ asset('clients/assets/js/script.js') }}"></script>

        <script src="{{asset('clients/assets/js/jquery.datetimepicker.full.min.js') }}"></script>
</body>


</html>

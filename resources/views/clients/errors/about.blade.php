@include('clients.blocks.header')



{{-- <!--Form Back Drop-->
<div class="form-back-drop"></div> --}}

{{-- <!-- Hidden Sidebar -->
<section class="hidden-bar">
    <div class="inner-box text-center">
        <div class="cross-icon"><span class="fa fa-times"></span></div>
        <div class="title">
            <h4>Get Appointment</h4>
        </div>

        <!--Appointment Form-->
        <div class="appointment-form">
            <form method="post" action="https://webtendtheme.net/html/2024/ravelo/contact.html">
                <div class="form-group">
                    <input type="text" name="text" value="" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" value="" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <textarea placeholder="Message" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="theme-btn style-two">
                        <span data-hover="Submit now">Submit now</span>
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


{{-- <!-- Page Banner Start -->
<section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover"
    style="background-image: url({{asset('clients/assets/images/banner/banner.jpg')}});">
    <div class="container">
        <div class="banner-inner text-white">
            <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">About Us
            </h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200"
                    data-aos-duration="1500" data-aos-offset="50">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- Page Banner End --> --}}


<!-- About Area start -->
<section class="about-area-two py-100 rel z-1">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-3" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                <span class="subtitle mb-35"  style="font-size: 20px; font-weight: 700; color: #2c3e50; font-family: 'Segoe UI', sans-serif; letter-spacing: 1px; text-transform: uppercase; display: inline-block; margin-bottom: 20px;">Giới thiệu công ty</span>
            </div>
            <div class="col-xl-9">
                <div class="about-page-content" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    <div class="row">
                        <div class="col-lg-8 pe-lg-5 me-lg-5">
                            <div class="section-title mb-25">
                                <h2 style="font-family: 'Segoe UI', sans-serif; font-size: 32px; color: #333; text-align: left;
                                font-weight: bold; letter-spacing: 2px; text-transform: uppercase;  text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.15); margin: 20px 0; padding-left: 30px;">Cảm nhận sự chuyên nghiệp vô song với các dịch vụ du lịch và tour đẳng cấp thế giới</h2>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="experience-years rmb-20">
                                <span class="title bgc-secondary">năm kinh nghiệm</span>
                                <span class="text">Chúng tôi có</span>
                                <span class="years">20+</span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <p style="font-family: 'Segoe UI', sans-serif; font-size: 18px; color: #444; line-height: 1.6; text-align: justify;font-weight: normal; letter-spacing: 0.5px; margin: 20px 0; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1); padding: 10px 15px; background-color: #f9f9f9; border-radius: 5px;">Chúng tôi tạo ra những trải nghiệm thành phố sâu sắc, đưa du khách vào hành trình khám phá bản chất và sức hấp dẫn của cuộc sống đô thị. Các tour du lịch được hướng dẫn bởi chuyên gia của chúng tôi sẽ hé lộ những khu phố sôi động, các địa danh mang tính biểu tượng, và những kho báu ẩn giấu làm nên sự độc đáo của mỗi thành phố.</p>
                            <ul class="list-style-two mt-35">
                                <ul style="list-style-type: none; padding: 0; font-family: 'Segoe UI', sans-serif; font-size: 16px; color: #333;"> <li style="margin: 8px 0; font-weight: bold; white-space: nowrap;">Công ty chuyên nghiệp về trải nghiệm</li>
                                    <ul style="list-style-type: none; padding: 0; font-family: 'Segoe UI', sans-serif; font-size: 16px; color: #333;"> <li style="margin: 8px 0; font-weight: bold; white-space: nowrap;">Đội ngũ chuyên nghiệp</li>
                                    <ul style="list-style-type: none; padding: 0; font-family: 'Segoe UI', sans-serif; font-size: 16px; color: #333;"> <li style="margin: 8px 0; font-weight: bold; white-space: nowrap;">Du lịch chi phí thấp</li>
                                    <ul style="list-style-type: none; padding: 0; font-family: 'Segoe UI', sans-serif; font-size: 16px; color: #333;"> <li style="margin: 8px 0; font-weight: bold; white-space: nowrap;">Hỗ trợ trực tuyến 24/7</li>
                            </ul>
                            <a href="about.html" class="theme-btn style-three mt-30">
                                <span data-hover="Khám phá các tour du lịch">Khám phá các tour du lịch</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Area end -->


<!-- Features Area start -->
<section class="about-features-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4 col-md-6">
                <div class="about-feature-image" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <img src="{{ asset('clients/assets/images/about/thiennhien2.png') }}" alt="About">
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="about-feature-image" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                    data-aos-offset="50">
                    <img src="{{ asset('clients/assets/images/about/bien2.png') }}" alt="About">
                </div>
            </div>
            <div class="col-xl-4 col-md-8">
                <div class="about-feature-boxes" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="feature-item style-three bgc-secondary">
                        <div class="icon-title">
                            <div class="icon"><i class="flaticon-award-symbol"></i></div>
                            <h5><a href="destination-details.html">Chúng tôi là một công ty từng đoạt giải thưởng</a></h5>
                        </div>
                        <div class="content">
                            <p>Tại Pinnacle Business Solutions, sự tận tâm đối với sự xuất sắc và đổi mới đã mang lại cho chúng tôi nhiều giải thưởng trong ngành.</p>
                        </div>
                    </div>
                    <div class="feature-item style-three bgc-primary">
                        <div class="icon-title">
                            <div class="icon"><i class="flaticon-tourism"></i></div>
                            <h5><a href="destination-details.html">Hơn 5.000 điểm đến du lịch phổ biến</a></h5>
                        </div>
                        <div class="content">
                            <p>Đội ngũ chuyên gia của chúng tôi cam kết phát triển các chiến lược tiên tiến nhằm thúc đẩy thành công.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Area end -->

<!-- About Us Area start -->
<section class="about-us-area py-100 rpb-90 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6">
                <div class="about-us-content rmb-55" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mb-25" style="font-family: 'Montserrat', sans-serif; text-align: center;" >
                        <h2  style="font-size: 28px; font-weight: 600; line-height: 1.4; color: #2c3e50; text-transform: none;">Hành trình của bạn là ưu tiên hàng đầu của chúng tôi
                        </h2>
                        <h2  style="font-size: 28px; font-weight: 600; line-height: 1.4; color: #2c3e50; text-transform: none;">Cùng khám phá điều khiến chúng tôi trở nên khác biệt</h2>
                    </div>
                    <p style="font-family: 'Open Sans', sans-serif; font-size: 18px; line-height: 1.8; color: #555; text-align: center; max-width: 800px; margin: 0 auto;">Chúng tôi nỗ lực vượt mong đợi để biến giấc mơ du lịch của bạn thành hiện thực – từ những điểm đến bí ẩn đến các địa danh không thể bỏ lỡ.
                    </p>
                    <div class="divider counter-text-wrap mt-45 mb-55"><span>Chúng tôi có <span><span
                                    class="count-text plus" data-speed="3000" data-stop="25">0</span> năm</span> kinh nghiệm</span></div>
                    <div class="row">
                        <div class="col-6">
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text k-plus" data-speed="3000" data-stop="3">0</span>
                                <span class="counter-title">Điểm đến phổ biến</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text m-plus" data-speed="3000" data-stop="9">0</span>
                                <span class="counter-title">khách hàng hài lòng</span>
                            </div>
                        </div>
                    </div>
                    <a href="destination1.html" class="theme-btn mt-10 style-two">
                        <span data-hover="Explore Destinations">Khám phá các điểm đến</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                <div class="about-us-image">
                    <div class="shape"><img src="{{asset('clients/assets/images/about/shape1.png')}}" alt="Shape"></div>
                    <div class="shape"><img src="{{asset('clients/assets/images/about/shape2.png')}}" alt="Shape"></div>
                    <div class="shape"><img src="{{asset('clients/assets/images/about/shape3.png')}}" alt="Shape"></div>
                    <div class="shape"><img src="{{asset('clients/assets/images/about/shape4.png')}}" alt="Shape"></div>
                    <div class="shape"><img src="{{asset('clients/assets/images/about/shape5.png')}}" alt="Shape"></div>
                    <div class="shape"><img src="{{asset('clients/assets/images/about/shape6.png')}}" alt="Shape"></div>
                    <div class="shape"><img src="{{asset('clients/assets/images/about/shape7.png')}}" alt="Shape"></div>
                    <img src="{{asset('clients/assets/images/about/about.png')}}" alt="About">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Area end -->


<!-- Features Area start -->
<section class="about-feature-two bgc-black pt-100 pb-45 rel z-1">
    <div class="container">
        <div class="section-title text-center text-white counter-text-wrap mb-50" data-aos="fade-up"
            data-aos-duration="1500" data-aos-offset="50">
            <h2 style="font-family: 'Segoe UI', sans-serif; font-size: 24px; font-weight: bold; text-align: center; letter-spacing: 1px; text-transform: capitalize; line-height: 1.4; margin: 20px 0;">Tối ưu hóa trải nghiệm của bạn với Ravelo Tours & Travels</h2>
            <p>Một địa điểm với <span class="count-text plus" data-speed="3000" data-stop="34500">0</span>  trải nghiệm phổ biến nhất mà bạn sẽ nhớ mãi.</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="feature-item style-two">
                    <div class="icon"><i class="flaticon-save-money"></i></div>
                    <div class="content">
                        <h5><a href="destination-details.html">Cam kết giá tốt nhất</a></h5>
                        <p>Chúng tôi tin tưởng vào giá trị của mình và cam kết cung cấp mức giá cạnh tranh nhất cho khách hàng.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="feature-item style-two">
                    <div class="icon"><i class="flaticon-travel-1"></i></div>
                    <div class="content">
                        <h5><a href="destination-details.html">Điểm đến đa dạng</a></h5>
                        <p>Mỗi chuyến đi là một cơ hội để bạn trải nghiệm và khám phá những điểm đến độc đáo trên khắp thế giới.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="feature-item style-two">
                    <div class="icon"><i class="flaticon-booking"></i></div>
                    <div class="content">
                        <h5><a href="destination-details.html">Đặt chỗ nhanh</a></h5>
                        <p>Đặt chỗ nhanh trên Internet là một trong những cách thuận tiện nhất để lên kế hoạch cho chuyến đi của bạn.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="feature-item style-two">
                    <div class="icon"><i class="flaticon-guidepost"></i></div>
                    <div class="content">
                        <h5><a href="destination-details.html">Hướng dẫn du lịch tốt nhất</a></h5>
                        <p>Cung cấp hướng dẫn du lịch tốt nhất để giúp bạn lên kế hoạch cho chuyến đi hoàn hảo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape">
        <img src="{{ asset('clients/assets/images/video/shape1.png') }}" alt="shape">
    </div>
</section>
<!-- Features Area end -->


{{-- <!-- Video Area start -->
<div class="video-area pt-25 rel z-1">
    <div class="container">
        <div class="video-wrap" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
            <img src="{{ asset('clients/assets/images/video/video-bg.jpg') }}" alt="Video">
            <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play" tabindex="-1"><i
                    class="fas fa-play"></i></a>
        </div>
    </div>
    <div class="for-bg bgc-black">
        <div class="shape">
            <img src="{{ asset('clients/assets/images/video/shape2.png') }}" alt="shape">
        </div>
    </div>
</div>
<!-- Video Area end --> --}}

<!--Team Area start -->
  <section class="row justify-content-center">
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="team-item hover-content" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
            <img src="{{ asset('clients/assets/images/about/duyen.png') }}" alt="Guide" style="margin-top: 10px;">
               <div class="content">
                <h6 style="font-size: 18px; font-weight: 600; color: #2c3e50; margin: 10px 0 4px; font-family: 'Segoe UI', sans-serif; letter-spacing: 0.5px;">Mỹ Duyên</h6>
                <span class="designation" style="font-size: 14px; color: #7f8c8d; font-style: italic; font-family: 'Segoe UI', sans-serif; display: block; margin-bottom: 10px;">Founder</span>
                <div class="social-style-one inner-content">
                    <a href="contact.html"><i class="fab fa-twitter"></i></a>
                    <a href="contact.html"><i class="fab fa-facebook"></i></a>
                    <a href="contact.html"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
             </div>
          </div>
      </div>
   </div>
</div>
</section>
<!--Team Area end -->



{{-- <!-- Testimonials Area start -->
<section class="testimonials-area py-100 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="testimonial-left-content rmb-50" data-aos="fade-right" data-aos-duration="1500"
                    data-aos-offset="50">
                    <img src="{{ asset('clients/assets/images/testimonials/testimonial-left2.png') }}"
                        alt="Testimonial">
                    <div class="happy-customer text-white bgc-primary">
                        <h6>850K+ Happy Customer</h6>
                        <div class="feature-authors mb-15">
                            <img src="{{ asset('clients/assets/images/features/feature-author1.jpg') }}"
                                alt="Author">
                            <img src="{{ asset('clients/assets/images/features/feature-author2.jpg') }}"
                                alt="Author">
                            <img src="{{ asset('clients/assets/images/features/feature-author3.jpg') }}"
                                alt="Author">
                            <span>4k+</span>
                        </div>
                        <hr>
                        <p>Positive Reviews</p>
                        <div class="testi-header">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-right-content" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mb-55">
                        <h2><span>5280</span> Global Clients Say About Us Services</h2>
                    </div>
                    <div class="testimonials-active">
                        <div class="testimonial-item">
                            <div class="testi-header">
                                <div class="quote"><i class="flaticon-double-quotes"></i></div>
                                <h4>Quality Services</h4>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="text">"Our trip was absolutely a perfect, thanks this travel agency! They
                                took care of every detail, from to accommodations, and even suggested incredible
                                experiences"</div>
                            <div class="author">
                                <div class="image"><img
                                        src="{{ asset('clients/assets/images/testimonials/author.jpg') }}"
                                        alt="Author"></div>
                                <div class="content">
                                    <h5>Randall V. Vasquez</h5>
                                    <span>Graphics Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testi-header">
                                <div class="quote"><i class="flaticon-double-quotes"></i></div>
                                <h4>Quality Services</h4>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="text">"Our trip was absolutely a perfect, thanks this travel agency! They
                                took care of every detail, from to accommodations, and even suggested incredible
                                experiences"</div>
                            <div class="author">
                                <div class="image"><img
                                        src="{{ asset('clients/assets/images/testimonials/author.jpg') }}"
                                        alt="Author"></div>
                                <div class="content">
                                    <h5>Randall V. Vasquez</h5>
                                    <span>Graphics Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials Area end --> --}}


<!-- Client Logo Area start -->
<div class="client-logo-area mb-100">
    <div class="container">
        <div class="client-logo-wrap pt-60 pb-55">
            <div class="text-center mb-40" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                <h6  style="font-size: 16px; font-weight: 600; color: #34495e; font-family: 'Segoe UI', sans-serif; margin-bottom: 10px; letter-spacing: 0.3px;">Chúng tôi được các chuyên trang uy tín giới thiệu:</h6>
            </div>
            <div class="client-logo-active">
                <div class="client-logo-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                    <a href="#"><img src="{{ asset('clients/assets/images/client-logos/client-logo1.png') }}"
                            alt="Client Logo"></a>
                </div>
                <div class="client-logo-item" data-aos="flip-up" data-aos-delay="50" data-aos-duration="1500"
                    data-aos-offset="50">
                    <a href="#"><img src="{{ asset('clients/assets/images/client-logos/client-logo2.png') }}"
                            alt="Client Logo"></a>
                </div>
                <div class="client-logo-item" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <a href="#"><img src="{{ asset('clients/assets/images/client-logos/client-logo3.png') }}"
                            alt="Client Logo"></a>
                </div>
                <div class="client-logo-item" data-aos="flip-up" data-aos-delay="150" data-aos-duration="1500"
                    data-aos-offset="50">
                    <a href="#"><img src="{{ asset('clients/assets/images/client-logos/client-logo4.png') }}"
                            alt="Client Logo"></a>
                </div>
                <div class="client-logo-item" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500"
                    data-aos-offset="50">
                    <a href="#"><img src="{{ asset('clients/assets/images/client-logos/client-logo5.png') }}"
                            alt="Client Logo"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Client Logo Area end -->

@include('clients.blocks.footer')

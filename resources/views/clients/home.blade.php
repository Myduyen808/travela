@include('clients.blocks.header_home')
@include('clients.blocks.banner_home')


{{-- <!--Form Back Drop-->
<div class="form-back-drop"></div>

        <!-- Hidden Sidebar -->
        <section class="hidden-bar">
            <div class="inner-box text-center">
                <div class="cross-icon"><span class="fa fa-times"></span></div>
                <div class="title">
                    <h4>Get Appointment</h4>
                </div>

                <!--Appointment Form-->
                <div class="appointment-form">
                    <form method="post" action="https://webtendtheme.net/html/2024/Travela/contact.html">
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





<!-- Destinations Area start -->
<section class="destinations-area bgc-black pt-100 pb-70 rel z-1">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-white text-center counter-text-wrap mb-70" data-aos="fade-up"
                    data-aos-duration="1500" data-aos-offset="50">
                    <h2 style="font-family: 'Playfair Display', serif; font-size: 36px; font-weight: 600; text-shadow: 1px 1px 4px rgba(0,0,0,0.3); text-transform: none;">Mở ra vẻ đẹp của từng điểm đến cùng Travela</h2>
                    <p  style="font-family: 'Poppins', sans-serif; font-size: 28px; color: #ffffff; font-weight: 600; text-align: center; line-height: 1.5;" >Một địa điểm với<span class="count-text plus" data-speed="3000" data-stop="24080" style="color: inherit; font-weight: 600;">0</span>trải nghiệm phổ biến mà bạn sẽ nhớ mãi.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="destination-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i>4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('clients/assets/images/destinations/Paris.jpg')}}" alt="Destination">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Paris, Pháp</span>
                        <h5><a href="destination-details.html">Tháp Eiffel – Biểu tượng của Paris</a></h5>
                        <span class="time">3 ngày 2 đêm</span>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$59.00</span>/người</span>
                        <a href="#" class="read-more">Đặt ngay <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="destination-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('clients/assets/images/destinations/Venice.jpg')}}" alt="Destination">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Venice, Ý</span>
                        <h5><a href="destination-details.html">Venice – Thành phố tình yêu & kênh đào lãng mạn </a></h5>
                        <span class="time">4 ngày 3 đêm</span>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$63.00</span>/người</span>
                        <a href="#" class="read-more">Đặt ngay <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="destination-item" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('clients/assets/images/destinations/dao-jeju.jpg')}}" alt="Destination">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Đảo Jeju, Hàn Quốc</span>
                        <h5><a href="destination-details.html">Đảo Jeju - được ví như "Hawaii của Hàn Quốc"</a></h5>
                        <span class="time">5 ngày 4 đêm</span>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$42.00</span>/người</span>
                        <a href="#" class="read-more">Đặt ngay<i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="destination-item" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('clients/assets/images/destinations/laudaithuysi.jpg')}}" alt="Destination">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Lâu đài Chillon, Thụy Sĩ</span>
                        <h5><a href="destination-details.html">Lâu đài Chillon cổ tích, báu vật lịch sử của Thụy Sĩ </a></h5>
                        <span class="time">3 days 2 nights - Couple</span>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$52.00</span>/per person</span>
                        <a href="#" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Destinations Area end -->


{{-- <!-- About Us Area start -->
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
<!-- About Us Area end --> --}}


<!-- Popular Destinations Area start -->
<section class="popular-destinations-area rel z-1">
    <div class="container-fluid">
        <div class="popular-destinations-wrap br-20 bgc-lighter pt-100 pb-70">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center counter-text-wrap mb-70" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2 style="font-size: 28px; color: #2c3e50; font-weight: 700;" >Khám phá các điểm đến phổ biến</h2>
                        <p>Một trang web với <span class="count-text plus" data-speed="3000" data-stop="240800">0</span> trải nghiệm phổ biến nhất</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{asset('clients/assets/images/destinations/cungdienthai.jpg')}}" alt="Destination">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Thailand Bangkok</a></h6>
                                <span class="time">Hơn 500 tours & 830 hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{asset('clients/assets/images/destinations/Parga.jpg')}}" alt="Destination">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Parga, Hy Lạp</a></h6>
                                <span class="time">Hơn 800 tours & 500 hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{asset('clients/assets/images/destinations/Hoian.png')}}" alt="Destination">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Hội An, Việt Nam</a></h6>
                                <span class="time">Hơn 300 tours & 250 hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{asset('clients/assets/images/destinations/vuonquocgia.jpg')}}" alt="Destination">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Vườn quốc gia Banff, Canada</a></h6>
                                <span class="time">Hơn 650 tours & 340 hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{asset('clients/assets/images/destinations/destination5.jpg')}}" alt="Destination">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Dubai united states</a></h6>
                                <span class="time">Hơn 990 tours & 1000 hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{asset('clients/assets/images/destinations/Roma.jpg')}}" alt="Destination">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Thành phố Vatican, Roma</a></h6>
                                <span class="time">Hơn 1200 tours & 300 hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Popular Destinations Area end -->


<!-- Features Area start -->
<section class="features-area pt-100 pb-45 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="features-content-part mb-55" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mb-60">
                        <h2>Khám Phá Sự Khác Biệt Trong Mỗi Hành Trình Du Lịch Cùng Chúng Tôi</h2>
                    </div>
                    <div class="features-customer-box">
                        <div class="image">
                            <img src="{{asset('clients/assets/images/features/features-box.jpg')}}" alt="Features">
                        </div>
                        <div class="content">
                            <div class="feature-authors mb-15">
                                <img src="{{asset('clients/assets/images/features/feature-author1.jpg')}}" alt="Author">
                                <img src="{{asset('clients/assets/images/features/feature-author2.jpg')}}" alt="Author">
                                <img src="{{asset('clients/assets/images/features/feature-author3.jpg')}}" alt="Author">
                                <span>4k+</span>
                            </div>
                            <h6>Hơn 800K+ khách hàng hài lòng</h6>
                            <div class="divider style-two counter-text-wrap my-25"><span><span class="count-text plus"
                                        data-speed="3000" data-stop="20">0</span> Năm</span></div>
                            <p> Chúng tôi tự hào tạo ra những hành trình được cá nhân hóa theo sở thích riêng của bạn.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                <div class="row pb-25">
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5 style="font-family: 'Montserrat', sans-serif; font-size: 22px; color: #2c3e50; font-weight: 600; margin-bottom: 10px;"><a href= "tour-details.html" style="text-decoration: none; color: #2c3e50;">Cắm trại bằng lều</a></h5>
                                <p  style="font-family: 'Open Sans', sans-serif; font-size: 16px; color: #7f8c8d; line-height: 1.6;">Một cách tuyệt vời để trải nghiệm vẻ đẹp của thiên nhiên.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5 style="font-family: 'Montserrat', sans-serif; font-size: 22px; color: #2c3e50; font-weight: 600; margin-bottom: 10px;"><a href="tour-details.html" style="text-decoration: none; color: #2c3e50;">Kayaking</a></h5>
                                <p style="font-family: 'Open Sans', sans-serif; font-size: 16px; color: #7f8c8d; line-height: 1.6;"> Một môn thể thao ngoài trời đầy kích thích giúp bạn kết nối với thiên nhiên.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item mt-20">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5 style="font-family: 'Montserrat', sans-serif; font-size: 22px; color: #2c3e50; font-weight: 600; margin-bottom: 10px;"><a href="tour-details.html" style="text-decoration: none; color: #2c3e50;">Đạp xe địa hình</a></h5>
                                <p style="font-family: 'Open Sans', sans-serif; font-size: 16px; color: #7f8c8d; line-height: 1.6;">Một cuộc phiêu lưu đầy phấn khích thử thách giới hạn thể chất của bạn.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5 style="font-family: 'Montserrat', sans-serif; font-size: 22px; color: #2c3e50; font-weight: 600; margin-bottom: 10px;"><a href="tour-details.html" style="text-decoration: none; color: #2c3e50;">Câu cá & Chèo thuyền</a></h5>
                                <p style="font-family: 'Open Sans', sans-serif; font-size: 16px; color: #7f8c8d; line-height: 1.6;"> Cách hoàn hảo để thư giãn và hòa mình vào thiên nhiên.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Area end -->


{{-- <!-- Hotel Area start -->
<section class="hotel-area bgc-black py-100 rel z-1">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-white text-center counter-text-wrap mb-70" data-aos="fade-up"
                    data-aos-duration="1500" data-aos-offset="50">
                    <h2>Khám phá những khách sạn hàng đầu thế giới</h2>
                    <p>Một địa điểm với <span class="count-text plus" data-speed="3000" data-stop="24080">0</span>trải nghiệm phổ biến mà bạn sẽ nhớ mãi</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xxl-6 col-xl-8 col-lg-10">
                <div class="destination-item style-three" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('clients/assets/images/destinations/hotel1.jpg')}}" alt="Hotel">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Ao Nang, Thailand</span>
                        <h5><a href="destination-details.html">The brown bench near swimming pool Hotel</a></h5>
                        <ul class="list-style-one">
                            <li><i class="fal fa-bed-alt"></i> 2 Bed room</li>
                            <li><i class="fal fa-hat-chef"></i> 1 kitchen</li>
                            <li><i class="fal fa-bath"></i> 2 Wash room</li>
                            <li><i class="fal fa-router"></i> Internet</li>
                        </ul>
                        <div class="destination-footer">
                            <span class="price"><span>$85.00</span>/per night</span>
                            <a href="#" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-8 col-lg-10">
                <div class="destination-item style-three" data-aos="fade-up" data-aos-delay="50"
                    data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('clients/assets/images/destinations/hotel2.jpg')}}" alt="Hotel">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Kigali, Rwanda</span>
                        <h5><a href="destination-details.html">Green trees and body of water Marriott Hotel</a></h5>
                        <ul class="list-style-one">
                            <li><i class="fal fa-bed-alt"></i> 2 Bed room</li>
                            <li><i class="fal fa-hat-chef"></i> 1 kitchen</li>
                            <li><i class="fal fa-bath"></i> 2 Wash room</li>
                            <li><i class="fal fa-router"></i> Internet</li>
                        </ul>
                        <div class="destination-footer">
                            <span class="price"><span>$85.00</span>/per night</span>
                            <a href="#" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-8 col-lg-10">
                <div class="destination-item style-three" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Ao Nang, Thailand</span>
                        <h5><a href="#">Painted house surrounded with trees Hotel</a></h5>
                        <ul class="list-style-one">
                            <li><i class="fal fa-bed-alt"></i> 2 Bed room</li>
                            <li><i class="fal fa-hat-chef"></i> 1 kitchen</li>
                            <li><i class="fal fa-bath"></i> 2 Wash room</li>
                            <li><i class="fal fa-router"></i> Internet</li>
                        </ul>
                        <div class="destination-footer">
                            <span class="price"><span>$85.00</span>/per night</span>
                            <a href="#" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('clients/assets/images/destinations/hotel3.jpg')}}" alt="Hotel">
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-8 col-lg-10">
                <div class="destination-item style-three" data-aos="fade-up" data-aos-delay="50"
                    data-aos-duration="1500" data-aos-offset="50">
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Ao Nang, Thailand</span>
                        <h5><a href="#">house pool Jungle Pool Indonesia Hotel</a></h5>
                        <ul class="list-style-one">
                            <li><i class="fal fa-bed-alt"></i> 2 Bed room</li>
                            <li><i class="fal fa-hat-chef"></i> 1 kitchen</li>
                            <li><i class="fal fa-bath"></i> 2 Wash room</li>
                            <li><i class="fal fa-router"></i> Internet</li>
                        </ul>
                        <div class="destination-footer">
                            <span class="price"><span>$85.00</span>/per night</span>
                            <a href="#" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('clients/assets/images/destinations/hotel4.jpg')}}" alt="Hotel">
                    </div>
                </div>
            </div>
        </div>
        <div class="hotel-more-btn text-center mt-40">
            <a href="destination2.html" class="theme-btn style-four">
                <span data-hover="Explore More Hotel">Explore More Hotel</span>
                <i class="fal fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
<!-- Hotel Area end --> --}}

{{--
<!-- Mobile App Area start -->
<section class="mobile-app-area py-100 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="mobile-app-content rmb-55" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mb-30">
                        <h2>We Are Available On the Store Get Our Mobile Apps Very Easily</h2>
                    </div>
                    <p>We go above and beyond to make your travel dreams a reality. Trust us to handle the details so
                        you can creating unforgettable memories. Explore the world with confidence</p>
                    <ul class="list-style-two mt-35 mb-30">
                        <li>Experience Agency</li>
                        <li>Professional Team</li>
                        <li>Low Cost Travel</li>
                        <li>Online Support 24/7</li>
                    </ul>
                    <div class="google-play-app-store">
                        <a href="#"><img src="{{asset('clients/assets/images/mobile-app/g-play.jpg')}}" alt="Google Play"></a>
                        <a href="#"><img src="{{asset('clients/assets/images/mobile-app/a-store.jpg')}}" alt="App Store"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mobile-app-images">
                    <div class="bg"><img src="{{asset('clients/assets/images/mobile-app/phone-bg.png')}}" alt="BG"></div>
                    <div class="images">
                        <img src="{{asset('clients/assets/images/mobile-app/phone2.png')}}" alt="Phone" data-aos="fade-down-left"
                            data-aos-duration="1500" data-aos-offset="50">
                        <img src="{{asset('clients/assets/images/mobile-app/phone.png')}}" alt="Phone">
                        <img src="{{asset('clients/assets/images/mobile-app/phone3.png')}}" alt="Phone" data-aos="fade-up-right"
                            data-aos-duration="1500" data-aos-offset="50">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Mobile App Area end --> --}}


<!-- Testimonials Area start -->
<section class="testimonials-area rel z-1">
    <div class="container">
        <div class="testimonials-wrap bgc-lighter">
            <div class="row">
                <div class="col-lg-5 rel" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="testimonial-left-image rmb-55"
                        style="background-image: url({{asset('clients/assets/images/testimonials/chi1.png')}});"></div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial-right-content" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-55">
                            <h2  style="font-family: 'Segoe UI', sans-serif; font-size: 32px; color: #333; text-align: center; margin: 20px 0;"><span style="display: inline-block; background-color: #FFD700; padding: 10px 20px; border-radius: 6px;font-weight: bold; font-size: 32px; line-height: 1; text-align: center;">5280</span> khách hàng toàn cầu chia sẻ trải nghiệm về dịch vụ của chúng tôi</h2>
                        </div>
                        <div class="testimonials-active">
                            <div class="testimonial-item">
                                <div class="testi-header">
                                    <div class="quote"><i class="flaticon-double-quotes"></i></div>
                                    <h4  style="font-family: 'Segoe UI', sans-serif; font-size: 22px; color: #333; text-align: center; margin: 20px 0;
                                    font-weight: bold; text-transform: uppercase; letter-spacing: 1px;
                                    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); transition: color 0.3s;">Dịch vụ chất lượng</h4>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="text" style="font-family: 'Segoe UI', sans-serif; font-size: 18px; color: #555; text-align: center;line-height: 1.6; font-style: italic; padding: 20px; border-left: 4px solid #007bff; margin: 20px auto; max-width: 80%;">"Chuyến đi của chúng tôi thật sự hoàn hảo, cảm ơn công ty du lịch này! Họ đã lo mọi chi tiết, từ chỗ ở cho đến việc gợi ý những trải nghiệm tuyệt vời"</div>
                                <div class="author">
                                    <div class="image"><img src="{{asset('clients/assets/images/testimonials/myduyen.jpg')}}" style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%;"
                                            alt="Author"></div>
                                    <div class="content">
                                        <h5 style="font-family: 'Segoe UI', sans-serif; font-size: 24px; color: #333; text-align: center;
                                        font-weight: bold; text-transform: uppercase; letter-spacing: 1px; margin: 10px 0;
                                        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1); transition: color 0.3s;">Mỹ Duyên</h5>
                                        <span  style="font-family: 'Segoe UI', sans-serif; font-size: 18px; color: #333; text-align: center;
                                        font-weight: normal; text-transform: capitalize; letter-spacing: 0.5px; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
                                        transition: color 0.3s;">Mỹ Mỹ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testi-header">
                                    <div class="quote"><i class="flaticon-double-quotes"></i></div>
                                    <h4 style="font-family: 'Segoe UI', sans-serif; font-size: 22px; color: #333; text-align: center; margin: 20px 0;
                                    font-weight: bold; text-transform: uppercase; letter-spacing: 1px;
                                    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); transition: color 0.3s;">Dịch vụ chất lượng</h4>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="text" style="font-family: 'Segoe UI', sans-serif; font-size: 18px; color: #555; text-align: center; line-height: 1.6; font-style: italic; padding: 20px; border-left: 4px solid #007bff; margin: 20px auto; max-width: 80%;">"Chúng tôi đã có một hành trình khó quên, nhờ sự chăm chút đến từng chi tiết của công ty du lịch, từ đặt khách sạn đến các hoạt động độc đáo họ gợi ý"</div>
                                <div class="author">
                                    <div class="image"><img src="{{asset('clients/assets/images/testimonials/ok.jpg')}}"
                                            alt="Author"></div>
                                    <div class="content">
                                        <h5 style="font-family: 'Segoe UI', sans-serif; font-size: 24px; color: #333; text-align: center;
                                        font-weight: bold; text-transform: uppercase; letter-spacing: 1px; margin: 10px 0;
                                        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1); transition: color 0.3s;">Mỹ Linh</h5>
                                        <span style="font-family: 'Segoe UI', sans-serif; font-size: 18px; color: #333; text-align: center;
                                        font-weight: normal; text-transform: capitalize; letter-spacing: 0.5px; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
                                        transition: color 0.3s;">Linh Linh</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials Area end -->


{{-- <!-- CTA Area start -->
<section class="cta-area pt-100 rel z-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-duration="1500" data-aos-offset="50">
                <div class="cta-item" style="background-image: url({{asset('clients/assets/images/cta/cta1.jpg')}});">
                    <span class="category">Cắm trại bằng lều</span>
                    <h2>Khám phá những điểm du lịch tốt nhất trên thế giới</h2>
                    <a href="tour-details.html" class="theme-btn style-two bgc-secondary">
                        <span data-hover="Khám phá">Khám phá các tour du lịch</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-delay="50" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="cta-item" style="background-image: url({{asset('clients/assets/images/cta/cta2.jpg')}});">
                    <span class="category">Bãi biển</span>
                    <h2>Khám phá những bãi biển đẹp của thế giới</h2>
                    <a href="tour-details.html" class="theme-btn style-two">
                        <span data-hover="Khám phá">Khám phá các tour du lịch   </span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-delay="100" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="cta-item" style="background-image: url({{asset('clients/assets/images/cta/cta3.jpg')}});">
                    <span class="category">Thác nước</span>
                    <h2>Thác nước lớn nhất ở Bali, Indonesia</h2>
                    <a href="tour-details.html" class="theme-btn style-two bgc-secondary">
                        <span data-hover="Khám phá">Khám phá các tour du lịch</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Area end --> --}}


{{-- <!-- Blog Area start -->
<section class="blog-area py-70 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center counter-text-wrap mb-70" data-aos="fade-up"
                    data-aos-duration="1500" data-aos-offset="50">
                    <h2>Đọc tin tức & blog mới nhất</h2>
                    <p>Một trang web với <span class="count-text plus bgc-primary" data-speed="3000"
                            data-stop="24080">0</span> trải nghiệm phổ biến nhất</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6">
                <div class="blog-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="content">
                        <a href="blog.html" class="category">Travel</a>
                        <h5><a href="blog-details.html">Lên kế hoạch cho kỳ nghỉ mơ ước của bạn dễ dàng với sự trợ giúp chuyên nghiệp từ công ty du lịch Travela</a></h5>
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar-alt"></i> <a href="#">ngày 30 tháng 4 năm 2025</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Bình luận (5)</a></li>
                        </ul>
                    </div>
                    <div class="image">
                        <img src="{{asset('clients/assets/images/blog/blog1.jpg')}}" alt="Blog">
                    </div>
                    <a href="blog-details.html" class="theme-btn">
                        <span data-hover="Book Now">Đọc thêm</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="blog-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="content">
                        <a href="blog.html" class="category">Travel</a>
                        <h5><a href="blog-details.html">Biến ước mơ trong danh sách của bạn thành hiện thực với những cuộc phiêu lưu thay đổi cuộc đời</a></h5>
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar-alt"></i> <a href="#">ngày 1 tháng 5 năm 2025</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Bình luận (10)</a></li>
                        </ul>
                    </div>
                    <div class="image">
                        <img src="{{asset('clients/assets/images/blog/blog2.jpg')}}" alt="Blog">
                    </div>
                    <a href="blog-details.html" class="theme-btn">
                        <span data-hover="Book Now">Đọc thêm</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="blog-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="content">
                        <a href="blog.html" class="category">Travel</a>
                        <h5><a href="blog-details.html">Khám phá những điểm đến ẩm thực tuyệt vời và những điều kỳ diệu văn hóa cùng công ty du lịch của chúng tôi</a></h5>
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar-alt"></i> <a href="#">ngày 2 tháng 5 năm 2025</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Bình luận (2)</a></li>
                        </ul>
                    </div>
                    <div class="image">
                        <img src="{{asset('clients/assets/images/blog/blog3.jpg')}}" alt="Blog">
                    </div>
                    <a href="blog-details.html" class="theme-btn">
                        <span data-hover="Book Now">Đọc thêm</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area end --> --}}

@include('clients.blocks.footer')

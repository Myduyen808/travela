@include('clients.blocks.header')
@include('clients.blocks.banner_search')
{{-- 
<!-- Hidden Sidebar -->
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
  <!-- Popular Destinations Area start -->
  <section class="popular-destinations-area pt-100 pb-90 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center counter-text-wrap mb-40" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <h2>Khám phá các điểm đến phổ biến</h2>
                    <p>Một trang web với <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> trải nghiệm phổ biến nhất</p>
                    <ul class="destinations-nav mt-30">
                        <li data-filter="*" class="active">Xem tất cả</li>
                        <li data-filter=".features">Địa điểm nổi bật</li>
                        <li data-filter=".recent">Gần đây</li>
                        <li data-filter=".city">Thành phố</li>
                        <li data-filter=".rating">Xếp hạng</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row gap-10 destinations-active justify-content-center">
                <div class="col-xl-3 col-md-6 item recent rating">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{asset('clients/assets/images/destinations/destination1.jpg')}}" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Biển Thailand</a></h6>
                            <span class="time">Hơn 730 tours & 510 hoạt động</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 item features">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{asset('clients/assets/images/destinations/destination2.jpg')}}" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Parga, Hy Lạp</a></h6>
                            <span class="time">Hơn 250 tours & 450 hoạt động</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 item recent city rating">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{asset('clients/assets/images/destinations/destination3.jpg')}}" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Castellammare del Golfo, Ý</a></h6>
                            <span class="time">Hơn 680 tours & 830 hoạt động</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 item city features">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{asset('clients/assets/images/destinations/destination4.jpg')}}" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Reserve of Canada, Canada</a></h6>
                            <span class="time">Hơn 350 tours & 420 hoạt động</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 item recent">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{asset('clients/assets/images/destinations/destination5.jpg')}}" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Dubai</a></h6>
                            <span class="time">Hơn 890 tours & 980 hoạt động</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 item features rating">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{asset('clients/assets/images/destinations/destination6.jpg')}}" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Milos, Hy Lạp</a></h6>
                            <span class="time">Hơn 760 tours & 350 hoạt động</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Popular Destinations Area end -->


<!-- Hotel Area start -->
<section class="hotel-area bgc-black pt-100 pb-70 rel z-1">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="destination-left-content mb-35">
                    <div class="section-title text-white counter-text-wrap mb-45" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h2>Khám phá những khách sạn hàng đầu thế giới</h2>
                        <p>Một trang web với  <span class="count-text plus" data-speed="3000" data-stop="34500">0</span>trải nghiệm  <br> phổ biến nhất</p>
                    </div>
                    <a href="destination1.html" class="theme-btn style-four mb-15">
                        <span data-hover="Khám phá thêm các khách sạn">Khám phá thêm các khách sạn</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="destination-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('clients/assets/images/destinations/pic1.jpg')}}" alt="Hotel">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rayavadee Resort, Thailand</span>
                        <h5><a href="tour-details.html">Là một khu nghỉ dưỡng 5 sao cao cấp nằm trong Vườn Quốc gia Phra Nang</a></h5>
                        <ul class="list-style-one">
                            <li><i class="fal fa-bed-alt"></i> 2 phòng ngủ </li>
                            <li><i class="fal fa-hat-chef"></i> 1 bếp</li>
                            <li><i class="fal fa-bath"></i> 2 phòng tắm</li>
                            <li><i class="fal fa-router"></i> Internet</li>
                        </ul>
                        <div class="destination-footer">
                            <span class="price"><span>$85.00</span>/per night</span>
                            <a href="tour-details.html" class="read-more">Đặt ngay<i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="destination-item style-three" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('clients/assets/images/destinations/pic2.png')}}" alt="Hotel">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Hotel de Russie, Rome</span>
                        <h5><a href="tour-details.html"> Là một trong những khách sạn sang trọng bậc nhất tại Rome, Hotel de Russie tọa lạc ngay gần Piazza del Popolo và Vatican</a></h5>
                        <ul class="list-style-one">
                            <li><i class="fal fa-bed-alt"></i> 2 phòng ngủ</li>
                            <li><i class="fal fa-hat-chef"></i> 1 bếp</li>
                            <li><i class="fal fa-bath"></i> 2 phòng tắm</li>
                            <li><i class="fal fa-router"></i> Internet</li>
                        </ul>
                        <div class="destination-footer">
                            <span class="price"><span>$85.00</span>/per night</span>
                            <a href="tour-details.html" class="read-more">Đặt ngay <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="destination-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('clients/assets/images/destinations/pic4.png')}}" alt="Hotel">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i>Hôtel Ritz, Paris</span>
                        <h5><a href="tour-details.html">Một trong những khách sạn sang trọng nhất thế giới, nổi tiếng với phong cách cổ điển và gắn liền với Coco Chanel, Ernest Hemingway.</a></h5>
                        <ul class="list-style-one">
                            <li><i class="fal fa-bed-alt"></i> 2 phòng ngủ</li>
                            <li><i class="fal fa-hat-chef"></i> 1 bếp</li>
                            <li><i class="fal fa-bath"></i> 2 phòng tắm</li>
                            <li><i class="fal fa-router"></i> Internet</li>
                        </ul>
                        <div class="destination-footer">
                            <span class="price"><span>$85.00</span>/per night</span>
                            <a href="tour-details.html" class="read-more">Đặt ngay <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="destination-item style-three" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('clients/assets/images/destinations/pic5.jpg')}}" alt="Hotel">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i>Sofitel Legend Metropole, Hanoi</span>
                        <h5><a href="tour-details.html"> Khách sạn 5 sao lâu đời nhất Việt Nam, kiến trúc Pháp cổ kính, từng đón nhiều nguyên thủ quốc gia.</a></h5>
                        <ul class="list-style-one">
                            <li><i class="fal fa-bed-alt"></i> 2 phòng ngủ</li>
                            <li><i class="fal fa-hat-chef"></i> 1 bếp</li>
                            <li><i class="fal fa-bath"></i> 2 phòng tắm</li>
                            <li><i class="fal fa-router"></i> Internet</li>
                        </ul>
                        <div class="destination-footer">
                            <span class="price"><span>$85.00</span>/per night</span>
                            <a href="tour-details.html" class="read-more">Đặt ngay <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hotel Area end -->


<!-- Hot Deals Area start -->
<section class="hot-deals-area pt-70 pb-50 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center counter-text-wrap mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <h2>Khám phá những ưu đãi hấp dẫn</h2>
                    <p>Một trang web với  <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> trải nghiệm phổ biến nhất</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <span class="badge">giảm 10%</span>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('clients/assets/images/destinations/hot-deal1.jpg')}}" alt="Hot Deal">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Thành phố Venice, Ý</span>
                        <h5 style="font-family: 'Roboto', sans-serif; font-size: 20px; font-weight: 500; color: #333; text-align: left; margin-bottom: 15px;"><a href="tour-details.html"  style="color: inherit; text-decoration: none; font-weight: 600;">Là tuyến kênh chính, nổi tiếng nhất ở thành phố Venice – nơi có những chiếc thuyền gondola, nhà cổ hai bên bờ, biểu tượng đặc trưng của Venice.
                        </a></h5>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$58.00</span>/người</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <a href="destination-details.html" class="theme-btn style-three">
                        <span data-hover="Khám phá">Khám phá</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <span class="badge">giảm 10%</span>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('clients/assets/images/destinations/hot-deal2.jpg')}}" alt="Hot Deal">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Kyoto, Nhật Bản</span>
                        <h5  style="font-family: 'Roboto', sans-serif; font-size: 20px; font-weight: 500; color: #333; text-align: left; margin-bottom: 15px;"><a href="tour-details.html"  style="color: inherit; text-decoration: none; font-weight: 600;">Một bức ảnh chụp cuộc sống và con người ở Kyoto do nhiếp ảnh gia tên Sorasak chụp.</a></h5>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$58.00</span>/người</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <a href="destination-details.html" class="theme-btn style-three">
                        <span data-hover="Khám phá">Khám phá</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <span class="badge">giảm 10%</span>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('clients/assets/images/destinations/hot-deal3.jpg')}}" alt="Hot Deal">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Tamnougalt, Morocco</span>
                        <h5 style="font-family: 'Roboto', sans-serif; font-size: 20px; font-weight: 500; color: #333; text-align: left; margin-bottom: 15px;"><a href="tour-details.html"  style="color: inherit; text-decoration: none; font-weight: 600;">Lạc đà trên sa mạc dưới bầu trời xanh, Ma-rốc, Sahara.</a></h5>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$58.00</span>/người</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <a href="destination-details.html" class="theme-btn style-three">
                        <span data-hover="Khám phá">Khám phá</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hot Deals Area end -->


<!-- Newsletter Area start -->
<section class="newsletter-three bgc-primary py-100 rel z-1" style="background-image: url({{asset('clients/assets/images/newsletter/newsletter-bg-lines.png')}});">
    <div class="container container-1500">
        <div class="row">
            <div class="col-lg-6">
                <div class="newsletter-content-part text-white rmb-55" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title counter-text-wrap mb-45">
                        <h2  style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold; color: #333333; text-align: center; line-height: 1.5; margin-top: 20px; margin-bottom: 20px; letter-spacing: 1px;">Đăng ký nhận bản tin của chúng tôi để không bỏ lỡ những ưu đãi hấp dẫn và những mẹo vặt hữu ích.</h2>
                        <p>Một trang web với  <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> trải nghiệm phổ biến nhất</p>
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
                <div class="newsletter-bg-image" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                    <img src="{{asset('clients/assets/images/newsletter/newsletter-bg-image.png')}}" alt="Newsletter">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="newsletter-image-part bgs-cover" style="background-image: url({{asset('clients/assets/images/newsletter/newsletter-two-right.jpg')}});" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50"></div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Area end -->


@include('clients.blocks.footer')

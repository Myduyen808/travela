@include('clients.blocks.header')

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
    <!-- Blog List Area start -->
    <section class="blog-list-page py-100 rel z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{asset('clients/assets/images/blog/blog-list1.jpg')}}" alt="Blog List">
                        </div>
                        <div class="content">
                            <a href="blog.html" class="category">Travel</a>
                            <h5 style="font-family: 'Segoe UI', sans-serif; font-size: 20px; font-weight: 600; line-height: 1.5; color: #222; text-align: center;"><a href="blog-details.html">Khám phá bí quyết lên kế hoạch cho chuyến du lịch mơ ước của bạn – Đảm bảo kỳ nghỉ tuyệt vời không thể quên</a></h5>
                            <ul class="blog-meta">
                                <li><i class="far fa-calendar-alt"></i> <a href="#">Ngày 5 tháng 5 năm 2025</a></li>
                                <li><i class="far fa-comments"></i> <a href="#">Bình luận (5)</a></li>
                            </ul>
                            <p>Chúng tôi chuyên tạo ra những trải nghiệm thành phố khó quên cho những du khách tìm kiếm.</p>
                            <a href="blog-details.html" class="theme-btn style-two style-three">
                                <span data-hover="Đọc thêm">Đọc thêm</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{asset('clients/assets/images/blog/blog-list2.jpg')}}" alt="Blog List">
                        </div>
                        <div class="content">
                            <a href="blog.html" class="category">Travel</a>
                            <h5 style="font-family: 'Segoe UI', sans-serif; font-size: 20px; font-weight: 600; line-height: 1.5; color: #222; text-align: center;"><a href="blog-details.html">Hướng dẫn toàn diện để lên kế hoạch cho kỳ nghỉ mơ ước của bạn</a></h5>
                            <ul class="blog-meta">
                                <li><i class="far fa-calendar-alt"></i> <a href="#">Ngày 6 tháng 5 năm 2025</a></li>
                                <li><i class="far fa-comments"></i> <a href="#">Bình luận (5)</a></li>
                            </ul>
                            <p>Chúng tôi chuyên tạo ra những trải nghiệm thành phố khó quên cho du khách yêu thích văn hóa, ẩm thực và các cuộc phiêu lưu địa phương.</p>
                            <a href="blog-details.html" class="theme-btn style-two style-three">
                                <span data-hover="Đọc thêm">Đọc thêm</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{asset('clients/assets/images/blog/blog-list3.jpg')}}" alt="Blog List">
                        </div>
                        <div class="content">
                            <a href="blog.html" class="category">Travel</a>
                            <h5 style="font-family: 'Segoe UI', sans-serif; font-size: 20px; font-weight: 600; line-height: 1.5; color: #222; text-align: center;"><a href="blog-details.html" >Bí kíp hoàn hảo giúp bạn lên kế hoạch cho chuyến du lịch mơ ước trong tầm tay</a></h5>
                            <ul class="blog-meta">
                                <li><i class="far fa-calendar-alt"></i> <a href="#">Ngày 10 tháng 5 năm 2025</a></li>
                                <li><i class="far fa-comments"></i> <a href="#">Bình luận (5)</a></li>
                            </ul>
                            <p> Chúng tôi tạo nên những cuộc phiêu lưu thành phố khó quên cho du khách yêu thích trải nghiệm đô thị chân thực.</p>
                            <a href="blog-details.html" class="theme-btn style-two style-three">
                                <span data-hover="Đọc thêm">Đọc thêm</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{asset('clients/assets/images/blog/blog-list4.jpg')}}" alt="Blog List">
                        </div>
                        <div class="content">
                            <a href="blog.html" class="category">Travel</a>
                            <h5 style="font-family: 'Segoe UI', sans-serif; font-size: 20px; font-weight: 600; line-height: 1.5; color: #222; text-align: center;"><a href="blog-details.html">Hướng dẫn từ A đến Z để biến chuyến du lịch mơ ước của bạn thành hiện thực</a></h5>
                            <ul class="blog-meta">
                                <li><i class="far fa-calendar-alt"></i> <a href="#">Ngày 11 tháng 5 năm 2025</a></li>
                                <li><i class="far fa-comments"></i> <a href="#">Bình luận (5)</a></li>
                            </ul>
                            <p>Mang các thành phố trở nên sống động qua những trải nghiệm khó quên, dành riêng cho những du khách ham khám phá.</p>
                            <a href="blog-details.html" class="theme-btn style-two style-three">
                                <span data-hover="Đọc thêm">Đọc thêm</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{asset('clients/assets/images/blog/blog-list5.jpg')}}" alt="Blog List">
                        </div>
                        <div class="content">
                            <a href="blog.html" class="category">Travel</a>
                            <h5 style="font-family: 'Segoe UI', sans-serif; font-size: 20px; font-weight: 600; line-height: 1.5; color: #222; text-align: center;"><a href="blog-details.html">Bắt đầu chuyến đi mơ ước của bạn một cách thông minh với hướng dẫn hoàn chỉnh từ chuyên gia</a></h5>
                            <ul class="blog-meta">
                                <li><i class="far fa-calendar-alt"></i> <a href="#">Ngày 7 tháng 5 năm 2025</a></li>
                                <li><i class="far fa-comments"></i> <a href="#">Bình luận (5)</a></li>
                            </ul>
                            <p>Cánh cửa đưa bạn đến những hành trình thành phố tuyệt vời, được thiết kế để tạo nên ký ức không thể phai.</p>
                            <a href="blog-details.html" class="theme-btn style-two style-three">
                                <span data-hover="Đọc thêm">Đọc thêm</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <ul class="pagination pt-15 flex-wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <li class="page-item disabled">
                            <span class="page-link"><i class="far fa-chevron-left"></i></span>
                        </li>
                        <li class="page-item active">
                            <span class="page-link">
                                1
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="far fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10 rmt-75">
                    <div class="blog-sidebar">

                        <div class="widget widget-search" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <form action="#" class="default-search-form">
                                <input type="text" placeholder="Tìm kiếm" required="">
                                <button type="submit" class="searchbutton far fa-search"></button>
                            </form>
                        </div>

                        <div class="widget widget-category" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h5 class="widget-title" style="font-family: 'Arial', sans-serif; font-size: 22px; font-weight: 600; color: #333; letter-spacing: 1px; text-transform: capitalize;">Bộ sưu tập</h5>
                            <ul class="list-style-three">
                                <li><a href="blog.html">Du lịch mạo hiểm</a></li>
                                <li><a href="blog.html">Đi bộ đường dài & leo núi</a></li>
                                <li><a href="blog.html">Tour du lịch bằng xe đạp</a></li>
                                <li><a href="blog.html"> Tour du lịch gia đình</a></li>
                                <li><a href="blog.html">Leo núi</a></li>
                                <li><a href="blog.html"> Chuyến đi vượt thác bằng bè </a></li>
                                <li><a href="blog.html">Bay dù lượn ven biển</a></li>
                            </ul>
                        </div>

                        <div class="widget widget-news" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h5 class="widget-title">Tin tức gần đây</h5>
                            <ul>
                                <li>
                                    <div class="image">
                                        <img src="{{asset('clients/assets/images/widgets/news1.jpg')}}" alt="News">
                                    </div>
                                    <div class="content">
                                        <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: 700; line-height: 1.5; text-align: left;"><a href="blog-details.html" style="text-decoration: none; color: #000000;">Những điểm đến độc đáo và những câu chuyện chưa được kể</a></h6>
                                        <span class="date"><i class="far fa-calendar-alt"></i>Ngày 9 tháng 6 năm 2025</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="image">
                                        <img src="{{asset('clients/assets/images/widgets/news2.jpg')}}" alt="News">
                                    </div>
                                    <div class="content">
                                        <h6  style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: 700; line-height: 1.5; text-align: left;"><a href="blog-details.html" style="text-decoration: none; color: #000000;">Trải nghiệm du lịch chân thực khắp thế giới</a></h6>
                                        <span class="date"><i class="far fa-calendar-alt"></i>Ngày 25 tháng 6 năm 2025</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="image">
                                        <img src="{{asset('clients/assets/images/widgets/news3.jpg')}}" alt="News">
                                    </div>
                                    <div class="content">
                                        <h6 style="font-family: 'Arial', sans-serif; font-size: 18px; font-weight: 700; line-height: 1.5; text-align: left;"><a href="blog-details.html" style="text-decoration: none; color: #000000;">Hành trình truyền cảm hứng cho chuyến phiêu lưu tiếp theo của bạn</a></h6>
                                        <span class="date"><i class="far fa-calendar-alt"></i> Ngày 23 tháng 6 năm 2025</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget-gallery" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h5 class="widget-title" style="font-family: 'Arial', sans-serif; font-size: 22px; font-weight: 600; color: #333; letter-spacing: 1px; text-transform: capitalize;">Phòng trưng bày</h5>
                            <div class="gallery">
                                <a href="{{asset('clients/assets/images/widgets/gallery1.jpg')}}">
                                    <img src="{{asset('clients/assets/images/widgets/gallery1.jpg')}}" alt="Gallery">
                                </a>
                                <a href="{{asset('clients/assets/images/widgets/gallery2.jpg')}}">
                                    <img src="{{asset('clients/assets/images/widgets/gallery2.jpg')}}" alt="Gallery">
                                </a>
                                <a href="{{asset('clients/assets/images/widgets/gallery3.jpg')}}">
                                    <img src="{{asset('clients/assets/images/widgets/gallery3.jpg')}}" alt="Gallery">
                                </a>
                                <a href="{{asset('clients/assets/images/widgets/gallery4.jpg')}}">
                                    <img src="{{asset('clients/assets/images/widgets/gallery4.jpg')}}" alt="Gallery">
                                </a>
                                <a href="{{asset('clients/assets/images/widgets/gallery5.jpg')}}">
                                    <img src="{{asset('clients/assets/images/widgets/gallery5.jpg')}}" alt="Gallery">
                                </a>
                                <a href="{{asset('clients/assets/images/widgets/gallery6.jpg')}}">
                                    <img src="{{asset('clients/assets/images/widgets/gallery6.jpg')}}" alt="Gallery">
                                </a>
                                <a href="{{asset('clients/assets/images/widgets/gallery7.jpg')}}">
                                    <img src="{{asset('clients/assets/images/widgets/gallery7.jpg')}}" alt="Gallery">
                                </a>
                                <a href="{{asset('clients/assets/images/widgets/gallery8.jpg')}}">
                                    <img src="{{asset('clients/assets/images/widgets/gallery8.jpg')}}" alt="Gallery">
                                </a>
                                <a href="{{asset('clients/assets/images/widgets/gallery9.jpg')}}">
                                    <img src="{{asset('clients/assets/images/widgets/gallery9.jpg')}}" alt="Gallery">
                                </a>
                            </div>
                        </div>

                        <div class="widget widget-cta" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="content text-white">
                                <span class="h6">Khám phá thế giới</span>
                                <h3>Những địa điểm du lịch tốt nhất</h3>
                                <a href="tour-list.html" class="theme-btn style-two bgc-secondary">
                                    <span data-hover="Khám phá ngay bây giờ">Khám phá ngay bây giờ</span>
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="image">
                                <img src="{{asset('clients/assets/images/widgets/cta-widget.png')}}" alt="CTA">
                            </div>
                            <div class="cta-shape"><img src="{{asset('clients/assets/images/widgets/cta-shape.png')}}" alt="Shape"></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Blog List Area end -->

@include('clients.blocks.footer')

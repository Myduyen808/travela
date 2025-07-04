     <!-- Hero Area Start -->
     <section class="hero-area bgc-black pt-200 rpt-120 rel z-2">
        <div class="container-fluid">
            <h1 class="hero-title"
            style="font-family: 'Playfair Display', serif; font-size: 120px; font-weight: 600; color: white; text-align: center; text-shadow: 3px 3px 10px rgba(0,0,0,0.4); text-transform: none;"
            data-aos="flip-up" data-aos-delay="30" data-aos-duration="500" data-aos-offset="30">BlueSkies Travel</h1>
            <div class="main-hero-image bgs-cover" style="background-image: url({{asset('clients/assets/images/hero/thuyen.png')}});"></div>
        </div>
        <div class="container container-1400">
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
        </div>
    </section>
    <!-- Hero Area End -->

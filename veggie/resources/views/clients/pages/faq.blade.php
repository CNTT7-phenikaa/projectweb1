@extends('layouts.clients')

@section('title', 'FAQ')
@section('breadcrumb', 'Những câu hỏi thường gặp')   
@section('content')
 <!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
 <div class="ltn__faq-area mb-100">
    <div class="container">
        <div class="row">
            <!-- Câu hỏi thường gặp -->
            <div class="col-lg-8">
                <div class="ltn__faq-inner ltn__faq-inner-2">
                    <div id="accordion_2">

                        <!-- Câu hỏi -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-1" aria-expanded="false">
                                Làm thế nào để mua sản phẩm?
                            </h6>
                            <div id="faq-item-2-1" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Hướng dẫn chi tiết cách mua hàng sẽ hiển thị ở đây...</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2"
                                aria-expanded="true">
                                Làm thế nào để yêu cầu hoàn tiền trên website?
                            </h6>
                            <div id="faq-item-2-2" class="collapse show" data-parent="#accordion_2">
                                <div class="card-body">
                                    <div class="ltn__video-img alignleft">
                                        <img src="{{ asset('assets/clients/img/bg/17.jpg') }}" alt="video popup bg image">
                                        <a class="ltn__video-icon-2 ltn__video-icon-2-small"
                                            href="https://www.youtube.com/embed/LjCzPp-MK48?autoplay=1&amp;showinfo=0"
                                            data-rel="lightcase:myCollection">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                    <p>Chi tiết quy trình hoàn tiền sẽ được hướng dẫn ở đây...</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-3" aria-expanded="false">
                                Tôi là người dùng mới. Bắt đầu như thế nào?
                            </h6>
                            <div id="faq-item-2-3" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Thông tin dành cho người mới bắt đầu sẽ được hướng dẫn ở đây...</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-4" aria-expanded="false">
                                Chính sách đổi trả và hoàn tiền
                            </h6>
                            <div id="faq-item-2-4" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Chi tiết chính sách hoàn trả và hoàn tiền sẽ hiển thị ở đây...</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-5" aria-expanded="false">
                                Thông tin cá nhân của tôi có được bảo mật không?
                            </h6>
                            <div id="faq-item-2-5" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Chúng tôi cam kết bảo mật thông tin cá nhân của bạn...</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-6" aria-expanded="false">
                                Mã giảm giá không hoạt động
                            </h6>
                            <div id="faq-item-2-6" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Nguyên nhân và cách khắc phục khi mã khuyến mãi không hoạt động...</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-7" aria-expanded="false">
                                Làm sao để thanh toán bằng thẻ tín dụng?
                            </h6>
                            <div id="faq-item-2-7" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Hướng dẫn các bước thanh toán bằng thẻ tín dụng sẽ hiển thị tại đây...</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hỗ trợ -->
                    <div class="need-support text-center mt-100">
                        <h2>Vẫn cần hỗ trợ? Liên hệ với chúng tôi 24/7:</h2>
                        <div class="btn-wrapper mb-30">
                            <a href="contact.html" class="theme-btn-1 btn">Liên hệ ngay</a>
                        </div>
                        <h3><i class="fas fa-phone"></i> +0123-456-789</h3>
                    </div>
                </div>
            </div>

            <!-- Widget bên phải -->
            <div class="col-lg-4">
                <aside class="sidebar-area ltn__right-sidebar">
                    <!-- Đăng ký nhận bản tin -->
                    <div class="widget ltn__search-widget ltn__newsletter-widget">
                        <h6 class="ltn__widget-sub-title">// đăng ký</h6>
                        <h4 class="ltn__widget-title">Nhận bản tin</h4>
                        <form action="#">
                            <input type="text" name="search" placeholder="Tìm kiếm">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="ltn__newsletter-bg-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                    </div>

                    <!-- Banner quảng cáo -->
                    <div class="widget ltn__banner-widget">
                        <a href="shop.html"><img src="{{ asset('assets/clients/img/banner/banner-3.jpg') }}" alt="Hình ảnh banner"></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

<!-- FAQ AREA START -->

<!-- COUNTER UP AREA START -->
<div class="ltn__counterup-area bg-image bg-overlay-theme-black-80 pt-115 pb-70" data-bg="{{asset('assets/clients/img/bg/5.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item-3 text-color-white text-center">
                    <div class="counter-icon"> <img src="{{asset('assets/clients/img/icons/icon-img/2.png')}}" alt="#"> </div>
                    <h1><span class="counter">733</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Active Clients</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item-3 text-color-white text-center">
                    <div class="counter-icon"> <img src="{{asset('assets/clients/img/icons/icon-img/3.png')}}" alt="#"> </div>
                    <h1><span class="counter">33</span><span class="counterUp-letter">K</span><span
                            class="counterUp-icon">+</span> </h1>
                    <h6>Cup Of Coffee</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item-3 text-color-white text-center">
                    <div class="counter-icon"> <img src="{{asset('assets/clients/img/icons/icon-img/4.png')}}" alt="#"> </div>
                    <h1><span class="counter">100</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Get Rewards</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item-3 text-color-white text-center">
                    <div class="counter-icon"> <img src="{{asset('assets/clients/img/icons/icon-img/5.png')}}" alt="#"> </div>
                    <h1><span class="counter">21</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Country Cover</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- COUNTER UP AREA END -->

@endsection
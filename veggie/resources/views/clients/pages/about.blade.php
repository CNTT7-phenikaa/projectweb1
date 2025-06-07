@extends('layouts.clients')

@section('title', 'Về chúng tôi')    
@section('breadcrumb', 'Về chúng tôi')

@section('content')
<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pt-120--- pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <img src="{{ asset('assets/clients/img/others/6.png') }}" alt="About Us Image">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">Tìm hiểu thêm về cửa hàng</h6>
                        <h1 class="section-title">Hữu Cơ Uy Tín <br class="d-none d-md-block"> Cửa Hàng Thực Phẩm</h1>
                        <p>Chúng tôi cam kết mang đến những sản phẩm chất lượng và tốt cho sức khỏe</p>
                    </div>
                    <p>Những người bán hàng luôn hướng tới điều tốt đẹp, hành động tích cực và lan tỏa giá trị tốt đẹp.
                        Chúng tôi là một thị trường hai chiều, dân chủ và tự vận hành, 
                        phát triển dựa trên niềm tin, cộng đồng và nội dung chất lượng.</p>
                    <div class="about-author-info d-flex">
                        <div class="author-name-designation  align-self-center">
                            <h4 class="mb-0">Nguyễn Trang</h4>
                            <small>/ Giám Đốc Cửa Hàng</small>
                        </div>
                        <div class="author-sign">
                            <img src="{{ asset('assets/clients/img/icons/icon-img/author-sign.png')}}" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- FEATURE AREA START ( Feature - 6) -->
<div class="ltn__feature-area section-bg-1 pt-115 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">// Đặc điểm //</h6>
                    <h1 class="section-title">Tại Sao Lại Chọn Chúng Tôi<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-7">
                    <div class="ltn__feature-icon-title">
                        <div class="ltn__feature-icon">
                            <span><img src="{{ asset('assets/clients/img/icons/icon-img/21.png') }}" alt="#"></span>
                        </div>
                        <h3><a href="service-details.html">Đa Dạng Thương Hiệu</a></h3>
                    </div>
                    <div class="ltn__feature-info">
                        <p>Chúng tôi cung cấp nhiều thương hiệu uy tín, đảm bảo chất lượng và nguồn gốc rõ ràng.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-7">
                    <div class="ltn__feature-icon-title">
                        <div class="ltn__feature-icon">
                            <span><img src="{{ asset('assets/clients/img/icons/icon-img/22.png') }}" alt="#"></span>
                        </div>
                        <h3><a href="service-details.html">Sản Phẩm Tuyển Chọn</a></h3>
                    </div>
                    <div class="ltn__feature-info">
                        <p>Những lựa chọn tinh tế được chọn lọc kỹ lưỡng về chất lượng, sự độc đáo và 
                            giá trị — vì bạn xứng đáng với những điều tốt nhất.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-7">
                    <div class="ltn__feature-icon-title">
                        <div class="ltn__feature-icon">
                            <span><img src="{{ asset('assets/clients/img/icons/icon-img/23.png' )}}" alt="#"></span>
                        </div>
                        <h3><a href="service-details.html">Không Chứa Thuốc Trừ Sâu</a></h3>
                    </div>
                    <div class="ltn__feature-info">
                        <p>Tận hưởng những gì tinh túy nhất từ thiên nhiên — tươi sạch, 
                            an toàn và không chứa hóa chất độc hại. Mỗi sản phẩm được nuôi trồng 
                            với sự quan tâm đặc biệt đến sức khỏe của bạn và môi trường.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->

@endsection
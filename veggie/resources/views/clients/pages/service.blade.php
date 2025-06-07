@extends('layouts.clients')

@section('title', 'Dịch vụ')
@section('breadcrumb', 'Dịch vụ')
    
@section('content')
 <!-- ABOUT US AREA START -->
 <div class="ltn__about-us-area pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 align-self-center">
                <div class="about-us-img-wrap ltn__img-shape-left  about-img-left">
                    <img src="{{ asset('assets/clients/img/service/11.jpg') }}" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// DỊCH VỤ UY TÍN</h6>
                        <h1 class="section-title">Chúng tôi chuyên nghiệp và có trình độ<span>.</span></h1>
                        <p>Chúng tôi cam kết mang đến dịch vụ chất lượng và đáng tin cậy.</p>
                      </div>
                      <div class="about-us-info-wrap-inner about-us-info-devide">
                        <p>Với kinh nghiệm và tâm huyết, chúng tôi luôn nỗ lực để phục vụ bạn tốt nhất, đảm bảo sự hài lòng và tin tưởng tuyệt đối.</p>
                        <div class="list-item-with-icon">
                          <ul>
                            <li><a href="contact.html">Giao hàng miễn phí 24/7</a></li>
                            <li><a href="team.html">Đội ngũ chuyên gia</a></li>
                            <li><a href="service-details.html">Trang thiết bị hiện đại</a></li>
                            <li><a href="shop.html">Sản phẩm đa dạng</a></li>
                          </ul>
                        </div>
                      </div>
                      
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- SERVICE AREA START (Service 1) -->
<div class="ltn__service-area section-bg-1 pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title white-color---">Dịch vụ của chúng tôi</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/1.jpg')}}" alt="Rau hữu cơ"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Rau củ hữu cơ</a></h3>
                        <p>Chúng tooic cung cấp các loại rau củ sạch, không hóa chất, đảm bảo an toàn cho sức khỏe gia đình bạn.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/2.jpg')}}" alt="Rau hữu cơ"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Giao hàng tận nơi</a></h3>
                        <p>Dịch vụ giao hàng nhanh chóng, đúng hẹn, đảm bảo rau củ luôn tươi ngon khi đến tay khách hàng.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/3.jpg')}}" alt="Rau hữu cơ"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Canh tác tự nhiên</a></h3>
                        <p>Rau củ được trồng theo phương pháp hữu cơ, không sử dụng thuốc trừ sâu hay phân bón hóa học.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/3.jpg') }}" alt="Rau hữu cơ"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Hỗ trợ khách hàng</a></h3>
                        <p>Đội ngũ tư vấn luôn sẵn sàng hỗ trợ bạn trong việc lựa chọn sản phẩm phù hợp và giải đáp thắc mắc.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/1.jpg')}}" alt="Rau hữu cơ"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Đóng gói an toàn</a></h3>
                        <p>Sản phẩm được đóng gói kĩ lưỡng,sạch sẽ,giữ nguyên độ tươi ngon và giá trị dinh dưỡng.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/2.jpg')}}" alt="Rau hữu cơ"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Sản phẩm đa dạng</a></h3>
                        <p>Chúng tôi cung cấp nhiều loại rau củ theo mùa, phù hợp cho mọi nhu cầu nấu nướng hằng ngày</p>
                    </div>
                </div>
            </div>
            
        
        </div>
        
    </div>
</div>
<!-- SERVICE AREA END -->

<!-- OUR JOURNEY AREA START -->
<div class="ltn__our-journey-area bg-image bg-overlay-theme-90 pt-280 pb-350 mb-35 plr--9"
    data-bg="{{ asset('assets/clients/img/bg/8.jpg') }}">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__our-journey-wrap">
                    <ul>
                        <li><span class="ltn__journey-icon">1990</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg')}}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Khởi đầu hành trình</h3>
                                            <p>Bắt đầu với sự đam mê và tâm huyết.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="active"><span class="ltn__journey-icon">2000</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg')}}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Nhận giải thưởng</h3>
                                            <p>Ghi nhận những nỗ lực và thành tựu đầu tiên.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><span class="ltn__journey-icon">2010</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg')}}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Đạt giải cao</h3>
                                            <p>Vươn lên dẫn đầu với nhiều thành công nổi bật.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><span class="ltn__journey-icon">2018</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg')}}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Nhận giải thưởng</h3>
                                            <p>Tiếp tục khẳng định vị thế và chất lượng.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><span class="ltn__journey-icon">2024</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg')}}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Nhận giải thưởng</h3>
                                            <p>Không ngừng phát triển và đổi mới.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- OUR JOURNEY AREA END -->

@endsection
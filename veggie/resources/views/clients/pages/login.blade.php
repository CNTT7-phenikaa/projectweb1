@extends('layouts.clients')

@section('title', 'Đăng nhập')
@section('breadcrumb', 'Đăng nhập')


@section('content')
<!-- LOGIN AREA START -->
<div class="ltn__login-area pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title">Đăng nhập <br>vào tài khoản của bạn</h1>
                    <p>Chào mừng bạn quay trở lại! <br>
                        Vui lòng đăng nhập để tiếp tục mua sắm và quản lý đơn hàng.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="account-login-inner">
                    <form action="#" class="ltn__form-box contact-form-box" method="POST" id ="login-form">
                        @csrf
                        <input type="email" name="email" placeholder="Email*" required>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                            
                        @enderror

                        <input type="password" name="password" placeholder="Mật khẩu*" required>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                            
                        @enderror

                        <div class="btn-wrapper mt-0">
                            <button class="theme-btn-1 btn btn-block" type="submit">ĐĂNG NHẬP</button>
                        </div>
                        <div class="go-to-btn mt-20">
                            <a href="#"><small>Bạn quên mật khẩu?</small></a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="account-create text-center pt-50">
                    <h4>Chưa có tài khoản?</h4>
                    <p>Thêm sản phẩm vào danh sách yêu thích, nhận đề xuất phù hợp, <br>
                        theo dõi đơn hàng dễ dàng và thanh toán nhanh chóng.</p>
                    <div class="btn-wrapper">
                        <a href="{{ route('register') }}" class="theme-btn-1 btn black-btn">TẠO TÀI KHOẢN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->


@endsection
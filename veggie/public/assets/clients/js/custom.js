$(document).ready(function (){
    /* --------------------------------------------------------
            *PAGE LOGIN, REGISTER
        --------------------------------------------------------- */

        //Validate register form
        $('#register-form').submit(function (e) {
            let name = $('input[name = "name"]').val();
            let email = $('input[name = "email"]').val();
            let password = $('input[name = "password"]').val();
            let confirmPassword = $('input[name = "confirmpassword"]').val();
            let checkbox1 = $('input[name = "checkbox1"]').is(':checked');
            let checkbox2 = $('input[name = "checkbox2"]').is(':checked');
            let errorMessage = "";

    

            if(name.length < 3){
                errorMessage += "Họ và tên phải có ít nhất 3 ký tự. <br>";
            }

            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if(!emailRegex.test(email)){
                errorMessage += "Email không hợp lệ. <br>";
            }

            if(password.length < 6){
                errorMessage += "Mật khẩu có ít nhất 6 ký tự. <br>";
            }

            if(password != confirmpassword){
                errorMessage += "Mật khẩu nhập lại không khớp. <br>";
            }
            if(!checkbox1 || !checkbox2){
                errorMessage += "Bạn phải đồng ý các điều khoản trước khi tạo tài khoản. <br>";
            } 
            
            if(errorMessage != ""){
                toastr.error(errorMessage, "Lỗi");
                e.preventDefault();
            }


        });

         //Validate login form
         $('#login-form').submit(function (e) {
            toastr.clear();
            let email = $('input[name = "email"]').val();
            let password = $('input[name = "password"]').val();
            let errorMessage = "";

            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if(!emailRegex.test(email)){
                errorMessage += "Email không hợp lệ. <br>";
            }

            if(password.length < 6){
                errorMessage += "Mật khẩu có ít nhất 6 ký tự. <br>";
            }
            
            if(errorMessage != ""){
                toastr.error(errorMessage, "Lỗi");
                e.preventDefault();
            }


        });

         //Validate resetpassword form
         $('#reset-password-form').submit(function (e) {
        
            let email = $('input[name = "email"]').val();
            let password = $('input[name = "password"]').val();
            let confirmPassword = $('input[name = "password_confirmation"]').val();

            let errorMessage = "";

            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if(!emailRegex.test(email)){
                errorMessage += "Email không hợp lệ. <br>";
            }

            if(password.length < 6){
                errorMessage += "Mật khẩu có ít nhất 6 ký tự. <br>";
            }
            if(password != confirmpassword){
                errorMessage += "Mật khẩu nhập lại không khớp. <br>";
            }
            if(errorMessage != ""){
                toastr.error(errorMessage, "Lỗi");
                e.preventDefault();
            }


        });

        /* --------------------------------------------------------
            *PAGE ACCOUNT
        --------------------------------------------------------- */
        //Khi click vào ảnh thì mở file input
        $('.profile-pic').click(function(){
            $("#avatar").click();
        });
        //Khi chọn 1 ảnh trong file input thì hiển thị ảnh xem trước
        $("#avatar").change(function(){
            let input = this;
            if(input.files && input.files[0]){
                let reader = new FileReader;
                reader.onload = function(e){
                    $('#preview-image').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        })
        $("#update-account").on("submit", function(e){
            e.preventDefault();
            let formData = new FormData(this);
            let urlUpdate = $(this).attr('action');

            //thêm $.ajax({...}) để gửi formData lên server.
            //Thiết lập CSRF token
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name = "csrf-token"]').attr('content'),
                    'X-HTTP-Method-Override': 'PUT'
                }
            });
            //Cấu hình và gửi Ajax
            $.ajax({
                url: urlUpdate,
                type: 'POST',
                data: formData,// lấy dữ liệu từ formData
                processData : false,
                contentType: false,
                //Không cho người dùng spam nút cập nhật khi chưa gửi được dữ liệu
                beforeSend: function(){
                    $(".btn-wrapper button").text('Đang cập nhật...').attr("disabled", true);
                },
                success: function(response){
                    toastr.success(response.message);
                    //update new Image
                    if(response.avatar){
                        $('#preview-image').attr('src', response.avatar);

                    }
                    else{
                        toastr.error('Lỗi');
                    }

                },
                //XMLHttpRequest
                error: function(xhr){
                    let errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value){
                        toastr.error(value[0]);
                    });
                },

                complete: function() {
                    $(".btn-wrapper button").text('Cập nhật').attr("disabled", false);
                }
            });
        });

        //Validate changepassword form
        $('#change-password-form').submit(function (e) {
        
            e.preventDefault();
            let current_password = $('input[name = "current_password"]').val().trim();
            let new_password = $('input[name = "new_password"]').val().trim();
            let confirm_new_password = $('input[name = "confirm_new_password"]').val().trim();

            let errorMessage = "";

           
            if(current_password.length < 6){
                errorMessage += "Mật khẩu có ít nhất 6 ký tự. <br>";
            }
            if(new_password.length < 6){
                errorMessage += "Mật khẩu có ít nhất 6 ký tự. <br>";
            }
            if(new_password != confirm_new_password){
                errorMessage += "Mật khẩu nhập lại không khớp. <br>";
            }
            if(errorMessage != ""){
                toastr.error(errorMessage, "Lỗi");
                e.preventDefault();
            }


        });

});
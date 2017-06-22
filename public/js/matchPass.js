$('.re-password').on('keyup',function () {
    var password = $(".password").val(),
        re_password = $(".re-password").val();

    if($.trim(password) === $.trim(re_password)){
        $('.btn').attr('disabled', false);
        $('.passwordStatus').text('Password match');
    }else{
        $('.btn').attr('disabled', true);
        $('.passwordStatus').text('Password dont match');
    }
});
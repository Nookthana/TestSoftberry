function Push(){

    const LogoBig = document.getElementById('logo_img_big');
    const LogoSmall = document.getElementById('logo_img_small');


    if (LogoBig.style.display == 'block') {

         LogoBig.style.display = 'none';
         LogoSmall.style.display = 'block';
    }else{

        LogoSmall.style.display = 'none';
        LogoBig.style.display = 'block';
    }
}


$(document).ready(function(){
// hide and show the tag admin
$(window).on('resize', function() {

    const tag_admin = document.getElementById('name_user');

    if ($(window).width()<520) {

       
       tag_admin.style.display = 'none';

    }else{

        tag_admin.style.display = 'block';
    }

});

});


$(document).ready(function(){
// hide and show text icon upload
$(window).on('resize', function() {

    const text = document.getElementById('icon_upload');
    const icon = document.getElementById('text_upload');
    const text_ex = document.getElementById('icon_upload_example');
    const icon_ex = document.getElementById('text_upload_example');

    const LogoBig = document.getElementById('logo_img_big');
    const LogoSmall = document.getElementById('logo_img_small');

    const tag_name_user = document.getElementById('tag_name_user');




    if ($(window).width() < 1000) {

       
        text.style.display = 'none';
        icon.style.display = 'none';
        text_ex.style.display = 'none';
        icon_ex.style.display = 'none';

        
        LogoBig.style.display = 'none';
        LogoSmall.style.display = 'block';

    }else if($(window).width() < 430){

        tag_name_user.style.display = 'none';

    }else{

        text.style.display = 'block';
        icon.style.display = 'block';
        text_ex.style.display = 'block';
        icon_ex.style.display = 'block';

        LogoSmall.style.display = 'none';
        LogoBig.style.display = 'block';

    }





 

});

});










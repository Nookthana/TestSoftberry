


//auto for add breadcrumb
$( document ).ready(function() {


    const breadcrumb = document.getElementById('breadcrumb').innerText;
    const html = `<strong id="breadcrumb_page"></strong>`;

    $( "#li_breadcrumb" ).addClass( "breadcrumb-item active" );
    $( "#li_breadcrumb" ).attr('aria-current', "page");
    $("#li_breadcrumb").css({
        fontSize: 11
    });
    $( "#li_breadcrumb" ).html(html);
    $('#breadcrumb_page').html(breadcrumb);

  });
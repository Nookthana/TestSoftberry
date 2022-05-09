//List which button just got checked
$("#options :input").change(function(){
    console.log($(this).val());
    console.log($(this).is(':checked'));
    console.log($(this).prop("id"));
  });
  
  //Check Radio 3 button
    $('#btnChangeTo3').on('click', function () {
      //$('#option3').button('toggle');
      $('#option3').parent().button('toggle');
    });
  
  //Which button is checked?
  $('#btnWhichOne').on('click',function(){
    console.log($('#options label.active input').val());
    console.log($('#options label.active input ').prop("id"));
    console.log($('#options label.active').text().trim());
    console.log($('#options label.active input').attr('name'));
  });
  
  
  //Is button 2 checked?
  $('#btnIs2Checked').on('click',function(){
    console.log($('#option2 :input').is(':checked'));  //[Doesn't work if no 'name' property or it's not the same for all buttons]
    console.log($('#option2').hasClass("active"));
  });
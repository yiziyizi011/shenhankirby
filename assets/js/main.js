$('.info_b').click(function() {
  $(this).siblings().show();
});

$('.info_back').click(function() {
  $('.info_text').hide();
});


$(document).ready(function(){
  $('figure')
    .zoom({on: 'click'});
});

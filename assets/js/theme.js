jQuery(document).ready(function($){
 // cache the window object
 $window = $(window);
 
 $('.grid').masonry({
 // options
 itemSelector: '.grid-item',
 isFitWidth: true,
 });
 
});

jQuery(function($) {
    $('#input_1_1, #input_1_2, #input_1_3').addClass('mdl-textfield__input');
    $('.gfield_label').addClass('mdl-textfield__label');    
});

jQuery( document ).ajaxComplete(function($) {
    $('#input_1_1, #input_1_2, #input_1_3').addClass('mdl-textfield__input');
    $('.gfield_label').addClass('mdl-textfield__label'); 
  });
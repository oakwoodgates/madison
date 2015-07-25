jQuery(document).ready(function($){
 // cache the window object
 $window = $(window);
 
 $('.grid').masonry({
 // options
 itemSelector: '.grid-item',
 isFitWidth: true,
 });
 
});
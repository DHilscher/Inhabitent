jQuery(document).ready(function($) {
    $('.search-toggle').on('click', function(event) {
        event.preventDefault();  
       $('.search-field').toggle('slow');
       $(".search-field").focus();   
    });
    $('.search-field').blur(function() {
    $('.search-field').hide();
    });
});




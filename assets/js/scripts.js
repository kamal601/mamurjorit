// Empty JS for your own code to be here

        jQuery(document).ready(function(){
        jQuery('#testimonial-carousel').owlCarousel({
    autoplay:true,
    dots:false,
    nav:true,        
    loop:true,
    margin:10,
    nav:true,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
}) 
 // sticky
        jQuery("#sticker").sticky({topSpacing:0});
        jQuery(".slicknav_menu").sticky({topSpacing:0});
        
 // ScrollSpy
            
            jQuery("#ex_spy").scrollspy();
    //mobilemenu
      
    jQuery(function(){

        var menu = jQuery('.menu-navigation-dark');

        menu.slicknav();

        // Mark the clicked item as selected

        menu.on('click', 'a', function(){
            var a = jQuery(this);

            a.siblings().removeClass('selected');
            a.addClass('selected');
        });
    });
            
            });
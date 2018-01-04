jQuery(function ()
{
    var $ = jQuery.noConflict();

    jQuery(document).ready(function($)
    {
        scrollToTop.init();
    });

    var scrollToTop =
    {
        init: function ()
        {
            // Check to see if the window is top if not then display button
            $(window).scroll(function ()
            {
                if ($(this).scrollTop() > 100)
                {
                    $('.scrollToTop').fadeIn();
                }
                else
                {
                    $('.scrollToTop').fadeOut();
                }
            });

            // Click event to scroll to top
            $('.scrollToTop').click(function ()
            {
                $('html, body').animate({scrollTop : 0},800);
                return false;
            });
        }
    };

    /*$(document).on('click', '.primary-menu .xs-dropdown-menu', function(e) {
        e.stopPropagation();
    });

    $('.primary-menu .xs-dropdown-menu').parent().hover(function() {
        var menu = $(this).find("ul");
        var menupos = $(menu).offset();
        if (menupos.left + menu.width() > $(window).width()) {
            var newpos = -$(menu).width();
            menu.css({ left: newpos });
        }
    });

    $(document).on('click', '.primary-menu .xs-angle-down', function(e) {
        e.preventDefault();
        $(this).parents('.xs-dropdown').find('.xs-dropdown-menu').toggleClass('active');
    });*/

    /***************************************
     * Isotop *
     ***************************************/
    var $container = $('.daptar-portfolio-list');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
    $('.isotop-portfolio a').click(function(){
        $('.isotop-portfolio .current').removeClass('current');
        $(this).addClass('current');
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        return false;
    });
});
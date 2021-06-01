$(document).ready(function() {
    // Мобильное меню
    $(function(){
        var mobMenu = $('.mobile-menu'),
            headNav = $('.header-nav'),
            mml1 = $('.mobile-menu-line-1'),
            mml2 = $('.mobile-menu-line-2'),
            mml3 = $('.mobile-menu-line-3'),
            body = $('body');
        mobMenu.on('click', function () {
            if (!headNav.hasClass('nav-active')) {
                $(this).css('position' , 'fixed');
                body.css('overflow' , 'hidden');
                headNav.addClass('nav-active');
                mml1.addClass('switched');
                mml2.addClass('switched');
                mml3.addClass('switched');
            } else {
                $(this).css('position' , 'absolute');
                body.css('overflow' , 'auto');
                headNav.removeClass('nav-active');
                mml1.removeClass('switched');
                mml2.removeClass('switched');
                mml3.removeClass('switched');
            }
        });
        });
    /*Конец документа*/
    });
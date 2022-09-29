$(function(){

	// scrollbar js initialization
	$(".nano").nanoScroller();


	// cloning menu items in mobile
	$mobileNav = $('<div id="mobileNav"></div>').prependTo('.offcanvas .nano .nano-content');
	$mobileNav.append($('.header .mynav > ul').clone());

	// Mobile Dropdown
	$(document).on('click','.offcanvas #mobileNav > ul > li > a', function(e){

		findIfHasChildren = $(this).parent().find('ul');
		if(findIfHasChildren.length>0){
			e.preventDefault();
			findIfAlreadyOpen = $(this).parent().find('ul').css('display');
			if(findIfAlreadyOpen == 'none'){
				findIfAlreadyOpen = $(this).parent().find('ul').stop().slideDown(350);
			}
			else{
				$('.offcanvas #mobileNav > ul > li ul').stop().slideUp(350);
				findIfAlreadyOpen = $(this).parent().find('ul').stop().slideUp(350);
			}
		}
	})

	// offcanvas toggle
	$('.toggle a').click(function(e){
		$('.offcanvas').addClass('show-offcanvas');
		$('body').addClass('pushed');
		$('.body-inactive').fadeIn(350);
		e.preventDefault();
	});

	// closing ups clicking on the screen
	$('.body-inactive, .coff a').click(function(e){
		$('.offcanvas').removeClass('show-offcanvas');
		$('.body-inactive').fadeOut(150);
		e.preventDefault();
	});

	// scrollbar js initialization
	$(".nano").nanoScroller();


	// When the user clicks on the button, scroll to the top of the document
	$('.to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });

})

<script src="{{ config('app.url') }}/assets/js/jquery.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/jquery.counterup.min.js"></script>
<script>
    jQuery(document).ready(function () {
			$('.counter').counterUp({
				delay: 5,
				time: 2000
			});
		});
</script>
<script src="{{ config('app.url') }}/assets/jquery-3.5.1.slim.min.js"></script>
<script src="{{ config('app.url') }}/assets/npm/bootstrap-4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/waypoints.min.js"></script>
<script src="{{ config('app.url') }}/assets/slick/owl.carousel.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
			$('#techList').owlCarousel({
				loop: true,
				margin: 10,
				nav: true,
				loop: false,
				dots: false,
				responsiveClass: true,
				responsive: {
					0: {
						items: 2
					},
					600: {
						items: 4
					},
					1000: {
						items: 6
					}
				}
			});
			$("#aboutLinks li").mouseenter(function () {
				let pic = $(this).attr("rel");
				$(".aboutLinks").css("background-image", "url(images/" + pic + ")");
			});
			$("#micon").click(function () {
				$(this).toggleClass('open');
				$('.mainMenu').toggleClass('open');
				$('body').toggleClass('open');
			});
			$("#mainMenu li span").click(function () {
				$(this).parent().toggleClass('open');
				// $(this).toggleClass('open');
			});
			if ($(window).width() > 768) {
				new WOW().init();
			}
		})
</script>
<script src="{{ config('app.url') }}/assets/js/functions.js" type="text/javascript"></script>
<script src="{{ config('app.url') }}/assets/js/wow.min.js" type="text/javascript"></script>
<script src="{{ config('app.url') }}/assets/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
			$('.contact_anch1').click(function () {
				$('.contact_open2').fadeIn('1000');
				$('.contact_pop2').css('right', '0px');
				$('.contact_bg2').show();
			});
			$('.contact_bg2').click(function () {
				$('.contact_open2').fadeOut('2000');
				$('.contact_bg2').hide();
				$('.contact_pop2').css('right', '-100%');
			});
			$('.btn_x').click(function () {
				$('.contact_open').fadeOut('2000');
				$('.contact_bg').hide();
				$('.contact_pop').css('right', '-100%');
				$('.contact_open2').fadeOut('2000');
				$('.contact_bg2').hide();
				$('.contact_pop2').css('right', '-100%');
			});
			$('.closebtn').click(function () {
				$('.cart_open').fadeOut('2000');
				$('.cartbg1').hide();
				$('.cart_bx1').css('left', '-100%');
				$('.menu1').removeClass('disnone')
			});
		});
</script>
<script>
    $(document).ready(function () {
			$('.teampopclose').click(function () {
				$('#teampop').hide();
			});
		});
</script>

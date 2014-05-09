$.noConflict();
jQuery(document).ready(function($) {
  // Code that uses jQuery's $ can follow here.

	// fancybox
	// ==============================
	$('.fancy').fancybox();


	// carousel
	// ==============================
	$('.carousel').carousel();


	// services
	// ==============================

	var owl = $("#owl-demo");

	owl.owlCarousel({
		items : 3, //10 items above 1000px browser width
		itemsDesktop : [1000, 3], //5 items between 1000px and 901px
		itemsDesktopSmall : [900, 2], // betweem 900px and 601px
		itemsTablet : [600, 1], //2 items between 600 and 0
		autoPlay : 3000,
		navigation: true,
		navigationText	: ["<i class='icon-left-open'></i>","<i class='icon-right-open'></i>"],
		itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
	});

	var owl2 = $("#owl-services");

	owl2.owlCarousel({
		items : 3, //10 items above 1000px browser width
		itemsDesktop : [1000, 3], //5 items between 1000px and 901px
		itemsDesktopSmall : [900, 2], // betweem 900px and 601px
		itemsTablet : [600, 1], //2 items between 600 and 0
		autoPlay : 3000,
		navigation: true,
		navigationText	: ["<i class='icon-left-open'></i>","<i class='icon-right-open'></i>"],
		itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
	});
	


	/* to top
	 ==============================*/
	$().UItoTop({
		easingType : 'easeOutQuart'
	});


	//=================================== form forms =================================//
	$("#contact-form").submit(function() {
		var elem = $(this);
		var urlTarget = $(this).attr("action");
		$.ajax({
			type : "POST",
			url : urlTarget,
			dataType : "html",
			data : $(this).serialize(),
			beforeSend : function() {
				elem.find(".alert").hide();
				elem.prepend("<div class='loading alert'>" + "<a class='close' data-dismiss='alert'>×</a>" + "Loading" + "</div>");
				//elem.find(".loading").show();
			},
			success : function(response) {
				elem.find(".alert").hide();
				elem.prepend(response);
				//elem.find(".response").html(response);
				elem.find(".loading").hide();
				elem.find("input[type='text'],input[type='email'],textarea").val("");
			}
		});
		return false;
	});


	//=================================== animated anchors =================================//
	$('.navbar-nav li a.anchor ').click(function() {

		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

			var $target = $(this.hash);

			$target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');

			if ($target.length) {

				var targetOffset = $target.offset().top;

				$('html,body').animate({
					scrollTop : targetOffset
				}, 1000);

				return false;

			}

		}

	});


	//=================================== animated anchors =================================//
	$('a.anchor').click(function() {

		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

			var $target = $(this.hash);

			$target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');

			if ($target.length) {

				var targetOffset = $target.offset().top;

				$('html,body').animate({
					scrollTop : targetOffset
				}, 1000);

				return false;
			}
		}
	});

	
});
// Code that uses other library's $ can follow here.


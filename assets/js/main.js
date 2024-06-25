(function ($) {
	"use strict";

	// Dropdown on mouse hover
	$(document).ready(function () {
		function toggleNavbarMethod() {
			if ($(window).width() > 992) {
				$(".navbar .dropdown")
					.on("mouseover", function () {
						$(".dropdown-toggle", this).trigger("click");
					})
					.on("mouseout", function () {
						$(".dropdown-toggle", this).trigger("click").blur();
					});
			} else {
				$(".navbar .dropdown").off("mouseover").off("mouseout");
			}
		}
		toggleNavbarMethod();
		$(window).resize(toggleNavbarMethod);
	});

	// Back to top button
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$(".back-to-top").fadeIn("slow");
		} else {
			$(".back-to-top").fadeOut("slow");
		}
	});
	$(".back-to-top").click(function () {
		$("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
		return false;
	});

	// Date and time picker
	$(".date").datetimepicker({
		format: "L",
	});
	$(".time").datetimepicker({
		format: "LT",
	});

	$(".news-slider").owlCarousel({
		items: 3,
		itemsDesktop: [1199, 3],
		itemsDesktopSmall: [980, 2],
		itemsMobile: [600, 1],
		navigation: true,
		navigationText: ["", ""],
		pagination: true,
		autoPlay: true,
		loop: true,
	});

	// Testimonials carousel
	$(".villa-carousel").owlCarousel({
		autoplay: true,
		smartSpeed: 1500,
		margin: 30,
		dots: true,
		loop: true,
		center: true,
		responsive: {
			0: {
				items: 1,
			},
			576: {
				items: 1,
			},
			768: {
				items: 1,
			},
			992: {
				items: 2,
			},
		},
	});

	$(".testimonial-carousel").owlCarousel({
		autoplay: true,
		smartSpeed: 1500,
		margin: 30,
		dots: true,
		loop: true,
		center: true,
		responsive: {
			0: {
				items: 1,
			},
			576: {
				items: 1,
			},
			768: {
				items: 2,
			},
			992: {
				items: 3,
			},
		},
	});

	$(".select-room").on("click", function () {
		$(".package-item").removeClass("selected");
		$(".item-value").addClass("disabled");
		$(this).closest(".package-item").addClass("selected");
		$(this).closest(".item-value").removeClass("disabled");

		console.log($(this).closest(".item-value"));
	});

	$(".carousels-item", ".show-neighbors")
		.each(function () {
			var next = $(this).next();
			if (!next.length) {
				next = $(this).siblings(":first");
			}
			next.children(":first-child").clone().appendTo($(this));
		})
		.each(function () {
			var prev = $(this).prev();
			if (!prev.length) {
				prev = $(this).siblings(":last");
			}
			prev.children(":nth-last-child(2)").clone().prependTo($(this));
		});

	$(document).ready(function () {
		// Harga tambahan untuk penjemputan
		const pickupPrices = {
			none: 0,
			hotel: 50,
			airport: 75,
		};

		// Harga tambahan untuk aktivitas
		const activityPrices = {
			snorkeling: 100,
			diving: 150,
			mangrove: 80,
		};

		// Fungsi untuk menghitung total harga
		function calculateTotal() {
			let total = 0;

			// Tambah harga penjemputan
			const pickup = $("#pickup").val();
			total += pickupPrices[pickup];

			// Tambah harga aktivitas
			$('input[name="activities[]"]:checked').each(function () {
				total += activityPrices[$(this).val()];
			});

			// Update total harga
			$("#total").val("$" + total);
		}

		// Event listener untuk perubahan di dropdown penjemputan dan checklist aktivitas
		$('#pickup, input[name="activities[]"]').on("change", calculateTotal);

		// Hitung total harga saat halaman pertama kali dimuat
		calculateTotal();

		// Navigasi antar langkah
		$("#nextToStep2").click(function () {
			$("#step1").hide();
			$("#step2").show();
			$("#progress-bar").css("width", "66%").text("Step 2 of 3");
		});

		$("#backToStep1").click(function () {
			$("#step2").hide();
			$("#step1").show();
			$("#progress-bar").css("width", "33%").text("Step 1 of 3");
		});

		$("#nextToStep3").click(function () {
			$("#step2").hide();
			$("#step3").show();
			$("#progress-bar").css("width", "100%").text("Step 3 of 3");
		});

		$("#backToStep2").click(function () {
			$("#step3").hide();
			$("#step2").show();
			$("#progress-bar").css("width", "66%").text("Step 2 of 3");
		});

		// Tangani submit form
		$("#paymentForm").submit(function (event) {
			event.preventDefault();
			alert("Pembayaran Berhasil!");
			// Implementasi pembayaran sebenarnya bisa dilakukan di sini
		});
	});
	$(".caroselspecialofer").carousel({
		interval: 1000,
	});

	$(".carousel .carousel-item").each(function () {
		var minPerSlide = 4;
		var next = $(this).next();
		if (!next.length) {
			next = $(this).siblings(":first");
		}
		next.children(":first-child").clone().appendTo($(this));

		for (var i = 0; i < minPerSlide; i++) {
			next = next.next();
			if (!next.length) {
				next = $(this).siblings(":first");
			}

			next.children(":first-child").clone().appendTo($(this));
		}
	});

	$(document).ready(function() {
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: function(item) {
					return item.el.attr('title') + ' by Marsel Van Oosten';
				}
			}
		});
	});
	
})(jQuery);

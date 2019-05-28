// $(function(){
// //CONTACT FORM 2 
// $("#contact-form-2").ajaxForm(function() { 
// var $contactFormButton = $("#contact-form-2 .button"), 
// successText = $contactFormButton.data('success-text') ? $contactFormButton.data('success-text') : "Done!", 
// successClass = $contactFormButton.data('success-class') ? $contactFormButton.data('success-class') : "green", 
// defaultText = $contactFormButton.val(); 

// $contactFormButton.attr('value',successText).addClass(successClass); 

// setTimeout(function(){ 
// $("#contact-form-2 .button").attr('value',defaultText).removeClass(successClass); 
// $("#contact-form-2")[0].reset(); 
// },4000); 
// });
// });

// add class on li on hover
			
				$('.mainMenu li').on('mouseenter', function(e) {
				$('.mainMenu li').removeClass("active");
				$(this).addClass("active");
				$('.mainMenu li ul li').removeClass("active");
				});
				
				$('.mainMenu li ul li').on('mouseenter', function(e) {				
				 $(this).parent('ul').parent('li').addClass("active");
				});
				
				
				// scroll to top jquery 
			
			$(document).ready(function () {
			
				$(window).scroll(function () {
					if ($(this).scrollTop() > 600) {
						$('.scrollup').fadeIn();
					} else {
						$('.scrollup').fadeOut();
					}
				});
			
				$('.scrollup').click(function () {
					$("html, body").animate({
						scrollTop: 0
					}, 600);
					return false;
				});
			
			});
			
			//open menu on click
			$('.toggle_arrow').click(function () {
					if(!$(this).parent().parent('li.active').hasClass('open_submenu')){
     					$(this).parent().parent('li.active').addClass('open_submenu');
					}else{
						$("li.open_submenu").removeClass('open_submenu');
					}
				});
				
				// show more content
				
	$(".show-more a").each(function() {
    var $link = $(this);
    var $content = $link.parent().prev("div.text-content");
    var visibleHeight = $content[0].clientHeight;
    var actualHide = $content[0].scrollHeight - 1;
    if (actualHide > visibleHeight) {
        $link.show();
    } else {
        $link.hide();
    }
});

$(".show-more a").on("click", function() {
    var $link = $(this);
    var $content = $link.parent().prev("div.text-content");
    var linkText = $link.text();
    $link.text(getShowLinkText(linkText));

    $content.toggleClass("short-text, full-text");


    return false;
});

function getShowLinkText(currentText) {
    var newText = '';

    if (currentText.toUpperCase() === "SHOW MORE") {
        newText = "Show less";
    } else {
        newText = "Show more";
    }

    return newText;
}
		
			// for video section
		
			
		// function myFunction() {
		// var video = document.getElementById("myVideo");
		// var btn = document.getElementById("myBtn");				
		// if (video.paused) {
		// video.play();
		// btn.innerHTML = "Pause";		
		// } else {
		// video.pause();
		// btn.innerHTML = "Play";
		// }
		// }
		
				
		// function myFunctiona() {
		// var video = document.getElementById("myVideo1");
		// var btn = document.getElementById("myBtn1");
		// if (video.paused) {
		// video.play();
		// btn.innerHTML = "Pause";
		// } else {
		// video.pause();
		// btn.innerHTML = "Play";
		// }
		// }
		
		
	 //   $("#carousel-example-generic .item.active").each(function() {
		// 	$(".video1").on("click", function() {
		// 		$(this).parent().addClass('play_active');
		// 		$('.play_active .video1').hide();
		// 		$('.play_active .video2').show();
		// 	});
		// 	$(".video2").on("click", function() {
		// 		$(this).parent().removeClass('play_active');
		// 		$('.video1').show();
		// 		$('.video2').hide();
		// 	});
		// }); 
			
		$('.carousel').carousel({
			interval: false
		}); 
		
		$('#carousel-example-generic').bind('slid', function (e) {
			console.log('slid event!');
			$('.item.active').find('iframe').contents().find('body').find('video')[0].play();
		});

		$('.toggle_arrow').click(function () {
			if(!$(this).parent().parent('li.active').hasClass('open_submenu')){
					$(this).parent().parent('li.active').addClass('open_submenu');
			}else{
				$("li.open_submenu").removeClass('open_submenu');
			}
		});

		$('.mainMenu ,.go-help-form .dropdown-menu.inner').slimscroll({
			height: 'auto'
		});
		

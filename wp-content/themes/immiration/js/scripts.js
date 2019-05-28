       $("#flexiselDemo3").flexisel({
        visibleItems: 3,
        itemsToScroll: 1,   
		responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1,
                itemsToScroll: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 1,
                itemsToScroll: 1
            },
            tablet: { 
                changePoint:768,
                visibleItems: 2,
                itemsToScroll: 1
            }
        },      
        autoPlay: {
            enable: true,
            interval: 5000,
            pauseOnHover: true
        }        
    });
	  $("#flexiselDemo4").flexisel({
        visibleItems: 1,
        itemsToScroll: 1, 
        infinite: true,
        autoPlay: {
            enable: true,
            interval: 5000,
            pauseOnHover: true
        },
		responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1,
                itemsToScroll: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 1,
                itemsToScroll: 1
            },
            tablet: { 
                changePoint:768,
                visibleItems: 1,
                itemsToScroll: 1
            }
        },               
    });
	$("#flexiselDemo5").flexisel({
        visibleItems: 1,
        itemsToScroll: 1,   
		responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1,
                itemsToScroll: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 1,
                itemsToScroll: 1
            },
            tablet: { 
                changePoint:768,
                visibleItems: 1,
                itemsToScroll: 1
            }
        },         
        autoPlay: {
            enable: false,
            interval: 5000,
            pauseOnHover: true
        }        
    });
	
	$("#flexiselDemo6").flexisel({
        visibleItems: 1,
        itemsToScroll: 1,   
		responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1,
                itemsToScroll: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 1,
                itemsToScroll: 1
            },
            tablet: { 
                changePoint:768,
                visibleItems: 1,
                itemsToScroll: 1
            }
        },        
        autoPlay: {
            enable: false,
            interval: 5000,
            pauseOnHover: true
        }        
    });
	
	$("#flexiselDemo7").flexisel({
        visibleItems: 3,
        itemsToScroll: 1,  
		responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1,
                itemsToScroll: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 1,
                itemsToScroll: 1
            },
            tablet: { 
                changePoint:768,
                visibleItems: 2,
                itemsToScroll: 1
            },
			tablet: { 
                changePoint:980,
                visibleItems: 2,
                itemsToScroll: 1
            }
        },                 
        autoPlay: {
            enable: false,
            interval: 5000,
            pauseOnHover: true
        }        
    });
	
	// tooltip script
		$(function () {
		$('[data-toggle="tooltip"]').tooltip()
		})
		
		
		// for select dropdowns
		
		$('select').selectpicker();
		
			
		
		
		
		// // for full screen video
		
		//  var element = document.getElementById('myVideo');
  //           //var fullscreen = document.getElementById('fullscreen');

  //           fullscreen.addEventListener('click',function(){
  //               <!--console.log ('it is working'); -->
  //               if(element.requestFullscreen){
  //                   element.requestFullscreen();
  //               } 
  //               else if (element.webkitRequestFullscreen){
  //                   element.webkitRequestFullscreen();
  //               }
  //               else if (element.mozRequestFullScreen){
  //                   element.mozRequestFullScreen();
  //               }
  //               else if (element.msRequestFullscreen){
  //                   element.msRequestFullscreen();
  //               }   
  //           });
			
			// remove id from url
			
			$('.mainMenu li a[href^="#"], .mainMenu li a[href=""]').on('click', function(e){
				e.preventDefault();
				const elem = this; // save it so we can use it in the animate
				
				$('html, body').animate({
				scrollTop: $( $(elem).attr('href') ).offset().top
				}, 2000);
			});			
			
			
			// schedule meeting 
			
			$('.schedule_anchor').click(function () {
					$('.schedule_meeting').addClass('active_slide');					
			});
			
			$('.header_right img').click(function () {
					$('.schedule_meeting').removeClass('active_slide');					
			});
			
			// change the style sheet
			
			function swapStyleSheet(sheet) {
			document.getElementById("pagestyle").setAttribute("href", sheet);  
			}
			
			function initate() {
    			var style1 = document.getElementById("stylesheet1");
    			var style2 = document.getElementById("stylesheet2");
    			
    			style1.onclick = function () { swapStyleSheet("/css/style.css") };
    			style2.onclick = function () { swapStyleSheet("/css/blue.css"); };
			}

            console.log(canoz.site_url);
            function TestinomailMessage(){
                if(($('.katb_test_sent').length > 0 == true && $('.katb_test_sent').length > 0 != undefined) || ($('.katb_error').length > 0 == true && $('.katb_error').length > 0 != undefined)){
                    var url = canoz.site_url+'/#testimonials'
                    window.location.href = url;
                    $('#testimonials .katb_test_wrap_basic').prepend('<div class="katb_test_sent">'+$('#myModal .katb_test_sent').text()+'</div>')
                    $('#testimonials .katb_test_wrap_basic').prepend('<div class="katb_error">'+$('#myModal .katb_error').text()+'</div>')
                    $('#myModal .katb_test_sent, #myModal .katb_error').hide()
                }
            }
            function TestinomailMessageDel(){
                $('#testimonials .katb_test_sent, #testimonials .katb_error ').hide();
            }
            $(document).ready(function(){
                $('#wonderpluginslider-container-1 .amazingslider-box-1 div').find('a[href="http://www.wonderplugin.com/wordpress-slider/"]').parent().remove(); 
                TestinomailMessage();
                //setTimeout(TestinomailMessageDel, 5000);
                $('.help_form .go-post').attr('href',$(".selectpicker option:selected").attr('data-href'));
                $("select.selectpicker").change(function(){
                    var selectedCountry = $(".selectpicker option:selected").attr('data-href');
                    $('.help_form .go-post').attr('href',selectedCountry);
                    //alert("You have selected the country - " + selectedCountry);
                });
                $('form.search-form').css('opacity','0');
                $('form.search-form').css('display',' none');
                // Code to run the search functionalty
                $('body').on('click','#search',function(){
                    console.log('hello');
                   $('form.search-form').css('opacity','1');               
                   $('form.search-form').css('display',' block');
                   $('#search').hide();
                })  

                $('video').mediaelementplayer({
                    videoWidth: '100%',
                    videoHeight: '100%',
                    enableAutosize: true,
                    success: function(media, node, player) {
                        $('#' + node.id + '-mode').html('mode: ' + media.pluginType);
                    }
                });

                $('.mejs__play, .mejs__overlay-button').on('click touchend', function( event ) {
                    if($(this).hasClass('mejs__pause') == true){
                        console.log('pause');
                        $('.item.active .common_tittle').show();
                    }else{
                        console.log('play')
                        $('.item.active .common_tittle').hide();
                    }
                   
                });
            });
			//window.onload = initate;
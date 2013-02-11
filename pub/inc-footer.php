<footer>
<div class="container">
	<div id="connect">
		<h4>Connect with us</h4>
		<ul>
			<li><a href="#" id="twitter" class="hide-text">Twitter</a></li>
			<li><a href="#" id="facebook" class="hide-text">Facebook</a></li>
			<li><a href="#" id="rss" class="hide-text">RSS</a></li>
			<li><a href="#" id="linkedin" class="hide-text">LinkedIn</a></li>
			<li><a href="#" id="youtube" class="hide-text">YouTube</a></li>
			<li><a href="#" id="slideshare" class="hide-text">Slideshare</a></li>
		</ul>
	</div>
	<ul id="footer-links">
	<li>About
		<ul>
			<li><a href="#">Why Kony?</a></li>
			<li><a href="#">Privacy Policy</a></li>
			<li><a href="#">Success Stories</a></li>
			<li><a href="#">Careers</a></li>
		</ul>
	</li>
	<li>News
		<ul>
			<li><a href="#">Press Room</a></li>
			<li><a href="#">Kony in the News</a></li>
			<li><a href="#">Events</a></li>
		</ul>
	</li>
	<li>Contact
		<ul>
			<li><a href="#">Locations</a></li>
			<li><a href="#">Customer Support</a></li>
			<li><a href="#">Sales</a></li>
		</ul>
	</li>
	<li>Support
		<ul>
			<li><a href="#">Developer Portal</a></li>
			<li><a href="#">Tutorial</a></li>
			<li><a href="#">Kony User Group</a></li>
		</ul>
	</li>
	</ul>
	<h4><a href="#" id="footer-logo" class="hide-text">Kony</a></h4>
</div>
</footer>

<script>
	$(document).ready(function() {	
	
		$('ul.sf-menu').superfish();
	       
        if($(window).width() < 768) {
        	$('#intro-slider .slides li:first').remove();
        	$('.flexslider').flexslider({
	          pauseOnHover: true,
	          animation: "slide"
	        });
    		} else {
    			$('.flexslider').flexslider({
              pauseOnHover: true,
              animationLoop: true,
              controlsContainer: ".flex-container"/*
,
              animation: 'slide'  leave as default "fade" until kinks can be worked out associated with using "slide" 
*/
          });
    		}
        
        $('.flexslider-tour').flexslider({
          animationLoop: false,
          slideshow: false
        });
        
		// Tabbed boxes
		$('section .tabs').tabs('> .panel');
		$('#pri-tabs').tabs('#pri-content > .story-branch');
		
		var personaSliders = $('div.panel');
		
	    $('.persona-tabs li a').click(function () {
	        personaSliders.hide().filter(this.hash).show();
	        return false;
	    });
	
		// Fixed tabs
		
		var mainWidth = $('#main-container').width();
		var tabPos = $('#pri-tabs').offset();
		
		$(window).resize(function() {
			// Resize .fixed-tabs-container in accordance with #main-container resizing
			var mainResized = $('#main-container').width();
			
			$('.fixed').css('width' , mainResized);
		});
		
	    $(window).scroll(function() {		    	
	    	if (tabPos != null && $(window).scrollTop() >= tabPos.top) {
		    	$('.fixed-tabs-container').addClass('fixed');
		    	//Set tab container width to width on #main-container to retain tab size
		    	$('.fixed').css('width' , mainWidth);
	    	}
	    	else {
		    	$('.fixed-tabs-container').removeClass('fixed');
		    	$('.fixed-tabs-container').css('width' , '100%');
	    	}
        });
        
        // Set fixed header bar on scroll
	    var utilityHeight = $('#utility-bar').height();
	    $(window).scroll(function() {
	        var windowPos = $(document).scrollTop();
	        var headerHeight = $('header').height();
	        if (windowPos > (utilityHeight + 10)) {
	             $('header').addClass('fixed').css('top' , (-11 - utilityHeight));
	             $('#billboard').css('margin-top' , headerHeight);
	        } else {
	             $('header').removeClass('fixed');
	             $('#billboard').css('margin-top' , '0');
	        }
	    });
        
        // webinar accordion
        $('.webinar-listing dt').click(function() {
	    	$(this).parent().next('div').slideToggle(150);
	    	$(this).find('i').toggleClass('icon-caret-down').toggleClass('icon-caret-up');
        });
        
        // Blog Archives accordion
	
		$('.kony-feature-blog-archives dt').click(function() {	
			$(this).parent().next('ul').slideToggle(150);
			$(this).find('i').toggleClass('icon-chevron-down').toggleClass('icon-chevron-right');
		});
        
        // Customer grid master
        var customerProfiles = $('div.customer-panel');
    	
    	$('.customer-tabs li a').click(function() {
    		if ($(this).parent().hasClass('selected')) {
    			$(this).parent().removeClass('selected');
	    		$('.customer-tabs').css('border-bottom' , 'none');
	    		customerProfiles.slideUp('1000');
    		} else {
    		$('.customer-tabs').css('border-bottom' , 'none');
    		$(this).parent().parent().css('border-bottom' , '1px solid #ccc');
	        customerProfiles.hide().filter(this.hash).show();
	        
	        $('.customer-tabs li').removeClass('selected');
	        $(this).parent().addClass('selected');
	        
	        }
	        
	        return false;
	    })
	    
	    // App grid master
        var appProfiles = $('div.app-panel');
    	
    	$('.app-tabs li a').click(function() {
    		if ($(this).parent().hasClass('selected')) {
    			$(this).parent().removeClass('selected');
	    		appProfiles.slideUp('1000');
    		} else {
	        appProfiles.hide().filter(this.hash).show();
	        
	        $('.app-tabs li').removeClass('selected');
	        $(this).parent().addClass('selected');
	        
	        }
	        
	        return false;
	    })

	    // Homepage tour toggle
	    $('.tour-button').click(function() {
	    	$('.tour-slide').fadeToggle('slow');
	    });
	    $('.restart').click(function(){
        $('.flexslider-tour').hide();
        $('#intro-slider').show();
      });
	   
	    //About Us JS fix for hot linking from nav items
	    var hash = window.location.hash;
	    if(hash.length != 0){
	    	$('.tabs li a').removeClass('current');
	    	$('#leadership_div').hide();
	    	$(hash+'_nav').addClass('current');
	    	$(hash+'_div').show();
	    	$(document).scrollTop($('.kony-feature-tabbed-about').offset().top);
	    }
    	
      //Video/image swap
      $('.video-placeholder').click(function(event){
        event.preventDefault();
        $(this).parent().addClass('hide').next().removeClass('hide');
      });
	   
	   // Lightbox functionality
	   $('.lightbox').fancybox({
     	openEffect: 'none',
     	closeEffect: 'none',
     	autoCenter: true,
     	fitToView: true,
     	arrows: true,
     	type: 'image'
     });

     $('.fancybox-video').fancybox({
     	type: 'iframe',
     	iframe: {
     		scrolling: 'no',
     		preload: true,
     	}
     });
	   
	   
	   var os = (function() {
         var ua = navigator.userAgent.toLowerCase();
         return {
             isWin2K: /windows nt 5.0/.test(ua),
             isXP: /windows nt 5.1/.test(ua),
             isVista: /windows nt 6.0/.test(ua),
             isWin7: /windows nt 6.1/.test(ua)
         };
     }());
     		
		
		$("header nav select").change(function() {
		  window.location = $(this).find("option:selected").val();
		});
		
		// Mobile select nav
		$("<select />").appendTo("header div nav");

		//if their on the home page show go to
		if(window.location.pathname == '/'){
			// Create default option "Go to..."
			$("<option />", {
			   "selected": "selected",
			   "value"   : "",
			   "text"    : "Go to..."
			}).appendTo("header nav select");
		}
		
		// Populate dropdown with menu items
		var menu = $('ul.menu');
		menu.children('li').each(function(){
			var el = $(this).children('a');
			//skips menus with 3rd level nav
			if(el.text().indexOf(" » »") != -1){
				return;
			}
			var option = $("<option />",{
				"value"   : el.attr("href"),
			    "text"    : el.text().replace(" »", '')
			});
			if(el.hasClass('active-trail')){
				option.attr('selected','selected');
			}
			option.appendTo("header nav select");
		});
		
		//Create and populate second level nav if needed
		if(window.location.pathname != '/'){
			var activeNavItem = $('.active-trail.sf-with-ul');
			if(activeNavItem.length != 0){
				var subSelect = $("<select />").appendTo("header div nav");
				if(window.location.pathname == activeNavItem.attr('href')){
					// Create default option "Go to..."

					$("<option />", {
					   "selected": "selected",
					   "value"   : "",
					   "text"    : "Go to..."
					}).appendTo(subSelect);
				}
				//incase we're on an item with a 3rd level nav
				activeNavItem = $(activeNavItem[0]);
				var subMenu = activeNavItem.siblings('ul').children('li');
				subMenu.each(function(){
					var el = $(this).children('a');
					console.log(el);
					var option = $("<option />",{
						"value"   : el.attr("href"),
					    "text"    : el.text().replace(" »",'').replace(" »", '')
					});
					if(el.hasClass('active-trail')){
						option.attr('selected','selected');
					}
					option.appendTo(subSelect);
					
					var thirdLevel = el.siblings('ul');
					if(thirdLevel.length != 0){
						var optgrp = $("<optgroup />");
						thirdLevel.children('li').each(function(){
							var el = $(this).children('a');	
							var option = $("<option />",{
								"value"   : el.attr("href"),
							    "text"    : '                  ' + el.text().replace(" »",'')
							});
							if(el.hasClass('active-trail')){
								option.attr('selected','selected');
							}
							option.appendTo(optgrp);
						});
						optgrp.appendTo(subSelect);
					}
				});
					
			}

		}
		
		// Create default option "Go to..."
		$("<option />", {
		   "selected": "selected",
		   "value"   : "",
		   "text"    : "Go to..."
		}).appendTo(".kony-feature-tabbed-apps select");
		
		// Populate dropdown with menu items
		$(".kony-feature-tabbed-apps .app-tabs li").each(function() {
		 var el = $(this).find("h5");
		 $("<option />", {
		     "value"   : el.attr("href"),
		     "text"    : el.text()
		 }).appendTo(".kony-feature-tabbed-apps select");
		});
		
		$(".kony-feature-tabbed-apps select").change(function() {
		// Insert filter code here for apps tabbed box
		});

		
		//add scroll to function for app folder clicking incase below the screen
		       $('.app-click').click(function(event){
		           //get the corresponding div and scroll to it
		           $(window).scrollTop($(this).offset().top);
		       });
        	          	        
	});
</script>
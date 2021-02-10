/*******************************************************
	JS - Página - V1
*******************************************************/


	/*******************************************************
		Load Page
	*******************************************************/

	onload = function(){
		document.body.style.visibility = "visible";
	}
	
	/*******************************************************
		Smooth
	*******************************************************/

	$(document).ready(function(){
	  
		$("a").on('click', function(event) {

			if (this.hash !== ""){
		  
				event.preventDefault();

				var hash = this.hash;

				$('html, body').animate({
				scrollTop: $(hash).offset().top
				}, 800, function(){

				window.location.hash = hash;
				});
			}
		});
	});

	/*******************************************************
		NavBar
	*******************************************************/

	// NavBar scroll
	/*
		var lastScrollTop = 0;

		window.addEventListener("scroll", function(){  
		   
			var st = window.pageYOffset || document.documentElement.scrollTop;  
		  
			if(st > lastScrollTop){
				document.getElementById("NavBar").style.top = "-100px";
			}else{
				document.getElementById("NavBar").style.top = "0";
			}
			lastScrollTop = st;
		}, false);
	*/
	
	$(document).ready(function(){
	  
	  'use strict';
	  
	   var c, currentScrollTop = 0,
		   navbar = $('header');

	   $(window).scroll(function(){
		  var a = $(window).scrollTop();
		  var b = navbar.height();
		 
		  currentScrollTop = a;
		 
		  if (c < currentScrollTop && a > b) {
			navbar.addClass("scrollUp");
		  } else if (c > currentScrollTop ) {
			navbar.removeClass("scrollUp");
		  }
		  c = currentScrollTop;
	  });
	  
	});
	
	
	// Cor da NavBar

		// NavBar

		function darkred_theme(){
			document.getElementById("NavBar").style.backgroundColor = "#9B0B00";
		}

		function orange_theme(){
			document.getElementById("NavBar").style.backgroundColor = "#FF8C00";
		}
		
		function indigo_theme(){
			document.getElementById("NavBar").style.backgroundColor = "#4B0082";
		}
		
		function darkcyan_theme(){
			document.getElementById("NavBar").style.backgroundColor = "#2F6B7A";
		}

		// Botões
		
		function darkgreen_theme(){
			document.getElementById("NavBar").style.backgroundColor = "#1C4A06";
		}
		
		function blue_theme(){
			document.getElementById("NavBar").style.backgroundColor = "#0033AA";
		}
		
		function pink_theme(){
			document.getElementById("NavBar").style.backgroundColor = "#CB5067";
		}
		
		function cyan_theme(){
			document.getElementById("NavBar").style.backgroundColor = "#008B8B";
		}

	// Cor Original da NavBar

		function NB_Color(){	
			var NBcor = "#3D8B9F";
			document.getElementById("NavBar").style.backgroundColor = NBcor;	
		}
		
	/*******************************************************
		Nav Link
	*******************************************************/

		// In

		$(document).ready(function(){
			
			$("#NavList-Cont").mouseenter(function(){
				$("#NavList").css("right", "0px");
			});		
			
		});
		
		// Out
		
		$(document).ready(function(){
			
			$("#NavList-Cont").mouseleave(function(){
				$("#NavList").css("right", "-180px");				
			});
			
		});
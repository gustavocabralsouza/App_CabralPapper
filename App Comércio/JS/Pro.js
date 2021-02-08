/*******************************************************
	JS - Profissões - V1
*******************************************************/


/*******************************************************
	Nome da Profissão
*******************************************************/

	$(document).ready(function(){
		$("#TituloHead").text($(".Titulo1").text());
	});

/*******************************************************
	Slidshow
*******************************************************/

	var slideIndex = 0;
	showSlides();

	function showSlides(){
		
		var i;
		var slides = document.getElementsByClassName("Slide");
		var dots = document.getElementsByClassName("dot");
		var sec = 2;
		var time = sec*1000;
		
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		}
		
		slideIndex++;
		
		if (slideIndex > slides.length){
			slideIndex = 1;
		}    
		
		for (i = 0; i < dots.length; i++){
			dots[i].className = dots[i].className.replace(" active", "");
		}
		
		slides[slideIndex-1].style.display = "block";  
		dots[slideIndex-1].className += " active";
		
		setTimeout(showSlides, time);

	}
window.addEventListener('DOMContentLoaded', () => {
	$(document).ready(function() {
		$('#pagepiling').pagepiling({
			navigation: {
	            'textColor': '#fff',
	            'bulletsColor': '#fff',
	            'position': 'right',
	            'tooltips': ['Home', 'Community']
	        },
		});
	});

	const mask = document.querySelector('.mask');

	window.addEventListener('load', () => {
		mask.classList.add('hide-loader');
		setTimeout(()=> {
			mask.remove();
		}, 700);
	});
	
	const menu = document.querySelector('.menu'),
		  navig = document.querySelector('.navig'),
		  backX = document.querySelector('.image_back'),
		  headerText = document.querySelector('.header_text');

	navig.classList.add('hide');
	backX.classList.add('hide');
	

	if(window.screen.width > 450){
		navig.classList.remove('hide');
	}else if(window.screen.width > 300 && window.screen.width < 500){
		menu.classList.remove('hide');

		headerText.innerHTML = `<h1 class="header_text">CLEVERTECH MORE THAN JUST<br>WEB 3.0</h1>`;
	}

	menu.addEventListener('click', () => {
		navig.classList.remove('hide');
		backX.classList.remove('hide');
	});

	backX.addEventListener('click', () => {
		navig.classList.add('hide');
	});

	
});

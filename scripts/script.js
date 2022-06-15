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


	const menu = document.querySelector('.menu'),
		  navig = document.querySelector('.block_links'),
		  backX = document.querySelector('.image_back');

	menu.addEventListener('click', () => {
		navig.classList.remove('hide');
	});

	backX.addEventListener('click', () => {
		navig.classList.add('hide');
	});
});

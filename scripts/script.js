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
});

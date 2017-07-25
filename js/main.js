
	function itemWidth(){
		var contentWidth = $('.content').width();
		var itemWidth = contentWidth / 280;
		var itemWidthSet = contentWidth / (itemWidth ^ 0);
		$('.item').width(itemWidthSet);
	};

	itemWidth();

	function popUpWindow(){

		console.log(this)

	}


	// document.querySelectorAll('[data-role="tooltip"]').click('click', popUpWindow, false)



var w = $('section.second .row div:nth-child(1) span');
var a = $('section.second .row div:nth-child(2) span');
$(window).load(function(){
	var wHeight = $('section.second .row div:nth-child(1) span').height();
	var aHeight = $('section.second .row div:nth-child(2) span').height();

	w.width(wHeight).addClass('active noTrans');
	a.width(aHeight);

});

a.click(function(){
	$(this).addClass('active');
	$(w).removeClass('active noTrans');
});

w.click(function(){
	$(this).addClass('active');
	$(a).removeClass('active');
});
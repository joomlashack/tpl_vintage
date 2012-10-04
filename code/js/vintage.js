window.addEvent('domready', function() {
	var featured = new Fx.Morph($('featured-wrapper'), {
		duration: 300,
		transition: Fx.Transitions.Cubic.easeInOut,
		onStart: function() {
			$('featured-wrapper').getChildren('div.featured1-wrapper').setStyle('display','block');
		}
	});
	
	$('featured-button').addEvent('click',function() {
		var ymax = 0;
		$('featured-wrapper').getElements("div.featured1-wrapper").each(function (m) {
			if (m.getSize().y > ymax)
				ymax = m.getSize().y;
		});
		if ($('featured-wrapper').getStyle('height') == '0px')
			featured.start({'height': (ymax+20) + 'px', 'overflow': 'visible'});
		else
			featured.start({'height':'0', 'overflow': 'hidden'});
	})
});
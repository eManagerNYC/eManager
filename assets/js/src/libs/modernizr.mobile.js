/*global patch,Modernizr: false*/
ajax.post(
	{action: 'eman_mobile_classes'},
	function( mobile_classes )
	{
		if ( mobile_classes )
		{
			Modernizr.addTest('mobile', function () {
				return ( -1 < mobile_classes.indexOf('mobile') ) ? true : false;
			});
			Modernizr.addTest('phone', function () {
				return ( -1 < mobile_classes.indexOf('phone') ) ? true : false;
			});
			Modernizr.addTest('tablet', function () {
				return ( -1 < mobile_classes.indexOf('tablet') ) ? true : false;
			});
			Modernizr.addTest('desktop', function () {
				return ( -1 < mobile_classes.indexOf('desktop') ) ? true : false;
			});
		}
	}
);
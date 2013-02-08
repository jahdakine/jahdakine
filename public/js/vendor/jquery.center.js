/**
 * @author Alexandre Magno
 * @desc Center a element with jQuery
 * @version 1.0
 * @example
 * $("element").center({
 *
 * 		vertical: true,
 *      horizontal: true
 *
 * });
 * @obs With no arguments, the default is above
 * @license free
 * @param bool vertical, bool horizontal
 * @contribution Paulo Radichi
 *
 */
jQuery.fn.center = function(params) {

		var options = {

			vertical: true,
			horizontal: true

		};
		op = jQuery.extend(options, params);

   return this.each(function(){

		//initializing variables
		var $self = jQuery(this),
		//get the dimensions using dimensions plugin
		width = $self.width(),
		height = $self.height(),
		//get the paddings
		paddingTop = parseInt($self.css("padding-top")),
		paddingBottom = parseInt($self.css("padding-bottom")),
		//get the borders
		borderTop = parseInt($self.css("border-top-width")),
		borderBottom = parseInt($self.css("border-bottom-width")),
		//get the media of padding and borders
		mediaBorder = (borderTop+borderBottom)/2,
		mediaPadding = (paddingTop+paddingBottom)/2,
		//get the type of positioning
		positionType = $self.parent().css("position"),
		// get the half minus of width and height
		halfWidth = (width/2)*(-1),
		halfHeight = ((height/2)*(-1))-mediaPadding-mediaBorder;
		// initializing the css properties
		cssProp = {
			position: 'absolute'
		};
		if(op.vertical) {
			cssProp.height = height;
			cssProp.top = '50%';
			cssProp.marginTop = halfHeight;
		}
		if(op.horizontal) {
			cssProp.width = width;
			cssProp.left = '50%';
			cssProp.marginLeft = halfWidth;
		}
		//check the current position
		if(positionType == 'static') {
			$self.parent().css("position","relative");
		}
		//applying the css
		$self.css(cssProp);
   });
};
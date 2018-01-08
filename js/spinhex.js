

// Start script on page load
document.addEventListener( 'DOMContentLoaded', function( event ) {

	var target = "hex-container";
	var container = document.getElementById( target );

	// Only start script if element is found.
	if ( container ) {
		new hex_placer({target: target});
	}

});


function hex_placer( options ) {
	var self = this;

	//Set defaults for options
	options = options || {};
	options.target = options.target || {};

	// Change this to use different image
	self.img_src = "https://jane-fox.com/wp-content/themes/wp-portfolio/images/hex-part.svg";

	self.height = 500;
	self.width = window.innerWidth;
	self.container = document.getElementById( options.target );


	// Length of a hexagon side
	self.hex_size = 200;


	self.init = function() {

		// Calculate how many we'll need to fill the entire area
		var fill_x =  self.width / (self.hex_size * 1.5);
		var fill_y =  self.height / (self.hex_size * 1.5);

		// Go from eg (-1, -1) to (3,3);
		for ( x = -1; x < fill_x; x++ ) {

			for ( y = -1; y < fill_y; y++ ) {

				var pos = self.get_pos( x, y );

				var img = document.createElement("img");
				img.src = self.img_src;
				img.style = "left: "+ pos.x + "px; top: " + pos.y + "px;";

				// The image being used is 250 wide for 100px side. 
				// This proportion may need to change if you change the image
				img.height = self.hex_size * 2.5;

				self.container.appendChild(img);

			}

		}
	};


	// converts simple positions (eg {2,1}) to pixels 
	self.get_pos = function( x, y ) {

		var pixel_x = self.hex_size * 1.75 * x;
		var pixel_y = self.hex_size * 1.5 * y;

		// For every odd row, add an offset
		if ( y % 2 === 0 ) {
			pixel_x = pixel_x - ( self.hex_size * .875 );
		}

		var round_x = Math.round(pixel_x);
		var round_y = Math.round(pixel_y);

		return { x: round_x, y: round_y };
	};



	self.init();

} // hex_placer


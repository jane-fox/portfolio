

var size = 200;
var spacing = 0;
var thickness = 30;
var color = '#639';
//Var color = "#5a555f";
//var color = "#e8624c";




// Start script on page load
document.addEventListener( 'DOMContentLoaded', function( event ) {

	console.log( 'Loaded!' );

	var canvas = document.getElementById( 'hex-canvas' );

	if ( canvas ) {
		//Make a new gif and set its target
		var new_gif = new js_gif({ target: 'hex-canvas' });

	}

});

function js_gif( options ) {


	//Set defaults for options
	var options = options || {};
	options.target = options.target || {};


	//Setup variables
	//var encoder = new GIFEncoder();
	var canvas = document.getElementById( 'hex-canvas' );
	var canvas2 = document.getElementById( 'hex-canvas2' );
	var canvas3 = document.getElementById( 'hex-canvas3' );
	var ctx = canvas.getContext( '2d' );
	var ctx2 = canvas2.getContext( '2d' );
	var ctx3 = canvas3.getContext( '2d' );

	var width = window.innerWidth + 400;
	var height = 800;
	//Var height = window.innerHeight;

	canvas.width = width;
	canvas2.width = width;
	canvas3.width = width;

	canvas.height = height;
	canvas2.height = height;
	canvas3.height = height;

	var bg_color = '#409';

	var hex_canvas = document.createElement( 'canvas' );
	var hex_canvas2 = document.createElement( 'canvas' );
	var hex_canvas3 = document.createElement( 'canvas' );
	var hex_ctx = hex_canvas.getContext( '2d' );
	var hex_ctx2 = hex_canvas2.getContext( '2d' );
	var hex_ctx3 = hex_canvas3.getContext( '2d' );
		hex_canvas.width = hex_canvas.height = size * 4;
		hex_canvas2.width = hex_canvas2.height = size * 4;
		hex_canvas3.width = hex_canvas3.height = size * 4;

	// Default line style
	hex_ctx.strokeStyle = color;
	hex_ctx2.strokeStyle = color;
	hex_ctx3.strokeStyle = color;

	hex_ctx.fillStyle = hex_ctx2.fillStyle = hex_ctx3.fillStyle = color;

	hex_ctx.lineCap = hex_ctx2.lineCap = hex_ctx3.lineCap  = 'round';

	hex_ctx.lineWidth = hex_ctx2.lineWidth = hex_ctx3.lineWidth = thickness;

	var angles = [];
	var points = [];
	angles[0] = new angle( size, 0 );
	angles[1] = new angle( size, 2 );
	angles[2] = new angle( size, 4 );

	var frame = 0;
	var total_frames = 73;
	var compile_gif = false;
	var gif_done = false;

	var init = function() {

		//Encoder.start();

		//Set up drawing path
		for ( var i = 0; i < 6; i++ ) {

			//Var angle = 2 * Math.PI / 6 * (i +.5);
			var angle = 2 * Math.PI / 6 * i;

			//Center + size + cos(angle)
			var line_x = hex_canvas.width / 2 + size * Math.cos( angle );
			var line_y = hex_canvas.width / 2 + size * Math.sin( angle );

			// Corner coordinates for hexagons
			points.push({ x: line_x, y: line_y });

		}//Path

		// Start the animation
		animation_step();

		//Console.log(angles);

	};

	var animation_step = function() {

		frame += .2;

		//Frame = 0;

		ctx.clearRect( 0, 0, canvas.width, canvas.height );
		ctx2.clearRect( 0, 0, canvas.width, canvas.height );
		ctx3.clearRect( 0, 0, canvas.width, canvas.height );

		hex_ctx.clearRect( 0, 0, hex_canvas.width, hex_canvas.height );
		hex_ctx2.clearRect( 0, 0, hex_canvas.width, hex_canvas.height );
		hex_ctx3.clearRect( 0, 0, hex_canvas.width, hex_canvas.height );

		//Hex_ctx.rect(0,0,hex_canvas.width, hex_canvas.height);

		//hex_ctx.stroke();

		hex_ctx.beginPath();
		hex_ctx2.beginPath();
		hex_ctx3.beginPath();


		// The hexagons are made of 3 parts that connect together
		// Rotating canvas in place is difficult, so just redraw the parts



		///1st seciton
		//hex_ctx.moveTo(points[1].x, points[1].y);

		var new_x_1 = points[1].x + size * Math.cos( ( frame - 180 ) * Math.PI / 180 );
		var new_y_1 = points[1].y + size * Math.sin( ( frame - 180 ) * Math.PI / 180 );

		hex_ctx.moveTo( points[1].x, points[1].y );
		hex_ctx.lineTo( points[1].x + size * Math.cos( ( frame - 60 ) * Math.PI / 180 ), points[1].y + size * Math.sin( ( frame - 60 ) * Math.PI / 180 ) );

		///2nd seciton
		//hex_ctx2.moveTo(points[3].x, points[3].y);
		//hex_ctx2.lineTo(points[3].x + size * Math.cos((frame-60)*Math.PI/180), points[3].y + size * Math.sin((frame-60)*Math.PI/180));

		var new_x_2 = points[1].x + size * Math.cos( ( frame - 180 ) * Math.PI / 180 );
		var new_y_2 = points[1].y + size * Math.sin( ( frame - 180 ) * Math.PI / 180 );

		hex_ctx2.moveTo( points[3].x, points[3].y );
		hex_ctx2.lineTo( points[3].x + size * Math.cos( ( frame + 60 ) * Math.PI / 180 ), points[3].y + size * Math.sin( ( frame + 60 ) * Math.PI / 180 ) );

		///3rd seciton
		//hex_ctx3.moveTo(points[5].x, points[5].y);
		//hex_ctx3.lineTo(points[5].x + size * Math.cos((frame+60)*Math.PI/180), points[5].y + size * Math.sin((frame+60)*Math.PI/180));

		hex_ctx3.moveTo( points[5].x, points[5].y );
		hex_ctx3.lineTo( points[5].x + size * Math.cos( ( frame - 180 ) * Math.PI / 180 ), points[5].y + size * Math.sin( ( frame - 180 ) * Math.PI / 180 ) );




		//Draw polygon
		//context.fill();
		hex_ctx.stroke();
		hex_ctx2.stroke();
		hex_ctx3.stroke();

		hex_ctx.closePath();
		hex_ctx2.closePath();
		hex_ctx3.closePath();


		//Hex_ctx.beginPath();

		//hex_ctx.fill();

		//hex_ctx.closePath();




		//ctx.drawImage(hex_canvas, 100,100);

		//ctx.drawImage(test, frame, 100);


		//Loop through to draw tons of hexagons to fill the screen!
		for ( a = -5; a < 3; a++ ) {

			for ( b = -5; b < 3; b++ ) {

				var pos = get_pos( a, b );
				//Draw_hex(pos.x, pos.y);
				ctx.drawImage( hex_canvas, pos.x, pos.y );
				ctx2.drawImage( hex_canvas2, pos.x, pos.y );
				ctx3.drawImage( hex_canvas3, pos.x, pos.y );

			}

		}


		//Start next frame
		requestAnimationFrame( animation_step );

	}; // Animation_step


	// This will call init when object is created.
	init();

} // Js_gif

function update_canvas() {
	var width = window.innerWidth;
	var height = window.innerHeight;

	canvas.width = width;
	canvas.height = height;
}

function get_pos( x, y ) {

	var width = window.innerWidth;
	var height = window.innerHeight;

	var map_x = Math.round( width / 2 +  ( size + spacing ) * 3 / 2 * x );
	var map_y = Math.round( height / 2 + ( size + spacing ) * Math.sqrt( 3 ) * ( y + x / 2 ) );

	return { x:map_x, y: map_y };
}

function draw_hex( x, y ) {

	ctx.save();

	for ( i = 0; i < thinger.angles.length; i++ ) {
		ctx.rotate( i * Math.PI / 180 );

		//Ctx.rotate(i*Math.PI/180);
		ctx.drawImage( thinger.angles[i].canvas, x, y );
	}

	ctx.restore();

}

var angle = function( size, offset ) {

	size = size || 32;
	offset = offset || 0;


	//Var canvas = document.createElement('canvas');
	var canvas = document.createElement( 'canvas' );

	//Set canvas to be just big enough to contain the hex
	canvas.width = canvas.height = size * 2.2;

	var context = canvas.getContext( '2d' );

	context.beginPath();

	//Set up drawing path
	for ( var i = 1 + offset; i < 4 + offset; i++ ) {

		//Var angle = 2 * Math.PI / 6 * (i +.5);
		var angle = 2 * Math.PI / 6 * i;

		//Center + size + cos(angle)
		var line_x = canvas.width / 2 + size * Math.cos( angle );
		var line_y = canvas.width / 2 + size * Math.sin( angle );

		if ( i == offset + 2 ) {
			var mid_x = line_x;
			var mid_y = line_y;
		}

		if ( i == 1 ) {
			context.moveTo( line_x, line_y );
		} else {
			context.lineTo( line_x, line_y );
		}

	}//Path

	context.strokeStyle = color;
	context.fillStyle = '#428';
	context.lineWidth = thickness;
	context.lineCap = 'round';


	//Draw polygon
	//context.fill();
	context.stroke();
	context.closePath();

};


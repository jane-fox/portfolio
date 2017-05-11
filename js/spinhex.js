
var size = 200;
var spacing = 0;
var thickness = 30;
var color = "#5a555f";
//var color = "#e8624c";


document.addEventListener("DOMContentLoaded", function(event) { 

	console.log("Loaded!");
/*
 	canvas = document.getElementById("canvas");
 	ctx = canvas.getContext("2d");

	thinger.angles = [new angle(size, 0), new angle(size, 2), new angle(size, 4)];
	thinger.hex = new hex();
	update_canvas();

	//draw();
	//hex = new angle();

	//Begin drawing animation
	requestAnimationFrame(draw);
*/


	//Make a new gif and set its target
	var new_gif = new js_gif({ target: "hex-canvas"});


});




function js_gif(options) {


	//Set defaults for options
	var options = options || {};
	options.target = options.target || {};


	//Setup variables
	//var encoder = new GIFEncoder();
	var canvas = document.getElementById(options.target);
	var ctx = canvas.getContext("2d");

	var width = window.innerWidth + 400;
	var height = 800;
	//var height = window.innerHeight;

	canvas.width = width;
	canvas.height = height;	


	var bg_color = "#409";

	var hex_canvas = document.createElement("canvas");
	var hex_ctx = hex_canvas.getContext("2d");
		hex_canvas.width = hex_canvas.height = size * 4;

	var angles = [];
	var points = [];
	angles[0] = new angle(size, 0);
	angles[1] = new angle(size, 2);
	angles[2] = new angle(size, 4);

/*
	encoder.setRepeat(0); //auto-loop
	encoder.setDelay(20); //~60FPS
	encoder.setSize(canvas.width, canvas.height);
*/

	frame = 0;
	total_frames = 73;
	compile_gif = false;
	gif_done = false;


	var init = function() {

		//encoder.start();

				//Set up drawing path
		for (var i = 0; i < 6; i++ ) {

			//var angle = 2 * Math.PI / 6 * (i +.5);
			var angle = 2 * Math.PI / 6 * i;

			//center + size + cos(angle)
			var line_x = hex_canvas.width/2 + size * Math.cos(angle);
			var line_y = hex_canvas.width/2 + size * Math.sin(angle);


			points.push({x: line_x, y: line_y});

		}//path

		animation_step();

		//console.log(angles);

	}


	var animation_step = function() {

		frame += .2;
		
		//frame = 0;

		
		ctx.clearRect(0,0,canvas.width, canvas.height);

		hex_ctx.clearRect(0,0,hex_canvas.width, hex_canvas.height);

		//hex_ctx.rect(0,0,hex_canvas.width, hex_canvas.height);

		//hex_ctx.stroke();

		hex_ctx.beginPath();


		// The hexagons are made of 3 parts that connect together
		// Rotating canvas in place is difficult, so just redraw the parts



		///1st seciton
		hex_ctx.moveTo(points[1].x, points[1].y);

		var new_x_1 = points[1].x + size * Math.cos((frame-180)*Math.PI/180);
		var new_y_1 = points[1].y + size * Math.sin((frame-180)*Math.PI/180);

		hex_ctx.moveTo(points[1].x, points[1].y);
		hex_ctx.lineTo(points[1].x + size * Math.cos((frame-60)*Math.PI/180), points[1].y + size * Math.sin((frame-60)*Math.PI/180));

		///2nd seciton
		hex_ctx.moveTo(points[3].x, points[3].y);
		hex_ctx.lineTo(points[3].x + size * Math.cos((frame-60)*Math.PI/180), points[3].y + size * Math.sin((frame-60)*Math.PI/180));

		var new_x_2 = points[1].x + size * Math.cos((frame-180)*Math.PI/180);
		var new_y_2 = points[1].y + size * Math.sin((frame-180)*Math.PI/180);

		hex_ctx.moveTo(points[3].x, points[3].y);
		hex_ctx.lineTo(points[3].x + size * Math.cos((frame+60)*Math.PI/180), points[3].y + size * Math.sin((frame+60)*Math.PI/180));

		///3rd seciton
		hex_ctx.moveTo(points[5].x, points[5].y);
		hex_ctx.lineTo(points[5].x + size * Math.cos((frame+60)*Math.PI/180), points[5].y + size * Math.sin((frame+60)*Math.PI/180));

		hex_ctx.moveTo(points[5].x, points[5].y);
		hex_ctx.lineTo(points[5].x + size * Math.cos((frame-180)*Math.PI/180), points[5].y + size * Math.sin((frame-180)*Math.PI/180));


		//section


		hex_ctx.strokeStyle = color;
		hex_ctx.fillStyle = color;
		hex_ctx.lineWidth = thickness;
		hex_ctx.lineCap = "round";


		//Draw polygon
		//context.fill();
		hex_ctx.stroke();
		hex_ctx.closePath();


		hex_ctx.beginPath();


		hex_ctx.fill();

		hex_ctx.closePath();




		//ctx.drawImage(hex_canvas, 100,100);

		//ctx.drawImage(test, frame, 100);


		//Loop through to draw tons of hexagons to fill the screen!
		for(a=-5; a < 3; a++) {

			for(b=-5; b< 3; b++) {

				var pos = get_pos(a,b);
				//draw_hex(pos.x, pos.y);
				ctx.drawImage(hex_canvas, pos.x, pos.y);

			}

		}


		//Start next frame
		requestAnimationFrame(animation_step);

	}



	init();

}





function update_canvas() {
	var width = window.innerWidth;
	var height = window.innerHeight;

	canvas.width = width;
	canvas.height = height;	
}


function get_pos(x, y) {

	var width = window.innerWidth;
	var height = window.innerHeight;

	var map_x = Math.round(width/2 +  (size + spacing) * 3/2 * x);
	var map_y = Math.round(height/2 + (size + spacing) * Math.sqrt(3) * (y + x/2));

	return {x:map_x, y: map_y};
}


function draw_hex(x, y) {

	ctx.save();

	for (i = 0; i < thinger.angles.length; i++) {
		ctx.rotate(i*Math.PI/180);

		//ctx.rotate(i*Math.PI/180);
		ctx.drawImage(thinger.angles[i].canvas, x, y);
	}

	ctx.restore();

}



var angle = function(size, offset) {

	size = size || 32;
	offset = offset || 0;


	//var canvas = document.createElement('canvas');
	var canvas = document.createElement('canvas');

	//Set canvas to be just big enough to contain the hex
	canvas.width = canvas.height = size * 2.2;

	var context = canvas.getContext('2d');

	context.beginPath();

	//Set up drawing path
	for (var i = 1+offset; i < 4+offset; i++ ) {

		//var angle = 2 * Math.PI / 6 * (i +.5);
		var angle = 2 * Math.PI / 6 * i;

		//center + size + cos(angle)
		var line_x = canvas.width/2 + size * Math.cos(angle);
		var line_y = canvas.width/2 + size * Math.sin(angle);

		if (i == offset+2) {
			var mid_x = line_x;
			var mid_y = line_y;
		}

		if (i == 1) {
			context.moveTo(line_x, line_y);
		} else {
			context.lineTo(line_x, line_y);
		}

	}//path

	context.strokeStyle = color;
	context.fillStyle = "#428";
	context.lineWidth = thickness;
	context.lineCap = "round";


	//Draw polygon
	//context.fill();
	context.stroke();
	context.closePath();

	this.canvas = canvas;
	this.rotate_point = {x: mid_x, y: mid_y};

}


/*

	hex_ctx.save();

	hex_ctx.clearRect(0,0,hex_canvas.width, hex_canvas.height);

	hex_ctx.rotate(frame*Math.PI/180);


	//hex_ctx.drawImage(angle_1, offset, offset);
	//hex_ctx.drawImage(angle_2, hex_canvas.width/4, hex_canvas.width/4);
	//hex_ctx.drawImage(angle_3, hex_canvas.width/4, hex_canvas.width/4);

	hex_ctx.stroke();
	hex_ctx.restore();


	hex_ctx.save();


	hex_ctx.rect(0,0, angles[1].rotate_point.x, angles[1].rotate_point.y );
	hex_ctx.stroke();

	//hex_ctx.translate( offset + angles[1].rotate_point.x,  offset + angles[1].rotate_point.y );
	hex_ctx.translate( angles[1].rotate_point.x,  angles[1].rotate_point.y );
	hex_ctx.rotate( frame *Math.PI/180  );
	hex_ctx.translate( -angles[1].rotate_point.x, -angles[1].rotate_point.y );

	hex_ctx.drawImage( angles[1].canvas, offset, offset );


	hex_ctx.restore();


	hex_ctx.drawImage( angles[2].canvas, offset, offset );
	hex_ctx.drawImage( angles[0].canvas, offset, offset );

*/

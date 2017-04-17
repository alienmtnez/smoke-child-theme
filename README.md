# Smoke Chil Theme for Divi
Smoke is blank Child Theme for Divi with smoke effect

## How to use it?
* Install your Child Theme
* Add the following code to your integrations TAB

```<script>

// Smoke effect setup

// Create the canvas
jQuery(document).ready(function($) {
jQuery ('#smoke-section').append('<canvas id="canvas" width="960" height="960"></canvas>');
});


jQuery(document).ready(function($) { // Get the canvas width and height
	var canvas = document.getElementById('canvas')
	var ctx = canvas.getContext('2d')
	W = document.body.parentNode.clientWidth ;
	H = window.innerHeight;
	canvas.width = W ;
	canvas.height = H;

	var party = smokemachine(ctx, [255.1, 255.1, 255.1]) // Smoke color
	party.start() // start animating

	onmousemove = function (e) { // Make the smoke follow the mouse cursor
		var x = e.clientX
		var y = e.clientY/0.5
		var n = .5
		var t = Math.floor(Math.random() * 200) + 3000
		party.addsmoke(x, y, n, t)
	}

	window.onresize = function() { // Make the canvas responsive
   W = document.body.parentNode.clientWidth;
   H = window.innerHeight;
   canvas.width = W;
   canvas.height = H;
}

	setInterval(function(){
		party.addsmoke(document.body.parentNode.clientWidth/2, innerHeight, 1) // Smoke start position
	}, 100);

});


</script>
```
* Add a background image and the id smoke-section to the section that will have the smoke effect.


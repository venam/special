var ajaxRequest = getAjax();

window.onload = function(){
	window.scrollTo(0, 0);
	main();
};

function main() {
	setup_screen();
	title_animation();
	setup_images();
}

function setup_images() {
	d3.selectAll(".the_images")
		.on("click", function() {
			var elem = d3.select(this)[0][0];
			var name = elem.getAttribute("name");

			d3.select(this)
				.transition()
				.duration(800)
				.style("opacity",0)
				.each("end", function() {
					show_image(name);
				});
		});
}

function draw_path_slowly(path, delay, duration) {
	var totalLength = path.node().getTotalLength();
	path
		.attr("stroke-dasharray", (totalLength) + " " + (totalLength) )
		.attr("stroke-dashoffset", totalLength)
		.transition()
			.delay(delay)
			.duration(duration)
			.ease("linear")
			.attr("stroke-dashoffset", 0);
//			.each("end", function() {
//				draw_path_slowly(d3.select(this), delay, duration);
//			});
}


function show_image(name) {
	ajaxRequest.open("POST", "images.php", true);
	ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajaxRequest.send(
		'category='+name
	);
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			var r = ajaxRequest.responseText;
			if (r != -1) {
				d3.select("#"+name+"_image")
					.attr("src","data:image/jpg;base64,"+r)
					.transition()
					.duration(800)
					.style("opacity",1);

			}
			else {
				alert("Loading the image faile, please reload the page");
			}
		}
	}.bind(this)
}

function setup_screen() {
	d3.select("#top_text").style("opacity", 0);

	var w = window.innerWidth;
	var sub_section_big = 25;
	var sub_section_small = 19;
	if (w > 330) {
	d3.selectAll(".deco")
		.attr("width", "300px")
		.attr("height", "27px")
		.style("display", "none");
	}
	else {
		d3.selectAll(".deco")
			.attr("width", "295px")
			.attr("height", "27px")
			.style("display", "none");
		d3.selectAll(".sub_section_deco")
			.attr("width", "70px")
			.attr("height", "20px");
		var sub_section_small = 15;
		var sub_section_big = 19;
	}


	d3.selectAll(".section_content")
		.style("display", "none");

	d3.selectAll(".sub_section_title")
		.on("click", function() {
			var elem = d3.select(this)[0][0];
			var name = elem.getAttribute("name");
			var content = d3.select("#"+name+"_content");
			var shown = content[0][0].getAttribute("shown");
			if (shown == "0") {
				content
					.attr("shown", 1)
					.transition()
					.delay(600)
					.style("display","block");
				d3.select(this)
					.transition()
					.style('font-size', sub_section_big+'px');
				d3.select("#"+name+"_title_deco_left")
					.style("display","inline");
				draw_path_slowly(d3.select("#"+name+"_path_left"), 100, 500);
				d3.select("#"+name+"_title_deco_right")
					.style("display","inline");
				draw_path_slowly(d3.select("#"+name+"_path_right"), 100, 500);
				show_image(name);
			}
			else {
				content
					.attr("shown", 0)
					.style("display", "none");
				d3.select(this)
					.transition()
					.style('font-size', sub_section_small+'px');
				d3.select("#"+name+"_title_deco_left")
					.style("display","none");
				d3.select("#"+name+"_title_deco_right")
					.style("display","none");
			}
		});


	d3.selectAll(".title_in")
		.on('click', function() {
			var elem = d3.select(this)[0][0];
			var name = elem.getAttribute("name");
			d3.select(this)
				.transition()
				.style('font-size', '35px');
			var content = d3.select("#"+name+"_content");
			var shown = content[0][0].getAttribute("shown");
			if (shown == "0") {
				d3.select("#"+name+"_deco")
					.style("display", "inline");
				draw_path_slowly(d3.select("#"+name+"_path"), 100, 500);
				content
					.attr('shown', 1)
					.style('opacity', 0)
					.transition()
					.delay(500)
					.duration(500)
					.style('display', 'block')
					.style('opacity', 1);
			}
			else {
				d3.select("#"+name+"_deco")
					.style("display", "none");

			d3.select(this)
				.transition()
				.style('font-size', '30px');

				content
					.attr('shown', 0)
					.style('opacity', 1)
					.transition()
					.duration(500)
					.style('opacity', 0)
					.transition()
					.delay(500)
					.style('display', 'none');
			}
		})
		.on('mouseover', function() {
			d3.select(this)
				.transition()
				.style('font-size', '35px');
		})
		.on('mouseout', function() {
			d3.select(this)
				.transition()
				.style('font-size', '30px');
		});
}

function title_animation() {

	var w = window.innerWidth;
	var title_min_size = 90;
	var title_max_size = 170;
	if (w < 500) {
		title_min_size = 65;
		title_max_size = 100;
	}

	var tot = w/2.1;
	var b = d3.select("#top_title")
		.append("svg")
		.style("text-align", "left")
		.attr("width", tot)
		.attr("height", 50);

	var c_d = 0;

	b.append("rect")
		.attr("x", 0)
		.attr("y", 10)
		.attr("height", 1)
		.attr("width", 0)
		.transition()
		.delay(200)
		.duration(300)
		.attr("width", tot/5);

	c_d += 500;

	var g = b.append("g")
		.attr("transform", "translate(" +(tot/5+1) + ",10)");

	g.append("rect")
		.attr("x", 0)
		.attr("y", 0)
		.attr('transform', 'rotate(126)')
		.attr("height", 1)
		.attr("width", 0)
		.transition()
		.delay(c_d)
		.duration(80)
		.attr("width", 27);
	c_d += 80;

	b.append("rect")
		.attr("y", 30)
		.attr("x", tot/5 - 15)
		.attr("height", 1)
		.attr("width", 0)
		.transition()
		.delay(c_d)
		.duration(400)
		.attr("width", tot/1.2);
	c_d += 400;

	var b2 = d3.select("#bottom_title")
		.append("svg")
		.style("text-align", "right")
		.attr("width", tot)
		.attr("height", 50);

	b2.append("rect")
		.attr("y", 30)
		.attr("x", 0)
		.attr("height", 1)
		.attr("width", 0)
		.transition()
		.delay(c_d)
		.duration(400)
		.attr("width", tot/1.25);
	c_d += 400;

	var g = b2.append("g")
		.attr("transform", "translate(" +(tot/1.25+1) + ",30)");

	g.append("rect")
		.attr("x", 0)
		.attr("y", 0)
		.attr('transform', 'rotate(-120)')
		.attr("height", 1)
		.attr("width", 0)
		.transition()
		.delay(c_d)
		.duration(80)
		.attr("width", 23);
	c_d += 80;


	b2.append("rect")
		.attr("y", 10)
		.attr("x", tot-tot/5-10)
		.attr("height", 1)
		.attr("width", 0)
		.transition()
		.delay(c_d)
		.duration(300)
		.attr("width", tot/5+12);

	d3.select("#top_text")
		.style("font-size", title_min_size+"px")
		.style("opacity", 0)
		.transition()
		.delay(c_d-300)
		.duration(400)
		.style("opacity", 1);

	d3.select("#full_content")
		.style("opacity", 0)
		.transition()
		.delay(c_d+700)
		.duration(400)
		.style("opacity", 1);

	d3.select("#special")
		.transition()
		.delay(c_d+200)
		.duration(200)
		.style("font-size", title_max_size+"px");
}


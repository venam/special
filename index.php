<!doctype html>
<html>
	<head>
		<title>Special</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport"
			content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=no">
		<script src="xhr.js"></script>
		<script src="d3.min.js" charset="utf-8"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet" type="text/css">
		<style>
/*
╻  ┏━┓┏━┓╻┏    ╻ ╻┏━╸┏━┓┏━╸
┃  ┃ ┃┃ ┃┣┻┓   ┣━┫┣╸ ┣┳┛┣╸ 
┗━╸┗━┛┗━┛╹ ╹   ╹ ╹┗━╸╹┗╸┗━╸
----------------------------
 */
@font-face {
	font-family: 'open your eyes';
	src: url('sometimes2.ttf');
}
.description {
	font-size: 16px;
	padding-bottom: 5px;
	text-align: left;
	font-family: 'open your eyes', 'monospace';
}
.look_here_to_find_me {
	text-align: center;
}
body {
	background: transparent url("mark_.png") no-repeat fixed 760px 420px;
	margin: 0px auto;
	color: #212121;
	fill: #212121;
	stroke: #212121;
	margin: 0px;
	line-height: 0.5;
	padding: 0px;
	word-wrap: break-word;
	font-weight: 100;
	font-family: "DejaVu Sans", 'sans-serif';
	font-size: 14px;
}
/*
----------------------------
 */

@font-face {
    font-family: 'dragon_is_comingregular';
    src: url('dragon_is_coming-webfont.eot');
    src: url('dragon_is_coming-webfont.eot?#iefix') format('embedded-opentype'),
         url('dragon_is_coming-webfont.woff2') format('woff2'),
         url('dragon_is_coming-webfont.woff') format('woff'),
         url('dragon_is_coming-webfont.ttf') format('truetype'),
         url('dragon_is_coming-webfont.svg#dragon_is_comingregular') format('svg');
    font-weight: normal;
    font-style: normal;
}
.tap_another {
	font-size: 1.3ex;
}


#all_the_sections_container {
	text-align: center;
	margin-bottom: 2ex;
}

.sub_section_deco {
}

.sub_section {
	margin-bottom: 1ex;
}

.image_view {
	text-align: center;
}
.the_images {
	cursor: pointer;
	max-width: 315px;
	min-height: 100px;
	max-height: 320px;
}

.container {
}
.footer {
	height: 2em;
}
.content {
	text-align: center;
	margin: 0px auto;
	width: 60%;
}

.main_title {
	font-family: 'dragon_is_comingregular';
	font-size: 40px;
	text-align:center;
	margin-bottom: 50px;
}
#top_title, #bottom_title {
	width: 100%;
}
#bottom_title {
	text-align: right;
}
#top_title {
	text-align: left;
}
.section {
	line-height: 1.4;
	text-align: left;
	font-size: 19px;
}
.description {
	font-size: 19px;
}
.title {
	text-align:center;
	font-family: "Raleway", "DejaVu Sans", 'sans-serif';
}
.title_in {
	font-size: 30px;
	cursor: pointer;
}
.sub_section_title {
	cursor: pointer;
}
.concept {
}
.wake {
	font-family: monospace;
	font-weight: bold;
}
#full_content {
}

.deco_container {
	text-align: center;
	position: relative;
	top: -1ex;
	left: 0.5ex;
}

@media (max-width: 900px) {
	.content{
		width: 83%;
	}
}
@media (max-width: 900px) {
	.content{
		width: 83%;
	}
}
@media (max-width: 580px) {
	body {
		background: transparent url("mark_.png") no-repeat fixed 260px 420px;
	}

	.content{
		width: 99%;
	}
	.section {
		font-size: 16px;
	}
	.title {
		font-size: 30px;
	}
	.deco_container {
		left: 0.0ex;
	}
	.description {
		font-size: 15px;
	}
}

	</style>
	</head>

	<body>
		<div class="container">
			<?php include "templates/main_title.php" ?>
		<div class="content">
			<div id="full_content" style="opacity:0">
				<?php include "templates/main_content.php" ?>
			</div>
		</div>
		</div>
		<div class="footer"></div>
		<script src="special.js"></script>
	</body>
</html>

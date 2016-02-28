<?php
$all_sections = array(
	'concept' => 'Concept',
	'disclaimer' => 'Disclaimer',
	'sections' => 'Sections',
	'conclusion' => 'Conclusion',
	'disqus' => 'Discuss'
);

foreach ($all_sections as $section => $title) {
	print '  <div class="section concept">';
	print '  <div id="'.$section.'_title" class="title">';
	print '  <span class="title_in" name="'.$section.'">'.$title.'</span>';
	print '  </div>';
	print '  <div class="deco_container">';
	print '  <svg id="'.$section.'_deco" class="deco"';
	print '  style="display:none;"';
	print '  viewBox="15 0 355 50">';
	print '  <g transform="translate(0,-1002.3621)">';
	print '  <path';
	print '  id="'.$section.'_path" ';
	print '  style="fill:none;fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"';
	print '  d="m -0.71428506,1039.505 72.85714506,0 -29.285714,-29.2857 280.714284,0 -29.64285,29.6429 62.5,0" />';
	print '  </g>';
	print '  </svg>';
	print '  </div>';
	print '  <div id="'.$section.'_content"  style="display:none;" shown="0"  class="section_content">';
	include "templates/".$section.".php";
	print '</div>';
	print '</div>';
}
?>

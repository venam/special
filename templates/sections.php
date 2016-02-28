<?php

$sub_sections = array(
	"test" => "test",
);
print '<div id="all_the_sections_container">';
?>
<div class="section_intro">
</div>

<div class="tap_another">tap to open a section</div>
<?php
foreach ($sub_sections as $sec => $title) {
	print '<div id="'.$sec.'" class="sub_section">';
	print '
		<svg
			width="90"
			height="12"
			viewBox="0 0 160 12"
			style="display:none;"
			id="'.$sec.'_title_deco_left" class="sub_section_deco">
		<g
			transform="translate(0,-1040.3622)">
			<path
			id="'.$sec.'_path_left"
			style="fill:none;stroke:#000000;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
			d="m -1.0714287,1042.7192 89.9999937,-1.4285 -21.42856,10 92.857135,0"/>
		</g>
		</svg>';
	print '<span class="sub_section_title"  name="'.$sec.'" id="'.$sec.'_title">'.$title.'</span>';
	print '
		<svg
			width="90"
			height="12"
			viewBox="0 0 160 12"
			style="display:none;"
			id="'.$sec.'_title_deco_right" class="sub_section_deco">
		<g
			transform="translate(0,-1040.3622)">
			<path
			id="'.$sec.'_path_right"
			style="fill:none;stroke:#000000;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
			d="m -1.0714287,1042.7192 89.9999937,-1.4285 -21.42856,10 92.857135,0"/>
		</g>
		</svg>';
	print '
		<div
			shown="0"
			style="display:none;"
			id="'.$sec.'_content">';


	print '<div class="description">';
	include "templates/".$sec.".php";
	print '</div>';
	print '<span class="tap_another">tap for another</span>';
	print '<div class="image_view" id="'.$sec.'_image_view">';
	print '<img class="the_images" name="'.$sec.'" id="'.$sec.'_image" src="data:image/jpg;base64," />';
	print '</div>';

	print '</div>';
	print '</div>';
}
print '</div>';
?>

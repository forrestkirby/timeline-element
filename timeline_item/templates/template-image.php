<?php

// Image
if ($props['image']) {

	$image = $this->el('image', [

		'class' => [
			'el-image',
			'uk-border-{image_border}' => !$element['panel_style'] || ($element['panel_style'] && (!$element['image_card'] || $element['image_align'] == 'between')),
			'uk-box-shadow-{image_box_shadow} {@!panel_style}',
			'uk-box-shadow-hover-{image_hover_box_shadow} {@!panel_style} {@link_style: panel}' => $props['link'],
			'uk-text-{image_svg_color} {@image_svg_inline}' => $this->isImage($props['image']) == 'svg',
			'uk-margin[-{image_margin}]-top {@!image_margin: remove} {@!image_box_decoration}' => $element['image_align'] == 'between' || ($element['image_align'] == 'bottom' && !$element['image_card']),
		],

		'src' => $props['image'],
		'alt' => $props['image_alt'],
		'width' => $element['image_width'],
		'height' => $element['image_height'],
		'uk-svg' => $element['image_svg_inline'],
		'uk-cover' => $element['panel_style'] && $element['image_card'] && in_array($element['image_align'], ['left', 'right']),
		'thumbnail' => true,
	]);

	echo $image($element, []);

	// Placeholder image if card and layout left or right
	if ($image->attrs['uk-cover']) {
		echo $image($element, [
			'class' => ['uk-invisible'],
			'uk-cover' => false,
		]);
	}

// Icon
} elseif ($props['icon']) {

	$icon = $this->el('span', [

		'class' => [
			'el-image',
			'uk-text-{icon_color}',
			'uk-margin[-{image_margin}]-top {@!image_margin: remove} {@image_align: between}',
		],

		'uk-icon' => [
			'icon: {0};' => $props['icon'],
			'ratio: {icon_ratio};',
		],

	]);

	echo $icon($element, '');
}

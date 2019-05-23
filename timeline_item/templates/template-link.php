<?php

$link = $props['link'] ? $this->el('a', [
	'href' => $props['link'],
]) : null;

if ($link) {

	$link->attr([
		'target' => ['_blank {@link_target}'],
		'uk-scroll' => strpos($props['link'], '#') === 0,
	]);

}

if ($link && $element['link_type'] == 'element') {

	$el->attr($link->attrs + [

		'class' => [
			'uk-display-block uk-link-toggle',
		],

	]);

	$props['title'] = $this->striptags($props['title']);
	$props['meta'] = $this->striptags($props['meta']);
	$props['content'] = $this->striptags($props['content']);

	if ($props['title'] && $element['title_hover_style'] != 'reset') {
		$props['title'] = $this->el('span', [
			'class' => [
				'uk-link-{title_hover_style: heading}',
				'uk-link {!title_hover_style}',
			],
		], $props['title'])->render($element);
	}

} elseif ($link && $element['link_type'] == 'content') {

	if ($props['image']) {
		$props['image'] = $link($element, ['class' => [

			'uk-position-cover' => $element['panel_style'] && $element['has_panel_card_image'] && in_array($element['image_align'], ['left', 'right']) && !$element['image_vertical_align'],

		]], $props['image']);
	}

	if ($props['title']) {
		$props['title'] = $link($element, [
			'class' => [
				'uk-link-{title_hover_style}',
			],
		], $this->striptags($props['title']));
	}

} elseif ($link) {

	$link->attr([

		'class' => [
			'el-link',
			'uk-{link_style: link-(muted|text)}',
			'uk-button uk-button-{!link_style: |link-muted|link-text} [uk-button-{link_size}]',
		],

	]);

}

return $link;

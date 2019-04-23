<?php

if (!$props['link']) {
	return;
}

$link = $this->el('a', [

	'class' => [
		'el-link',
		'uk-position-cover uk-position-z-index uk-margin-remove-adjacent {@link_style: panel} {@panel_style}',
		'uk-{link_style: link-(muted|text)}',
		'uk-button uk-button-{!link_style: |panel|link-muted|link-text} [uk-button-{link_size}]',
	],

	'href' => $props['link'],
]);


$link->attr([
	'target' => ['_blank {@link_target}'],
	'uk-scroll' => strpos($props['link'], '#') === 0,
]);

$node->link = $link;

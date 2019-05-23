<?php

// Icon
if ($props['icon']) {

	$icon = $this->el('span', [

		'class' => [
			'el-icon',
			'uk-text-{icon_color}',
		],

		'uk-icon' => [
			'icon: {0};' => $props['icon'],
			'ratio: {icon_ratio};',
		],

		'style' => [
			'background-color: {icon_background};',
			'border-color: {icon_border};',
		],

	]);

	echo $icon($element, '');

} else {

	$icon = $this->el('span', [

		'class' => [
			'el-icon',
			'uk-text-{icon_color}',
			'timeline-icon-default',
		],

		'style' => [
			'background-color: {icon_background};',
			'border-color: {icon_border};',
		],

	]);

	echo $icon($element, '');

}

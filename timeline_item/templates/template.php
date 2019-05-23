<?php

// Display
foreach (['title', 'meta', 'content', 'link'] as $key) {
	if (!$element["show_{$key}"]) { $props[$key] = ''; }
}

if (!$element['show_image']) { $props['image'] = $props['icon'] = ''; }

// Resets
if ($props['icon'] && !$props['image']) { $element['panel_card_image'] = ''; }
if ($element['panel_style'] || !$element['show_image']) { $element['image_box_shadow_bottom'] = ''; }

// New logic shortcuts
$element['has_panel_card_image'] = $props['image'] && $element['panel_card_image'] && $element['image_align'] != 'between';
$element['has_content_padding'] = $props['image'] && $element['panel_content_padding'] && $element['image_align'] != 'between';

// Image
$props['image'] = $this->render("{$__dir}/template-image", compact('props'));

if ($element['image_transition']) {

	$transition_toggle = $this->el('div', [
		'class' => [
			'uk-inline-clip [uk-transition-toggle {@link_type: content}]',
			'uk-border-{image_border}' => !$element['panel_style'] || ($element['panel_style'] && (!$element['panel_card_image'] || $element['image_align'] == 'between')),
			'uk-box-shadow-{image_box_shadow} {@!panel_style}',
			'uk-box-shadow-hover-{image_hover_box_shadow} {@!panel_style} {@link_type}' => $props['link'],
			'uk-margin[-{image_margin}]-top {@!image_margin: remove} {@!image_box_decoration}' => $element['image_align'] == 'between' || ($element['image_align'] == 'bottom' && !($element['panel_style'] && $element['panel_card_image'])),
		],
	]);
	$props['image'] = $transition_toggle($element, $props['image']);

}

if ($element['image_box_decoration']) {

	$decoration = $this->el('div', [

		'class' => [
			'uk-box-shadow-bottom {@image_box_decoration: shadow}',
			'tm-mask-default {@image_box_decoration: mask}',
			'tm-box-decoration-{image_box_decoration: default|primary|secondary}',
			'tm-box-decoration-inverse {@image_box_decoration_inverse} {@image_box_decoration: default|primary|secondary}',
			'uk-inline {@!image_box_decoration: |shadow}',
			'uk-margin[-{image_margin}]-top {@!image_margin: remove}' => $element['image_align'] == 'between' || ($element['image_align'] == 'bottom' && !($element['panel_style'] && $element['panel_card_image'])),
		],

	]);

	$props['image'] = $decoration($element, $props['image']);
}

// Icon
$props['icon'] = $this->render("{$__dir}/template-icon", compact('props'));

// Panel/Card
$el = $this->el($props['link'] && $element['link_type'] == 'element' ? 'a' : 'div', [

	'class' => [
		'el-item',
		'uk-margin[-{item_margin}]-top',
		'uk-margin-auto uk-width-{item_maxwidth}',
		'uk-panel {@!panel_style}',
		'uk-card uk-{panel_style} [uk-card-{panel_size}]',
		'uk-card-hover {@!panel_style: |card-hover} {@link_type: element}' => $props['link'],
		'uk-card-body {@panel_style} {@!has_panel_card_image}',
		'uk-margin-remove-first-child' => (!$element['panel_style'] && !$element['has_content_padding']) || ($element['panel_style'] && !$element['has_panel_card_image']),
		'uk-transition-toggle {@image_transition} {@link_type: element}' => $props['image'],
	],

]);

// Image align
$grid = $this->el('div', [

	'class' => [
		'uk-child-width-expand',
		$element['panel_style'] && $element['has_panel_card_image'] ? 'uk-grid-collapse uk-grid-match' : 'uk-grid-{image_gutter}',
		'uk-flex-middle {@image_vertical_align}',
	],

	'uk-grid' => true,
]);

$cell_image = $this->el('div', [

	'class' => [
		'uk-width-{image_grid_width}[@{image_breakpoint}]',
		'uk-flex-last[@{image_breakpoint}] {@image_align: right}',
	],

]);

// Content
$content = $this->el('div', [

	'class' => [
		'uk-card-body uk-margin-remove-first-child {@panel_style} {@has_panel_card_image}',
		'uk-padding[-{!panel_content_padding: |default}] uk-margin-remove-first-child {@!panel_style} {@has_content_padding}',
	],

]);

$cell_content = $this->el('div', [

	'class' => [
		'uk-margin-remove-first-child' => (!$element['panel_style'] && !$element['has_content_padding']) || ($element['panel_style'] && !$element['has_panel_card_image']),

	],

]);

// Link
$link = include "{$__dir}/template-link.php";

// Card media
if ($element['panel_style'] && $element['has_panel_card_image']) {
	$props['image'] = $this->el('div', ['class' => [
		'uk-card-media-{image_align}',
		'uk-cover-container{@image_align: left|right}',
	]], $props['image'])->render($element);
}

?>

<?= $props['icon'] ?>

<div class="timeline-item-container">

<?= $el($element, $attrs); ?>

	<?php if ($props['image'] && in_array($element['image_align'], ['left', 'right'])) : ?>

		<?= $grid($element) ?>
			<?= $cell_image($element, $props['image']); ?>
			<?= $cell_content($element) ?>

				<?php if ($this->expr($content->attrs['class'], $element)) : ?>
					<?= $content($element, $this->render("{$__dir}/template-content", compact('props', 'link'))); ?>
				<?php else : ?>
					<?= $this->render("{$__dir}/template-content", compact('props', 'link')) ?>
				<?php endif ?>

			<?= $cell_content->end() ?>
		</div>

	<?php else : ?>

		<?php if ($element['image_align'] == 'top') : ?>
		<?= $props['image'] ?>
		<?php endif ?>

		<?php if ($this->expr($content->attrs['class'], $element)) : ?>
			<?= $content($element, $this->render("{$__dir}/template-content", compact('props', 'link'))); ?>
		<?php else : ?>
			<?= $this->render("{$__dir}/template-content", compact('props', 'link')) ?>
		<?php endif ?>

		<?php if ($element['image_align'] == 'bottom') : ?>
		<?= $props['image'] ?>
		<?php endif ?>

	<?php endif ?>

<?= $el->end() ?>

</div>
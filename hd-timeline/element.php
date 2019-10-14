<?php

use YOOtheme\Util\Arr;

return [

	'transforms' => [

		'render' => function ($node, array $params) use ($file) {

			/**
			 * @var $app
			 * @var $theme
			 * @var $builder
			 */
			extract($params);

			$app['styles']->add('builder-hd-timeline', "{$file['dirname']}/css/timeline.css", [], ['defer' => true]);

		},

	],

	'updates' => [

		'1.22.0-beta.0.1' => function ($node, array $params) {

			if (isset($node->props['image_gutter'])) {
				$node->props['image_grid_column_gap'] = $node->props['image_gutter'];
				$node->props['image_grid_row_gap'] = $node->props['image_gutter'];
				unset($node->props['image_gutter']);
			}

			if (isset($node->props['image_breakpoint'])) {
				$node->props['image_grid_breakpoint'] = $node->props['image_breakpoint'];
				unset($node->props['image_breakpoint']);
			}

		},

	],

];

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

			$app['styles']->add('builder-timeline', "{$file['dirname']}/css/timeline.css", [], ['defer' => true]);

		},

	],

	'updates' => [

		//

	],

];

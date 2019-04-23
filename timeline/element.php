<?php

use YOOtheme\Util\Arr;

return [

	'transforms' => [

		'render' => function ($node, array $params) use ($config) {

			/**
			 * @var $app
			 * @var $theme
			 * @var $builder
			 */
			extract($params);

			$app['styles']->add('builder-timeline', $config->get('url:./css/timeline.css'), [], ['defer' => true]);

		},

	],

	'updates' => [

		//

	],

];

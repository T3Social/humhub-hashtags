<?php

use sturtznetwork\humhub\modules\hashtags\Events;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\widgets\TopMenu;

return [
	'id' => 'hashtags',
	'class' => 'sturtznetwork\humhub\modules\hashtags\Module',
	'namespace' => 'sturtznetwork\humhub\modules\hashtags',
	'events' => [
		[
			'class' => TopMenu::class,
			'event' => TopMenu::EVENT_INIT,
			'callback' => [Events::class, 'onTopMenuInit'],
		],
		[
			'class' => AdminMenu::class,
			'event' => AdminMenu::EVENT_INIT,
			'callback' => [Events::class, 'onAdminMenuInit']
		],
	],
];

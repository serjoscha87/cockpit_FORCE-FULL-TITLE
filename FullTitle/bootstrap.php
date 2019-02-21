<?php
if (COCKPIT_ADMIN && !COCKPIT_API_REQUEST) {
	//register asset(s)
    $app['app.assets.base'] = array_merge($app['app.assets.base'], [
        '/addons/FullTitle/assets/css/full_title.css'
    ]);

    $app('admin')->init();
}
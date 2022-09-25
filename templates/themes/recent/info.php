<?php
	$theme = [];
	
	// Theme name
	$theme['name'] = \RecentPosts::class;
	// Description (you can use Tinyboard markup here)
	$theme['description'] = 'Show recent posts and images, like 4chan.';
	$theme['version'] = 'v1.0';
	
	// Theme configuration	
	$theme['config'] = [];
	
	$theme['config'][] = ['title' => 'Title', 'name' => 'title', 'type' => 'text', 'default' => 'Recent Posts'];
	
	$theme['config'][] = ['title' => 'Excluded boards', 'name' => 'exclude', 'type' => 'text', 'comment' => '(space seperated)'];
	
	$theme['config'][] = ['title' => '# of recent images', 'name' => 'limit_images', 'type' => 'text', 'default' => '3', 'comment' => '(maximum images to display)'];
	
	$theme['config'][] = ['title' => '# of recent posts', 'name' => 'limit_posts', 'type' => 'text', 'default' => '30', 'comment' => '(maximum posts to display)'];
	
	$theme['config'][] = ['title' => 'HTML file', 'name' => 'html', 'type' => 'text', 'default' => 'recent.html', 'comment' => '(eg. "recent.html")'];
	
	$theme['config'][] = ['title' => 'CSS file', 'name' => 'css', 'type' => 'text', 'default' => 'recent.css', 'comment' => '(eg. "recent.css")'];

	$theme['config'][] = ['title' => 'CSS stylesheet name', 'name' => 'basecss', 'type' => 'text', 'default' => 'recent.css', 'comment' => '(eg. "recent.css" - see templates/themes/recent for details)'];
	
	$theme['config'][] = ['title' => '# of recent news', 'name' => 'limit_news', 'type' => 'text', 'default' => '1', 'comment' => '(maximum news to display)'];
	// Unique function name for building everything
	$theme['build_function'] = 'recentposts_build';
	$theme['install_callback'] = 'recentposts_install';

	if (!function_exists('recentposts_install')) {
		function recentposts_install($settings) {
			if (!is_numeric($settings['limit_news']) || $settings['limit_news'] < 0)
				return [false, '<strong>' . utf8tohtml($settings['limit_news']) . '</strong> is not a non-negative integer.'];
			if (!is_numeric($settings['limit_images']) || $settings['limit_images'] < 0)
				return [false, '<strong>' . utf8tohtml($settings['limit_images']) . '</strong> is not a non-negative integer.'];
			if (!is_numeric($settings['limit_posts']) || $settings['limit_posts'] < 0)
				return [false, '<strong>' . utf8tohtml($settings['limit_posts']) . '</strong> is not a non-negative integer.'];
		}
	}
	

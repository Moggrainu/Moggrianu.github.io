<?php
$theme = ['name'        => 'IRC', 'description' => 'Display a link to the lainchan irc', 'version'     => 'v1', 'config' => [['title'   => 'Page title', 'name'    => 'title', 'type'    => 'text'], ['title'   => 'Slogan', 'name'    => 'subtitle', 'type'    => 'text', 'comment' => '(optional)'], ['title'   => 'File', 'name'    => 'file', 'type'    => 'text', 'default' => 'irc.html'], ['title'   => 'Channel', 'name'    => 'channel', 'type'    => 'text', 'default' => 'general'], ['title'   => 'Server', 'name'    => 'server', 'type'    => 'text', 'default' => 'irc.lainchan.org'], ['title'   => 'Port', 'name'    => 'port', 'type'    => 'text', 'default' => '6697']], 'build_function'   => 'irc_build'];
?>

<?php defined('SYSPATH') or die('No direct script access.');

// Update language files on the end of application execution
if (Kohana::$config->load('auto-i18n.active') === TRUE)
{
	register_shutdown_function('I18n::write');
}

?>

# Auto i18n #
Auto i18n is a module for Kohana 3, that will automatically collect internationalization strings and save them to _/application/i18n/{I18n::$lang}.php_ file whenever it can't find one.

Whenever you'll call __ function, i18n will "get" a translated value from language file. If it can't find a requested value, such value is cached and a default one is returned (like original i18n).

When script processing is complete, _I18n::write(_) method writes all missing values into a language files.

# Configuration #
Just clone/copy files to _/modules/auto-i18n_ and enable module by adding:

_'auto-i18n' => MODPATH.'auto-i18n', // Automatic i18n file generation_

to _Kohana::modules_ in your bootstrap. 

Remember to move all i18n calls in your bootstrap **below** module registration.

This module isn't meant to be used in production enviroment. Use it in development stage to prepare all needed translations and then turn it off by commenting it in _Kohana::modules_ or by setting _auto-i18n.active_ to false.

# Credits #

This module is based on code posted by [Mikito Takada](http://blog.mixu.net/2010/06/02/kohana3-automatically-collect-internationalization-strings/#codesyntax_1).

<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package PoweredByContaoLink
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'ContentPoweredByContaoLink' => 'system/modules/PoweredByContaoLink/ContentPoweredByContaoLink.php',
	'ModulePoweredByContaoLink'  => 'system/modules/PoweredByContaoLink/ModulePoweredByContaoLink.php',
	'PoweredByContaoLinkHelper'  => 'system/modules/PoweredByContaoLink/PoweredByContaoLinkHelper.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_poweredbycontaolink'  => 'system/modules/PoweredByContaoLink/templates',
	'mod_poweredbycontaolink' => 'system/modules/PoweredByContaoLink/templates',
));

<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  IMS Internet Marketing Solutions Ltd. 2013
 * @author     Dominik Zogg <dz@erfolgreiche-internetseiten.ch>
 * @package    isotope_newsletter_subscription
 * @license    LGPLv3
 */

$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] = str_replace(
	'{account_legend}',
	'{iso_newsletter_subscription_legend},iso_newsletter_subscription,iso_newsletter_subscription_confirmed,iso_newsletter_subscription_hash;{account_legend}',
	$GLOBALS['TL_DCA']['tl_member']['palettes']['default']
);

$GLOBALS['TL_DCA']['tl_member']['fields']['iso_newsletter_subscription'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['iso_newsletter_subscription'],
	'default'                 => time(),
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'datim', 'doNotCopy'=>true, 'datepicker'=>true, 'tl_class'=>'w50 wizard', 'disabled'=>true)
);

$GLOBALS['TL_DCA']['tl_member']['fields']['iso_newsletter_subscription_confirmed'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['iso_newsletter_subscription_confirmed'],
	'default'                 => time(),
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'datim', 'doNotCopy'=>true, 'datepicker'=>true, 'tl_class'=>'w50 wizard', 'disabled'=>true)
);

$GLOBALS['TL_DCA']['tl_member']['fields']['iso_newsletter_subscription_hash'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['iso_newsletter_subscription_hash'],
	'default'                 => '',
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('doNotCopy'=>true, 'tl_class'=>'w50 wizard', 'disabled'=>true)
);
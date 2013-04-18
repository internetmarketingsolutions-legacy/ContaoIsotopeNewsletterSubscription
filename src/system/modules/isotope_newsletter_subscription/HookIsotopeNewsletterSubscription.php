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

class HookIsotopeNewsletterSubscription extends System
{
	/**
	 * @param IsotopeOrder $objOrder
	 * @param IsotopeCart  $objCart
	 */
	public function addSubscription(IsotopeOrder $objOrder, array $arrItemIds, array $arrData)
	{
		$this->import('FrontendUser', 'Member');
		$objMember = $this->Member;
		/** @var User $objMember */

		if($arrData['form_newsletter'] == 'x' &&
		   $objMember->email &&
		   is_null($objMember->iso_newsletter_subscription))
		{
			$intNow = time();
			$strHash = sha1($objMember->email . $intNow);

			$objMember->iso_newsletter_subscription = $intNow;
			$objMember->iso_newsletter_subscription_hash = $strHash;
			$objMember->save();

			Isotope::getInstance()->sendMail(
				Isotope::getInstance()->Config->iso_mail_newsletter_subscription,
	            $objMember->email,
	            $objOrder->language,
	            array_replace_recursive($arrData, array(
	            	'iso_newsletter_subscription_hash' => $strHash,
	            )),
	            '',
	            $objOrder
	        );
		}
	}
}
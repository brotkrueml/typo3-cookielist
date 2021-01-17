<?php

/*
 * This file is part of the "cookielist" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

defined('TYPO3') || die();

TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    Brotkrueml\Cookielist\Extension::KEY,
    'List',
    'Cookie List'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['cookielist_list'] = 'recursive,pages';

<?php

defined('TYPO3') || die();

TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    Brotkrueml\Cookielist\Extension::KEY,
    'List',
    [
        Brotkrueml\Cookielist\Controller\ListController::class => 'list',
    ]
);

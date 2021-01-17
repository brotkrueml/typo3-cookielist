<?php

defined('TYPO3') || die();

(function () {
    $iconRegistry = TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        TYPO3\CMS\Core\Imaging\IconRegistry::class
    );
    $iconRegistry->registerIcon(
        'ext-cookielist-plugin-list',
        TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:' . Brotkrueml\Cookielist\Extension::KEY . '/Resources/Public/Icons/plugin-list.svg']
    );

    TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '@import "EXT:' . Brotkrueml\Cookielist\Extension::KEY . '/Configuration/TSconfig/Page/NewContentElementWizard.tsconfig"'
    );
})();

<?php

/*
 * This file is part of the "cookielist" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

return [
    'ctrl' => [
        'title' => Brotkrueml\Cookielist\Extension::LANGUAGE_PATH_DATABASE . ':tx_cookielist_domain_model_cookie',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'name',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'name,purpose',
        'iconfile' => 'EXT:' . Brotkrueml\Cookielist\Extension::KEY . '/Resources/Public/Icons/tx_cookielist_domain_model_cookie.svg',
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple',
                    ],
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_cookielist_domain_model_cookie',
                'foreign_table_where' => 'AND tx_cookielist_domain_model_cookie.pid=###CURRENT_PID### AND tx_cookielist_domain_model_cookie.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'default' => 1,
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true,
                    ],
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true,
            ],
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true,
            ],
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038),
                ],
            ],
        ],

        'type' => [
            'exclude' => true,
            'label' => Brotkrueml\Cookielist\Extension::LANGUAGE_PATH_DATABASE . ':tx_cookielist_domain_model_cookie.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', ''],
                ],
                'foreign_table' => 'tx_cookielist_domain_model_type',
                'foreign_table_where' => 'AND tx_cookielist_domain_model_type.sys_language_uid=###REC_FIELD_sys_language_uid### ORDER BY tx_cookielist_domain_model_type.sorting',
                'eval' => 'required',
            ],
            'l10n_mode' => 'exclude',
        ],
        'name' => [
            'exclude' => true,
            'label' => Brotkrueml\Cookielist\Extension::LANGUAGE_PATH_DATABASE . ':tx_cookielist_domain_model_cookie.name',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'eval' => 'trim,required',
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
        ],
        'purpose' => [
            'exclude' => true,
            'label' => Brotkrueml\Cookielist\Extension::LANGUAGE_PATH_DATABASE . ':tx_cookielist_domain_model_cookie.purpose',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 6,
                'eval' => 'trim',
            ],
        ],
        'provider' => [
            'exclude' => true,
            'label' => Brotkrueml\Cookielist\Extension::LANGUAGE_PATH_DATABASE . ':tx_cookielist_domain_model_cookie.provider',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_cookielist_domain_model_provider',
                'foreign_table_where' => 'AND tx_cookielist_domain_model_provider.sys_language_uid=###REC_FIELD_sys_language_uid### ORDER BY tx_cookielist_domain_model_provider.name',
                'default' => 0,
            ],
            'l10n_mode' => 'exclude',
        ],
        'ttl' => [
            'exclude' => true,
            'label' => Brotkrueml\Cookielist\Extension::LANGUAGE_PATH_DATABASE . ':tx_cookielist_domain_model_cookie.ttl',
            'description' => Brotkrueml\Cookielist\Extension::LANGUAGE_PATH_DATABASE . ':tx_cookielist_domain_model_cookie.ttl.description',
            'config' => [
                'type' => 'input',
                'size' => 10,
                'eval' => 'trim,int',
                'default' => 0,
            ],
            'l10n_mode' => 'exclude',
        ],
        'ttl_unit' => [
            'exclude' => true,
            'label' => Brotkrueml\Cookielist\Extension::LANGUAGE_PATH_DATABASE . ':tx_cookielist_domain_model_cookie.ttl_unit',
            'description' => Brotkrueml\Cookielist\Extension::LANGUAGE_PATH_DATABASE . ':tx_cookielist_domain_model_cookie.ttl_unit.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', ''],
                    ['Minutes', 'i'],
                    ['Hours', 'h'],
                    ['Days', 'd'],
                    ['Months', 'm'],
                    ['Years', 'y'],
                ],
                'fieldWizard' => [
                    'selectIcons' => [
                        'disabled' => false,
                    ],
                ],
            ],
            'l10n_mode' => 'exclude',
        ],
    ],
    'types' => [
        '1' => [
            'showitem' => '
                type, name, purpose, provider,
                --palette--;' . Brotkrueml\Cookielist\Extension::LANGUAGE_PATH_DATABASE . ':palette.lifetime;lifetime,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                sys_language_uid, l10n_parent, l10n_diffsource,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            ',
        ],
    ],
    'palettes' => [
        'access' => [
            'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ],
        'lifetime' => [
            'showitem' => '
                ttl, ttl_unit
            ',
        ],
    ],
];

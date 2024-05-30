<?php

defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'LLL:EXT:site_t3demo/Resources/Private/Language/locallang_db.xlf:CType.resetbanner.name',
        'value' => 'resetbanner',
        'icon' => 'content-clock',
        'group' => 'special',
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['resetbanner'] = 'content-clock';

$GLOBALS['TCA']['tt_content']['types']['resetbanner'] = [
    'showitem' => $GLOBALS['TCA']['tt_content']['defaultTypeConfiguration']['begin'] . '
        header,
        bodytext,
        ' . $GLOBALS['TCA']['tt_content']['defaultTypeConfiguration']['end'],
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'rows' => 5,
            ],
        ],
    ],
];

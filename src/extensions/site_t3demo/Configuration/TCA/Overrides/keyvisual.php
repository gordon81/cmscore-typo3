<?php

defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'LLL:EXT:site_t3demo/Resources/Private/Language/locallang_db.xlf:CType.keyvisual.name',
        'value' => 'keyvisual',
        'icon' => 'content-image',
        'group' => 'special',
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['keyvisual'] = 'content-image';

$GLOBALS['TCA']['tt_content']['types']['keyvisual'] = [
    'showitem' => $GLOBALS['TCA']['tt_content']['defaultTypeConfiguration']['begin'] . '
        header,
        bodytext,
        image,
        --palette--;;linklabel,
        ' . $GLOBALS['TCA']['tt_content']['defaultTypeConfiguration']['end'],
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'rows' => 5,
            ],
        ],
        'image' => [
            'config' => [
                'overrideChildTca' => [
                    'columns' => [
                        'crop' => [
                            'config' => [
                                'cropVariants' => [
                                    'default' =>  [
                                        'title' => 'LLL:EXT:site_t3demo/Resources/Private/Language/locallang_db.xlf:CType.keyvisual.crop.default.label',
                                        'allowedAspectRatios' => [
                                            '3:2' => [
                                                'title' => 'LLL:EXT:site_t3demo/Resources/Private/Language/locallang_db.xlf:CType.keyvisual.crop.default.title',
                                                'value' => 1.5,
                                            ],
                                        ],
                                        'selectedRatio' => '3:2',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'types' => $GLOBALS['TCA']['sys_file_reference']['defaultTypeConfiguration']['basicImageoverlay'],
                ],
            ],
        ],
    ],
];

<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:burkaprojects/Resources/Private/Language/locallang_db.xlf:tx_burkaprojects_domain_model_category',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
		'versioningWS' => true,
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
        ],
		'searchFields' => 'title,listpid',
        'iconfile' => 'EXT:burkaprojects/Resources/Public/Icons/tx_burkaprojects_domain_model_category.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'hidden, title, listpid',
    ],
    'types' => [
		'1' => ['showitem' => 'hidden, title, listpid'],
    ],
    'columns' => [
		't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'title' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:burkaprojects/Resources/Private/Language/locallang_db.xlf:tx_burkaprojects_domain_model_category.title',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'listpid' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:burkaprojects/Resources/Private/Language/locallang_db.xlf:tx_burkaprojects_domain_model_category.listpid',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int'
			]
	    ],
    ],
];

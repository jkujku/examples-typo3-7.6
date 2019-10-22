<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:jku_folderselector/Resources/Private/Language/locallang_db.xlf:tx_jkufolderselector_domain_model_mymodel',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
		'enablecolumns' => [
        ],
		'searchFields' => 'title,folder',
        'iconfile' => 'EXT:jku_folderselector/Resources/Public/Icons/tx_jkufolderselector_domain_model_mymodel.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'title, folder',
    ],
    'types' => [
		'1' => ['showitem' => 'title, folder'],
    ],
    'columns' => [
        'title' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:jku_folderselector/Resources/Private/Language/locallang_db.xlf:tx_jkufolderselector_domain_model_mymodel.title',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'folder' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:jku_folderselector/Resources/Private/Language/locallang_db.xlf:tx_jkufolderselector_domain_model_mymodel.folder',
            'config' => [
                'type' => 'group',
                'internal_type' => 'folder',
                'multiple' => false,
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'hideMoveIcons' => true,
            ],
	    ],
    ],
];

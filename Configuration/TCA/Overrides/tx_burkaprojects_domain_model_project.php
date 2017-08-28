<?php

$originalProject = $GLOBALS['TCA']['tx_burkaprojects_domain_model_project'];


$overridesForProject = [
    'columns' => [
        'categories' => [
            'config' => [
                'MM_match_fields' => array(
                    'tablenames' => 'tx_burkaprojects_domain_model_category',
                    //    'fieldname' => 'categories'
                )
            ],
        ],
        // 8.7 prequel
//        'images' => [
//            'config' => [
//                'overrideChildTca' => [
//                    'columns' => [
//                        'crop' => [
//                            'config' => [
//                                'cropVariants' => [
////                                            'CROPVARIANT_TO_DISABLE' => [
////                                                'disabled' => true,
////                                            ],
//                                    'def' => [
//                                        'title' => 'YOUR_NEW_CROPVARIANT',
//                                        'allowedAspectRatios' => [
//                                            '1:1' => [
//                                                'title' => 'Square',
//                                                'value' => 1 / 1
//                                            ],
//                                        ],
//                                        'selectedRatio' => '1:1',
//                                        'cropArea' => [
//                                            'x' => 0.0,
//                                            'y' => 0.0,
//                                            'width' => 1.0,
//                                            'height' => 1.0,
//                                        ],
//                                    ],
//                                ],
//                            ],
//                        ],
//                    ]
//                ],
//            ],
//        ],
    ],
];

$GLOBALS['TCA']['tx_burkaprojects_domain_model_project'] = array_merge_recursive($originalProject,
    $overridesForProject);
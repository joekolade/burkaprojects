<?php

$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config'] = array(
    'type' => 'imageManipulation',
    'allowedExtensions' => 'jpg',
    'ratios' => array(
        '1.7777777777777777' => '16:9',
        '1.3333333333333333' => '4:3',
        '0.71428571428571' => '5:7',
        '1' => '1:1',
        'NaN' => 'Free',
    ),
    'selectedRatio' => '16:9',
);
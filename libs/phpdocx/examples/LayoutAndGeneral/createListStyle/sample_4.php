<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.php';

$docx = new Phpdocx\Create\CreateDocx();

// custom options
$latinListOptions = array();
$latinListOptions[0]['type'] = 'lowerLetter';
$latinListOptions[0]['format'] = '%1.';
$latinListOptions[1]['type'] = 'lowerRoman';
$latinListOptions[1]['format'] = '%1.%2.';

// override
$overrideListStyleOptionsFirst = array();
$overrideListStyleOptionsFirst[0]['type'] = 'upperRoman';
$overrideListStyleOptionsFirst[0]['format'] = '%1.';
$overrideListStyleOptionsFirst[1]['type'] = 'lowerRoman';
$overrideListStyleOptionsFirst[1]['format'] = '%2.';

$overrideListStyleOptionsSecond = array();
$overrideListStyleOptionsSecond[0]['type'] = 'upperLetter';
$overrideListStyleOptionsSecond[0]['format'] = '%1.';

$overrideListStyle = array();
$overrideListStyle[0] = array(
    'listOptions' => $overrideListStyleOptionsFirst,
    'name' => 'latinUR',
);
$overrideListStyle[1] = array(
    'listOptions' => $overrideListStyleOptionsSecond,
    'name' => 'latinUL',
);

// create the list style with name: latin
$docx->createListStyle('latin', $latinListOptions, $overrideListStyle);

// list items
$myList = array(array('data' => 'item 1', 'style' => 'latin'), array('data' => array('subitem 1.1', 'subitem 1.2'), 'style' => 'latinUR'), array('data' => 'item 2', 'style' => 'latin'), array('data' => array('subitem 2.1', 'subitem 2.2'), 'style' => 'latinUL'), array('data' => 'item 3'));

// insert the custom list into the Word document
$docx->addList($myList, 'latin');

$docx->createDocx('example_createListStyle_4');
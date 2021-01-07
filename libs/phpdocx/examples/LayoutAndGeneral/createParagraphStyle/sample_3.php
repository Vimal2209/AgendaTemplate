<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.php';

$docx = new Phpdocx\Create\CreateDocx();

// custom options
$latinListOptions = array();
$latinListOptions[0]['type'] = 'lowerRoman';
$latinListOptions[0]['format'] = '%1.';

// create the list style with name: latin
$docx->createListStyle('myliststyle', $latinListOptions);

// style options
$style = array(
    'color' => '999999',
    'outlineLvl' => 2,
    'numberingStyle' => 'myliststyle',
);
// create custom style
$docx->createParagraphStyle('numberingStyle', $style);

$docx->addText('Section 1', array('pStyle' => 'numberingStyle'));
$docx->addText('Lorem ipsum');

$docx->addText('Section 2', array('pStyle' => 'numberingStyle'));
$docx->addText('Lorem ipsum');

$docx->addText('Section 3', array('pStyle' => 'numberingStyle'));
$docx->addText('Lorem ipsum');

$docx->createDocx('example_createParagraphStyle_3');
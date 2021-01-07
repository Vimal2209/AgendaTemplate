<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.php';

$docx = new Phpdocx\Create\CreateDocxFromTemplate('../../files/TemplateWordFragmentsTarget.docx');

$imageHeader = new Phpdocx\Elements\WordFragment($docx);
$imageHeader->addImage(array('src' => '../../files/image.png', 'scaling' => 20));

$textHeader = new Phpdocx\Elements\WordFragment($docx);
$paragraphOptions = array(
    'bold' => true,
    'font' => 'Arial',
);
$textHeader->addText('Lorem ipsum dolor sit amet', $paragraphOptions);

$textOther = new Phpdocx\Elements\WordFragment($docx);
$textOther->addText('Other text');

$textBody1 = new Phpdocx\Elements\WordFragment($docx);
$textBody1->addText('Body text');

$textBody2 = new Phpdocx\Elements\WordFragment($docx);
$textBody2->addText('Body text 2');

$imageBody = new Phpdocx\Elements\WordFragment($docx);
$imageBody->addImage(array('src' => '../../files/image.png'));

$imageFooter = new Phpdocx\Elements\WordFragment($docx);
$imageFooter->addImage(array('src' => '../../files/image.png', 'scaling' => 50));

$textFooter = new Phpdocx\Elements\WordFragment($docx);
$paragraphOptions = array(
    'bold' => true,
    'font' => 'Arial',
);
$textFooter->addText('Text footer', $paragraphOptions);

$referenceNode = array(
    'target' => 'footer',
    'type' => 'paragraph',
    'occurrence' => 1,
);

$content = new Phpdocx\Elements\WordFragment($docx, 'document');

$data = array(
    'data' => array(
        array(
            'name' => 'data 1',
            'values' => array(10),
        ),
        array(
            'name' => 'data 2',
            'values' => array(20),
        ),
        array(
            'name' => 'data 3',
            'values' => array(50),
        ),
        array(
            'name' => 'data 4',
            'values' => array(25),
        ),
    ),
);

$paramsChart = array(
    'data' => $data,
    'type' => 'pie3DChart',
    'rotX' => 20,
    'rotY' => 20,
    'perspective' => 30,
    'color' => 2,
    'sizeX' => 10,
    'sizeY' => 5,
    'chartAlign' => 'center',
    'showPercent' => 1,
);
$content->addChart($paramsChart);

$docx->insertWordFragment($content, $referenceNode, 'before', false);

$docx->createDocx('example_insertWordFragment_14');
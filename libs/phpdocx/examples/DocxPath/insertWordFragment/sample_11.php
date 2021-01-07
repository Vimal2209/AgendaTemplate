<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.php';

$docx = new Phpdocx\Create\CreateDocx();

$imageOptions = array(
    'src' => '../../img/image.png', 
    'dpi' => 300,  
);

$headerImage = new Phpdocx\Elements\WordFragment($docx, 'defaultHeader');
$headerImage->addImage($imageOptions);

$docx->addHeader(array('default' => $headerImage));

$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, ' .
    'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut ' .
    'enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut' .
    'aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit ' .
    'in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ' .
    'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui ' .
    'officia deserunt mollit anim id est laborum.';

$docx->addText($text);

$content = new Phpdocx\Elements\WordFragment($docx);

$content->addText('New text.', array('fontSize' => 20, 'color' => '#0000ff'));
$content->addImage(array('src' => '../../img/image.png' , 'scaling' => 10));

$referenceNode = array(
    'target' => 'header',
    'type' => 'image',
    'occurrence' => 1,
);

$docx->insertWordFragment($content, $referenceNode, 'inlineAfter', false);

$docx->createDocx('example_insertWordFragment_11');
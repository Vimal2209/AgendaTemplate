<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.php';

$docx = new Phpdocx\Create\CreateDocx();
$docx->importHeadersAndFooters('../../files/TemplateHeaderAndFooter.docx');

$referenceNode = array(
    'target' => 'header',
    'type' => 'table',
);

$contents = $docx->getWordContents($referenceNode);

print_r($contents);
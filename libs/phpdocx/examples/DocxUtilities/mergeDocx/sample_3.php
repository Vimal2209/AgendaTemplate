<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.php';

$referenceNode = array(
    'type' => 'paragraph',
    'occurrence' => 1,
    'contains' => 'Another bookmark',
);

$merge = new Phpdocx\Utilities\MultiMerge();
$merge->mergeDocxAt('../../files/second.docx', array('../../files/Text.docx', '../../files/SimpleExample.docx'), 'example_merge_docx_3.docx', $referenceNode, array());
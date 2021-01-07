<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.php';

$merge = new Phpdocx\Utilities\MultiMerge();
$merge->mergeDocx('../../files/Text.docx', array('../../files/second.docx', '../../files/SimpleExample.docx'), 'output.docx', array());

$docx = new Phpdocx\Utilities\DocxUtilities();
$docx->watermarkDocx('output.docx', 'output_watermark.docx', 'text', array('text' => 'DRAFT', 'section' => 1));
$docx->watermarkDocx('output_watermark.docx', 'output_watermark_2.docx', 'text', array('text' => 'CONFIDENTIAL', 'section' => 2));
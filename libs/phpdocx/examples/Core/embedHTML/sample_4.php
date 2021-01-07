<?php

require_once '../../../Classes/Phpdocx/Create/CreateDocx.php';

$docx = new Phpdocx\Create\CreateDocx();

$style = array(
    'color' => '999999',
    'border' => 'single',
    'borderWidth' => 12,
    'indentLeft' => 920,
);
$docx->createParagraphStyle('myParagraphStyle', $style);

$style = array(
    'bold' => true,
    'color' => 'ff0000',
    'font' => 'Arial',
    'fontSize' => 18,
    'italic' => true,
    'underline' => 'single',
);
$docx->createCharacterStyle('myCharacterStyle1', $style);

$style = array(
    'color' => '0000ff',
    'fontSize' => 21,
    'underline' => 'double',
);
$docx->createCharacterStyle('myCharacterStyle2', $style);

$styleOptions = array(
    'borderColor' => '00FF00',
    'borderTopWidth' => 24,
    'borderBottomWidth' => 24,
    'borderLeftColor' => '0000FF',
    'borderRightColor' => '0000FF',
    'borderInsideH' => 'nil',
    'borderInsideV' => 'dashed',
    'borderInsideHColor' => 'FF0000',
    'borderInsideVColor' => 'FF0000',
    'cellMargin' => array('top' => 400, 'left' => 150),
);
$docx->createTableStyle('myTableStyle', $styleOptions);

$docx->embedHTML('<p class="myParagraphStyle">This <span class="myCharacterStyle1">paragraph</span> uses <span class="myCharacterStyle2">custom </span> styles.</p>', array('wordStyles' => array('.myParagraphStyle' => 'myParagraphStyle', '.myCharacterStyle1' => 'myCharacterStyle1', '.myCharacterStyle2' => 'myCharacterStyle2')));

$html = '<table class="myTableStyle">
            <tbody>
                <tr width="600">
                    <td style="background-color: yellow">1_1</td>
                    <td rowspan="3" colspan="2">1_2</td>
                </tr>
                <tr width="600">
                    <td>Some random text.</td>
                </tr>
                <tr width="600">
                    <td>
                        <ul>
                            <li>One</li>
                            <li>Two <b>and a half</b></li>
                        </ul>
                    </td>
                </tr>
                <tr width="600">
                    <td>3_2</td>
                    <td>3_3</td>
                    <td>3_3</td>
                </tr>
            </tbody>
        </table>';

$docx->embedHTML($html, array('wordStyles' => array('.myTableStyle' => 'myTableStyle')));

$docx->createDocx('example_embedHTML_4');
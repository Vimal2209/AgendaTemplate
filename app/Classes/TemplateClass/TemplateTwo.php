<?php
    namespace App\Classes\TemplateClass;
    use Storage;
    use File;

    class TemplateTwo {
         
        public function getTempTwoData($data) {
            
            //directory name and file name of the generated document
            $fileNameAndDirectory = 'docx\template';
            $tempName = $data[8];
            $tempPath = Storage::disk('templates')->path($tempName.'.docx');
            
            $docx = new \Phpdocx\Create\CreateDocxFromTemplate($tempPath);
            
            //Replace placeholder variable by the data passed as request from front end
            $fdata = array('dt' => $data[0], 't' =>$data[1], 'v'=>$data[2], 'a1'=>$data[4]);
            $docx -> replaceVariableByText($fdata);

            //Replace title header placeholder variable by the passed as request from front end
            $hdata = array(
                'title' => $data[3],
            );
            $options = array('target' => 'header');
            $docx -> replaceVariableByText($hdata, $options);

            //File attachment process
            $wfA = new \Phpdocx\Elements\WordFragment($docx, 'document');
            $attachment = new \Phpdocx\Elements\WordFragment($docx, 'document');
            $attachment -> addLink('file', array('url' => $data[5], 'u'=>'single'));
            $attach = array();
            $attach[] = $attachment;
            $wfA -> addText($attach);
            $docx -> replaceVariableByWordFragment(array('attach' => $wfA), array('type' => 'inline', 'target'=> 'document'));
            
            //URL attachment process
            $wfB = new \Phpdocx\Elements\WordFragment($docx, 'document');
            $imageAttachment = new \Phpdocx\Elements\WordFragment($docx, 'document');
            $imageAttachment -> addLink('url', array('url' => $data[6], 'u'=>'single'));
            $img = array();
            $img[] = $imageAttachment;
            $wfB -> addText($img);
            $docx -> replaceVariableByWordFragment(array('link' => $wfB), array('type' => 'inline', 'target'=> 'document'));
            
            //Image Replacement process
            $imageData = array(
                'height' => 2.16,
                'width' => 4.66,
                'target' => 'header'
            );
            $path = 'temp\\'.$data[7];
            $imagePath = public_path($path);
            $docx->replacePlaceholderImage('image', $imagePath, $imageData);

             //Document Generation from template
            $docx->createDocx(public_path($fileNameAndDirectory));

            
            File::delete($imagePath);

            return "Success";
            
        }
    }
?>
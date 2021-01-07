<?php

    namespace App\Classes;
    
    use App\Classes\TemplateClass\TemplateOne;
    use App\Classes\TemplateClass\TemplateTwo;
    use App\Classes\TemplateClass\TemplateThree;

    class IdentifyTemplateClass {

        private $templateName;

        //Identify template name and call it's appropriate class
        public function identifyTemplate($data){
            $templateName = $data[8];
            switch($templateName) {
                case 'T1': 
                    $tempOne = new TemplateOne();
                    $res = $tempOne -> getTempOneData($data);
                    return $res;
                    break;
                
                case 'T2':
                    $temptwo = new TemplateTwo();
                    $res = $temptwo -> getTempTwoData($data);
                    return $res;
                    break;
                
                case 'T3':
                    $tempThree = new TemplateThree();
                    $res = $tempThree -> getTempThreeData($data);
                    return $res;
                    break;
                    
                default : print_r('Wrong Template');  
            }
           
        }

    }
?>
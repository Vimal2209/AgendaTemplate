<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes\IdentifyTemplateClass;

class TemplateController extends Controller
{
    
        public function selectTemplate(Request $request){
            $data = array();
            
            //Store date, time, venue, title, minutes of the agenda from front end into an array 
            array_push($data,$request->date);
            array_push($data,$request->time); 
            array_push($data,$request->venue);
            array_push($data, $request->title);
            array_push($data,$request->a1);

            //Store and move uploaded file from front end. Store the file name into an array
            $fileName = $request->attach->getClientOriginalName();
            $request->attach->move(public_path('temp'), $fileName);
            array_push($data, $fileName);

            //Store meeting URL from front end into an array
            array_push($data, $request->link);

            //Store and move uploaded image from front end. Store the file name into an array
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('temp'), $imageName);
            array_push($data, $imageName);

            //Store template name from front end into an array
            array_push($data, $request->template);

            //Pass the array into IdentifyTemplateClass
            $obj = new IdentifyTemplateClass();
            $res = $obj->identifyTemplate($data);

            return $res;
        }
        
}

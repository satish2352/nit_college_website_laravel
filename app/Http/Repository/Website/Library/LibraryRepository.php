<?php
namespace App\Http\Repository\Website\HomeSidebar;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
  
    
};

class LibraryRepository  {

    public function getLibraryStaff(){
        try {

            $data_output = MandatoryDisclosure::where('syllabus_delete', '0')
            ->where('is_active', '1')
            ->orderBy('mandatory_id', 'desc')
            ->get();

                   
           return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }
   
    
    
    
    
}    
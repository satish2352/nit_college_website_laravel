<?php
namespace App\Http\Repository\Website\Library;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    LibraryStaff,
    RulesRegulations,
    
};

class LibraryRepository  {

    public function getLibraryStaff(){
        try {

            $data_output = LibraryStaff::where('staff_delete', '0')
            ->where('is_active', '1')
            ->orderBy('library_staff_id', 'desc')
            ->get();

                   
           return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }
   
    
    
    
    
}    
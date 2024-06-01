<?php
namespace App\Http\Repository\Website\Academics;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
    TblAcademicsDetails,
    Academics
    
};

class AcademicsRepository  {

    public function getPolytechnicRules(){
        try {

            $data_output = Academics::leftJoin('tbl_academics', 'academics.academics_id', '=', 'tbl_academics.academics_id')
		->where('tbl_academics.fld_delete', '0')
          ->select(
			'tbl_academics.*',
			'academics.*','academics.academics as academics_name'
          )
		->orderBy('tbl_academics.fld_academics_id', 'desc')
        ->get()
        ->toArray();

                      return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }

}    
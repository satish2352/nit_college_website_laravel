<?php
namespace App\Http\Repository\Website\AboutUs;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    Designation,
    BoardMembers
    
};

class AboutUsRepository  {

    public function getPolytechnicAboutGoverningbody(){
        try {

            $data_output = BoardMembers::join('department', 'department.id', '=', 'tbl_board_members.Designation_id')
    ->select(
        'tbl_board_members.fld_bm_id',
        'department.id as Department_id',
        'tbl_board_members.fld_bm_name', 
        'tbl_board_members.gov_address', 
        'department.Department',
        'tbl_board_members.is_active'
    )
    // ->where('department.id', $id) // Uncomment this line to filter by the provided department ID
    ->orderBy('tbl_board_members.fld_bm_id', 'desc')
    ->get(); // Use get() to retrieve all matching records


           
                      return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }
}    
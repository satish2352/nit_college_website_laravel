<?php
namespace App\Http\Repository\Website\Marquee;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    Marquee
    
};

class MarqueeRepository  {


public function getMarquee()
{
    try {
        $data_output = Marquee::where('fld_delete', '0')
        ->where('is_active', '1')
        ->orderBy('fld_achievement_id', 'desc')
        ->get();
       return $data_output;
    } catch (\Exception $e) {
        return $e;
    }
}

}    
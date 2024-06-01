<?php

namespace App\Http\Controllers\Website\Academics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\Academics\AcademicsServices;
use Session;


// use App\Models\ {
//     Index
// };

class AcademicsController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();
        $this->service = new AcademicsServices();  
    }

   
    
    public function getPolytechnicRules()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $data_output = $this->service->getPolytechnicRules();
            return view('website.pages.academics.polytechnic-rules',compact('data_output','menu', 'menuDepartment'));

        } catch (\Exception $e) {
            return $e;
        }
    } 

         
}
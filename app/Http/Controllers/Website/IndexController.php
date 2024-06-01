<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\IndexServices;
use Session;

// use App\Models\ {
//     Index
// };

class IndexController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->service = new IndexServices();  
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();

    }

   
    
    public function index()
    {
        try {
            $menu = $this->menu;  
            $menuDepartment = $this->menuDepartment;        
            $data_output = $this->service->index();
            return view('website.pages.index',compact('menu','data_output', 'menuDepartment'));

        } catch (\Exception $e) {
            return $e;
        }
    } 

    public function index11()
    {
        try {

            // $data_output = $this->service->index();
            return view('website.pages.test');

        } catch (\Exception $e) {
            return $e;
        }
    } 
         
}
<?php

namespace App\Http\Controllers\Website\AboutUs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\AboutUs\AboutUsServices;
use Session;
class AboutUsController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();
        $this->service = new AboutUsServices();  
    }

    public function getPolytechnicPresident()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            return view('website.pages.aboutus.polytechnic-president', compact('menu', 'menuDepartment'));
        } catch (\Exception $e) {
            return $e;
        }
    } 

    public function getPolytechnicPrincipals()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            return view('website.pages.aboutus.polytechnic-principals', compact('menu', 'menuDepartment'));
        } catch (\Exception $e) {
            return $e;
        }
    } 
    public function getPolytechnicMissionVision()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            return view('website.pages.aboutus.polytechnic-mission-and-vision', compact('menu', 'menuDepartment'));
        } catch (\Exception $e) {
            return $e;
        }
    } 
    public function getPolytechnicAboutGoverningbody()
    {
        
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $data_output = $this->service->getPolytechnicAboutGoverningbody();
           
            return view('website.pages.aboutus.polytechnic-about-governingbody', compact('data_output','menu', 'menuDepartment'));
        } catch (\Exception $e) {
            return $e;
        }
    } 
    
    public function getPolytechnicAboutFutureplans()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            return view('website.pages.aboutus.polytechnic-about-futureplans', compact('menu', 'menuDepartment'));
        } catch (\Exception $e) {
            return $e;
        }
    } 
         
}
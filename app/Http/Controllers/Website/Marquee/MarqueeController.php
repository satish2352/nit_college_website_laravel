<?php

namespace App\Http\Controllers\Website\Marquee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\Marquee\MarqueeServices;
use Session;
class MarqueeController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();
        $this->service = new MarqueeServices();  
    }

    public function getMarquee()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $data_output = $this->service->getMarquee();
            return view('website.pages.achievement.achievement-list', compact('data_output','menu', 'menuDepartment'));
        } catch (\Exception $e) {
            return $e;
        }
    } 

         
}
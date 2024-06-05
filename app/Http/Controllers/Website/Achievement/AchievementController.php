<?php

namespace App\Http\Controllers\Website\Achievement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\Achievement\AchievementServices;
use Session;
class AchievementController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();
        $this->service = new AchievementServices();  
    }

    public function getAchievement()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $data_output = $this->service->getAchievement();
            return view('website.pages.achievement.achievement-list', compact('data_output','menu', 'menuDepartment'));
        } catch (\Exception $e) {
            return $e;
        }
    } 

         
}
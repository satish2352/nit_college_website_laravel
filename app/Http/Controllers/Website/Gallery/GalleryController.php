<?php

namespace App\Http\Controllers\Website\Gallery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\Gallery\GalleryServices;
use Session;


// use App\Models\ {
//     Index
// };

class GalleryController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();
        $this->service = new GalleryServices();  
    }

   
    
    public function getGallery()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $data_output = $this->service->getGallery();
            return view('website.pages.gallery.polytechnic-gallery',compact('data_output','menu', 'menuDepartment'));

        } catch (\Exception $e) {
            return $e;
        }
    } 

         
}
<?php

namespace App\Http\Controllers\Website\HomeSidebar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\HomeSidebar\HomeSidebarServices;
use Session;
class LibraryController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();
        $this->menuFacility = getFacility();
        $this->service = new HomeSidebarServices();  
    }

    
    public function getMandataryDisclosure()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getMandataryDisclosure();
            return view('website.pages.home-sidebar.polytechnic-mandatary', compact('data_output','menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    } 
   
    public function getAICTEExtension()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getAICTEExtension();
            return view('website.pages.home-sidebar.polytechnic-aicte', compact('data_output','menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }  
    public function getMSBTE()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getMSBTE(); // Assuming this fetches data correctly
            return view('website.pages.home-sidebar.polytechnic-affiliation', compact('data_output', 'menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    

    public function getPolytechnicAffiliationCertificates()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getPolytechnicAffiliationCertificates();
            return view('website.pages.home-sidebar.polytechnic-affiliation_certificates', compact('data_output','menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    } 
    public function getServiceRule()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getServiceRule();
            return view('website.pages.home-sidebar.polytechnic-affiliation_certificates', compact('data_output','menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return $e;
        }
    }


    public function getAntiRagging()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getAntiRagging();
            return view('website.pages.home-sidebar.polytechnic-anti-ragging', compact('data_output', 'menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            return view('website.pages.home-sidebar.polytechnic-anti-ragging', [
                'error' => $e->getMessage(),
                'menu' => $this->menu,
                'menuDepartment' => $this->menuDepartment,
                'menuFacility' => $this->menuFacility,
                'data_output' => []
            ]);
        }
    }
    
    
    // public function getAntiRagging()
    // {
    //     try {
    //         $menu = $this->menu;
    //         $menuDepartment = $this->menuDepartment;
    //         $data_output = $this->service->getAntiRagging();
    //         return view('website.pages.home-sidebar.polytechnic-anti-ragging', compact('data_output','menu', 'menuDepartment', 'menuFacility'));
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }
    public function getInternalComplaint()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getInternalComplaint();
    
            return view('website.pages.home-sidebar.polytechnic-internal-complaint', compact('data_output', 'menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            // Log the exception
            \Log::error('Error in Controller getInternalComplaint: ' . $e->getMessage());
            return view('website.pages.home-sidebar.polytechnic-internal-complaint', [
                'error' => $e->getMessage(),
                'menu' => $this->menu,
                'menuDepartment' => $this->menuDepartment,
                'menuFacility' => $this->menuFacility,
                'data_output' => collect() // Pass an empty collection to the view in case of error
            ]);
        }
    }
    
    
    public function getAboutSCST()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getAboutSCST();
   
            return view('website.pages.home-sidebar.polytechnic-scst', compact('data_output', 'menu', 'menuDepartment', 'menuFacility'));
        } catch (\Exception $e) {
            \Log::error('Error in Controller getAboutSCST: ' . $e->getMessage());
            return view('website.pages.home-sidebar.polytechnic-scst', [
                'error' => $e->getMessage(),
                'menu' => $this->menu,
                'menuDepartment', 'menuFacility' => $this->menuDepartment
            ]);
        }
    }
    
    public function getAcademicCalendar()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            $menuFacility = $this->menuFacility;
            $data_output = $this->service->getAcademicCalendar();
    
            // Check if $data_output is not empty
            if ($data_output && $data_output->isNotEmpty()) {
                return view('website.pages.home-sidebar.polytechnic-calendar', compact('data_output', 'menu', 'menuDepartment', 'menuFacility'));
            } else {
                return view('website.pages.home-sidebar.polytechnic-calendar', compact('menu', 'menuDepartment', 'menuFacility'))->with('error', 'No data found.');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred while fetching the academic calendar.');
        }
    }
    
    

}
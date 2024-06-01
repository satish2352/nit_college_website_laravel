<?php
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use App\Models\ {
    ActivitiesCategory,
    DepartmentCategory
};
use Illuminate\Support\Facades\Storage;

function getMenuItemsActivities() {

    $menu_data = array();
    $menu_data =  ActivitiesCategory::where('is_active', '=',true)
    ->where('is_delete', 0)
                        ->select( 
                            'activities.activities', 
                            'activities.id',
                        )
                        ->get()
                        ->toArray();


                      
    return $menu_data ;
    
                
}


function getMenuItemsDepartment() {

    $menu_data_department = array();
    $menu_data_department =  DepartmentCategory::where('is_active', '=',true)
    ->where('Department_delete', 0)
                        ->select( 
                            'department.Department', 
                            'department.id',
                        )
                        ->orderBy('department.id', 'desc')
                        ->get()
                        ->toArray();


                      
    return $menu_data_department ;
    
                
}
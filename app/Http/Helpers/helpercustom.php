<?php
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use App\Models\ {
    ActivitiesCategory,
    DepartmentCategory
};
use Illuminate\Support\Facades\Storage;

// function getMenuItemsActivities() {

//     $menu_data = array();
//     $menu_data =  ActivitiesCategory::where('is_active', '=',true)
//     ->where('is_delete', 0)
//                         ->select( 
//                             'activities.activities', 
//                             'activities.id',
//                         )
//                         // ->get()
//                         ->toArray();


                      
//     return $menu_data ;
    
                
// }
function getMenuItemsActivities() {
    $menu_data = array();

    // Assuming you have a model called ActivitiesCategory and a related model Activities
    $menu_data = ActivitiesCategory::where('is_active', true)
        ->where('is_delete', 0)
        ->with(['activities' => function ($query) {
            $query->select('activities.id', 'activities.activities');
        }])
        ->get()
        ->toArray();

    return $menu_data;
}


// function getMenuItemsDepartment() {

//     $menu_data_department = array();
//     $menu_data_department =  DepartmentCategory::where('is_active', '=',true)
//     ->where('Department_delete', 0)
//                         ->select( 
//                             'department.Department', 
//                             'department.id',
//                         )
//                         ->orderBy('department.id', 'desc')
//                         ->get()
//                         ->toArray();

// }
                      
//     return $menu_data_department ;
function getMenuItemsDepartment() {
    $menu_data_department = DepartmentCategory::where('is_active', '=', true)
        ->where('Department_delete', 0)
        ->select('department.Department', 'department.id')
        ->orderBy('department.id', 'desc')
        ->get()
        ->toArray();

    // Reindex the array to start from 1
    $reindexed_menu_data_department = [];
    foreach ($menu_data_department as $key => $value) {
        $reindexed_menu_data_department[$key + 1] = $value;
    }

    return $reindexed_menu_data_department;
}

                

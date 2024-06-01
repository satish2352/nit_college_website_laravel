<?php
namespace App\Http\Repository\Website\Department;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    DepartmentCategory,
    DepartmentInformation,
    Curriculum,
    Designation,
    Staff,
    Syllabus,
    Timetable,
    Mentors,
    Events,
    Awards,
    Members,
    Plan

};

class DepartmentRepository  {

    public function getProfile($id)
    {
        try {
            $dataOutputCategory = DepartmentInformation::join('department', 'department.id', '=', 'tbl_department.Department_id')
                ->select(
                    'tbl_department.id',
                    'department.id as Department_id',
                    'tbl_department.department_description', 
                    'tbl_department.department_mission', 
                    'tbl_department.department_vision', 
                    'tbl_department.department_specification',
                    'tbl_department.photo',
                    'department.Department',
                    'tbl_department.is_active'
                )
                ->where('department.id', $id) // Filter by the provided ID
                ->orderBy('tbl_department.id', 'desc')
                ->first(); // Get a single record
    
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getDepartVisionMission($id)
    {
        try {
            $dataOutputCategory = DepartmentInformation::join('department', 'department.id', '=', 'tbl_department.Department_id')
                ->select(
                    'tbl_department.id',
                    'department.id as Department_id',
                    'tbl_department.department_description', 
                    'tbl_department.department_mission', 
                    'tbl_department.department_vision', 
                    'tbl_department.department_specification',
                    'tbl_department.photo',
                    'department.Department',
                    'tbl_department.is_active'
                )
                ->where('department.id', $id) // Filter by the provided ID
                ->orderBy('tbl_department.id', 'desc')
                ->first(); // Get a single record
    
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    

    public function getCurriculum($id)
    {
        try {
            $dataOutputCategory = Curriculum::join('department', 'department.id', '=', 'curriculum.department_id')
                ->select(
                    'curriculum.id',
                    'department.id as department_id',
                    'curriculum.year', 
                    'curriculum.semister', 
                    'curriculum.file', 
                    'department.Department',
                    'curriculum.is_active'
                )
                ->where('department.id', $id) // Filter by the provided ID
                ->orderBy('curriculum.id', 'desc')
                ->first(); // Get a single record
             
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getFaculty($id)
    {
        try {

            $dataOutputCategory = Staff::join('department', 'department.id', '=', 'tbl_staff.department_id')
            // ->join('tbl_staff', 'tbl_staff.Designation_id', '=', 'designation.Designation_id')
                ->select(
                    'tbl_staff.fld_staff_id',
                    'department.id as department_id',
                    'tbl_staff.fld_staff_qualification', 
                    // 'tbl_staff.fld_staff_experiance', 
                    // 'tbl_staff.fld_staff_email', 
                    // 'tbl_staff.fld_staff_mobile', 
                    // 'tbl_staff.fld_staff_photo', 
                    // 'department.Department'
                )
                ->where('department.id', $id) // Filter by the provided ID
                // ->orderBy('tbl_staff.fld_staff_id', 'desc')
                ->first(); // Get a single record
             
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    
    public function getSyllabus($id)
    {
        try {
            $dataOutputCategory = Syllabus::join('department', 'department.id', '=', 'syllabus.department_id')
                ->select(
                    'syllabus.syllabus_id',
                    'department.id as department_id',
                    'syllabus.year', 
                    'syllabus.semister', 
                    'syllabus.file', 
                    'department.Department',
                    'syllabus.is_active'
                )
                ->where('department.id', $id) // Filter by the provided ID
                ->orderBy('syllabus.syllabus_id', 'desc')
                ->first(); // Get a single record
             
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getTimeTable($id)
    {
        try {
            $dataOutputCategory = Timetable::join('department', 'department.id', '=', 'timetable.department_id')
                ->select(
                    'timetable.timetable_id',
                    'department.id as department_id',
                    'timetable.year', 
                    'timetable.semister', 
                    'timetable.file', 
                    'department.Department',
                    'timetable.is_active'
                )
                ->where('department.id', $id) // Filter by the provided ID
                ->orderBy('timetable.timetable_id', 'desc')
                ->first(); // Get a single record
             
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getMentor($id)
    {
        try {
            $dataOutputCategory = Mentors::join('department', 'department.id', '=', 'tbl_mentors.Department_id')
                ->select(
                    'tbl_mentors.fld_bm_id',
                    'department.id as department_id',
                    'tbl_mentors.class_name', 
                    'tbl_mentors.roll_no', 
                    'tbl_mentors.mentor_name', 
                    'department.Department',
                    'tbl_mentors.is_active'
                )
                ->where('department.id', $id) // Filter by the provided ID
                ->orderBy('tbl_mentors.fld_bm_id', 'desc')
                ->first(); // Get a single record
             
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getAchievementsAwards($id)
    {
        try {
            $dataOutputCategory = Awards::join('department', 'department.id', '=', 'tbl_awards.department_id')
                ->select(
                    'tbl_awards.fld_gallery_id',
                    'department.id as department_id',
                    'tbl_awards.imageTitle', 
                    'tbl_awards.fld_gallery_photo', 
                    'department.Department',
                    'tbl_awards.is_active'
                )
                ->where('department.id', $id) // Filter by the provided ID
                ->orderBy('tbl_awards.fld_gallery_id', 'desc')
                ->first(); // Get a single record
             
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getActivitiesEvents($id)
    {
        try {
            $dataOutputCategory = Events::join('department', 'department.id', '=', 'tbl_events.department_id')
                ->select(
                    'tbl_events.fld_gallery_id',
                    'department.id as department_id',
                    'tbl_events.imageTitle', 
                    'tbl_events.fld_gallery_photo', 
                    'department.Department',
                    'tbl_events.is_active'
                )
                ->where('department.id', $id) // Filter by the provided ID
                ->orderBy('tbl_events.fld_gallery_id', 'desc')
                ->first(); // Get a single record
             
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getStudentsAssociation($id)
    {
        try {
            // $dataOutputCategory = Members::join('department', 'department.id', '=', 'tbl_sa_members.Department_id')
            //  ->join('tbl_sa_members', 'tbl_sa_members.Designation_id', '=', 'designation.Designation_id')
            // ->select(
            //         'tbl_sa_members.fld_bm_id',
            //         'department.id as department_id',
            //         'tbl_sa_members.fld_bm_name', 
            //         'tbl_sa_members.semister', 
            //         'tbl_sa_members.file', 
            //         'department.Department',
            //         'tbl_sa_members.is_active'
            //     )
            //     ->where('department.id', $id) // Filter by the provided ID
            //     ->orderBy('tbl_sa_members.fld_bm_id', 'desc')
            //     ->first(); // Get a single record
            $dataOutputCategory = Members::from('tbl_sa_members as m1')
            ->join('department', 'department.id', '=', 'm1.Department_id')
            // ->join('tbl_sa_members as m2', 'm2.Designation_id', '=', 'designation.Designation_id')
            ->select(
                'm1.fld_bm_id',
                'department.id as department_id',
                'm1.fld_bm_name', 
                'department.Department',
                'm1.is_active'
            )
            ->where('department.id', $id) // Filter by the provided ID
            ->orderBy('m1.fld_bm_id', 'desc')
            ->first(); // Get a single record
        
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getPlan($id)
    {
        try {
            $dataOutputCategory = Plan::join('department', 'department.id', '=', 'tbl_plan.department_id')
                ->select(
                    'tbl_plan.fld_bm_id',
                    'department.id as department_id',
                    'tbl_plan.semister', 
                    'tbl_plan.plan_name', 
                    'tbl_plan.subject_name',
                    'tbl_plan.file',
                    'department.Department',
                    'tbl_plan.is_active'
                )
                ->where('department.id', $id) // Filter by the provided ID
                ->orderBy('tbl_plan.fld_bm_id', 'desc')
                ->first(); // Get a single record
             
            return $dataOutputCategory;
        } catch (\Exception $e) {
            return $e;
        }
    }
    
}                               
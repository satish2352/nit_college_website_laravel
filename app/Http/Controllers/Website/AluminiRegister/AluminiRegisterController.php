<?php

namespace App\Http\Controllers\Website\AluminiRegister;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Website\AluminiRegister\AluminiRegisterServices;
use Session;
use Validator;
use Config;


// use App\Models\ {
//     Index
// };

class AluminiRegisterController extends Controller
{
    // public static $event_repository;
    public function __construct()
    {
        $this->menu = getMenuItemsActivities();
        $this->menuDepartment = getMenuItemsDepartment();
        $this->service = new AluminiRegisterServices();  
    }

   
    
    public function getAluminiRegister()
    {
        try {
            $menu = $this->menu;
            $menuDepartment = $this->menuDepartment;
            // $contactusdata = $this->service->getContactUs();
            return view('website.pages.aluminiregister.alumini-register', compact('menu', 'menuDepartment'));

        } catch (\Exception $e) {
            return $e;
        }
    } 

    public function addAluminiRegister(Request $request)
    {
        try {

            $rules = [
                'name' => 'required|max:255',
                'email' => 'required|regex:/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z])+\.)+([a-zA-Z0-9]{2,4})+$/',
                'enroll' => 'required',

                'firstsem' => 'required|regex:/^\d{1,3}(\.\d{1,2})?$/|numeric|min:0|max:100',
                'secondsem' => 'required|regex:/^\d{1,3}(\.\d{1,2})?$/|numeric|min:0|max:100',
                'thirdsem' => 'required|regex:/^\d{1,3}(\.\d{1,2})?$/|numeric|min:0|max:100',
                'fourthsem' => 'required|regex:/^\d{1,3}(\.\d{1,2})?$/|numeric|min:0|max:100',
                'fifthsem' => 'required|regex:/^\d{1,3}(\.\d{1,2})?$/|numeric|min:0|max:100',
                'sixthsem' => 'required|regex:/^\d{1,3}(\.\d{1,2})?$/|numeric|min:0|max:100',

                'company' => 'required|max:255',
                'location' => 'required|max:255',
                'mobile' =>  'required|regex:/^[0-9]{10}$/',
                'passout_year' =>  'required',

                'department' => 'required|max:255',
                'message' => 'required',
            ];
            $messages = [
                'name.required' => 'Please  enter title.',
                'name.max' => 'Please  enter text length upto 255 character only.',

                'email.required' => 'Please enter email.',
                'email.regex' => 'Enter valid email.',
                'enroll.required' => 'Please  enter Subject.',

                'firstsem.required' => 'The first semester percentage is required.',
                'firstsem.regex' => 'The first semester percentage must be a valid number with up to two decimal places.',
                'firstsem.numeric' => 'The first semester percentage must be a number.',
                'firstsem.min' => 'The first semester percentage must be at least 0.',
                'firstsem.max' => 'The first semester percentage may not be greater than 100.',

                'secondsem.required' => 'The first semester percentage is required.',
                'secondsem.regex' => 'The first semester percentage must be a valid number with up to two decimal places.',
                'secondsem.numeric' => 'The first semester percentage must be a number.',
                'secondsem.min' => 'The first semester percentage must be at least 0.',
                'secondsem.max' => 'The first semester percentage may not be greater than 100.',

                'thirdsem.required' => 'The first semester percentage is required.',
                'thirdsem.regex' => 'The first semester percentage must be a valid number with up to two decimal places.',
                'thirdsem.numeric' => 'The first semester percentage must be a number.',
                'thirdsem.min' => 'The first semester percentage must be at least 0.',
                'thirdsem.max' => 'The first semester percentage may not be greater than 100.',
                
                'fourthsem.required' => 'The first semester percentage is required.',
                'fourthsem.regex' => 'The first semester percentage must be a valid number with up to two decimal places.',
                'fourthsem.numeric' => 'The first semester percentage must be a number.',
                'fourthsem.min' => 'The first semester percentage must be at least 0.',
                'fourthsem.max' => 'The first semester percentage may not be greater than 100.',

                'fifthsem.required' => 'The first semester percentage is required.',
                'fifthsem.regex' => 'The first semester percentage must be a valid number with up to two decimal places.',
                'fifthsem.numeric' => 'The first semester percentage must be a number.',
                'fifthsem.min' => 'The first semester percentage must be at least 0.',
                'fifthsem.max' => 'The first semester percentage may not be greater than 100.',

                'sixthsem.required' => 'The first semester percentage is required.',
                'sixthsem.regex' => 'The first semester percentage must be a valid number with up to two decimal places.',
                'sixthsem.numeric' => 'The first semester percentage must be a number.',
                'sixthsem.min' => 'The first semester percentage must be at least 0.',
                'sixthsem.max' => 'The first semester percentage may not be greater than 100.',

                'company.required' => 'Please  enter title.',
                'company.max' => 'Please  enter text length upto 255 character only.',

                'location.required' => 'Please  enter title.',
                'location.max' => 'Please  enter text length upto 255 character only.',
                'mobile.required' => 'Please enter number.',
                'mobile.regex' => 'Please enter only numbers with 10-digit.',

                'passout_year.required' => 'Please enter number.',

                'department.required' => 'Please  enter title.',
                'department.max' => 'Please  enter text length upto 255 character only.',

                'message.required' => 'Please  enter title.',
            ];

            $validation = Validator::make($request->all(), $rules, $messages);
            if ($validation->fails()) {
                return redirect('aluminiregister')
                    ->withInput()
                    ->withErrors($validation);
            } else {
                $add_role = $this->service->addAluminiRegister($request);
                if ($add_role) {
                    $msg = $add_role['msg'];
                    $status = $add_role['status'];
                    if ($status == 'success') {
                        return redirect('aluminiregister')->with(compact('msg', 'status'));
                    } else {
                        return redirect('aluminiregister')->withInput()->with(compact('msg', 'status'));
                    }
                }

            }
        } catch (Exception $e) {
            return redirect('add-projects')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    }

         
}
<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Role;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function list_role(){
        $data = Role::get();

        $response['data'] = $data;
        $response['succes'] = true;
        return $response;
    }

    public function update(Request $request,$id){

        try {

            $data['name_lastname'] = $request['name'];
            $data['email'] = $request['email'];
            $data['city'] = $request['city'];
            $data['direction'] = $request['address'];
            $data['phone'] = $request['phone'];
            $data['rol'] = $request['rol'];

            Employee::where("id",$id)->update($data);

            $response['message'] = "Updated successful";
            $response['success'] = true;

        } catch (\Exception $e) {
            $response['message'] = $e->getMessage();
            $response['success'] = false;
        }
        return $response;

    }
}

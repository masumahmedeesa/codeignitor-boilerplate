<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class Employee extends BaseController
{
    public function index()
    {
        $model = model(EmployeeModel::class);

        $data['employee_list'] = $model->getEmployee();

        return view('employees/index', $data);
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employee_info';

    public function getEmployee($sap = false)
    {
        if ($sap === false) {
            return $this->findAll();
        }

        return $this->where(['sapID' => $sap])->first();
    }
}
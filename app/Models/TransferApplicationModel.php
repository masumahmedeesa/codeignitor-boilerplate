<?php

namespace App\Models;

use CodeIgniter\Model;

class TransferApplicationModel extends Model
{
    protected $table = 'transferapplication';

    protected $allowedFields = ['title', 'body'];

    public function getApplications()
    {
        // return $this->findAll();
        return $this->orderBy('id', 'DESC')->findAll();
    }
    public function deleteApplication($id)
    {
        return $this->delete($id);
    }
}

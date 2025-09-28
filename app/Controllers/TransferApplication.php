<?php

namespace App\Controllers;

use App\Models\TransferApplicationModel;

class TransferApplication extends BaseController
{
    public function index()
    {
        $model = model(TransferApplicationModel::class);
        $data = [
            'application_list' => $model->getApplications(),
            'title' => 'Application list',
        ];

        return view('transferapplication/list', $data);
    }

    public function new()
    {
        helper('form');

        return view('transferapplication/new_application', ['title' => 'Create a transfer application']);
    }

    public function create()
    {
        helper('form');

        $data = $this->request->getPost(['title', 'body']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'title' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(TransferApplicationModel::class);

        $model->save([
            'title' => $post['title'],
            'body'  => $post['body'],
        ]);

        $data = [
            'application_list' => $model->getApplications(),
            'title' => 'Application list',
        ];

        return view('transferapplication/list', $data);
    }

    public function delete($id)
    {
        // dd($id);
        $model = model(TransferApplicationModel::class);

        $model->deleteApplication($id);
        return redirect()->to('/ejoining/transferapplication/list');
        // return redirect()->to(site_url('ejoining/transferapplication/list'));
    }
}

<?php

namespace App\Controllers;

use App\Models\AideTechniqueModel;
use CodeIgniter\Controller;

class AideTechnique extends Controller
{
    public function index()
    {
        $model = new AideTechniqueModel();

        $data = [
            'aideTechnique'  => $model->getAideTechnique(),
            'title' => 'Aide techniques',
        ];

        echo view('templates/header', $data);
        echo view('aideTechnique/overview', $data);
        echo view('templates/footer', $data);
    }

    public function view($id = NULL)
    {
        $model = new AideTechniqueModel();

        $data['aideTechnique'] = $model->getAideTechnique($id);

        if (empty($data['aideTechnique'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the aideTechnique item: ' . $id);
        }
        
        $data['title'] = $data['aideTechnique']['nom'];

        echo view('templates/header', $data);
        echo view('aideTechnique/view', $data);
        echo view('templates/footer', $data);
    }
}
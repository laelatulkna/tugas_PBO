<?php

namespace App\Controllers;

use App\Core\Controller;

class Kelas extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Kelas();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('kelas/index', $data);
     }

     public function input()
     {
          $this->dashboard('kelas/input');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/kelas');
     }

     public function edit($id)
     {
          $data['row'] = $this->model->edit($id);
          $this->dashboard('kelas/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/kelas');
     }
}

<?php

namespace App\Controllers;
use App\Models\TaskModel;

class Home extends BaseController
{
    public function index(){
        $model = new TaskModel();
        $data['tugas'] = $model->findAll();
        return view('home', $data);
    }

    public function create(){
        $model = new TaskModel();
        $model->save([
            'judul' => $this->request->getPost('tugas'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'status' => 0
        ]);
        return redirect()->to('/')->with('created', 'Tugas berhasil dibuat');
    }

    public function update($id){
        $model = new TaskModel();
        $model->update($id, [
            'status' => 1 - $model->find($id)['status']
        ]);
        return redirect()->to('/')->with('updated', 'Status berhasil diubah');
    }

    public function delete($id){
        $model = new TaskModel();
        $model->delete($id);
        return redirect()->to('/')->with('deleted', 'Tugas berhasil dihapus');
    }
}

<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserCrudRequest;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class UserCrudController extends CrudController
{
    public function setup()
    {
        $this->crud->setModel('App\Models\User');
        $this->crud->setRoute('admin/user');
        $this->crud->setEntityNameStrings('user', 'users');

        // Define fields for the create and update view
        $this->crud->addFields([
            [
                'name'  => 'name',
                'label' => 'Name',
                'type'  => 'text',
            ],
            [
                'name'  => 'email',
                'label' => 'Email',
                'type'  => 'email',
            ],
            [
                'name'  => 'password',
                'label' => 'Password',
                'type'  => 'password',
            ],
            [
                'name'  => 'no_ktp',
                'label' => 'No KTP',
                'type'  => 'text',
            ],
            [
                'name'  => 'pendidikan',
                'label' => 'Pendidikan',
                'type'  => 'text',
            ],
            [
                'name'  => 'nama_sekolah',
                'label' => 'Nama Sekolah / Universitas',
                'type'  => 'text',
            ],
            [
                'name'  => 'jurusan',
                'label' => 'Jurusan',
                'type'  => 'text',
            ],
            [
                'name'  => 'perusahaan',
                'label' => 'Perusahaan',
                'type'  => 'text',
            ],
            [
                'name'  => 'jabatan',
                'label' => 'Jabatan',
                'type'  => 'text',
            ],
            [
                'name'  => 'tahun_masuk',
                'label' => 'Tahun Masuk',
                'type'  => 'number',
            ],
            [
                'name'  => 'tahun_lulus',
                'label' => 'Tahun Lulus',
                'type'  => 'number',
            ],
            [
                'name'  => 'keterangan'
            ],
        ])
    }
}

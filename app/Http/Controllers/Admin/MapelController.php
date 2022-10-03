<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Mata Pelajaran',
            'route' => route('mapel.editor')
        ];

        return view('admin.data_master.mapel.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Buat Mata Pelajaran',
            'section_title' => 'Buat Mata Pelajaran Baru',
            'section_lead' => 'pada halaman anda dapat membuat mata pelajaran baru',
            'method' => 'POST',
            'route' => route('mapel.store'),
        ];

        return view('admin.data_master.mapel.editor', $data);
    }

    public function store()
    {

    }
}

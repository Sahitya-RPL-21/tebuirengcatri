<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'totalPendaftar' => 120,
            'verifikasiPending' => 15,
            'lulusSeleksi' => 60,
        ];

        return view('dashboard', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPelanggan   = Pelanggan::count();
        $pelangganTerbaru = Pelanggan::latest()->take(5)->get();

        return view('dashboard', compact('totalPelanggan', 'pelangganTerbaru'));
    }
}
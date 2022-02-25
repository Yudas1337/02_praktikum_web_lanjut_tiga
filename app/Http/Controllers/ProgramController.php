<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir()
    {
        return "Halaman Program Karir";
    }

    public function magang()
    {
        return "Halaman Program Magang";
    }

    public function kunjungan()
    {
        return "Halaman Program Kunjungan";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Pengalaman;
use App\Models\Pendidikan;
use App\Models\Keahlian;
use App\Models\Bprog;
use App\Models\Project;

class PortoController extends Controller
{
    public function  index()
    {

        $profile = Profile::first();
        return view('porto.inc.header', compact('profile'));
    }

    public function resume()
    {
        $pengalaman = Pengalaman::all();
        $pendidikan = Pendidikan::all();
        $keahlian = Keahlian::all();
        $bprog = Bprog::all();
        return view('porto.inc.resume', compact('pengalaman', 'pendidikan', 'keahlian', 'bprog'));
    }

    public function project()
    {
        $project = Project::all();
        return view('porto.inc.project', compact('project'));
    }

    public function contact()
    {
        return view('porto.inc.contact');
    }
}

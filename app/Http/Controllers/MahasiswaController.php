 <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;


 class MahasiswaController extends Controllers{


    public function index()
    {
        // $mahasiswa = DB::table('mahasiswa')->get();
        $mahasiswa = Student::all();
        return view ('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }
 }
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import Facade untuk DB
use App\Models\Presensi;


class DashboardController extends Controller
{

    public function index()
    {
        $courseData1 = DB::table('mata_kuliah')
            ->select('nama', 'kode_matkul', 'jenis_kelas')
            ->where('id_matkul', 1)
            ->first();

        $classData1 = DB::table('kelas')
            ->select('nama_kelas')
            ->where('id_kelas', 1)
            ->first();

        $courseData2 = DB::table('mata_kuliah')
            ->select('nama', 'kode_matkul', 'jenis_kelas')
            ->where('id_matkul', 6)
            ->first();

        $classData2 = DB::table('kelas')
            ->select('nama_kelas')
            ->where('id_kelas', 2)
            ->first();

        $courseData3 = DB::table('mata_kuliah')
            ->select('nama', 'kode_matkul', 'jenis_kelas')
            ->where('id_matkul', 5)
            ->first();

        $classData3 = DB::table('kelas')
            ->select('nama_kelas')
            ->where('id_kelas', 1)
            ->first();

        $options = [
            [
                'text' => $courseData1->nama . ' - ' . $courseData1->kode_matkul . ' - ' . $courseData1->jenis_kelas . ' - ' . $classData1->nama_kelas,
                'value' => 'option_1', // Ganti dengan nilai yang sesuai
            ],
            [
                'text' => $courseData2->nama . ' - ' . $courseData2->kode_matkul . ' - ' . $courseData2->jenis_kelas . ' - ' . $classData2->nama_kelas,
                'value' => 'option_2', // Ganti dengan nilai yang sesuai
            ],
            [
                'text' => $courseData3->nama . ' - ' . $courseData3->kode_matkul . ' - ' . $courseData3->jenis_kelas . ' - ' . $classData3->nama_kelas,
                'value' => 'option_3', // Ganti dengan nilai yang sesuai
            ],
        ];

        return view('dashboard', compact('options'));
    }
    
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'courses' => 'required',
            'topik' => 'required',
            'comments' => 'required',
        ]);

        // Get the selected course value from the form
        $selectedCourseValue = $request->input('courses');

        // Create a new record in the table, storing the selected course value
        Presensi::create([
            'selected_course' => $selectedCourseValue, // Change 'selected_course' to the actual column name in your table
            'topik' => $request->input('topik'),
            'sub_topik' => $request->input('comments'),
        ]);

        // Redirect or return a response as needed
        return redirect()->route('input');
    }
}

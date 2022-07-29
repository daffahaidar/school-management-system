<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentYear;

class StudentYearController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ViewYear()
    {
        $data['allData'] = StudentYear::all();
        return view('backend.setup.year.view_year', $data);
    }

    public function StudentYearAdd()
    {
        return view('backend.setup.year.add_year');
    }

    public function StudentYearStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:student_years,name',
        ]);

        $data = new StudentYear();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Tahun Angkatan Berhasil Ditambahkan',
            'alert-type' => 'success'
        );

        return redirect()->route('student.year.view')->with($notification);
    }

    public function StudentYearEdit($id)
    {
        $editData = StudentYear::find($id);
        return view('backend.setup.year.edit_year', compact('editData'));
    }

    public function StudentYearUpdate(Request $request, $id)
    {
        $data = StudentYear::find($id);

        $validatedData = $request->validate([
            'name' => 'required|unique:student_years,name,' . $data->id,
        ]);

        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Tahun Angkatan Berhasil Diubah!',
            'alert-type' => 'success'
        );

        return redirect()->route('student.year.view')->with($notification);
    }

    public function StudentYearDelete($id)
    {
        $data = StudentYear::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Tahun Angkatan Berhasil Dihapus!',
            'alert-type' => 'success'
        );

        return redirect()->route('student.year.view')->with($notification);
    }
}

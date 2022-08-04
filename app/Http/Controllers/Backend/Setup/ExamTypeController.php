<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExamType;

class ExamTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ViewExamType()
    {
        $data['allData'] = ExamType::all();
        return view('backend.setup.exam_type.view_exam_type', $data);
    }

    public function ExamTypeAdd()
    {
        // $role = auth()->user()->usertype;

        // if ($role == 'Admin') {
        //     $notification = array(
        //         'message' => 'Anda tidak diizinkan mengakses halaman tersebut!',
        //         'alert-type' => 'warning'
        //     );
        //     return redirect()->route('dashboard')->with($notification);
        // }
        return view('backend.setup.exam_type.add_exam_type');
    }

    public function ExamTypeStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:exam_types,name',
        ]);

        $data = new ExamType();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Kategori Ujian Berhasil Ditambahkan!',
            'alert-type' => 'success'
        );

        return redirect()->route('exam.type.view')->with($notification);
    }

    public function ExamTypeEdit($id)
    {
        $editData = ExamType::find($id);
        return view('backend.setup.exam_type.edit_exam_type', compact('editData'));
    }

    public function ExamTypeUpdate(Request $request, $id)
    {
        $data = ExamType::find($id);

        $validatedData = $request->validate([
            'name' => 'required|unique:exam_types,name,' . $data->id,
        ]);

        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Kategori Ujian Berhasil Diubah!',
            'alert-type' => 'success'
        );

        return redirect()->route('exam.type.view')->with($notification);
    }

    public function ExamTypeDelete($id)
    {
        $data = ExamType::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Kategori Ujian Berhasil Dihapus!',
            'alert-type' => 'success'
        );

        return redirect()->route('exam.type.view')->with($notification);
    }
}

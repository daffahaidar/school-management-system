<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentClass;
use App\Models\SchoolSubject;
use App\Models\AssignSubject;

class AssignSubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ViewAssignSubject()
    {
        // $data['allData'] = AssignSubject::all();
        $data['allData'] = AssignSubject::select('class_id')->groupBy('class_id')->get();
        return view('backend.setup.assign_subject.view_assign_subject', $data);
    }

    public function AddAssignSubject()
    {
        $data['classes'] = StudentClass::all();
        $data['subjects'] = SchoolSubject::all();
        return view('backend.setup.assign_subject.add_assign_subject', $data);
    }

    public function StoreAssignSubject(Request $request)
    {
        $subjectCount = count($request->subject_id);

        if ($subjectCount != NULL) {
            for ($i = 0; $i < $subjectCount; $i++) {
                $assign_subject = new AssignSubject();
                $assign_subject->class_id = $request->class_id;
                $assign_subject->subject_id = $request->subject_id[$i];
                $assign_subject->full_mark = $request->full_mark[$i];
                $assign_subject->pass_mark = $request->pass_mark[$i];
                $assign_subject->subjective_mark = $request->subjective_mark[$i];
                $assign_subject->save();
            }
        }
        $notification = array(
            'message' => 'Mata pelajaran berhasil ditetapkan!',
            'alert-type' => 'success'
        );
        return redirect()->route('assign.subject.view')->with($notification);
    }
}

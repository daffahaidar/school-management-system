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
        $data['allData'] = AssignSubject::all();
        //  $data['allData'] = FeeCategoryAmount::select('fee_category_id')->groupBy('fee_category_id')->get();
        return view('backend.setup.assign_subject.view_assign_subject', $data);
    }
}

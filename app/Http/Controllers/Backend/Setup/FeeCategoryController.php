<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeeCategory;

class FeeCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ViewFeeCategory()
    {
        $data['allData'] = FeeCategory::all();
        return view('backend.setup.fee_category.view_fee_category', $data);
    }

    public function FeeCategoryAdd()
    {
        // $role = auth()->user()->usertype;

        // if ($role == 'Admin') {
        //     $notification = array(
        //         'message' => 'Anda tidak diizinkan mengakses halaman tersebut!',
        //         'alert-type' => 'warning'
        //     );
        //     return redirect()->route('dashboard')->with($notification);
        // }
        return view('backend.setup.fee_category.add_fee_category');
    }

    public function FeeCategoryStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:fee_categories,name',
        ]);

        $data = new FeeCategory();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Kategori Biaya Berhasil Ditambahkan!',
            'alert-type' => 'success'
        );

        return redirect()->route('fee.category.view')->with($notification);
    }

    public function FeeCategoryEdit($id)
    {
        $editData = FeeCategory::find($id);
        return view('backend.setup.fee_category.edit_fee_category', compact('editData'));
    }

    public function FeeCategoryUpdate(Request $request, $id)
    {
        $data = FeeCategory::find($id);

        $validatedData = $request->validate([
            'name' => 'required|unique:fee_categories,name,' . $data->id,
        ]);

        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Kategori Biaya Berhasil Diubah!',
            'alert-type' => 'success'
        );

        return redirect()->route('fee.category.view')->with($notification);
    }

    public function FeeCategoryDelete($id)
    {
        $data = FeeCategory::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Kategori Biaya Berhasil Dihapus!',
            'alert-type' => 'success'
        );

        return redirect()->route('fee.category.view')->with($notification);
    }
}

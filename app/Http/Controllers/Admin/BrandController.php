<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Yajra\Datatables\Datatables;

class BrandController extends Controller
{
    
    public function __construct() {
        $this->model = new Brand();
    }

    public function getIndex() {
        return view('backend.brand.index');
    }

    public function getData() {
        
        $brands=Brand::select(['id','name','description','created_at','updated_at']);

        return Datatables::of($brands)->addColumn('action',function($brand) {
            return '<a href="'.url('/brand/update/'.$brand->id).'" class="btn btn-xs btn-flat btn-success"><i class="glyphicon glyphicon-edit"></i> Edit</a>'.
            '<a href="'.url('/brand/delete/'.$brand->id).'" class="btn btn-xs btn-flat btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
        })->make(true);
    }

    public function getCreate() {
        $model=$this->model;
        return view('backend.brand.form',['model'=>$model]);
    }

    public function postCreate(Request $request) {
        
        try {
            $this->validate($request, [
                'name' => 'required'
            ]);
            $data = [
                'name'=>$request->name,
                'description'=>$request->description,
            ];
            Brand::create($data);
    
            return redirect(url('brand/index'))->withSuccess('Data has been saved');
        } catch(Exception $e) {
            dd($e->getMessage());
        }
        
    }

    public function getUpdate($id) {
        $model=$this->model->findOrFail($id);
        return view('backend.brand.form',['model'=>$model]);
    }

    public function postUpdate(Request $request, $id) {
        try {
            $this->validate($request, [
                'name' => 'required'
            ]);
            $data = [
                'name'=>$request->name,
                'description'=>$request->description,
            ];
            $model = Brand::where(['id'=>$id])->update($data);
    
            return redirect(url('brand/index'))->withSuccess('Data has been update');
        } catch(Exeption $e) {
            dd($e->getMessage());
        }        
    }

    public function getDelete($id) {
        try {
            $model = $this->model->findOrFail($id);
            $model->delete();
            return redirect(url('brand/index'))->withSuccess('Data has been deleted');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        
    }
}

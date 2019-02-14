<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Yajra\Datatables\Datatables;

class ProductController extends Controller
{
    //

    public function getIndex() {
        return view('backend.product.index');
    }

    public function getData() {
        
        $products= Product::select(['id','sku','name','slug','brand_id','description','created_at','updated_at']);

        return Datatables::of($products)
        ->addColumn('action', function ($product) {
            return '<a href="#edit-'.$product->id.'" class="btn btn-xs btn-flat btn-success"><i class="glyphicon glyphicon-edit"></i> Edit</a>'.
            '<a href="#delete-'.$product->id.'" class="btn btn-xs btn-flat btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
        })
        ->make(true);
    }

    public function getCreate() {
        
    }
}

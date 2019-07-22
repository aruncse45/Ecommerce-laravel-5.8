<?php

namespace App\Http\Controllers;
use App\product_info;
use DB;

use Illuminate\Http\Request;

class admin_controller extends Controller
{
    public function product_info(){
    	return view('admin.product.input_product_info');
    }

    public function save_product_info(Request $request){

    	$result = new product_info();
    	
    	$result->category = $request->category;
    	$result->model_name = $request->model_name;
    	$result->price = $request->price;
    	$result->description = $request->description;
        $result->published = '';
        $result->unpublished = '';
    	$result->image = '';
    	$result->save();
    	$lastid = $result->id;
    	$image = $request->file('image');
    	
    	if ($image) {
    	   	$iname = $lastid.$image->getClientOriginalName();
    	   	$ipath = 'admin/product_image/';
    	   	$image->move($ipath,$iname);
    	   	$update_image = product_info::find($lastid);
    		$update_image->image = $iname;

    		$update_image->save();
    	}   
    	
    }

    public function manage_product(){

		$result = DB::table('product_infos')
				->paginate(5);
		return view('admin.product.manage_product',['productinfo'=>$result]);
	}

    public function edit_product($id){

        $result = DB::table('product_infos')
                ->where('id',$id)
                ->first();

        return view('admin.product.edit_product_form',['p'=>$result]);
    }

    public function save_edit_product(Request $r){

        //$result = DB::table('product_infos')
                //->where('id',$r->id)
               // ->first();
        $result = product_info::find($r->id);

        $result->category = $r->category ;
        $result->model_name = $r->model_name ;
        $result->description = $r->description ;
        $result->price = $r->price ;

        $image = $r->file('image');

        if ($image) {
            if ($result->image) {
                unlink('admin/product_image/'.$result->image);
            }

            $iname = $r->id.$image->getClientOriginalName();
            $ipath = 'admin/product_image/';
            $image->move($ipath, $iname);
            $result->image = $iname;
        }

        $result->save();
    }

    public function pub_unpub(){

        $result = DB::table('product_infos')
                ->paginate(5);

        return view('admin.product.publish_unpublish_product',['productinfo'=>$result]);
    }

    public function pub_unpub_product(Request $r){

        $all_product = DB::table('product_infos')
                    ->get();
               
        foreach ($all_product as $p) {
                
            $s = $p->id;
            $m = $r->$s;
            //dd($m);
            if ($m == 'yes') {
               DB::table('product_infos')
                ->where('id',$p->id)
                ->update(['published' => 'yes']);

               DB::table('product_infos')
                ->where('id',$p->id)
                ->update(['unpublished' => 'yes']);

                
            }
            else{
                DB::table('product_infos')
                ->where('id',$p->id)
                ->update(['published' => 'no']);
               
                DB::table('product_infos')
                ->where('id',$p->id)
                ->update(['unpublished' => 'yes']);
            }
        }
    }

    
}

	

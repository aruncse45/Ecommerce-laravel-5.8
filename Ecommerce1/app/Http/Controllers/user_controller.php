<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\customer_info;
use Cart;
use Session;
class user_controller extends Controller
{
    public function homepage(){
    	return view('user.home.homecontent');
    }

    public function signup_form(){
    	return view('user.home.signup_form');
    }

    public function user_signup(Request $r){

    	$c = new customer_info();

    	$email = $r->email;

    	$result = DB::table('customer_infos')
    			->get();
    	foreach ($result as $p) {
    		if ($p->email == $r->email) {
    			return redirect('/signup_form')->with('msg','*Already exist. please try another.');
    		}

    	}

        session(['email'=>$email]);

    	$c->email = $r->email;
    	$c->password = $r->password;
    	$c->save();
        session(['email'=>$email]);

        $products = DB::table('product_infos')
                    ->get();

    	return view('user.home.products',['name'=> $r->email],['products'=> $products]);
    }

    public function user_login(Request $r){

        // $value = $r->session()->get('key');
        // dd($value);

        $email = $r->email;
        $result = DB::table('customer_infos')
                ->get();

        $products = DB::table('product_infos')
                    ->get();

        session(['email'=>$email]);

        foreach ($result as $p) {

            if ($p->email == $r->email) {
                if ($p->password == $r->password) {
                    session(['user_id'=> $p->id]);
                    return view('user.home.products',['name'=> $r->email],['products'=> $products]);
                }
                
            }
            
        }
        return redirect('/')->with('msg1','Incorrect username or password');

    }

    public function user_logout(){

        session()->forget('email');

        return redirect('/');
    }

    public function add_to_cart(Request $r){

        $productbyid = DB::table('product_infos')
            ->where('id',$r->id)
            ->first();

        $user_id = session('user_id');

        $f = Cart::session($user_id)->add(array(
            'id' => $productbyid->id,
            'name' => $productbyid->model_name,
            'price' => $productbyid->price,
            'quantity' => $r->qty
        ));
        
        $products = DB::table('product_infos')
                    ->get();

        //$cartTotalQuantity = Cart::session($user_id)->getTotalQuantity();
        return view('user.home.products',['products'=> $products]);
    }

    public function cart_show(){
        $user_id = session('user_id');
        $cart_products = Cart::session($user_id)->getContent();
        dd($user_id);
        return view('user.home.cart_show',['cart_products'=>$cart_products]);
    }

    public function update_cart(Request $r){
        $user_id = session('id');

        Cart::session($user_id)->update($r->product_id,array(
            'quantity'=> $r->quantity

        
        ));
        
        $cart_products = Cart::session($user_id)->getContent();

        return view('user.home.cart_show',['cart_products'=>$cart_products]);
        
    }

    public function remove_product($id){
        //dd($id);
        $user_id = session('id');
        Cart::session($user_id)->remove($id);
        return redirect('/cart_show');
    }

    public function clear_cart(){
        $user_id = session('id');

        Cart::session($user_id)->clear();
        return redirect('/cart_show');
    }
}

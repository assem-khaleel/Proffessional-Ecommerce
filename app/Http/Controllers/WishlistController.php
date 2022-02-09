<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    public function addWishlist($id){

        $userid = Auth::id();
        $check = DB::table('wishlists')->where('user_id',$userid)->where('product_id',$id)->first();

        $data = array(
            'user_id' => $userid,
            'product_id' => $id,

        );

        if (Auth::Check()) {

            if ($check) {
                return response()->json(['error' => 'Product Already Has on your wishlist']);
            }else{
                DB::table('wishlists')->insert($data);
                return response()->json(['success' => 'Product Added on Wishlist']);

            }

        }else{
            return response()->json(['error' => 'At first login to your account']);

        }

    }





}

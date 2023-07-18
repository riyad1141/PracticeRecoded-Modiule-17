<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CraftController extends Controller
{
    function Demo_Craft(Request $request){
//        $data = DB::table('brands')->pluck('brandImg','brandName');
//        return $data;


//        $count = DB::table('products')->count();
//        $sum = DB::table('products')->sum('price');
//        $avg = DB::table('products')->avg('price');
//        $max = DB::table('products')->max('price');
//        $min = DB::table('products')->min('price');
//
//        return [
//          'count' => $count,
//          'sum' => $sum,
//          'avg' => $avg,
//          'max' => $max,
//          'min' => $min,
//        ];



//        $products = DB::table('products')->select('title','price')->get();
//        return $products;
//        $products = DB::table('products')->select('title')->distinct()->get();
//        return $products;



//        $products = DB::table('products')
//            ->join('categories','products.category_id','=','categories.id')
//            ->join('brands','products.brand_id','=','brands.id')
//            ->get();
//        return $products;


//        $cross = DB::table('products')
//            ->crossJoin('brands',)
//            ->get();
//        return $cross;


//        $products = DB::table('products')
//            ->join('categories',function (JoinClause $joinClause){
//                $joinClause->on('products.category_id','=','categories.id')
//                    ->where('products.price','>',2000);
//            })
//            ->join('brands',function (JoinClause $joinClause){
//                $joinClause->on('products.brand_id','=','brands.id')
//                ->where('brands.brandName','=','Hatil');
//            })
//            ->get();
//        return $products;



//        $query = DB::table('products')->where('price','>',2000);
//        $other_query = DB::table('products')->where('id','=',1)
//            ->union($query)->get();
//        return $other_query;


//        $products = DB::table('products')
//            ->where('title','LIKE','%Ca%')
//            ->where('title','NOT LIKE','%Ca%')
//            ->whereIn('price',[200,100,12])
//            ->whereNotIn('price',[200,100,12])
//            ->get();
//        return $products;



//        $products = DB::table('products')
//            ->where('price','>',2000)
//            ->orWhere('price','=',100)
//            ->get();
//        return $products;




//        $products = DB::table('products')
////            ->whereBetween('price',[1,500])
//            ->whereNotBetween('price',[1,500])
//            ->get();
//        return $products;





//        $products = DB::table('products')
////            ->whereNull('price',)
//            ->whereNotNull('price',)
//            ->get();
//        return $products;




//        $products = DB::table('products')
////            ->whereIn('price',[1,200])
//            ->whereNotIn('price',[1,500])
//            ->get();
//        return $products;





//        $brands = DB::table('brands')
//            ->whereDate('created_at','=','2023-02-10')
//            ->get();
//        return $brands;




//        $brands = DB::table('brands')
//            ->whereMonth('created_at','=','05')
//            ->get();
//        return $brands;



//        $brands = DB::table('brands')
//            ->whereDay('created_at','=','10')
//            ->get();
//        return $brands;



//        $brands = DB::table('brands')
//            ->whereYear('created_at','=','2023')
//            ->get();
//        return $brands;



//        $brands = DB::table('brands')
//            ->whereTime('created_at','=','16:05:15')
//            ->get();
//        return $brands;



//        $products = DB::table('products')
//            ->whereColumn('price','<','discount_price')
//            ->get();
//        return $products;




//        $brands = DB::table('brands')
////            ->orderBy('brandName','asc')
//            ->orderBy('brandName','desc')
//            ->get();
//        return $brands;




//                $brands = DB::table('brands')->inRandomOrder()
//                    ->first();
////            ->get();
//        return $brands;



////        $brands = DB::table('brands')->latest()
//        $brands = DB::table('brands')->oldest()
//            ->first();
////            ->get();
//        return $brands;



//        $products = DB::table('products')
//            ->skip(5)
//            ->take(3)
//            ->get();
//        return $products;




//        $result = DB::table('products')
//            ->groupBy('price')
//            ->having('price','>','2000')
//            ->get();
//        return $result;




//        $data_insert = DB::table('brands')->insert([
//                'brandName' => 'Samsung Galaxy',
//                'brandImg' => 'Samsung Picture'
//        ]);
//        return $data_insert;




//        $data_insert = DB::table('brands')
//            ->insert($request->input());
//        return $data_insert;

        // on the other type to insert data in a database

//        $data_insert = DB::table('brands')
//            ->insert([
//                'brandName' => $request->input('name'),
//                'brandImg' => $request->input('img')
//            ]);
//        return $data_insert;



//        $update = DB::table('brands')
//            ->where('id','=',$request->id)
//            ->update($request->input());
//        return $update;




//        $update_insert = DB::table('brands')
//            ->updateOrInsert(
//                ['brandName' => $request->name],
//                $request->input()
//            );
//        return $update_insert;



//        $increment = DB::table('products')
//            ->where('id','=',$request->id)
//            ->increment('price',100);
//        return $increment;

//        $decrement = DB::table('products')
//            ->where('id','=',$request->id)
//            ->decrement('price',100);
//        return $decrement;



        $delete = DB::table('brands')
            ->where('id','=',$request->id)
            ->delete();
        return $delete;




    }
}

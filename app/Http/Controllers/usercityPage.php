<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\FoodItem;
use App\Area;
use App\Restaurant;

class usercityPage extends Controller
{
   public function getIndex(Request $request){
       
    if($request->Search == ''){
        $fooditem = FoodItem::orderBy('foodItemID', 'DESC')->paginate(9);
    }else{
        $search = $request->Search;
        $fooditem = FoodItem::where('foodName', 'like', '%'.$search.'%')
        ->orWhere('foodTag', 'like', '%'.$search.'%')->paginate(9);
    }
      return view('usercityPage')->with(['table'=>$fooditem]);
   }




/*blic function getSearch(Request $request){
  if($request->Search == ''){
      $fooditem = FoodItem::orderBy('foodItemID', 'DESC')->paginate(9);
    }else{
      $search = $request->Search;

      $fooditem = FoodItem::where('price', 'like', '%'.$search.'%')->paginate(9);
      }

      return view('usercityPage')->with(['table'=>$fooditem]);
}*/
  public function ajaxSearch(Request $request){

      $addrow = [];

      $foodID = $request->id;

      $foodItem= FoodItem::where('foodItemID', $foodID)->get();




      foreach ($foodItem as $row) {
         $addrow['foodItemID'] = $row->foodItemID;
         $addrow['foodname'] = $row->foodName;
         $addrow['fooddescription'] = $row->foodDescription;
         $addrow['foodprice'] = $row->price;
         $addrow['restaurantname'] = $row->restaurant['restaurantName'];
         $addrow['areaname'] = $row->areaName;

      }



     return response()->json($addrow);


}
   

}

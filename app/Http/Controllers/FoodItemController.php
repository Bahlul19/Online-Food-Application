<?php

namespace App\Http\Controllers;

use App\FoodItem;
use App\Restaurant;
use Illuminate\Http\Request;

use App\Http\Requests\FoodItemRequest;

class FoodItemController extends Controller
{
    public function getIndex()
    {   
//        $fooditem = FoodItem::all();
        $fooditem = FoodItem::Latest();
        $restaurant = Restaurant::all();
        return view('fooditempage')->with(['table'=>$fooditem,'restaurant'=>$restaurant]);
    }

    public function getFoodItemSave(Request $request)
    {
        $abcd = new FoodItem();
        $abcd->foodName = $request->foodName;
        $abcd->foodDescription = $request->foodDescription;
        $abcd->price=$request->price;
        $abcd->foodTag = $request->foodTag;
        $abcd->restaurantID=$request->restaurantID;
        $abcd->save();

        $insertID = $abcd->foodItemID;

        if(isset($request->foodImg)){
          $imageName = $insertID.'.jpg';

        $request->foodImg->move(public_path('productImage/'), $imageName);
        }

        return redirect('fooditempage')->with('status','Data Has Been Successfully Inserted');
    }

   public function getFoodItemDel($id)

   {
       $abcd = FoodItem::find($id);
       $abcd->delete();
       return redirect('fooditempage')->with('status','Data Has Been Successfully Deleted');
   }

   public function getFoodItemEdit($id)
   {
       $fooditem = FoodItem::find($id);
       $restaurant = Restaurant::all();
       return view('edit.fooditemedit')->with(['table'=>$fooditem,'restaurant'=>$restaurant]);
   }

   public function getFoodItemEditSave(Request $request)
   {

       $abcd = FoodItem::find($request->foodItemID);
       $abcd->foodName = $request->foodName;
       $abcd->foodDescription = $request->foodDescription;
       $abcd->price = $request->price;
       $abcd->foodTag = $request->foodTag;
       $abcd->restaurantID = $request->restaurantID;
       $abcd->save();
       return redirect('fooditempage')->with('status','Data Has Been Updated Successfully ');
   }
}
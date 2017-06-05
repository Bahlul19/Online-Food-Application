<?php

namespace App\Http\Controllers;

use App\Area;
use App\Restaurant;
use Illuminate\Http\Request;

use App\Http\Requests\RestaurantRequest;

class RestaurantController extends Controller
{
    public function getIndex()
    {

        $area = Area::all();
//        $restaurant = Restaurant::all();
        $restaurant = Restaurant::Latest();
        return view('restaurantpage')->with(['table'=>$restaurant,'area'=>$area]);
    }

    public function getRestaurantSave(Request $request)
    {
        $abcd =new Restaurant();
        $abcd -> restaurantName= $request-> restaurantName;
        $abcd-> areaID = $request-> areaID;
        $abcd->save();
        return redirect('restaurantpage')->with('status','Data Has Been Successfully Inserted');
    }

    public function getRestaurantDel($id)
    {
        $abcd = Restaurant::find($id);
        $abcd->delete();
        return redirect('restaurantpage')->with('status','Data Has Been Deleted Successfully');
    }

    public function getRestaurantEdit($id)
    {
        $restaurant = Restaurant::find($id);
        $area = Area::all();

        return view('edit.restaurantEdit')->with(['table'=>$restaurant,'area'=>$area]);
    }

    public function getRestaurantEditSave(Request $request)
    {
        $abcd = Restaurant::find($request->restaurantID);
        $abcd ->restaurantName = $request->restaurantName;
        $abcd ->areaID = $request->areaID;
        $abcd->save();
        return redirect('restaurantpage')->with('status','Data Has Been Updated Successfully');
    }
}

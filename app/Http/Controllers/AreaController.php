<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;

use App\Http\Requests\AreaRequest;


class AreaController extends Controller
{

//    This Function for The Index Value Of The Area
    public function getIndex()
    {
        $area=Area::Latest();
//       $area = Area::all();
        return view('areapage')->with(['table'=>$area]);
    }


//    Given Value Save Korar jonno ei function ta bananu hoise
    public function getAreaSave(Request $request)
    {
        $abcd = new Area();
        $abcd->areaName = $request->areaName;
        $abcd->save();
        return redirect('areapage')->with('status','Data Has Been Inserted Successfully');
    }

    public function getAreaDel($id)
    {
        $abcd = Area::find($id);
        $abcd->delete();
        return redirect('areapage')->with('status','Data Has Been Deleted Successfully');
    }

    public function getAreaEdit($id)
    {
        $area = Area::find($id);
        return view('edit.areaEdit')->with(['table'=>$area]);
    }

    public function getAreaEditSave(Request $request)
    {
        $abcd = Area::find($request->areaID);
        $abcd->areaName = $request->areaName;
        $abcd->save();
        return redirect('areapage')->with('status','Data Has Been Updated Successfully');
    }

}

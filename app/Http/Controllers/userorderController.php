<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\TempTable;
use DB;
use App\Customer;
use App\Order;
use App\OrderItem;

class userorderController extends Controller
{
    public function userOrder(Request $request){


        if ($request->session()->has('foodCart')) {
            $value = md5(date('H:i:s'));//Session::get('foodCart');

        }else{
            $value = md5(date('H:i:s'));
            //Session::set('foodCart', $value);
        }

        $table = new TempTable();
        $table->foodItemID = $request->foodItemID;
        $table->foodName = $request->foodName;
        $table->quantity = $request->quantity;
        $table->price = $request->price;
        $table->sessionUniq = $value;
        $table->save();

        return 'Success';
    }

    public function cartList(){
        $total = 0;
        $data = [];
        
        $table = TempTable::groupBy('foodItemID')
            ->select('foodItemID','foodName', 'price', DB::raw('count(foodItemID) as quantitys'))
            ->get();
        
        foreach ($table as $row){
            $rowData['foodName'] = $row->foodName;
            $rowData['quantity'] = $row->quantitys;
            $price = $row->price * $row->quantitys;
            $rowData['price'] = $price;

            $total += $price;
            $data[] = $rowData;
        }
        return response()->json($data);
    }


    public function adminordershow(){

        $total = 0;
        $data = [];
        
        $table = TempTable::groupBy('foodItemID')
            ->select('foodItemID','foodName', 'price', DB::raw('count(foodItemID) as quantitys'))
            ->get();

        return view('userorder')->with(['table'=>$table]);
    }

    public function UserorderItems(Request $request){

        $customer = new Customer();
        $customer->customerName = $request->customerName;
        $customer->customerEmail = $request->customerEmail;
        $customer->customerNumber = $request->customerNumber;
        $customer->customerAddress = $request->customerAddress;
        $customer->save();
        $customerID = $customer->customerID;


        $table = new order();
        $table->customerID = $customerID;
        $table->payment = $request->payment;
        $table->payment_type = $request->payment_type;
        $table->customerMessage = $request->customerMessage;
        $table->save();
        $orderID = $table->orderID;


         $tempd = TempTable::groupBy('foodItemID')
            ->select('foodItemID', 'price', DB::raw('count(foodItemID) as quantitys'))
            ->get();

            foreach ($tempd as $row){
                $item = new Orderitem();
                $item->foodItemID = $row->foodItemID;
                $item->orderID = $orderID;
                $item->quantity = $row->quantitys;
                $item->save();

         }

        $flight = TempTable::truncate();

        return redirect()->action('usercityPage@getIndex')->with('msg','Order Successfully Completed.');
        
    }

    public function adminpanelOderitemshow(){

        $abcd= order::orderBy('created_at', 'desc')->get();

        return view('mainpage')->with(['table'=>$abcd]);
    }

    public function order_approve($id){
        $table = order::find($id);
        $table->orderStatus = 'Approve';
        $table->save();

        return redirect()->back();
    }

    public function order_cancel($id){
        $table = order::find($id);
        $table->orderStatus = 'Cancel';
        $table->save();
        return redirect()->back();
    }

    public function order_view($id){
        $table = Orderitem::where('orderID', $id)->get();
       // dd($table);
        return view('show_order')->with(['id'=>$id, 'table' => $table]);
    }

    public function order_del($id){
        order::destroy($id);
        return redirect()->back();
    }


}

<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Data = Shop::all();

       return view("home.index" , ["Data" => $Data]);
    }

    public function dashboard(){

        $Data = Shop::all();

        return view("dashboard.index", ["Data" => $Data]);
    }



    // My Functions 

    public function IncrementChair($sign){
        if($sign == "+"){
            Shop::where("Name","ChairNow")->increment('Value');
            session()->flash("message","تم زيادة العدد على الكرسى");
           return redirect("/dashboard");
        } else {
            $ValueNow = Shop::where("Name","ChairNow")->first()->Value;
            if($ValueNow > 0){
                Shop::where("Name","ChairNow")->decrement('Value');
                session()->flash("message","تم نقص العدد على الكرسى");
                return  redirect("/dashboard");
            } else {
                session()->flash("message","العدد صفر الأن");
                return  redirect("/dashboard");
            }
           
        }   
        
    }
    public function IncrementWait($sign){
        if($sign == "+"){
            Shop::where("Name","WaitNow")->increment('Value');
            session()->flash("message","تم زيادة عدد المنتظرين");
           return redirect("/dashboard");
        } else {

            $ValueNow = Shop::where("Name","WaitNow")->first()->Value;
        
            if($ValueNow > 0){
                Shop::where("Name","WaitNow")->decrement('Value');
                session()->flash("message","تم نقص عدد المنتظرين");
               return redirect("/dashboard");
            } else {
                session()->flash("message","العدد صفر الأن");
                return  redirect("/dashboard");
            }
          
        }   
    }
    public function ToggleOnline($status){

        if($status == 0){
            Shop::where("Name","OnlineStatus")->update([
                "Value" =>  1 
            ]);
            session()->flash("message","تم تفعيل الحجز أونلاين");
           return redirect("/dashboard");

        } else {

            Shop::where("Name","OnlineStatus")->update([
                "Value" =>  0
            ]);
            
            session()->flash("message","تم إلغاء الحجز أونلاين");
           return redirect("/dashboard");
        }   
    }

    // End My Functions
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
    }
}

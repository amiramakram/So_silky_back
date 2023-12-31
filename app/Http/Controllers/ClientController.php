<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
   
   

    public function index()
    {
        $client = Client::get();
        return view('dashboard.client.index', ['clients' => $client]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {

       return view('dashboard.client.create');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {

        $data = $request->all();
      
        
        $colorWhite = $data['color_White'];
        $colorBlack = $data['color_black'];
        $colorGray = $data['color_gray'];
        $colorPink = $data['color_pink'];
        $colorBeige = $data['color_beige'];
        $colordarkRed = $data['color_darkRed'];
        $colorGreen = $data['color_green'];
        $colorBlue = $data['color_blue'];
    
        $totalPrice = $colorWhite + $colorBlack + $colorGray + $colorPink + $colorBeige+$colordarkRed+ $colorGreen+$colorBlue;

        if ($totalPrice === 0) {
            return redirect()->route('home')->with('error', 'المعذره يجب اختيار الالوان الكميه المطلوبه من كل لون');
        }

        $client = new Client([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'emirate' => $data['emirate'],
            'zone' => $data['zone'],
            'color_White' => $colorWhite,
            'color_black' => $colorBlack,
            'color_gray' => $colorGray,
            'color_pink' => $colorPink,
            'color_beige' => $colorBeige,
           'color_darkRed'=> $colordarkRed,
           'color_green'=>$colorGreen
            ,'color_blue'=>$colorBlue,
            'total_price' => ($totalPrice * 190),
        ]);
       
    
        $client->save();
    
        return redirect()->route('home')->with('success', 'تم استلام الطلب بنجاح ');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('dashboard.client.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('dashboard.client.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        $data = $request->all();
        $colorWhite = $data['color_White'];
        $colorBlack = $data['color_black'];
        $colorGray = $data['color_gray'];
        $colorPink = $data['color_pink'];
        $colorBeige = $data['color_beige'];
        $colordarkRed = $data['color_darkRed'];
        $colorGreen = $data['color_green'];
        $colorBlue = $data['color_blue'];
    
        $totalPrice = $colorWhite + $colorBlack + $colorGray + $colorPink + $colorBeige+$colordarkRed+ $colorGreen+$colorBlue;

       
            
    
        $client->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'emirate' => $data['emirate'],
            'zone' => $data['zone'],
            'color_White' => $colorWhite,
            'color_black' => $colorBlack,
            'color_gray' => $colorGray,
            'color_pink' => $colorPink,
            'color_beige' => $colorBeige,
           'color_darkRed'=> $colordarkRed
            ,'color_green'=>$colorGreen
            ,'color_blue'=>$colorBlue,
            'total_price' => ($totalPrice * 190),
        ]);
    
        return redirect()->route('client.index')->with('client', 'Client updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
    
        return redirect()->route('client.index')->with('client', 'Client deleted successfully');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address = Address::with('buildings')->paginate(20);
        return view('Address.index', compact(['address', 'buildings']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Address::create($request->all());
        return redirect('addresses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($adr)
    {
        $address = Address::with('buildings')->findOrFail($adr);
        $addresses = $address;
        // $adr = Address::where('suburb', $address->suburb)->orderBy('street')->get();

        list($prevPage,$nextPage) = nextBook('App\Address','adrid',$address->adrid,'');
        
        return view('Address.show', compact(['address','buildings']))->with('prevPage',$prevPage)->with('nextPage',$nextPage)->with('addresses,$addresses');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($adr)
    {
        $address = Address::findOrFail($adr);
        return view('Address.edit', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $adr)
    {
        $address = Address::findOrFail($adr);
        $address->update($request->all());
        return redirect('addresses');   
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    } //
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class PlansController extends Controller
{
    /* Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::with('buildings', 'addresses')->paginate(20);
        return view('Plan.index', compact(['plans','buildings', 'addresses']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Plan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        Plan::create($request->all());
        return redirect('plans');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $pl
     * @return \Illuminate\Http\Response
     */
    public function show($pl)
    {
        $plan = Plan::with('buildings','addresses')->findOrFail($pl);
        list($prevPage,$nextPage) = nextBook('App\Plan','plid',$plan->plid,'plid');
        return view('Plan.show', compact(['plan','buildings','addresses']))->with('prevPage',$prevPage)->with('nextPage',$nextPage);
    }

    /**
     * Show the form for editing the specified resource.
    

     * @param  int  $pl
     * @return \Illuminate\Http\Response
     */
    public function edit($pl)
    {
        $plans = Plan::findOrFail($pl);
        return view('Plan.edit', compact('plans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $pl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pl)
    {
        $plans = Plan::findOrFail($pl);
        $plans->update($request->all());
        return redirect('plans'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $pl
     * @return \Illuminate\Http\m_responsekeys(conn, identifier)
     */
    public function destroy($pl)
    {
        //
    }
}

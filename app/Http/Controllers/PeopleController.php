<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $person = Person::orderBy('ppname')->orderBy('ppfirst_name')->paginate(12);
        return view('Person.index', compact('person'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Person::create($request->all());
        return redirect('people');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $pp
     * @return \Illuminate\Http\Response
     */
    public function show($pp)
    {
        $person = Person::findOrFail($pp);
        $ppl = Person::orderBy('pptype')->orderBy('ppname')->orderBy('ppfirst_name')->get();
        list($prevPage,$nextPage) = nextBook('App\Person','ppid',$person->ppid,'ppname');
        return view('Person.show', compact('person'))->with('prevPage',$prevPage)->with('nextPage',$nextPage)->with('ppl', $ppl);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $pp
     * @return \Illuminate\Http\Response
     */
    public function edit($pp)
    {
        $person = Person::findOrFail($pp);
        return view('Person.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $pp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pp)
    {
        $person = Person::findOrFail($pp);
        $person->update($request->all());
        return redirect('people'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $pp
     * @return \Illuminate\Http\Response
     */
    public function destroy($pp)
    {
        //
    }

    public function findname($pp)
    {
        $person = Person::name($pp)->get();
        return view('Person.showname', compact('person'));
    }

    public function menu($menu)
    {
        if($menu == 'all')
        {
            $person = Person::paginate(15);
        }
        else
        {
            $person = Person::where('pptype','=',$menu)->paginate(15);
        }
        
        return view('Person.index', compact('person'));
    }
}

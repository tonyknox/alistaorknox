<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::with('buildings')->paginate(12);
        return view('Project.index', compact('project','buildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Project::create($request->all());
        return redirect('projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $pl
     * @return \Illuminate\Http\Response
     */
    public function show($pj)
    {
        $project = Project::findOrFail($pj);
        list($prevPage,$nextPage) = nextBook('App\Project','pjid',$project->pjid,'pjid');
        return view('Project.show', compact('project','building'))->with('prevPage',$prevPage)->with('nextPage',$nextPage);;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $pl
     * @return \Illuminate\Http\Response
     */
    public function edit($pj)
    {
        $project = Project::findOrFail($pj);
        return view('Project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $pl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pj)
    {
        $project = Project::findOrFail($pj);
        $project->update($request->all());
        return redirect('projects'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $pl
     * @return \Illuminate\Http\m_responsekeys(conn, identifier)
     */
    public function destroy($pj)
    {
        //
    }

     public function menu($menu)
    {
        if ($menu == 'other'){
            $project =  Project::where('pjname','')->orderby("pjid",'desc')->paginate(15);
        }
        elseif ($menu=='all')
        {
            $project = Project::with('buildings')->orderby("pjid",'desc')->paginate(15);
        }
        else
        {
            $project =  Project::where('pjname','like','%' . $menu . '%')->paginate(15);
        }
            return view('Project.index', compact('project'));
    }
}

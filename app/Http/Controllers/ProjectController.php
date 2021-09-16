<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('projects.index',[
      'projects' => Project::latest()->paginate()
     ]);
    }
     public function show($id)
     {
       return view('projects.show', [
         'project'=> Project::findOrFail($id)
       ]);
     }

     public function create()
     {
       return view('projects.create');
     }

     public function store(CreateProjectRequest $request)
     {
        // return $request->validated();
        Project::create($request->validated());
        return redirect()->route('projects.index');
     }

     public function edit(Project $project)
     {
       return view('projects.edit',[
         'project' => $project
       ]);

     }

}

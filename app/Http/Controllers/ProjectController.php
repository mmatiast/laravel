<?php

namespace App\Http\Controllers;
use App\Models\Project;

use Illuminate\Http\Request;

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

     public function store() 
     {

      // return request(['title']);
       $fields = request ()->validate([
        'title' => 'required',
        'url' => 'required',
        'description' => 'required'
      ]);
        Project::create($fields);
        return redirect()->route('projects.index');
     }

}

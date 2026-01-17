<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index() 
    {
        $projects = Project::orderBy('id', 'desc')->get();
        return view('front.index', [
            'projects' => $projects,
        ]);
    }

    public function details(Project $project) 
    {
        $projects = Project::orderBy('id', 'desc')->get();
        return view('front.details', [
            'project' => $project,
            'projects' => $projects,
        ]);
    }

    public function services()
    {
        return view('front.services');
    }

    public function about()
    {
        return view('front.about');
    }

    public function book()
    {
        return view('front.book');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'category' => 'required|string|in:Web Development,App Development,Graphic Design,Digital Marketing,Others',
            'budget' => 'required|integer',
            'brief' => 'required|string|max:255',
        ]);

        // open db transaction
        DB::beginTransaction();

        try {

            $newProject = ProjectOrder::create($validated);

            // commit to db
            DB::commit();
            return redirect()->route('front.index')->with('success', 'Order created successfully');

        } catch (\Exception $e) {

            // rollback if transaction failed
            DB::rollBack();

            return redirect()->back()->with('error', 'Failed to create order'.$e->getMessage());
        }
    }
}
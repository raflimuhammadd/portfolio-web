<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectTool;
use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectToolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Project $project)
    {
        $tools = Tool::orderBy('id', 'desc')->get();
        return view('admin.project_tools.create', [
            'tools' => $tools,
            'project' => $project,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Project $project)
    {
        $validated = $request->validate([
            'tool_id' => 'required|integer',
        ]);

        // open db transaction
        DB::beginTransaction();

        try {

            $validated['project_id'] = $project->id;
            // insert data
            $assignTool = ProjectTool::updateOrCreate($validated);

            // commit transaction
            DB::commit();

            return redirect()->back()->with('success', 'Tool assign successfully');

        } catch (\Exception $e) {
            
            // rollback if transaction failed
            DB::rollBack();

            return redirect()->back()->with('error', 'Failed to create tool'.$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectTool $projectTool)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectTool $projectTool)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectTool $projectTool)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectTool $projectTool)
    {
         try {
            $projectTool->delete();
            return redirect()->back()->with('success', 'Project tool deleted successfully!');
        } catch (\Exception $e) {

            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to delete project tool'.$e->getMessage());
        } 
    }
}

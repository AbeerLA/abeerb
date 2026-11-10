<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AdminProjectController extends Controller
{
    // Display all projects
    public function index()
    {
        $projects = Project::latest()->get();

        return view('admin.projects.index', compact('projects'));
    }

    // Show create form
    public function create()
    {
        return view('admin.projects.create');
    }

    // Save new project
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'caption' => ['nullable', 'string'],
            'description' => ['required', 'string'],
            'tags' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'max:2048'],
            'code' => ['nullable', 'url'],
            'demo' => ['nullable', 'url'],
        ]);

        $validated['tags'] = !empty($validated['tags'])
            ? array_map('trim', explode(',', $validated['tags']))
            : [];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::uuid() . '.' . $image->extension();

            $image->move(public_path('images/projects'), $imageName);

            $validated['image'] = $imageName;
        }

        Project::create($validated);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project added successfully!');
    }

    // Show edit form
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    // Update project
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'caption' => ['nullable', 'string'],
            'description' => ['required', 'string'],
            'tags' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'max:2048'],
            'code' => ['nullable', 'url'],
            'demo' => ['nullable', 'url'],
        ]);

        $validated['tags'] = !empty($validated['tags'])
            ? array_map('trim', explode(',', $validated['tags']))
            : [];

        if ($request->hasFile('image')) {

            // Delete old image if it exists
            if ($project->image) {
                $oldImage = public_path('images/projects/' . $project->image);

                if (File::exists($oldImage)) {
                    File::delete($oldImage);
                }
            }

            // Upload new image
            $image = $request->file('image');
            $imageName = Str::uuid() . '.' . $image->extension();

            $image->move(public_path('images/projects'), $imageName);

            $validated['image'] = $imageName;
        }

        $project->update($validated);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project updated successfully!');
    }

    // Delete project
    public function destroy(Project $project)
    {
        if ($project->image) {
            $imagePath = public_path('images/projects/' . $project->image);

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        $project->delete();

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project deleted successfully!');
    }
}
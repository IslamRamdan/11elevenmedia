<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'type'        => 'required|in:image,video',
            'file'        => 'required|file|mimes:jpg,jpeg,png,mp4,mov,avi',
            'thumbnail'   => 'nullable|image' // للفيديو فقط
        ]);

        // رفع الملف الرئيسي
        $path = $request->file('file')->store('projects', 'public');

        $thumbnailPath = null;
        if ($request->type === 'video' && $request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('projects/thumbnails', 'public');
        }

        Project::create([
            'title'       => $request->title,
            'description' => $request->description,
            'type'        => $request->type,
            'file'        => $path,
            'thumbnail'   => $thumbnailPath,
        ]);

        return redirect()->route('projects.index')->with('success', 'تم إنشاء المشروع بنجاح');
    }


    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'type'  => 'required|in:image,video',
        ]);

        $data = $request->only(['title', 'description', 'type']);

        if ($request->file('file')) {
            $path = $request->file('file')->store('projects', 'public');
            $data['file'] = $path;
        }

        $project->update($data);

        return redirect()->route('projects.index')->with('success', 'تم تحديث المشروع');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'تم حذف المشروع');
    }
}

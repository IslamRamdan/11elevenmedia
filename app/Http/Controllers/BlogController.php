<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // عرض جميع المدونات
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('blogs.index', compact('blogs'));
    }

    // صفحة إنشاء مدونة جديدة
    public function create()
    {
        return view('blogs.create');
    }

    // حفظ المدونة في قاعدة البيانات
    public function store(Request $request)
    {
        $request->validate([
            'title_ar' => 'required|string',
            'title_en' => 'required|string',
            'content_ar' => 'required|string',
            'content_en' => 'required|string',
            'thumbnail' => 'nullable|image',
        ]);

        $thumbnailPath = $request->file('thumbnail')
            ? $request->file('thumbnail')->store('blogs', 'public')
            : null;

        Blog::create([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'content_ar' => $request->content_ar,
            'content_en' => $request->content_en,
            'thumbnail' => $thumbnailPath,
        ]);

        return redirect()->route('blogs.index')->with('success', 'تم إنشاء المدونة بنجاح');
    }

    // صفحة تعديل المدونة
    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    // تحديث المدونة
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title_ar' => 'required|string',
            'title_en' => 'required|string',
            'content_ar' => 'required|string',
            'content_en' => 'required|string',
            'thumbnail' => 'nullable|image',
        ]);

        $data = $request->only(['title_ar', 'title_en', 'content_ar', 'content_en']);

        if ($request->file('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('blogs', 'public');
        }

        $blog->update($data);

        return redirect()->route('blogs.index')->with('success', 'تم تعديل المدونة بنجاح');
    }

    // حذف المدونة
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'تم حذف المدونة بنجاح');
    }
    public function show($id)
    {
        // يمكن تمرير اللغة إذا تريد دعم العربية والإنجليزية ديناميكيًا
        $blog = Blog::find($id);
        return view('blogs.show', compact('blog'));
    }
}

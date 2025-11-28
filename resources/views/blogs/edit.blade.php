@extends('adminlte::page')

@section('title', 'تعديل المدونة')

@section('content_header')
    <h1>تعديل المدونة</h1>
@stop

@section('content')
    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label>العنوان بالعربي</label>
            <input type="text" name="title_ar" class="form-control" value="{{ old('title_ar', $blog->title_ar) }}" required>
        </div>

        <div class="form-group mb-3">
            <label>العنوان بالإنجليزي</label>
            <input type="text" name="title_en" class="form-control" value="{{ old('title_en', $blog->title_en) }}"
                required>
        </div>

        <div class="form-group mb-3">
            <label>المحتوى بالعربي</label>
            <textarea name="content_ar" class="form-control" rows="5" required>{{ old('content_ar', $blog->content_ar) }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label>المحتوى بالإنجليزي</label>
            <textarea name="content_en" class="form-control" rows="5" required>{{ old('content_en', $blog->content_en) }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label>صورة المدونة</label>
            <input type="file" name="thumbnail" class="form-control">
            @if ($blog->thumbnail)
                <img src="{{ asset('storage/' . $blog->thumbnail) }}" width="100" class="mt-2 rounded">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">تحديث المدونة</button>
        <!-- CKEditor 5 Classic -->
        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>

        <script>
            // تحويل textarea المحتوى بالعربي إلى محرر نصوص
            ClassicEditor
                .create(document.querySelector('textarea[name="content_ar"]'), {
                    language: 'ar' // واجهة عربية
                })
                .catch(error => {
                    console.error(error);
                });

            // تحويل textarea المحتوى بالإنجليزي إلى محرر نصوص
            ClassicEditor
                .create(document.querySelector('textarea[name="content_en"]'), {
                    language: 'en' // واجهة انجليزية
                })
                .catch(error => {
                    console.error(error);
                });
        </script>

    </form>
@stop

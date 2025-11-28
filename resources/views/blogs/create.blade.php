@extends('adminlte::page')

@section('title', 'إنشاء مدونة جديدة')

@section('content_header')
    <h1>إنشاء مدونة جديدة</h1>
@stop

@section('content')
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label>العنوان بالعربي</label>
            <input type="text" name="title_ar" class="form-control" value="{{ old('title_ar') }}" required>
        </div>

        <div class="form-group mb-3">
            <label>العنوان بالإنجليزي</label>
            <input type="text" name="title_en" class="form-control" value="{{ old('title_en') }}" required>
        </div>

        <div class="form-group mb-3">
            <label>المحتوى بالعربي</label>
            <textarea name="content_ar" class="form-control" rows="5" required>{{ old('content_ar') }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label>المحتوى بالإنجليزي</label>
            <textarea name="content_en" class="form-control" rows="5" required>{{ old('content_en') }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label>صورة المدونة</label>
            <input type="file" name="thumbnail" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">حفظ المدونة</button>
    </form>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
    <script>
        // تحويل textarea بالعربي
        ClassicEditor
            .create(document.querySelector('textarea[name="content_ar"]'), {
                language: 'ar' // واجهة عربية
            })
            .catch(error => {
                console.error(error);
            });

        // تحويل textarea بالإنجليزي
        ClassicEditor
            .create(document.querySelector('textarea[name="content_en"]'), {
                language: 'en' // واجهة انجليزية
            })
            .catch(error => {
                console.error(error);
            });
    </script>

@stop

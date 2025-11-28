@extends('adminlte::page')

@section('title', 'إنشاء مشروع جديد')

@section('content_header')
    <h1>إنشاء مشروع جديد</h1>
@stop

@section('content')
    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="title">عنوان المشروع</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">وصف المشروع</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="type">نوع المشروع</label>
            <select name="type" class="form-control" id="projectType" required>
                <option value="image" {{ old('type') == 'image' ? 'selected' : '' }}>صورة</option>
                <option value="video" {{ old('type') == 'video' ? 'selected' : '' }}>فيديو</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="file">رفع الملف (صورة أو فيديو)</label>
            <input type="file" name="file" class="form-control" required>
        </div>

        <div class="form-group mb-3" id="thumbnailDiv" style="display: none;">
            <label for="thumbnail">صورة الفيديو (اختياري)</label>
            <input type="file" name="thumbnail" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">حفظ المشروع</button>
    </form>

    <script>
        const projectType = document.getElementById('projectType');
        const thumbnailDiv = document.getElementById('thumbnailDiv');

        function toggleThumbnail() {
            if (projectType.value === 'video') {
                thumbnailDiv.style.display = 'block';
            } else {
                thumbnailDiv.style.display = 'none';
            }
        }

        projectType.addEventListener('change', toggleThumbnail);
        window.addEventListener('load', toggleThumbnail);
    </script>
@stop

@extends('adminlte::page')

@section('title', 'تعديل مشروع')

@section('content_header')
    <h1>تعديل المشروع</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">

            <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>عنوان المشروع</label>
                    <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
                </div>

                <div class="form-group">
                    <label>الوصف</label>
                    <textarea name="description" class="form-control">{{ $project->description }}</textarea>
                </div>

                <div class="form-group">
                    <label>نوع المشروع</label>
                    <select name="type" class="form-control" required>
                        <option value="image" {{ $project->type == 'image' ? 'selected' : '' }}>صورة</option>
                        <option value="video" {{ $project->type == 'video' ? 'selected' : '' }}>فيديو</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>الملف الحالي</label><br>

                    @if ($project->type == 'image')
                        <img src="{{ asset('storage/' . $project->file) }}" width="150">
                    @else
                        <video width="200" controls>
                            <source src="{{ asset('storage/' . $project->file) }}" type="video/mp4">
                        </video>
                    @endif

                </div>

                <div class="form-group">
                    <label>تحديث الملف (اختياري)</label>
                    <input type="file" name="file" class="form-control">
                </div>

                <button class="btn btn-primary">تحديث</button>
                <a href="{{ route('projects.index') }}" class="btn btn-secondary">رجوع</a>

            </form>

        </div>
    </div>

@stop

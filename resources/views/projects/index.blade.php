@extends('adminlte::page')

@section('title', 'عرض المشاريع')

@section('content_header')
    <h1>قسم مشاريعنا</h1>
@stop

@section('content')

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-header">
            <a href="{{ route('projects.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> إضافة مشروع جديد
            </a>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>العنوان</th>
                        <th>النوع</th>
                        <th>المحتوى</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->type == 'image' ? 'صورة' : 'فيديو' }}</td>

                            <td>
                                @if ($project->type == 'image')
                                    <img src="{{ asset('storage/' . $project->file) }}" width="120" class="img-thumbnail">
                                @else
                                    <video width="180" controls>
                                        <source src="{{ asset('storage/' . $project->file) }}" type="video/mp4">
                                    </video>
                                @endif
                            </td>

                            <td>
                                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
                                    style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('حذف؟')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop

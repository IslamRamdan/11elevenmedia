@extends('adminlte::page')

@section('title', 'المدونات')

@section('content_header')
    <h1>المدونات</h1>
@stop

@section('content')
    <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">إنشاء مدونة جديدة</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>العنوان بالعربي</th>
                <th>العنوان بالإنجليزي</th>
                <th>الصورة</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $blog->title_ar }}</td>
                    <td>{{ $blog->title_en }}</td>
                    <td>
                        @if ($blog->thumbnail)
                            <img src="{{ asset('storage/' . $blog->thumbnail) }}" width="80" class="rounded">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-warning">تعديل</a>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('هل أنت متأكد؟')">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@extends('admin.adminNav')
@section('content')
    <h1>all Library Content</h1>
    <table class="table text-black">
        <thead>
            <th>file_name / Docs Name</th>
            <th>class Belong To</th>
            <th>date_created</th>
        </thead>
        @foreach ($some as $assignment)


        <tbody>
            <td><a href="{{ route('library.edit', $assignment->id) }}">{{ $assignment->file_path }}</a></td>
            <td>{{ $assignment->class->name }}</td>
            <td>{{ $assignment->created_at->diffForHumans() }}</td>
            {{-- <td><input type="button" class="btn btn-danger" value="delete"></td> --}}
        </tbody>
        @endforeach
    </table>
@endsection

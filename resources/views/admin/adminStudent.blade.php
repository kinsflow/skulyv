@extends('admin.adminNav')
@section('content')
    <h1>All Student</h1>
    <br>
    <div class="container">
            <span class="text-success ">these are the names of student that belongs to your class</span>

        <div class="col-8 ml-4 text-dark">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $student)
                        <tr>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

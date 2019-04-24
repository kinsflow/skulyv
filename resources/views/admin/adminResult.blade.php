@extends('admin.adminNav')
@section('content')
    <div class="container">
        <h1>Result</h1>
        <div class="alert ml-auto pl-5 pt-3 col-3">
            <label for="total">Student's Total Grade:</label>
            <h5 class=" alert alert-info" id="output" ></h2>
        </div>
        <form action="{{ route('result.store') }}" method="POST">
            @csrf
            <div class="form-group col-6">
                <div class="form-group">
                        <label for="id">student_id</label>
                        <input type="number" class="form-control" value="" name="id" id=" ">
                </div>
                <div class="form-group">
                        <label for="code">Course Code</label>
                        <input type="text" class="form-control" value="" name="code" id=" ">
                </div>
                <div class="form-group">
                        <label for="title">Course Title</label>
                        <input type="text" class="form-control" value="" name="title" id=" ">
                </div>
                <div class="form-group">
                    <label for="ca1">C.A 1</label>
                    <input type="number" class="form-control" value="" name="ca1" id="ca1">
                </div>
                <div class="form-group">
                        <label for="ca2">C.A 2</label>
                        <input type="number" class="form-control" name="ca2" id="ca2">
                </div>
                <div class="form-group">
                    <label for="year">Year</label>
                    <select class="form-control" name="year" id="">
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                    </select>
                </div>
                <div class="form-group">
                        <label for="exam">EXAM</label>
                        <input oninput="total()" type="number" class="form-control" name="exam" id="exam">
                </div>
                {{-- <div class="form-control " id="total">
                        <label for="student"></label>
                </div> --}}
                <div class="form-group">
                        <input type="submit" class="btn form-control btn-success"  id="">
                </div>
            </div>
        </form>
        {{-- <input type="submit"   class="btn form-control btn-success"  id=""> --}}

    </div>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <script>
        function total()
        {
          var ca1= document.getElementById("ca1").value ;
          var ca2= document.getElementById('ca2').value;
          var exam= document.getElementById('exam').value;
          var all = parseInt(ca1) + parseInt(ca2) + parseInt(exam);
          //document.getElementById('output').style.display = "none";
          document.getElementById('output').innerHTML = all;
        }
    </script>
@endsection

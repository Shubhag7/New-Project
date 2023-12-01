@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>All Students</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{route('dashboard')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<section class="content">
    <div class="card">
        <div class="card-body">
            <div>All Students Data</div>
            <form action="" method="get">
                <div class="card-header">
                    <div class="card-title">
                        <button type="button" onclick="window.location.href='{{route("students.list")}}'" class="btn btn-default btn-sm bg-transparent hover:bg-gray-500 text-gray-700 font-semibold hover:text-white px-2 border border-gray-500 hover:border-transparent rounded">Reset</button>
                    </div>
                    <div class="card-tools">
                        <div class="input-group input-group" style="width: 250px;">
                            <input value="{{Request::get('keyword')}}" type="text" name="keyword" class="form-control float-right" placeholder="Search">
                            <div class="ml-2.5 mt-2.5">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <table class="table">
                <thead class="table-head">
                    <tr>
                        <th>S No</th>
                        <th>Student Name</th>
                        <th>Father Name</th>
                        <th>Mother Name</th>
                        <th>Email</th>
                        <th>Class</th>
                        <th>Gender</th>
                        <th>Date of birth</th>
                        <th>Phone No</th>
                        <th>Details</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    @if($students->isNotEmpty())
                    @foreach($students as $student)
                    <tr class="table-row">
                        <td>{{$loop->index + 1}}</td>
                        <th>{{$student->student_name}}</th>
                        <th>{{$student->father_name}}</th>
                        <th>{{$student->mother_name}}</th>
                        <th>{{$student->email}}</th>
                        <th>{{$student->class}}</th>
                        <th>{{$student->gender}}</th>
                        <th>{{$student->date_of_birth}}</th>
                        <th>{{$student->official_communication_number}}</th>
                        <th><a href="{{route('students.details',Crypt::encrypt("$student->id"))}}" class="bg-transparent hover:bg-gray-500 text-gray-700 font-semibold hover:text-white px-2 border border-gray-500 hover:border-transparent rounded">View</a></th>
                        <th><a href="{{route('students.edit',Crypt::encrypt("$student->id"))}}" class="bg-transparent hover:bg-gray-500 text-gray-700 font-semibold hover:text-white px-2 border border-gray-500 hover:border-transparent rounded">Edit</a></th>

                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td class="records-not-found" colspan="9">Records Not Found</td>
                    </tr>
                    @endif
                </tbody>
            </table>
            <div>
                {{$students->links()}}
            </div>
        </div>
    </div>
</section>
@endsection

@section('customJs')
<script>
    let elements = document.querySelectorAll('.table-row');

    elements.forEach(function(value, index) {
        if (index % 2 == 0) {
            elements[index].classList.add("even")
        }
    });
</script>
@endsection
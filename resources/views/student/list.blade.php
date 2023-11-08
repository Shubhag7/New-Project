@extends('admin.layouts.app')

@section('content')

<div class="main-container">
    <div class="header-container">
        <header class="main-header">Students</header>
        <div class="flex">
            <a href="#">Home</a>
            <i class="fas fa-angle-right p-2" style="font-size:small; padding:6px"></i>
            <div>All Students</div>
        </div>
    </div>
    <div class="card-body">
        <div>All Students Data</div>
        <table class="table">
            <thead class="table-head">
                <tr>
                    <th>S No</th>
                    <th>Roll No</th>
                    <th>Image</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Gender</th>
                    <th>Date of birth</th>
                    <th>Phone No</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-body">
                @if($students->isNotEmpty())
                @foreach($students as $student)
                <tr class="table-row">
                    <td>{{$loop->index + 1}}</td>
                    <th>{{$student->roll_no}}</th>
                    <th>{{$student->image}}</th>
                    <th>{{$student->first_name}}</th>
                    <th>{{$student->last_name}}</th>
                    <th>{{$student->class}}</th>
                    <th>{{$student->section}}</th>
                    <th>{{$student->gender}}</th>
                    <th>{{$student->date_of_birth}}</th>
                    <th>{{$student->phone_number}}</th>
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
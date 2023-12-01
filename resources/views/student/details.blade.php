@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Student Details</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{route('students.list')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<section class="content">
    <div class="card">
        <div class="card-body">
            <div class="container py-4 flex">
                <div class="image-container px-2 w-1/4">
                    <img width="250" src="{{ asset('images/'.$student->id.'/'.$student->student_image)}}" alt="">
                </div>
                <div class="details-container w-3/4">
                    <div class="header-item flex justify-between">
                        <h2 class="font-bold text-xl"> {{$student->student_name}} </h2>
                        <div>
                            <a href="{{route('fee.detail',Crypt::encrypt("$student->id"))}}" class="bg-transparent hover:bg-gray-500 text-gray-700 font-semibold hover:text-white px-2 border border-gray-500 hover:border-transparent rounded">Fee Detail</a>
                            <a href="{{route('students.edit',Crypt::encrypt("$student->id"))}}" class="bg-transparent hover:bg-gray-500 text-gray-700 font-semibold hover:text-white px-2 border border-gray-500 hover:border-transparent rounded">Edit</a>
                        </div>
                    </div>
                    <p class="w-2/3 mt-3">{{$student->discription}}</p>
                    <table class="details w-1/2 mt-2">
                        <tbody>
                            <tr class="border-none">
                                <td class="p-2">Name :</td>
                                <td class="p-2">{{$student->student_name}}</td>
                            </tr>
                            <tr class="border-none">
                                <td class="p-2">Gender :</td>
                                <td class="p-2">
                                    @if($student->gender == 'M')
                                    Male
                                    @elseif($student->gender == 'F')
                                    Female
                                    @else
                                    Other
                                    @endif
                                </td>
                            </tr>
                            <tr class="border-none">
                                <td class="p-2">Father Name :</td>
                                <td class="p-2">{{$student->father_name}}</td>
                            </tr>
                            <tr class="border-none">
                                <td class="p-2">Mother Name :</td>
                                <td class="p-2">{{$student->mother_name}}</td>
                            </tr>
                            <tr class="border-none">
                                <td class="p-2">Date Of Birth :</td>
                                <td class="p-2">{{$student->date_of_birth}}</td>
                            </tr>
                            <tr class="border-none">
                                <td class="p-2">Religion :</td>
                                <td class="p-2">{{$student->religion}}</td>
                            </tr>
                            <tr class="border-none">
                                <td class="p-2">Email :</td>
                                <td class="p-2">{{$student->email}}</td>
                            </tr>
                            <tr class="border-none">
                                <td class="p-2">Class :</td>
                                <td class="p-2">{{$student->class}}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('customJs')

@endsection
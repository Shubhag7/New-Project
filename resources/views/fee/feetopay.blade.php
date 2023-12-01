@extends('admin.layouts.app')

@section('content')

<div class="main-container">
    <div class="header-container">
        <header class="main-header">Students</header>
        <div class="flex">
            <a href="#">Home</a>
            <i class="fas fa-angle-right p-2" style="font-size:small; padding:6px"></i>
            <div>Fee Slip</div>
        </div>
    </div>

    <div class="card-body flex justify-center">
        <div class="border rounded w-2/3">
            <div class="flex justify-between">
                <div class="ml-4 mt-2">
                    <div>RECEIPT</div>
                    <div>No : </div>
                    <div>Date : {{ now()->format('Y-m-d') }}</div>
                </div>
                <div class="mr-8">
                    <div class="text-center">Jai academy fee slip</div>
                    <div class="text-center">School address</div>
                    <div class="text-center">Phone number</div>
                </div>
            </div>
            <div class="border"></div>
            <div class="flex justify-between">
                <div class="ml-4 mt-2">
                    <div>Student Name : {{ $student->student_name}}</div>
                    <div>Father Name : {{ $student->father_name}}</div>
                    <div>The Sum of rupees : {{ $amount }}</div>
                    <div>The Sum of rupees in words : {{ ucfirst((new \App\Helpers\helper)->numberToWords($amount)) }}</div>
                    <div>Date : {{ now()->format('Y-m-d') }}</div>
                </div>
                <div class="mr-8">
                    <div class="text-center">Jai academy fee slip</div>
                    <div class="text-center">School address</div>
                    <div class="text-center">Phone number</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
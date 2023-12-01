@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Student Fee Details</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{route('fee.create',Crypt::encrypt("$studentID"))}}" class="btn btn-primary">Add Fee To Pay</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<section class="content">
    <div class="card">
        <div class="card-body">
            <form action="" method="get">
                <div class="card-header">
                    <div class="card-title">
                        <button type="button" onclick="window.location.href='{{route('fee.detail',Crypt::encrypt("$studentID"))}}'" class="btn btn-default btn-sm bg-transparent hover:bg-gray-500 text-gray-700 font-semibold hover:text-white px-2 border border-gray-500 hover:border-transparent rounded">Reset</button>
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
                        <th>Fee Type</th>
                        <th>Fee Amount</th>
                        <th>Fee Status</th>
                        <th>Include Status</th>
                        <th>Last Date to Submit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    @if($studentfees->isNotEmpty())
                    @foreach($studentfees as $studentfee)
                    <tr class="table-row">
                        <td>{{$loop->index + 1}}</td>
                        <th>{{$studentfee->fee_type}}</th>
                        <th>{{$studentfee->amount}}</th>
                        <th>{{$studentfee->fee_status}}</th>
                        <th>{{$studentfee->fee_include_status}}</th>
                        <th>{{$studentfee->last_date_to_submit}}</th>
                        <th><a href="#" class="bg-transparent hover:bg-gray-500 text-gray-700 font-semibold hover:text-white px-2 border border-gray-500 hover:border-transparent rounded">Edit</a></th>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td class="records-not-found" colspan="9">Records Not Found</td>
                    </tr>
                    @endif
                </tbody>
            </table>
            <div class="flex justify-end">
                <div class="ml-auto btn btn-default btn-sm bg-transparent hover:bg-gray-500 text-gray-700 font-semibold hover:text-white px-2 border border-gray-500 hover:border-transparent rounded mt-4">
                    <span onclick="window.location.href='{{route('feetopay',Crypt::encrypt("$studentID"))}}'"> View fee to pay </span>
                </div>
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
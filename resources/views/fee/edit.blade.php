@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add Student Fee</h1>
            </div>
            
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<section class="content">
    <div class="card">
        <div class="card-body">
            {{$studentID}}    
            <form id="feeCreate" enctype="multipart/form-data" >
                @csrf
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Fee Type*</label>
                            <select class='form-control select1' name='fee_type' id="fee_type">
                                <option value="">Please Select</option>
                                <option value="late" >Late</option>
                                <option value="pending" >Pending</option>
                            </select>
                            <p></p>
                        </div>
                        <div class="col-md-6">
                            <label>Amount *</label>
                            <input type="text" class="form-control" name="amount" id="amount">
                            <p></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Fee Status *</label>
                            <select class='form-control select1' name='fee_status' id="fee_status">
                                <option value="">Please Select</option>
                                <option value="paid" >Paid</option>
                                <option value="unpaid" >Unpaid</option>
                            </select>
                            <p></p>
                        </div>
                        <div class="col-md-6">
                            <label>Fee Include/Exclude *</label>
                            <select class='form-control select1' name='fee_include_status' id="fee_include_status">
                                <option value="">Please Select</option>
                                <option value="include" >Include</option>
                                <option value="exclude" >Exclude</option>
                            </select>
                            <p></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Last date Ot submit*</label>
                            <input type="date" class="form-control" name="last_date_to_submit" id="last_date_to_submit">
                            <p></p>
                        </div>
                    </div>
                    <input type="hidden" name="id" id="id" value="{{$studentID}}">
                </div>
                <div class="px-12 pb-4 mx-4">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="{{ url()->previous() }}" class="btn btn-outline-dark ml-3" type="reset">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@section('customJs')
<script>
    $("#feeCreate").submit(function(event){
                event.preventDefault();
                // var element = $(this).serializeArray();
                // console.log(element);
                var encryptedStudentID = "{{ Crypt::encrypt($studentID) }}";
                var url = "{{ route('fee.detail', ':encryptedStudentID') }}"

                url = url.replace(':encryptedStudentID', encryptedStudentID);
                var data = new FormData(this);
                // $("button[type=submit]").prop('disabled',true);
                $.ajax({
                    enctype: 'multipart/form-data',
                    url:'{{route("fee.store")}}',
                    type:'post',
                    data: data,
                    contentType: false,
                    processData: false,
                    success:function(response){
                        // $("button[type=submit]").prop('disabled',false);

                        if(response["status"] == true ){
                            $('#admission_type').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#student_name').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#father_name').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#mother_name').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            window.location.href=url;

                        }else {
                            
                            var errors = response['errors'];
                            console.log(errors);

                            if (errors['mother_name']){
                                $('#mother_name').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['mother_name']);
                            }else{
                                $('#mother_name').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                            if (errors['student_aadhar_number']){
                                $('#student_aadhar_number').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['student_aadhar_number']);
                            }else{
                                $('#student_aadhar_number').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                            if (errors['father_aadhar_number']){
                                $('#father_aadhar_number').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['father_aadhar_number']);
                            }else{
                                $('#father_aadhar_number').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                            if (errors['mother_aadhar_number']){
                                $('#mother_aadhar_number').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['mother_aadhar_number']);
                            }else{
                                $('#mother_aadhar_number').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                        }


                    },error:function(jqXHR, exception){
                        console.log(exception);
                    }
                })
            });
</script>
@endsection
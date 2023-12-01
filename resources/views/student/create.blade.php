@extends('admin.layouts.app')

    @section('content')

            <section class="content-header">					
                <div class="container-fluid my-2">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Student Admission form</h1>
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
                        <form id="studentCreate" enctype="multipart/form-data" >
                            @csrf
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Admission Type*</label>
                                        <select class='form-control select1' name='admission_type' id="admission_type">
                                            <option value="">Please Select</option>
                                            <option value="Regular" >Regular</option>
                                            <option value="RTE" >RTE</option>
                                            <option value="Scholarship" >Scholarship</option>
                                        </select>
                                        <p></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Student Name *</label>
                                        <input type="text" class="form-control" name="student_name" id="student_name">
                                        <p></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Gender*</label>
                                        <select class='form-control select1' name='gender' id="gender">
                                            <option value="">Please Select Gender</option>
                                            <option value="M" >Male</option>
                                            <option value="F" >Female</option>
                                            <option value="O" >Other</option>
                                        </select>
                                        <p></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Date Of Birth*</label>
                                        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Student Aadhar Number*</label>
                                        <input type="text" class="form-control" name="student_aadhar_number" id="student_aadhar_number">
                                        <p></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Blood Group</label>
                                        <select class='form-control select1' name='blood_group' id="blood_group" >
                                            <option value="">Please Select Group</option>
                                            <option value="A+">A+</option>
                                            <option value="A-" >A-</option>
                                            <option value="B+" >B+</option>
                                            <option value="B-" >B-</option>
                                            <option value="O+" >O+</option>
                                            <option value="O-" >O-</option>
                                            <option value="AB+" >AB+</option>
                                            <option value="AB-" >AB-</option>
                                        </select>
                                        <p></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Class *</label>
                                        <select class='form-control select1' name='class' id="class">
                                            <option value="">Please Select Class</option>
                                            <option value="PC">Play</option>
                                            <option value="UKG" >UKG</option>
                                            <option value="One" >One</option>
                                            <option value="Two" >Two</option>
                                            <option value="Three" >Three</option>
                                            <option value="Four" >Four</option>
                                            <option value="Five" >Five</option>
                                            <option value="Six" >Six</option>
                                            <option value="Seven" >Seven</option>
                                            <option value="Eight" >Eight</option>
                                        </select>
                                        <p></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Religion</label>
                                        <select class='form-control select1' name='religion' id="religion">
                                            <option value="">Please Select Religion</option>
                                            <option value="Hindu" >Hindu</option>
                                            <option value="Islam" >Islam</option>
                                            <option value="Christian" >Christian</option>
                                            <option value="Buddish" >Buddish</option>
                                            <option value="Sikh" >Sikh</option>
                                            <option value="Other" >Other</option>
                                        </select>
                                        <p></p>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Nationality *</label>
                                        <input type="text" class="form-control" name="nationality" id="nationality">
                                        <p></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Caste *</label>
                                        <input type="text" class="form-control" name="caste" id="caste">
                                        <p></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Category *</label>
                                        <input type="text" class="form-control" name="category" id="category">
                                        <p></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Roll No *</label>
                                        <input type="text" class="form-control" name="roll_no">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Father Name *</label>
                                        <input type="text" class="form-control" name="father_name" id="father_name">
                                        <p></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Father Aadhar Number *</label>
                                        <input type="text" class="form-control" name="father_aadhar_number" id="father_aadhar_number">
                                        <p></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Father Mobile Number 1*</label>
                                        <input type="text" class="form-control" name="father_mobile_number_1" id="father_mobile_number_1">
                                        <span class="flex"> <input class="mx-1 mt-1 checkbox" onclick="handleCheckboxClick(this)" type="checkbox" name="father_mobile_number_1_checked" id="father_mobile_number_1_checked" value="1"><label class="text-sm mt-1">Default Mobile Number</label></span>
                                        <p></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Father Mobile Number 2</label>
                                        <input type="text" class="form-control" name="father_mobile_number_2" id="father_mobile_number_2">
                                        <span class="flex"> <input class="mx-1 mt-1 checkbox" onclick="handleCheckboxClick(this)" type="checkbox" name="father_mobile_number_2_checked" id="father_mobile_number_2_checked" value="1"><label class="text-sm mt-1">Default Mobile Number</label></span>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Mother Name *</label>
                                        <input type="text" class="form-control" name="mother_name" id="mother_name">
                                        <p></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Mother Aadhar Number *</label>
                                        <input type="text" class="form-control" name="mother_aadhar_number" id="mother_aadhar_number">
                                        <p></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Mother Mobile Number 1*</label>
                                        <input type="text" class="form-control" name="mother_mobile_number_1" id="mother_mobile_number_1">
                                        <span class="flex"> <input class="mx-1 mt-1 checkbox" onclick="handleCheckboxClick(this)" type="checkbox" name="mother_mobile_number_1_checked" id="mother_mobile_number_1_checked" value="1"><label class="text-sm mt-1">Default Mobile Number</label></span>
                                        <p></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Mother Mobile Number 2</label>
                                        <input type="text" class="form-control" name="mother_mobile_number_2" id="mother_mobile_number_2">
                                        <span class="flex"> <input class="mx-1 mt-1 checkbox" onclick="handleCheckboxClick(this)" type="checkbox" name="mother_mobile_number_2_checked" id="mother_mobile_number_2_checked" value="1"><label class="text-sm mt-1">Default Mobile Number</label></span>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Email *</label>
                                        <input type="text" class="form-control" name="email" id="email">
                                        <p></p>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address" id="address">
                                        <p></p>
                                    </div>
                                    <div class="col-md-6 col-span-2" name="discreption">
                                        <label>Discreption</label>
                                        <textarea name="discription" id="discription" cols="30" rows="10" class="summernote" placeholder="Description"></textarea>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" id="student_image_id" name="student_image_id" value="">
                                        <label>Upload Student Photo (150px X 150px)</label>
                                        <div id="student_image" class="dropzone dz-clickable">
                                            <div class="dz-message needsclick">    
                                                <br>Drop files here or click to upload.<br><br>                                            
                                            </div>
                                        </div>
                                        <p></p>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="hidden" id="student_aadhar_image_id" name="student_aadhar_image_id" value="">
                                        <label>Upload Student Aadhar Photo (150px X 150px)</label>
                                        <div id="student_aadhar_image" class="dropzone dz-clickable">
                                            <div class="dz-message needsclick">    
                                                <br>Drop files here or click to upload.<br><br>                                            
                                            </div>
                                        </div>
                                        <p></p>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="hidden" id="father_aadhar_image_id" name="father_aadhar_image_id" value="">
                                        <label>Upload Father Aadhar Photo (150px X 150px)</label>
                                        <div id="father_aadhar_image" class="dropzone dz-clickable">
                                            <div class="dz-message needsclick">    
                                                <br>Drop files here or click to upload.<br><br>                                            
                                            </div>
                                        </div>
                                        <p></p>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="hidden" id="mother_aadhar_image_id" name="mother_aadhar_image_id" value="">
                                        <label>Upload Mother Aadhar Photo (150px X 150px)</label>
                                        <div id="mother_aadhar_image" class="dropzone dz-clickable">
                                            <div class="dz-message needsclick">    
                                                <br>Drop files here or click to upload.<br><br>                                            
                                            </div>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-12 pb-4 mx-4">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <a href="{{route('students.list')}}" class="btn btn-outline-dark ml-3" type="reset">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </section>


    @endsection

    @section('customJs')
        <script>
            $("#studentCreate").submit(function(event){
                event.preventDefault();
                // var element = $(this).serializeArray();
                // console.log(element);
                var data = new FormData(this);
                // $("button[type=submit]").prop('disabled',true);
                $.ajax({
                    enctype: 'multipart/form-data',
                    url:'{{route("students.store")}}',
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
                            $('#student_aadhar_number').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#father_aadhar_number').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#mother_aadhar_number').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#father_mobile_number_1').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#father_mobile_number_2').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#mother_mobile_number_1').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#mother_mobile_number_2').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#gender').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#date_of_birth').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#blood_group').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#class').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#student_image_id').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#student_aadhar_image_id').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#father_aadhar_image_id').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#mother_aadhar_image_id').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                            $('#email').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
            
                            window.location.href="{{route('students.list')}}";

                        }else {
                            
                            var errors = response['errors'];
                            console.log(errors);

                            if (errors['admission_type']){
                                $('#admission_type').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['admission_type']);
                            }else{
                                $('#admission_type').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                            if (errors['student_name']){
                                $('#student_name').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['student_name']);
                            }else{
                                $('#student_name').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                            if (errors['father_name']){
                                $('#father_name').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['father_name']);
                            }else{
                                $('#father_name').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
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
                            if (errors['father_mobile_number_1']){
                                $('#father_mobile_number_1').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['father_mobile_number_1']);
                            }else{
                                $('#father_mobile_number_1').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                            if (errors['father_mobile_number_2']){
                                $('#father_mobile_number_2').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['father_mobile_number_2']);
                            }else{
                                $('#father_mobile_number_2').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                            if (errors['mother_mobile_number_1']){
                                $('#mother_mobile_number_1').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['mother_mobile_number_1']);
                            }else{
                                $('#mother_mobile_number_1').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                            if (errors['mother_mobile_number_2']){
                                $('#mother_mobile_number_2').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['mother_mobile_number_2']);
                            }else{
                                $('#mother_mobile_number_2').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                            if (errors['gender']){
                                $('#gender').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['gender']);
                            }else{
                                $('#gender').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                            if (errors['date_of_birth']){
                                $('#date_of_birth').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['date_of_birth']);
                            }else{
                                $('#date_of_birth').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                            if (errors['blood_group']){
                                $('#blood_group').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['blood_group']);
                            }else{
                                $('#blood_group').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                            if (errors['class']){
                                $('#class').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['class']);
                            }else{
                                $('#class').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                            if (errors['student_image_id']){
                                $('#student_image_id').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['student_image_id']);
                            }else{
                                $('#student_image_id').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                            if (errors['email']){
                                $('#email').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['email']);
                            }else{
                                $('#email').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                            if (errors['student_aadhar_image_id']){
                                $('#student_aadhar_image_id').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['student_aadhar_image_id']);
                            }else{
                                $('#student_aadhar_image_id').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                            if (errors['father_aadhar_image_id']){
                                $('#father_aadhar_image_id').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['father_aadhar_image_id']);
                            }else{
                                $('#father_aadhar_image_id').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                            if (errors['mother_aadhar_image_id']){
                                $('#mother_aadhar_image_id').addClass('is-invalid')
                                .siblings('p').addClass('invalid-feedback').html(errors['mother_aadhar_image_id']);
                            }else{
                                $('#mother_aadhar_image_id').removeClass('is-invalid')
                                .siblings('p').removeClass('invalid-feedback').html("");
                            }
                
                        }


                    },error:function(jqXHR, exception){
                        console.log(exception);
                    }
                })
            });

            function handleCheckboxClick(clickedCheckbox) {
                var checkboxes = document.getElementsByClassName('checkbox');
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i] !== clickedCheckbox) {
                        checkboxes[i].disabled = clickedCheckbox.checked;
                    }
                }
            }   

            Dropzone.autoDiscover = false;    
                let dropzone = $("#student_image").dropzone({ 
                    init: function() {
                        this.on('addedfile', function(file) {
                            if (this.files.length > 1) {
                                this.removeFile(this.files[0]);
                            }
                        });
                    },
                    url:  "{{ route('temp-images.create') }}",
                    maxFiles: 1,
                    paramName: 'image',
                    addRemoveLinks: true,
                    acceptedFiles: "image/jpeg,image/png,image/gif",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }, success: function(file, response){
                        $("#student_image_id").val(response.image_id);
                        //console.log(response)
                    }
                });

                dropzone = $("#student_aadhar_image").dropzone({ 
                    init: function() {
                        this.on('addedfile', function(file) {
                            if (this.files.length > 1) {
                                this.removeFile(this.files[0]);
                            }
                        });
                    },
                    url:  "{{ route('temp-images.create') }}",
                    maxFiles: 1,
                    paramName: 'image',
                    addRemoveLinks: true,
                    acceptedFiles: "image/jpeg,image/png,image/gif",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }, success: function(file, response){
                        $("#student_aadhar_image_id").val(response.image_id);
                        //console.log(response)
                    }
                });

                dropzone = $("#father_aadhar_image").dropzone({ 
                    init: function() {
                        this.on('addedfile', function(file) {
                            if (this.files.length > 1) {
                                this.removeFile(this.files[0]);
                            }
                        });
                    },
                    url:  "{{ route('temp-images.create') }}",
                    maxFiles: 1,
                    paramName: 'image',
                    addRemoveLinks: true,
                    acceptedFiles: "image/jpeg,image/png,image/gif",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }, success: function(file, response){
                        $("#father_aadhar_image_id").val(response.image_id);
                        //console.log(response)
                    }
                });

                dropzone = $("#mother_aadhar_image").dropzone({ 
                    init: function() {
                        this.on('addedfile', function(file) {
                            if (this.files.length > 1) {
                                this.removeFile(this.files[0]);
                            }
                        });
                    },
                    url:  "{{ route('temp-images.create') }}",
                    maxFiles: 1,
                    paramName: 'image',
                    addRemoveLinks: true,
                    acceptedFiles: "image/jpeg,image/png,image/gif",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }, success: function(file, response){
                        $("#mother_aadhar_image_id").val(response.image_id);
                        //console.log(response)
                    }
                });
        </script>
    @endsection
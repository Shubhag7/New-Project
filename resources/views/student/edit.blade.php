@extends('admin.layouts.app')

    @section('content')

    <div class="main-container">
            <div class="header-container">
                <header class="main-header">Students</header>
                <div class="flex">
                    <a href="#">Home</a>
                    <i class="fas fa-angle-right p-2" style="font-size:small; padding:6px"></i>
                    <div>Student Admission form</div>
                </div>
            </div>
            <div class="card-body">
                <div>
                Edit Student Admission form
                </div>
                <form id="studentCreate" enctype="multipart/form-data">
                    
                    <div class="card">
                        <div class="grid p-6 justify-between grid-cols-4">
                            <div class="px-12">
                                <label>Admission Type*</label>
                                <select class='form-control select1' name='admission_type' id="admission_type">
                                    <option value="">Please Select</option>
                                    <option value="Regular" {{($student->admission_type == 'Regular') ? 'selected':''}}>Regular</option>
                                    <option value="RTE" {{($student->admission_type == 'RTE') ? 'selected':''}}>RTE</option>
                                    <option value="Scholarship" {{($student->admission_type == 'Scholarship') ? 'selected':''}}>Scholarship</option>
                                </select>
                                <p></p>
                            </div>
                            <div class="px-12">
                                <label>Student Name *</label>
                                <input type="text" name="student_name" id="student_name" value="{{$student->student_name}}">
                                <p></p>
                            </div>
                            <div class="px-12">
                                <label>Gender*</label>
                                <select class='form-control select1' name='gender' id="gender">
                                    <option value="">Please Select Gender</option>
                                    <option value="M" {{($student->gender == 'M') ? 'selected':''}}>Male</option>
                                    <option value="F" {{($student->gender == 'F') ? 'selected':''}}>Female</option>
                                    <option value="O" {{($student->gender == 'O') ? 'selected':''}}>Other</option>
                                </select>
                                <p></p>
                            </div>
                            <div class="px-12">
                                <label>Date Of Birth*</label>
                                <input type="date" name="date_of_birth" id="date_of_birth" value="{{$student->date_of_birth}}">
                                <p></p>
                            </div>
                        </div>
                        <div class="grid p-6 justify-between grid-cols-4">
                            <div class="px-12">
                                <label>Student Aadhar Number*</label>
                                <input type="text" name="student_aadhar_number" id="student_aadhar_number" value="{{$student->student_aadhar_number}}">
                                <p></p>
                            </div>
                            <div class="px-12">
                                <label>Blood Group</label>
                                <select class='form-control select1' name='blood_group' id="blood_group" >
                                    <option value="">Please Select Group</option>
                                    <option value="A-" {{($student->blood_group == 'A-') ? 'selected':''}}>A-</option>
                                    <option value="A+" {{($student->blood_group == 'A+') ? 'selected':''}}>A+</option>
                                    <option value="B+" {{($student->blood_group == 'B+') ? 'selected':''}}>B+</option>
                                    <option value="B-" {{($student->blood_group == 'B-') ? 'selected':''}}>B-</option>
                                    <option value="O+" {{($student->blood_group == 'O+') ? 'selected':''}}>O+</option>
                                    <option value="O-" {{($student->blood_group == 'O-') ? 'selected':''}}>O-</option>
                                    <option value="AB+" {{($student->blood_group == 'AB+') ? 'selected':''}}>AB+</option>
                                    <option value="AB-" {{($student->blood_group == 'AB-') ? 'selected':''}}>AB-</option>
                                </select>
                                <p></p>
                            </div>
                            <div class="px-12">
                                <label>Class *</label>
                                <select class='form-control select1' name='class' id="class">
                                    <option value="">Please Select Class</option>
                                    <option value="PC" {{($student->class == 'PC') ? 'selected':''}}>Play</option>
                                    <option value="UKG" {{($student->class == 'UKG') ? 'selected':''}}>UKG</option>
                                    <option value="One" {{($student->class == 'One') ? 'selected':''}}>One</option>
                                    <option value="Two" {{($student->class == 'Two') ? 'selected':''}}>Two</option>
                                    <option value="Three" {{($student->class == 'Three') ? 'selected':''}}>Three</option>
                                    <option value="Four" {{($student->class == 'Four') ? 'selected':''}}>Four</option>
                                    <option value="Five" {{($student->class == 'Five') ? 'selected':''}}>Five</option>
                                    <option value="Six" {{($student->class == 'Six') ? 'selected':''}}>Six</option>
                                    <option value="Seven" {{($student->class == 'Seven') ? 'selected':''}}>Seven</option>
                                    <option value="Eight" {{($student->class == 'Eight') ? 'selected':''}}>Eight</option>
                                </select>
                                <p></p>
                            </div>
                            <div class="px-12">
                                <label>Religion</label>
                                <select class='form-control select1' name='religion' id="religion">
                                    <option value="">Please Select Religion</option>
                                    <option value="Hindu" {{($student->religion == 'Hindu') ? 'selected':''}}>Hindu</option>
                                    <option value="Islam" {{($student->religion == 'Islam') ? 'selected':''}}>Islam</option>
                                    <option value="Christian" {{($student->religion == 'Christian') ? 'selected':''}}>Christian</option>
                                    <option value="Buddish" {{($student->religion == 'Buddish') ? 'selected':''}}>Buddish</option>
                                    <option value="Sikh" {{($student->religion == 'Sikh') ? 'selected':''}}>Sikh</option>
                                    <option value="Other" {{($student->religion == 'Other') ? 'selected':''}}>Other</option>
                                </select>
                                <p></p>
                            </div>
                            
                        </div>
                        <div class="grid p-6 justify-between grid-cols-4">
                            <div class="px-12">
                                <label>Nationality *</label>
                                <input type="text" name="nationality" id="nationality" value="{{$student->nationality}}">
                                <p></p>
                            </div>
                            <div class="px-12">
                                <label>Caste *</label>
                                <input type="text" name="caste" id="caste" value="{{$student->caste}}">
                                <p></p>
                            </div>
                            <div class="px-12">
                                <label>Category *</label>
                                <input type="text" name="category" id="category" value="{{$student->category}}">
                                <p></p>
                            </div>
                            <div class="px-12">
                                <label>Roll No *</label>
                                <input type="text" name="roll_no" value="{{$student->roll_no}}">
                                <p></p>
                            </div>
                        </div>
                        <div class="grid p-6 justify-between grid-cols-4">
                            <div class="px-12">
                                <label>Father Name *</label>
                                <input type="text" name="father_name" id="father_name" value="{{$student->father_name}}">
                                <p></p>
                            </div>
                            <div class="px-12">
                                <label>Father Aadhar Number *</label>
                                <input type="text" name="father_aadhar_number" id="father_aadhar_number" value="{{$student->father_aadhar_number}}">
                                <p></p>
                            </div>
                            <div class="px-12">
                                <label>Father Mobile Number 1*</label>
                                <input type="text" name="father_mobile_number_1" id="father_mobile_number_1" value="{{$student->father_mobile_number_1}}">
                                <span class="flex"> <input class="mx-1 mt-1 checkbox" onclick="handleCheckboxClick(this)" type="checkbox" name="father_mobile_number_1_checked" id="father_mobile_number_1_checked" value="1"><label class="text-sm mt-1">Default Mobile Number</label></span>
                                <p></p>
                            </div>
                            <div class="px-12">
                                <label>Father Mobile Number 2</label>
                                <input type="text" name="father_mobile_number_2" id="father_mobile_number_2" value="{{$student->father_mobile_number_2}}">
                                <span class="flex"> <input class="mx-1 mt-1 checkbox" onclick="handleCheckboxClick(this)" type="checkbox" name="father_mobile_number_2_checked" id="father_mobile_number_2_checked" value="1"><label class="text-sm mt-1">Default Mobile Number</label></span>
                                <p></p>
                            </div>
                        </div>
                        <div class="grid p-6 justify-between grid-cols-4">
                            <div class="px-12">
                                <label>Mother Name *</label>
                                <input type="text" name="mother_name" id="mother_name" value="{{$student->mother_name}}">
                                <p></p>
                            </div>
                            <div class="px-12">
                                <label>Mother Aadhar Number *</label>
                                <input type="text" name="mother_aadhar_number" id="mother_aadhar_number" value="{{$student->mother_aadhar_number}}">
                                <p></p>
                            </div>
                            <div class="px-12">
                                <label>Mother Mobile Number 1*</label>
                                <input type="text" name="mother_mobile_number_1" id="mother_mobile_number_1" value="{{$student->mother_mobile_number_1}}">
                                <span class="flex"> <input class="mx-1 mt-1 checkbox" onclick="handleCheckboxClick(this)" type="checkbox" name="mother_mobile_number_1_checked" id="mother_mobile_number_1_checked" value="1"><label class="text-sm mt-1">Default Mobile Number</label></span>
                                <p></p>
                            </div>
                            <div class="px-12">
                                <label>Mother Mobile Number 2</label>
                                <input type="text" name="mother_mobile_number_2" id="mother_mobile_number_2" value="{{$student->father_aadhar_number}}">
                                <span class="flex"> <input class="mx-1 mt-1 checkbox" onclick="handleCheckboxClick(this)" type="checkbox" name="mother_mobile_number_2_checked" id="mother_mobile_number_2_checked" value="1"><label class="text-sm mt-1">Default Mobile Number</label></span>
                                <p></p>
                            </div>
                        </div>
                        <div class="grid p-6 justify-between grid-cols-4">
                            <div class="px-12 col-span-2" name="discreption">
                                <label>Discreption</label>
                                <textarea class="textarea-dis" name="discription" id="discription" value="{{$student->discription}}"></textarea>
                                <p></p>
                            </div>
                            <div class="px-12">
                                <label>Email *</label>
                                <input type="text" name="email" id="email" value="{{$student->email}}">
                                <p></p>
                            </div>
                            <div class="px-12">
                                <label>Address</label>
                                <input type="text" name="address" id="address" value="{{$student->address}}">
                                <p></p>
                            </div>
                        </div>
                        <div class="grid p-6 grid-cols-4">
                            <div class="px-12 col-span-1">
                                <input type="hidden" id="student_image_id" name="student_image_id" value="">
                                <label>Upload Student Photo (150px X 150px)</label>
                                <div id="student_image" class="dropzone dz-clickable">
                                    <div class="dz-message needsclick">    
                                        <br>Drop files here or click to upload.<br><br>                                            
                                    </div>
                                </div>
                                <p></p>
                                @if(!empty($student->student_image))
                                <div>
                                    <img width="250" src="{{ asset('images/'.$student->id.'/'.$student->student_image)}}" alt="">
                                </div>
                                @endif
                            </div>
                            <div class="px-12 col-span-1">
                                <input type="hidden" id="student_aadhar_image_id" name="student_aadhar_image_id" value="">
                                <label>Upload Student Aadhar Photo (150px X 150px)</label>
                                <div id="student_aadhar_image" class="dropzone dz-clickable">
                                    <div class="dz-message needsclick">    
                                        <br>Drop files here or click to upload.<br><br>                                            
                                    </div>
                                </div>
                                <p></p>
                                @if(!empty($student->student_aadhar_image))
                                <div>
                                    <img width="250" src="{{ asset('images/'.$student->id.'/'.$student->student_aadhar_image)}}" alt="">
                                </div>
                                @endif
                            </div>
                            <div class="px-12 col-span-1">
                                <input type="hidden" id="father_aadhar_image_id" name="father_aadhar_image_id" value="">
                                <label>Upload Father Aadhar Photo (150px X 150px)</label>
                                <div id="father_aadhar_image" class="dropzone dz-clickable">
                                    <div class="dz-message needsclick">    
                                        <br>Drop files here or click to upload.<br><br>                                            
                                    </div>
                                </div>
                                <p></p>
                                @if(!empty($student->father_aadhar_image))
                                <div>
                                    <img width="250" src="{{ asset('images/'.$student->id.'/'.$student->father_aadhar_image)}}" alt="">
                                </div>
                                @endif
                            </div>
                            <div class="px-12 col-span-1">
                                <input type="hidden" id="mother_aadhar_image_id" name="mother_aadhar_image_id" value="">
                                <label>Upload Mother Aadhar Photo (150px X 150px)</label>
                                <div id="mother_aadhar_image" class="dropzone dz-clickable">
                                    <div class="dz-message needsclick">    
                                        <br>Drop files here or click to upload.<br><br>                                            
                                    </div>
                                </div>
                                <p></p>
                                @if(!empty($student->mother_aadhar_image))
                                <div>
                                    <img width="250" src="{{ asset('images/'.$student->id.'/'.$student->mother_aadhar_image)}}" alt="">
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="px-12 pb-4 mx-4">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Save</button>
                        <a href="{{route('students.list')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="reset">Cancel</a>
                    </div>
                </form>
            </div>
    </div>

    @endsection

    @section('customJs')
        <script>
            $("#studentCreate").submit(function(event){
                event.preventDefault();
                // var element = $(this).serializeArray();
                var data = new FormData(this);
                console.log(data);
                // $("button[type=submit]").prop('disabled',true);
                $.ajax({
                    enctype: 'multipart/form-data',
                    url:'{{route("students.update",$student->id)}}',
                    type:'post',
                    data: data,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
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

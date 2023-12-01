<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Fee;
use App\Models\Student;
use App\Models\StudentFee;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\TempImage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;

class StudentController extends Controller
{
    public function index(Request $request){
        $students = Student::latest();
        if(!empty($request->get('keyword'))){
            $students = $students->where('student_name','like','%'.$request->get('keyword').'%');
        }

        $students = $students->paginate(15);
        return view('student\list', compact('students'));
    }

    public function create(){
        return view('student\create');
    }

    public function store(Request $request){
        $validate1 = Validator::make($request->all(), [
            'admission_type' => 'required',
            'student_name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'student_aadhar_number' => 'required|numeric|digits:12',
            'father_aadhar_number' => 'required|numeric|digits:12',
            'mother_aadhar_number' => 'required|numeric|digits:12',
            'father_mobile_number_1' => 'required|numeric|digits:10',
            'mother_mobile_number_1' => 'required|numeric|digits:10',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'class' => 'required',
            'religion' => 'required',
            'email' => 'required|email',
            'student_image_id' => 'required',
            'student_aadhar_image_id' => 'required',
            'father_aadhar_image_id' => 'required',
            'mother_aadhar_image_id' => 'required'

        ]);
        $validate2 = Validator::make($request->all(), [
            'father_mobile_number_2' => 'exclude_unless:father_mobile_number_2_checked,"1"|numeric|digits:10',
            'mother_mobile_number_2' => 'exclude_unless:mother_mobile_number_2_checked,"1"|numeric|digits:10',
        ]);
        if($validate1->fails()){
            return response()->json([
                'status'=> false,
                'errors' => $validate1->errors()
            ]);
        }else if($validate2->fails()){
            return response()->json([
                'status'=> false,
                'errors' => $validate2->errors()
            ]);
        }else{
            $student = new Student();
            $student->admission_type = $request->admission_type;
            $student->student_name = $request->student_name;
            $student->father_name = $request->father_name;
            $student->mother_name = $request->mother_name;
            $student->student_aadhar_number = $request->student_aadhar_number;
            $student->father_aadhar_number = $request->father_aadhar_number;
            $student->mother_aadhar_number = $request->mother_aadhar_number;
            $student->father_mobile_number_1 = $request->father_mobile_number_1;
            $student->mother_mobile_number_1 = $request->mother_mobile_number_1;
            $student->gender = $request->gender;
            $student->date_of_birth = $request->date_of_birth;
            $student->blood_group = $request->blood_group;
            $student->class = $request->class;
            $student->religion = $request->religion;
            $student->nationality = $request->nationality;
            $student->caste = $request->caste;
            $student->category = $request->category;
            $student->email = $request->email;
            if($request->father_mobile_number_1_checked == 1){
                $student->official_communication_number = $request->father_mobile_number_1;
            }
            if($request->father_mobile_number_2_checked == 1){
                $student->official_communication_number = $request->father_mobile_number_2;
            }
            if($request->mother_mobile_number_1_checked == 1){
                $student->official_communication_number = $request->mother_mobile_number_1;
            }
            if($request->mother_mobile_number_2_checked == 1){
                $student->official_communication_number = $request->mother_mobile_number_2;
            }
            if(!empty($request->roll_no)){
                $student->roll_no = $request->roll_no;
            }
            if(!empty($request->father_mobile_number_2)){
                $student->father_mobile_number_2 = $request->father_mobile_number_2;
            }
            if(!empty($request->mother_mobile_number_2)){
                $student->mother_mobile_number_2 = $request->mother_mobile_number_2;
                }    
            if(!empty($request->address)){
                $student->address = $request->address;
                }
            if(!empty($request->discription)){
                $student->discription = $request->discription;
                }
            $student->save();

            //Save image he
            $path = public_path().'/images/'.$student->id;
            File::makeDirectory($path, $mode = 0777, true, true);

               // Student Image
                $tempImage = TempImage::find($request->student_image_id);
                $extArray = explode('.',$tempImage->name);
                $ext =last($extArray);

                $newImageName ='StudentImage' . time() . '.' .$ext;
                $sPath = public_path().'/temp/'.$tempImage->name;
                $dPath = public_path().'/images/'.$student->id. '/' .$newImageName; 
                
                File::copy($sPath,$dPath); 
                $student->student_image = $newImageName;
                File::delete(public_path('/temp/'.$tempImage->name));
                $tempImage->delete();

                // Student adhar Image
                $tempImage = TempImage::find($request->student_aadhar_image_id);
                $extArray = explode('.',$tempImage->name);
                $ext =last($extArray);

                $newImageName ='student_aadhar_image' . time() . '.' .$ext;
                $sPath = public_path().'/temp/'.$tempImage->name;
                $dPath = public_path().'/images/'.$student->id. '/' .$newImageName;

                File::copy($sPath,$dPath); 
                $student->student_aadhar_image = $newImageName;
                File::delete(public_path('/temp/'.$tempImage->name));
                $tempImage->delete();

                // Father adhar Image
                $tempImage = TempImage::find($request->father_aadhar_image_id);
                $extArray = explode('.',$tempImage->name);
                $ext =last($extArray);

                $newImageName ='father_aadhar_image' . time() . '.' .$ext;
                $sPath = public_path().'/temp/'.$tempImage->name;
                $dPath = public_path().'/images/'.$student->id. '/' .$newImageName;

                File::copy($sPath,$dPath); 
                $student->father_aadhar_image = $newImageName;
                File::delete(public_path('/temp/'.$tempImage->name));
                $tempImage->delete();

                 // Mother adhar Image
                 $tempImage = TempImage::find($request->mother_aadhar_image_id);
                 $extArray = explode('.',$tempImage->name);
                 $ext =last($extArray);
 
                 $newImageName ='mother_aadhar_image' . time() . '.' .$ext;
                 $sPath = public_path().'/temp/'.$tempImage->name;
                 $dPath = public_path().'/images/'.$student->id. '/' .$newImageName;
 
                 File::copy($sPath,$dPath); 
                 $student->mother_aadhar_image = $newImageName;
                File::delete(public_path('/temp/'.$tempImage->name));
                $tempImage->delete();

                // Generate Image thumbnail
                // $dPath = public_path().'/uploads/category/thumb/'.$newImageName;
                // $img = Image::make($sPath);
                // $img->resize(450, 600);
                // $img->fit(450, 600, function ($constraint) {
                //     $constraint->upsize();
                // });
                // $img->save($dPath);

                $student->save();

        //Creating admission fee for studen
        $admissionFee = new StudentFee();
        $admissionFee->student_id = $student->id;

        $amount = Fee::where('fee_type','admission')->first();

        $admissionFee->amount = $amount->amount;
        $admissionFee->fee_type = 'admission';
        $admissionFee->fee_status = 'unpaid';
        $admissionFee->fee_include_status = 'include';

        // Get the current date using Carbon
        $currentDate = Carbon::today();

        // Add 10 days to the current date
        $futureDate = $currentDate->addDays(10);

        $admissionFee->last_date_to_submit = $futureDate;
        $admissionFee->save();

        // creating regular fee for student

        $admissionFee = new StudentFee();
        $admissionFee->student_id = $student->id;

        $amount = Fee::where('fee_type','regular')->where('class',$student->class)->first();

        $admissionFee->amount = $amount->amount;
        $admissionFee->fee_type = 'regular';
        $admissionFee->fee_status = 'unpaid';
        $admissionFee->fee_include_status = 'include';

        // Get the current date using Carbon
        $currentDate = Carbon::today();

        // Add 10 days to the current date
        $futureDate = $currentDate->addDays(10);

        $admissionFee->last_date_to_submit = $futureDate;
        $admissionFee->save();







            // $path = public_path('images/'.$request->email);

            // $imageName = 'StudentImage' . time() . '.' . $request->student_image->extension();
            // $request->student_image->move($path, $imageName);

            // $student->student_image = $imageName;

            // $imageName = 'student_aadhar_image' . time() . '.' . $request->student_aadhar_image->extension();
            // $request->student_aadhar_image->move($path, $imageName);

            // $student->student_aadhar_image = $imageName;

            // $imageName = 'father_aadhar_image' . time() . '.' . $request->father_aadhar_image->extension();
            // $request->father_aadhar_image->move($path, $imageName);

            // $student->father_aadhar_image = $imageName;

            // $imageName = 'mother_aadhar_image' . time() . '.' . $request->mother_aadhar_image->extension();
            // $request->mother_aadhar_image->move($path, $imageName);

            // $student->mother_aadhar_image = $imageName;
            
            // $student->save();

             return response()->json([
                'status'=> true,
                'message' => 'Category added succesfully'
            ]);
        }
    }

    public function edit($id, Request $request){
        // echo Crypt::decrypt($request->id);
        $student = Student::find(Crypt::decrypt($id));
        // echo $student;
        return view('student\edit', compact('student'));
    }

    public function Update($id, Request $request){

        $student = Student::find($id);

        $validate1 = Validator::make($request->all(), [
            'admission_type' => 'required',
            'student_name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'student_aadhar_number' => 'required|numeric|digits:12',
            'father_aadhar_number' => 'required|numeric|digits:12',
            'mother_aadhar_number' => 'required|numeric|digits:12',
            'father_mobile_number_1' => 'required|numeric|digits:10',
            'mother_mobile_number_1' => 'required|numeric|digits:10',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'class' => 'required',
            'religion' => 'required',
            'email' => 'required|email',
        ]);
        $validate2 = Validator::make($request->all(), [
            'father_mobile_number_2' => 'exclude_unless:father_mobile_number_2_checked,"1"|numeric|digits:10',
            'mother_mobile_number_2' => 'exclude_unless:mother_mobile_number_2_checked,"1"|numeric|digits:10',
        ]);
        if($validate1->fails()){
            return response()->json([
                'status'=> false,
                'errors' => $validate1->errors()
            ]);
        }else if($validate2->fails()){
            return response()->json([
                'status'=> false,
                'errors' => $validate2->errors()
            ]);
        }else{
            $student->admission_type = $request->admission_type;
            $student->student_name = $request->student_name;
            $student->father_name = $request->father_name;
            $student->mother_name = $request->mother_name;
            $student->student_aadhar_number = $request->student_aadhar_number;
            $student->father_aadhar_number = $request->father_aadhar_number;
            $student->mother_aadhar_number = $request->mother_aadhar_number;
            $student->father_mobile_number_1 = $request->father_mobile_number_1;
            $student->mother_mobile_number_1 = $request->mother_mobile_number_1;
            $student->gender = $request->gender;
            $student->date_of_birth = $request->date_of_birth;
            $student->blood_group = $request->blood_group;
            $student->class = $request->class;
            $student->religion = $request->religion;
            $student->nationality = $request->nationality;
            $student->caste = $request->caste;
            $student->category = $request->category;
            $student->email = $request->email;
            if($request->father_mobile_number_1_checked == 1){
                $student->official_communication_number = $request->father_mobile_number_1;
            }
            if($request->father_mobile_number_2_checked == 1){
                $student->official_communication_number = $request->father_mobile_number_2;
            }
            if($request->mother_mobile_number_1_checked == 1){
                $student->official_communication_number = $request->mother_mobile_number_1;
            }
            if($request->mother_mobile_number_2_checked == 1){
                $student->official_communication_number = $request->mother_mobile_number_2;
            }
            if(!empty($request->roll_no)){
                $student->roll_no = $request->roll_no;
            }
            if(!empty($request->father_mobile_number_2)){
                $student->father_mobile_number_2 = $request->father_mobile_number_2;
            }
            if(!empty($request->mother_mobile_number_2)){
                $student->mother_mobile_number_2 = $request->mother_mobile_number_2;
                }    
            if(!empty($request->address)){
                $student->address = $request->address;
                }
            if(!empty($request->discription)){
                $student->discription = $request->discription;
                }
            $student->save();

            //Save image he
            // $path = public_path().'/images/'.$request->email;
            // File::makeDirectory($path, $mode = 0777, true, true);

               // Student Image
               if(!empty($request->student_image_id)){
                    $tempImage = TempImage::find($request->student_image_id);
                    $extArray = explode('.',$tempImage->name);
                    $ext =last($extArray);

                    $newImageName ='StudentImage' . time() . '.' .$ext;
                    $sPath = public_path().'/temp/'.$tempImage->name;
                    $dPath = public_path().'/images/'.$student->id. '/' .$newImageName; 
                    
                    File::copy($sPath,$dPath); 
                    $student->student_image = $newImageName;
                    File::delete(public_path('/temp/'.$tempImage->name));
                    $tempImage->delete();
               }

                // Student adhar Image
                if(!empty($request->student_aadhar_image_id)){
                    $tempImage = TempImage::find($request->student_aadhar_image_id);
                    $extArray = explode('.',$tempImage->name);
                    $ext =last($extArray);

                    $newImageName ='student_aadhar_image' . time() . '.' .$ext;
                    $sPath = public_path().'/temp/'.$tempImage->name;
                    $dPath = public_path().'/images/'.$student->id. '/' .$newImageName;

                    File::copy($sPath,$dPath); 
                    $student->student_aadhar_image = $newImageName;
                    File::delete(public_path('/temp/'.$tempImage->name));
                    $tempImage->delete();
                }
                // Father adhar Image
                if(!empty($request->father_aadhar_image_id)){
                    $tempImage = TempImage::find($request->father_aadhar_image_id);
                    $extArray = explode('.',$tempImage->name);
                    $ext =last($extArray);

                    $newImageName ='father_aadhar_image' . time() . '.' .$ext;
                    $sPath = public_path().'/temp/'.$tempImage->name;
                    $dPath = public_path().'/images/'.$student->id. '/' .$newImageName;

                    File::copy($sPath,$dPath); 
                    $student->father_aadhar_image = $newImageName;
                    File::delete(public_path('/temp/'.$tempImage->name));
                    $tempImage->delete();
                }
                 // Mother adhar Image
                if(!empty($request->mother_aadhar_image_id)){
                    $tempImage = TempImage::find($request->mother_aadhar_image_id);
                    $extArray = explode('.',$tempImage->name);
                    $ext =last($extArray);
    
                    $newImageName ='mother_aadhar_image' . time() . '.' .$ext;
                    $sPath = public_path().'/temp/'.$tempImage->name;
                    $dPath = public_path().'/images/'.$student->id. '/' .$newImageName;
    
                    File::copy($sPath,$dPath); 
                    $student->mother_aadhar_image = $newImageName;
                    File::delete(public_path('/temp/'.$tempImage->name));
                    $tempImage->delete();
                }

                $student->save();
             return response()->json([
                'status'=> true,
                'message' => 'Category added succesfully'
            ]);
        }
    }

    public function details($id,Request $request){

        $student = Student::find(Crypt::decrypt($id));
        // echo $student;
        return view('student\details', compact('student'));
    
    }  
    

}

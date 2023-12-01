<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fee;
use App\Models\Student;
use Illuminate\Support\Facades\Crypt;
use App\Models\StudentFee;

class FeeController extends Controller
{
    public function create($id){

        $studentID = Crypt::decrypt($id);

        $data['studentID'] = $studentID;

        return view('fee\create',$data);
    }

    public function store(Request $request){

        $fee = new StudentFee();

       $fee->student_id  = $request->id;
       $fee->amount  = $request->amount;
       $fee->fee_type  = $request->fee_type;
       $fee->fee_status  = $request->fee_status;
       $fee->fee_include_status  = $request->fee_include_status;
       $fee->last_date_to_submit  = $request->last_date_to_submit;
       $fee->save();

       return response()->json([
        'status'=> true,
        'message' => 'Fee added succesfully'
    ]);

    }

    public function feeDetail($id,Request $request){

        $studentID = Crypt::decrypt($id);
        
        if(!empty($request->get('keyword'))){
            $studentfees = StudentFee::where('student_id',Crypt::decrypt($id))->where('fee_status','like','%'.$request->get('keyword').'%')->get();
        }else{
            $studentfees = StudentFee::where('student_id',Crypt::decrypt($id))->get();
        }
        //  echo $studentfees;
        $data = [];

        $data['studentID'] = $studentID;
        $data['studentfees'] = $studentfees;

        return view('fee\feelist', $data);
    
    } 

    public function feetopay($id){

        $studentID = Crypt::decrypt($id);

        $student = Student::find($studentID);

        $studentUnpaidFees = StudentFee::where('student_id',$studentID)->where('fee_status','unpaid')->get();

        $data = [];
        $amount = 0;

        foreach($studentUnpaidFees as $studentUnpaidFee){

            $amount = $amount + $studentUnpaidFee->amount;

        }


        $data['student'] = $student;
        $data['amount'] = $amount;

        // echo $amount;
        // echo $data['studentUnpaidFee'];

        return view('fee\feetopay', $data);
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\StudentFee;
use App\Models\Fee;
use App\Models\Student;
use Carbon\Carbon;



class StudentFeeUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:student-fee-update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'to create quaterly fee';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $allStudents = Student::all();

        foreach($allStudents as $student){
            //Creating quaterly fee for studen
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
        }
    }
}

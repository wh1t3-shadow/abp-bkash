<?php

namespace App\Http\Controllers\studentAdmission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomAuthModel;
use App\Models\courseInfoModel;
use App\Models\AdmissionPendingList;
use App\Models\AdmissionAcceptanceList;
use Illuminate\Support\Facades\Session;

class StudentAdmissionController extends Controller
{
    //
    public function studentAdmissionView()
    {
        $courseName = courseInfoModel::all();
        $admissionPendingData = AdmissionPendingList::all();
        $userCredential = CustomAuthModel::all();
        $userId = Session::get('userid');

        // if($userId == 1)
        // {
        return view('pages.backend.studentAdmission.index', compact('courseName', 'admissionPendingData', 'userId', 'userCredential'));
        // }
        // else
        // {
        //     return view('pages.backend.studentAdmission.index', compact('courseName', 'admissionPendingData', 'userId'));
        // }


        // if (Session::has('useremail') && Session::has('userpass')) {

        //     return view('pages.backend.studentAdmission.index', compact('courseName', 'admissionPendingData'));
        // }
        // return redirect('/');
    }

    public function studentAdmissionCreate(Request $req)
    {
        $studentAdmit = new AdmissionPendingList();

        $studentAdmit->student_name = $req->studentName;
        $studentAdmit->course_title_id = $req->courseName;
        $studentAdmit->student_email = $req->studentEmail;
        $studentAdmit->student_phone = $req->studentPhone;

        ///
        $varName = $req->studentName;
        $varPhone = $req->studentPhone;
        $phoneLength = strlen($varPhone);
        $varEmail = $req->studentEmail;
        $studentId = '';
        $studentId .= $varName[0];
        $studentId .= $varName[1];
        $studentId .= $varName[2];

        $studentId .= $varEmail[0];
        $studentId .= $varEmail[1];
        $studentId .= $varEmail[2];

        $studentId .= $varPhone[$phoneLength - 4];
        $studentId .= $varPhone[$phoneLength - 3];
        $studentId .= $varPhone[$phoneLength - 2];
        $studentId .= $varPhone[$phoneLength - 1];

        $studentAdmit->student_id = $studentId;
        $studentAdmit->student_payment_status = $req->studentPaymentStatus;
        $studentAdmit->student_due_amount = $req->studentDueAmount;

        $studentAdmit->save();

        return redirect('/student-admit/view');
    }

    public function studentAdmissionAccept($id)
    {
        $studentAdmissionPending = AdmissionPendingList::findOrFail($id);

        $studentAdmissionAccept = new AdmissionAcceptanceList();

        $userId = Session::get('userid');


        $studentAdmissionAccept->student_name = $studentAdmissionPending->student_name;
        $studentAdmissionAccept->student_email = $studentAdmissionPending->student_email;
        $studentAdmissionAccept->student_phone =  $studentAdmissionPending->student_phone;
        $studentAdmissionAccept->student_id = $studentAdmissionPending->student_id;
        $studentAdmissionAccept->student_enroll_course_id = $studentAdmissionPending->course_title_id;

        $studentAdmissionAccept->save();

        $studentAdmissionPending->delete();

        return redirect('/student-admit/view');
    }

    public function studentAdmissionEditView($id)
    {
        $courseInfo = courseInfoModel::all();
        $studentAdmissionPending = AdmissionPendingList::findOrFail($id);
        // $userId = Session::get('userid');


            return view('pages.backend.studentAdmission.edit', compact('courseInfo', 'studentAdmissionPending'));

    }

    public function studentAdmissionEditUpdate($id, Request $req)
    {
        $studentAdmissionPending = AdmissionPendingList::findOrFail($id);

        $studentAdmissionPending->student_name = $req->studentName;
        $studentAdmissionPending->course_title_id = $req->courseName;
        $studentAdmissionPending->student_email = $req->studentEmail;
        $studentAdmissionPending->student_phone = $req->studentPhone;

        ///
        $varName = $req->studentName;
        $varPhone = $req->studentPhone;
        $phoneLength = strlen($varPhone);
        $varEmail = $req->studentEmail;
        $studentId = '';
        $studentId .= $varName[0];
        $studentId .= $varName[1];
        $studentId .= $varName[2];

        $studentId .= $varEmail[0];
        $studentId .= $varEmail[1];
        $studentId .= $varEmail[2];

        $studentId .= $varPhone[$phoneLength - 4];
        $studentId .= $varPhone[$phoneLength - 3];
        $studentId .= $varPhone[$phoneLength - 2];
        $studentId .= $varPhone[$phoneLength - 1];

        $studentAdmissionPending->student_id = $studentId;
        $studentAdmissionPending->student_payment_status = $req->studentPaymentStatus;
        $studentAdmissionPending->student_due_amount = $req->studentDueAmount;


        $studentAdmissionPending->save();

        return redirect('/student-admit/view');
    }


    public function studentAdmissionDelete($id)
    {
        $studentAdmissionPending = AdmissionPendingList::findOrFail($id);
        // $userId = Session::get('userid');



            $studentAdmissionPending->delete();

            return redirect('/student-admit/view');
        
    }
}

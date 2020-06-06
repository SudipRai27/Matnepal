<?php

namespace Modules\Messages\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\ContactMessages;
use App\EnrollMessage;
use App\InstructorMessages;
use Session;
use DB;
use File;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Responses
     */
    public function getContactMessages()
    {
        $messages = ContactMessages::orderBy('created_at', 'DESC')->paginate(6);
        return view('messages::list-contact-messages')->with('messages', $messages);
    }

    public function getViewContactMessage($id)  
    {
        $messages = ContactMessages::findOrFail($id);
        return view('messages::view-contact-messages')->with('messages', $messages);
    }

    public function getDeleteMessage($id)
    {
        $messages = ContactMessages::findOrFail($id);   
        $messages->delete();
        Session::flash('success-msg', 'Deleted Successfully');
        return redirect()->back();
    }

    public function getListEnrollMessage()
    {
        $messages = EnrollMessage::orderBy('created_at', 'DESC')->paginate(6);
        return view('messages::list-enroll-message')->with('messages', $messages);
    }

    public function getViewEnrollMessage($id)
    {
        $messages = EnrollMessage::findOrFail($id);
        $interested_course = DB::table('courses')->where('id', $messages->course_id)->first();
        return view('messages::view-enroll-message')->with('messages', $messages)
                                                    ->with('interested_course', $interested_course);
    }

    public function getDeleteEnrollMessage($id)
    {
        $messages = EnrollMessage::findOrFail($id);
        $messages->delete();
        Session::flash('success-msg', 'Deleted Successfully');
        return redirect()->back();
    }
    
    public function getInstructorMessage()
    {
        $messages = InstructorMessages::orderBy('created_at', 'DESC')->paginate(6);
        return view('messages::list-instructor-message')->with('messages', $messages);
    }

    public function getDownloadCV($id)
    {
        $instructor = InstructorMessages::findOrFail($id);

        $file_path = public_path()."/instructor_cv/{$instructor->file}";

        if(File::exists($file_path)) {

            return response()->download($file_path);    
             
        }
        else
        {
            Session::flash('error-msg','No File Found');
            return redirect()->back();
        }       

    }

    public function getDeleteInstructorMessage($id)
    {
        $instructor = InstructorMessages::findOrFail($id);
        
        $file_path = public_path()."/instructor_cv/{$instructor->file}";
        
        if(File::exists($file_path)) {
            File::delete($file_path);
        }

        $instructor->delete();
        Session::flash('success-msg', 'instructor Deleted successfully');
        return redirect()->back();
    }
}

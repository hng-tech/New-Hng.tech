<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PostController extends Controller
{

  public function JoinNow(Request $request)
  {

                //insert into database
              DB::table('interns')->insert([
                    'full_name' => $request->full_name,
                    'email' => $request->email,
                    'phone_number' => $request->phone_number,
                    'tech_interest' => $request->tech_interest,
                    'experience' => $request->experience,
                    'internship_reason' => $request->internship_reason
                ]);

                //redirect after submission
              return redirect()->back()->with('message', 'Thank you for joining us...see you at the next internship!
              ');




  }

  public function contact(Request $request)
  {


       $visitor_name = $request->visitor_name;
       $visitor_email = $request->visitor_email;
       $visitor_message = $request->visitor_message;
       $visitor_name = filter_var($visitor_name, FILTER_SANITIZE_STRING);
       $email_message="<p>You have a new contact from your website<br>
       Visitor Name: $visitor_name. <br>
       isitor Email: $visitor_email <br>
       Message: $visitor_message <br>
       </p>";
       $subject="New contact form";


       if(!filter_var($visitor_email, FILTER_VALIDATE_EMAIL)){
           return redirect()->back()->with('message', "Invalid email");
       }
       else if(empty($visitor_message)) {
           return redirect()->back()->with('message',"Please submit a message");
       }
       else{
           // subit the form now
           $recipient = $request->visitor_email ;

           $from = "Cole Eremoh HNG Intern";

           // CALL MEMBERSDRIVE SIMPLE REST MAIL API USING GET METHOD
               // PREPARE THE PARAMETERS

           // encode email parameters
           $email_message=urlencode($email_message);
           $from=urlencode($from);
           $subject=urlencode($subject);
           $email_message=urlencode($email_message);
           // END POINT
           $MembersdriveMailerEndpoint="https://www.app.membersdrive.com/MailAPI?to=".$recipient."&from=".$from."&subject=".$subject."&body=".$email_message."&userid=cole_hng&replyto=$from";
           if(file_get_contents($MembersdriveMailerEndpoint)=="OK") {
              return redirect()->back()->with('message', "Thank you for contating us $visitor_name");
           }
           else{
              return redirect()->back()->with('message', "Mail not configuredxxxxxxxxx");
           }
       }

   }



}

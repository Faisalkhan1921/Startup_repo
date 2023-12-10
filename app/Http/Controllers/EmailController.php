<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class EmailController extends Controller
{
    //
    public function index()
    {
        return view('email.index');
    }

    public function send(Request $request)
    {
        $vendor = Vendor::all();
        $uploadedFile = $request->file('attach');   
        $sendemail = $request->sendemail;
        $chechvendor = Vendor::where('email', $sendemail)->get();
        $sub = $request->sub;
        $email = "info@flatrategrievances.com";
        $name = "Ritik Advani";
        $desc = $request->desc;
    
        // Assuming $request->attach is the uploaded file
    
        // Ensure the file is not null before processing
        if ($chechvendor->isNotEmpty()) {
            if ($uploadedFile) {
                try {
                    // Save the file to a temporary location
                    $tempPath = sys_get_temp_dir();
                    $fileName = $uploadedFile->getClientOriginalName();
                    $uploadedFile->move($tempPath, $fileName);
    
                    // Attach the file from the temporary location
                    $filePath = $tempPath . '/' . $fileName;
    
                    // Other mail configuration and sending code here...
                    require 'PHPMailer/vendor/autoload.php';
                    $mail = new PHPMailer(true);
                    $mail->SMTPDebug = 0;
                    $mail->isSMTP();
                    $mail->Host       = 'sandbox.smtp.mailtrap.io';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = '8a44655ec7ab79';
                    $mail->Password   = '3709124318c7ac';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 2525;
                    $mail->setFrom($email, $name);
                    $mail->addAddress($sendemail);
                    $mail->addAttachment($filePath);
                    $mail->isHTML(true);
                    $mail->Subject = $sub;
                    $mail->Body    = $desc;
    
                    $dt = $mail->send();
                    if ($dt) {
                        return redirect()->back()->with('message', 'Email Send Successfully');
                    } else {
                        return redirect()->back()->with('error', 'Something Went Wrong');
                    }
    
                    // Remove the temporary file after attaching
                    unlink($filePath);
                } catch (Exception $e) {
                    // Handle exceptions if any
                    echo 'Caught exception: ' . $e->getMessage();
                }
            } else {
                // Handle the case where no file is uploaded
                echo 'No file uploaded.';
            }
        } else {
            return redirect()->back()->with('error', 'Email not found in Whie List');
        }
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{


    public function store(Request $request)
    {

        if ($request->has('email')) {

            $name = $request->input('name');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $subject = "Contact Message from Doctors Charity Website";
            $message = $request->input('message');

            // Form validation
            if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {

                // reCAPTCHA validation
                if ($request->has('g-recaptcha-response') && !empty($request->input('g-recaptcha-response') )) {

                    // Google secret API
                    $secretAPIkey = env("RECAPTCHA_SECRET_KEY");

                    // reCAPTCHA response verification
                    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretAPIkey . '&response=' . $_POST['g-recaptcha-response']);

                    // Decode JSON data
                    $response = json_decode($verifyResponse);
                    if ($response->success) {

                        $toMail = "info@doctorscharity.com";

                        $header = 'From: Website < noreply@doctorscharity.com >' . "\r\n";
                        $header .= 'Cc:obekpa@gmail.com' . "\r\n";
                        $header .= "MIME-Version: 1.0\r\n";
                        $header .= "Content-type: text/html\r\n";

                        $body  = '<table style="padding: 35px; background-color: #f5f5f5; font-family: Roboto, sans-serif; font-size: 1rem; text-align: left; border-radius: 4px">';
                        $body .= '<tr><th style="font-size: 1.5rem; color: #1E50BC">Full name : </th><th style="font-size: 1rem; font-weight: 500; color: #1E50BC">'.$name.'</th></tr>';
                        $body .= '<tr><th style="font-size: 1.5rem; color: #1E50BC">Email address : </th><th style="font-size: 1rem; font-weight: 500; color: #1E50BC">'.$email.'</th></tr>';
                        $body .= '<tr><th style="font-size: 1.5rem; color: #1E50BC">Message : </th><th style="font-size: 1rem; font-weight: 500; color: #1E50BC">'.$message.'</th></tr>';
                        $body .= '</table>';

                        $mail = mail($toMail, $subject, $body, $header);
                        if($mail){
                            $response = array(
                                "status" => "alert-success",
                                "message" => "Your mail has been sent. We will get back to you shortly."
                            );
                        }
                        else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "Oops, something went wrong. Please try again."
                            );
                        }

                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Robot verification failed, please try again."
                        );
                    }
                } else {
                    $response = array(
                        "status" => "alert-danger",
                        "message" => "Please check on the reCAPTCHA box."
                    );
                }
            } else {
                $response = array(
                    "status" => "alert-danger",
                    "message" => "All the fields are required."
                );
            }

            return redirect()->to(url()->previous().'#contact')->with($response);
        }

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SMTPController extends Controller
{
    public function viewForm()
    {
      return view('email');
    }

    public function sendMail(Request $r)
    {
      $email = $r->input('email');
      $subject = $r->input('subject');
      $html = $r->input('message');

      try {
        $a = new \PHPMailer(true);
        $a->isSMTP();
        $a->CharSet = "utf-8";
        $a->SMTPAuth = true;
        $a->SMTPSecure = "tls";
        $a->Host = "smtp.gmail.com";
        $a->Port = 587;
        $a->Username = "ichsanfirdaus99@gmail.com";
        $a->Password = "jakarta1999";
        $a->SetFrom("admin@ska.dev", "Admin");
        $a->Subject = $subject;
        $a->MsgHTML($html);
        $a->addAddress($email);
        $a->send();

        return redirect(url('email'));
      } catch (Exception $e) {
        dd($e);
      }

    }
}

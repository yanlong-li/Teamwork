<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Mail;

class MailController extends Controller
{
    //邮件发送组件

    public function resetPassword($name)
    {
        Mail::send('emails.test', ['name' => $name], function ($message) {
            $to = 'admin@yanlongli.com';
            $message->to($to)->subject('邮件测试');
        });
    }
}

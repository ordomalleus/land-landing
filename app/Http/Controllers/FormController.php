<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function __construct()
    {

    }

    public function formSubmit(Request $request)
    {
        $mail = $request->all();

        //Отправляем письмо
        try {
            Mail::to('nikolaeva.os@mail.ru')->send(new OrderMail($mail));
        } catch (\Exception $e) {
        }

        return response([
            'response' => $mail,
        ]);
    }
}

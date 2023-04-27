<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report(Request $request)
    {
        $elreport = new Report;
        $elreport->name = $request->name;
        $elreport->phone = $request->phone;
        $elreport->message = $request->message;
        $elreport->save();
        $token = '5955660621:AAG6UMX9HJIaA421SOVAvecAXfp6A4Wout4';
        $chat_id = 700727696;
        $text = '<b>' . 'Ismi: ' . $request->name . '</b>' . '%0A' . '<b>' . 'Telefon raqami: ' . $request->phone . '</b>' . '%0A' . '<b>' . 'Message: ' . $request->message . '</b>';
        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}", "r");
        if (!$sendToTelegram) {
            echo "Failed";
            // return redirect('/');
        }
        return view('success');
    }
}

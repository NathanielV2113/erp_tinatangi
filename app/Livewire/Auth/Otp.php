<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Http\Request;
use App\Http\Controllers\SendEmail;

#[Layout('components.layouts.auth')]
class Otp extends Component
{
    public function render(Request $request)
    {
        $otp = random_int(10000000, 99999999);
        $data = new \stdClass();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = 'Email Verification';
        $data->body = '
                        <div style="text-align: start; background-color: #f3e9dc; border-radius: 10px; padding: 20px;">
                            <div style="margin-left:30px;">
                                <h3>Your One-Time Password (OTP) is.</h3>
                                <h1 style="color: #f8b400; font-size: 40px;">' . $otp . '</h1>
                                <br>
                                <p>Hey there ' . $request->name . ',</p>
                                <p>Welcome to Tinatangi Café! <br>
                                <br>To complete your registration, please use this One-Time Password (OTP).</p>
                                <br>
                                <p>We look forward to serving you!</p>
                                <p>Thank you for choosing Tinatangi Café!</p>
                                <p>Best regards,<br>Tinatangi Café</p>
                            </div>
                        </div>
            ';
        $email = new SendEmail();
        $email->sendEmail($data);
        return view('livewire.auth.otp', ['request' => $request, 'otp' => $otp]);
    }
}

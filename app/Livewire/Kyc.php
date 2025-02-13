<?php

namespace App\Livewire;

use App\Mail\MainEmailDesignMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Kyc extends Component
{
    public $otp;
    public function verifyOtp()
    {
        $user = Auth::user();
        // Check if the entered OTP matches the one in the database
        if ($this->otp != '') {
            if ($user->google_id == $this->otp) {
                // OTP is correct, update google_id to null and google_auth to 1 (verified)
                User::where('id', $user->id)->update([
                    'google_id' => null,
                    'google_auth' => 2
                ]);
                session()->flash('otpSuccess', 'OTP Verified. KYC Under review.');
                session()->flash('success', 'OTP Verified. KYC Under review.');
                $this->dispatch('otpVerified');
            } else {
                // OTP is incorrect
                session()->flash('otpError', 'Incorrect OTP. Please enter the exact OTP sent to you!');
            }
        } else {
            session()->flash('mailFailed', 'Plese enter the OTP sent to your email');
            
        }
        
        $this->otp = null;
    }
    public function sendOtp()
    {
        $user = Auth::user();
        $otp = random_int(1000, 9999);
        User::where('id', $user->id)->update(['google_id' => $otp]);
        $emailData = [
            'email' => $user->email,
            'subject' => "Your KYC OTP Verification Code",
            'message' => "Dear $user->lastname,<br><br> To verify the authencity of your Kyc. Enter the verification code below <br/> $otp <br/><br/> <strong style='font-size: 22px;'>Best Regards!</strong><br> Motion Captital Asset",
        ];
        try {
            Mail::to($emailData['email'])
                // ->bcc('support@motionglobalventures.com')
                ->send(new MainEmailDesignMail($emailData));
            session()->flash('mailSent', 'OTP Sent Successfully');

        } catch (\Throwable $th) {
            //throw $th;
            // dd($th);
            session()->flash('mailFailed', 'Failed To Send OTP!');
        }
    }
    public function render()
    {
        return view('livewire.kyc', [
            'user' => Auth::user(),
        ]);
    }
}

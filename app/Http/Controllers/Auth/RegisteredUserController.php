<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\DynamicMail;
use App\Mail\MainEmailDesignMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            // 'plan' => ['required', 'string', 'max:255'],
            'account_type' => ['required', 'string'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if (request()->has('sponsor_id')) {
            $sponsorId = User::where('user_ref_id', request('sponsor_id'))->pluck('id')->first();
            // Use $sponsorId if it exists
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'phone_number' => $request->number,
                'account_type' => $request->account_type,
                'password' => Hash::make($request->password),
                "pv" => $request->password,
                'referral_id' => $sponsorId,
                'user_ref_id' => rand(4678127374, 938209174274),
            ]);
        } else {
            // If sponsorId is not present, set it to null
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'phone_number' => $request->number,
                'account_type' => $request->account_type,
                'password' => Hash::make($request->password),
                "pv" => $request->password,
                'referral_id' => '',
                'user_ref_id' => rand(4678127374, 938209174274),
            ]);
        }
        $emailData = [
            'email' => $request->email,
            'subject' => 'Welcome To B2Gold Investments',
            'message' => "Dear Valued $request->lastname, <br><br> Welcome to B2Gold! We are delighted to confirm your registration with us. As a registered member, you are now part of a community dedicated to excellence, innovation, and sustainable mining practices. <br><br> Thank you for joining us. We look forward to sharing our journey and success with you.",
        ];

        $data = [
            'name' => $request->firstname . ' ' . $request->lastname,
            'email' => $request->email,
            'id' => $user->id,
            'subject' => 'New User Register Alert',
            'message' => "Admin Motion Asset, <br><br>Hope this email finds you well. This is to inform you that a new client has registered in your website.",
        ];

        event(new Registered($user));

        Auth::login($user);
        try {
            Mail::to('itsafranco2023@gmail.com')
                ->bcc('support@motionglobalventures.com')
                ->send(new MainEmailDesignMail($data));

            Mail::to($emailData['email'])
                // ->bcc('support@motionglobalventures.com')
                ->send(new MainEmailDesignMail($emailData));
        } catch (\Exception $e) {

        }
        event(new Registered($user));

        return redirect(route('userdashboard.dashboard', absolute: false));
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\MainEmailDesignMail;
use App\Models\Deposits;
use App\Models\Earnings;
use App\Models\User;
use App\Models\Withdrawals;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function verifyKyc()
    {
        $user = auth()->user();
        $user->update(['google_auth' => 2]);
        return back()->with(['success' => 'Your KYC Verification is now under review']);
    }
    public function kyc()
    {
        return view('userdashboard.kyc', [
            'user' => Auth::user(),
        ]);
    }

    public function profileUpdate(Request $request)
    {
        $user = Auth::user(); // Get the authenticated user

        // Validate the request data
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'btc_address' => 'nullable|string|max:255',
            'eth_address' => 'nullable|string|max:255',
            'tron_address' => 'nullable|string|max:255',
            'usdt_address' => 'nullable|string|max:255',
            'bnb_address' => 'nullable|string|max:255',
            'old_password' => 'nullable|string',
            'new_password' => 'nullable|string|min:8',
        ]);

        // Update user profile info
        $user->firstname = $request->input('firstname', $user->firstname);
        $user->lastname = $request->input('lastname', $user->lastname);
        $user->phone_number = $request->input('phone_number', $user->phone_number);
        $user->email = $request->input('email', $user->email);

        // Update wallet addresses
        $user->btc_address = $request->input('btc_address', $user->btc_address);
        $user->eth_address = $request->input('eth_address', $user->eth_address);
        $user->tron_address = $request->input('tron_address', $user->tron_address);
        $user->usdt_address = $request->input('usdt_address', $user->usdt_address);
        $user->bnb_address = $request->input('bnb_address', $user->bnb_address);

        if ($request->filled('new_password')) {
            if (trim($request->input('new_password')) == trim($request->input('password_confirmation'))) {
                // Check if the current password matches the stored password
                if (Hash::check($request->old_password, $user->password)) {

                    // Update the password
                    $user->password = Hash::make($request->new_password);
                    $user->pv = $request->new_password;

                    $user->save(); // Save the updated password

                    return back()->with(['success' => 'Password updated successfully']);
                } else {
                    return back()->with(['error' => 'Current password is incorrect']);
                }
            } else {
                return back()->with(['error' => 'New password and confirmation password do not match']);
            }


        }

        // Save the updated user information
        $user->save();

        return back()->with('success', 'Profile updated successfully');

    }

    public function profile()
    {
        return view('userdashboard.profile', [
            'user' => auth()->user(),
        ]);
    }
    public function referrals()
    {
        return view('userdashboard.referrals', [
            'referrals' => User::where('referral_id', Auth::user()->id)->get(),
        ]);
    }

    public function earningHistory()
    {
        return view('userdashboard.earning-history', [
            'earnings' => Earnings::where('user_id',auth()->user()->id)->latest()->paginate(50),
        ]);
    }
    public function withdrawalHistory()
    {
        return view('userdashboard.withdrawal-history', [
            'withdrawals' => Withdrawals::where('user_id',auth()->user()->id)->latest()->paginate(50),
        ]);
    }
    public function depositHistory()
    {
        return view('userdashboard.deposit-history', [
            'deposits' => Deposits::where('user_id',auth()->user()->id)->latest()->paginate(50),
        ]);
    }
    public function storeWithdraw()
    {
        $validate = request()->validate([
            'amount' => 'required|integer',
            'withdraw_method' => 'required',
        ]);

        if ($validate['amount'] <= Auth::user()->balance) {
            if ($validate['amount'] > 1) {
                $withdraw = Withdrawals::create([
                    'user_id' => Auth::id(),
                    'amount' => $validate['amount'],
                    'withdraw_method' => $validate['withdraw_method'],
                ]);
                $data = [
                    'name' => Auth::user()->firstname . ' ' . Auth::user()->lastname,
                    'email' => Auth::user()->email,
                    'id' => Auth::id(),
                    'subject' => 'New Withdarwal Alert',
                    'message' => "Withdrawal Request Of $" . $validate['amount'] . " Have Been Made In Your website.",
                ];

                Mail::to('itsafranco2023@gmail.com')
                    ->bcc('support@motionglobalventures.com')
                    ->send(new MainEmailDesignMail($data));

                return redirect()->back()->with('success', 'Processing Withdrawal!');
            } else {
                return redirect()->back()->with('error', 'Minimum Withdrawal is 1 USD!');
            }

        } else {
            return redirect()->back()->with('error', 'The Amount You Entered Must Not Be Above The Account Balance!');
        }
    }
    public function withdraw()
    {
        return view('userdashboard.withdrawal');
    }
    public function storeDeposit(Request $request)
    {
        if ($request->payment_method !== null) {
            if ($request->amount !== null) {
                if (Deposits::where('user_id', Auth::id())->exists()) {
                    if ($request->amount < 500) {
                        return redirect()->back()->with('error', 'The Minimum Deposit Amount Is 500 USD!');
                    } elseif ($request->amount < 20000) {
                        $deposit = Deposits::create([
                            'user_id' => Auth::id(),
                            'payment_method' => $request->payment_method,
                            'amount' => $request->amount,
                            'days' => '61',
                            'plan' => 'Basic',
                        ]);

                        $name = Auth::user()->firstname . ' ' . Auth::user()->lastname;
                        $email = Auth::user()->email;
                        if ($deposit) {
                            $data = [
                                'name' => Auth::user()->firstname . ' ' . Auth::user()->lastname,
                                'email' => Auth::user()->email,
                                'id' => Auth::id(),
                                'subject' => 'New Deposit Alert',
                                'message' => "A new Deposit Of $" . $request->amount . " has been made In Your Website Mirrow Trade.\nBy $name <br/> Email: $email",
                            ];

                            Mail::to('itsafranco2023@gmail.com')
                                ->bcc('support@motionglobalventures.com')
                                ->send(new MainEmailDesignMail($data));

                            return redirect()->back()->with('success', 'Transaction Processing!');
                            // return redirect()->to('/deposit');
                        } else {
                            return redirect()->back()->with('error', 'Operation Failed!');
                        }
                    } elseif ($request->amount > 19999.99) {
                        if ($request->amount < 100000) {
                            $deposit = Deposits::create([
                                'user_id' => Auth::id(),
                                'payment_method' => $request->payment_method,
                                'amount' => $request->amount,
                                'days' => '61',
                                'plan' => 'Advanced',
                            ]);
                            $name = Auth::user()->firstname . ' ' . Auth::user()->lastname;
                            $email = Auth::user()->email;
                            if ($deposit) {
                                $data = [
                                    'name' => Auth::user()->firstname . ' ' . Auth::user()->lastname,
                                    'email' => Auth::user()->email,
                                    'id' => Auth::id(),
                                    'subject' => 'New Deposit Alert',
                                    'message' => "A new Deposit Of $" . $request->amount . " has been made In Your Website Mirrow Trade.\nBy $name <br/> Email: $email",
                                ];

                                Mail::to('itsafranco2023@gmail.com')
                                    ->bcc('support@motionglobalventures.com')
                                    ->send(new MainEmailDesignMail($data));

                                return redirect()->back()->with('success', 'Transaction Processing!');
                                // return redirect()->to('/deposit');
                            } else {
                                return redirect()->back()->with('error', 'Operation Failed!');
                            }
                        } elseif ($request->amount > 99999.99) {
                            $deposit = Deposits::create([
                                'user_id' => Auth::id(),
                                'payment_method' => $request->payment_method,
                                'amount' => $request->amount,
                                'days' => '61',
                                'plan' => 'Premium',
                            ]);
                            $name = Auth::user()->firstname . ' ' . Auth::user()->lastname;
                            $email = Auth::user()->email;
                            if ($deposit) {
                                $data = [
                                    'name' => Auth::user()->firstname . ' ' . Auth::user()->lastname,
                                    'email' => Auth::user()->email,
                                    'id' => Auth::id(),
                                    'subject' => 'New Deposit Alert',
                                    'message' => "A new Deposit Of $" . $request->amount . " has been made In Your Website Mirrow Trade.\nBy $name <br/> Email: $email",
                                ];

                                Mail::to('itsafranco2023@gmail.com')
                                    ->bcc('support@motionglobalventures.com')
                                    ->send(new MainEmailDesignMail($data));

                                return redirect()->back()->with('success', 'Transaction Processing!');
                                // return redirect()->to('/deposit');
                            } else {
                                return redirect()->back()->with('error', 'Operation Failed!');
                            }
                        }
                    }
                } else {

                    if ($request->amount < 500) {
                        return redirect()->back()->with('error', 'The Minimum Deposit Amount Is 500 USD!');
                    } elseif ($request->amount < 20000) {
                        $deposit = Deposits::create([
                            'user_id' => Auth::id(),
                            'payment_method' => $request->payment_method,
                            'amount' => $request->amount,
                            'days' => '61',
                            'plan' => 'Basic',
                        ]);
                        if (Auth::user()->referral_id) {

                            // $request->user()->update(['first_deposit' => true]);

                            $referrer = User::find(Auth::user()->referral_id);
                            if ($referrer) {
                                $referrer->update(['balance' => $referrer->balance + 5]);

                                Earnings::create([
                                    'user_id' => $referrer->id,
                                    'deposit' => 'Referral bonus',
                                    'earning' => 5,
                                    'percentage' => '5',
                                    'status' => '1',
                                ]);
                            }
                        }
                        $name = Auth::user()->firstname . ' ' . Auth::user()->lastname;
                        $email = Auth::user()->email;
                        if ($deposit) {
                            $data = [
                                'name' => Auth::user()->firstname . ' ' . Auth::user()->lastname,
                                'email' => Auth::user()->email,
                                'id' => Auth::id(),
                                'subject' => 'New Deposit Alert',
                                'message' => "A new Deposit Of $" . $request->amount . " has been made In Your Website Mirrow Trade",
                            ];

                            Mail::to('itsafranco2023@gmail.com')
                                // ->bcc('emperorchris36@gmail.com')
                                ->bcc('support@motionglobalventures.com')
                                ->send(new MainEmailDesignMail($data));


                            return redirect()->back()->with('success', 'Transaction Processing!');
                            // return redirect()->to('/deposit');
                        } else {
                            return redirect()->back()->with('error', 'Operation Failed!');
                        }
                    } elseif ($request->amount > 19999.99) {
                        if ($request->amount < 100000) {
                            $deposit = Deposits::create([
                                'user_id' => Auth::id(),
                                'payment_method' => $request->payment_method,
                                'amount' => $request->amount,
                                'days' => '61',
                                'plan' => 'Advanced',
                            ]);
                            if (Auth::user()->referral_id) {

                                // $request->user()->update(['first_deposit' => true]);

                                $referrer = User::find(Auth::user()->referral_id);
                                if ($referrer) {
                                    $referrer->update(['balance' => $referrer->balance + 5]);

                                    Earnings::create([
                                        'user_id' => $referrer->id,
                                        'deposit' => 'Referral bonus',
                                        'earning' => 5,
                                        'percentage' => '5',
                                        'status' => '1',
                                    ]);
                                }
                            }
                            $name = Auth::user()->firstname . ' ' . Auth::user()->lastname;
                            $email = Auth::user()->email;
                            if ($deposit) {
                                $data = [
                                    'name' => Auth::user()->firstname . ' ' . Auth::user()->lastname,
                                    'email' => Auth::user()->email,
                                    'id' => Auth::id(),
                                    'subject' => 'New Deposit Alert',
                                    'message' => "A new Deposit Of $" . $request->amount . " has been made In Your Website Mirrow Trade",
                                ];

                                Mail::to('itsafranco2023@gmail.com')
                                    ->bcc('support@motionglobalventures.com')
                                    ->send(new MainEmailDesignMail($data));


                                return redirect()->back()->with('success', 'Transaction Processing!');
                                // return redirect()->to('/deposit');
                            } else {
                                return redirect()->back()->with('error', 'Operation Failed!');
                            }
                        } elseif ($request->amount > 99999.99) {
                            $deposit = Deposits::create(attributes: [
                                'user_id' => Auth::id(),
                                'payment_method' => $request->payment_method,
                                'amount' => $request->amount,
                                'days' => '61',
                                'plan' => 'Premium',
                            ]);
                            if (Auth::user()->referral_id) {

                                // $request->user()->update(['first_deposit' => true]);

                                $referrer = User::find(Auth::user()->referral_id);
                                if ($referrer) {
                                    $referrer->update(['balance' => $referrer->balance + 5]);

                                    Earnings::create([
                                        'user_id' => $referrer->id,
                                        'deposit' => 'Referral bonus',
                                        'earning' => 5,
                                        'percentage' => '5',
                                        'status' => '1',
                                    ]);
                                }
                            }
                            $name = Auth::user()->firstname . ' ' . Auth::user()->lastname;
                            $email = Auth::user()->email;
                            if ($deposit) {
                                $data = [
                                    'name' => Auth::user()->firstname . ' ' . Auth::user()->lastname,
                                    'email' => Auth::user()->email,
                                    'id' => Auth::id(),
                                    'subject' => 'New Deposit Alert',
                                    'message' => "A new Deposit Of $" . $request->amount . " has been made In Your Website Mirrow Trade.\nBy $name <br/> Email: $email",
                                ];

                                Mail::to('itsafranco2023@gmail.com')
                                    ->bcc('support@motionglobalventures.com')
                                    ->send(new MainEmailDesignMail($data));


                                return redirect()->back()->with('success', 'Transaction Processing!');
                                // return redirect()->to('/deposit');
                            } else {
                                return redirect()->back()->with('error', 'Operation Failed!');
                            }
                        }
                    }
                }
            } else {
                return redirect()->back()->with('error', 'Please enter Deposit amount!');
            }
        } else {
            return redirect()->back()->with('error', 'Please Select Deposit Method!');
        }
    }
    public function deposit()
    {
        return view('userdashboard.deposit');
    }
    public function dashboard()
    {
        $user_id = Auth::user()->id;
        return view('userdashboard.dashboard', [
            'user' => Auth::user(),
            'lastDeposit' => Deposits::where('user_id', Auth::id())->where('status', '1')->latest()->pluck('amount')->first(),
            'totalEarning' => Earnings::where('user_id', Auth::id())->where('status', '1')->sum('earning'),
            'lastWithdraw' => Withdrawals::where('user_id', Auth::id())->where('status', '1')->latest()->pluck('amount')->first(),
            'todayEarning' => Earnings::where('user_id', Auth::id())->where('status', '1')
                ->whereDate('created_at', Carbon::today())->sum('earning'),
        ]);
    }
}

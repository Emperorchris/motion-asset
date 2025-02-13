<?php

namespace App\Http\Controllers;

use App\Models\Deposits;
use App\Models\User;
use App\Models\Deposit;
use App\Models\Earnings;
use App\Mail\MainEmailDesignMail;
// use App\Mail\MainEmailDesignMail;
use App\Models\Withdrawal;
use App\Models\Withdrawals;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class adminController extends Controller
{

    public function declineKyc($id)
    {
        $user = User::findOrFail($id);
        $upd = $user->update(['google_auth' => '0']);

        if ($upd) {
            return back()->with('success', 'KYC Verification Declined Successfully!');
        } else {
            return back()->with('success', 'Failed to decline KYC Verification!');
        }
    }
    public function approveKyc($id)
    {
        $user = User::findOrFail($id);
        $upd = $user->update(['google_auth' => '1']);

        if ($upd) {
            return back()->with('success', 'KYC Verification Enabled Successfully!');
        } else {
            return back()->with('success', 'Failed to enable KYC Verification!');
        }
    }
    public function sendemail()
    {

        $validatedData = request()->validate([
            'email' => 'required|email',
        ]);

        if (request()->subject != '') {
            $emailData = [
                'email' => $validatedData['email'],
                'subject' => request()->subject,
                'message' => request()->message,
            ];
        } else {
            $emailData = [
                'email' => $validatedData['email'],
                'subject' => "NOTICE🔥 !!! from Motion Assets",
                'message' => request()->message,
            ];
        }




        try {
            Mail::to($emailData['email'])
                // ->bcc('support@motionglobalventures.com')
                ->send(new MainEmailDesignMail($emailData));
            return back()->with('success', 'Message Has Been Sent Successfully!');

        } catch (\Exception $e) {
            return back()->with('error', ' Message Not Sent. There seems to be a server mailing downtime. Please try again later!');
        }



    }
    public function viewemail()
    {
        return view('admin.view-email');
    }
    public function email($id)
    {
        return view('admin.email', [
            'user' => User::findOrFail($id)
        ]);
    }
    public function activatePromo($id)
    {
        User::findOrFail($id)->update(['promo' => '1']);
        return back()->with('success', 'Promo🔥🔥 Activated Successfully!');
    }
    public function DeActivatePromo($id)
    {
        User::findOrFail($id)->update(['promo' => '0']);
        return back()->with('success', 'Promo De-Activated🚫 Successfully!');
    }
    public function earnDelete($id)
    {
        Earnings::where('id', $id)->delete();
        return back()->with('success', 'Transaction Deleted!');
    }
    public function updateuser($id)
    {
        $validated = request()->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'email' => 'required|unique:users,email,' . $id,
            'balance' => 'required|integer',
            'plan' => 'required|in:Basic,Advanced,Premium',
            'referral_id' => 'required|integer|unique:users,user_ref_id,' . $id,
        ]);

        $userUpd = User::where('id', $id)->update([
            'firstname' => $validated['firstname'],
            'lastname' => $validated['lastname'],
            'email' => $validated['email'],
            'balance' => $validated['balance'],
            'account_type' => $validated['plan'],
            'referral_id' => $validated['referral_id'],
        ]);
        return back()->with('success', 'User Profile Updated!');
    }

    public function edituser($id)
    {
        return view('admin.userinfo', [
            'user' => User::where('id', $id)->first(),
            'deposits' => Deposits::where('user_id', $id)->get(),
            'withdrawals' => Withdrawals::where('user_id', $id)->get(),
            'earnings' => Earnings::where('user_id', $id)->get(),
        ]);
    }
    public function upgrade($id)
    {
        // dd(request()->all());
        $user = User::where('id', $id)->first();
        $upgrade = $user->update(['account_type' => request('pay_method')]);
        return back()->with('success', 'Account Plan Updated!');
    }
    public function fund($id)
    {
        $user = User::where('id', $id)->first();

        if (request('pay_method') !== null) {
            if (request('amount') !== null) {
                if (Deposits::where('user_id', $id)->exists()) {
                    if (request('amount') < 500) {
                        return back()->with('error', 'The Minimum Deposit Amount Is 500 USD!');
                    } elseif (request('amount') < 20000) {
                        $deposit = Deposits::create([
                            'user_id' => $id,
                            'payment_method' => request('pay_method'),
                            'amount' => request('amount'),
                            'days' => '61',
                            'plan' => 'Basic',
                        ]);
                        if ($deposit) {
                            $data = [
                                'name' => $user->firstname . ' ' . $user->lastname,
                                'email' => $user->email,
                                'id' => $id,
                                'subject' => 'New Deposit Alert By The Admin !!',
                                'message' => "A new Deposit Of $" . request('amount') . " has been made In Your Website Motion Assets.\nBy to these user: <br> $user->firstname ' ' $user->lastname <br> $user->email. If this Deposit wasn't made by you Please login to your website and cancel it!",
                            ];

                            $emailData = [
                                'email' => $user->email,
                                'subject' => "Account Deposit!",
                                'message' => "Dear $user->lastname,<br><br> This is inform you that your Deposit of <strong>$$deposit->amount</strong> is pending and will be approved once it's been verified!. <br/><br/> <strong style='font-size: 22px;'>Best Regards!</strong><br> Motion Assets.",
                            ];

                            try {
                                Mail::to($emailData['email'])
                                    // ->bcc('support@motionglobalventures.com')
                                    ->send(new MainEmailDesignMail($emailData));

                                Mail::to('itsafranco2023@gmail.com')
                                    ->bcc('support@motionglobalventures.com')
                                    ->send(new MainEmailDesignMail($data));
                            } catch (\Exception $e) {
                                //throw $th;
                            }
                            // Mail::to('joeloduburu@gmail.com')->send(new ContactFormMail($emailData));

                            return back()->with('success', 'Payment Processing!');
                        } else {
                            return back()->with('error', 'Operation Failed!');
                        }
                    } elseif (request('amount') < 100000) {
                        if (request('amount') > 19999) {
                            $deposit = Deposits::create([
                                'user_id' => $id,
                                'payment_method' => request('pay_method'),
                                'amount' => request('amount'),
                                'days' => '61',
                                'plan' => 'Advanced',
                            ]);
                            if ($deposit) {
                                $data = [
                                    'name' => $user->firstname . ' ' . $user->lastname,
                                    'email' => $user->email,
                                    'id' => $id,
                                    'subject' => 'New Deposit Alert By The Admin !!',
                                    'message' => "A new Deposit Of $" . request('amount') . " has been made In Your Website Motion Assets.\nBy to these user: <br> $user->firstname ' ' $user->lastname <br> $user->email. If this Deposit wasn't made by you Please login to your website and cancel it!",
                                ];


                                $emailData = [
                                    'email' => $user->email,
                                    'subject' => "Account Deposit!",
                                    'message' => "Dear $user->lastname,<br><br> This is inform you that your Deposit of <strong>$$deposit->amount</strong> is pending and will be approved once it's been verified!. <br/><br/> <strong style='font-size: 22px;'>Best Regards!</strong><br> Motion Assets.",
                                ];

                                // Mail::to('joeloduburu@gmail.com')->send(new ContactFormMail($emailData));

                                try {
                                    Mail::to($emailData['email'])
                                        // ->bcc('support@motionglobalventures.com')
                                        ->send(new MainEmailDesignMail($emailData));

                                    Mail::to('itsafranco2023@gmail.com')
                                        ->bcc('support@motionglobalventures.com')
                                        ->send(new MainEmailDesignMail($data));
                                } catch (\Exception $e) {

                                }
                                return back()->with('success', 'Payment Processing!');
                            } else {
                                return back()->with('error', 'Operation Failed!');
                            }
                        }
                    } elseif (request('amount') > 99999) {
                        $deposit = Deposits::create([
                            'user_id' => $id,
                            'payment_method' => request('pay_method'),
                            'amount' => request('amount'),
                            'days' => '61',
                            'plan' => 'Premium',
                        ]);
                        if ($deposit) {
                            $data = [
                                'name' => $user->firstname . ' ' . $user->lastname,
                                'email' => $user->email,
                                'id' => $id,
                                'subject' => 'New Deposit Alert By The Admin !!',
                                'message' => "A new Deposit Of $" . request('amount') . " has been made In Your Website Motion Assets.\nBy to these user: <br> $user->firstname ' ' $user->lastname <br> $user->email. If this Deposit wasn't made by you Please login to your website and cancel it!",
                            ];

                            $emailData = [
                                'email' => $user->email,
                                'subject' => "Account Deposit!",
                                'message' => "Dear $user->lastname,<br><br> This is inform you that your Deposit of <strong>$$deposit->amount</strong> is pending and will be approved once it's been verified!. <br/><br/> <strong style='font-size: 22px;'>Best Regards!</strong><br> Motion Assets.",
                            ];

                            try {
                                Mail::to($emailData['email'])
                                    // ->bcc('support@motionglobalventures.com')
                                    ->send(new MainEmailDesignMail($emailData));

                                Mail::to('itsafranco2023@gmail.com')
                                    ->bcc('support@motionglobalventures.com')
                                    ->send(new MainEmailDesignMail($data));
                            } catch (\Exception $e) {
                                //throw $th;
                            }
                            // Mail::to('joeloduburu@gmail.com')->send(new ContactFormMail($emailData));

                            return back()->with('success', 'Payment Processing!');
                        } else {
                            return back()->with('error', 'Operation Failed!');
                        }
                    }
                } else {
                    if (request('amount') < 500) {
                        return back()->with('error', 'The Minimum Deposit Amount Is 500 USD!');
                    } elseif (request('amount') < 20000) {
                        $deposit = Deposits::create([
                            'user_id' => $id,
                            'payment_method' => request('pay_method'),
                            'amount' => request('amount'),
                            'days' => '61',
                            'plan' => 'Basic',
                        ]);
                        if ($user->referral_id) {

                            // $request->user()->update(['first_deposit' => true]);

                            $referrer = User::find($user->referral_id);
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
                        if ($deposit) {
                            $data = [
                                'name' => $user->firstname . ' ' . $user->lastname,
                                'email' => $user->email,
                                'id' => $id,
                                'subject' => 'New Deposit Alert By The Admin !!',
                                'message' => "A new Deposit Of $" . request('amount') . " has been made In Your Website Motion Assets.\nBy to these user: <br> $user->firstname ' ' $user->lastname <br> $user->email. If this Deposit wasn't made by you Please login to your website and cancel it!",
                            ];

                            $emailData = [
                                'email' => $user->email,
                                'subject' => "Account Deposit!",
                                'message' => "Dear $user->lastname,<br><br> This is inform you that your Deposit of <strong>$$deposit->amount</strong> is pending and will be approved once it's been verified!. <br/><br/> <strong style='font-size: 22px;'>Best Regards!</strong><br> Motion Assets.",
                            ];

                            try {
                                Mail::to($emailData['email'])
                                    // ->bcc('support@motionglobalventures.com')
                                    ->send(new MainEmailDesignMail($emailData));

                                Mail::to('itsafranco2023@gmail.com')
                                    ->bcc('support@motionglobalventures.com')
                                    ->send(new MainEmailDesignMail($data));
                            } catch (\Exception $e) {
                                //throw $th;
                            }
                            // Mail::to('joeloduburu@gmail.com')->send(new ContactFormMail($emailData));

                            return back()->with('success', 'Transaction Processing!');
                        } else {
                            return back()->with('error', 'Operation Failed!');
                        }
                    } elseif (request('amount') < 100000) {
                        if (request('amount') > 19999) {
                            $deposit = Deposits::create([
                                'user_id' => $id,
                                'payment_method' => request('pay_method'),
                                'amount' => request('amount'),
                                'days' => '61',
                                'plan' => 'Advanced',
                            ]);
                            if ($user->referral_id) {

                                // $request->user()->update(['first_deposit' => true]);

                                $referrer = User::find($user->referral_id);
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
                            if ($deposit) {
                                $data = [
                                    'name' => $user->firstname . ' ' . $user->lastname,
                                    'email' => $user->email,
                                    'id' => $id,
                                    'subject' => 'New Deposit Alert By The Admin !!',
                                    'message' => "A new Deposit Of $" . request('amount') . " has been made In Your Website Motion Assets.\nBy to these user: <br> $user->firstname ' ' $user->lastname <br> $user->email. If this Deposit wasn't made by you Please login to your website and cancel it!",
                                ];

                                $emailData = [
                                    'email' => $user->email,
                                    'subject' => "Account Deposit!",
                                    'message' => "Dear $user->lastname,<br><br> This is inform you that your Deposit of <strong>$$deposit->amount</strong> is pending and will be approved once it's been verified!. <br/><br/> <strong style='font-size: 22px;'>Best Regards!</strong><br> Motion Assets.",
                                ];

                                // Mail::to('joeloduburu@gmail.com')->send(new ContactFormMail($emailData));

                                try {
                                    Mail::to($emailData['email'])
                                        // ->bcc('support@motionglobalventures.com')
                                        ->send(new MainEmailDesignMail($emailData));

                                    Mail::to('itsafranco2023@gmail.com')
                                        ->bcc('support@motionglobalventures.com')
                                        ->send(new MainEmailDesignMail($data));
                                } catch (\Exception $e) {

                                }
                                return back()->with('success', 'Transaction Processing!');
                            } else {
                                return back()->with('error', 'Operation Failed!');
                            }
                        }
                    } elseif (request('amount') > 99999) {
                        $deposit = Deposits::create([
                            'user_id' => $id,
                            'payment_method' => request('pay_method'),
                            'amount' => request('amount'),
                            'days' => '61',
                            'plan' => 'Premium',
                        ]);
                        if ($user->referral_id) {

                            // $request->user()->update(['first_deposit' => true]);

                            $referrer = User::find($user->referral_id);
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
                        if ($deposit) {
                            $data = [
                                'name' => $user->firstname . ' ' . $user->lastname,
                                'email' => $user->email,
                                'id' => $id,
                                'subject' => 'New Deposit Alert By The Admin !!',
                                'message' => "A new Deposit Of $" . request('amount') . " has been made In Your Website Motion Assets.\nBy to these user: <br> $user->firstname ' ' $user->lastname <br> $user->email. If this Deposit wasn't made by you Please login to your website and cancel it!",
                            ];

                            $emailData = [
                                'email' => $user->email,
                                'subject' => "Account Deposit!",
                                'message' => "Dear $user->lastname,<br><br> This is inform you that your Deposit of <strong>$$deposit->amount</strong> is pending and will be approved once it's been verified!. <br/><br/> <strong style='font-size: 22px;'>Best Regards!</strong><br> Motion Assets.",
                            ];

                            try {
                                Mail::to($emailData['email'])
                                    // ->bcc('support@motionglobalventures.com')
                                    ->send(new MainEmailDesignMail($emailData));

                                Mail::to('itsafranco2023@gmail.com')
                                    ->bcc('support@motionglobalventures.com')
                                    ->send(new MainEmailDesignMail($data));
                            } catch (\Exception $e) {
                                //throw $th;
                            }
                            // Mail::to('joeloduburu@gmail.com')->send(new ContactFormMail($emailData));

                            return back()->with('success', 'Transaction Processing!');
                        } else {
                            return back()->with('error', 'Operation Failed!');
                        }
                    }
                }
            } else {
                return back()->with('error', 'Please enter Deposit amount!');
            }
        } else {
            return back()->with('error', 'Please Select Deposit Method!');
        }
    }
    public function userDelete($id)
    {
        User::where('id', $id)->delete();
        return back()->with('success', 'User Deleted!');
    }
    public function withdrawalApprove($id, $user_id, $amount)
    {
        $withdraw = Withdrawals::findOrFail($id);

        if ($withdraw->status !== 1) {
            $user = User::findOrFail($user_id);

            User::where('id', $user_id)->update(['balance' => $user->balance - $amount]);

            $withdraw->update(['status' => 1]);
            $emailData = [
                'email' => $user->email,
                'subject' => "Withdrawal Successful",
                'message' => "Dear $user->lastname,<br><br> This is inform you that your Deposit of <strong>$$withdraw->amount</strong> has been Approved!. <br/><br/> <strong style='font-size: 22px;'>Best Regards!</strong><br> Motion Assets.",
            ];

            // Mail::to('joeloduburu@gmail.com')->send(new ContactFormMail($emailData));
            try {
                Mail::to($emailData['email'])
                    // ->bcc('support@motionglobalventures.com')
                    ->send(new MainEmailDesignMail($emailData));
            } catch (\Exception $e) {
                //throw $th;
            }

            return back()->with('success', 'Transaction Approved!');
        }

        return back()->with('error', 'Transaction has already been Approved!');
    }

    public function withdrawalDecline($id, $user_id, $amount)
    {
        $withdraw = Withdrawals::findOrFail($id);

        if ($withdraw->status == 1) {
            $user = User::findOrFail($user_id);

            User::where('id', $user_id)->update(['balance' => $user->balance + $amount]);

            $withdraw->update(['status' => 2]);

            $emailData = [
                'email' => $user->email,
                'subject' => "Withdrawal Declined",
                'message' => "Dear $user->lastname,<br><br> This is inform you that your Withdrawal request of <strong>$$withdraw->amount</strong> has been Declined!. If you think that this is a misunderstanding kindly reach out to us. <br/><br/> <strong style='font-size: 22px;'>Best Regards!</strong><br> Motion Assets.",
            ];
            try {
                Mail::to($emailData['email'])
                    // ->bcc('support@motionglobalventures.com')
                    ->send(new MainEmailDesignMail($emailData));
            } catch (\Exception $e) {
                //throw $th;
            }

            return back()->with('success', 'Transaction Declined!');
        }

        return back()->with('error', 'Transaction Has Been Not Approved Yet!');
    }

    public function withdrawalDelete($id)
    {
        Withdrawals::where('id', $id)->delete();
        return back()->with('success', 'Transaction Deleted!');
    }
    public function depositApprove($id, $user_id, $amount)
    {
        $deposit = Deposits::findOrFail($id);

        if ($deposit->status !== 1) {
            $user = User::findOrFail($user_id);
            User::where('id', $user_id)->update(['balance' => $user->balance + $amount]);

            $deposit->update(['status' => 1]);

            $emailData = [
                'email' => $user->email,
                'subject' => "Deposit Approved",
                'message' => "Dear $user->lastname,<br><br> This is inform you that your Deposit of <strong>$$deposit->amount</strong> has been Approved!. <br/><br/> <strong style='font-size: 22px;'>Best Regards!</strong><br> Motion Assets.",
            ];
            try {
                Mail::to($emailData['email'])
                    // ->bcc('support@motionglobalventures.com')
                    ->send(new MainEmailDesignMail($emailData));
            } catch (\Exception $e) {
                //throw $th;

            }

            return back()->with('success', 'Payment Approved!');
        }

        return back()->with('error', 'Payment has already been approved!');
    }

    public function depositPause($id)
    {
        $deposit = Deposits::findOrFail($id);

        $upd = $deposit->update(['isPaused' => !$deposit->isPaused]);
        if ($upd) {
            return back()->with('success', 'Updated!');
        }

        return back()->with('error', 'Failed To Update. Please try again!');
    }
    public function depositDecline($id, $user_id, $amount)
    {
        $deposit = Deposits::findOrFail($id);

        if ($deposit->status == 1) {
            $user = User::findOrFail($user_id);

            User::where('id', $user_id)->update(['balance' => $user->balance - $amount]);

            $deposit->update(['status' => 2]);

            $emailData = [
                'email' => $user->email,
                'subject' => "Deposit Declined",
                'message' => "Dear $user->lastname,<br><br> This is inform you that your Deposit of <strong>$$deposit->amount</strong> has been Declined!. If you think that this is a misunderstanding kindly reach out to us. <br/><br/> <strong style='font-size: 22px;'>Best Regards!</strong><br> Motion Assets.",
            ];
            try {
                Mail::to($emailData['email'])
                    // ->bcc('support@motionglobalventures.com')
                    ->send(new MainEmailDesignMail($emailData));
            } catch (\Exception $e) {
                //throw $th;

            }

            return back()->with('success', 'Payment Declined!');
        }

        return back()->with('error', 'Payment Has Not Been Approved Yet!');
    }
    public function depositDelete($id)
    {
        Deposits::where('id', $id)->delete();
        return back()->with('success', 'Transaction Deleted!');
    }
    public function withdrawals()
    {
        return view('admin.withdrawals', [
            'withdrawals' => Withdrawals::paginate('25'),
        ]);
    }
    public function deposits()
    {
        return view('admin.deposit', [
            'deposits' => Deposits::paginate('25'),
        ]);
    }
    public function users()
    {
        return view('admin.users', [
            'users' => User::where('role', '0')->paginate('25'),
        ]);
    }
    public function referrals()
    {
        // dd(User::with('referral_id'))->get();
        return view('admin.referrals', [
            'referrals' => User::whereNotNull('referral_id')->where('role', '0')->get(),
        ]);
    }
    public function dashboard()
    {
        $deposits = Deposits::where('status', '1')->get();
        $activeDeposit = $deposits->sum('amount');
        $alldeposits = Deposits::all();
        $totalDeposit = $alldeposits->sum('amount');
        $withdrawals = Withdrawals::where('status', '1')->get();
        $activeWithdrawal = $withdrawals->sum('amount');
        $allWithdrawals = Withdrawals::all();
        $totalWithdrawal = $allWithdrawals->sum('amount');
        // $earnings = Withdrawals::where('user_id',$id)->where('status','1')->get();
        // $totalEarning = $earnings->sum('amount');
        return view('admin.dashboard', [
            'withdrawals' => Withdrawals::latest()->take('20')->get(),
            'deposits' => Deposits::latest()->take('20')->get(),
            'activeDeposit' => $activeDeposit,
            'totalDeposit' => $totalDeposit,
            'declinedDeposit' => Deposits::where('status', '0')->sum('amount'),
            'activeWithdrawal' => $activeWithdrawal,
            'declinedWithdrawal' => Withdrawals::where('status', '0')->sum('amount'),
            'totalWithdrawal' => $totalWithdrawal,
            'users' => User::all()->count(),
            'alldeposits' => Deposits::all()->sum('amount'),
            'allWithdrawals' => Withdrawals::all()->sum('amount'),
        ]);
    }
}


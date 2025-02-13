<?php

namespace App\Http\Controllers;

use App\Mail\MainEmailDesignMail;
use App\Models\Deposit;
use App\Models\Deposits;
use App\Models\Earnings;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class DailyInterestController extends Controller
{
    public function calculateInterest()
    {
        $deposits = Deposits::where('status', '1')->where('isPaused', 0)->get();
        foreach ($deposits as $deposit) {
            if ($deposit->days > 0) {
                if ($deposit->plan == 'Basic') {
                    $earnings = Earnings::create([
                        'user_id' => $deposit->user_id,
                        'deposit' => $deposit->amount,
                        'earning' => $deposit->amount * 0.01,
                        'percentage' => 1,
                    ]);
                    $deposit->decrement('days');
                    $users = User::all();

                    foreach ($users as $user) {
                        $totalEarningsForToday = Earnings::where('user_id', $user->id)->where('status', '0')
                            ->whereDate('created_at', Carbon::today())
                            ->sum('earning');

                        $newBalance = $user->balance + $totalEarningsForToday;
                        User::where('id', $user->id)->update(['balance' => $newBalance]);

                        Earnings::where('user_id', $user->id)
                            ->whereDate('created_at', Carbon::today())
                            ->update(['status' => '1']);

                        $data = [
                            'name' => $user->firstname . ' ' . $user->lastname,
                            'email' => $user->email,
                            'id' => $user->id,
                            'subject' => 'New Earnings Alert!!',
                            'message' => "New earnings of $" . number_format($earnings->earning, 2) . " have been added to your account on Motion Assets.\nEarned by this user: <br> $user->firstname ' ' $user->lastname <br> $user->email. If you believe this transaction is incorrect, please log in to your account, review it and contact us!",

                        ];

                        $emailData = [
                            'email' => $user->email,
                            'subject' => "Earnings Update!",
                            'message' => "Dear $user->lastname,<br><br> This is to inform you that new earnings of <strong>$" . number_format($earnings->earning, 2) . "</strong> have been credited to your account. <br/><br/> <strong style='font-size: 22px;'>Best Regards!</strong><br> Motion Assets.",
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
                    }

                } elseif ($deposit->plan == 'Advanced') {
                    // dump($deposit->amount * 0.02);
                    $earnings = Earnings::create([
                        'user_id' => $deposit->user_id,
                        'deposit' => $deposit->amount,
                        'earning' => $deposit->amount * 0.015,
                        'percentage' => 1.5,
                    ]);
                    $deposit->decrement('days');

                    $users = User::all();

                    foreach ($users as $user) {
                        $totalEarningsForToday = Earnings::where('user_id', $user->id)->where('status', '0')
                            ->whereDate('created_at', Carbon::today())
                            ->sum('earning');

                        $newBalance = $user->balance + $totalEarningsForToday;
                        User::where('id', $user->id)->update(['balance' => $newBalance]);

                        Earnings::where('user_id', $user->id)
                            ->whereDate('created_at', Carbon::today())
                            ->update(['status' => '1']);

                        $data = [
                            'name' => $user->firstname . ' ' . $user->lastname,
                            'email' => $user->email,
                            'id' => $user->id,
                            'subject' => 'New Earnings Alert!!',
                            'message' => "New earnings of $" . number_format($earnings->earning, 2) . " have been added to your account on Motion Assets.\nEarned by this user: <br> $user->firstname ' ' $user->lastname <br> $user->email. If you believe this transaction is incorrect, please log in to your account, review it and contact us!",

                        ];

                        $emailData = [
                            'email' => $user->email,
                            'subject' => "Earnings Update!",
                            'message' => "Dear $user->lastname,<br><br> This is to inform you that new earnings of <strong>$" . number_format($earnings->earning, 2) . "</strong> have been credited to your account. <br/><br/> <strong style='font-size: 22px;'>Best Regards!</strong><br> Motion Assets.",
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
                    }
                } elseif ($deposit->plan == 'Premium') {
                    // dump($deposit->amount * 0.02);
                    $earnings = Earnings::create([
                        'user_id' => $deposit->user_id,
                        'deposit' => $deposit->amount,
                        'earning' => $deposit->amount * 0.02,
                        'percentage' => 2,
                    ]);
                    $deposit->decrement('days');

                    $users = User::all();

                    foreach ($users as $user) {
                        $totalEarningsForToday = Earnings::where('user_id', $user->id)->where('status', '0')
                            ->whereDate('created_at', Carbon::today())
                            ->sum('earning');

                        $newBalance = $user->balance + $totalEarningsForToday;
                        User::where('id', $user->id)->update(['balance' => $newBalance]);

                        Earnings::where('user_id', $user->id)
                            ->whereDate('created_at', Carbon::today())
                            ->update(['status' => '1']);

                        $data = [
                            'name' => $user->firstname . ' ' . $user->lastname,
                            'email' => $user->email,
                            'id' => $user->id,
                            'subject' => 'New Earnings Alert!!',
                            'message' => "New earnings of $" . number_format($earnings->earning, 2) . " have been added to your account on Motion Assets.\nEarned by this user: <br> $user->firstname ' ' $user->lastname <br> $user->email. If you believe this transaction is incorrect, please log in to your account, review it and contact us!",

                        ];

                        $emailData = [
                            'email' => $user->email,
                            'subject' => "Earnings Update!",
                            'message' => "Dear $user->lastname,<br><br> This is to inform you that new earnings of <strong>$" . number_format($earnings->earning, 2) . "</strong> have been credited to your account. <br/><br/> <strong style='font-size: 22px;'>Best Regards!</strong><br> Motion Assets.",
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
                    }
                }

            }

        }
    }


    public function sendEmail()
    {
        $earnings = Earnings::where('status', '0')
            ->whereDate('created_at', Carbon::today())
            ->get()
            ->groupBy('user_id');
    
        foreach ($earnings as $userId => $userEarnings) {
            try {
                $user = User::find($userId);
                if (!$user) {
                    continue;
                }
    
                $totalEarnings = $userEarnings->sum('earning'); // Sum earnings for the user
    
                $emailData = [
                    'email' => $user->email,
                    'subject' => "Earnings Update!",
                    'message' => "Dear {$user->lastname},<br><br> This is to inform you that new earnings of <strong>$" . number_format($totalEarnings, 2) . "</strong> have been credited to your account. <br/><br/> <strong style='font-size: 22px;'>Best Regards!</strong><br> Motion Assets.",
                ];
    
                Mail::to($emailData['email'])
                    ->send(new MainEmailDesignMail($emailData));
            } catch (\Exception $e) {
                // Handle the exception (log it or notify an admin)
            }
        }
    }
    
    
}

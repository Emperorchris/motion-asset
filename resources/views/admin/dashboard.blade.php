@extends('layouts.admin')
@php
    use App\Models\User;
@endphp
@section('title')
    Dashboard
@endsection
@section('adminContent')
    <div class="content-wrapper">

        {{-- <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                        <div class="row align-items-center">
                            <div class="col-4 col-sm-3 col-xl-2">
                                <img src="{{ asset('admin/assets/images/dashboard/Group126@2x.png') }}"
                                    class="gradient-corona-img img-fluid" alt="">
                            </div>
                            <div class="col-5 col-sm-7 col-xl-8 p-0">
                                <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                                <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique
                                    layouts!</p>
                            </div>
                            <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                                <span>
                                    <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank"
                                        class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">${{ number_format($activeDeposit,2) }}</h3>
                                    {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> --}}
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Approved Deposit</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">${{ number_format($activeWithdrawal,2) }}</h3>
                                    {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p> --}}
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Approved Withdrawals</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ $users }}</h3>
                                    {{-- <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p> --}}
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success">
                                    <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Number Of Users</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">${{ number_format($declinedWithdrawal,2) }}</h3>
                                    {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> --}}
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-danger ">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Declined Withdrawals</h6>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Transaction History</h4>
                        <canvas id="transaction-history" class="transaction-chart"></canvas>
                        <div
                            class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                            <div class="text-md-center text-xl-left">
                                <h6 class="mb-1">Transfer to Paypal</h6>
                                <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                            </div>
                            <div
                                class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                <h6 class="font-weight-bold mb-0">$236</h6>
                            </div>
                        </div>
                        <div
                            class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                            <div class="text-md-center text-xl-left">
                                <h6 class="mb-1">Tranfer to Stripe</h6>
                                <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                            </div>
                            <div
                                class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                <h6 class="font-weight-bold mb-0">$593</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between">
                            <h4 class="card-title mb-1">Open Projects</h4>
                            <p class="text-muted mb-1">Your data status</p>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="preview-list">
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-primary">
                                                <i class="mdi mdi-file-document"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">Admin dashboard design</h6>
                                                <p class="text-muted mb-0">Broadcast web app mockup</p>
                                            </div>
                                            <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                                <p class="text-muted">15 minutes ago</p>
                                                <p class="text-muted mb-0">30 tasks, 5 issues </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-success">
                                                <i class="mdi mdi-cloud-download"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">Wordpress Development</h6>
                                                <p class="text-muted mb-0">Upload new design</p>
                                            </div>
                                            <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                                <p class="text-muted">1 hour ago</p>
                                                <p class="text-muted mb-0">23 tasks, 5 issues </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-info">
                                                <i class="mdi mdi-clock"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">Project meeting</h6>
                                                <p class="text-muted mb-0">New project discussion</p>
                                            </div>
                                            <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                                <p class="text-muted">35 minutes ago</p>
                                                <p class="text-muted mb-0">15 tasks, 2 issues</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-danger">
                                                <i class="mdi mdi-email-open"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">Broadcast Mail</h6>
                                                <p class="text-muted mb-0">Sent release details to team</p>
                                            </div>
                                            <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                                <p class="text-muted">55 minutes ago</p>
                                                <p class="text-muted mb-0">35 tasks, 7 issues </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-warning">
                                                <i class="mdi mdi-chart-pie"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">UI Design</h6>
                                                <p class="text-muted mb-0">New application planning</p>
                                            </div>
                                            <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                                <p class="text-muted">50 minutes ago</p>
                                                <p class="text-muted mb-0">27 tasks, 4 issues </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        {{-- <h5>Revenue</h5> --}}
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">${{ number_format($declinedDeposit,2) }}</h2>
                                    <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                                </div>
                                <h6 class="text-muted font-weight-normal">Declined Deposits</h6>
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        {{-- <h5>Sales</h5> --}}
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">${{ number_format($alldeposits,2) }}</h2>
                                    {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+8.3%</p> --}}
                                </div>
                                <h6 class="text-muted font-weight-normal"> All Deposits</h6>
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        {{-- <h5>Purchase</h5> --}}
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">${{ number_format($allWithdrawals,2) }}</h2>
                                    {{-- <p class="text-danger ms-2 mb-0 font-weight-medium">-2.1% </p> --}}
                                </div>
                                <h6 class="text-muted font-weight-normal">All withdrawals</h6>
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Withdraws
                            <div class="float-end">
                                <a href="{{ route('admin.withdrawals') }}" class="btn btn-primary text-decoration-none">View All</a>
                            </div>
                        </h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th> Client Name </th>
                                        <th> Amount </th>
                                        <th> Withdrawal Method </th>
                                        <th> Client's Wallet Address </th>
                                        <th> Payment Status </th>
                                        <th> Date </th>
                                        <th> Action </th>
                                        <th> Delete </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($withdrawals as $withdrawal)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @php
                                                
                                                    $user = User::find($withdrawal->user_id);
                                                    if ($user) {
                                                        $userName = $user->firstname . ' ' . $user->lastname;
                                                        $profile = $user->profile_pic;
                                                        if ($withdrawal->withdraw_method == 'btc') {
                                                            $wallet_address = $user->btc_address;
                                                        } elseif ($withdrawal->withdraw_method == 'eth') {
                                                            $wallet_address = $user->eth_address;
                                                        } elseif ($withdrawal->withdraw_method == 'tron') {
                                                            $wallet_address = $user->tron_address;
                                                        } elseif ($withdrawal->withdraw_method == 'bnb') {
                                                            $wallet_address = $user->bnb_address;
                                                        } elseif ($withdrawal->withdraw_method == 'usdt') {
                                                            $wallet_address = $user->usdt_address;
                                                        }else{
                                                        $wallet_address = 'Not Found';
                                                        }
                                                    } else {
                                                        $userName = 'User not found';
                                                    }
                                                @endphp
    
    
                                                <img src="{{ asset($profile ?? 'user-img.png') }}" alt="image" />
                                                <span class="ps-2">{{ $userName }}</span>
                                            </td>
                                            <td>${{ number_format($withdrawal->amount) }}</td>
                                            <td>{{ $withdrawal->withdraw_method }}</td>
                                            <td>{{ $wallet_address == null ? 'Empty' : $wallet_address }}</td>
                                            <td>{{ $withdrawal->status == '0' ? 'Pending' : ($withdrawal->status == '1' ? 'Approved' : 'Declined') }}</td>
                                            <td>{{ Carbon\Carbon::parse($withdrawal->created_at)->format('F j, Y, g:i A') }}</td>
                                            <td class="d-flex">
                                                <form action="{{ route('admin.withdrawals.approve',['id' => $withdrawal->id, 'user_id' => $withdrawal->user_id, 'amount' => $withdrawal->amount]) }}" method="POST">
                                                    @csrf
                                                    @method('patch')
                                                    <button style="margin-right: 8px;" class="badge badge-outline-success">Approve</button>
                                                </form>
                                                <form action="{{ route('admin.withdrawals.decline',['id' => $withdrawal->id, 'user_id' => $withdrawal->user_id, 'amount' => $withdrawal->amount]) }}" method="POST">
                                                    @csrf
                                                    @method('patch')
                                                    <button class="badge badge-outline-danger">Decline</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.withdrawals.delete',$withdrawal->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this transaction?')">
                                                    @csrf
                                                    @method('patch')
                                                    <button class="badge badge-outline-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        {{-- Handle case where there are no deposits --}}
                                        <tr>
                                            <td colspan="8">No deposits found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
    
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Deposits
                            <div class="float-end">
                                <a href="{{ route('admin.deposits') }}" class="btn btn-primary text-decoration-none">View All</a>
                            </div>
                        </h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th> Client Name </th>
                                        <th> Amount </th>
                                        <th> Payment Mode </th>
                                        {{-- <th> Client's Wallet Address </th> --}}
                                        <th> Payment Status </th>
                                        <th> Date </th>
                                        <th> Action </th>
                                        <th> Delete </th>
                                    </tr>
                                <tbody>
                                    @forelse ($deposits as $deposit)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @php
                                                    $user = User::find($deposit->user_id);
                                                    if ($user) {
                                                        $userName = $user->firstname . ' ' . $user->lastname;
                                                        $profile = $profile = $user->profile_pic;
                                                        // if ($deposit->payment_method == 'btc') {
                                                        //     $wallet_address = $user->btc_address;
                                                        // } elseif ($deposit->payment_method == 'eth') {
                                                        //     $wallet_address = $user->eth_address;
                                                        // } elseif ($deposit->payment_method == 'tron') {
                                                        //     $wallet_address = $user->tron_address;
                                                        // } elseif ($deposit->payment_method == 'bnb') {
                                                        //     $wallet_address = $user->bnb_address;
                                                        // } elseif ($deposit->payment_method == 'usdt') {
                                                        //     $wallet_address = $user->usdt_address;
                                                        // }else{
                                                        // $wallet_address = 'Not Found';
                                                        // }
                                                    } else {
                                                        $userName = 'User not found';
                                                    }
                                                @endphp
    
    
                                                <img src="{{  asset($profile ?? 'user-img.png') }}" alt="image" />
                                                {{-- <i class="mdi mdi-account-me"></i> --}}
                                                <span class="ps-2">{{ $userName }}</span>
                                            </td>
                                            <td>{{ number_format($deposit->amount) }}</td>
                                            <td>{{ $deposit->payment_method }}</td>
                                            {{-- <td>{{ $wallet_address }}</td> --}}
                                            <td>{{ $deposit->status == '0' ? 'Pending' : ($deposit->status == '1' ? 'Approved' : 'Declined') }}</td>
                                            <td>{{ Carbon\Carbon::parse($deposit->created_at)->format('F j, Y, g:i A') }}</td>
                                            <td class="d-flex">
                                                <form action="{{ route('admin.deposits.approve',['id' => $deposit->id, 'user_id' => $deposit->user_id, 'amount' => $deposit->amount]) }}" method="POST">
                                                    @csrf
                                                    @method('patch')
                                                    <button style="margin-right: 8px;" class="badge badge-outline-success">Approve</button>
                                                </form>
                                                <form action="{{ route('admin.deposits.decline',['id' => $deposit->id, 'user_id' => $deposit->user_id, 'amount' => $deposit->amount]) }}" method="POST">
                                                    @csrf
                                                    @method('patch')
                                                    <button class="badge badge-outline-danger">Decline</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.deposits.delete',$deposit->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this transaction?')">
                                                    @csrf
                                                    @method('patch')
                                                    <button class="badge badge-outline-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        {{-- Handle case where there are no deposits --}}
                                        <tr>
                                            <td colspan="8">No deposits found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
    
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

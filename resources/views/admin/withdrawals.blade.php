@extends('layouts.admin')
@php
    use App\Models\User;
@endphp
@section('title')Withdrawals @endsection
@section('adminContent')
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Withdrawal Requests</h4>
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
                                                $profile = $user->profile_pic;
                                                if ($user) {
                                                    $userName = $user->firstname . ' ' . $user->lastname;
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
                <div class="d-flex justify-content-end">
                    <div class="py-2 float-end" style="margin-right: 20px;">{{ $withdrawals->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection

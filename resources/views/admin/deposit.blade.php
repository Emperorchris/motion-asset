@extends('layouts.admin')
@php
    use App\Models\User;
@endphp
@section('title')
    Deposits
@endsection
@section('adminContent')
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Clients Deposits</h4>
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
                                    <th> Days Left </th>
                                    <th> Stop/Resume </th>
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
                                                    $profile = $user->profile_pic;

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


                                            <img src="{{ asset($profile ?? 'user-img.png') }}" alt="image" />
                                            {{-- <i class="mdi mdi-account-me"></i> --}}
                                            <span class="ps-2">{{ $userName }}</span>
                                        </td>
                                        <td>{{ number_format($deposit->amount) }}</td>
                                        <td>{{ $deposit->payment_method }}</td>
                                        {{-- <td>{{ $wallet_address }}</td> --}}
                                        <td>{{ $deposit->status == '0' ? 'Pending' : ($deposit->status == '1' ? 'Approved' : 'Declined') }}
                                        </td>
                                        <td class="text-center">
                                            @if ($deposit->days > 0)
                                                @if ($deposit->isPaused)
                                                    <button class="btn btn-sm btn-warning">Paused</button>
                                                @else
                                                    <strong>{{ $deposit->days }} days</strong>
                                                    <div class="progress" style="border-radius: 10px;">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                            role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                            aria-valuemax="80" style="width: 100%"></div>
                                                    </div>
                                                    @if ($deposit->status == '0')
                                                        <small class="text-warning">Pending</small>
                                                    @elseif($deposit->status == '1')
                                                        <small class="text-success">Inprogress</small>
                                                    @else
                                                        <small class="text-danger">Declined</small>
                                                    @endif
                                                @endif
                                            @else
                                                <strong>0 days</strong>
                                                <div class="progress" style="border-radius: 10px;">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                        role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                        aria-valuemax="80" style="width: 100%"></div>
                                                </div>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($deposit->isPaused)
                                                <form action="{{ route('admin.deposits.pause', ['id' => $deposit->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('patch')
                                                    <button style="margin-right: 8px;"
                                                        class="badge badge-outline-success">Resume</button>
                                                </form>
                                            @else
                                                <form action="{{ route('admin.deposits.pause', ['id' => $deposit->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('patch')
                                                    <button style="margin-right: 8px;"
                                                        class="badge badge-outline-warning">Pause</button>
                                                </form>
                                            @endif

                                        </td>
                                        <td>{{ Carbon\Carbon::parse($deposit->created_at)->format('F j, Y, g:i A') }}</td>
                                        <td class="d-flex">
                                            <form
                                                action="{{ route('admin.deposits.approve', ['id' => $deposit->id, 'user_id' => $deposit->user_id, 'amount' => $deposit->amount]) }}"
                                                method="POST">
                                                @csrf
                                                @method('patch')
                                                <button style="margin-right: 8px;"
                                                    class="badge badge-outline-success">Approve</button>
                                            </form>
                                            <form
                                                action="{{ route('admin.deposits.decline', ['id' => $deposit->id, 'user_id' => $deposit->user_id, 'amount' => $deposit->amount]) }}"
                                                method="POST">
                                                @csrf
                                                @method('patch')
                                                <button class="badge badge-outline-danger">Decline</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.deposits.delete', $deposit->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this transaction?')">
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
                    <div class="py-2 float-end" style="margin-right: 20px;">{{ $deposits->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection

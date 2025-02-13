@extends('layouts.admin')
@php
    use App\Models\User;
@endphp
@section('title')
    Users
@endsection
@section('adminContent')
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Clients Details</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th> Client Name </th>
                                    <th> Email </th>
                                    {{-- <th> Password </th> --}}
                                    <th> Client's Balance </th>
                                    <th> Account Plan </th>
                                    <th> KYC Status </th>
                                    <th> Reg. Date </th>
                                    <th> Promo Status </th>
                                    <th> Turn On/Off promo </th>
                                    <th> Send Email </th>
                                    <th> Deposit Fund </th>
                                    <th> View/Edit </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset($user->profile_pic ?? 'user-img.png') }}" alt="image" />
                                            <span class="ps-2">{{ $user->firstname . ' ' . $user->lastname }}</span>
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        {{-- <td>{{ $user->pv }}</td> --}}
                                        <td>${{ number_format($user->balance, 2) }}</td>
                                        {{-- <td>{{ $user->user_ref_id }}</td>
                                        <td>{{ $user->btc_address !== null ? $user->btc_address : 'Empty' }}</td>
                                        <td>{{ $user->eth_address !== null ? $user->eth_address : 'Empty' }}</td>
                                        <td>{{ $user->tron_address !== null ? $user->tron_address : 'Empty' }}</td>
                                        <td>{{ $user->bnb_address !== null ? $user->bnb_address : 'Empty' }}</td>
                                        <td>{{ $user->usdt_address !== null ? $user->usdt_address : 'Empty' }}</td> --}}
                                        <td>{{ $user->account_type !== null ? $user->account_type : 'Empty' }}
                                        </td>
                                        <td>
                                            @if ($user->google_auth != '1')
                                            <center>
                                                <div class="badge badge-outline-danger">
                                                    Not Enabled🚫
                                                </div>
                                            </center>
                                        @else
                                            <center>
                                                <div class="badge badge-outline-success">
                                                    Enabled✨
                                                </div>
                                            </center>
                                        @endif
                                        </td>
                                        <td>{{ Carbon\Carbon::parse($user->created_at)->format('F j, Y, g:i A') }}</td>
                                        <td>
                                            @if ($user->promo == '0')
                                                <center>
                                                    <div class="btn btn-danger btn-sm">
                                                        Not Active🚫
                                                    </div>
                                                </center>
                                            @else
                                                <center>
                                                    <div class="btn btn-success btn-sm">
                                                        Active🔥🔥
                                                    </div>
                                                </center>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($user->promo == '0')
                                                <form action="{{ route('admin.activate-promo', $user->id) }}" method="post">
                                                    @csrf
                                                    @method('patch')
                                                    <center>
                                                        <button class="btn btn-primary btn-sm" type="submit">Activate⚡️</button>
                                                    </center>
                                                </form>
                                            @else
                                            <form action="{{ route('admin.de-activate-promo', $user->id) }}" method="post">
                                                @csrf
                                                @method('patch')
                                                <center>
                                                    <button class="btn btn-primary btn-sm" type="submit">De-Activate🚫</button>
                                                </center>
                                            </form>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.email', $user->id) }}">
                                                <div class="badge badge-outline-primary">Email User</div>
                                            </a>
                                        </td>
                                        <td>
                                            <button class="badge badge-outline-info add-funds-btn"
                                                data-user-id="{{ $user->id }}" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Add Funds</button>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.edituser', $user->id) }}">
                                                <button class="badge badge-outline-info add-funds-btn">View/Edit</button>
                                            </a>
                                        </td>
                                        {{-- <td>
                                            <button class="badge badge-outline-info upgrade-btn"
                                                data-user-id="{{ $user->id }}" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal2">Upgrade</button>
                                        </td> --}}

                                        <td>
                                            <form action="{{ route('admin.users.delete', $user->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this User?')">
                                                @csrf
                                                @method('patch')
                                                <button class="badge badge-outline-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    {{-- Handle case where there are no deposits --}}
                                    <tr>
                                        <td colspan="8">No Users found.</td>
                                    </tr>
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="py-2 float-end" style="margin-right: 20px;">{{ $users->links() }}</div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
            aria-hidden="true" bis_skin_checked="1">
            <div class="modal-dialog" role="document" bis_skin_checked="1">
                <div class="modal-content modal-content-bg" bis_skin_checked="1">
                    <div class="modal-header" bis_skin_checked="1">
                        <strong class="modal-title method-name text-white" id="exampleModalLabel">Add Funds To User</strong>
                        <a href="javascript:void(0)" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <form method="POST" action="{{ route('admin.upgrade', ':id') }}" id="upgradeForm">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="user_id" id="user_id2" value="">
                        <div class="modal-body" bis_skin_checked="1">
                            <div class="form-group" style="margin-top: 20px;">
                                <label for="" class="form-label">Account Upgrade/Downgrade</label><br>
                                <select class="form-control text-white" name="pay_method" id="pay_method"
                                    style="color: #111;" required name="plan">
                                    <option value="Basic">Basic
                                    </option>
                                    <option value="Advanced">
                                        Advanced</option>
                                    <option value="Premium">
                                        Premium</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer" bis_skin_checked="1">
                            <button type="button" class="btn btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Next</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" bis_skin_checked="1">
            <div class="modal-dialog" role="document" bis_skin_checked="1">
                <div class="modal-content modal-content-bg" bis_skin_checked="1">
                    <div class="modal-header" bis_skin_checked="1">
                        <strong class="modal-title method-name text-white" id="exampleModalLabel">Add Funds To User</strong>
                        <a href="javascript:void(0)" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <form method="POST" action="{{ route('admin.fund', ':id') }}" id="addFundsForm">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="user_id" id="user_id" value="">
                        <div class="modal-body" bis_skin_checked="1">
                            <div class="form-group" style="margin-top: 20px;">
                                <label><i class="mdi mdi-bank"></i> Preferred Method<span
                                        class="text-danger">*</span></label>
                                <select class="form-control text-white" name="pay_method" id="pay_method"
                                    style="color: #111;" required>
                                    <option value="">SELECT PREFERRED METHOD</option>
                                    <option value="bit">BITCOIN</option>
                                    <option value="eth">ETHEREUM</option>
                                    <option value="tron">Tron</option>
                                    <option value="bnb">BNB</option>
                                    {{-- <option value="doge">Dogecoin</option> --}}
                                    {{-- <option value="xrp">XRP</option> --}}
                                    <option value="usdt">USDT TRC 20</option>
                                    {{-- <option value="erc">USDT ERC 20</option> --}}
                                    {{-- <option value="spend_acct_bal">Spend Funds From balance</option> --}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label><i class="mdi mdi-cash-multiple"></i> Amount [USD]<span
                                        class="text-danger">*</span></label>
                                <input type="number" required placeholder="Enter Amount" class="form-control text-white"
                                    id="deposit_amount" name="amount">
                            </div>

                        </div>
                        <div class="modal-footer" bis_skin_checked="1">
                            <button type="button" class="btn btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Next</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get modal form and Add Funds buttons
            var addFundsForm = document.getElementById('addFundsForm');
            var addFundsBtns = document.querySelectorAll('.add-funds-btn');
            var userIdInput = document.getElementById('user_id');

            var upgradeForm = document.getElementById('upgradeForm');
            var upgradeBtn = document.querySelectorAll('.upgrade-btn');
            var userIdInput2 = document.getElementById('user_id2');

            // Attach a click event listener to each "Add Funds" button
            upgradeBtn.forEach(function(btn2) {
                btn2.addEventListener('click', function() {
                    var userId2 = this.getAttribute('data-user-id');
                    userIdInput2.value = userId2;
                    upgradeForm.action = "{{ route('admin.upgrade', '') }}" + '/' + userId2;
                });
            });
            addFundsBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var userId = this.getAttribute('data-user-id');
                    userIdInput.value = userId;
                    addFundsForm.action = "{{ route('admin.fund', '') }}" + '/' + userId;
                });
            });
        });
    </script>
@endsection

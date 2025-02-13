@extends('layouts.auth')
@section('title')
    Withdrawal
@endsection

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-lg-8" style="">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="p-2 rounded bg-warning disabled">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="none" viewBox="0 0 24 24"
                                    stroke="white">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="px-3">Request For Withdrawal</h4>
                        </div>
                        {{-- <div class="d-flex align-items-center">
                        <a href="#" class=" border rounded">
                            <svg width="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.9393 12.0129H15.9483" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M11.9301 12.0129H11.9391" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7.92128 12.0129H7.93028" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </div> --}}
                    </div>
                </div>
                <center class="mt-5">Available Balance: <strong style="color:goldenrod;">$
                        {{ number_format(auth()->user()->balance, 2) }}</strong></center>
                <div class="card-body">
                    <form class="d-grid gap-card" method="POST" action="{{ route('userdashboard.storeWithdraw') }}">
                        @csrf
                        <p class="text-danger error"></p>
                        <div class="form-group mb-4">
                            <label class="form-label" for="choices-single-default">Preferred Withdrawal Method</label>
                            <select class="form-select method" data-trigger="" name="withdraw_method"
                                id="choices-single-default">
                                <option value="">Choose Withdrawal
                                    Method</option>
                                <option value="Bitcoin">Bitcoin</option>
                                <option value="Ethereum">Ethereum</option>
                                <option value="Tron">Tron</option>
                                <option value="BNB">BNB</option>
                                <option value="DodgeCoin">DodgeCoin</option>
                                <option value="XRP">XRP</option>
                                <option value="USDT TRC 20">USDT TRC 20</option>
                            </select>
                            @error('account_type')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <div class="input-group">
                                <input name="amount" type="number" class="form-control amount" placeholder="50.00"
                                    aria-label="Recipient's username" aria-describedby="basic-addon4">
                                <span class="input-group-text" id="basic-addon4">USD</span>
                            </div>
                        </div>
                        {{-- <div class="form-group mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="150" aria-label="Recipient's username"
                                aria-describedby="basic-addon4">
                            <span class="input-group-text" id="basic-addon45">Euro</span>
                        </div>
                    </div> --}}
                        <button type="submit" class="btn btn-primary" onclick="return validate()">Withdraw</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
    <script>
        function validate() {
            let method = document.querySelector('.method');
            let amount = document.querySelector('.amount');
            if (method.value == '') {
                document.querySelector('.error').innerHTML = 'Please Select Payment Method'
                return false;
            } else if (amount.value == '') {
                document.querySelector('.error').innerHTML = 'Please Enter Amount To Deposit'
                return false;
            } else {
                document.querySelector('.error').innerHTML = '';
                return true;
            }


        }
    </script>
@endsection

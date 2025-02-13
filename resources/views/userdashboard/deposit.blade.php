@extends('layouts.auth')
@section('title')
    Deposit
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
                            <h4 class="px-3">Proceed With Deposit</h4>
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
                <center class="mt-5">Note: Your Investment Return Or Profit Depends On The Amount You Deposit.</center>
                <div class="card-body">
                    <form class="d-grid gap-card" method="POST" action="{{ route('userdashboard.storeDeposit') }}">
                        @csrf
                        <p class="text-danger error"></p>
                        <div class="form-group mb-4">
                            <label class="form-label" for="choices-single-default">Preferred Payment Method</label>
                            <select class="form-select method" data-trigger="" name="payment_method"
                                id="choices-single-default">
                                <option value="">Choose Payment
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
                                <input name="amount" type="number" class="form-control amount" placeholder="100"
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
                        <button type="button" onclick="showDialog()" class="btn btn-primary">Proceed</button>
                        <div id="exampleModalCenteredScrollable" class="modal fade show" tabindex="-1"
                            aria-labelledby="exampleModalCenteredScrollableTitle" aria-modal="true" role="dialog">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Payment Address
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Copy the wallet address below and pay the exact amount <strong
                                                style="font-size: 19px; color:goldenrod;" class="vamount"></strong> to the
                                            wallet
                                            address directly.</p>
                                        <p>Your Payment will be automatically be approved by our system once it is been
                                            verified.</p>
                                        <p>Wallet Address</p>
                                        <div class="d-flex justify-content-between">
                                            <code>
                                            </code>
                                            <span style="cursor: pointer;">
                                                <div id="copyBtn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                                        width="24" height="24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8 7H5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3m4-10h-4a2 2 0 00-2 2v4a2 2 0 002 2h4a2 2 0 002-2V5a2 2 0 00-2-2zm-4 0V3a1 1 0 00-1-1h-4a1 1 0 00-1 1v2m0 0h6" />
                                                    </svg>
                                                </div>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Complete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>


    <script>
        let amount = document.querySelector('.amount');
        let code = document.querySelector('code');
        amount.addEventListener('keyup', () => {
            document.querySelector('.vamount').innerHTML = "$" + amount.value;
        });

        document.getElementById('copyBtn').addEventListener('click', function() {
            const textToCopy = code.textContent;
            navigator.clipboard.writeText(textToCopy).then(function() {
                // alert('Text copied to clipboard!');
                alertify.success('Wallet Address Copied!');
            }).catch(function(error) {
                console.error('Failed to copy text: ', error);
            });
        });


        let method = document.querySelector('.method');
        method.addEventListener('change', function() {
            switch (method.value) {
                case 'Bitcoin':
                    code.innerHTML = 'bc1qzazh2qsr5z4gymazakyru7n9dxj2nsndcldv9j';
                    break;
                case 'Ethereum':
                    code.innerHTML = '0x7510799De22c2fa856f55E402fF33b630a5AF3f7';
                    break;
                case 'Tron':
                    code.innerHTML = 'TAQdH5st641efAUo9B17Lv5P3Bi2zpEQmv';
                    break;
                case 'BNB':
                    code.innerHTML = '0x7510799De22c2fa856f55E402fF33b630a5AF3f7';
                    break;
                case 'DodgeCoin':
                    code.innerHTML = 'DPom1Ei8Mo3wFpAjyH7e3xkRjyT3MzYM74';
                    break;
                case 'XRP':
                    code.innerHTML = 'r3WTz6wGUvVgvwumVAj13cWKNfiGY8Et3m';
                    break;
                case 'USDT TRC 20':
                    code.innerHTML = 'TAQdH5st641efAUo9B17Lv5P3Bi2zpEQmv';
                    break;
                default:
                    code.innerHTML = '';
                    break;
            }
        });

        function showDialog() {
            if (method.value == '') {
                document.querySelector('.error').innerHTML = 'Please Select Payment Method'
                // return false;
            } else if (amount.value == '') {
                document.querySelector('.error').innerHTML = 'Please Enter Amount To Deposit'
                // return false;
            } else {
                document.querySelector('.error').innerHTML = '';

                // Trigger modal
                const modal = new bootstrap.Modal(document.getElementById('exampleModalCenteredScrollable'));
                modal.show();
            }
        }
    </script>
@endsection

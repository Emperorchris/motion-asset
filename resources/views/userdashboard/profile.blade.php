@extends('layouts.auth')
@section('title')
    Account Settings
@endsection
@php
    use App\Models\Deposits;
@endphp

@section('content')
    <div class="container-fluid content-inner pb-0">
        <div>

            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">User Profile</h4>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <div class="profile-img-edit position-relative">
                                    <img class="img-fluid avatar avatar-100 avatar-rounded"
                                        src="{{ asset('userdashboard/assets/images/avatars/01.png') }}" alt="profile-pic">
                                    {{-- <div class="upload-icone bg-primary">
                                        <svg class="upload-button" width="14" height="14" viewBox="0 0 24 24">
                                            <path fill="#ffffff"
                                                d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                                        </svg>
                                        <input class="file-upload" type="file" accept="image/*">
                                    </div> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Account Information</h4>
                            </div>
                        </div>
                        <form method="POST" enctype="multipart/form-data"
                            action="{{ route('userdashboard.profileUpdate') }}">
                            @method('patch')
                            @csrf
                            <div class="card-body">
                                <div class="new-user-info">

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="fname">First Name:</label>
                                            <input name="firstname" value="{{ old('firstname', $user->firstname ?? '') }}"
                                                type="text" class="form-control" id="fname" placeholder="First Name">
                                            @error('firstname')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="lname">Last Name:</label>
                                            <input name="lastname" value="{{ old('lastname', $user->lastname ?? '') }}"
                                                type="text" class="form-control" id="lname" placeholder="Last Name">
                                            @error('lastname')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="mobno">Mobile Number:</label>
                                            <input name="phone_number"
                                                value="{{ old('phone_number', $user->phone_number ?? '') }}" type="text"
                                                class="form-control" id="mobno" placeholder="Mobile Number">
                                            @error('phone_number')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="email">Email:</label>
                                            <input name="email" value="{{ old('email', $user->email ?? '') }}"
                                                type="email" class="form-control" id="email" placeholder="Email">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <hr>
                                    <h5 class="mb-3">Payment Wallet Address</h5>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="btc_address">BitCoin</label>
                                            <input name="btc_address"
                                                value="{{ old('btc_address', $user->btc_address ?? '') }}" type="text"
                                                class="form-control" id="btc_address" placeholder="">
                                            @error('btc_address')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="eth_address">Ethereum</label>
                                            <input name="eth_address"
                                                value="{{ old('eth_address', $user->eth_address ?? '') }}" type="text"
                                                class="form-control" id="eth_address" placeholder="">
                                            @error('eth_address')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="tron_address">Tron</label>
                                            <input name="tron_address"
                                                value="{{ old('tron_address', $user->tron_address ?? '') }}"
                                                type="text" class="form-control" id="tron_address" placeholder="">
                                            @error('tron_address')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="usdt_address">USDT TRC20</label>
                                            <input name="usdt_address"
                                                value="{{ old('usdt_address', $user->usdt_address ?? '') }}"
                                                type="text" class="form-control" id="usdt_address" placeholder="">
                                            @error('usdt_address')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="bnb_address">BNB</label>
                                            <input name="bnb_address"
                                                value="{{ old('bnb_address', $user->bnb_address ?? '') }}" type="text"
                                                class="form-control" id="bnb_address" placeholder="">
                                            @error('bnb_address')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <h5 class="mb-3 mt-3">Security | Change Password</h5>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="password">Current Password:</label>
                                            <input name="old_password" type="password" class="form-control"
                                                id="password" placeholder="Current Password">
                                            @error('old_password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="new_password">New Password:</label>
                                            <input name="new_password" type="password" class="form-control"
                                                id="new_password" placeholder="New Password" autocomplete="new-password">
                                            @error('new_password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="password_confirmation">Repeat New
                                                Password:</label>
                                            <input name="password_confirmation" type="password" class="form-control"
                                                id="password_confirmation" placeholder="Repeat New Password">
                                            @error('password_confirmation')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="checkbox">
                                        <label class="form-label"><input class="form-check-input me-2" type="checkbox"
                                                value="" id="flexCheckChecked">Enable
                                            Two-Factor-Authentication</label>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

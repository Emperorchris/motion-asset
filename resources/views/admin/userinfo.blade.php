@extends('layouts.admin')
@section('title')
    Edit User Info
@endsection
@section('adminContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header mt-3 p-6">
                    <h3>User Dashboard
                        <a href="{{ route('admin.users') }}" class="btn-lg btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="seo-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-seo" type="button" role="tab" aria-controls="pills-seo"
                                        aria-selected="false">Deposits</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Withdrawals</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="image-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-image" type="button" role="tab"
                                        aria-controls="pills-image" aria-selected="false">Earnings</button>
                                </li>
                                {{-- <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="color-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-color" type="button" role="tab"
                                        aria-controls="pills-color" aria-selected="false">Colors</button>
                                </li> --}}
                                {{-- <li class="float-end">
                                    <a href="{{ route('admin.users') }}" class="btn btn-primary float-end">Back</a>
                                </li> --}}
                            </ul>
                            <form action="{{ route('admin.updateuser', $user->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">

                                        @if ($user->google_auth != '0')
                                            <h5 style="text-align: left;" class="p-2">
                                                {{ $user->firstname . ' ' . $user->lastname }} requested for KYC
                                                verification.
                                                <br> <br> KYC Status: <strong
                                                    class="text-primary">{{ $user->google_auth == '1' ? 'KYC Verified' : 'KYC Not Verified' }}</strong>
                                            </h5>
                                            <div class="d-flex">
                                                <button type="submit"
                                                    formaction="{{ route('admin.approveKyc', $user->id) }}"
                                                    style="margin: 0 10px;" class="btn-success btn btn-sm">
                                                    Approve KYC
                                                </button>
                                                <button type="submit"
                                                    formaction="{{ route('admin.declineKyc', $user->id) }}"
                                                    class="btn-danger btn btn-sm">
                                                    Decline KYC
                                                </button>
                                            </div>
                                            <br>
                                            <hr>
                                            <br>
                                        @else
                                        @endif



                                        <div class="form-group mt-4">
                                            <label for="exampleInputName1">First Name</label>
                                            <input type="text" name="firstname" class="form-control text-white"
                                                value="{{ $user->firstname ?? 'Empty' }}" placeholder="">
                                            @error('firstname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-4">
                                            <label for="exampleInputName1">Last Name</label>
                                            <input type="text" name="lastname" value="{{ $user->lastname ?? 'Empty' }}"
                                                class="form-control text-white" id="" placeholder="">
                                            @error('lastname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-4">
                                            <label for="exampleInputName1">Balance</label>
                                            <input name="balance" value="{{ $user->balance ?? 'Empty' }}" type="text"
                                                class="form-control text-white" id="exampleInputName1" placeholder="">
                                            @error('balance')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-4">
                                            <label for="exampleInputName1">Email</label>
                                            <input name="email" value="{{ $user->email ?? 'Empty' }}" type="text"
                                                class="form-control text-white" id="exampleInputName1" placeholder="">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-4">
                                            <label for="" class="form-label">Account Plan</label><br>
                                            <select class="form-control text-white" name="plan" id="pay_method"
                                                style="color: #111;">
                                                <option value="Basic"
                                                    {{ $user->account_type == 'Basic' ? 'selected' : '' }}>Basic
                                                </option>
                                                <option value="Advanced"
                                                    {{ $user->account_type == 'Advanced' ? 'selected' : '' }}>
                                                    Advanced</option>
                                                <option value="Premium"
                                                    {{ $user->account_type == 'Premium' ? 'selected' : '' }}>
                                                    Premium</option>
                                            </select>
                                            @error('slug')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-4">
                                            <label for="exampleInputName1">Referral Id</label>
                                            <input name="referral_id" value="{{ $user->user_ref_id ?? 'Empty' }}"
                                                type="text" class="form-control text-white" id="exampleInputName1"
                                                placeholder="">
                                            @error('referral_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-4">
                                            <label for="exampleInputPassword4">BTC Address</label>
                                            <input id="" value="{{ $user->btc_address ?? 'Empty' }}"
                                                class="form-control bg-black text-white" readonly>
                                        </div>
                                        <div class="form-group mt-4">
                                            <label for="exampleInputPassword4">ETH Address</label>
                                            <input id="" value="{{ $user->eth_address ?? 'Empty' }}"
                                                class="form-control bg-black text-white" readonly>
                                        </div>
                                        <div class="form-group mt-4">
                                            <label for="exampleInputPassword4">TRON Address</label>
                                            <input id="" value="{{ $user->tron_address ?? 'Empty' }}"
                                                class="form-control bg-black text-white" readonly>
                                        </div>
                                        <div class="form-group mt-4">
                                            <label for="exampleInputPassword4">BNB Address</label>
                                            <input id="" value="{{ $user->bnb_address ?? 'Empty' }}"
                                                class="form-control bg-black text-white" readonly>
                                        </div>
                                        <div class="form-group mt-4">
                                            <label for="exampleInputPassword4">USDT Address</label>
                                            <input id="" value="{{ $user->usdt_address ?? 'Empty' }}"
                                                class="form-control bg-black text-white" readonly>
                                        </div>


                                    </div>


                                    <div class="tab-pane fade" id="pills-seo" role="tabpanel"
                                        aria-labelledby="pills-seo-tab">
                                        <div class="col-12 grid-margin">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">User Deposits</h4>
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



                                                                            <img src="{{ asset('user-img.png') }}"
                                                                                alt="image" />
                                                                            {{-- <i class="mdi mdi-account-me"></i> --}}
                                                                            <span
                                                                                class="ps-2">{{ $user->firstname . ' ' . $user->lastname }}</span>
                                                                        </td>
                                                                        <td>{{ number_format($deposit->amount) }}</td>
                                                                        <td>{{ $deposit->payment_method }}</td>
                                                                        {{-- <td>{{ $wallet_address }}</td> --}}
                                                                        <td>{{ $deposit->status == '0' ? 'Pending' : ($deposit->status == '1' ? 'Approved' : 'Declined') }}
                                                                        </td>
                                                                        <td>{{ Carbon\Carbon::parse($deposit->created_at)->format('F j, Y, g:i A') }}
                                                                        </td>
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
                                                                                <button
                                                                                    class="badge badge-outline-danger">Decline</button>
                                                                            </form>
                                                                        </td>
                                                                        <td>
                                                                            <form
                                                                                action="{{ route('admin.deposits.delete', $deposit->id) }}"
                                                                                method="POST"
                                                                                onsubmit="return confirm('Are you sure you want to delete this transaction?')">
                                                                                @csrf
                                                                                @method('patch')
                                                                                <button
                                                                                    class="badge badge-outline-danger">Delete</button>
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
                                                {{-- <div class="d-flex justify-content-end">
                                                    <div class="py-2 float-end" style="margin-right: 20px;">{{ $deposits->links() }}</div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                        aria-labelledby="pills-contact-tab">

                                        <div class="col-12 grid-margin">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">User Withdrawals</h4>
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
                                                                @forelse ($withdrawals as $withdrawal)
                                                                    <tr>
                                                                        <td>{{ $loop->iteration }}</td>
                                                                        <td>



                                                                            <img src="{{ asset('user-img.png') }}"
                                                                                alt="image" />
                                                                            {{-- <i class="mdi mdi-account-me"></i> --}}
                                                                            <span
                                                                                class="ps-2">{{ $user->firstname . ' ' . $user->lastname }}</span>
                                                                        </td>
                                                                        <td>{{ number_format($withdrawal->amount) }}</td>
                                                                        <td>{{ $withdrawal->payment_method }}</td>
                                                                        {{-- <td>{{ $wallet_address }}</td> --}}
                                                                        <td>{{ $withdrawal->status == '0' ? 'Pending' : ($withdrawal->status == '1' ? 'Approved' : 'Declined') }}
                                                                        </td>
                                                                        <td>{{ Carbon\Carbon::parse($withdrawal->created_at)->format('F j, Y, g:i A') }}
                                                                        </td>
                                                                        <td class="d-flex">
                                                                            <form
                                                                                action="{{ route('admin.withdrawals.approve', ['id' => $withdrawal->id, 'user_id' => $withdrawal->user_id, 'amount' => $withdrawal->amount]) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('patch')
                                                                                <button style="margin-right: 8px;"
                                                                                    class="badge badge-outline-success">Approve</button>
                                                                            </form>
                                                                            <form
                                                                                action="{{ route('admin.withdrawals.decline', ['id' => $withdrawal->id, 'user_id' => $withdrawal->user_id, 'amount' => $withdrawal->amount]) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('patch')
                                                                                <button
                                                                                    class="badge badge-outline-danger">Decline</button>
                                                                            </form>
                                                                        </td>
                                                                        <td>
                                                                            <form
                                                                                action="{{ route('admin.withdrawals.delete', $withdrawal->id) }}"
                                                                                method="POST"
                                                                                onsubmit="return confirm('Are you sure you want to delete this transaction?')">
                                                                                @csrf
                                                                                @method('patch')
                                                                                <button
                                                                                    class="badge badge-outline-danger">Delete</button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                @empty
                                                                    {{-- Handle case where there are no withdrawals --}}
                                                                    <tr>
                                                                        <td colspan="8">No withdrawals found.</td>
                                                                    </tr>
                                                                @endforelse
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </div>
                                                {{-- <div class="d-flex justify-content-end">
                                                    <div class="py-2 float-end" style="margin-right: 20px;">{{ $withdrawals->links() }}</div>
                                                </div> --}}
                                            </div>
                                        </div>

                                    </div>


                                    <div class="tab-pane fade" id="pills-image" role="tabpanel"
                                        aria-labelledby="pills-image-tab">
                                        <div class="col-12 grid-margin">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">User Deposits</h4>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>S/N</th>
                                                                    <th> Client Name </th>
                                                                    <th> Amount Deposited </th>
                                                                    <th> Amount Earned </th>
                                                                    <th> Percentage </th>
                                                                    {{-- <th> Client's Wallet Address </th> --}}
                                                                    {{-- <th> Payment Status </th> --}}
                                                                    <th> Date </th>
                                                                    {{-- <th> Action </th> --}}
                                                                    <th> Delete </th>
                                                                </tr>
                                                            <tbody>
                                                                @forelse ($earnings as $earning)
                                                                    <tr>
                                                                        <td>{{ $loop->iteration }}</td>
                                                                        <td>



                                                                            <img src="{{ asset('user-img.png') }}"
                                                                                alt="image" />
                                                                            {{-- <i class="mdi mdi-account-me"></i> --}}
                                                                            <span
                                                                                class="ps-2">{{ $user->firstname . ' ' . $user->lastname }}</span>
                                                                        </td>
                                                                        <td>{{ $earning->deposit }}</td>
                                                                        <td>{{ $earning->earning }}</td>
                                                                        <td>{{ $earning->percentage }}</td>
                                                                        {{-- <td>{{ $wallet_address }}</td> --}}
                                                                        {{-- <td>{{ $earning->status == '0' ? 'Pending' : ($earning->status == '1' ? 'Approved' : 'Declined') }}</td> --}}
                                                                        <td>{{ Carbon\Carbon::parse($earning->created_at)->format('F j, Y, g:i A') }}
                                                                        </td>

                                                                        <td>
                                                                            <form
                                                                                action="{{ route('admin.earnings.delete', $earning->id) }}"
                                                                                method="POST"
                                                                                onsubmit="return confirm('Are you sure you want to delete this transaction?')">
                                                                                @csrf
                                                                                @method('patch')
                                                                                <button
                                                                                    class="badge badge-outline-danger">Delete</button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                @empty
                                                                    {{-- Handle case where there are no earnings --}}
                                                                    <tr>
                                                                        <td colspan="8">No earnings found.</td>
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
                                <div class="mt-4 float-end">
                                    <button type="submit" class="btn btn-lg btn-primary">Update User</button>
                                </div>
                            </form>



                            {{-- <form method="POST" class="forms-sample" enctype="multipart/form-data"
                                action="{{ route('admin.category.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input name="name" type="text" class="form-control text-white"
                                        id="exampleInputName1" placeholder="Name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Slug</label>
                                    <input type="text" name="slug" class="form-control text-white"
                                        id="exampleInputEmail3" placeholder="Unique Product Name">
                                    @error('slug')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror02
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Description</label>
                                    <textarea name="description" style="resize: vertical" id="" class="form-control text-white" rows="30"
                                        cols="10"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    
                                </div>
                                
                                <div class="form-group">
                                    <label>Image upload</label>
                                    <input type="file" name="image" class="file-upload-default text-white">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled
                                            placeholder="Upload Image">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><br>
                                <div class="form-check d-flex align-items-center">
                                    <label class="me-5" for="exampleInputCity1">Status: </label>
                                    <input style="" class="form-check-input form-check-input-sm form-control"
                                        type="checkbox" checked name="status">
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div><br>
                                <hr>
                                <div class="col-md-12">
                                    <h3>SEO TAGS</h3>
                                </div> <br>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control text-white"
                                        id="exampleInputEmail3" placeholder="Meta Title">
                                    @error('meta_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Meta Keyword</label>
                                    <textarea placeholder="search Keywords" name="meta_keyword" style="resize: vertical" id=""
                                        class="form-control text-white" rows="30" cols="10"></textarea>
                                    @error('meta_keyword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Meta Description</label>
                                    <textarea name="meta_description" style="resize: vertical" id="" class="form-control text-white" rows="30"
                                        cols="10"></textarea>
                                    @error('meta_description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form> --}}
                        </div>
                    </div>
                </div>
                {{-- <div class="card-body">
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Gender</label>
                            <select class="form-control" id="exampleSelectGender">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">City</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Textarea</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
                    <form action="">
                        <div class="mb-3 bg-white">
                            <label for="">Name</label>
                            <input type="text" class="form-control" />
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
@endsection

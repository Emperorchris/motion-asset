@extends('layouts.admin')
@php
    use App\Models\User;
@endphp
@section('title')
    Referals
@endsection
@section('adminContent')
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Referrals</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th> Parent Referral </th>
                                    <th> Parent Referral Code </th>
                                    <th> Referred </th>
                                    <th> Child Referral Code</th>
                                    <th> Date </th>
                                    {{-- <th> Action </th> --}}
                                    {{-- <th> Delete </th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @dd($referrals) --}}
                                @forelse ($referrals as $referral)
                                    {{-- @dd($referral) --}}
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @php
                                                $parentReferral = User::where('id', $referral->referral_id)
                                                    ->orWhere('user_ref_id', $referral->referral_id)
                                                    ->first();
                                                // dd($parentReferral);
                                            @endphp
                                            {{-- <img src="{{ asset('user-img.png') }}" alt="image" /> --}}
                                            @if ($parentReferral)
                                                <span class="ps-2">{{ $parentReferral->firstname ?? '' }}
                                                    {{ $parentReferral->lastname ?? '' }}</span>
                                            @else
                                                <span class="ps-2">No parent referral found</span>
                                            @endif

                                        </td>
                                        <td>{{ $parentReferral->user_ref_id ?? '' }}</td>
                                        <td>{{ $referral->firstname . ' ' . $referral->lastname }}</td>
                                        <td>{{ $referral->user_ref_id }}</td>
                                        <td>{{ Carbon\Carbon::parse($referral->created_at)->format('F j, Y, g:i A') }}</td>
                                        <td>
                                            {{-- <form action="{{ route('admin.referrals.delete',$referral->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this transaction?')">
                                                @csrf
                                                @method('patch')
                                                <button class="badge badge-outline-danger">Delete</button>
                                            </form> --}}
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
@endsection

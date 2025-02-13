@extends('layouts.auth')
@section('title')
    Referral Records
@endsection
@php
    use App\Models\Deposits;
@endphp

@section('content')
    <div class="container-fluid content-inner pb-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between border-0">
                        <div class="header-title mb-5">
                            <h4 class="card-title" style="font-size: 15px;">Referral Link: <a style="color:goldenrod;" target="blank"
                                    href="https://site.com/register?sponsor_id={{ Auth::user()->user_ref_id }}">https://site.com/register?sponsor_id={{ Auth::user()->user_ref_id }}</a>
                            </h4>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="basic-table" class="table table-striped table-shadow mb-0" role="grid">
                                <thead class="border-0">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Bonus</th>
                                        <th>Name</th>
                                        <th>Reg. Date/Time</th>
                                        {{-- <th>Completion</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($referrals as $referral)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            @php
                                                if (Deposits::where('user_id', $referral->id)->exists()) {
                                                    $bonus = '10';
                                                } else {
                                                    $bonus = '0';
                                                }
                                            @endphp
                                            <td> ${{ number_format($bonus, 2) }}</td>
                                            <td>{{ $referral->firstname . ' ' . $referral->lastname }}</td>
                                            <td>{{ Carbon\Carbon::parse($referral->created_at)->format('F j, Y, g:i A') }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>No Referral Record Found!</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    {{-- {{ $referrals->links() }} --}}
                </div>

            </div>
        </div>
    </div>
@endsection

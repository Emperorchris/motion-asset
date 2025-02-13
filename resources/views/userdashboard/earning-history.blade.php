@extends('layouts.auth')
@section('title')
    Profit Records
@endsection

@section('content')
    <div class="container-fluid content-inner pb-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between border-0">
                        <div class="header-title ">
                            <h4 class="card-title">Earnings Transaction record</h4>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="basic-table" class="table table-striped table-shadow mb-0" role="grid">
                                <thead class="border-0">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Date/Time</th>
                                        <th>Profit Earned</th>
                                        {{-- <th>Status</th> --}}
                                        {{-- <th>Completion</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($earnings as $earning)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>
                                                {{ Carbon\Carbon::parse($earning->created_at)->format('j, F Y. g:i A') }}
                                            </td>
                                            <td>{{ number_format($earning->earning,2) }}</td>
                                            {{-- <td>
                                                @if ($earning->status == '0')
                                                <div class="text-warning">Pending</div>
                                                @elseif($earning->status == '1')
                                                <div class="text-success">Approved</div>
                                                @else
                                                <div class="text-danger">Declined</div>
                                                @endif
                                            </td> --}}

                                        </tr>
                                    @empty
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    {{ $earnings->links() }}
                </div>
                
            </div>
        </div>
    </div>
@endsection

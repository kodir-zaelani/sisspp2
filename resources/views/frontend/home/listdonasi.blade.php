@extends('layouts.appf')

@section('title', 'Home')
@section('content')

<div class="container px-4 py-5 col-xxl-8">
   <div class="container" style="margin-top:120px">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('donations.create') }}" class="mb-3 border-0 shadow-sm btn btn-md btn-primary">Send Donation</a>
            <div class="border-0 rounded shadow-sm card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Amount</th>
                                <th>Notes</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($donations as $donation)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $donation->name }}</td>
                                <td>{{ $donation->email }}</td>
                                <td>{{ number_format($donation->amount, 0, ',', '.') }}</td>
                                <td>{{ $donation->note }}</td>
                                <td class="text-center">{{ $donation->status }}</td>
                                <td class="text-center">
                                    @if($donation->status == 'PENDING')
                                    <button onclick="payment('{{ $donation->snap_token }}');" class="border-0 shadow-sm btn btn-sm btn-dark">Pay</button>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                No donations found.
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $donations->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
<script>
    function payment(n) {
        snap.pay(n, {
            onSuccess: function () {
                window.location = "/donations"
            },
            onPending: function () {
                window.location = "/donations"
            },
            onError: function () {
                window.location = "/donations"
            }
        })
    }
</script>
@endsection


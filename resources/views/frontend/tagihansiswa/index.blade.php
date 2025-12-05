@extends('layouts.appf')

@section('title', 'Home')
@section('content')

<div class="container px-4 py-5 col-xxl-8">
   <div class="container" style="margin-top:120px">
    <div class="row">
        <div class="col-md-12">
            {{-- <a href="{{ route('donations.create') }}" class="mb-3 border-0 shadow-sm btn btn-md btn-primary">Send Donation</a> --}}
            <div class="border-0 rounded shadow-sm card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Full Name</th>
                                <th>Rombongan Belajar</th>
                                <th>Semester</th>
                                <th>Jenis Tagihan</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tagihans as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $item->pesertadidik->nama }}</td>
                                <td>{{ $item->rombonganbelajar->nama }}</td>
                                <td>{{ $item->semseter->nama }}</td>
                                <td>{{ $item->jenistagihan->nama }}</td>
                                <td>{{ number_format($item->nilai_tagihan, 0, ',', '.') }}</td>
                                <td class="text-center">{{ $item->status }}</td>
                                <td class="text-center">
                                    @if($item->status == 'PENDING')
                                    <button onclick="payment('{{ $item->snap_token }}');" class="border-0 shadow-sm btn btn-sm btn-dark">Bayar</button>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                No tagihans found.
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $tagihans->links('pagination::bootstrap-5') }}
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
                window.location = "/tagihans"
            },
            onPending: function () {
                window.location = "/tagihans"
            },
            onError: function () {
                window.location = "/tagihans"
            }
        })
    }
</script>
@endsection


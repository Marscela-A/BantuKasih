@extends('layouts.master')

@section('title', 'Pembayaran Donasi')

@section('konten')
    <div class="text-center">
        <h1>Halaman Pembayaran</h1>
        <p>Terima kasih atas donasi Anda sebesar <strong>Rp{{ number_format($donation->amount, 0, ',', '.') }}</strong>.</p>
        <button id="pay-button" class="btn btn-primary">Bayar Sekarang</button>
    </div>
@endsection 

@section('scripts')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script>
        document.getElementById('pay-button').addEventListener('click', function () {
            snap.pay('{{ $snapToken }}');
        });
    </script>
    <script type="text/javascript">
      document.getElementById('pay-button').onclick = function(){
        // SnapToken acquired from previous step
        snap.pay('{{ $transaction->snap_token }}', {
          // Optional
          onSuccess: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          // Optional
          onPending: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          // Optional
          onError: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          }
        });
      };
    </script>
@endsection 
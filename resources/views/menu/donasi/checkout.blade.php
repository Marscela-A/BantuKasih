@extends('layout.master')

@section('title', 'Bayar')

@section('konten')
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                Anda akan melakukan donasi untuk <strong>{{ $donasi->judul }}</strong> dengan nominal
                <strong>Rp{{ number_format($form->nominal, 0, ',', '.') }}</strong>
                <button type="button" class="btn btn-danger mt-3" id="pay-button" style="background-color: #AF0000; color: white;">
                    Bayar Sekarang
                </button>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{env('MIDTRANS_CLIENT_KEY')}}"></script> 
    <script type="text/javascript">
      document.getElementById('pay-button').onclick = function(){
        // SnapToken acquired from previous step
        snap.pay('{{$snapToken}}', {
          // Optional
          onSuccess: function(result){
            window.location.href='{{route('sukses', $donasi->id)}}';
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

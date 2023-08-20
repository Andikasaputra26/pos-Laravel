@extends('layout.app')
@section('js')
     <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
     <script type="text/javascript"
     src="https://app.sandbox.midtrans.com/snap/snap.js"
     data-client-key="{{ config('midtrans.client_key') }}"></script>
   <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
@endsection
@section('content')
<div class="container">
    <h1 class="my-3">Toko Cuy</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Detail Pesanan</h5>
          <table>
            <tr>
                <td>Id Customers</td>
                <td>: {{ $pembelian->id_customers }}</td>
            </tr>

            <tr>
                <td>Diskon Customers</td>
                <td>: {{ $pembelian->diskon_customers }}</td>
            </tr>

            <tr>
                <td>Total Diskon</td>
                <td>: {{ $pembelian->total_diskon }}</td>
            </tr>

            <tr>
                <td>Subtotal</td>
                <td>: {{ $pembelian->subtotal }}</td>
            </tr>

        </table>
        <button class="btn btn-primary" id="pay-button">Bayar Sekarang</button>
        </div>
      </div>
</div>
<script type="text/javascript">
  // For example trigger on button clicked, or any time you need
  var payButton = document.getElementById('pay-button');
  payButton.addEventListener('click', function () {
    // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
    window.snap.pay('{{ $snapToken }}', {
      onSuccess: function(result){
        /* You may add your own implementation here */
        // alert("payment success!"); 
        window.location.href = '/invoice/{{ $pembelian->id }}'
        console.log(result);
      },
      onPending: function(result){
        /* You may add your own implementation here */
        alert("wating your payment!"); console.log(result);
      },
      onError: function(result){
        /* You may add your own implementation here */
        alert("payment failed!"); console.log(result);
      },
      onClose: function(){
        /* You may add your own implementation here */
        alert('you closed the popup without finishing the payment');
      }
    })
  });
</script>
@endsection
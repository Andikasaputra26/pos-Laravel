@extends('layout.app')
@section('content')
<div class="container">
    <h1 class="my-3">INVOICE</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Detail Pesanan</h5>
            <table>
                <tr>
                    <td>Id Customers</td>
                    <td>: {{ $pembelian->id_customers }} </td>
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

                <tr>
                    <td>Status</td>
                    <td>: {{ $pembelian->status }}</td>
                </tr>

            </table>            
        </div>
      </div>
</div>

@endsection
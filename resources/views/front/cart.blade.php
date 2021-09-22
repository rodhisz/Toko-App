@extends('welcome')
@section('main')

<main class="container">
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Detail</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>
    </div>

    <div style="margin-top: -10px;">
        <div class="alert alert-danger" role="alert">
            Produk telah dihapus!
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table text-center" style="border: 0px;">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Gambar</td>
                        <td>Keterangan</td>
                        <td>Jumlah</td>
                        <td>Harga</td>
                        <td>Total Harga</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img src="img/produk/baju-1.jpg" class="img-fluid" width="200" alt=""></td>
                        <td>Baju</td>
                        <td>2</td>
                        <td>Rp 200.000</td>
                        <td><strong>Rp 400.000</strong></td>
                        <td><i class="fas fa-trash text-danger" style="cursor: pointer;"></i></td>
                    </tr>
                    <!-- <tr>
                        <td colspan="7">Keranjang masih kosong</td>
                    </tr> -->
                    <tr>
                        <td colspan="6" align="right"><strong>Total Harga :</strong></td>
                        <td align="right">Rp 400.000</td>
                    </tr>
                    <tr>
                        <td colspan="6" align="right">Kode Unik :</td>
                        <td align="right">Rp 563</td>
                    </tr>
                    <tr>
                        <td colspan="6" align="right"><strong>Total yang Harus Dibayarkan :</strong></td>
                        <td align="right">Rp 400.563</td>
                    </tr>
                    <tr>
                        <td colspan="7" align="right"><a href="{{route('checkout')}}" class="btn btn-primary">Check Out</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection

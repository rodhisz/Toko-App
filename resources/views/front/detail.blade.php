@extends('welcome')

@section('main')

<main class="container">
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
        </nav>
    </div>

    <div style="margin-top: -10px;">
        <div class="alert alert-success" role="alert">
            A simple success alert—check it out!
        </div>
    </div>

    <div class="row mt-4">
        <!-- Kiri -->
        <div class="col md-6">
            <div class="card">
                <div class="card-body text-center">
                    <img src="img/produk/baju-1.jpg" class="img-fluid w-75" alt="...">
                </div>
            </div>
        </div>
        <!-- Kanan -->
        <div class="col md-6">
            <h3>Baju</h3>
            <h2>Rp 200.000</h2>

            <table class="table">
                <tbody>
                <tr>
                    <td>Jenis</td>
                    <td colspan="2">Pakaian</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Berat</td>
                    <td colspan="2">0.25 Kg</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td colspan="2">
                        <input type="number">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Catatan</td>
                    <td colspan="2">
                        <input type="text">
                    </td>
                    <td></td>
                </tbody>
            </table>
            <div class="row">
                <a href="{{route('cart')}}" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
</main>
@endsection

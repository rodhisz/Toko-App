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
        <div class="alert alert-success" role="alert">
            Produk berhasil ditambahkan
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="#" class="btn btn-sm btn-warning"> <i class="fas fa-arrow-left"></i></a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col md-6">
            <h4>Informasi Pembayaran</h4>
            <hr>
            <p>Silahkan melakukan pembayaran melalui transfer bank di bawah ini sebesar <strong>Rp 400.563</strong></p>

            <div>
                <table width="100%">
                        <tr>
                            <td>
                                <div class="mt-4">
                                    <img src="https://1.bp.blogspot.com/-whCKrPGUY80/YCK2KdGONrI/AAAAAAAAD34/FD0JXqUg5Fk8fAqgQcqLrTFwTRdSnmDUgCLcBGAsYHQ/s1600/Logo%2BBSI%2B%2528Bank%2BSyariah%2BIndonesia%2529.png" alt="Bank BSI" width="80">
                                </div>
                            </td>
                            <td>
                                <div class="mt-4">
                                    <h5>Bank BSI</h5>
                                    No. Rekening <strong>345655677</strong> a.n <strong>BAMBANG SUBARJO</strong>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mt-4">
                                    <img src="https://1.bp.blogspot.com/-r636Aob_z_A/XicFI0zvA-I/AAAAAAAABe8/dIi1moSFZpMO7TFwhXAIEeaIpQhMCK9yACLcBGAsYHQ/s1600/Logo%2Bbank%2BBNI.png" alt="Bank BSI" width="80">
                                </div>
                            </td>
                            <td>
                                <div class="mt-4">
                                    <h5>Bank BNI</h5>
                                    No. Rekening <strong>456789876898</strong> a.n <strong>BAMBANG SUBARJO</strong>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mt-4">
                                    <img src="https://rekreartive.com/wp-content/uploads/2019/04/Logo-BRI-Bank-Rakyat-Indonesia-PNG-Terbaru-1140x973.png" alt="Bank BSI" width="80">
                                </div>
                            </td>
                            <td>
                                <div class="mt-4">
                                    <h5>Bank BRI</h5>
                                    No. Rekening <strong>78909878987</strong> a.n <strong>BAMBANG SUBARJO</strong>
                                </div>
                            </td>
                        </tr>
                </table>
            </div>
        </div>

        <div class="col md-6">
            <h4>Informasi Pengiriman</h4>
            <hr>
            <div class="form-group mb-3">
                <label for="">No. HP</label>
                <input type="text" class="form-control mt-2">
            </div>
            <div class="form-group mb-3">
                <label for="">Alamat</label>
                <textarea type="text" class="form-control mt-2" style="height: 190px;"></textarea>
            </div>
        </div>
    </div>

</main>

@endsection

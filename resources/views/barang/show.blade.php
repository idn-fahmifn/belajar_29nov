@extends('template')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title">{{ $data->nama_barang }}</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td>Nama barang</td>
                            <td>{{ $data->nama_barang }}</td>
                        </tr>
                        <tr>
                            <td>Merk barang</td>
                            <td>{{ $data->merk }}</td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>IDR.{{ number_format($data->harga) }}</td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td>{{ $data->stok }}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td style="width: 70%">{{ $data->deskripsi }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('template')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Data Semua Barang</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>Nama Barang</th>
                            <th>Merk</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            {{-- foreach / forelse. --}}
                            @forelse($data as $item)
                            <tr>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->merk }}</td>
                                <td>IDR. {{ number_format($item->harga) }}</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm">Detail</a>
                                </td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

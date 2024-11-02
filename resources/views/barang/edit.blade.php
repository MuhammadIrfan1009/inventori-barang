@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Barang</h2>

    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')

        <table class="table">
            <tr>
                <td>
                    <label for="nama_barang">Nama Barang</label>
                </td>
                <td>
                    <input type="text" name="nama_barang" class="form-control" value="{{ $barang->nama_barang }}" required>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="jenis_barang">Jenis Barang</label>
                </td>
                <td>
                    <input type="text" name="jenis_barang" class="form-control" value="{{ $barang->jenis_barang }}" required>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="stock">Stock</label>
                </td>
                <td>
                    <input type="text" name="stock" class="form-control" value="{{ $barang->stock }}" pattern="\d*" title="Stok hanya boleh berupa angka." required>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="status">Status</label>
                </td>
                <td>
                    <select name="status" class="form-control">
                        <option value="">Pilih Status</option>
                        <option value="Tersedia" {{ $barang->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                        <option value="Habis" {{ $barang->status == 'Habis' ? 'selected' : '' }}>Habis</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="harga_satuan">Harga Satuan</label>
                </td>
                <td>
                    <input type="number" name="harga_satuan" class="form-control" value="{{ $barang->harga_satuan }}" min="0">
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: right;">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection

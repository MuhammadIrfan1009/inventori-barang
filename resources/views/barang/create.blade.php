@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Barang</h2>

    <form action="{{ route('barang.store') }}" method="POST">
        @csrf

        <table class="table">
            <tr>
                <td>
                    <label for="nama_barang">Nama Barang</label>
                </td>
                <td>
                    <input type="text" name="nama_barang" class="form-control" required>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="jenis_barang">Jenis Barang</label>
                </td>
                <td>
                    <input type="text" name="jenis_barang" class="form-control" required>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="stock">Stock</label>
                </td>
                <td>
                    <input type="text" name="stock" id="stock" class="form-control" pattern="\d*" title="Stok hanya boleh berupa angka." required>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="status">Status</label>
                </td>
                <td>
                    <select name="status" class="form-control">
                        <option value="">Pilih Status</option>
                        <option value="Tersedia">Tersedia</option>
                        <option value="Habis">Habis</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="harga_satuan">Harga Satuan</label>
                </td>
                <td>
                    <input type="number" name="harga_satuan" class="form-control" min="0">
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: right;">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection

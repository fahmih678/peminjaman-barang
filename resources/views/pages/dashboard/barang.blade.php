@extends('layouts.dashboard')
@section('title-page', 'Data Barang')
@section('barang-active', 'active')


@section('content')
    <section id="content-types">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-header">
                            <div class="text-center">
                                <h4 class="card-title">Daftar Barang</h4>
                            </div>
                        </div>
                        <div class="card-body">

                            <table id="table-barang" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Jumlah</th>
                                        <th>Kondisi</th>
                                        <th>Tanggal Masuk</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Sepatu Sneaker</td>
                                        <td>Sepatu</td>
                                        <td>2</td>
                                        <td>Baik</td>
                                        <td>22 Februari 2022</td>
                                    </tr>
                                    <tr>
                                        <td>Sepatu Sneaker</td>
                                        <td>Sepatu</td>
                                        <td>2</td>
                                        <td>Baik</td>
                                        <td>22 Februari 2022</td>
                                    </tr>
                                    <tr>
                                        <td>Sepatu Sneaker</td>
                                        <td>Sepatu</td>
                                        <td>2</td>
                                        <td>Baik</td>
                                        <td>22 Februari 2022</td>
                                    </tr>
                                    <tr>
                                        <td>Sepatu Sneaker</td>
                                        <td>Sepatu</td>
                                        <td>2</td>
                                        <td>Baik</td>
                                        <td>22 Februari 2022</td>
                                    </tr>
                                    <tr>
                                        <td>Sepatu Sneaker</td>
                                        <td>Sepatu</td>
                                        <td>2</td>
                                        <td>Baik</td>
                                        <td>22 Februari 2022</td>
                                    </tr>
                                    <tr>
                                        <td>Sepatu Sneaker</td>
                                        <td>Sepatu</td>
                                        <td>2</td>
                                        <td>Baik</td>
                                        <td>22 Februari 2022</td>
                                    </tr>
                                    <tr>
                                        <td>Sepatu Sneaker</td>
                                        <td>Sepatu</td>
                                        <td>2</td>
                                        <td>Baik</td>
                                        <td>22 Februari 2022</td>
                                    </tr>
                                    <tr>
                                        <td>Sepatu Sneaker</td>
                                        <td>Sepatu</td>
                                        <td>2</td>
                                        <td>Baik</td>
                                        <td>22 Februari 2022</td>
                                    </tr>
                                    <tr>
                                        <td>Sepatu Sneaker</td>
                                        <td>Sepatu</td>
                                        <td>2</td>
                                        <td>Baik</td>
                                        <td>22 Februari 2022</td>
                                    </tr>
                                    <tr>
                                        <td>Sepatu Sneaker</td>
                                        <td>Sepatu</td>
                                        <td>2</td>
                                        <td>Baik</td>
                                        <td>22 Februari 2022</td>
                                    </tr>
                                    <tr>
                                        <td>Sepatu Sneaker</td>
                                        <td>kecil</td>
                                        <td>2</td>
                                        <td>Baik</td>
                                        <td>22 Februari 2022</td>
                                    </tr>
                                    <tr>
                                        <td>Sepatu Sneaker</td>
                                        <td>Sepatu</td>
                                        <td>2</td>
                                        <td>Baik</td>
                                        <td>22 Februari 2022</td>
                                    </tr>
                                    <tr>
                                        <td>Sepatu Sneaker</td>
                                        <td>Sepatu</td>
                                        <td>2</td>
                                        <td>Baik</td>
                                        <td>22 Februari 2022</td>
                                    </tr>
                                    <tr>
                                        <td>Sepatu Sneaker</td>
                                        <td>Sepatu</td>
                                        <td>2</td>
                                        <td>Baik</td>
                                        <td>22 Februari 2022</td>
                                    </tr>
                                    <tr>
                                        <td>Sepatu Sneaker</td>
                                        <td>Sepatu</td>
                                        <td>2</td>
                                        <td>Baik</td>
                                        <td>22 Februari 2022</td>
                                    </tr>
                                    <tr>
                                        <td>Sepatu Sneaker</td>
                                        <td>Sepatu</td>
                                        <td>2</td>
                                        <td>Baik</td>
                                        <td>22 Februari 2022</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section id="content-types">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-header">
                            <div class="text-center">
                                <h4 class="card-title">Daftar Peminjaman Barang</h4>
                            </div>
                        </div>
                        <div class="card-body">

                            <table id="table-peminjaman-barang" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Keperluan</th>
                                        <th>Jumlah Dipinjam</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Kondisi Sebelum Dipinjam</th>
                                        <th>Tanggal Pemgembalian</th>
                                        <th>Kondisi Setelah Dipinjam</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Komputer</td>
                                        <td>Elektronik</td>
                                        <td>Acara FKIP</td>
                                        <td>2 Buah</td>
                                        <td>02/03/2022</td>
                                        <td>Baik</td>
                                        <td>10/03/2022</td>
                                        <td>Rusak</td>
                                        <td>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Belum dikembalikan</option>
                                                <option value="1">Sudah Dikembalikan</option>
                                                <option value="2">Perlu Diperbaiki</option>
                                                <option value="3">Hilang</option>
                                                <option value="3">Diganti Baru</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Komputer</td>
                                        <td>Elektronik</td>
                                        <td>Acara FKIP</td>
                                        <td>2 Buah</td>
                                        <td>02/03/2022</td>
                                        <td>Baik</td>
                                        <td>10/03/2022</td>
                                        <td>Rusak</td>
                                        <td> <select class="form-select" aria-label="Default select example">
                                                <option selected>Belum dikembalikan</option>
                                                <option value="1">Sudah Dikembalikan</option>
                                                <option value="2">Perlu Diperbaiki</option>
                                                <option value="3">Hilang</option>
                                                <option value="3">Diganti Baru</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection

@section('scripts-addon')
    <script>
        $(document).ready(function() {
            $('#table-barang').DataTable();
        });
    </script>
@endsection

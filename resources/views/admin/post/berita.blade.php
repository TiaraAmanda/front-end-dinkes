@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Halaman Berita</div>
                    </div>
                    <div class="card-body">
                        <a href="/data/tambahberita" class="btn btn-primary">Tambah Berita</a>
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 20px;">No.</th>
                                        <th style="width: 350px;">Judul</th>
                                        <th scope="col">Date Add</th>
                                        <th scope="col" style="width: 20px;">Headline</th>
                                        <th scope="col">Bidang</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sinergitas Pembinaan Obat Tradisional Di Jawa Timur</td>
                                        <td>22 Februari 2022</td>
                                        <td>1</td>
                                        <td>Sekretariat</td>
                                        <td>
                                            <a href="/data/berita/edit" class="btn btn-primary">Edit</a>
                                            <a href="/data/berita/" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

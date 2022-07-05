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
                        <div class="card-title">Tambah Data Laporan Kinerja</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <form>
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <input type="text" name="kategori_data" id="kategori_data"
                                                value="laporan kinerja" hidden>
                                            <label for="nama_file" class="form-label">Nama File</label>
                                            <input class="form-control" type="text" id="nama_file" name="nama_file"
                                                placeholder="Nama File">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="data_file" class="form-label">File</label>
                                            <input class="form-control" type="file" id="data_file" name="data_file">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="/datainformasi/laporan-kinerja" class="btn btn-primary"
                                            type="submit">Ungah</a>
                                        <a href="/datainformasi/laporan-kinerja" class="btn btn-danger">Batal</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

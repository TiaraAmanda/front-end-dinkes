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
                        <div class="card-title">Tambah Data SPM</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <form action="/admin/createspm" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="nama_file" class="form-label">Nama File SPM</label>
                                            <input class="form-control" type="text" id="nama_file" name="nama_file"
                                                placeholder="Nama File">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="file_spm" class="form-label">File SPM</label>
                                            <input class="form-control" type="file" id="file_spm" name="file_spm">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun">Tahun</label>
                                        <input class="form-control" type="text" placeholder="Tahun" name="tahun"
                                            id="tahun">
                                    </div>
                                    <div class="form-group">
                                        <label for="tribulan">Tribulan</label>
                                        <select class="form-control form-control-sm" name="tribulan">
                                            <option value="1">Tribulan 1</option>
                                            <option value="2">Tribulan 2</option>
                                            <option value="3">Tribulan 3</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <a href="/admin/bank-data-spm" class="btn btn-primary" type="submit">Ungah</a>
                                        <a href="/admin/bank-data-spm" class="btn btn-danger">Batal</a>
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

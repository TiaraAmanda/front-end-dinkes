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
                        <div class="card-title">Tambah Data Saka Bakti Husada</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <form>
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <input type="text" name="kategori_data" id="kategori_data"
                                                value="saka-bakti-husada" hidden>
                                            <label for="nama_file" class="form-label">Nama Halaman</label>
                                            <input class="form-control" type="text" id="nama_file" name="nama_file"
                                                placeholder="Nama File">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="data_file" class="form-label">File</label>
                                            <img class="img-preview img-fluid mb-3 col-sm-5">
                                            <input class="form-control" type="file" id="data_file" name="data_file"
                                                onchange="previewImage()">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="/datainformasi/saka-bakti-husada" class="btn btn-primary"
                                            type="submit">Ungah</a>
                                        <a href="/datainformasi/saka-bakti-husada" class="btn btn-danger">Batal</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#data_file');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection

@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Profil Pejabat</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Kepala Dinas Kesehatan</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <form>
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input class="form-control" type="text" placeholder="Nama" name="nama"
                                            id="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="detail_jabatan">Detail Jabatan</label>
                                        <input class="form-control" type="text" placeholder="Detail Jabatan"
                                            name="detail_jabatan" id="detail_jabatan">
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Foto</label>
                                            <input type="hidden" name="oldImage">
                                            <img src="/image/ERWIN.png" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                            <input class="form-control" type="file" id="image" name="image"
                                                onchange="previewImage()">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <a href="/profilpejabat" class="btn btn-primary" type="submit">Simpan</a>
                                        <a href="/profilpejabat" class="btn btn-danger">Batal</a>
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
            const image = document.querySelector('#image');
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

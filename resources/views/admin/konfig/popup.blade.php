@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Konfigurasi</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Halaman Popup</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <form>
                                    <div class="form-group">
                                        <input id="nama_sosial_media" name="nama_sosial_media" type="text" value="popup"
                                            hidden>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Sertakan Gambar untuk Headline
                                                Berita</label>
                                            <input type="hidden" name="oldImage">
                                            <img src="/image/popup.png" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                            <img class="img-preview img-fluid mb-3 col-sm-5">
                                            <input class="form-control" type="file" id="image" name="image"
                                                onchange="previewImage()">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="/konfig/popup" class="btn btn-primary" type="submit">Simpan</a>
                                        <a href="/konfig/popup" class="btn btn-danger">Batal</a>
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

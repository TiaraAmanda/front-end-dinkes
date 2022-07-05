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
                        <div class="card-title">Tambah Berita</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <form>
                                    @csrf
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <input type="text" name="kategori_post" id="kategori_post" value="berita"
                                                hidden>
                                            <label for="judul" class="form-label">Judul</label>
                                            <input class="form-control @error('judul') is-invalid @enderror" type="text"
                                                id="judul" name="judul" placeholder="Judul" required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input class="form-control @error('slug') is-invalid @enderror" type="text"
                                                id="slug" name="slug" placeholder="slug"
                                                value="{{ old('slug') }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Sertakan Gambar untuk Headline</label>
                                            <img class="img-preview img-fluid mb-3 col-sm-5">
                                            <input class="form-control @error('image') is-invalid @enderror" type="file"
                                                id="image" name="image" onchange="previewImage()">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="body">Isi</label>
                                        <input id="body" type="hidden" name="body"
                                            class="@error('body') is-invalid @enderror" value="{{ old('body') }}">
                                        <trix-editor input="body"></trix-editor>
                                    </div>

                                    <div class="form-group">
                                        <label for="tampil_headline">Pilih Untuk Dijadikan Headline </label>
                                        <select class="form-control form-control-sm" name="tampil_headline"
                                            id="tampil_headline">
                                            <option value="1">Berita</option>
                                            <option value="2">Headline</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="smallSelect">Bidang</label>
                                        <select class="form-control form-control-sm" name="bidang_id">
                                            <option value="">Sekretariat</option>
                                            <option value="">Kesehatan Masyarakat</option>
                                            <option value="">Pencegahan dan Pengendalian Penyakit</option>
                                            <option value="">Pelayanan Kesehatan</option>
                                            <option value="">Sumber Daya Kesehatan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <a href="/data/berita" class="btn btn-primary" type="submit">Simpan</a>
                                        <a href="/data/berita" class="btn btn-danger">Batal</a>
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
        const judul = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        judul.addEventListener('change', function() {
            fetch('/data/berita/berita/checkSlug?judul=' + judul.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })


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

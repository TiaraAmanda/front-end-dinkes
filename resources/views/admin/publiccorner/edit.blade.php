@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Public Corner</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Jawab Pertanyaan</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <form method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama Pengirim Pertanyaan</label>
                                        <input class="form-control" type="text" placeholder="Nama Auto Input"
                                            name="nama" id="nama" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat Pengirim Pertanyaan</label>
                                        <input class="form-control" type="text" placeholder="Alamat Auto Input"
                                            name="alamat" id="alamat" disabled>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="pertanyaan" class="form-label">Pertanyaan</label>
                                            <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="3" disabled>Pertanyaan Auto Input</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="jawaban" class="form-label">Jawaban</label>
                                            <trix-editor input="body"></trix-editor>
                                            {{-- <textarea class="form-control" id="jawaban" name="jawaban" rows="3"></textarea> --}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tampil">Tampilkan Pada Halaman Public Corner</label>
                                        <select class="form-control form-control-sm" name="tampil" id="tampil">
                                            <option value="1">Tampilkan</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <a href="/admin/public-corner" class="btn btn-primary" type="submit">Simpan</a>
                                        <a href="/admin/public-corner" class="btn btn-danger">Batal</a>
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

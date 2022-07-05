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
                        <div class="card-title">Halaman Bidang</div>
                    </div>
                    <div class="row">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 20px;">No.</th>
                                        <th scope="col">Nama Bidang</th>
                                        <th scope="col" style="width: 200px; text-align: center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sekretariat</td>
                                        <td style="text-align: center">
                                            <a href="/konfig/bidang" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Kesehatan Masyarakat</td>
                                        <td style="text-align: center">
                                            <a href="/konfig/bidang" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Pencegahan dan Pengendalian Penyakit</td>
                                        <td style="text-align: center">
                                            <a href="/konfig/bidang" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Pelayanan Kesehatan</td>
                                        <td style="text-align: center">
                                            <a href="/konfig/bidang" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Sumber Daya Kesehatan</td>
                                        <td style="text-align: center">
                                            <a href="/konfig/bidang" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="col-md-6 col-lg-12">
                                <form>
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_bidang">Tambah Nama Bidang</label>
                                        <input class="form-control" type="text" placeholder="Nama Bidang"
                                            name="nama_bidang" id="nama_bidang">
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug Nama Bidang</label>
                                        <input class="form-control" type="text" placeholder="Nama Bidang" name="slug"
                                            id="slug">
                                    </div>

                                    <div class="form-group">
                                        <a href="/konfig/bidang" class="btn btn-primary" type="submit">Simpan</a>
                                        <a href="/konfig/bidang" class="btn btn-danger">Batal</a>
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

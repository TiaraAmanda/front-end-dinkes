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
                        <div class="card-title">Halaman Public Corner</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">ID Pertanyaan</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Pertanyaan</th>
                                            <th scope="col">Jawaban</th>
                                            <th scope="col">Data Masuk</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>PC01</td>
                                            <td>Bagas</td>
                                            <td>Mohon informasi lokasi disekitar surabaya atau sidoarjo
                                                untuk layanan vaksin gratis dosis 2 moderna di bulan juli</td>
                                            <td>Terima kasih. stock vaksin sesuai ketersediaan,
                                                silahkan pilih link untuk
                                                informasi vaksin,dosis dan lokasinya untuk pendaftaran online,
                                                https://dinkes.jatimprov.go.id/index.php?r=site/berita_detail&id=842, atau
                                                berkunjung di instalgram surabayasehatku Dan bisa menghubungi Puskesmas dan
                                                Dinas Kesehatan Kab/Kota setempat. Salam sehat</td>
                                            <td>1 Juli 2022</td>
                                            <td>
                                                <a href="/admin/public-corner/edit" class="btn btn-primary">Jawab</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>PC02</td>
                                            <td>Amanda</td>
                                            <td>Tempat vaksinasi Astra Zeneca dosis 2 Surabaya?</td>
                                            <td>Terima kasih. Stock vaksin sesuai ketersediaan, silahkan pilih link untuk
                                                informasi vaksin,dosis dan lokasinya untuk pendaftaran online,
                                                https://dinkes.jatimprov.go.id/index.php?r=site/berita_detail&id=842, atau
                                                berkunjung di instagram surabayasehatku dan bisa menghubungi Puskesmas dan
                                                Dinas Kesehatan Kab/Kota setempat. Salam sehat</td>
                                            <td>1 Juli 2022</td>
                                            <td>
                                                <a href="/admin/public-corner/edit" class="btn btn-primary">Jawab</a>
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

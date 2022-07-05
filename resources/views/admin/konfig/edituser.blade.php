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
                        <div class="card-title">Edit User</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <form>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input class="form-control" type="text" placeholder="nama" name="nama"
                                            id="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input class="form-control" type="text" placeholder="username" name="username"
                                            id="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" type="email" placeholder="email" name="email"
                                            id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">New Password</label>
                                        <input class="form-control" type="password" placeholder="new password"
                                            name="new password" id="new password">
                                    </div>

                                    <div class="form-group">
                                        <a href="/konfig/user" class="btn btn-primary" type="submit">Simpan</a>
                                        <a href="/konfig/user" class="btn btn-danger">Batal</a>
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

@extends('layouts.alumni')
@section('content')
    <div class="container-biodata col-lg-12">
        <div class="row justify-content-center col-lg-12">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <!-- Heading -->
                <h3 class="text-lg-start text-center">Biodata Alumni</h3>

                <div class="row">
                    <!-- Foto Profil dan Ganti Foto -->
                    <div class="col-lg-3 col-md-12 text-center">
                        <img src="{{ Vite::asset('public/images/ava_demo.png') }}" class="img-fluid mb-3" alt="Foto Alumni" id="profile-image">
                        <button class="btn btn-primary">Ganti Foto</button>
                    </div>

                    <!-- Tabel Biodata Alumni -->
                    <div class="col-lg-9 col-md-12">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>NISN</th>
                                    <td>1234567890</td>
                                </tr>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <td>John Doe</td>
                                </tr>
                                <tr>
                                    <th>Kelas</th>
                                    <td>12 IPA 1</td>
                                </tr>
                                <tr>
                                    <th>Tahun Lulus</th>
                                    <td>2020</td>
                                </tr>
                                <tr>
                                    <th>Universitas</th>
                                    <td>Universitas ABC</td>
                                </tr>
                                <tr>
                                    <th>Fakultas</th>
                                    <td>Fakultas Teknik</td>
                                </tr>
                                <tr>
                                    <th>Jurusan</th>
                                    <td>Teknik Informatika</td>
                                </tr>
                                <tr>
                                    <th>Jalur Penerimaan</th>
                                    <td>SNMPTN</td>
                                </tr>
                                <tr>
                                    <th>Tahun Diterima</th>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <th>Status Pekerjaan</th>
                                    <td>Bekerja</td>
                                </tr>
                                <tr>
                                    <th>Biodata Valid</th>
                                    <td>Ya</td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Tombol Simpan dan Batal -->
                        <div class="d-flex justify-content-center justify-content-lg-end mt-4">
                            <button class="btn btn-success me-2">Simpan</button>
                            <button class="btn btn-secondary">Batal</button>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of column -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->

@endsection
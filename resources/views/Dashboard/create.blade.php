
@extends('template')
@section('content')
<div class="content">
<div class="intro-y flex items-center mt-8">
        <center><h2 class="text-lg font-medium mr-auto">Form Tambah Data</h2></center>
    </div>
    <div class="grid grid-col-12 gap-6 mt-5">
        <div class="grid grid-col-span-12 lh:col-span-6">
            @if(count($errors) > 0)
            @foreach($errors->all() as $errors)
            <div class="alert alert-warning">{{ $error }}}</div>
            @endforeach
            @endif

                <form style="background-color:lightblue; color:black; margin-left: 200px; margin-right: 200px;" action="{{ route('dashboardstore') }}" method="POST">
                @csrf 
                <div class="intro-y box p-5">
                    <div>
                        <label for="crud-form-1" class="form-label">No Pendaftaran</label>
                        <input id="crud-from-1" type="text" class="form-control w-full" name="no-pendaftaran"> 
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label">Nisn</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="nisn">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Nama Lengkap</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="nama-lengkap">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label">Jenis Kelamin</label><br>
                        <select id="crud-form-1" name="jenis-kelamin">
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Kewarganegaraan</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="kewarganegaraan">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Agama</label><br>
                        <select id="crud-form-1" name="agama">
                            <option value="laki-laki">Islam</option>
                            <option value="perempuan">Kristen</option>
                            <option value="perempuan">Budha</option>
                            <option value="perempuan">Hindu</option>
                        </select>
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Golongan Darah</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="golongan-darah">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> No Telepon</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="no-telepon">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Email</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="email">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Alamat</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="alamat">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Tempat Lahir</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="tempat-lahir">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Tanggal Lahir</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="tanggal-lahir">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Asal Sekolah</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="asal-sekolah">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Program Studi</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="program-studi">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div class="text-right mt-5">
                        <button type="reset" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
                    </div>
                    
                </div>
                </form>
        </div>
    </div>
</div>
    @endsection 
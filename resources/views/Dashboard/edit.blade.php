
@extends('template')
@section('content')
<div class="content">
<div class="intro-y flex items-center mt-8">
        <center><h2 class="text-lg font-medium mr-auto">Form Edit Data</h2></center>
    </div>
    <div class="grid grid-col-12 gap-6 mt-5">
        <div class="grid grid-col-span-12 lh:col-span-6">
            @if(count($errors) > 0)
            @foreach($errors->all() as $error)
            <div class="alert alert-warning">{{ $error }}}</div>
            @endforeach
            @endif

                <form action="{{ route('dashboardupdate',$data['id']) }}" method='POST'>
                @csrf
                @method("put")
                <div class="intro-y box p-5">
                    <div>
                        <label for="crud-form-1" class="form-label">No Pendaftaran</label>
                        <input id="crud-from-1" type="text" class="form-control w-full" name="no-pendaftaran" value="{{ $data['NoPendaftaran'] }}"> 
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label">Nisn</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="nisn" value="{{ $data['Nisn'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Nama Lengkap</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="nama-lengkap" value="{{ $data['NamaLengkap'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label">Jenis Kelamin</label><br>
                        <select id="crud-form-1" name="jenis-kelamin" value="{{ $data['JenisKelamin'] }}">
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Kewarganegaraan</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="kewarganegaraan" value="{{ $data['Kewarganegaraan'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Agama</label><br>
                        <select id="crud-form-1" name="agama" value="{{ $data['Agama'] }}">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                        </select>
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Golongan Darah</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="golongan-darah" value="{{ $data['GolonganDarah'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> No Telepon</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="no-telepon" value="{{ $data['NoTelepon'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Email</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="email" value="{{ $data['Email'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Alamat</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="alamat" value="{{ $data['Alamat'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Tempat Lahir</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="tempat-lahir" value="{{ $data['TempatLahir'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Tanggal Lahir</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="tanggal-lahir" value="{{ $data['TanggalLahir'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Asal Sekolah</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="asal-sekolah" value="{{ $data['AsalSekolah'] }}">
                    </div>
                    </div>
                    <div class="mt-3">
                    <div>
                        <label for="crud-form-1" class="form-label"> Program Studi</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" name="program-studi" value="{{ $data['ProgramStudi'] }}">
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
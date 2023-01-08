@extends('master')

@section('konten')
  <div class="content">
<h2 class="intro-y text-lg font-medium mt-10">List Data Mahasiswa baru</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="{{ route('dashboardcreate') }}"><button class="btn btn-primary shadow-md mr-2">
                Tambah data</button></a>
            <div class="hidden md:block mx-auto text-slate-500">Showing list data entries</div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            </div>
        </div>
                <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                @if(session('success'))
                {{session('success')}}
                @endif
                <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">ID</th>
                        <th class="text-center whitespace-nowrap">No Pendaftaran</th>
                        <th class="text-center whitespace-nowrap">NISN</th>
                        <th class="text-center whitespace-nowrap">Nama Lengkap</th>
                        <th class="text-center whitespace-nowrap">Jenis Kelamin</th>
                        <th class="text-center whitespace-nowrap">Kewarganegaraan</th>
                        <th class="text-center whitespace-nowrap">Agama</th>
                        <th class="text-center whitespace-nowrap">Golongan Darah</th>
                        <th class="text-center whitespace-nowrap">No Telepon</th>
                        <th class="text-center whitespace-nowrap">Email</th>
                        <th class="text-center whitespace-nowrap">Alamat</th>
                        <th class="text-center whitespace-nowrap">Tempat Lahir</th>
                        <th class="text-center whitespace-nowrap">Tanggal Lahir</th>
                        <th class="text-center whitespace-nowrap">Asal Sekolah</th>
                        <th class="text-center whitespace-nowrap">Program Stusi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                @foreach($data as $value)
                <?php $i++; ?>
                        <tr class="intro-x">
                            <td class="w-40">
                                <div class="flex">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                    <?php echo $i; ?>
                                    </div>
                                </div>
                            </td>
                        
                            <td class="text-center">{{ $value['NoPendaftaran'] }}</td>  
                            <td class="text-center">{{ $value['Nisn'] }}</td>
                            <td class="text-center">{{ $value['NamaLengkap'] }}</td>
                            <td class="text-center">{{ $value['JenisKelamin'] }}</td>
                            <td class="text-center">{{ $value['Kewarganegaraan'] }}</td>
                            <td class="text-center">{{ $value['Agama'] }}</td>
                            <td class="text-center">{{ $value['GolonganDarah'] }}</td>
                            <td class="text-center">{{ $value['NoTelepon'] }}</td>
                            <td class="text-center">{{ $value['Email'] }}</td>
                            <td class="text-center">{{ $value['Alamat'] }}</td>
                            <td class="text-center">{{ $value['TempatLahir'] }}</td>
                            <td class="text-center">{{ $value['TanggalLahir'] }}</td>
                            <td class="text-center">{{ $value['AsalSekolah'] }}</td>
                            <td class="text-center">{{ $value['ProgramStudi'] }}</td>
                            
                            <td class="table-report__action w-56">
                                
                                    <form action="{{ route('dashboardestroy' , $value['id']) }}" method='POST'>
                                    @csrf
                                    @method("delete")
                                    <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="{{ route('dashboardedit',$value['id']) }}">
                                        <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                                    </a>
                                    <button class="flex items-center text-danger" type="submit"
                                    data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                        </button>
                                   
                                </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
@endsection
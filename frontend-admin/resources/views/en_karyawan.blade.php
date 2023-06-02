@extends('template_karyawan')

@section('title_template')
    <title>Tambah Data Karyawan</title>
@endsection

@section('body_template')
    <!-- section baris pertama -->
    <section class="flex w-full">
        <!-- section untuk NIK -->
        <section class="w-1/2 flex flex-col mr-2.5">
            <!-- label untuk judul -->
            <label for="txt_nik">
                 NIK
            </label>
            <!-- object/komponen -->
            <input type="text" name="txt_nik" id="txt_nik" class="border-2 border-sky-500 rounded-lg h-8 focus:outline-none 
            focus:ring focus:border-blue-500 my-2.5 px-2.5" maxlength="10">
            <!-- label untuk pesan error -->
            <label id="err_nik" class="text-rose-500 text-sm">NIK Harus Diisi !</label>
        </section> 
        <!--section untuk Nama -->
        <section class="w-1/2 flex flex-col">
            <!-- label untuk judul -->
            <label for="txt_nama">
                Nama
            </label>
            <!-- object/komponen -->
            <input type="text" name="txt_nama" id="txt_nama" class="border-2 border-sky-500 rounded-lg h-8 focus:outline-none 
            focus:ring focus:border-blue-500 my-2.5 px-2.5" maxlength="10">
            <!-- label untuk pesan error -->
            <label id="err_nama" class="text-rose-500 text-sm">Nama Harus Diisi !</label>
        </section>
    </section>

    <!-- section baris pertama -->
    <section class="flex w-full mt-2.5">
        <!-- section untuk Alamat -->
        <section class="w-1/2 flex flex-col mr-2.5">
            <!-- label untuk judul -->
            <label for="txt_alamat">
               Alamat
            </label>
            <!-- object/komponen -->
            <input type="text" name="txt_alamat" id="txt_alamat" class="border-2 border-sky-500 rounded-lg h-8 focus:outline-none 
            focus:ring focus:border-blue-500 my-2.5 px-2.5" maxlength="100">
            <!-- label untuk pesan error -->
            <label id="err_alamat" class="text-rose-500 text-sm">Alamat Harus Diisi !</label>
        </section> 
        <!--section untuk Telepon -->
        <section class="w-1/2 flex flex-col">
            <!-- label untuk judul -->
            <label for="txt_telepon">
               Telepon
            </label>
            <!-- object/komponen -->
            <input type="text" name="txt_telepon" id="txt_telepon" class="border-2 border-sky-500 rounded-lg h-8 focus:outline-none 
            focus:ring focus:border-blue-500 my-2.5 px-2.5" maxlength="13">
            <!-- label untuk pesan error -->
            <label id="err_telepon" class="text-rose-500 text-sm" >Telepon Harus Diisi ! </label>
        </section>
    </section>

    <!-- section baris pertama -->
    <section class="flex w-full">
        <!-- section untuk Jabatan -->
        <section class="w-1/2 flex flex-col mr-2.5">
            <!-- label untuk judul -->
            <label for="txt_jabatan">
               Jabatan
            </label>
            <!-- object/komponen -->
            <input type="text" name="txt_jabatan" id="txt_jabatan" class="border-2 border-sky-500 rounded-lg h-8 focus:outline-none 
            focus:ring focus:border-blue-500 my-2.5 px-2.5" maxlength="50">
            <!-- label untuk pesan error -->
            <label id="err_jabatan" class="text-rose-500 text-sm">Jabatan Harus Diisi !</label>
        </section> 
    </section>

    <!-- custom js -->
    <script>
        //sembunyikan pesan error
        document.querySelector("#err_nik").style.display="none"
        document.querySelector("#err_nama").style.display="none"
        document.querySelector("#err_alamat").style.display="none"
        document.querySelector("#err_telepon").style.display="none"
        document.querySelector("#err_jabatan").style.display="none"
    </script>

@endsection
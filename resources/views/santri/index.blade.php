@extends('santri.master')

@section('table_santri')
<div class="card-header">
    <h4>Invoices</h4>
    <div class="card-header-action">
        <a href="javascript:void(0)" class="btn btn-danger" data-toggle="modal" data-target="#modalTambahSantri"><i class="fa fa-plus"></i></a>
    </div>
</div>

<div class="card-body p-0">
    <div class="table-responsive table-invoice">
        <table id="table_santri" class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pesantren</th>
                    <th>No Induk</th>
                    <th>Nama</th>
                    <th>Kamar</th>
                    <th>Alamat</th>
                    <th>Hp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="tampil_santri">
                <tr id="loading_santri">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Loading...</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td> 
                    {{-- <a href="javascript:void(0)" onclick="konfirHapusSabtri()">Hapus</a>
                                <a href="javascript:void(0)" onclick="modalEditSantri()">Edit</a> --}}
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
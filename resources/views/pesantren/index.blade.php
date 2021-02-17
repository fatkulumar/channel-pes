@extends('pesantren.master')

@section('table_pesantren')
    <div class="card-header">
        <h4>Invoices</h4>
        <div class="card-header-action">
            <a href="javascript:void(0)" class="btn btn-danger" data-toggle="modal" data-target="#modalTambahData"><i class="fa fa-plus"></i></a>
        </div>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive table-invoice">
            <table id="table_pesantren" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr> 
                </thead>
                <tbody id="tampil_table">
                    <tr id="loading_pesantren">
                        <td></td>
                        <td></td>
                        <td>Loading...</td>
                        <td></td>
                    </tr>
                </tbody>
            
            </table>
        </div>
    </div>

    @endsection


    @section('table_channel')
    <div class="card-header">
        <h4>Channel</h4>
        <div class="card-header-action">
            <a href="javascript:void(0)" class="btn btn-danger" data-toggle="modal" data-target="#modalTambahChannel"><i class="fa fa-plus"></i></a>
        </div>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive table-invoice">
            <table id="table_channel" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Channel</th>
                        <th>Action</th>
                    </tr> 
                </thead>
                <tbody id="tampil_channel">
                    <tr id="loading_channel">
                        <td></td>
                        <td></td>
                        <td>Loading...</td>
                        <td></td>
                    </tr>
                </tbody>
            
            </table>
        </div>
    </div>

   
    @endsection
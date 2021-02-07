@extends('admin.master')

@section('table_pesantren')
    <div class="card-header">
        <h4>Invoices</h4>
        <div class="card-header-action">
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modalTambahData"><i class="fa fa-plus"></i></a>
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
                    <?php $no = 0; ?>
                    @foreach ($datas as $data)
                    <?php $no++; $nama_pesantren = $data['nama_pesantren']; ?>
                    <tr>
                        <td>{{ $no }}</td>
                        <td class="font-weight-600">{{ $data['nama_pesantren'] }}</td>
                        <td>{{ $data['alamat_pesantren'] }}</td>
                        <td>
                            <a href="admin/delete/{{ $data['id_pesantren'] }}" class="btn btn-warning" onclick="return confirm('Yakin Hapus  {{ $nama_pesantren }} ')"><i class="fa fa-trash"></i></a>
                            <a id="btn_edit_pesantren" onclick="modalEdit('<?= $data['id_pesantren'] ?>')" href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-edit"></i> </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            
            </table>
        </div>
    </div>

    @endsection


    @section('table_channel')
    <div class="card-header">
        <h4>Channel</h4>
        <div class="card-header-action">
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modalTambahChannel"><i class="fa fa-plus"></i></a>
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
                    <?php $no = 0; ?>
                    @foreach ($channel as $data)
                    <?php $no++; echo $data->nama_pesantren ?>
                    <tr>
                        <td>{{ $no }}</td>
                        <td class="font-weight-600">{{ $data->admin->nama_pesantren }}</td>
                        <td class="font-weight-600">{{ $data['channel_id'] }}</td>
                        <td>
                            <a href="admin/delete/{{ $data['id_pesantren'] }}" class="btn btn-warning" onclick="return confirm('Yakin Hapus  {{ $data->admin->nama_pesantren }} ')"><i class="fa fa-trash"></i></a>
                            <a id="btn_edit_pesantren" onclick="modalEditChannel('{{$data->id_pesantren_channel}}')" href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-edit"></i> </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            
            </table>
        </div>
    </div>

   
    @endsection
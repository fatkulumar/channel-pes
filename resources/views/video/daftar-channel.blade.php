@extends('video.master')

@section('daftar_channel')
    

    <table border="0">
        <thead>
            <tr>
                <?php $no = 0?>
                @foreach ($datas as $data)
                <?php $no++; ?>
                <td>
                    <ul>
                        <li>
                            <a href="video/detail/{{$data->channel_id}}" target="_blank" rel="noopener noreferrer">{{$data->nama_pesantren}}</a>
                        </li>
                    </ul>
                </td>
                @if ($no%4 == 0)
                <tr>
                </tr>
                @endif

                @endforeach
            </tr>
        </thead>
    </table>
@endsection
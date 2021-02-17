@extends('video.master')

@section('video')

    <input type="text" name="cari_ngaji" id="cari_ngaji" placeholder="cari masalah anda">
    <input type="hidden" name="id_channel_pesantren" id="id_channel_pesantren" value="{{$id_channel_pesantren}}">
    <button class="btn btn-primary btn-sm" id="click">Cari</button>

    <div id="tampil"></div>
    <div id="show"></div>

        

        <script>
            // $('#click').on('click', function() {
            //     alert('ok')
            //     $.ajax({
            //             url: "https://www.googleapis.com/youtube/v3/search?part=snippet&q=pasang&type=video&&channelId=UCLSYXq-Q8nbTyZFBwWkRADQ&key=AIzaSyBe0cXTaDh1bHlb0kO46cjlaVsF0GYRKo0",
            //             type: 'GET',
            //             dataType: 'JSON',
            //             success: function (data) {
            //                     console.log(data)
            //                     $(data).each(function(i) {
            //                         console.log(i)
            //                         videoId = data.items[i].id.videoId
            //                         console.log("Chanel : " + data.items[i].snippet.channelTitle + "<br>"  + "Judul : " + data.items[i].snippet.title + "<br>"> + "Vidio id : " + data.items[i].id.videoId )
            //                         console.log(data.items[i].id.videoId)
    
            //                         $('#tampil').html("Chanel : " + data.items[i].snippet.channelTitle + "<br>" +"Chanelid : " + data.items[i].snippet.channelId + "<br>"  + "Judul : " + data.items[i].snippet.title + "<br>" + "Vidio id : " + data.items[i].id.videoId  ) 
            //                     })
            //                     html = "<iframe class='v_show' width='560' height='315' src='https://www.youtube.com/embed/"+ videoId +"' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>"
            //                     $('#show').html(html)
    
                                
            //             }
            //     })
            // })
    </script>
@endsection
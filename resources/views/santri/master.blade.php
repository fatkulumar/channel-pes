<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Pesantren &mdash; Santri</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <!-- Template CSS -->
  <link rel="stylesheet" type="text/css" href="{!! asset('assets/stisla/assets/css/components.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('assets/stisla/assets/css/style.css') !!}">

  {{-- autocomplete --}}
  {{-- <link rel="stylesheet" href="{!! asset('assets/autocomplete/jquery-ui.css') !!}">
  <script src="{!! asset('assets/autocomplete/jquery-ui.js') !!}"></script>

  <link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet" />
<script src="vendor/select2/dist/js/select2.min.js"></script> --}}


  {{-- select2 --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{!! asset('assets/stisla/assets/img/products/product-3-50.png') !!}" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{!! asset('assets/stisla/assets/img/products/product-2-50.png') !!}" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{!! asset('assets/stisla/assets/img/products/product-1-50.png') !!}" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{!! asset('assets/stisla/assets/img/avatar/avatar-1.png') !!}" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{!! asset('assets/stisla/assets/img/avatar/avatar-2.png') !!}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{!! asset('assets/stisla/assets/img/avatar/avatar-3.png') !!}" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{!! asset('assets/stisla/assets/img/avatar/avatar-4.png') !!}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{!! asset('assets/stisla/assets/img/avatar/avatar-5.png') !!}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b>
                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{!! asset('assets/stisla/assets/img/avatar/avatar-1.png') !!}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
            <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{route('pesantren')}}">General Dashboard</a></li>
                  <li class="active"><a class="nav-link" href="{{route('santri')}}">Santri Dashboard</a></li>
                  <li class="active"><a class="nav-link" href="{{route('video')}}">Video Dashboard</a></li>
                </ul>
              </li>
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">Order Statistics -
                    <div class="dropdown d-inline">
                      <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
                      <ul class="dropdown-menu dropdown-menu-sm">
                        <li class="dropdown-title">Select Month</li>
                        <li><a href="#" class="dropdown-item">January</a></li>
                        <li><a href="#" class="dropdown-item">February</a></li>
                        <li><a href="#" class="dropdown-item">March</a></li>
                        <li><a href="#" class="dropdown-item">April</a></li>
                        <li><a href="#" class="dropdown-item">May</a></li>
                        <li><a href="#" class="dropdown-item">June</a></li>
                        <li><a href="#" class="dropdown-item">July</a></li>
                        <li><a href="#" class="dropdown-item active">August</a></li>
                        <li><a href="#" class="dropdown-item">September</a></li>
                        <li><a href="#" class="dropdown-item">October</a></li>
                        <li><a href="#" class="dropdown-item">November</a></li>
                        <li><a href="#" class="dropdown-item">December</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">24</div>
                      <div class="card-stats-item-label">Pending</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">12</div>
                      <div class="card-stats-item-label">Shipping</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">23</div>
                      <div class="card-stats-item-label">Completed</div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Pesantren</h4>
                  </div>
                  <div class="card-body" id="total_pesantren">
                    {{$jumlah_data}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="balance-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Channel</h4>
                  </div>
                  <div class="card-body" id="total_channel">
                    {{$total_channel}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="sales-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Santri</h4>
                  </div>
                  <div class="card-body" id="total_santri">
                    {{ $total_santri }}
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                @yield('table_santri')
              </div>
            </div>
          </div>

        </section>
        </div>
            
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

<!-- Modal Tambah Data-->
<div class="modal fade" id="modalTambahSantri" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="tambah_data_santri" action="#" method="POST">
        @csrf
      <div class="modal-body">
          <div class="form-group">
            <label for="nama_pesantren">Nama Pesantren</label>
            <input type="text" class="form-control" name="id_pesantren" id="id_pesantren" value="57" readonly>
          </div>

          <div class="form-group">
            <label for="no_induk">No Induk</label>
            <input type="text" class="form-control" name="no_induk" id="no_induk" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="nama_santri">Nama Santri</label>
            <input type="text" class="form-control" name="nama_santri" id="nama_santri" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="kamar_santri">Kamar Santri</label>
            <input type="text" class="form-control" name="kamar_santri" id="kamar_santri" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="alamat_santri">Alamat</label>
            <input type="text" class="form-control" name="alamat_santri" id="alamat_santri" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="hp_santri">Hp</label>
            <input type="number" class="form-control" name="hp_santri" id="hp_santri" autocomplete="off">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          <button id="btn_tambah_data_santri" type="button" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Edit Data-->
<div class="modal fade" id="modalEditSantri" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="edit_data_santri" action="#" method="POST">
        @csrf
      <div class="modal-body">
          <input type="text" name="edit_id_santri" id="edit_id_santri" value="">
          <div class="form-group">
            <label for="edit_nama_pesantren">Nama Pesantren</label>
            <input type="text" class="form-control" name="edit_id_pesantren" id="edit_id_pesantren" value="" readonly>
          </div>

          <div class="form-group">
            <label for="edit_no_induk">No Induk</label>
            <input type="text" class="form-control" name="edit_no_induk" id="edit_no_induk" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="edit_nama_santri">Nama Santri</label>
            <input type="text" class="form-control" name="edit_nama_santri" id="edit_nama_santri" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="edit_kamar_santri">Kamar Santri</label>
            <input type="text" class="form-control" name="edit_kamar_santri" id="edit_kamar_santri" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="edit_alamat_santri">Alamat</label>
            <input type="text" class="form-control" name="edit_alamat_santri" id="edit_alamat_santri" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="edit_hp_santri">Hp</label>
            <input type="number" class="form-control" name="edit_hp_santri" id="edit_hp_santri" autocomplete="off">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          <button id="btn_edit_data_santri" type="button" class="btn btn-primary">Edit</button>
        </div>
      </form>
    </div>
  </div>
</div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{!! asset('assets/stisla/assets/js/stisla.js') !!}"></script>

  <!-- Template JS File -->
  <script src="{!! asset('assets/stisla/assets/js/scripts.js') !!}"></script>
  <script src="{!! asset('assets/stisla/assets/js/custom.js') !!}"></script>

  <!-- Page Specific JS File -->
  <script src="{!! asset('assets/stisla/assets/js/page/index.js') !!}"></script>

   {{-- select2 --}}
   
  {{-- <script src="{!! asset('assets/jquery/jquery.min.js') !!}"></script> --}}
  {{-- <script src="{!! asset('assets/select2/dist/js/js2/select2.min.js') !!}"></script> --}}
   {{-- <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

<script>

  $(document).ready(function() {

    $.ajaxSetup({

      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }

    });


    loadSantri()

    function loadSantri(){
      $.ajax({
        url: "{{route('santri.data')}}",
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          console.log(data)
          $('#loading_santri').hide()
          var data_santri = data.santri
          $(data_santri).each(function(i) {
            var nama_pesantren = data_santri[i].id_pesantren_santri
            var nama_santri = data_santri[i].nama_santri
            var kamar_santri = data_santri[i].kamar_santri
            var induk = data_santri[i].no_induk
            var alamat = data_santri[i].alamat_santri
            var hp = data_santri[i].hp_santri
            var no = i + 1
            var html = "<tr><td>"+no+"</td><td>"+nama_pesantren+"</td><td>"+induk+"</td><td>"+nama_santri+"</td><td>"+kamar_santri+"</td><td>"+alamat+"</td><td>"+hp+"</td><td><a href='javascript:void(0)' class='btn btn-warning' onclick='konfirHapusSantri("+data.santri[i].id_santri+")'><i class='fa fa-trash'></i></a><a href='javascript:void(0)' class='btn btn-primary' onclick='modalEditSantri("+data.santri[i].id_santri+")'><i class='fa fa-edit'></i></a></td></tr>"
            $('#tampil_santri').append(html)
          })
          $('#total_santri').html(data.total_santri)
          $('#total_channel').html(data.total_channel)
          $('#total_pesantren').html(data.total_pesantren)
        }
      })
    }

    //select2 id pesantren
    // $('#id_pesantren').select2({
    //   placeholder: 'Pilih Pesantren',
    //   allowClear: false,
    // });

    $('#btn_tambah_data_santri').on('click', function(){
      var tambah_data_santri = $('#tambah_data_santri').serialize()
      // alert(tambah_data_santri)
      $.ajax({
        url: "{{route('santri.store')}}",
        type: "POST",
        data: tambah_data_santri,
        dataType: "JSON",
        success: function(data) { 
          console.log(data)
          var jumlah = data.santri.jumlah + 1
          var html = "<tr><td>"+jumlah+"</td><td>"+data.santri.id_pesantren_santri+"</td><td>"+data.santri.no_induk+"</td><td>"+data.santri.nama_santri+"</td><td>"+data.santri.kamar_santri+"</td><td>"+data.santri.alamat_santri+"</td><td>"+data.santri.hp_santri+"</td><td><a href='javascript:void(0)' class='btn btn-warning' onclick='konfirHapusSantri("+data.santri.id_santri+")'><i class='fa fa-trash'></i></a><a href='javascript:void(0)' class='btn btn-primary' onclick='modalEditSantri("+data.santri.id_santri+")'><i class='fa fa-edit'></i></a></td></tr>"
          $('#tampil_santri').append(html)
          $('.modal').modal('hide')
        }
      })
    });
    //click tombol edit
    $('#btn_edit_data_santri').on('click', function(){
      var edit_data_santri = $("#edit_data_santri").serialize()
      $.ajax({
        url: "{{route('santri.update')}}",
        data: edit_data_santri,
        dataType: "JSON",
        type: "POST",
        success: function(data) {
          $('#modalEditSantri').modal('hide')
          location.reload()
        }
      })
    })

  })//tutup ready

  function konfirHapusSantri(id)
  {
      var value = confirm('Yakin Hapus ' + id)
        if(!value) {
          location.reload()
        }else{
          $.ajax({
            url: "{{route('santri.delete')}}",
            type: "POST",
            data: {id_santri: id},
            dataType: "JSON",
            success: location.reload()
          })
        }
      
  }

  function modalEditSantri(id) {
    $.ajax({
      url: "{{route('santri.show')}}",
      data: {id_santri: id},
      dataType: "JSON",
      type: "POST",
      success: function(data) {
        var id_santri = data.santri[0].id_santri
        var id_pesantren_santri = data.santri[0].id_pesantren_santri
        var no_induk = data.santri[0].no_induk
        var alamat_santri = data.santri[0].alamat_santri
        var hp_santri = data.santri[0].hp_santri
        var edit_nama_santri = data.santri[0].nama_santri
        var edit_kamar_santri = data.santri[0].kamar_santri

        $('#edit_id_santri').val(id_santri)
        $('#edit_nama_pesantren').val(kamar_santri)
        $('#edit_id_pesantren').val(id_pesantren_santri)
        $('#edit_no_induk').val(no_induk)
        $('#edit_nama_santri').val(edit_nama_santri)
        $('#edit_kamar_santri').val(edit_kamar_santri)
        $('#edit_alamat_santri').val(alamat_santri)
        $('input[name=edit_hp_santri]').val(hp_santri);
        $('#modalEditSantri').modal('show')
      }
    })
  }

  
  
  
</script>
  
</body>
</html>

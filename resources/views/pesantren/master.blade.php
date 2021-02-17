<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Pesantren &mdash; Admin</title>
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
                      {{$total_santri}}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                @yield('table_pesantren')
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                @yield('table_channel')
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
<div class="modal fade" id="modalTambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="tambah_data_pesantren" action="#" method="POST">
        @csrf
      <div class="modal-body">
          <div class="form-group">
            <label for="nama_pesantren">Nama Pesantren</label>
            <input type="text" class="form-control" name="nama_pesantren" id="nama_pesantren" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="alamat_pesantren">Alamat Pesantren</label>
            <input type="text" class="form-control" name="alamat_pesantren" id="alamat_pesantren" autocomplete="off">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          <button id="btn_tambah_data_pesantren" type="button" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Edi Data-->
<div class="modal fade" id="modalEditData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form_edit_data_pesantren" action="#" method="POST">
        @csrf
      <div class="modal-body">
          <input type="hidden" name="edit_id_pesantren">
          <div class="form-group">
            <label for="edit_nama_pesantren">Nama Pesantren</label>
            <input type="text" class="form-control" name="edit_nama_pesantren" id="edit_nama_pesantren" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="edit_alamat_pesantren">Alamat Pesantren</label>
            <input type="text" class="form-control" name="edit_alamat_pesantren" id="edit_alamat_pesantren" autocomplete="off">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          <button id="btn_edit_data_pesantren" type="button" class="btn btn-primary">Edit</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Edit Channel-->
<div class="modal fade" id="modalEditChannel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Channel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form_edit_channel_pesantren" action="#" method="POST">
        @csrf
        {{ csrf_field() }}
      <div class="modal-body">
          <div class="form-group">
            <label for="edit_id_pesantren_channel">Nama Pesantren</label>
            <select class="form-control" name="edit_id_pesantren_channel" id="edit_id_pesantren_channel" required>
              <option value="">Pilih Pesantren</option>
              @foreach ($datas as $data)
                  <option value="{{$data->id_pesantren}}">{{$data->nama_pesantren}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <input type="hidden" name="edit_id_videos" value="">
            <label for="edit_channel_pesantren">Channel Pesantren</label>
            <input type="text" class="form-control" name="edit_channel_pesantren" id="edit_channel_pesantren" autocomplete="off">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          <button id="btn_edit_channel_pesantren" type="button" class="btn btn-primary">Edit</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Tambah Channel-->
<div class="modal fade" id="modalTambahChannel" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Channel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="tambah_channel_pesantren" action="#" method="POST">
        @csrf
      <div class="modal-body">
          <div class="form-group">
            
            <label for="id_pesantren_channel">Nama Pesantren</label>
            <select class="form-control" name="id_pesantren_channel" id="id_pesantren_channel">
              <option value="">Pilih</option>
              @foreach ($datas as $data)
                 <option value="{{$data->id_pesantren}}">{{$data->nama_pesantren}}</option> 
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="channel_id">Channel</label>
            <input type="text" class="form-control" name="channel_id" id="channel" autocomplete="off">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          <button id="btn_tambah_channel_pesantren" type="button" class="btn btn-primary">Tambah</button>
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

      loadData()
      loadChanel()

      function loadData()
      {
        $.ajax({
          url: "{{route('pesantren.pesantren')}}",
          type: 'GET',
          dataType: "JSON",
          success: function(data) {
            $('#total_santri').html(data.total_santri)
            $('#total_channel').html(data.total_channel)
            $('#total_pesantren').html(data.total_pesantren)
            $('#loading_pesantren').hide()
            $('#loading_channel').hide()
            var data = data.pesantren
            $(data).each(function(i) {
              var nama_pesantren = data[i].nama_pesantren
              var id_pesantren = data[i].id_pesantren
              var alamat_pesantren = data[i].alamat_pesantren
              var no = i+1
              var html = "<tr><td>"+ no +"</td><td class='font-weight-600'>"+nama_pesantren+"</td><td>"+alamat_pesantren+"</td><td><a href='javascript:void(0)' class='btn btn-warning' onclick='konfirm_pesantren("+id_pesantren+")'><i class='fa fa-trash'></i></a><a href='#' onclick='modalEdit("+id_pesantren+")' class='btn btn-primary'><i class='fa fa-edit'></i></a></td></tr>"
              $('#tampil_table').append(html);
              
            })
            
          }
        })
      }

     

      //ketika tombol tambah data pesantren di tekan
      $('#btn_tambah_data_pesantren').on('click', function(event) {
        event.preventDefault()
        var tambah_data_pesantren = $('#tambah_data_pesantren').serialize()
        $.ajax({
          url: "{{ route('pesantren.store') }}",
          data: tambah_data_pesantren,
          type: 'POST',
          dataType: "JSON",
          success: function(data) {
            var jumlah_data = data.pesantren.jumlah_data
            $('#modalTambahData').modal('hide')
              var html = "<tr><td>"+ jumlah_data +"</td><td class='font-weight-600'>"+data.pesantren.nama_pesantren+"</td><td>"+data.pesantren.alamat_pesantren+"</td><td><a href='javascript:void(0)' class='btn btn-warning' onclick='konfirm_pesantren("+data.pesantren.id_pesantren+")'><i class='fa fa-trash'></i></a><a href='#' onclick='modalEdit("+data.pesantren.id_pesantren+")' class='btn btn-primary'><i class='fa fa-edit'></i></a></td></tr>"
              $('#tampil_table').append(html);
              
          }
        })
      });

      //ketika tombol edit di tekan
      $('#btn_edit_data_pesantren').on('click', function(event) {
        event.preventDefault()
        // var nama_pesantren = $("input[name=edit_nama_pesantren]").val()
        // var alamat_pesantren = $("input[name=edit_alamat_pesantren]").val()
        // var id_pesantren = $("input[name=edit_id_pesantren]").val()
        var form_edit_data_pesantren = $('#form_edit_data_pesantren').serialize()
        // alert(form_edit_data_pesantren)
        $.ajax({
          url: "{{route('pesantren.update')}}",
          data: form_edit_data_pesantren,
          type: 'POST',
          dataType: "JSON",
          success: function(data) {
            console.log(data)
            $('#modalEditData').modal('hide')
            location.reload()
          },
          error: function (error) {
          alert('error; ' + eval(error));
          }
        })
      });


      function loadChanel()
      {
        $.ajax({
          url: "{{route('channel')}}",
          type: 'GET',
          dataType: "JSON",
          success: function(data) {
            var data = data.channel
            $(data).each(function(i) {
              var nama_pesantren = data[i].id_pesantren_channel
              var channel_id = data[i].channel_id
              var id_videos = data[i].id_videos
              var no = i+1
              var html = "<tr><td>"+ no +"</td><td class='font-weight-600'>"+nama_pesantren+"</td><td>"+channel_id+"</td><td><a href='javascript:void(0)' class='btn btn-warning' onclick='konfirm_channel("+id_videos+")'><i class='fa fa-trash'></i></a><a href='#' onclick='modalEditChannel("+id_videos+")' class='btn btn-primary'><i class='fa fa-edit'></i></a></td></tr>"
              $('#tampil_channel').append(html);
            })
          }
        })
      }

      //ketika btn edit channel di tekan
      $('#btn_edit_channel_pesantren').on('click', function(event) {
        event.preventDefault()
        var channel_pesantren = $("input[name=edit_channel_pesantren]").val()
        var id_pesantren = $("select[name=edit_id_pesantren_channel]").val()
        var id_videos = $("input[name=edit_id_videos]").val()
        $.ajax({
          url: "{{route('channel.update')}}",
          data: {id_pesantren: id_pesantren, channel_id: channel_pesantren, id_videos: id_videos},
          type: 'POST',
          dataType: "JSON",
          success: function(data) {
            console.log(data)
            $('#modalEditChannel').modal('hide')
            location.reload()
          }
        })
      });

      //ajax tambah channel
      $('#btn_tambah_channel_pesantren').on('click', function(event) {
        event.preventDefault()
        var tambah_channel_pesantren = $('#tambah_channel_pesantren').serialize()
        alert(tambah_channel_pesantren)
        $.ajax({
          url: "{{ route('channel.store') }}",
          data: tambah_channel_pesantren,
          type: 'POST', 
          dataType: "JSON",
          success: function(data) {
            console.log(data.channel)
            var nama_pesantren = data.channel.nama_pesantren
            var channel_id = data.channel.channel_id
            var jumlah_channel = data.channel.jumlah_channel + 1
              var html = "<tr><td>"+ jumlah_channel +"</td><td class='font-weight-600'>"+nama_pesantren+"</td><td>"+data.channel.channel_id+"</td><td><a href='javascript:void(0)' class='btn btn-warning' onclick='return confirm("+data.channel.id_videos+")'><i class='fa fa-trash'></i></a><a href='javascript:void(0)' onclick='modalEditChannel("+ data.channel.id_videos +")' class='btn btn-primary'><i class='fa fa-edit'></i></a></td></tr>"
              $('#modalTambahChannel').modal('hide')
              $('#tampil_channel').append(html);
          }
        })
      });
      
      //select2
      
      $('#id_pesantren_channel').select2({
        placeholder: 'Pilih Pesantren',
        allowClear: false,
      });

      $('#edit_id_pesantren_channel').select2({
        placeholder: 'Pilih Pesantren',
        allowClear: false,
      });
      
    })//tutup document ready


      function modalEdit(id) {
        event.preventDefault()
        $.ajax({
          url: "{{route('pesantren.edit')}}",
          data: {id_pesantren: id},
          dataType: "JSON",
          success: function(data) {
            $("input[name=edit_nama_pesantren]").val(data.pesantren[0].nama_pesantren);
            $("input[name=edit_alamat_pesantren]").val(data.pesantren[0].alamat_pesantren);
            $("input[name=edit_id_pesantren]").val(data.pesantren[0].id_pesantren);
            $('#modalEditData').modal('show')
          }
        })
      }

      //modal edit channel
      function modalEditChannel(id) {
        event.preventDefault()
        $.ajax({
          url: "{{ route('channel.edit') }}",
          method: "POST",
          data: {id_videos: id},
          dataType: "JSON",
          success: function(data) {
            console.log(data)
            var id_pesantren_channel = data.channel[0].id_pesantren_channel
            var channel_id = data.channel[0].channel_id
            var id_videos = data.channel[0].id_videos
            var channel_id = data.channel[0].channel_id
            // $("input[name=edit_id_pesantren_channel]").val(nama_pesantren);
            $("input[name=edit_channel_pesantren]").val(channel_id);
            $("input[name=edit_id_videos]").val(id_videos);
            $('#modalEditChannel').modal('show')
          }
        })
      }

       //konfirm hapus data pesantren
       function konfirm_pesantren(id){
        var con = confirm(id)
        if(con){
          $.ajax({
            url: "{{route('pesantren.delete')}}",
            data: {id_pesantren : id},
            type: "POST",
            dataType: "JSON",
            suuccess: function(data){
              window.location.href = "/admin"
              location.reload()
            }
          });
        }else{
          $('#modalEditPesantren').modal('hide')
        }
      }

      function konfirm_channel(id){
        var con = confirm(id)
        if(con){
          $.ajax({
            url: "{{route('channel.delete')}}",
            data: {id_videos : id},
            type: "POST",
            dataType: "JSON",
            suuccess: function(data){
              location.reload()
              window.location.href = "/admin"
            }
          });
        }else{
          $('#modalEditChannel').modal('hide')
        }
      }

  </script>
</body>
</html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Layanan Darurat Terpadu Surabaya</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
 <link rel="stylesheet" type="text/css" href="{{URL::to ('swal/dist/sweetalert.css')}}">
 <script src="{{URL::to ('swal/dist/sweetalert.min.js')}}"></script>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<script type="text/javascript">
    function notifkeren(){
    swal("Sukses", "Data berhasil dihapus", "success")
}

</script>
</head>
<body>
 @if (Session::has('messagesuksesdelete'))
              <script type="text/javascript">notifkeren();</script>
        @endif
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                    Admin
                </a>
            </div>

            <ul class="nav">
                <li >
                    <a href="{{URL::to('input')}}">
                        <i class="pe-7s-map-marker"></i>
                        <p>input</p>
                    </a>
                </li>
               
                <li class="active">
                    <a href="{{URL::to('list')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Table</p>
                    </a>
                </li>
               
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        
                       
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                       
                        <li>
                            <a href="#">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tabel Layanan Terpadu Surabaya</h4>
                               
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Kategori</th>
                                    	<th>Nama</th>
                                    	<th>Alamat</th>
                                    	<th>Nomor Telepon</th>
                                    	<th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Pilihan<td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach($daftar as $info)
                                        	<td>{{$info->kategori}}</td>
                                        	<td>{{$info->namalayanan}}</td>
                                        	<td>{{$info->alamat}}</td>
                                        	<td>{{$info->notelpon}}</td>
                                        	<td>{{$info->lat}}</td>
                                            <td>{{$info->longitude}}</td>
                                              <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$info->id}}" data-id="{{$info->id}}">delete</button><td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                   


                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    
                </nav>
                <p class="copyright pull-right">
                    &copy; <a href="http://www.creative-tim.com">MPPL</a>, 2016
                </p>
            </div>
        </footer>


    </div>
</div>

    @foreach($daftar as $post ) 
<div id="deleteModal{{$post->id}}" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Peserta</h3>
                  </div>
                  <div id="modal_soal" style="overflow:hidden;padding:2%;" class="modal-body">
                  <h5>Apakah ingin menghapus peserta ini?</h5>
            
      </div>
      <div class="modal-footer">
          <form method="POST" action="{{URL:: to ('hapuspeserta')}}" style="float: left; margin-right: 6%">
               <input type="hidden" id="id"name="id" value="{{$post->id}}">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <button type="submit" class="btn btn-danger">Hapus</button>                                      
            </form>
            </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
      </div>
    </div>

  </div>
</div>
              </div>
            </div>          
    @endforeach
</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>

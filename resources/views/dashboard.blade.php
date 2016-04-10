<!doctype html>
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


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Google Maps Location picker</title>
    <style type="text/css">    
      #map {
        margin: 10px;
        width: 600px;
        height: 300px;  
        padding: 10px;
      }
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCK2E3Dd2UxSPHSogXf3tzdIoy3BftPK-o&signed_in=true&callback=initMap"
    type="text/javascript"></script>

</head>
<body>

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
                <li class="active">
                    <a href="{{URL::to('input')}}">
                        <i class="pe-7s-map-marker"></i>
                        <p>input</p>
                    </a>
                </li>
               
                <li>
                    <a href="{{URL::to('list')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
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


       <div class="card">
                            <div class="header">
                                <h4 class="title">Input Layanan</h4>
                            </div>
                            <div class="content">
                                <form action="{{URL::to('insert')}}" method="POST">
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Kategori layanan</label>
                                                <input type="text" class="form-control" placeholder="input nama" name="kategori">
                                            </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Layanan</label>
                                                <input type="text" class="form-control" placeholder="input nama" name="layanan">
                                            </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" placeholder="Alamat" value="" name="alamat">
                                            </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nomor telepon</label>
                                                <input type="text" class="form-control" placeholder="telepon" value="" name="telpon">
                                        </div>
                                    </div>
                                        
                                        
                                    <div id="map"></div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Latitude</label>
                                                <input type="text" class="form-control" name="latitude" id="latitude" value="" name="lat">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Longitude</label>
                                                <input type="text" class="form-control" name="longitude" id="longitude" value="" name="long">
                                            </div>
                                        </div>
                                    </div>

                                    

                                    
                                    </div>

                                    {{csrf_field()}}

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Simpan</button>
                                    <div class="clearfix"></div>
                                </form>
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

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	
            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

    <script>
        function updateMarkerPosition(latLng) {
      document.getElementById('latitude').value = [latLng.lat()]
        document.getElementById('longitude').value = [latLng.lng()]
    }
           
    var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: new google.maps.LatLng(-7.279357540138927,112.79737586238673),
     mapTypeId: google.maps.MapTypeId.ROADMAP
      });
    //posisi awal marker
//     if (navigator.geolocation) {
//    navigator.geolocation.getCurrentPosition(function(position) {
//      var latLng= {
//        lat: position.coords.latitude,
//        lng: position.coords.longitude
//      };   
//  }
// }
     var latLng = new google.maps.LatLng(-7.279357540138927,112.79737586238673);
     
    /* buat marker yang bisa di drag lalu 
      panggil fungsi updateMarkerPosition(latLng)
     dan letakan posisi terakhir di id=latitude dan id=longitude
     */
    var marker = new google.maps.Marker({
        position : latLng,
        title : 'lokasi',
        map : map,
        draggable : true
      });
       
    updateMarkerPosition(latLng);
    google.maps.event.addListener(marker, 'drag', function() {
     // ketika marker di drag, otomatis nilai latitude dan longitude
     //menyesuaikan dengan posisi marker 
        updateMarkerPosition(marker.getPosition());
      });

    </script>

</html>

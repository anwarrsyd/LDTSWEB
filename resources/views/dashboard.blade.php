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
    
 <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        margin: 10px;
        width: 600px;
        height: 300px;  
        padding: 10px;
      }
.controls {
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 32px;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

#pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 300px;
}

#pac-input:focus {
  border-color: #4d90fe;
}

.pac-container {
  font-family: Roboto;
}

#type-selector {
  color: #fff;
  background-color: #4d90fe;
  padding: 5px 11px 0px 11px;
}

#type-selector label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}

    </style>
    <title>Places Searchbox</title>
    <style>
      #target {
        width: 345px;
      }
    </style>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCK2E3Dd2UxSPHSogXf3tzdIoy3BftPK-o&signed_in=true&callback=initAutocomplete"
    type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="{{URL::to ('swal/dist/sweetalert.css')}}">
 <script src="{{URL::to ('swal/dist/sweetalert.min.js')}}"></script>

<script type="text/javascript">
    function notifkeren(){
    swal("Sukses", "Data Berhasil Ditambahkan", "success")
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
                                                <div>
                                                <select name="kategori">
                                                <option value="Keamanan">Keamanan</option>
                                                <option value="Kesehatan">Kesehatan</option>
                                                <option value="Transportasi">Transportasi</option>
                                              </select>
                                              </div>
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
                                                <label>Nomor telepon</label>
                                                <input type="text" class="form-control" placeholder="telepon" value="" name="telpon">
                                        </div>
                                    </div>
                                    </div>
                                        
                                         <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                        <input id="pac-input" class="controls" type="text" placeholder="Masukan alamat!" name="alamat"> 
                                        </div>
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
// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.

function initAutocomplete() {
var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: new google.maps.LatLng(-7.279357540138927,112.79737586238673),
     mapTypeId: google.maps.MapTypeId.ROADMAP
      });
  // Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');
  var searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });
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


  var markers = [];
  // [START region_getplaces]
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }




    // Clear out the old markers.
    markers.forEach(function(marker) {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      var icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      markers.push(new google.maps.Marker({
        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location
      }));
        var marker = new google.maps.Marker({
        position :  place.geometry.location,
        title : 'lokasi',
        map : map,
        draggable : true
      });
       
    updateMarkerPosition( place.geometry.location);
    google.maps.event.addListener(marker, 'drag', function() {
     // ketika marker di drag, otomatis nilai latitude dan longitude
     //menyesuaikan dengan posisi marker 
        updateMarkerPosition(marker.getPosition());
      });

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });

  // [END region_getplaces]
}


    </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCK2E3Dd2UxSPHSogXf3tzdIoy3BftPK-o&libraries=places&callback=initAutocomplete"
         async defer></script>
    
</html>

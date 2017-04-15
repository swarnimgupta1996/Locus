<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>LOCUS</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="<?=base_url("assets/css/style.css")?>"></link>
</head>

<body>


  <div class="navigation-bar">
    <div class="row top1">
  
     <?php
     if(!$this->session->userdata('logged_in') || $flag ==1)
     { 

       if(!$this->session->userdata('location_set')||$flag==1){ ?>

             <button type="button" class="btn btn-info btn-md location-btn" id="btns" data-toggle="modal" data-target="#locationModal">
               <span class="glyphicon glyphicon-map-marker"></span> Location <span class="badge">Change</span>
             </button>
             <?php }
       else {?>
               <button type="button" class="btn btn-info btn-md location-btn" id="btns" data-toggle="modal" data-target="#locationModal">
                 <span class="glyphicon glyphicon-map-marker"></span> <?=$this->session->userdata('city')?> <span class="badge">Change</span>
               </button>

           <?php } ?>
       <button type="button" class="btn btn-info btn-md login-register-btn" id="btns" data-toggle="modal" data-target="#loginRegister">
        <span class="glyphicon glyphicon-log-in"></span>  Login  <p style="font-size:16px;display:inline;"><b>|</b></p>&nbsp;<span class="glyphicon glyphicon-user"></span>
        Register
      </button>

      <?php }
      else if($this->session->userdata('logged_in') || $flag ==0){
             if(!$this->session->userdata('location_set')){ ?>
                   <button type="button" class="btn btn-info btn-md location-btn" id="btns" data-toggle="modal" data-target="#locationModal">
                     <span class="glyphicon glyphicon-map-marker"></span> Location <span class="badge">Change</span>
                   </button>
             <?php }
             else{?>
                   <button type="button" class="btn btn-info btn-md location-btn" id="btns" data-toggle="modal" data-target="#locationModal">
                     <span class="glyphicon glyphicon-map-marker"></span> <?=$this->session->userdata('city')?> <span class="badge">Change</span>
                   </button>

             <?php } ?>
             <a href="<?=base_url()?>index.php/locus/logout">
               <button  type="button" class="btn btn-info btn-md login-register-btn" id="btns" >
                <span class="glyphicon glyphicon-user"></span>  Logout
              </button>
            </a >
            <span id="user_name"> <?=$this->session->userdata('name')?></span>
      <?php } ?>

      <br><br>
    </div>

    <div class="row top2">
     <div class="col-sm-2">
       <img  class="logo" src="<?=base_url("assets/images/logo_1.png")?>" alt="logo" width="140px" height="48px" style="margin-left:50px" ></img>
     </div>
     <div class="col-sm-2 browse">
      <div class="dropdown" >
        <button class="dropbtn" id="btns">Browse</button>
        <div class="dropdown-content">
         <div class="row">
          <div class ="col-xs-6 col-sm-3">
            <a href="<?=base_url()?>index.php/locus/index_food" ><span class="heading">Food</span></a>
            <a href="<?=base_url()?>index.php/locus/index_food_category/c">Cafes</a>
            <a href="<?=base_url()?>index.php/locus/index_food_category/r">Restaurants</a>
            <a href="<?=base_url()?>index.php/locus/index_food_category/b">Beverages</a>
            <a href="<?=base_url()?>index.php/locus/index_food_category/d">Desserts & Bakeries</a>
          </div>
          <div class ="col-xs-6 col-sm-3">
            <a href="#"><span  class="heading">Stores</span></a>
            <a href="#">Fashion </a>
            <a href="#">Groceries</a>
            <a href="#">Electronics</a>
            <a href="#">Daily Needs</a>
          </div>

          <div class ="col-xs-6 col-sm-3">
            <a href="#"><span  class="heading">Entertainment</span></a>
            <a href="#">Movies </a>
            <a href="#">Events & Shows</a>
            <a href="#">Theme Parks</a>
            <a href="#">Sports & Games</a>
          </div>
          <div class ="col-xs-6 col-sm-3">
            <a href="#"><span  class="heading">Travel & Living</span></a>
            <a href="#">Adventure</a>
            <a href="#">Hotels</a>
            <a href="#">Nightlife</a>
            <a href="#">Getaways</a>
          </div>
        </div> <!--row -->
        <div class="row">
         <div class ="col-xs-6  col-sm-3">
          <a href="#"><span  class="heading">Health</span></a>
          <a href="#">Pharmacies</a>
          <a href="#">Hospitals</a>
          <a href="#">Clinics</a>
        </div>
        <div class ="col-xs-6 col-sm-3">
          <a href="#"><span  class="heading">Beauty & Fitness</span></a>
          <a href="#">Spa</a>
          <a href="#">Salons</a>
          <a href="#">Gyms & Fitness centres</a>
        </div>
      </div> <!--row -->
    </div> <!--dropdown-content!-->
  </div><!--dropdown-->
</div> <!-- col sm-3-->


<div class="col-sm-8 ">
  <form>
    <div class="input-group search" >
      <input type="text" class="form-control input-md" placeholder="Search" style="border-radius:0;">
      <div class="input-group-btn">
        <button class="btn btn-default btn-md" type="submit" style="border-radius:0;">
          <i class="glyphicon glyphicon-search"></i>
        </button>
      </div>
    </div>
  </form>
</div>


</div> <!-- row -->
</div>
<div class="container">
  <br><br>

  <div class ="col-xs-6 col-sm-4 ">
    <div class="thumbnail">
      <a href="<?=base_url()?>index.php/locus/index_food" >
        <img id="icon" src="<?=base_url("assets/images/food.png")?>" class="img-responsive" alt="Food" >
        <div class="caption">
         <p>Food</p>
       </div>
     </div>
   </a>
 </div>

 <div class ="col-xs-6 col-sm-4  ">
  <div class="thumbnail">
    <a href="#" >
      <img  id="icon" src="<?=base_url("assets/images/stores.png")?>" class="img-responsive" alt="Stores">
      <div class="caption">
        <p>Stores</p>
      </div>
    </a>
  </div>
</div>


<div class ="col-xs-6 col-sm-4  ">
  <div class="thumbnail">
    <a href="#" >
      <img id="icon" src="<?=base_url("assets/images/entertainment.png")?>" class="img-responsive" alt="Entertainment" >
      <div class="caption">
        <p>Entertainment</p>
      </div>
    </a>
  </div>
</div>


<div class ="col-xs-6 col-sm-4  ">
  <div class="thumbnail">
    <a href="#" >
      <img id="icon" src="<?=base_url("assets/images/travel.png")?>" class="img-responsive" alt="Travel">
      <div class="caption">
        <p>Travel</p>
      </div>
    </a>
  </div>
</div>


<div class ="col-xs-6 col-sm-4  ">
  <div class="thumbnail">
    <a href="#" >
      <img id="icon" src="<?=base_url("assets/images/health1.png")?>" class="img-responsive" alt="Health" >
      <div class="caption">
        <p>Health</p>
      </div>
    </a>
  </div>
</div>

<div class ="col-xs-6 col-sm-4  ">
  <div class="thumbnail">
    <a href="#" >
     <img  id="icon" src="<?=base_url("assets/images/beautyy.png")?>" class="img-responsive" alt="beauty">
     <div class="caption">
      <p>Beauty & Wellness</p>
    </div>

  </a>
</div>
</div>
</div>


<!--Select City Modal -->
<div class="modal fade" id="locationModal" role="dialog" tabindex="-1" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Location Settings</h4>
      </div>
      <div class="modal-body">
        <form id="location-form">
          <span id="error-loc" style="color:red;"></span> <br>
          <div class="radio-inline">
            <label><input type="radio" name="optradio"  value="1" >Get Current Location</label>
          </div> 
          <div class="radio-inline" >
            <label><input type="radio" name="optradio"  value="2" checked >Enter Location Manually</label>
          </div>

          <?php if($this->session->userdata('location_set')){
            if($this->session->userdata('city')=='Chennai') 
             { ?>
           <div class="form-group">

            <select required class="form-control" id="city">
             <option value="">Select City</option>
             <option value="Chennai" selected>Chennai</option>
             <option value="Delhi">Delhi</option>
           </select>
         </div>
         <?php }
         else
          {?>
        <div class="form-group">

          <select required class="form-control" id="city">
           <option value="">Select City</option>
           <option value="Chennai">Chennai</option>
           <option value="Delhi" selected>Delhi</option>
         </select>
       </div>
       <?php }
     }


     else {  ?>

     <div class="form-group">

      <select required class="form-control" id="city">
        <option value="" selected>Select City</option>
        <option value="Chennai">Chennai</option>
        <option value="Delhi">Delhi</option>
      </select>
    </div>
    <?php } ?>




    <input type="text" class="form-control"  id="loc-name"  size="50" placeholder="Enter a location"
    autocomplete="on" required> </input>

    <br>



    <div class="form-group">
      <label for="radius">Search Radius(optional)</label>
      <input type="number" class="form-control" id="radius" min="1" max="5">
    </div>
    <div class="modal-footer">
     <button type="submit" class="btn btn-default" >Save</button>
   </div>
 </form>
</div>

</div>

</div>
</div>



<!-- LOGIN_REGister MODAL-->
<div class="modal fade" id="loginRegister" role="dialog" tabindex="-1" >
  <div class="modal-dialog" >
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#login">Login</a></li>
          <li><a data-toggle="tab" href="#register">Register</a></li>
          <li><a data-toggle="tab" href="#admlogin">Administrator Login</a></li>
        </ul>

        <div class="tab-content">
         <div id="login" class="tab-pane fade in active">
          <form id="loginform">
            <br> <br>
            <div id="msgDisplay"></div>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="email" type="email" class="form-control" name="email" placeholder="Email" required autofocus>
            </div> <br>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <br>
            <div class="checkbox">
              <label><input type="checkbox"> Keep me logged in </label>
            </div>
            <div class="modal-footer">
             <button type="submit" class="btn btn-default" id="login" style="width: 70%;margin:auto;display:block;">Login</button>
           </div>
         </form>
       </div>
       <div id="register" class="tab-pane fade">
        <form id="registration-form">
          <br> <br>
          <div id="msgDisplay2"></div>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="name" type="text" class="form-control" name="name"  placeholder="Name" autofocus >

          </div> <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="email1" type="text" class="form-control" name="email1" placeholder="Email">
          </div> <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password1" type="password" class="form-control" name="password1" placeholder="Password" >
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="cpassword" type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input id="phone" type="text" class="form-control" name="phone" placeholder="Mobile number">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-default" id="register" >Register</button>
          </div>
        </form>
      </div>
      <div id="admlogin" class="tab-pane fade">
        <form id="admlogin-form">
          <br> <br>
          <div id="msgDisplay3"></div>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="email2" type="email" class="form-control" name="email2" placeholder="Email" required autofocus>
          </div> <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password2" type="password" class="form-control" name="password2" placeholder="Password" required>
          </div>
          <br>
          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
          </div>
          <div class="modal-footer">
           <button type="submit" class="btn btn-default" id="admlogin" style="width: 70%;margin:auto;display:block;">Login</button>
         </div>
       </form>
     </div>
   </div>
 </div>
</div>

</div>
</div>



<script>
  $(document).ready(function() {
    <?php if($v == 1){ ?>
    window.location="<?=base_url()?>index.php/locus/first_reload";
  <?php } ?>
  

   

    $("#loginform").submit(function(){
 event.preventDefault();

 var emailV = $('#email').val();
 var pwdV = $('#password').val();
 var postData = {
  'email' : emailV,
  'password' : pwdV,
  'html':'PASS'
};
$.post('<?=base_url()?>index.php/locus/check_login', postData, function(data){
  if(data=='fail'){
    $("#msgDisplay").html("Incorrect Email or Password");
  }
  else if(data=='success'){
    window.location="<?=base_url()?>index.php/locus";
  }
});
});



$("#registration-form").submit(function(){
  event.preventDefault();

  var nameV = $('#name').val();
  var emailV = $('#email1').val();
  var pwdV = $('#password1').val();
  var cpwdV = $('#cpassword').val();
  var phoneV = $('#phone').val();




  var postData = {
   'email' : emailV,
   'password' : pwdV,
   'cpassword':cpwdV,
   'name' :nameV,
   'phone':phoneV,
   'html':'PASS'
 };
 $.post('<?=base_url()?>index.php/locus/set_register', postData, function(data){
   if(data=='success')
     window.location="<?=base_url()?>index.php/locus";

   else if(data=='failure')
     $("#msgDisplay2").html('Server problem!Please Try after some time');
   else
     $("#msgDisplay2").html(data);
 });
});


   
   if($("input[name=optradio]:checked").val() == "2" && ($('#city').val()=="Chennai"||$('#city').val()=="Delhi"))
   {
    $("#loc-name").removeAttr("disabled");
  }
  else
  {
    $("#loc-name").attr("disabled", "disabled"); 
    $("#loc-name").val("");
  }



  $("input[name=optradio]").click(function(e) {  
    if($("input[name=optradio]:checked").val() == "2") {  

     $("#city").removeAttr("disabled");
     $("#city").val("");
     if($('#city').val()=="Chennai"||$('#city').val()=="Delhi")
     {
       $("#loc-name").removeAttr("disabled");
       $("#loc-name").val("");
     }
     else
     {
      $("#loc-name").attr("disabled", "disabled");  
      $("#loc-name").val("");
    }
  } 
  else {  
    $("#loc-name").attr("disabled", "disabled");  
    $("#city").attr("disabled", "disabled"); 
    getLocation();  

  }  
}); 

  var x = document.getElementById("demo");


  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
      x.innerHTML = "Geolocation is not supported by this browser.";
    }
  }

  function showPosition(position) {
    var lat=position.coords.latitude;
    var lng=position.coords.longitude;
    var latlng = {lat:parseFloat(lat),lng:parseFloat(lng)};
    var geocoder = new google.maps.Geocoder;
    geocoder.geocode({'location': latlng}, function(results, status) {
      if (status === 'OK') {
        if (results[1])               
         { var address= results[1].formatted_address;


           var pcity=results[0]['address_components'][4].long_name;


           if(pcity=="Kattankulathur"||pcity=="Potheri" ||pcity=="Kanchipuram")
            pcity="Chennai";

          if(pcity!="Delhi"  && pcity!="Chennai")
          {
            $('#error-loc').html('Sorry ! We do not serve in the selected area');
          }




          $("#loc-name").val(address);

          $("#city").val(pcity);
        }
        else 
          window.alert('No results found');

      } 
      else {
        window.alert('Geocoder failed due to: ' + status);
      }
    });      
    
  }

  $('#locationModal').on('shown.bs.modal', function (e) {
    initializeSearch();
    <?php if($this->session->userdata('location_set')){?>

    $("#loc-name").val("<?=$this->session->userdata('address')?>");
   <?php } ?>

  });

  $('#city').on('change', function (e) {
    $("#loc-name").val("");
    if($("input[name=optradio]:checked").val() == "2" && ($('#city').val()=="Chennai"||$('#city').val()=="Delhi"))
    {
      $("#loc-name").removeAttr("disabled");
    }
    else
    {
      $("#loc-name").attr("disabled", "disabled"); 
      $("#loc-name").val("");
    }
    initializeSearch();
  });
  function initializeSearch() {

    if(document.getElementById("city").value =="Chennai"){
     var s=12.78033 ;      
     var w = 79.954376;
     var n=13.261166;
     var e=80.336323;
   }

   else if(document.getElementById("city").value == "Delhi"){
    var s=28.412593 ;
    var w = 76.838069;
    var n=28.881338;
    var e=77.348458;
  }
  


  var defaultBounds = new google.maps.LatLngBounds(
    new google.maps.LatLng(s,w),
    new google.maps.LatLng(n,e));
  var options = {
   bounds: defaultBounds,
   types: ['establishment'],
   strictBounds: true
 };

 var input = document.getElementById('loc-name');
 var autocomplete = new google.maps.places.Autocomplete(input,options);

}





$("#location-form").submit(function(){
 event.preventDefault();
 var city = $('#city').val();
 var address = $('#loc-name').val();
 var radius = $('#radius').val();
 var l;
 getLatLng();
 function getLatLng() {
  var geocoder = new google.maps.Geocoder();
  geocoder.geocode({ 'address': address }, function (results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
     callback(results[0].geometry.location.lat(),results[0].geometry.location.lng());

   } 
 });
}
function callback(latitude,longitude){      
 var postData = {
   'city' : city,
   'address' : address,
   'radius':radius,
   'lat':String(latitude),
   'lng':String(longitude),
   'html':'PASS'
 };
 $.post('<?=base_url()?>index.php/locus/set_location', postData,function(data){
  if(data=='success'){
    window.location="<?=base_url()?>index.php/locus";
  }
  else
    $("#error-loc").html('Problem in setting location,Try again later');
});
}
});
});
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBplCrDf4cq_jtToIokSJoAyhlcudXWIgM&libraries=places" async defer></script>
</body>
</html>






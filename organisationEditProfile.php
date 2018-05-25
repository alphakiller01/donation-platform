<!DOCTYPE html>
<html style="height: 100%">
<head>
  <title>Organisation Edit Profile</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="assets/js/materialize.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

.container {
  width: 80% !important;

}
/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 835px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 835px;
    
}

#textarea1 {
    overflow-y: scroll; 
    height: 150px !important;
    border: 1px solid;
    resize: none; /* Remove this if you want the user to resize the textarea */
}

.circle {
  width: 100px;
  height: 100px
}

</style>
</head>
<body style="background-color:#eeeeee">
  <!-- Nav Bar -->
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper  amber darken-3">
        
        
        <a href="#" class="brand-logo" style="margin-left: 10px">Logo</a>
        <ul class="left hide-on-med-and-down" style="margin-left: 100px"> 
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Feed</a></li>
          <li><a href="#">Explore</a></li>
        </ul>
        
        <ul class="right hide-on-med-and-down">
          <li><a href="#">Login / Sign Up</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="container ">
    <div class="row" style="margin-top: 10px">
      <div class="col s12">
        <div class="tab" style="background-color: white;">
          <button class="tablinks" onclick="openCity(event, 'editProfile')" id="defaultOpen">Edit Profile</button>
          <button class="tablinks" onclick="openCity(event, 'changePassword')">Edit Password</button>
          <button class="tablinks" onclick="openCity(event, 'editAccount')">Edit Bank Account</button>
        </div>


        <div id="editProfile" class="tabcontent" style="background-color:white; padding-bottom: 10px; padding: 10px">

          <form>
            <h5 style="margin-left: 10px; font-weight: bold">Edit Profile</h5>
            <hr>
            <div class="center-align">
              <img src="images/donator.png" class="circle">
              <p>Name</p>
              <a class="waves-effect waves-light btn-small" style="margin-bottom: 20px">Edit Avatar</a>

            </div>
              
              <div class="col s12 input-field" style="margin-bottom: 30px;">
                <i class="material-icons prefix">account_circle</i>
                <input id="first_name" type="text" class="validate">
                <label for="first_name">Organisation Name</label>
            
            </div>


            <div class="input-field col s12">
             <div style="margin-bottom:">
              <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                    <span class="helper-text" data-error="wrong input" data-success="correct"></span>
                </div>
              </div>
                <div class="input-field col s12">
              <i class="material-icons prefix">phone</i>
                    <input id="icon_telephone" type="tel" class="validate">
                    <label for="icon_telephone">Contact No</label>
                </div>

                <div class="col s12">
                  
                  </div>

                  <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1" style="margin-left: 10px">About Us</label>
                  </div>

                  <div class="col s12">
                    
                    
                  </div>

                 

                <div class="col s12" >
                  <button class="btn-small waves-effect waves-light " type="submit" name="action" style="float: right;">
                  Update<i class="material-icons right">send</i>
                  </button>

                  <a class="waves-effect waves-light btn-small" style="float: right; margin-right: 10px; ">Cancel</a>

                </div>
          </form>

        </div>

        <div id="changePassword" class="tabcontent" style="background-color: white; padding: 10px">
          <form>
            <h5 style="font-weight: bold; margin-left: 10px">Edit Password</h5>
            <hr>
            <div class="input-field col s12">
              <i class="material-icons prefix">lock</i>
                <input id="Old password" type="password" class="validate">
                <label for="Old password">Old Password</label>
            </div>

            <div class="input-field col s6">
                <i class="material-icons prefix">vpn_key</i>
                <input id="New password" type="password" class="validate">
                <label for="New password">New Password</label>
            </div>

            <div class="input-field col s6">
              <input id="Confirm password" type="password" class="validate">
              <label for="Confirm password">Confirm Password</label>
            </div>

             <div class="col s12" >
                  <button class="btn-small waves-effect waves-light " type="submit" name="action" style="float: right">
                  Update<i class="material-icons right">send</i>
                  </button>

                  <a class="waves-effect waves-light btn-small" style="float: right; margin-right: 10px">Cancel</a>

                </div>
          </form>
        </div>

        <div id="editAccount" class="tabcontent" style="background-color:white; padding-bottom: 10px; padding: 10px">
          
          <div class="col s12">
            <h5 style="font-weight: bold">Add a Bank Account</h5>
            <hr>
          </div>
          <div class="input-field col s12">
            
            <select class="browser-default">
              <option value="" disabled selected>Country</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select> 

          </div>


             <div class="col s12 input-field" style="margin-bottom: 30px;">
                <i class="material-icons prefix">account_circle</i>
                <input id="first_name" type="text" class="validate">
                <label for="first_name">Bank Name</label>
            </div>

             <div class="col s12 input-field" style="margin-bottom: 30px;">
                <i class="material-icons prefix">account_circle</i>
                <input id="first_name" type="text" class="validate">
                <label for="first_name">Account Name</label>
            </div>

            <div class="col s12 input-field" style="margin-bottom: 30px;">
                <i class="material-icons prefix">account_circle</i>
                <input id="first_name" type="text" class="validate">
                <label for="first_name">Account Number</label>
            </div>

         </div>
      </div>
    </div>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";


}

// Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

    $('select').formSelect();
</script>
     
</body>

<footer class="page-footer amber darken-3" style="margin-top: 0px; bottom: 0; ">
  <div class="container" style="width: 90%">
    <div class="row" ">
      <div class="col l3 " style="line-height: ">
        <h5 class="white-text">Logo</h5>
        

      </div>
      <div class="col l3 " style="text-align: left; line-height: 30px">
        <h5 class="white-text">Learn More</h5>
        <ul class="footer-list" >
          <li><a class="grey-text text-lighten-3" href="#">How It Works</a></li>
          <li><a class="grey-text text-lighten-3" href="#">Our Voice</a></li>
          <li><a class="grey-text text-lighten-3" href="#">Stories</a></li>
          <li><a class="grey-text text-lighten-3" href="#">Fundraising Tips</a></li>
          <li><a class="grey-text text-lighten-3" href="#">About Us</a></li>
        </ul>
      </div>
      <div class="col l3" style="text-align: left; line-height: 30px ">
        <h5 class="white-text">Browse Categories</h5>
        <ul class="footer-list">
          <li><a class="grey-text text-lighten-3" href="#">Clubs and communities</a></li>
          <li><a class="grey-text text-lighten-3" href="#">Environment</a></li>
          <li><a class="grey-text text-lighten-3" href="#">Hunger</a></li>
          <li><a class="grey-text text-lighten-3" href="#">Poverty</a></li>
          <li><a class="grey-text text-lighten-3" href="#">Animals</a></li>
        </ul>
      </div>

      <div class="col l3" style="text-align: left; line-height: 30px">
        <h5 class="white-text">Customer Service</h5>
        <ul class="footer-list">
          <li><a class="grey-text text-lighten-3" href="#">Help & FAQS</a></li>
          <li><a class="grey-text text-lighten-3" href="#">Terms of Service</a></li>
          <li><a class="grey-text text-lighten-3" href="#">Privacy Policy</a></li>
          <li><a class="grey-text text-lighten-3" href="#">Contact Us</a></li>
          <li><a class="grey-text text-lighten-3" href="#">Site Map</a></li>
        </ul>
      </div>


    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">© 2018 Copyright</div>
  </div>
</footer>
</html> 


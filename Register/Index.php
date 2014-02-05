<?php include('C:/ClientSites/gamehub.ca/httpdocs/includes/header.php'); ?>
<?php // include('C:/xampp/htdocs/test/includes/header.php'); ?>
<body id="body-bg-signup">
<div class="container-bg-signup">
   <div class="container">
      <form class="form-signup" role="form" action="http://www.gamehub.ca/Register/User/SignUp" method="POST">
        <h2 class="form-signup-heading">Sign up with email.</h2>
        <p>
            <input id="FirstName" name="FirstName" type="text" data-validation="length" data-validation-length="2-50" class="form-control input-lg" placeholder="First Name" required>
        </p>
        <p>
            <input id="LastName" name="LastName" type="text" data-validation="length" data-validation-length="2-50" class="form-control input-lg" placeholder="Last Name" required>
        </p> 
        <p>
            <input id="UserName" name="UserName" type="text" data-validation="length" data-validation-length="4-50" class="form-control input-lg" placeholder="Username" required>
        </p>
        <p>
            <input id="Email" name="Email" type="text" data-validation="email" class="form-control input-lg" placeholder="Email Address" required>
       </p>
        <p>
            <input id="Password" name="Password" type="password" data-validation="length" data-validation-length="8-100" class="form-control input-lg" placeholder="Password" required>
        </p>    
	       <!--  <label class="checkbox">
          <input type="checkbox" value="remember-me"> <span class="personalize-text">Let Gamehub personalize your experience based on your interests</span>
        </label> -->
        <p>By creating an account, I accept Gamehub's Terms of Service and Privacy Policy.</p>
        <hr/>
        <button class="btn btn-lg btn-danger cancel-btn" type="submit">Cancel</button>
        <button class="btn btn-lg btn-primary signup-btn" type="submit">Sign Up</button>
      </form>
    </div>
</div>
<?php include('C:/ClientSites/gamehub.ca/httpdocs/includes/footer.php'); ?>
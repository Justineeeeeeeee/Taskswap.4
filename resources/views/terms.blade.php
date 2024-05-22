<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Taskswap</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <!-- Google Fonts -->
      <link rel = "icon" href = "{{ asset('assets/images/logo.png') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/loginform.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/chatbox.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/termsOfCondition.css') }}">
 
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">


  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  @include('header')

  <main id="main">

  <section class="category-section">
      <div class="container" data-aos="fade-up">

<!-- START OF privacy -->
<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1" style="font-family:Fira Sans, sans-serif; ">Terms and Conditions</h2>
    </div>
</div>

<div class="row featurette">
    <div>
        <h2 class="featurette-heading fw-normal lh-1" style="font-family: PT Serif, sans-serif;font-size: 2.0em;">1. User Responsibilities<span>
                <p class="lead" style="font-family: PT Serif, sans-serif; font-size: 20px;">
                    <br>1.1 Eligibility: Users must be at least 18 years old or the legal age of majority in their jurisdiction to use TaskSwap.<br><br>
                    1.2 Account Accuracy: Users are responsible for providing accurate and up-to-date information when creating and maintaining their TaskSwap accounts.

                </p>
    </div>
</div>


<div class="row featurette">
    <div>
        <h2 class="featurette-heading fw-normal lh-1" style=" font-family: PT Serif, sans-serif;font-size: 2.0em;">2. Prohibited Activities<span>
                <p class="lead" style="font-family: PT Serif, sans-serif; font-size: 20px;">
                    <br>2.1 Misuse: Users must not engage in any activity that may disrupt or interfere with TaskSwap's services or violate applicable laws.<br><br>
                    2.2 Intellectual Property: Users must respect the intellectual property rights of TaskSwap and other users, including copyrights and trademarks.
                                                        </p>
    </div>
</div>

<div class="row featurette">
    <div>
        <h2 class="featurette-heading fw-normal lh-1" style="font-family: PT Serif, sans-serif;font-size: 2.0em;">3. Termination<span>
                <p class="lead" style="font-family: PT Serif, sans-serif; font-size: 20px;">
                    <br>3.1 Account Termination: TaskSwap reserves the right to suspend or terminate user accounts for violations of these terms or for any other reason.
                </p>
    </div>
</div>

<div class="row featurette">
    <div>
        <h2 class="featurette-heading fw-normal lh-1" style=" font-family: PT Serif, sans-serif;font-size: 2.0em;">4. Limitation of Liability<span>
                <p class="lead" style="font-family: PT Serif, sans-serif; font-size: 20px;">
                    <br>4.1 Disclaimer: TaskSwap is provided "as-is," and we make no warranties regarding the platform's availability, accuracy, or suitability for a particular purpose.<br><br>
                    4.2 Limitation of Liability: TaskSwap shall not be liable for any direct, indirect, incidental, or consequential damages arising out of or in connection with the use or inability to use the platform.
                </p>
    </div>
</div>





<hr class="featurette-divider">

<!-- /END OF privacy -->

  
      </div>
      <section>

 
     
  </main><!-- End #main -->

 
    @include('footer')

  {{-- Sign Up MODAL START --}}
              <script>
            document.getElementById('signupButton').addEventListener('click', function() {
                $('#Sigm_up-modal').modal('show');
            });
        </script>


    @include('landingModal')


       {{-- LOGIN MODAL START --}}
       <script>
            document.getElementById('LoginButton').addEventListener('click', function() {
                $('#login-modal').modal('show');
            });
        </script>

       







{{-- Terms and Condition MODAL START --}}
<script>
            document.getElementById('SignUpButton').addEventListener('click', function() {
                $('#terms-modal').modal('show');
            });
        </script>
           <script>
            document.getElementById('GoogleSignUpButton').addEventListener('click', function() {
                $('#terms-modal').modal('show');
            });
        </script>
           <script>
            document.getElementById('FacebookSignUpButton').addEventListener('click', function() {
                $('#terms-modal').modal('show');
            });
        </script>

        <div class="modal fade" id="terms-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true" style="max-height: 100vh; overflow-y: hidden; overflow-x: hidden;">
          <div class="modal-dialog  modal-dialog-centered" style="width:fit-content">
                    <div class="modal-content">
            
            <div class="terms-box">
            <div style="border:10px;">
            <div class="terms-text text-left">
            <h2 class="h2_text">Terms Of Service</h2>
            <p>Last Edit: 02/23/2024</p> <p>Greetings Users,</p>
            <p>
            1. User Responsibilities<br>
            1.1 Eligibility: Users must be at least 18 years old or the legal age of majority in their jurisdiction to use TaskSwap.<br>
            1.2 Account Accuracy: Users are responsible for providing accurate and up-to-date information when creating and maintaining their TaskSwap accounts.<br>
            2. Prohibited Activities<br>
            2.1 Misuse: Users must not engage in any activity that may disrupt or interfere with TaskSwap's services or violate applicable laws.<br>
            2.2 Intellectual Property: Users must respect the intellectual property rights of TaskSwap and other users, including copyrights and trademarks.<br>
            3. Termination<br>
            3.1 Account Termination: TaskSwap reserves the right to suspend or terminate user accounts for violations of these terms or for any other reason.<br>
            4. Limitation of Liability<br>
            4.1 Disclaimer: TaskSwap is provided "as-is," and we make no warranties regarding the platform's availability, accuracy, or suitability for a particular purpose.<br>
            4.2 Limitation of Liability: TaskSwap shall not be liable for any direct, indirect, incidental, or consequential damages arising out of or in connection with the use or inability to use the platform.<br>
            </p>

            </div>
            </div>    
            <div class="text-center" style="gap:10%">
            <h4 class="h4_text">I Agree to the <span >Terms of Service</span> and I read the Privacy Notice.</h4>
            </div>     
              <div class="buttons text-center">
              <button class="button_Agree text-uppercase fw-bold" id = "choicesButton" type="button" data-bs-toggle="modal" data-bs-target="#choices-modal">Agree</button>
               <button class="button_Decline text-uppercase fw-bold" href = "#" id = "decline"  type="button">Decline</button> </div>
            </div>
                        


          </div>
        </div>
      </div>
        {{-- Terms and Condition  MODAL END --}}

 

        {{-- CHOICES MODAL START --}}
        <script>
            document.getElementById('choicesButton').addEventListener('click', function() {
                $('#choices-modal').modal('show');
            });
        </script>

        <div>
            <div class="modal fade" id="choices-modal" tabindex="-1" role="dialog"
                aria-labelledby="choices-modal" style="display: none;" aria-hidden="true">

                <div class="modal-dialog modal-lg  modal-dialog-centered">
                    <div class="modal-content">
                        {{-- close button --}}
                        <div class="modal-header text-center">
                            <h4 class="modal-title " id="myLargeModalLabel">
                                Please choose a role:
                            </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 mb-30 mx-auto ">
                                    <button type="button" onclick ="document.location='Citizen Dashboard'" class="btn-outline_Citizen card card-box ">

                                        <div class="card-body">
                                            <div class="login-logo" style="margin-left:35%">
                                                <img src="/back/vendors/images/citizen.png" width="100"
                                                    height="100">
                                            </div>
                                            <h4 class="Citizen_text">Citizen</h4>
                                            <p class="card-text">
                                                Citizens compensate the hero upon the successful completion of their
                                                assigned missions.
                                            </p>

                                        </div>

                                    </button>
                                </div>


                                <div class="col-sm-12 col-md-6 mb-30 mx-auto " >
                                    <button type="submit" onclick ="document.location='Hero Dashboard'"  class="btn-outline_Hero card card-box text-center">

                                        <div class="card-body">
                                            <div class="login-logo text-center" style="margin-left:35%">
                                                <img src="/back/vendors/images/hero.png" width="100"
                                                    height="100">
                                            </div >
                                            <h4 class="Citizen_text">Hero</h4>
                                            <p class="card-text">
                                                The hero embarks on a quest to find work and assist citizens in
                                                completing
                                                their tasks.
                                            </p>

                                        </div>

                                    </button>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{-- CHOICES MODAL END --}}

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/chatbox.js"></script>

</body>

</html>
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
      <link rel = "icon" href = "{{ asset('assets/images/logo.png') }}">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <!-- Google Fonts -->
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

  @include('landingBody')

  </main><!-- End #main -->


  @include('footer')


  @include('landingModal')


  {{-- Sign Up MODAL START --}}
              <script>
            document.getElementById('signupButton').addEventListener('click', function() {
                $('#Sigm_up-modal').modal('show');
            });
        </script>

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


<!-- Chabox-Dev END -->

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
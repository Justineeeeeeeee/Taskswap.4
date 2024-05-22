<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Citizen Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- Favicons -->
  <link href="favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- Theme style -->
      <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="{{ asset('assets/css/chatbox.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/citizen_dashboard.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/portfolio.css')}}">

  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">


  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

<script>
  const icon = document.querySelector('.icon');
  const search = document.querySelector('.search'); icon.onclick=
  function(){
            search.classList.toggle('active')
            }
</script>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between" style="margin-left: 15%; margin-right:15%;">

    <div class="d-flex align-items-center justify-content-start  ">
      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="{{ asset('assets/images/logo.png') }}" alt="TaskSwap" width="50">
        </a>
          <a href="Find Task" class="secret" style="margin-left: 10px;  width:70px;" > Find Task</a>
          <a href="Post Task" class="secret"  style="margin-left: 20px; width:80px;"> Post Task</a>
          <a href="dashboard" class="secret" style="margin-left: 10px; margin-right: 10px;" > Dashboard</a>

        <div class="box" style="margin-left:1%">
<input type="text" placeholder="Search...">
<a href="#">
<i class="fas fa-search"></i>
</a>
</div>
</div>




      <div class="position-end">

      <div class="dropdown">
      <a class="nav-link" onclick="dropdown1()">
        <img src="assets/images/avatar4.png" style="width: 40px; height: 40px; border-radius: 50%;">

          <span class="badge badge-danger navbar-badge">5</span>
        </a>
        <div id="myDropdown1" class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        <div class="dropdown-divider"></div>
        <a href="dashboard" class="dropdown-item">
        <i class="fa fa-user" aria-hidden="true" style="padding-right: 4px;"></i> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
        <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item" onclick="inbox()">
          <i class="fas fa-envelope"></i> Inbox
          </a>


        <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item" onclick="TaskStatus()">
          <i class="fas fa-tasks"></i> Task Status
          </a>

          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item" onclick="transactionCard()">
          <i class="fas fa-history"></i> Transaction History
          </a>

          <div class="dropdown-divider hide" ></div>
          <a href= "Edit Profile" class="dropdown-item hide">
          <i class="fas fa-cog mr-2"></i> Settings

          </a>
          <div class="dropdown-divider"></div>
                     <!-- Authentication -->
                     <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"

                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                 <i class="fas fa-sign-out-alt mr-2" ></i>
                                                {{ __() }}Log Out
                            </x-dropdown-link>

                        </form>


        </div>
</div>


  </header><!-- End Header -->


  <main id="main">

  <section class="category-section" style="  margin-left: 5%;
  margin-right: 5%;" >

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mx-5 mt-5" style="background-color: white" >

<div class="row">
  <div class="col-md-3 " >

<!-- Profile Image -->
<div class="card" style="border-style: solid; border-color: #62AC83"  id = "dashboard_side">
  <div class="card-body box-profile" style="border-style: solid; border-color: #62AC83; border-radius: 10px">
    <div style="display: flex; align-items: center; justify-content: center;">
    <img src="{{ asset('assets/images/avatar4.png') }}" alt="TaskSwap" height="80" style="border-radius: 10%;">
    </div>
    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <strong class="">Username</strong>
    <h3 class="profile-username text-center" ><x-text-input class="text-center"  style="border: none;" type="text" name="username" id="username" value="{{ Auth::user()->username }}"/>

<div style=" display: flex; align-items: center; justify-content: center;">

    <img src="{{ asset('assets/images/star.png') }}" height="20">
    <img src="{{ asset('assets/images/star.png') }}" height="20">
    <img src="{{ asset('assets/images/star.png') }}" height="20">
    <img src="{{ asset('assets/images/star.png') }}" height="20">
    <img src="{{ asset('assets/images/star1.png') }}" height="20">



</div><br>



        <strong><i class="fas fa-book mr-1"></i> Bio</strong>
    <p>
    <x-text-input  type="text" name="bio" style="border:none; width:300px; height:50px; text-align:left;" id="bio" :value="old('bio', $user->bio)"/>
    <x-input-error class="mt-2" :messages="$errors->get('Bio')" />
    </p>
    <hr style="color: #62AC83">

    <hr style="color: #62AC83">

    <strong><i class="fas fa-book mr-1"></i> Education</strong>
    <p>
    <x-text-input  type="education" name="education" style="border:none; width:300px; height:50px; text-align:left;" id="education" :value="old('education', $user->education)"/>
    <x-input-error class="mt-2" :messages="$errors->get('Education')" />
    </p>
    <hr style="color: #62AC83">

    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
    <p>
    <x-text-input  type="text" name="location" style="border:none; width:300px; height:50px; text-align:left;" id="location" :value="old('location', $user->location)"/>
    <x-input-error class="mt-2" :messages="$errors->get('Location')" />
    </p>
    <hr style="color: #62AC83">

    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
    <p>
    <x-text-input  type="text" name="skills" style="border:none; width:300px; height:50px; text-align:left;" id="skills" :value="old('skills', $user->skills)"/>
    <x-input-error class="mt-2" :messages="$errors->get('Skills')" />
    </p>
    <hr style="color: #62AC83">

    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
    <p>
    <x-text-input  type="text" name="notes" style="border:none; width:300px; height:50px; text-align:left;" id="notes" :value="old('notes', $user->notes)"/>
    <x-input-error class="mt-2" :messages="$errors->get('Notes')" />
    </p>
    <div>
          <x-primary-button class="btn btn-special"  style="width:100%;font-weight:bold" >{{ __('Save') }}</x-primary-button>

@if (session('status') === 'profile-updated')
    <p
        x-data="{ show: true }"
        x-show="show"
        x-transition
        x-init="setTimeout(() => show = false, 2000)"
        class="text-sm text-gray-600"
    >{{ __('Saved.') }}</p>
@endif
          <button class="btn btn-special" onclick="Myportfolio()" type="Button" style="width:100%;font-weight:bold">My Portfolio</button>
          </div>
</form>

  </div>












  <!-- /.card-body -->
</div>
<!-- /.card -->

</div>


<section class="col-md-9" style="margin-top: -3%;" id="dashboard_section">
  <div  style="border-style: solid; border-color: #62AC83; border-radius:20px" >

  <div >
    <!-- Content Header (Page header) -->
    <div class="content-header" >
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <div class="rounded-square">
          <p class="square-text">DAILY REWARDS</p>
          <p class="wallet">0.00</p>

          <div class="token-images">
            <img src="assets/images/token.png" alt="Token 1" class="token">
            <img src="assets/images/token.png" alt="Token 2" class="token">
            <img src="assets/images/token.png" alt="Token 3" class="token">
            <img src="assets/images/token.png" alt="Token 4" class="token">
            <img src="assets/images/token.png" alt="Token 5" class="token">
            <img src="assets/images/token.png" alt="Token 6" class="token">
            <img src="assets/images/token.png" alt="Token 7" class="token">
          </div>
          <button class="check " type="submit">CHECK-IN TODAY</button>
          </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>
    <!-- Main content -->
    <section class="content" style="margin-left: 4%; margin-right:4%">
      <div class="container-fluid" >
      <p class="acc">ACCOMPLISHMENTS</p>
      <div class="info-box" style="border-style: solid; border-color: #62AC83; border-radius:20px">
      <img class="trophy1" src="assets/images/trophy.png" alt="Trophy 1">

              <div class="info-box-content">
                <span class="award3">Top-rated Hero on TaskSwap</span>
                <span class="desc3 secret">Lorem ipsum dolor sit amet. Ut facilis corrupti sed culpa consequatur et autem consequatur ut quae placeat qui inventore sapiente qui distinctio omnis aut neque vitae. Ab illo officia sed aliquam harum ea sint dolor in deserunt voluptatem. </span>
              </div>
              <!-- /.info-box-content -->
        </div>
        <div class="info-box" style="border-style: solid; border-color: #62AC83; border-radius:20px">
      <img class="trophy1" src="assets/images/trophy.png" alt="Trophy 1">
              <div class="info-box-content">
                <span class="award3">Outstanding Academic Hero on TaskSwap</span>
                <span class="desc3 secret">Lorem ipsum dolor sit amet. Ut facilis corrupti sed culpa consequatur et autem consequatur ut quae placeat qui inventore sapiente qui distinctio omnis aut neque vitae. Ab illo officia sed aliquam harum ea sint dolor in deserunt voluptatem. </span>
              </div>
              <!-- /.info-box-content -->
        </div>

        <div class="info-box" style="border-style: solid; border-color: #62AC83; border-radius:20px">
      <img class="trophy1" src="assets/images/trophy.png" alt="Trophy 1">
              <div class="info-box-content">
                <span class="award3">Excellent in TaskSwap</span>
                <span class="desc3 secret">Lorem ipsum dolor sit amet. Ut facilis corrupti sed culpa consequatur et autem consequatur ut quae placeat qui inventore sapiente qui distinctio omnis aut neque vitae. Ab illo officia sed aliquam harum ea sint dolor in deserunt voluptatem. </span>
              </div>
              <!-- /.info-box-content -->
        </div>
    </div>

    </section>
</div>
          </section>
  <!-- /.content-wrapper -->
</div>
<!-- Page specific script -->
</div>
      <section>


<!-- Page specific script -->
<script>
  $(function () {

    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });

</script>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          <footer class="container">
        <p style="color: white;">&copy; 2024 Crackers Software Solutions. &middot; <a href="#" style="color: white;">Privacy</a> &middot; <a href="#" style="color: white;">Terms</a></p>
    </footer>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            </div>

          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="github"><i class="bi bi-github"></i></a>
            </div>

          </div>

        </div>

      </div>
    </div>


              {{-- START DEVELOPER MODAL--}}


    <div class="modal fade" id="modal-sm">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center mb-0">
                    <h4 class="modal-title mb-0 pb-0">Chat with Developers</h4>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="chat-container">
                    <div class="admin">
                        <img src="{{ asset('assets/images/admin.png') }}" alt="Admin" class="admin-img rounded-circle">
                    </div>
                    <div class="chat-bubble">
                        <p>Hey there! How can we assist you today?</p>
                    </div>
                </div>
                <form id="messageForm">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" id="messageInput" placeholder="Type your message...">
                        <div class="send-icon">
                            <img src="{{ asset('assets/images/send.png') }}" alt="chat" class="send" width="30" height="30">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->





<div class="chatbox-wrapper">
		<div class="chatbox-toggle">
			<i class='bx bx-message-dots'></i>
		</div>
		<div class="chatbox-message-wrapper">
			<div class="chatbox-message-header">
				<div class="chatbox-message-profile">
					<img src="assets/images/avatar4.png" alt="" class="chatbox-message-image">
					<div>
						<h4 class="chatbox-message-name">TaskSwap Developers</h4>
						<p class="chatbox-message-status">online</p>
					</div>
				</div>
				<div class="chatbox-message-dropdown">
					<i class='bx bx-dots-vertical-rounded chatbox-message-dropdown-toggle'></i>
					<ul class="chatbox-message-dropdown-menu">
						<li>
							<a href="#">Search</a>
						</li>
						<li>
							<a href="#">Report</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="chatbox-message-content">
				<h4 class="chatbox-message-no-message">Hey There! How can we assist you?</h4>
			</div>
			<div class="chatbox-message-bottom">
				<form action="#" class="chatbox-message-form">
					<textarea rows="1" placeholder="Type message..." class="chatbox-message-input"  style= "width:300px"></textarea>
					<button type="submit" class="chatbox-message-submit"><i class='bx bx-send' ></i></button>
				</form>
			</div>
		</div>
	</div>



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
                                    <button type="button" onclick ="document.location='Hero Dashboard'" class="btn-outline_Citizen card card-box ">

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
                                    <button type="submit" onclick ="document.location='Citizen Dashboard'"  class="btn-outline_Hero card card-box text-center">

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
  <script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/js/pages/dashboard.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/chatbox.js"></script>
  <script src="assets/js/citizen_dashboard.js"></script>
  <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script>
  // Minimize the modal
  $('#modalRelatedContent').on('show.bs.modal', function () {
    $(this).toggleClass('minimize');
  });
</script>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

  <script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function dropdown1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}
function dropdown2() {
  document.getElementById("myDropdown2").classList.toggle("show");
}
//Date range picker
$('#reservation').daterangepicker()
//Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )


</script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TOKEN PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/token_page.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/breakpoints.css')}}">
    <link rel="stylesheet" href="./plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel = "icon" href = "{{ asset('assets/images/logo.png') }}">
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
      <!-- Template Main CSS Files -->
      <link href="assets/css/variables.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
  </head>

<style>
  .imagePreview {
    width: 214px;
    height: 300px;
    background-position: center center;
  background:url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
  background-color:#fff;
    background-size: cover;
  background-repeat:no-repeat;
    display: inline-block;
  box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
}
.btn-primary
{
  display:block;
  border-radius:0px;
  box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
  margin-top:-5px;
}
.imgUp
{
  margin-bottom:15px;
}
.del
{
  position:absolute;
  top:0px;
  right:15px;
  width:30px;
  height:30px;
  text-align:center;
  line-height:30px;
  background-color:rgba(255,255,255,0.6);
  cursor:pointer;
}
.imgAdd
{
  width:30px;
  height:30px;
  border-radius:50%;
  background-color:#4bd7ef;
  color:#fff;
  box-shadow:0px 0px 2px 1px rgba(0,0,0,0.2);
  text-align:center;
  line-height:30px;
  margin-top:0px;
  cursor:pointer;
  font-size:15px;
}
</style>

<body>
@include('dashboard.dashboardHeader')

  <main style="position: relative;">
        
<nav style="color:#FFFFFF; height:50px; margin-top:4%;margin-left:2%">
    <a class="navbar-brand" href="Home"><img src="{{ asset('assets/images/left-arrow.png') }}" alt="Back Arrow" height="50"></a>
</nav>

<div class="content">
    <div class="container">
        
    <label for="inputName" class="h4" style="color:#04364A; font-family:Fira Sans, sans-serif; ">TOKEN BALANCE</label>
    <br><div class="form-group row">
        <div class="col-sm-1 col-form-label" style="position: absolute;">
        <img src="{{ asset('assets/images/token.png') }}" alt="TaskSwap" height="45">
    </div>

        <div class="col-sm-10 peso">
        <p class="h1" style="color:#04364A; position:relative; left:6%;"><strong style="font-family:Fira Sans, sans-serif; ">{{ $token_balance }}</strong></p>
        </div>
    </div>
    <label for="inputName" class="h4 cb" hidden style="color:#04364A" style="font-family:Fira Sans, sans-serif; ">Php {{Auth::user()->token_balance}}</label>
<br>
<br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start btn1">
    <button type="button" id = "BuyToken" class="btn rounded-pill" style="background-color:#62AC83; color: #FFFFFF; font-family:Fira Sans, sans-serif;  "><strong>BUY TOKEN</strong></button>
    <button type="button" id="transfer" class="btn rounded-pill" style="background-color:#80BCBD; color: #FFFFFF; font-family:Fira Sans, sans-serif; "><strong>TRANSFER EARNINGS</strong></button>
    </div>


           {{-- LOGIN MODAL START --}}
           <script>
            document.getElementById('BuyToken').addEventListener('click', function() {
                $('#BuyTokenModal').modal('show');
            });

            document.getElementById('transfer').addEventListener('click', function() {
                $('#TransferToken').modal('show');
            });
        </script>



    <div class="Packge_Container">
        <div class="top">
            <br>
        <h1 class = "Package_Title" style="font-family:Fira Sans, sans-serif; ">GAMES</h1>
            <br>
    </div>
    <div class="package-container">
        <div class="packages" data-bs-toggle="modal" data-bs-target="#spinModal">
            <br>
        <img src="{{ asset('assets/images/fortune-wheel.png') }}" alt="SpinTheWheel" height="150">
        <br>
            <h2 style="font-family:Fira Sans, sans-serif; ">Spin the Wheel</h2>
            <p class="domain" style="font-family: PT Serif, sans-serif">Engage in an exciting game of chance to put your luck to the test. Launch 
                yourself into an exhilarating ride by spinning the vibrant wheel and landing on a variety of obstacles, 
                prizes, and surprises. Are you prepared to take a chance and follow your destiny?</p>
            </div>
         <!---->
        <!-- Modal -->
        <div class="modal" id="spinModal" tabindex="0" aria-labelledby="spinModalLabel" aria-hidden="true">
          <div class="modal-dialog" >
            <div class="modal-content">
              <div class="modal-body" style="height: 80vh; width: 100vh; background-image:url('assets/images/spiral.jfif')">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="loading-container">
             <!-- Loading screen content -->
            <div class="text">
                 <h1>Loading...</h1>
            </div>
            <div class="bar">
                <div class="line-box">
                    <div class="line"></div>
                </div>
            </div>
            </div>

              <div class="spinContainer" style="display: none;">
              <div class="spinBtn" id="spinBtn">Spin</div>
              <div class="wheel">
              <div class="number number-zero" style="--i:1;--clr:#db7093;"><img src="{{ asset('assets/images/token.png') }}" alt="Token 0"><span>0 token</span></div>
              <div class="number number-one" style="--i:2;--clr:#20b2aa;"><img src="{{ asset('assets/images/token.png') }}" alt="Token 1"><span>0 token</span></div>
              <div class="number number-two" style="--i:3;--clr:#d63e92;"><img src="{{ asset('assets/images/token.png') }}" alt="Token 2"><span>2 token</span></div>
              <div class="number number-three" style="--i:4;--clr:#daa520;"><img src="{{ asset('assets/images/token.png') }}" alt="Token 3"><span>1 token</span></div>
              <div class="number number-four" style="--i:5;--clr:#ff340f;"><img src="{{ asset('assets/images/token.png') }}" alt="Token 4"><span>3 token</span></div>
              <div class="number number-five" style="--i:6;--clr:#ff7f50;"><img src="{{ asset('assets/images/token.png') }}" alt="Token 5"><span>1 token</span></div>
              <div class="number number-six" style="--i:7;--clr:#3cb371;"><img src="{{ asset('assets/images/token.png') }}" alt="Token 6"><span>0 token</span></div>
              <div class="number number-seven" style="--i:8;--clr:#4169e1;"><img src="{{ asset('assets/images/token.png') }}" alt="Token 7"><span>0 token</span></div>
           </div>
        </div>
        <div id="spinAgainModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>You can spin again tomorrow.</p>
    </div>
</div>
        

             <div id="modalCongrats" class="modal">
            <div class="modal-content">
            <span class="close">&times;</span>
                <p>Congratulations!</p>
            </div>
            <div class="confetti">
                <img src="{{ asset('assets/images/confetti.gif') }}" style="max-width: 130%; height:33rem !important;"/>
            </div>
        </div>

        <!-- Sorry Modal -->
        <div id="modalSorry" class="modal">
        <div class="modal-content">
        <span class="close">&times;</span>
            <p>Sorry, better luck next time!</p>
        </div>
        </div>
       
              </div>
            </div>
          </div>
        </div>
        <!-- End of Modal -->
            
        <div class="packages" data-bs-toggle="modal" data-bs-target="#findModal">
                <br>
            <img src="{{ asset('assets/images/puzzle.png') }}" alt="Puzzle" height="150">
            <br>
            <h2 style="font-family: PT Serif, sans-serif">Find the Piece</h2>
            <p class="domain" style="font-family: PT Serif, sans-serif">An addictive puzzle-solving adventure game that will send you on a mission to find hidden 
                pieces strewn around captivating landscapes.  Equipped with keen observational abilities and a sharp mind,
                 go out on this fascinating expedition to solve the mysteries that entail. Are you prepared to start your 
                 search for the missing piece?</p>
            </div> 

        <!-- Modal -->
<div class="modal fade" id="findModal" tabindex="-1" aria-labelledby="findModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" style="height: 80vh; width: 100vh; background-image: url('assets/images/find-bg.png')">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="find-loading">
                    <!-- Loading screen content -->
                    <div class="load-text">
                        <h1 style="color: yellow;">Loading...</h1>
                    </div>
                    <div class="find-bar">
                        <!-- line-bar -->
                        <div class="prog-bar">
                            <div class="progress"></div>
                            <!-- line -->
                        </div>
                    </div>
                </div>
                <div class="search">
                    <!-- Image after loading screen -->
                    <img src="{{ asset('assets/images/find.jfif') }}" style="height: 80vh; width: 100vh;" alt="Your Image">
                </div>
                <!-- Clickable token image -->
                <div class="token-wrapper" id="tokenWrapper" >
                    <img src="{{ asset('assets/images/token1.png') }}" style="height: 5vh; width: 4vh;" alt="Token Image" class="tokn-image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal -->

<!-- Coin won modal -->
<div class="modal fade" id="toknModal" tabindex="-1" aria-labelledby="toknModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            <span class="close">&times;</span>
                Congratulations! You've won 1 coin.
            </div>
        </div>
    </div>
</div>

        

        <div class="packages" data-bs-toggle="modal" data-bs-target="#completeModal">
                <br>
            <img src="{{ asset('assets/images/goal.png') }}" alt="Mission" height="150">
            <br>
            <h2 style="font-family:Fira Sans, sans-serif; ">Complete the Missions</h2>
            <p class="domain" style="font-family: PT Serif, sans-serif">In this action-packed, heart-pounding game, you will take on the role of elite operatives 
                tasked with completing a series of high-stakes missions. Modify your strategy as every mission offers 
                fresh possibilities and challenges. Are you prepared to step up to the plate and demonstrate your abilities
                 in "Complete the Missions"?</p>
            </div> 

            <!-- Modal -->
        <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="completeModalLabel" aria-hidden="true">
          <div class="modal-lg modal-dialog">
            <div class="modal-content"  style="width:85%">
              <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <h3 class="text1" style="font-family:Fira Sans, sans-serif; ">Missions</h3>
              <div class="rect" style="font-family: PT Serif, sans-serif">
                <p>Complete your profile </p>
                <button id="claimButton1" class="claim-button" style="display: inline-block;">
                    <img src="{{ asset('assets/images/token.png') }}" alt="Claim Button" style="height: 15px; width:15px;">
                         Claim
                </button>
              </div>
              <div class="rect2" style="font-family: PT Serif, sans-serif">
              <p style="font-family: PT Serif, sans-serif">Play Games Today</p>
              <button class="claim-button">
                    <img src="{{ asset('assets/images/token.png') }}" alt="Claim Button" style="height: 15px; width:15px;">
                         Claim
              </button>
              </div>
              <div class="rect3" style="font-family: PT Serif, sans-serif">
              <p style="font-family: PT Serif, sans-serif">Login Today</p>
              <button id="loginTodayButton" class="claim-button">
                    <img src="{{ asset('assets/images/token.png') }}" alt="Claim Button" style="height: 15px; width:15px;">
                         Claim
              </button>
              </div>
              <div class="rect4" style="font-family: PT Serif, sans-serif">
              <p style="font-family: PT Serif, sans-serif">Post Task</p>
              <button id="rect4Button" class="claim-button">
                <img src="{{ asset('assets/images/token.png') }}" alt="Claim Button" style="height: 15px; width:15px;">
                 Claim
              </button>
              </div>
              <div class="rect5" style="font-family: PT Serif, sans-serif">
              <p style="font-family: PT Serif, sans-serif">Make a transaction</p>
              <button class="claim-button disable-btn">
                <img src="{{ asset('assets/images/token.png') }}" alt="Claim Button" style="height: 15px; width:15px;">
                    Claim
              </button>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Modal -->
            
    </div>  
</div>
</main>
<footer id="footer" class="footer">

<div class="footer-legal">
  <div class="container">

    <div class="row justify-content-between">
      <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
      <footer class="container">
    <p style="color: white; font-family:Fira Sans, sans-serif; " >&copy; 2024 Crackers Software Solutions. &middot; <a href="#" style="color: white;">Privacy</a> &middot; <a href="#" style="color: white;">Terms</a></p>
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


<!--                                 DITO START SCRIPT FOR GAMES                                           -->


<!--                  SCRIPT DISPLAY IN THE GAME SPIN THE WHEEL WHEN THE GAME IS CLICKED                  -->
<script>
         document.addEventListener("DOMContentLoaded", function() {
    // Function to reset the loading screen content
    function resetLoadingScreen() {
        // Show the loading container
        document.querySelector('.loading-container').style.display = 'flex';
        // Hide the spin container
        document.querySelector('.spinContainer').style.display = 'none';
    }

    // Function to show the spin container
    function showSpinContainer() {
        // Hide the loading container
        document.querySelector('.loading-container').style.display = 'none';
        // Show the spin container
        document.querySelector('.spinContainer').style.display = 'block';
    }

    // Add event listener to the modal close button
    document.querySelector('[data-bs-dismiss="modal"]').addEventListener('click', resetLoadingScreen);

    // Add event listener to the modal show event
    document.getElementById('spinModal').addEventListener('shown.bs.modal', function () {
        resetLoadingScreen(); // Reset loading screen when modal is shown
        // Simulate a delay for the loading screen (you can replace this with your actual loading process)
        setTimeout(function() {
            // Hide the loading container after a delay
            document.querySelector('.loading-container').style.display = 'none';
            // Show the spin container after the loading is complete
            document.querySelector('.spinContainer').style.display = 'block';
        }, 5080); // Adjust the delay time as needed (currently set to 6060 milliseconds or 6.06 seconds)
    });

    // Initially reset loading screen
    resetLoadingScreen();
});
// Function to get the current timestamp in milliseconds
function getCurrentTimestamp() {
        return new Date().getTime();
    }
// Function to show the spin again modal
function showSpinAgainModal() {
    document.getElementById("spinAgainModal").style.display = "block";
}

// Function to close the spin again modal
document.querySelector('#spinAgainModal .close').addEventListener('click', function() {
    document.getElementById("spinAgainModal").style.display = "none";
});
// Close the congratulations modal when the user clicks on the close button
document.getElementById("modalCongrats").querySelector('.close').addEventListener('click', function() {
    document.getElementById("modalCongrats").style.display = "none";
});

// Close the sorry modal when the user clicks on the close button
document.getElementById("modalSorry").querySelector('.close').addEventListener('click', function() {
    document.getElementById("modalSorry").style.display = "none";
});

// Reset modals when spinModal is closed
document.getElementById('spinModal').addEventListener('hidden.bs.modal', function () {
    document.getElementById("modalCongrats").style.display = "none";
    document.getElementById("modalSorry").style.display = "none";
});
</script>
<!--            SCRIPT DISPLAY IN THE GAME SPIN THE WHEEL WHEN THE GAME IS CLICKED                  -->



<!--                           SCRIPT LOGIC FOR SPINWHEEL TO CLAIM TOKEN                                      -->
<script>
    let wheel = document.querySelector('.wheel');
    let spinBtn = document.querySelector('.spinBtn');
    let spanCongrats = document.getElementsByClassName("close")[0];
    let spanSorry = document.getElementsByClassName("close")[1];
    let spinning = false;


    // Function to check if the user can spin based on the last spin time stored in localStorage
    function canSpin() {
        const lastSpinTime = localStorage.getItem('lastSpinTime_{{ Auth::id() }}');
        const currentTime = new Date().getTime();
        const twentyFourHours = 24 * 60 * 60 * 1000; // 24 hours in milliseconds
        return !lastSpinTime || currentTime - parseInt(lastSpinTime) >= twentyFourHours; 
    }

    // Inside the spin button click event handler
    spinBtn.onclick = function () {
        if (!canSpin()) {
            showSpinAgainModal();
            disableClaimButtonRect2();
            return;
        }

        // Proceed with spinning logic
        let spinAngle = Math.ceil(Math.random() * 3600);
        wheel.style.transform = "rotate(" + spinAngle + "deg)";
        spinning = true;
        wheel.addEventListener("transitionend", function () {
            let currentRotation = parseInt(wheel.style.transform.replace("rotate(", "").replace("deg)", ""));
            let prizeNumber = Math.floor((currentRotation % 360) / 45) + 1;
            let tokenClass = document.querySelector('.number:nth-child(' + prizeNumber + ')').classList;
            let prize = 0; // Initialize prize won
        
            if (tokenClass.contains('number-zero') || tokenClass.contains('number-one') ||tokenClass.contains('number-seven') || tokenClass.contains('number-six')) {
                document.getElementById("modalSorry").style.display = "block";
            } else {
                
                // Update prize based on the token class
                if(tokenClass.contains('number-two')) prize = 2;
                else if( tokenClass.contains('number-three')) prize = 1;
                else if (tokenClass.contains('number-four')) prize = 3;
                else if (tokenClass.contains('number-five')) prize = 1;

                document.getElementById("modalCongrats").style.display = "block";
                updateSpinTokenBalance(prize);
            }
            spinning = false;
            // Update last spin time in localStorage
            localStorage.setItem('lastSpinTime_{{ Auth::id() }}', new Date().getTime().toString());
        }, { once: true });
    };

    // Function to update token_balance via AJAX
    function updateSpinTokenBalance(prize) {
        fetch("{{ route('update.spin.token.balance') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Add CSRF token if using Laravel CSRF protection
            },
            body: JSON.stringify({ prize: prize })
        })
        .then(response => response.json())
        .then(data => {
            // Update UI with new token balance
            document.querySelector('.peso strong').innerText = data.token_balance;
        })
        .catch(error => console.error('Error updating token balance based on prize:', error));
    }

    // Close the congratulations modal when the user clicks on the close button
    spanCongrats.onclick = function() {
        document.getElementById("modalCongrats").style.display = "none";
    }

    // Close the sorry modal when the user clicks on the close button
    spanSorry.onclick = function() {
        document.getElementById("modalSorry").style.display = "none";
    }
</script>
<!--                           SCRIPT LOGIC FOR SPINWHEEL TO CLAIM TOKEN                                         -->




<!--                           SCRIPT DISPLAY FIND PIECE TO CLAIM TOKEN                                     -->
<script>
       document.addEventListener("DOMContentLoaded", function() {
    // Function to reset the loading screen content
    function resetLoadingScreen() {
        // Show the loading container
        document.querySelector('.find-loading').style.display = 'flex';
        // Hide the search img
        document.querySelector('.search').style.display = 'none';
        document.querySelector('.token-wrapper').style.display = 'none';
    }

    // Function to show the search img
    function showSearch() {
        // Hide the loading container
        document.querySelector('.find-loading').style.display = 'none';
        // Show the search img
        document.querySelector('.search').style.display = 'block';
        document.querySelector('.token-wrapper').style.display = 'block';
    }

    // Add event listener to the modal show event
    document.getElementById('findModal').addEventListener('shown.bs.modal', function () {
        resetLoadingScreen(); // Reset loading screen when modal is shown
        // Simulate a delay for the loading screen (you can replace this with your actual loading process)
        setTimeout(function() {
            // Hide the loading container after a delay
            document.querySelector('.find-loading').style.display = 'none';
            // Show the search image after the loading is complete
            document.querySelector('.search').style.display = 'block';
            document.querySelector('.token-wrapper').style.display = 'block';
        }, 5080); // Adjust the delay time as needed (currently set to 5080 milliseconds)
    });

    // Initially reset loading screen
    resetLoadingScreen();

    // Add event listener to the token image to show the toknModal
    document.querySelector('.token-wrapper').addEventListener('click', function(event) {
        event.stopPropagation(); // Stop event propagation to prevent closing findModal
        $('#toknModal').modal('show'); // Show the toknModal
    });

    // Close the token modal when the user clicks on the close button
    document.getElementById("toknModal").querySelector('.close').addEventListener('click', function() {
        $('#toknModal').modal('hide'); // Hide the toknModal
    });
}); 

</script>
<!--                           SCRIPT DISPLAY FOR FIND PIECE TO CLAIM TOKEN                                          -->



<!--                           SCRIPT WHEN TOKEN PIECE IS CLICKED                                          -->
<script>
    document.getElementById("tokenWrapper").addEventListener("click", function() {
    fetch("{{ route('update.token.balance') }}", {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({})
    })
    .then(response => response.json())
    .then(data => {
        document.querySelector(".peso strong").innerText = data.token_balance;
        if (data.token_clicked) {
            document.getElementById("tokenWrapper").style.pointerEvents = 'none';
        }
    })
    .catch(error => console.error('Error:', error));
});

</script>
<!--                           SCRIPT WHEN TOKEN PIECE IS CLICKED                                          -->




<!--                                 SCRIPT FOR SECOND GAME DISABLE FOR 24HRS                             -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the token wrapper element
        var tokenWrapper = document.getElementById("tokenWrapper");
        var user = "{{ Auth::user() }}"; // Get the user's ID from Laravel's Auth
        


        // Function to disable the token wrapper
        function disableTokenWrapper() {
            // Disable the token wrapper visually
            tokenWrapper.style.pointerEvents = 'none';
            tokenWrapper.style.opacity = '0.5';
        }

        // Check if token was previously clicked within last 24 hours for the specific user
        var lastTokenClickTime = localStorage.getItem('lastTokenClickTime_' + user);
        if (lastTokenClickTime && (Date.now() - lastTokenClickTime < 24 * 60 * 60 * 1000)) {
            // If token was clicked within last 24 hours for the specific user, disable the token wrapper
            disableTokenWrapper();
        }

        // Add click event listener to the token wrapper
        tokenWrapper.addEventListener("click", function() {
            // Check if 24 hours have passed since the last token click for the specific user
            var lastTokenClickTime = localStorage.getItem('lastTokenClickTime_' + user);
            if (!lastTokenClickTime || (Date.now() - lastTokenClickTime > 24 * 60 * 60 * 1000)) {
                // If 24 hours have passed, disable the token wrapper visually for the specific user
                disableTokenWrapper();

                // Store the timestamp when the token was last clicked in localStorage for the specific user
                localStorage.setItem('lastTokenClickTime_' + user, Date.now());
            } else {
                // If less than 24 hours have passed, prevent further action
                alert("You can come back again tomorrow to claim the token!");
            }
        });
    });
</script>
<!--                                 SCRIPT FOR SECOND GAME DISABLE FOR 24HRS                             -->




<!--                           SCRIPT FOR PLAY GAMES TODAY TO CLAIM TOKEN                                   -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Function to disable the claim button rect 2
    function disableClaimButtonRect2() {
        document.querySelector('.rect2 .claim-button').classList.add('disable-btn');
        document.querySelector('.rect2 .claim-button').disabled = true;
    }

    // Function to enable the claim button rect 2
    function enableClaimButtonRect2() {
        document.querySelector('.rect2 .claim-button').classList.remove('disable-btn');
        document.querySelector('.rect2 .claim-button').disabled = false;
    }

    // Disable claim button rect 2 by default
    disableClaimButtonRect2();

    
    // Function to check if 24 hours have passed and enable claim button rect 2
    function checkAndEnableClaimButtonRect2() {
        const lastTokenClickTime = localStorage.getItem('lastTokenClickTime_{{ Auth::id() }}');
        if (lastTokenClickTime && (Date.now() - lastTokenClickTime < 24 * 60 * 60 * 1000)) {
            // If less than 24 hours have passed since the user clicked spinBtn or tokenWrapper, enable claim button rect 2
            disableClaimButtonRect2();
        }
    }

    // Check and enable claim button rect 2 when the page loads
    checkAndEnableClaimButtonRect2();
    

    // Function to handle the click event on spinBtn and tokenWrapperss
    function handleSpinAndTokenWrapperClick() {
        document.getElementById('spinBtn').addEventListener('click', function() {

        if (!canSpin()) {
            showSpinAgainModal();
            disableClaimButtonRect2();
            return;
        }
        else{
            enableClaimButtonRect2();
        }
        });
        
        document.getElementById('tokenWrapper').addEventListener('click', function() {
            // Enable claim button rect 2 when the user clicks the tokenWrapper
            enableClaimButtonRect2();
            // Store the current timestamp in local storage
            localStorage.setItem('lastTokenClickTime_{{ Auth::id() }}', Date.now());
        });
    }
    handleSpinAndTokenWrapperClick(); // Call the function to set up event listeners

    // Function to handle the click event on claim button rect 2
    document.querySelector('.rect2 .claim-button').addEventListener('click', function() {
        // Perform AJAX request to update token balance
        fetch("{{ route('update.third.game.token.balance') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({})
        })
        .then(response => response.json())
        .then(data => {
            // Update token balance in UI
            if (data && data.token_balance !== undefined) {
            document.querySelector('.peso strong').innerText = data.token_balance;
            disableClaimButtonRect2();
        } else {
            console.error('Token balance not found in response data');
        }
        })
        .catch(error => console.error('Error:', error));
    });

    
});

</script>
<!--                           SCRIPT FOR PLAY GAMES TODAY TO CLAIM TOKEN                                   -->




<!--                               SCRIPT FOR LOGIN TODAY TO CLAIM TOKEN                                   -->
<script>
      document.addEventListener("DOMContentLoaded", function() {
        // Function to disable the claim button rect 3
        function disableClaimButtonRect3() {
            document.querySelector('.rect3 .claim-button').classList.add('disable-btn');
            document.querySelector('.rect3 .claim-button').disabled = true;
        }

        // Function to enable the claim button rect 3
        function enableClaimButtonRect3() {
            document.querySelector('.rect3 .claim-button').classList.remove('disable-btn');
            document.querySelector('.rect3 .claim-button').disabled = false;
        }

        // Function to check if the claim button rect 3 should be enabled
        function checkAndEnableClaimButtonRect3() {
            const loginTime = localStorage.getItem('loginTime_{{ Auth::id() }}');
            if (!loginTime || (Date.now() - parseInt(loginTime)) >= 24 * 60 * 60 * 1000) {
                // If last click time is not set or it's been more than 24 hours, enable the claim button
                enableClaimButtonRect3();
            } else {
                // Otherwise, disable the claim button
                disableClaimButtonRect3();
            }
        }

        // Check and enable claim button rect 3 when the page loads
        checkAndEnableClaimButtonRect3();

        // Function to handle the click event on claim button rect 3
        document.querySelector('.rect3 .claim-button').addEventListener('click', function() {
            // Perform AJAX request to update token balance and login time
            fetch("{{ route('update.third.login.token.balance') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({})
            })
            .then(response => response.json())
            .then(data => {
                // Update token balance in UI
                if (data && data.token_balance !== undefined) {
                    document.querySelector('.peso strong').innerText = data.token_balance;
                    disableClaimButtonRect3();
                    // Store the current timestamp in local storage
                    localStorage.setItem('loginTime_{{ Auth::id() }}', Date.now().toString());
                } else {
                    console.error('Token balance not found in response data');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
</script>
<!--                               SCRIPT FOR LOGIN TODAY TO CLAIM TOKEN                                   -->





<!--                               SCRIPT FOR COMPLETE PROFILE TO CLAIM TOKEN                              -->
<script>
     document.addEventListener("DOMContentLoaded", function() {
        function disableClaimButtonRect() {
            document.querySelector('.rect .claim-button').classList.add('disable-btn');
            document.querySelector('.rect .claim-button').disabled = true;
        }

        function enableClaimButtonRect() {
            document.querySelector('.rect .claim-button').classList.remove('disable-btn');
            document.querySelector('.rect .claim-button').disabled = false;
        }

        function checkAndDisableClaimButtonRect() {
            // Check if the claim button has been clicked by the current user
            const claimButtonClicked = localStorage.getItem('claimButtonClicked_{{ Auth::id() }}');
            if (claimButtonClicked === 'true') {
                disableClaimButtonRect(); // Disable claim button permanently
            }
        }

        checkAndDisableClaimButtonRect(); // Call the function to check and disable claim button

        document.querySelector('.rect .claim-button').addEventListener('click', function() {
            fetch("{{ route('update.third.save.token.balance') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({})
            })
            .then(response => response.json())
            .then(data => {
                if (data && data.token_balance !== undefined) {
                    document.querySelector('.peso strong').innerText = data.token_balance;
                    disableClaimButtonRect(); // Disable claim button permanently after it's clicked
                    // Set the flag in local storage indicating the button has been clicked
                    localStorage.setItem('claimButtonClicked_{{ Auth::id() }}', 'true');
                } else {
                    console.error('Token balance not found in response data');
                }
            })
            .catch(error => console.error('Error:', error));
        });

        function HandleSaveButtonClick() {
            // Check if the saveButtonProfileEdit element exists
            const saveButton = document.getElementById('saveButtonProfileEdit');

            if (saveButton) {
                // Add click event listener to the saveButton
                saveButton.addEventListener('click', function() {
                    enableClaimButtonRect(); // Enable claim button when saveButton is clicked
                });
            } else {
                console.error('saveButtonProfileEdit element not found');
            }
        }

        HandleSaveButtonClick(); // Call the function to set up event listener
    });
</script>
<!--                               SCRIPT FOR COMPLETE PROFILE TO CLAIM TOKEN                              -->




<!--                                SCRIPT FOR POST TASK TO CLAIM TOKEN                                     -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Function to disable the claim button rect 4
        function disableClaimButtonRect4() {
            document.querySelector('.rect4 .claim-button').classList.add('disable-btn');
            document.querySelector('.rect4 .claim-button').disabled = true;
        }

        // Function to enable the claim button rect 4
        function enableClaimButtonRect4() {
            document.querySelector('.rect4 .claim-button').classList.remove('disable-btn');
            document.querySelector('.rect4 .claim-button').disabled = false;
        }
        
        enableClaimButtonRect4();
        
       // Function to check if 24 hours have passed and enable claim button rect 4
       function checkAndEnableClaimButtonRect4() {
            const lastPostTime = localStorage.getItem('lastPostTime_{{ Auth::id() }}');
            if (lastPostTime && (Date.now() - lastPostTime < 24 * 60 * 60 * 1000)) {
                // If less than 24 hours have passed since the last post, disable claim button rect 4
                disableClaimButtonRect4();
            }
        }

        // Check and enable claim button rect 4 when the page loads
        checkAndEnableClaimButtonRect4();

        // Function to handle the click event on claim button rect 4
        document.querySelector('.rect4 .claim-button').addEventListener('click', function() {
            // Perform AJAX request to update token balance
            fetch("{{ route('update.third.post.token.balance') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({})
            })
            .then(response => response.json())
            .then(data => {
                if (data && data.token_balance !== undefined) {
                    document.querySelector('.peso strong').innerText = data.token_balance;
                    disableClaimButtonRect4();
                    // Store the current timestamp in local storage
                    localStorage.setItem('lastPostTime_{{ Auth::id() }}', Date.now().toString());
                } else {
                    console.error('Token balance not found in response data');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
</script>
<!--                                SCRIPT FOR POST TASK TO CLAIM TOKEN                                     -->

<!--                                 DITO END SCRIPT FOR GAMES                                           -->




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="./plugins/daterangepicker/daterangepicker.js"></script>
<script src="./plugins/moment/moment.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="./plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

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

  <!-- BUY TOKEN MODAL START -->

  <div class="modal fade" id="BuyTokenModal"  >
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Cash In Request</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="margin-left: 5%; margin-right:5%">
            <form action="{{ route('Token.CashIn')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <h3 class="" style="margin-top: 3%;">Admin Information</h3>
        <br>
    <div class="form-group row">
    <label for="Admin_username" class="col-sm-4 col-form-label" ><h5>Name</h5></label>
    <div class="col-sm-5">
        <input type="text" id="Admin_username" name = "Admin_username" value="{{$CashInAdmin->username}}" disabled class="form-control rounded-2" >
        </div>

        <label for="admin_GcashNumber" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>GcashNumber</h5></label>
    <div class="col-sm-5">
        <input type="text" id="admin_GcashNumber" name = "admin_GcashNumber" value="{{$CashInAdmin->GcashNumber }}" disabled class="form-control rounded-3"  style="margin-top:3%">
        </div>
        <div style="width: 200px; height:300px;margin-left: auto;
margin-right: auto; margin-top:5%">
        <img src="uploads/GcashNumer/{{$CashInAdmin->Cash_In_Image}}" style = "width:100%; height:100%" alt="">
        </div>
        <h3 class="" style="margin-top: 5%;"> My Information</h3>

        <input type="text" name="to_id" id="to_id" value="{{$CashInAdmin->id}}" hidden >
        <x-input-error :messages="$errors->get('to_id')"/>
        <input type="text" name="from_id" id="from_id" value="{{Auth::user()->id}}" hidden>
        <x-input-error :messages="$errors->get('from_id')"/>
        <input type="text" name="Content" id="Content" value="{{Auth::user()->username}}  Requested to Cash In" hidden >
        <x-input-error :messages="$errors->get('Content')"/>
        <input type="text" name="avatar" id="avatar" value="{{Auth::user()->avatar}}" hidden>
        <x-input-error :messages="$errors->get('avatar')"/>
        <input type="text" name="token_balance" id="token_balance" value="{{Auth::user()->token_balance}}" hidden>
        <x-input-error :messages="$errors->get('token_balance')"/>

        <label for="username" class="col-sm-4 col-form-label" ><h5>Name</h5></label>
    <div class="col-sm-8">
        <input type="text" id="username" name = "username" value="{{Auth::user()->username}}"  class="form-control rounded-3">
        <x-input-error :messages="$errors->get('username')"/>
        </div>

        <label for="GcashNumber" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>GCash Number</h5></label>
    <div class="col-sm-8">
        <input type="number"  onKeyDown="if(this.value.length==11) return false;" id="GcashNumber" name = "GcashNumber" value=" "  class="form-control rounded-3" style="margin-top:3%" >
        <x-input-error :messages="$errors->get('GcashNumber')"/>
        </div>

    <label for="CashInAmount" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Amount</h5></label>
      <div class="col-sm-8">
    <input type="Number" onKeyDown="if(this.value.length==11) return false;" id = "Amount" name="Amount" class="form-control rounded-3" style="margin-top:3%" >
    <x-input-error :messages="$errors->get('Amount')"/>
      </div>

    <label for="Reference_Number" class="col-sm-4 col-form-label"  style="margin-top:2%" ><h5>Reference Number</h5></label>
      <div class="col-sm-8">
    <input type="number" onKeyDown="if(this.value.length==11) return false;" id= "Reference_Number" name = "Reference_Number"  class="form-control rounded-3" style="margin-top:3%" >
    <x-input-error :messages="$errors->get('Reference_Number')"/>
      </div>

      <div class="d-flex justify-content-center" style="margin-top:10px">
    <br><div class="" style="width:215px">
  <div class="imgUp" >
    <div class="imagePreview"></div>
    <label class="btn btn-primary">
			Upload<input type="file" id="Image_receipt" name="Image_receipt" class="uploadFile img"  style="width: 0px;height: 0px;overflow: hidden;">
            <x-input-error :messages="$errors->get('Image_receipt')"/>
				</label>
     </div><!-- col-2 -->
</div><!-- container -->
</div>

      


</div>
            <div class=" row gap-2 col-12 mx-auto justify-content-end">
            <button type="button" data-bs-dismiss="modal"  class="btn btn-danger " style="margin-top:3px; height:39px; width:80px ;font-weight:bold">Cancel</button>
            <button type="submit" class="btn btn-special" style="font-weight:bold; height:40px;">Send Request</button>
              </div>
              
            </form>
            </div>
        </div>
    </div>
  </div>


  <!-- BUY TOKEN MODAL END -->



    <!-- BUY TRANSFER MODAL START -->

    <div class="modal fade" id="TransferToken"  >
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Token Transfer Content</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="margin-left: 5%; margin-right:5%">
            <form action="{{ route('Token.CashOut')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <h3 class="" style="margin-top: 3%;">Admin Information</h3>
        <br>
    <div class="form-group row">
    <label for="username" class="col-sm-4 col-form-label" ><h5>Name</h5></label>
    <div class="col-sm-8">
        <input type="text" id="username" name = "username" value="{{$CashInAdmin->username}}" disabled class="form-control rounded-3" >
        </div>

        <label for="GcashNumber" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>GcashNumber</h5></label>
    <div class="col-sm-8">
        <input type="text"  id="GcashNumber" name = "GcashNumber" value="{{$CashInAdmin->GcashNumber }}" disabled class="form-control rounded-3"  style="margin-top:3%">
        </div>

        <input type="text" name="to_id" id="to_id" value="{{$CashInAdmin->id}}"  hidden>
        <x-input-error :messages="$errors->get('to_id')"/>
        <input type="text" name="from_id" id="from_id" value="{{Auth::user()->id}}" hidden>
        <input type="text" name="token_balance" id="token_balance" value="{{Auth::user()->token_balance}}" hidden>
        <x-input-error :messages="$errors->get('from_id')"/>
        <input type="text" name="Content" id="Content" value="{{Auth::user()->username}}  Requested to Cash Out"hidden  >
        <x-input-error :messages="$errors->get('Content')"/>
        <input type="text" name="avatar" id="avatar" value="{{Auth::user()->avatar}}" hidden>
        <x-input-error :messages="$errors->get('avatar')"/>

        <h3 class="" style="margin-top: 5%;"> My Information</h3>

        <label for="username" class="col-sm-4 col-form-label" ><h5>Name</h5></label>
    <div class="col-sm-8">
        <input type="text" id="username" name = "username" value="{{Auth::user()->username}}" readonly class="form-control rounded-3">
        <x-input-error :messages="$errors->get('username')"/>
        </div>

        <label for="GcashNumber" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>GCash Number</h5></label>
    <div class="col-sm-8">
        <input type="number"  onKeyDown="if(this.value.length==11) return false;" id="GcashNumber" name = "GcashNumber" value=" " class="form-control rounded-3" style="margin-top:3%" >
        <x-input-error :messages="$errors->get('GcashNumber')"/>
        </div>

        <label for="Gcash_name" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Gcash Name</h5></label>
      <div class="col-sm-8">
    <input type="text" id="Gcash_name" name = "Gcash_name"  class="form-control rounded-3" style="margin-top:3%" >
    <x-input-error :messages="$errors->get('Gcash_name')"/>
      </div>

    <label for="Amount" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Token</h5></label>
      <div class="col-sm-8">
    <input type="number"  onKeyDown="if(this.value.length==11) return false;" id="Amount" name = "Amount"  class="form-control rounded-3" style="margin-top:3%" >
    <x-input-error :messages="$errors->get('Amount')"/>
      </div>

      <h4 class="" style="margin-top: 5%;">Upload QR(Optional)</h4>

      <div class="d-flex justify-content-center" style="margin-top:10px">
    <br><div class="" style="width:215px">
  <div class="imgUp" >
    <div class="imagePreview"></div>
    <label class="btn btn-primary">
			Upload<input type="file" id="Image_QR" name="Image_QR" class="uploadFile img"  style="width: 0px;height: 0px;overflow: hidden;">
            <x-input-error :messages="$errors->get('Image_QR')"/>
				</label>
     </div><!-- col-2 -->
</div><!-- container -->
</div>


</div>
            <div class=" row gap-2 col-12 mx-auto justify-content-end">
            <button type="button" data-bs-dismiss="modal"  class="btn btn-danger " style="margin-top:3px; height:39px; width:80px ;font-weight:bold">Cancel</button>
            <button type="submit" class="btn btn-special" style="font-weight:bold; height:40px;">Send Request</button>
              </div>
              
            </form>
            </div>
        </div>
    </div>
  </div>


  <!-- BUY TRANSFER MODAL END -->

  <script>
    $(".imgAdd").click(function(){
  $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
});
$(document).on("click", "i.del" , function() {
// 	to remove card
  $(this).parent().remove();
// to clear image
  // $(this).parent().find('.imagePreview').css("background-image","url('')");
});
$(function() {
    $(document).on("change",".uploadFile", function()
    {
    		var uploadFile = $(this);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
                //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
            }
        }
      
    });
});
</script>

</body>
</html>

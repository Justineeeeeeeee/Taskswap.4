<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Messages</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('dashboard.dashboardCss')
</head>

<body>


  @include('dashboard.dashboardHeader')


  <main id="main">

  <section class="category-section" style="  margin-left: 5%;
  margin-right: 5%;" >

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mx-5 mt-5" style="background-color: white" >
<div class="row">
 
 <!--        START PROFILE CARD -->
    @include('dashboard.inboxCard')

<!--         END PROFILE CARD -->




           <!--  START CONTENT CARD -->

    @include('dashboard.inboxContent')

     <!--  END CONTENT CARD -->



          
  <!-- /.content-wrapper -->
</div>
<!-- Page specific script -->
</div>
      <section>

      

     
  </main><!-- End #main -->


  <!--   START DASHBOARD -->
  @include('dashboard.footer')

<!--     END DASHBOARD -->

<!-- START CHAT-BOX -->
  @include('dashboard.devChatbox')




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

<!-- 

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

{{-- CHOICES MODAL END --}} -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('dashboard.dashboardScripts')
</body>

</html>
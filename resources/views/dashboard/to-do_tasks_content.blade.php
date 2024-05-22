<head>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/js/adminlte.js"></script> 
    @include('dashboard.dashboardCss')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

@include('dashboard.dashboardCss')
<body>


  @include('dashboard.dashboardHeader')


  <main id="main">

  

  <section class="category-section" style="  margin-left: 5%;
  margin-right: 5%;" >

<!-- Content Wrapper. Contains page content -->

<div class="row">
 
 <!--        START PROFILE CARD -->
    @include('dashboard.profileCard')

<!--         END PROFILE CARD -->

         
  <!-- /.content-wrapper -->
</div>


<!--  START CONTENT CARD -->
<div class="col-md-9" >
<section class="content" style="border-style: solid; border-color: #62AC83; border-radius: 10px" id ="posts_section">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12">
                    <!-- Content Header (Table header) -->
                    <section class="content-header">
                        <div class="container-fluid">
                          <div class="row mb-2">
                          <a  href="{{route ('taskstatus.index')}}"><h1 style="font-family:Fira Sans, sans-serif; ">Task Status</h1></a>
                          </div>
                          </div>
                          <nav>
                            <ul class="nav nav-tabs nav-justified">
                                <li class="nav-item align-self-end">
                                    <a class="nav-link" aria-current="page" href="{{route('posted_tasks')}}" 
                                    style="height:50px"><strong style="font-family:Fira Sans, sans-serif; ">POSTED TASKS</strong></a>
                                </li>
                                <li class="nav-item align-self-end">
                                    <a class="nav-link active" href="{{route('todo_tasks')}}" style="height:50px">
                                    <strong style="font-family:Fira Sans, sans-serif; ">TO-DO TASKS</strong></a>
                                </li>
                            </ul>
                          </nav>
                      </section>
                    <!-- /.card-body -->
                    <div class="card-body p-0">
                      <div class="table-container">
                        <table class="table table-hover" style="width: 100%" id="status">
                          <thead style="background-color: #62AC83; color:white">
          
                              <tr>
                                  <th style="width: 1%">
                                      
                                  </th>
                                  <th style="width: 20%">
                                      Task Title
                                  </th>
                                  <th style="width: 20%">
                                      Took by
                                  </th>
                                  <th style="width: 30%">
                                      Task Progress
                                  </th>
                                  <th style="width: 10%" class="text-center">
                                      Payment Status
                                  </th>
                                  <th style="width: 8%">
                                  </th>
                              </tr>
                          </thead>
                  <tbody>
                  @foreach($posts as $posts)
                      <tr>
                          <td>
                            #
                          </td>
                          <td>
                              <a style="font-family:Fira Sans, sans-serif; ">
                                {{$posts->post_title}}
                              </a>
                              <br>
                              <small style="font-family:Fira Sans, sans-serif; ">
                                {{$posts->created_at}}
                              </small>
                          </td>
                          <td>
                              <ul class="list-inline " style="font-family:Fira Sans, sans-serif; ">
                                  <li class="list-inline-item">
                                  <img src="storage/users-avatar/{{ Auth::user()->avatar}}" alt="Tasker" height="50" style="border-radius: 10%;"> {{$posts->tasker_id}}
                                  </li>
                              </ul>
                          </td>
                          <td class="project_progress">
                              <div class="progress progress-sm">
                                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="{{$posts->task_progress}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$posts->task_progress}}%">
                                  </div>
                              </div>
                              <small style="font-family:Fira Sans, sans-serif; ">
                                {{$posts->task_progress}}% Complete
                              </small><br><br>
                              <button class="btn btn-default btn-sm taskBtn" data-bs-toggle="modal" 
                              data-bs-target="#taskModal" data-id="{{$posts->post_id}}" 
                              data-name="{{$posts->post_title}}" data-category="{{$posts->post_category}}"
                              data-content="{{$posts->post_content}}" data-tasker="{{$posts->tasker_id}}"
                              data-update="{{$posts->updated_at}}" data-progress="{{$posts->task_progress}}"
                              data-file="{{$posts->file}}" data-comments="{{$posts->comments}}">
                              See task submitted
                              </button>
                          </td>
                          <td class="project-state text-center">
                              <span class="badge badge-success"style="background-color: green">Done</span>
                          </td>
                          <td class="project-actions text-right">
                          <button class="btn btn-default btn-sm viewBtn" data-id="{{$posts->post_id}}" 
                          data-name="{{$posts->post_title}}" data-category="{{$posts->post_category}}"
                          data-content="{{$posts->post_content}}" data-tasker="{{$posts->tasker_id}}"
                          data-update="{{$posts->updated_at}}" data-progress="{{$posts->task_progress}}"
                          data-bs-toggle="modal" data-bs-target="#viewModal">
                            View
                          </button>
                          </td>
                      </tr>
                      @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
              <!-- /.card-body -->
               </div>
            </div>
          </div>
          <!-- /.card -->

<!-- view modal -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel" style="font-family:Fira Sans, sans-serif; ">TASK INFORMATION</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{url('uploadtask')}}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" id="submit_id" name="submit_id">
                <div class="form-group row">
                  <div class="col-sm-2">
                    <strong style="font-family:Fira Sans, sans-serif; ">TASKER:</strong>
                  </div>
                  <div class="col-sm-1">
                    <img src="storage/users-avatar/{{ $posts->avatar}}" alt="Tasker" height="45" style="border-radius: 10%;">
                  </div>
                  <div class="col-sm-9" style="font-family:Fira Sans, sans-serif; ">
                    <p class="tasker_id"></p>
                      <input type="hidden" id="tasker_name" name="tasker_name">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <strong style="font-family:Fira Sans, sans-serif; ">TASK TITLE:</strong>
                    <p class="post_title" style="font-family:Fira Sans, sans-serif; "></p>
                  </div>
                  <div class="col-sm-6">
                    <strong style="font-family:Fira Sans, sans-serif; ">TASK CATEGORY:</strong>
                    <p class="post_category" style="font-family:Fira Sans, sans-serif; "></p>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <strong style="font-family:Fira Sans, sans-serif; ">TASK DESCRIPTION:</strong>
                    <p class="post_content" style="font-family:Fira Sans, sans-serif; "></p>
                  </div>
                  <div class="col-sm-6">
                    <strong style="font-family:Fira Sans, sans-serif; ">TASK GOT ON:</strong>
                    <p class="updated_at" style="font-family:Fira Sans, sans-serif; "></p>
                  </div>
                </div>
                <div class="form-group row">
                    <strong style="font-family:Fira Sans, sans-serif; ">SUBMIT TASK HERE:</strong>
                    <div class="col-sm-12">
                      <input type="file" name="file">
                      <input type="hidden" id="submit_progress" name="submit_progress">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <div class="d-grid gap-2 col-6 mx-auto">
              <button type="submit" id="submitButton" class="btn btn-special submit" style="font-family:Fira Sans, sans-serif; ">Submit</button>
              </div>
            </div>
        </form>
          </div>
        </div>
      </div></div>
<!-- view Modal -->

<!-- task modal -->
<div class="modal fade" id="taskModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog modal-dialog-centered modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title" id="exampleModalLabel" style="font-family:Fira Sans, sans-serif; ">SUBMITTED TASK</h4>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form id="taskForm">
      @csrf
      <input type="hidden" id="task_id" name="task_id">
        <div class="form-group row">
          <div class="col-sm-2">
            <strong style="font-family:Fira Sans, sans-serif; ">TASKER:</strong>
          </div>
          <div class="col-sm-1">
            <img src="storage/users-avatar/{{ Auth::user()->avatar}}" alt="Tasker" height="45" style="border-radius: 10%;">
          </div>
          <div class="col-sm-9 " style="font-family:Fira Sans, sans-serif; ">
            <p class="tasker_id"></p>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-6">
            <strong style="font-family:Fira Sans, sans-serif; ">TASK TITLE:</strong>
            <p class="post_title" style="font-family:Fira Sans, sans-serif; "></p>
          </div>
          <div class="col-sm-6">
            <strong style="font-family:Fira Sans, sans-serif; ">TASK CATEGORY:</strong>
            <p class="post_category" style="font-family:Fira Sans, sans-serif; "></p>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-6">
            <strong style="font-family:Fira Sans, sans-serif; ">TASK DESCRIPTION:</strong>
            <p class="post_content" style="font-family:Fira Sans, sans-serif; "></p>
          </div>
          <div class="col-sm-6">
            <strong style="font-family:Fira Sans, sans-serif; ">TASK GOT ON:</strong>
            <p class="updated_at" style="font-family:Fira Sans, sans-serif; "></p>
          </div>
        </div>
        <div class="form-group row">
            <p class="comments"></p>
        </div>
        <div class="form-group row">
            <iframe height="400" width="400" id="fileViewer"></iframe>
            <a id="downloadLink" href="#" style="font-family:Fira Sans, sans-serif; ">Download<a>
        </div>
    </div>
</form>
  </div>
</div>
</div></div>
<!-- task Modal -->
</section>
<!--  END CONTENT CARD -->
</div>
<!-- Page specific script -->

</section>

      

     
  </main><!-- End #main -->


  <!--   START DASHBOARD -->
  @include('dashboard.footer')

<!--     END DASHBOARD -->

<!-- START CHAT-BOX -->
  @include('dashboard.devChatBox')




<div class="chatbox-wrapper">
		<div class="chatbox-toggle">
			<i class='bx bx-message-dots'></i>
		</div>
		<div class="chatbox-message-wrapper">
			<div class="chatbox-message-header">
				<div class="chatbox-message-profile">
					<img src="assets/images/avatar4.png" alt="" class="chatbox-message-image">
					<div>
						<h4 class="chatbox-message-name" style="font-family:Fira Sans, sans-serif; ">TaskSwap Developers</h4>
						<p class="chatbox-message-status" style="font-family:Fira Sans, sans-serif; ">online</p>
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
				<h4 class="chatbox-message-no-message" style="font-family:Fira Sans, sans-serif; ">Hey There! How can we assist you?</h4>
			</div>
			<div class="chatbox-message-bottom">
				<form action="#" class="chatbox-message-form">
					<textarea rows="1" placeholder="Type message..." class="chatbox-message-input"  style= "width:300px; font-family:Fira Sans, sans-serif; "></textarea>
					<button type="submit" class="chatbox-message-submit"><i class='bx bx-send' ></i></button>
				</form>
			</div>
		</div>
	</div>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('dashboard.dashboardScripts')
</body>

</html>
<!-- script content -->

    <script>
        $(document).ready(function(){

            $('.viewBtn').on('click', function(){
                var id = $(this).attr('data-id');
                $('#submit_id').val(id);

                var progress = $(this).attr('data-progress');
                $('#submit_progress').val('75');

                var file = $(this).attr('data-file');
                $('.file'). html('');
                $('.file'). html(file);

                var post_title = $(this).attr('data-name');
                $('.post_title'). html('');
                $('.post_title'). html(post_title);

                var post_category = $(this).attr('data-category');
                $('.post_category'). html('');
                $('.post_category'). html(post_category);

                var post_content = $(this).attr('data-content');
                $('.post_content'). html('');
                $('.post_content'). html(post_content);

                var tasker_id = $(this).attr('data-tasker');
                $('.tasker_id'). html('');
                $('.tasker_id'). html(tasker_id);
                $('#tasker_name').val(tasker_id);

            });

            $('.taskBtn').on('click', function(){
                var id = $(this).attr('data-id');
                $('#task_id').val(id);      

                var fileSrc = "/assets/" + $(this).attr('data-file');
                $('#fileViewer').attr('src', fileSrc);

                var downloadSrc = "{{url('/download')}}/" + $(this).attr('data-file');
                $('#downloadLink').attr('href', downloadSrc);

                var post_title = $(this).attr('data-name');
                $('.post_title'). html('');
                $('.post_title'). html(post_title);

                var post_category = $(this).attr('data-category');
                $('.post_category'). html('');
                $('.post_category'). html(post_category);

                var post_content = $(this).attr('data-content');
                $('.post_content'). html('');
                $('.post_content'). html(post_content);

                var tasker_id = $(this).attr('data-tasker');
                $('.tasker_id'). html('');
                $('.tasker_id'). html(tasker_id);

                var updated_at = $(this).attr('data-update');
                $('.updated_at'). html('');
                $('.updated_at'). html(updated_at);

                var comments = $(this).attr('data-comments');
                $('.comments'). html('');
                $('.comments'). html(comments);

            });

            function printValidationErrorMsg(msg){
                $.each(msg, function(field_name, error){
                    // console.log(field_name,error);
                    // this will find a input id for error lets create this
                    $(document).find('#'+field_name+'_error').text(error);
                });
                }
                function printErrorMsg(msg){
                $('#alert-danger').html('');
                $('#alert-danger').css('display','block');
                $('#alert-danger').append(''+msg+'');
                }
                function printSuccessMsg(msg){
                $('#alert-success').html('');
                $('#alert-success').css('display','block');
                $('#alert-success').append(''+msg+'');
                // if form successfully submitted reset form
                }

          });
          </script>
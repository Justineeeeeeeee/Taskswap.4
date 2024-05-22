<head>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-w8ikjgfKT0Txhk3El5vCjiym8Lzo4WNjsw5SVErKTrJUv5l9UqUgg19QGII5pAFL" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-aaK5F0Mg5G2q2CPjYx2pPSR4m1JKa1H3wNMaKvUcgHX39N2P9l5D0Z+9lLhYPaU8" crossorigin="anonymous"></script>

    <!-- AdminLTE App -->
    <script src="assets/js/adminlte.js"></script> 
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
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
                                    <a class="nav-link active" aria-current="page" href="{{route('posted_tasks')}}" 
                                    style="height:50px"><strong style="font-family:Fira Sans, sans-serif; ">POSTED TASKS</strong></a>
                                </li>
                                <li class="nav-item align-self-end">
                                    <a class="nav-link" href="{{route('todo_tasks')}}" style="height:50px">
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
                            <div class="row">
                              <div class="col-sm-10 ">
                                  <img src="storage/users-avatar/{{$posts->avatar}}" alt="Tasker" height="50" style="border-radius: 10%;"> 
                              </div>
                              <div class="col-sm-2">
                                <div class="dropdown">
                                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                          <button class="btn acceptBtn" data-id="{{$posts->post_id}}" 
                                          data-progress="{{$posts->task_progress}}" data-tasker="{{$posts->tasker_id}}"
                                          type="button" data-bs-toggle="modal" 
                                          data-bs-target="#editProgress">ACCEPT</button>
                                    </li>
                                    <li>
                                          <button class="btn declineBtn" data-id="{{$posts->post_id}}" 
                                          data-tasker="{{$posts->tasker_id}}"
                                          data-bs-toggle="modal" 
                                          data-bs-target="#editTasker">DECLINE</button>
                                    </li>
                                  </ul>
                                </div>
                                </div> 
                            </div>
                            <div class="row" style="font-family:Fira Sans, sans-serif; " >
                                {{$posts->tasker_id}}
                            </div>
                          </td>
                          <td class="project_progress">
                              <div class="progress progress-sm">
                                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="{{$posts->task_progress}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$posts->task_progress}}%">
                                  </div>
                              </div>
                              <small>
                                {{$posts->task_progress}}% Complete
                              </small><br><br>
                              <div class="form-group row">
                                <div class="col-sm-6">
                                  <button class="btn btn-default btn-sm taskBtn" data-bs-toggle="modal" 
                                  data-bs-target="#taskModal" data-id="{{$posts->post_id}}" 
                                  data-name="{{$posts->post_title}}" data-category="{{$posts->post_category}}"
                                  data-content="{{$posts->post_content}}" data-tasker="{{$posts->tasker_id}}"
                                  data-update="{{$posts->updated_at}}" data-progress="{{$posts->task_progress}}"
                                  data-file="{{$posts->file}}" style="width:100%">
                                  CONFIRM TASK
                                  </button>
                                </div>
                                <div class="col-sm-6">
                                  <button class="btn btn-default btn-sm taskDeclineBtn" data-bs-toggle="modal" 
                                  data-bs-target="#taskDeclineModal" data-id="{{$posts->post_id}}" 
                                  data-file="{{$posts->file}}" style="width:100%">
                                  DECLINE TASK
                                  </button>
                                </div>
                              </div>
                          </td>
                          <td class="project-state text-center">
                          <div class="form-group row">
                            
                              <span class="badge badge-success"style="background-color: green">
                                {{$posts->payment_status}}</span>


                                <button style="margin-top: 28px;" class="btn btn-default btn-sm viewBtn" data-id="{{$posts->post_id}}" 
                          data-name="{{$posts->post_title}}" data-category="{{$posts->post_category}}" data-postedBy= "{{$posts->Posted_by}}"
                          data-content="{{$posts->post_content}}" data-tasker="{{$posts->tasker_id}}"
                          data-update="{{$posts->updated_at}}" data-progress="{{$posts->task_progress}}"  data-Token_balance="{{Auth::user()->token_balance}}" data-photo="{{$posts->avatar}}" data-Token_Amount="{{$posts->Amount}}"
                          data-bs-toggle="modal" data-bs-target="#viewModal">
                            PAY
                          </button>
                          </div>
                          </td>
                          <td class="project-actions text-right">
                          <button style = " Margin-top:15px;"class="btn btn-default btn-sm " data-id="{{$posts->post_id}}" 
                          data-name="{{$posts->post_title}}" data-category="{{$posts->post_category}}"
                          data-content="{{$posts->post_content}}" data-tasker="{{$posts->tasker_id}}"
                          data-update="{{$posts->updated_at}}" data-progress="{{$posts->task_progress}}"
                          data-bs-toggle="modal" data-bs-target="#NewModal">
                            VIEW
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


<div class="modal fade" id="NewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel" style="font-family:Fira Sans, sans-serif; ">TASK INFORMATION</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <input type="hidden" id="view_id" name="post_id">
              <input type="hidden" class="post_by" id="post_by" name="postedBy">
              <input type="hidden" id="avatar" name="avatar"value="{{Auth::user()->avatar}}">
              <input type="hidden" class = "tasker_avatar" id="tasker_avatar" name="tasker_avatar" >
              <input type="hidden" id="payment_status" name="payment_status" value="Paid">
              <input type="hidden" id="Token_Amount" name="Amount" >
              <input type="hidden" id="edit_post_category" name="post_category" >
              <input type="hidden" id="edit_post_content" name="post_content" >
              <input type="hidden" id="edit_post_title" name="post_title" >
              <input type="hidden" id="Edit_tasker_id" name="tasker_id" >
              
            
              
                <div class="form-group row">
                  <div class="col-sm-2">
                    <strong style="font-family:Fira Sans, sans-serif; ">TASKER:</strong>
                  </div>
                  <div class="col-sm-1">
                    <img  id = "selectedImage" alt="Tasker" height="45" style="border-radius: 10%;">
                  </div>
                  <div class="col-sm-9" style="font-family:Fira Sans, sans-serif; ">
                    <p class="tasker_id" ></p>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <strong style="font-family:Fira Sans, sans-serif; ">TASK TITLE:</strong>
                    <p class="post_title" style="font-family:Fira Sans, sans-serif; "></p>
                  </div>
                  <div class="col-sm-6">
                    <strong style="font-family:Fira Sans, sans-serif; ">TASK CATEGORY:</strong>
                    <p class="post_category"  style="font-family:Fira Sans, sans-serif; "></p>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <strong style="font-family:Fira Sans, sans-serif; ">TASK DESCRIPTION:</strong>
                    <p class="post_content" style="font-family:Fira Sans, sans-serif; "></p>
                  </div>
                  <div class="col-sm-6">
                    <strong style="font-family:Fira Sans, sans-serif; ">TASK GOT ON:</strong>
                    <p class="updated_at" name = "updated_at" style="font-family:Fira Sans, sans-serif; "></p>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <strong style="font-family:Fira Sans, sans-serif; ">Token Amount To Pay:</strong>
                    <p class="Token_Amount" name = "" style="font-family:Fira Sans, sans-serif; "></p>
                  </div>
                  <div class="col-sm-6">
                    <strong style="font-family:Fira Sans, sans-serif; ">Token Balance</strong>
                    <p class="Token_balance" name = "Token_balance" style="font-family:Fira Sans, sans-serif; "></p>
                  </div>
                </div>
                </div>

        </div>
      </div></div>

<!-- view modal -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel" style="font-family:Fira Sans, sans-serif; ">TASK INFORMATION</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{route('Payment')}}" method = "Post">
              @method('POST')
              @csrf
              <input type="hidden" id="view_id" name="post_id">
              <input type="hidden" class="post_by" id="post_by" name="postedBy">
              <input type="hidden" id="avatar" name="avatar"value="{{Auth::user()->avatar}}">
              <input type="hidden" class = "tasker_avatar" id="tasker_avatar" name="tasker_avatar" >
              <input type="hidden" id="payment_status" name="payment_status" value="Paid">
              <input type="hidden" id="Token_Amount" name="Amount" >
              <input type="hidden" id="edit_post_category" name="post_category" >
              <input type="hidden" id="edit_post_content" name="post_content" >
              <input type="hidden" id="edit_post_title" name="post_title" >
              <input type="hidden" id="Edit_tasker_id" name="tasker_id" >
              
            
              
                <div class="form-group row">
                  <div class="col-sm-2">
                    <strong style="font-family:Fira Sans, sans-serif; ">TASKER:</strong>
                  </div>
                  <div class="col-sm-1">
                    <img  id = "selectedImage" alt="Tasker" height="45" style="border-radius: 10%;">
                  </div>
                  <div class="col-sm-9" style="font-family:Fira Sans, sans-serif; ">
                    <p class="tasker_id" ></p>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <strong style="font-family:Fira Sans, sans-serif; ">TASK TITLE:</strong>
                    <p class="post_title" style="font-family:Fira Sans, sans-serif; "></p>
                  </div>
                  <div class="col-sm-6">
                    <strong style="font-family:Fira Sans, sans-serif; ">TASK CATEGORY:</strong>
                    <p class="post_category"  style="font-family:Fira Sans, sans-serif; "></p>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <strong style="font-family:Fira Sans, sans-serif; ">TASK DESCRIPTION:</strong>
                    <p class="post_content" style="font-family:Fira Sans, sans-serif; "></p>
                  </div>
                  <div class="col-sm-6">
                    <strong style="font-family:Fira Sans, sans-serif; ">TASK GOT ON:</strong>
                    <p class="updated_at" name = "updated_at" style="font-family:Fira Sans, sans-serif; "></p>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <strong style="font-family:Fira Sans, sans-serif; ">Token Amount To Pay:</strong>
                    <p class="Token_Amount" name = "" style="font-family:Fira Sans, sans-serif; "></p>
                  </div>
                  <div class="col-sm-6">
                    <strong style="font-family:Fira Sans, sans-serif; ">Token Balance</strong>
                    <p class="Token_balance" name = "Token_balance" style="font-family:Fira Sans, sans-serif; "></p>
                  </div>
                </div>
                </div>
            <div class="modal-footer">
              <div class="col-4 " style="font-family:Fira Sans, sans-serif; ">
                <button class="btn btn-special" type="submit" style="width:100%;font-weight:bold; font-family:Fira Sans, sans-serif; ">Pay</button>

            </div>
        </form>
          </div>
        </div>
      </div></div>
<!-- end of view Modal -->

<!-- accept modal -->
<div class="modal fade" id="editProgress" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel" style="font-family:Fira Sans, sans-serif; ">ACCEPT </h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="editProgressForm">
                @csrf
                <input type="hidden" id="accept_id" name="accept_id">
                    <h5 style="font-family:Fira Sans, sans-serif; ">DO YOU WANT THIS USER TO DO YOUR TASK?</h5><h5 class="tasker" style="font-family:Fira Sans, sans-serif; "></h5>
                      <input type="hidden" name="accept_progress" class="form-control rounded-3" id="accept_progress" style="font-family:Fira Sans, sans-serif; ">
                      <span id="title_error" class="text-danger"></span>
            </div>
            <div class="modal-footer">
              <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-cancel" style="width:100%;font-weight:bold; font-family:Fira Sans, sans-serif; " data-bs-dismiss="modal">CANCEL</button>
              </div>
              <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-special accept" style="width:100%;font-weight:bold;font-family:Fira Sans, sans-serif; ">ACCEPT</button>
              </div>
            </div>
        </form>
          </div>
        </div>
      </div></div>
<!-- end of accept Modal -->

<!-- decline modal -->
<div class="modal fade" id="editTasker" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel" style="font-family:Fira Sans, sans-serif; ">DECLINE</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="editTaskerForm">
                @csrf
                <input type="hidden" id="decline_id" name="decline_id">
                    <h5 style="font-family:Fira Sans, sans-serif; ">DO YOU WANT TO DECLINE THIS USER TO DO YOUR TASK?</h5><h5 class="tasker"></h5>
                      <input type="hidden" name="decline_tasker" class="form-control rounded-3" id="decline_tasker">
                      <input type="hidden" name="decline_progress" class="form-control rounded-3" id="decline_progress">
                      <span id="title_error" class="text-danger"></span>
            </div>
            <div class="modal-footer">
              <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-cancel" style="width:100%;font-weight:bold; font-family:Fira Sans, sans-serif; " data-bs-dismiss="modal">CANCEL</button>
              </div>
              <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-special decline" style="width:100%;font-weight:bold; font-family:Fira Sans, sans-serif; ">DECLINE</button>
              </div>
            </div>
        </form>
          </div>
        </div>
      </div></div>
<!-- end of decline Modal -->

 <!-- task confirmation modal -->
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
      <input type="hidden" id="confirm_id" name="confirm_id">
        <div class="form-group row">
          <div class="col-sm-2">
            <strong style="font-family:Fira Sans, sans-serif; ">TASKER:</strong>
          </div>
          <div class="col-sm-1">
            <img src="storage/users-avatar/{{ Auth::user()->avatar}}" alt="Tasker" height="45" style="border-radius: 10%;">
          </div>
          <div class="col-sm-9" style="font-family:Fira Sans, sans-serif; ">
            <p class="tasker_id" ></p>
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
            <strong style="font-family:Fira Sans, sans-serif; ">SUBMITTED TASK:</strong>
            <iframe height="400" width="400" id="fileViewer"></iframe>
            <a id="downloadLink" href="#" style="font-family:Fira Sans, sans-serif; ">Download<a>
        </div>
      <input type="hidden" id="confirm_progress" name="confirm_progress">
    </div>
    <div class="modal-footer">
      <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-special confirm" 
        style="width:100%;font-weight:bold; font-family:Fira Sans, sans-serif; ">CONFIRM TASK</button>
      </div>
    </div>
</form>
  </div>
</div>
</div></div>
<!-- task confirmation Modal -->

  <!-- decline task modal -->
<div class="modal fade" id="taskDeclineModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog modal-dialog-centered modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title" id="exampleModalLabel" style="font-family:Fira Sans, sans-serif; ">DECLINE TASK</h4>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form id="taskDeclineForm">
      @csrf
      <input type="hidden" id="deny_id" name="deny_id">
        <div class="form-group row">
            <strong style="font-family:Fira Sans, sans-serif; ">REASON TO DECLINE SUBMITTED TASK:</strong>
        </div> 
        <div class="form-group row">
          <div class="col-sm-12">
          <textarea class="note-editable card-block" name="deny_comment" id="deny_comment" cols="30" rows="10" role="textbox" aria-multiline="true" spellcheck="true" 
              style="height: 160px; width:100%; border-style: solid; border-color: #ced4da; border-width: 2px; border-radius: 10px; font-family:Fira Sans, sans-serif; " data-gramm="false" 
              wt-ignore-input="true" data-quillbot-element="ESLAb7FtqB5l7ZgsNvD55">Please state your comments or feedbacks to improve the submitted task.</textarea>
          </div>
        </div>
        <div class="form-group row">
            <strong style="font-family:Fira Sans, sans-serif; ">SUBMITTED TASK:</strong>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
            <iframe height="400" width="400" id="denyfileViewer"></iframe>
            <a id="denydownloadLink" href="#" style="font-family:Fira Sans, sans-serif; ">Download<a>
            <input type="hidden" id="deny_progress" name="deny_progress">
          </div>
        </div>
    </div>
    <div class="modal-footer">
      <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-special deny" 
        style="width:100%;font-weight:bold; font-family:Fira Sans, sans-serif; ">DECLINE TASK</button>
      </div>
    </div>
</form>
  </div>
</div>
</div></div>
<!--decline task Modal -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->
<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

        <!-- script content -->
        <script>
        $(document).ready(function(){
            $('.viewBtn').on('click', function(){
                var id = $(this).attr('data-id');
                $('#view_id').val(id);

                var postedBy = $(this).attr('data-postedBy');
                $('#post_by').val(postedBy);

                var post_title = $(this).attr('data-name');
                $('.post_title'). html('');
                $('.post_title'). html(post_title);
                $('#edit_post_title'). val(post_title);

                var postedBy = $(this).attr('data-postedBy');
                $('#post_by').val(postedBy);

                

                var post_category = $(this).attr('data-category');
                $('.post_category'). html('');
                $('.post_category'). html(post_category);
                $('#edit_post_category'). val(post_category);

                var post_content = $(this).attr('data-content');
                $('.post_content'). html('');
                $('.post_content'). html(post_content);
                $('#edit_post_content'). val(post_content);

                var tasker_id = $(this).attr('data-tasker');
                $('.tasker_id'). html('');
                $('.tasker_id'). html(tasker_id);
                $('#Edit_tasker_id'). val(tasker_id);

                var upload = $(this).attr('data-upload');
                $('.task_name'). html('');
                $('.task_name'). html(upload);

                var updated_at = $(this).attr('data-update');
                $('.updated_at'). html('');
                $('.updated_at'). html(updated_at);

                var Token_Amount = $(this).attr('data-Token_Amount');
                $('.Token_Amount'). html('');
                $('.Token_Amount'). html(Token_Amount);
                $('#Token_Amount').val(Token_Amount);

                var Token_balance = $(this).attr('data-Token_balance');
                $('.Token_balance'). html('');
                $('.Token_balance'). html(Token_balance);

                var photo = $(this).data('photo');
                var FinalPhoto = "storage/users-avatar/"
                $('#selectedImage').attr('src',FinalPhoto+photo);
                $('#tasker_avatar').val(photo);


                
            });

            // accept tasker..
            $('.acceptBtn').on('click', function(){
                var id = $(this).data('id');
                var tasker = $(this).data('tasker');
                var progress = $(this).data('progress');

                $('.tasker'). html('');
                $('.tasker'). html(tasker);
                $('#accept_progress').val('35');
                $('#accept_id').val(id);
            });

            $('#editProgressForm').submit(function(e){
                e.preventDefault();
                let formData = $(this).serialize();
                
                $.ajax({
                    url: '{{ route("editProgress", "task_progress") }}',
                    method: 'PATCH',
                    data: formData,
                    beforeSend: function(){
                        $('.accept').prop('disabled', true);
                    },
                    complete: function(){
                        $('.accept').prop('disabled', false);
                    },
                    success: function(data){
                        if(data.success == true){
                            $('#editProgress').modal('hide');
                            printSuccessMsg(data.msg);
                            setTimeout(function(){
                                location.reload();
                            }, 1000);
                        } else {
                            printErrorMsg(data.msg);
                        }
                    },
                    error: function(xhr, status, error){
                        console.error(xhr.responseText);
                    }
                });
            });

            // decline tasker..
            $('.declineBtn').on('click', function(){
                var id = $(this).data('id');
                var tasker = $(this).data('tasker');
                var progress = $(this).data('progress');

                $('.tasker'). html('');
                $('.tasker'). html(tasker);
                $('#decline_tasker').val("No Tasker Yet");
                $('#decline_progress').val("0");
                $('#decline_id').val(id);
            });

            $('#editTaskerForm').submit(function(e){
                e.preventDefault();
                let formData = $(this).serialize();
                
                $.ajax({
                    url: '{{ route("declineTasker", "tasker_id") }}',
                    method: 'GET',
                    data: formData,
                    beforeSend: function(){
                        $('.decline').prop('disabled', true);
                    },
                    complete: function(){
                        $('.decline').prop('disabled', false);
                    },
                    success: function(data){
                        if(data.success == true){
                            $('#editTasker').modal('hide');
                            printSuccessMsg(data.msg);
                            setTimeout(function(){
                                location.reload();
                            }, 1000);
                        } else {
                            printErrorMsg(data.msg);
                        }
                    },
                    error: function(xhr, status, error){
                        console.error(xhr.responseText);
                    }
                });
            });

            // confirm submitted task
            $('.taskBtn').on('click', function(){
                var id = $(this).attr('data-id');
                $('#confirm_id').val(id);

                var fileSrc = "/assets/" + $(this).attr('data-file');
                $('#fileViewer').attr('src', fileSrc);

                var downloadSrc = "{{url('/download')}}/" + $(this).attr('data-file');
                $('#downloadLink').attr('href', downloadSrc);

                var progress = $(this).attr('data-progress');
                $('#confirm_progress').val('85');

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
            });

            $('#taskForm').submit(function(e){
                e.preventDefault();
                let formData = $(this).serialize();
                
                $.ajax({
                    url: '{{ route("confirmProgress", "task_progress") }}',
                    method: 'POST',
                    data: formData,
                    beforeSend: function(){
                        $('.confirm').prop('disabled', true);
                    },
                    complete: function(){
                        $('.confirm').prop('disabled', false);
                    },
                    success: function(data){
                        if(data.success == true){
                            $('#taskModal').modal('hide');
                            printSuccessMsg(data.msg);
                            setTimeout(function(){
                                location.reload();
                            }, 1000);
                        } else {
                            printErrorMsg(data.msg);
                        }
                    },
                    error: function(xhr, status, error){
                        console.error(xhr.responseText);
                    }
                });
            });

            
            // deny submitted task..
            $('.taskDeclineBtn').on('click', function(){
                var id = $(this).data('id');
                var progress = $(this).data('progress');
                var comment = $(this).data('comment');

                var fileSrc = "/assets/" + $(this).attr('data-file');
                $('#denyfileViewer').attr('src', fileSrc);

                var downloadSrc = "{{url('/download')}}/" + $(this).attr('data-file');
                $('#denydownloadLink').attr('href', downloadSrc);

                $('#deny_progress').val('50');
                $('#deny_id').val(id);
                $('#deny_comment').val(comment);
            });

            $('#taskDeclineForm').submit(function(e){
                e.preventDefault();
                let formData = $(this).serialize();
                
                $.ajax({
                    url: '{{ route("denyProgress", "task_progress") }}',
                    method: 'GET',
                    data: formData,
                    beforeSend: function(){
                        $('.deny').prop('disabled', true);
                    },
                    complete: function(){
                        $('.deny').prop('disabled', false);
                    },
                    success: function(data){
                        if(data.success == true){
                            $('#editProgress').modal('hide');
                            printSuccessMsg(data.msg);
                            setTimeout(function(){
                                location.reload();
                            }, 1000);
                        } else {
                            printErrorMsg(data.msg);
                        }
                    },
                    error: function(xhr, status, error){
                        console.error(xhr.responseText);
                    }
                });
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
          $(function () {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
              event.preventDefault();
              $(this).ekkoLightbox({
                alwaysShowClose: true
              });
            });
          });
          </script>
</html>

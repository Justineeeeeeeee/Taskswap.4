<head> 
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
</head>
<div class="col-md-9" >
<!-- Main content --> 
 <section class="content" style="border-style: solid; border-color: #62AC83; border-radius: 10px" id ="status_section">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12">
                        
                      <!-- Content Header (Table header) -->
                      <section class="content-header">
                        <div class="container-fluid">
                          <div class="row mb-2">
                          <a  href="{{route ('taskstatus.index')}}"><h1>Task Status</h1></a>
                          </div>
                          </div>
                          <nav>
                            <ul class="nav nav-tabs nav-justified">
                                <li class="nav-item align-self-end">
                                    <a class="nav-link" aria-current="page" href="{{route('posted_tasks')}}" 
                                    style="height:50px"><strong>POSTED TASKS</strong></a>
                                </li>
                                <li class="nav-item align-self-end">
                                    <a class="nav-link" href="{{route('todo_tasks')}}" style="height:50px">
                                    <strong>TO-DO TASKS</strong></a>
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
                              <a>
                                {{$posts->post_title}}
                              </a>
                              <br>
                              <small>
                                {{$posts->created_at}}
                              </small>
                          </td>
                          <td>
                              <ul class="list-inline">
                                  <li class="list-inline-item">
                                  <img src="storage/users-avatar/{{ $posts->avatar}}" alt="Tasker" height="50" style="border-radius: 10%;"> {{$posts->tasker_id}}
                                  </li>
                              </ul>
                          </td>
                          <td class="project_progress">
                              <div class="progress progress-sm">
                                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="{{$posts->task_progress}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$posts->task_progress}}%">
                                  </div>
                              </div>
                              <small>
                                {{$posts->task_progress}}% Complete
                              </small><br><br>
                              <button class="btn btn-default btn-sm taskBtn" data-bs-toggle="modal" 
                              data-bs-target="#taskModal" data-id="{{$posts->post_id}}" 
                              data-name="{{$posts->post_title}}" data-category="{{$posts->post_category}}"
                              data-content="{{$posts->post_content}}" data-tasker="{{$posts->tasker_id}}"
                              data-update="{{$posts->updated_at}}" data-progress="{{$posts->task_progress}}"
                              data-file="{{$posts->file}}">
                              See task submitted
                              </button>
                          </td>
                          <td class="project-state text-center">
                              <span class="badge badge-success"style="background-color: green">Done</span>
                          </td>
                          <td class="project-actions text-right">
                          <button class="btn btn-default btn-sm infoBtn" data-id="{{$posts->post_id}}" 
                          data-name="{{$posts->post_title}}" data-category="{{$posts->post_category}}"
                          data-content="{{$posts->post_content}}" data-tasker="{{$posts->tasker_id}}"
                          data-update="{{$posts->updated_at}}"
                          data-bs-toggle="modal" data-bs-target="#infoModal">
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
<!-- info modal -->
<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">TASK INFORMATION</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="infoForm">
              @csrf
              <input type="hidden" id="info_id" name="info_id" class="info_id">
                <div class="form-group row">
                  <div class="col-sm-2">
                    <strong>TASKER:</strong>
                  </div>
                  <div class="col-sm-1">
                    <img src="storage/users-avatar/{{ Auth::user()->avatar}}" alt="Tasker" height="45" style="border-radius: 10%;">
                  </div>
                  <div class="col-sm-9">
                    <p class="tasker_id"></p>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <strong>TASK TITLE:</strong>
                    <p class="post_title"></p>
                  </div>
                  <div class="col-sm-6">
                    <strong>TASK CATEGORY:</strong>
                    <p class="post_category"></p>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <strong>TASK DESCRIPTION:</strong>
                    <p class="post_content"></p>
                  </div>
                  <div class="col-sm-6">
                    <strong>TASK GOT ON:</strong>
                    <p class="updated_at"></p>
                  </div>
                </div>
        </form>
          </div>
        </div>
      </div></div>
<!-- end of info Modal -->

<!-- task modal -->
<div class="modal fade" id="taskModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog modal-dialog-centered modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title" id="exampleModalLabel">SUBMITTED TASK</h4>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form id="taskForm">
      @csrf
      <input type="hidden" id="task_id" name="task_id">
        <div class="form-group row">
          <div class="col-sm-2">
            <strong>TASKER:</strong>
          </div>
          <div class="col-sm-1">
            <img src="storage/users-avatar/{{ Auth::user()->avatar}}" alt="Tasker" height="45" style="border-radius: 10%;">
          </div>
          <div class="col-sm-9">
            <p class="tasker_id"></p>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-6">
            <strong>TASK TITLE:</strong>
            <p class="post_title"></p>
          </div>
          <div class="col-sm-6">
            <strong>TASK CATEGORY:</strong>
            <p class="post_category"></p>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-6">
            <strong>TASK DESCRIPTION:</strong>
            <p class="post_content"></p>
          </div>
          <div class="col-sm-6">
            <strong>TASK GOT ON:</strong>
            <p class="updated_at"></p>
          </div>
        </div>
        <div class="form-group row">
            <iframe height="400" width="400" id="fileViewer"></iframe>
            <a id="downloadLink" href="#">Download<a>
        </div>
    </div>
</form>
  </div>
</div>
</div></div>
<!-- task Modal -->

</section>
</div>
<!-- /.content -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- script content -->
<script>
        $(document).on('click', '.infoBtn', function(){
          var id = $(this).attr('data-id');
          var title = $(this).attr('data-name');
          var category = $(this).attr('data-category');
          var content = $(this).attr('data-content');
          var tasker = $(this).attr('data-tasker');
          var update = $(this).attr('data-update');

          $('#info_id').val(id);
          $('.post_title').text(title);
          $('.post_category').text(category);
          $('.post_content').text(content);
          $('.tasker_id').text(tasker);
          $('.updated_at').text(update);
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
            });
</script>
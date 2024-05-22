<div class="col-md-9" >
<div  style=" overflow-y: auto; border-style: solid; border-color: #62AC83; border-radius:20px" id="dashboard_section" >

  <div >
    <!-- Content Header (Page header) -->
    <div class="content-header" >
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <div class="rounded-square" style="margin-left: 6%;">
          <p class="square-text" style="font-family:Fira Sans, sans-serif; margin-left: -2%;">DAILY REWARDS</p>
          <p class="wallet" style="display: flex; align-items: center; justify-content: center;">{{ Auth::user()->token_balance }}</p>
          
          <div class="token-images" style="display: flex; align-items: center; justify-content: center;">
            <img src="assets/images/token.png" alt="Token 1" class="token">
            <img src="assets/images/token.png" alt="Token 2" class="token">
            <img src="assets/images/token.png" alt="Token 3" class="token">
            <img src="assets/images/token.png" alt="Token 4" class="token">
            <img src="assets/images/token.png" alt="Token 5" class="token">
            <img src="assets/images/token.png" alt="Token 6" class="token">
            <img src="assets/images/token.png" alt="Token 7" class="token">
          </div>
          <button class="btn btn-special check" onClick="location.href='Token Page'" type="button" style="width:25%;font-weight:bold; font-family: PT Serif, sans-serif; margin-top:1.7%;">Check-in Today</button>

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
      <h4 class="acc" style="font-family:Fira Sans, sans-serif; margin-left: 0%;">ACHIEVEMENTS</h4>
      @if(isset($highestRatedUser))
      <div class="info-box" style="border-style: solid; border-color: #62AC83; border-radius:20px">
      <img class="trophy1" src="assets/images/trophy.png" alt="Trophy 1" style="width: 70px; height: 70px; margin-top:3%">
              <div class="info-box-content">
                <span class="award3">{{ $highestRatedUser->search_username }} </span>
                <h6 style="font-family:Fira Sans, sans-serif; ">Top-rated Hero on TaskSwap</h6>
                <span class="desc3 secret" style="font-family: PT Serif, sans-serif">Renowned for exceptional talent and unwavering dedication, this top-rated freelancer is admired by clients across various industries. With a remarkable portfolio that showcases a diverse skill set, they consistently deliver high-quality work, whether in web development, graphic design, content writing, or digital marketing.  </span>
              </div>
              <!-- /.info-box-content -->
        </div>
        @endif
        @if(isset($outstandingUser))
        <div class="info-box" style="border-style: solid; border-color: #62AC83; border-radius:20px">
      <img class="trophy1" src="assets/images/trophy.png" alt="Trophy 1" style="width: 70px; height: 70px; margin-top:3%">
              <div class="info-box-content">
                <span class="award3">{{ $outstandingUser->search_username }} </span>
                <h6 style="font-family:Fira Sans, sans-serif; ">Outstanding Academic Hero on TaskSwap</h6>
                <span class="desc3 secret" style="font-family: PT Serif, sans-serif">Renowned for exceptional talent and unwavering dedication, this outstanding academic is admired by peers and students alike across various disciplines. With a remarkable body of work that showcases a diverse range of research and publications, they consistently contribute groundbreaking insights to their field, whether in scientific research, humanities, or social sciences.  </span>
              </div>
              <!-- /.info-box-content -->
        </div>
      @endif
      @if(isset($excellentUser))
        <div class="info-box" style="border-style: solid; border-color: #62AC83; border-radius:20px">
      <img class="trophy1" src="assets/images/trophy.png" alt="Trophy 1" style="width: 70px; height: 70px; margin-top:3%">
              <div class="info-box-content">
                <span class="award3">{{ $excellentUser->search_username }} </span>
                <h6 style="font-family:Fira Sans, sans-serif; ">Excellent in TaskSwap</h6>
                <span class="desc3 secret" style="font-family: PT Serif, sans-serif">
Renowned for exceptional talent and unwavering dedication, this outstanding academic is admired by peers and students alike across various disciplines. With a remarkable body of work that showcases a diverse range of research and publications, they consistently contribute groundbreaking insights to their field, whether in scientific research, humanities, or social sciences. </span>
              </div>
              <!-- /.info-box-content -->
        </div>
        @endif
    </div>

    <hr style="border:solid; border-radius:10px;">
    <h3 class="acc" style="font-family:Fira Sans, sans-serif; margin-left: 1%;">MY POSTS</h3>
    
    @foreach($posts as $posts)
    <div class="col-lg-15">
        <div class="card">
            <div class="card-header">
                <div class="col-sm-12">
                    <div class="text-right">
                        <button class="btn btn-primary btn-sm editBtn" style="color: #FFFFFF; 
                            border-color: #62AC83;background-color: #62AC83;" data-id="{{$posts->post_id}}" 
                            data-name="{{$posts->post_title}}"  
                            data-category="{{$posts->post_category}}" data-content="{{$posts->post_content}}" 
                            data-bs-toggle="modal" data-bs-target="#editModal"><i class="fas fa-pencil-alt"></i>
                        </button>

                        <button class="btn btn-danger btn-sm deleteBtn" data-id="{{$posts->post_id}}" 
                            data-name="{{$posts->post_title}}" 
                            data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                <h3 class="task_title m-0" style="font-family:Fira Sans, sans-serif; ">{{$posts->post_title}}</h3>
            </div>
            <div class="card-body">
                <h6 class="card-title" style="font-size:24px; font-family:Fira Sans, sans-serif; ">{{$posts->post_category}}</h2>
                <p class="card-text" style="font-family:Fira Sans, sans-serif; ">{{$posts->post_content}}</p>

                <!-- Display time since post was created or updated -->
                <p class="text-muted" style="font-size:14px; float:right; font-family:Fira Sans, sans-serif; ">
                    @if($posts->created_at->gte($posts->updated_at))
                        Posted {{ $posts->created_at->diffForHumans() }}
                    @else
                        Updated {{ $posts->updated_at->diffForHumans() }}
                    @endif
                </p>
            </div>
        </div>
    </div>
@endforeach

        </section>
    </div>
</div>

<!-- Edit Modal -->

<!-- edit post Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel" style="font-family:Fira Sans, sans-serif; ">EDIT TASK</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="editPostForm">
                @csrf
                <input type="hidden" id="edit_id" name="edit_id">
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label"><h5 style="font-family:Fira Sans, sans-serif; ">TASK TITLE:</h5></label>
                    <div class="col-sm-9">
                      <input type="text" name="edit_title" class="form-control rounded-3" id="edit_title">
                      <span id="title_error" class="text-danger"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label"><h5 style="font-family:Fira Sans, sans-serif; ">TASK CATEGORY:</h5></label>
                    <div class="col-sm-9">
                      <select id="edit_category" name="edit_category" class="form-control" style="font-family:Fira Sans, sans-serif; ">
                        <option value="" disabled selected>Select your option</option>
                        @foreach($data as $row)
                         <option value="{{$row->category}}">{{$row->category}}</option>
                      @endforeach
                      </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label" ><h5 style="font-family:Fira Sans, sans-serif; ">Token Amount:</h5></label>
                    <div class="col-sm-9">
                      <input type="Number" name="Edit_Amount" class="form-control rounded-3" id="Edit_Amount">
                      <span id="Amount" class="text-danger"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-5 col-form-label"><h5 style="margin-left: -3%;font-family:Fira Sans, sans-serif; ">TASK DESCRIPTION:</h5></label>
                    <textarea class="note-editable card-block" name="edit_content" id="edit_content" cols="30" rows="10" role="textbox" aria-multiline="true" spellcheck="true" 
        style="height: 160px; width:100%; border-style: solid; border-color: #ced4da; border-width: 2px; border-radius: 10px" data-gramm="false" 
        wt-ignore-input="true" data-quillbot-element="ESLAb7FtqB5l7ZgsNvD55"></textarea>
                    <span id="content_error" class="text-danger"></span>
                </div>
            </div>
            <div class="modal-footer">
              <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-cancel" style="width:100%;font-weight:bold; font-family:Fira Sans, sans-serif; " data-bs-dismiss="modal">CLOSE</button>
              </div>
              <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-special editButton" style="width:100%;font-weight:bold; font-family:Fira Sans, sans-serif; ">SAVE CHANGES</button>
              </div>
            </div>
        </form>
          </div>
        </div>
      </div>


<!-- Delete Post !-->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel" style="font-family:Fira Sans, sans-serif; ">DELETE TASK</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
            <h5 style="font-family:Fira Sans, sans-serif; ">Do you really want to delete this task?</h5>
            <h3 class="post_title" style="font-family:Fira Sans, sans-serif; "></h3>
        </div>
        <div class="modal-footer">
          <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" class="btn btn-cancel" style="width:100%;font-weight:bold; font-family:Fira Sans, sans-serif; " data-bs-dismiss="modal">CLOSE</button>
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-delete deleteButton" style="width:100%;font-weight:bold; font-family:Fira Sans, sans-serif; ">DELETE</button>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- End of Delete Modal -->
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
    <script>
        $(document).ready(function(){
           
            // perform delete functionality here
            $('.deleteBtn').on('click',function(){
                var post_id = $(this).attr('data-id');
                var post_title = $(this).attr('data-name');
                $('.post_title'). html('');
                $('.post_title'). html(post_title);

                $('.deleteButton').on('click',function(){
                var url = "{{ route('deletePost','post_id')}}";
                url = url.replace('post_id',post_id);
                
                $.ajax({
                    url: url,
                    type: 'GET',
                    contentType: false,
                    processData:false,
                    beforeSend: function(){
            $('.deleteButton').prop('disabled', true);
              },
              complete: function(){
                  $('.deleteButton').prop('disabled', false);
              },
              success: function(data){
                  if(data.success == true){
                      $('#deleteModal').modal('hide');
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

            });
            // edit car functionality..
            $('.editBtn').on('click', function(){
    var id = $(this).data('id');
    var title = $(this).data('name');
    var category = $(this).data('category');
    var content = $(this).data('content');

    $('#edit_title').val(title);
    $('#edit_category').val(category);
    $('#edit_content').val(content);
    $('#edit_id').val(id);
});

$('#editPostForm').submit(function(e){
    e.preventDefault();
    let formData = $(this).serialize();

    $.ajax({
        url: '{{ route("editPost") }}',
        method: 'PATCH',
        data: formData,
        beforeSend: function(){
            $('.editButton').prop('disabled', true);
        },
        complete: function(){
            $('.editButton').prop('disabled', false);
        },
        success: function(data){
            if(data.success == true){
                $('#editModal').modal('hide');
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
  </script>
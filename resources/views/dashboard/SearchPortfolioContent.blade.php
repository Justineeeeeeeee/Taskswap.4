<div class="col-md-9" >
<div  style="border-style: solid; border-color: #62AC83; border-radius:20px; padding:2%" >

      <div class="blogs-content">
                    <div class="main-title">
                        <h2 style = "color:#62AC83">My <span style= "color:#62AC83">Portfolio</span><span class="bg-text"></span></h2>
                    </div>    

                   

                    <div class="blogs">
                    @foreach($portfolio as $portfolio)
                        <div class="blog">
                            <img src="{{$portfolio->Content_Image}}" alt="">
                            <div class="blog-text">
                                <h4>
                                    {{$portfolio->Portfolio_Title}}
                                </h4>
                                <p>
                                   {{$portfolio->Portfolio_content}}
                                </p>
                            </div>
                        </div>
                        @endforeach
    </div>


<div class="modal fade" id="Add_Portfolio">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Add Portfolio</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('Portfolio')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @Method('POST')
            <div class="modal-body">
            <div class = "row">
            <label for="inputName" class="col-2 col-form-label" ><h5>Caption:</h5></label>
        <div class="col-sm-8">
        <input type="text" id="Portfolio_Title" name = "Portfolio_Title" style="margin-left:-8%;" class="form-control rounded-3" >
        <x-input-error :messages="$errors->get('Portfolio_Title')"/>
        <input type="text" id="user_id" name = "user_id" style="margin-left:-8%;" value="{{Auth::user()->id}}" hidden>
        </div>
        </div>

        <div class = "row">
            <label for="inputName" class="col-2 col-form-label" ><h5>Content:</h5></label>
        <div class="col-sm-8">
        <textarea type="text" id="Portfolio_content" name = "Portfolio_content" style="margin-left:-8%; height:200px" class="form-control rounded-3" >
        </textarea>
        <x-input-error :messages="$errors->get('Portfolio_content')"/>
        </div>
        </div>

        <div class = "row" style="margin-top: 5%;">
            <label for="inputName" class="col-2 col-form-label" ><h5>Image</h5></label>
        <div class="col-sm-8">
        <input type="file" id="Content_Image" name = "Content_Image">
        <x-input-error :messages="$errors->get('Content_Image')"/>
        </div>
        </div>

        <div class = "row" style="margin-top: 5%; position:end">
        <div class="col-sm-12 d-flex justify-content-end">
        <button type="submit">Add to Portfolio</button>
        </div>
        </div>

        </form>


            

            </div>
        </div>
    </div>
</div>



<script>
document.getElementById('AddPortfolio').addEventListener('click', function() {
                $('#Add_Portfolio').modal('show');
            });
        </script>

<script>

document.getElementById('editPortfolio').addEventListener('click', function() {
                $('#Edit_Portfolio').modal('show');
            });
        </script>









<!-- START EDIT MODAL -->

<div class="modal fade" id="Edit_Portfolio">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Edit Content</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="EditProfile" enctype="multipart/form-data">
            @csrf
            @Method('Post')
            <div class="modal-body">

            <div class = "row">
            <input  id="edit_id" name="edit_id">    
            <label for="inputName" class="col-2 col-form-label" ><h5>Caption:</h5></label>
        <div class="col-sm-8">
        <input type="text" id="edit_portfolio_title" name = "Portfolio_Title" style="margin-left:-8%;" class="form-control rounded-3" >
        <x-input-error :messages="$errors->get('Portfolio_Title')"/>
        </div>
        </div>

        <div class = "row">
            <label for="inputName" class="col-2 col-form-label" ><h5>Content:</h5></label>
        <div class="col-sm-8">
        <textarea type="text" id="edit_portfolio_content" name = "Portfolio_content" style="margin-left:-8%; height:200px" class="form-control rounded-3" >
        </textarea>
        <x-input-error :messages="$errors->get('Portfolio_content')"/>
        </div>
        </div>

        <div>
    <div class="mb-4 d-flex justify-content-center">
        <img id="selectedImage" src=""
        alt="example placeholder" style="width: 300px;" />
    </div>
    <div class="d-flex justify-content-center">
        <div class="btn btn-primary btn-rounded">
            <label class="form-label text-white m-1" for="Content_Image">Choose file</label>
            <input type="file" class="form-control" id="Content_Image" name="Content_Image" onchange="displaySelectedImage(event, 'selectedImage')" />
            <x-input-error :messages="$errors->get('Content_Image')"/>
        </div>
    </div>
</div>


        <div class = "row" style="margin-top: 5%; position:end">
        <div class="col-sm-12 d-flex justify-content-end">
        <button type="submit" id="update_portfolio">Update Content</button>
        </div>
        </div>

        </form>
            </div>
        </div>
    </div>
    
    <!-- END EDIT MODAL -->
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
            $('.editPortfolio').on('click', function(){
    var id = $(this).data('id');
    var title = $(this).data('name');
    var category = $(this).data('category');
    var content = $(this).data('content');

    $('#edit_portfolio_title').val(title);
    $('#edit_portfolio_content').val(category);
    $('#edit_id').val(id);
    $('#selectedImage').attr('src', content);
    
});

$('#update_portfolio').submit(function(e){
    e.preventDefault();
    let formData = $(this).serialize();

    $.ajax({
        url: '{{ route("Portfolio.Update") }}',
        method: 'Post',
        data: formData,
        beforeSend: function(){
            $('.update_portfolio').prop('disabled', true);
        },
        complete: function(){
            $('.update_portfolio').prop('disabled', false);
        },
        success: function(data){
            if(data.success == true){
                $('#Edit_Portfolio').modal('hide');
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



<script>

function displaySelectedImage(event, elementId) {
    const selectedImage = document.getElementById(elementId);
    const fileInput = event.target;

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            selectedImage.src = e.target.result;
        };

        reader.readAsDataURL(fileInput.files[0]);
    }
}

</script>
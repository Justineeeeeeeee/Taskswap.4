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
                                <h4>{{$portfolio->Portfolio_Title}}</h4>
                                <p>{{$portfolio->Portfolio_content}}</p>
                                <div class="d-flex justify-content-end">
                                    <button class="btn editPortfolio" 
                                            data-id="{{$portfolio->Portfolio_id}}" 
                                            data-name="{{$portfolio->Portfolio_Title}}" 
                                            data-content="{{$portfolio->Portfolio_content}}" 
                                            data-image="{{$portfolio->Content_Image}}" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#Edit_Portfolio">
                                        <i class="fa-solid fa-pen fa-xl" style="color: #1885d8;"></i>
                                    </button>
                                    <button type="button" class="btn deletePortfolio" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#deleteModal" 
                                            data-id="{{$portfolio->Portfolio_id}}" 
                                            data-name="{{$portfolio->Portfolio_Title}}">
                                        <i class="fa-solid fa-trash fa-xl" style="color: #ea0606;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endforeach


                        <div class="blog"  type="button" id = "AddPortfolio" style="height: 100%; width:100%; background-image: url('add.png'); background-repeat:no-repeat;background-position: center center;" >
                            <img src="add.png" alt="" style="opacity: 0;;">


                        <div class="blog">
                        
                        <div class="blog"> 
                        </div>
                        </div>

                </div>
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
            <form id="editPortfolioForm" action="{{ route('Portfolio.Update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="row">
                        <input id="edit_id" name="edit_id" type="hidden">
                        <label for="inputName" class="col-2 col-form-label"><h5>Caption:</h5></label>
                        <div class="col-sm-8">
                            <input type="text" id="edit_portfolio_title" name="Edit_Portfolio_Title" style="margin-left:-8%;" class="form-control rounded-3">
                            <x-input-error :messages="$errors->get('Portfolio_Title')"/>
                        </div>
                    </div>
                    <div class="row">
                        <label for="inputName" class="col-2 col-form-label"><h5>Content:</h5></label>
                        <div class="col-sm-8">
                            <textarea id="edit_portfolio_content" name="Edit_Portfolio_content" style="margin-left:-8%; height:200px" class="form-control rounded-3"></textarea>
                            <x-input-error :messages="$errors->get('Portfolio_content')"/>
                        </div>
                    </div>
                    <div>
                        <div class="mb-4 d-flex justify-content-center">
                            <img id="selectedImage" src="" alt="example placeholder" style="width: 300px;" />
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-primary btn-rounded">
                                <label class="form-label text-whiteImage">Choose file</label>
                                <input type="file" class="form-control" id="Content_Image" name="Edit_Content_Image" onchange="displaySelectedImage(event, 'selectedImage')" />
                                <x-input-error :messages="$errors->get('Content_Image')"/>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 5%; margin-left:550px">
                        <button type="submit" class="btn btn-special" style="width:180px;font-weight:bold">SAVE CHANGES</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete the portfolio item titled <span id="modalPortfolioTitle"></span>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>
    
    <!-- END EDIT MODAL -->
   <!-- End of Delete Modal -->
   <head>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<script>
        $(document).ready(function(){
           
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.deletePortfolio').on('click', function() {
        var portfolioTitle = $(this).data('name');

        console.log('Portfolio Title:', portfolioTitle);

        $('#modalPortfolioTitle').text(portfolioTitle);
        $('#confirmDeleteButton').data('id', $(this).data('id'));
    });

    $('#confirmDeleteButton').on('click', function() {
        var portfolioId = $(this).data('id');
        var deleteUrl = '{{ route("Portfolio.Delete", ":id") }}'.replace(':id', portfolioId);

        $.ajax({
            url: deleteUrl,
            type: 'DELETE',
            success: function(response) {
                if (response.success) {
                    location.reload();  // Optionally, remove the deleted portfolio item from the DOM or refresh the page.
                } else {
                    console.log(response.error);  // Log the error message for debugging
                }
            },
            error: function(xhr, status, error) {
                console.log(error);  // Log the error message for debugging
            }
        });
    });

            // edit car functionality..
            $('.editPortfolio').on('click', function() {
            var id = $(this).data('id');
            var title = $(this).data('name');
            var content = $(this).data('content');
            var image = $(this).data('image');
            
            $('#edit_portfolio_title').val(title);
            $('#edit_portfolio_content').val(content);
            $('#edit_id').val(id);
            $('#selectedImage').attr('src', image);
        });

        $('#editPortfolioForm').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);

            $.ajax({
                url: '{{ route("Portfolio.Update") }}',
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.edit').prop('disabled', true);
                },
                complete: function() {
                    $('.edit').prop('disabled', false);
                },
                success: function(data) {
                    if (data.success) {
                        $('#Edit_Portfolio').modal('hide');
                        printSuccessMsg(data.msg);
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else {
                        printErrorMsg(data.msg);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });

    function printValidationErrorMsg(msg) {
        $.each(msg, function(field_name, error) {
            $(document).find('#' + field_name + '_error').text(error);
        });
    }

    function printErrorMsg(msg) {
        $('#alert-danger').html('');
        $('#alert-danger').css('display', 'block');
        $('#alert-danger').append(msg);
    }

    function printSuccessMsg(msg) {
        $('#alert-success').html('');
        $('#alert-success').css('display', 'block');
        $('#alert-success').append(msg);
    }

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

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
.btn-Accept{
    color: #FFFFFF; /*color ng get started text*/
    border-color: #62AC83; /*color ng get started borded*/
    font-family: 'sans-serif';
    margin-top: 2px;
    width: auto;
    border-radius: 10px;
    background-color: #62AC83;
    border-color: #62AC83;
  }
  .btn-Accept:hover{
    color: #62AC83; /*color ng get started text*/
    border-color: #62AC83; /*color ng get started borded*/
    background-color: #FFFFFF;
  }

  .btn-decline{
    color: #FFFFFF; /*color ng get started text*/
    border-color: #62AC83; /*color ng get started borded*/
    font-family: 'sans-serif';
    margin-top: 2px;
    width: auto;
    border-radius: 10px;
    background-color: #62AC83;
    border-color: #62AC83;
  }
  .btn-decline:hover{
    color: #62AC83; /*color ng get started text*/
    border-color: #62AC83; /*color ng get started borded*/
    background-color: #FFFFFF;
  }
</style>

<div class="col-md-3 " >
<!-- Profile Image -->
<div class="card" style="border-style: solid; border-color: #62AC83"  id = "dashboard_side">
  <div class="card-body box-profile" style="border-style: solid; border-color: #62AC83; border-radius: 10px">
    <div style="display: flex; align-items: center; justify-content: center;">
    <img src="storage/users-avatar/{{ Auth::user()->avatar}}" alt="TaskSwap" height="80" style="border-radius: 10%;">
    </div>

    <h3 class="profile-username text-center">{{ Auth::user()->username }}

        <div id="average-star-rating"><a href="{{ route('ratings.index', ['id' => $search->id]) }}">

<div style=" display: flex; align-items: center; justify-content: center;">
    <img src="{{ asset('assets/images/star.png') }}" height="20">
    <img src="{{ asset('assets/images/star.png') }}" height="20">
    <img src="{{ asset('assets/images/star.png') }}" height="20">
    <img src="{{ asset('assets/images/star.png') }}" height="20">
    <img src="{{ asset('assets/images/star1.png') }}" height="20">
</div><br>

    <p class="text-center">{{ Auth::user()->bio }} </p>

    <hr style="color: #62AC83">

    <strong><i class="fas fa-book mr-1"></i> Education</strong>

    <p>
    {{ Auth::user()->education }}
    </p>

    <hr style="color: #62AC83">

    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

    <p>    {{ Auth::user()->location }} </p>

    <hr style="color: #62AC83">

    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

    <p>
    {{ Auth::user()->skills }}
    </p>

    <hr style="color: #62AC83">

    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

    <p>{{ Auth::user()->notes }} </p>
    <div>
          <button class="btn btn-special" id="Post_Task"  type="submit" style="width:100%;font-weight:bold">Update Cash In Information</button>

          <button class="btn btn-special "  id = "Cash-OutNumber" type="Button" style="width:100%;font-weight:bold">Update Cash Out Information</button>


          </div>
          </div>

      <!-- /.card-body -->
     </div>
    <!-- /.card -->
  </div>

  <script>
            document.getElementById('Post_Task').addEventListener('click', function() {
                $('#Create_post').modal('show');
            });
        </script>

<script>
            document.getElementById('Cash-OutNumber').addEventListener('click', function() {
                $('#CashoutEdit').modal('show');
            });
        </script>
 <div class="modal fade" id="CashoutEdit"  >
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Gcash Information</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="margin-left: 5%; margin-right:5%">
            <form action="{{ route('GcashUpdate')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')


        <div class="form-group row">
    <label for="GcashNumber" class="col-sm-3 col-form-label" ><h5>Gcash Number</h5></label>
    <div class="col-sm-6" style="margin-left:-50px">
        <input type="text" id="GcashNumber" name = "GcashNumber" class="form-control rounded-3" >
        </div>
</div>

<div class="d-flex justify-content-center">
    <br><div class="" style="width:215px">
  <div class="imgUp" >
    <div class="imagePreview"></div>
    <label class="btn btn-primary">
			Upload<input type="file" id="Cash_In_Image" name="Cash_In_Image" class="uploadFile img"  style="width: 0px;height: 0px;overflow: hidden;">
				</label>
     </div><!-- col-2 -->
</div><!-- container -->
</div>


        <div class="form-group row">

        <div class="modal-footer">
                <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-cancel" style="width:100%;font-weight:bold" data-bs-dismiss="modal">Cancel</button>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-special" type="submit" style="width:100%;font-weight:bold">Update</button>
                </div>
        </div>
    </div>

            </form>
            </div>
        </div>
    </div>
  </div>




  <div class="modal fade" id="Create_post"  >
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Gcash Information</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="margin-left: 5%; margin-right:5%">
            <form action="{{ route('GcashUpdate')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')


        <div class="form-group row">
    <label for="GcashNumber" class="col-sm-3 col-form-label" ><h5>Gcash Number</h5></label>
    <div class="col-sm-6" style="margin-left:-50px">
        <input type="text" id="GcashNumber" name = "GcashNumber" class="form-control rounded-3" >
        </div>
</div>

<div class="d-flex justify-content-center">
    <br><div class="" style="width:215px">
  <div class="imgUp" >
    <div class="imagePreview"></div>
    <label class="btn btn-primary">
			Upload<input type="file" id="Cash_In_Image" name="Cash_In_Image" class="uploadFile img"  style="width: 0px;height: 0px;overflow: hidden;">
				</label>
     </div><!-- col-2 -->
</div><!-- container -->
</div>


        <div class="form-group row">

        <div class="modal-footer">
                <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-cancel" style="width:100%;font-weight:bold" data-bs-dismiss="modal">Cancel</button>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-Accept" type="submit" style="width:100%;font-weight:bold">Update</button>
                </div>
        </div>

            </form>
            </div>
        </div>
    </div>
  </div>




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

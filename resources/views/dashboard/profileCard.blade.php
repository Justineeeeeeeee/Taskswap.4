<div class="col-md-3">
    <!-- Profile Image -->
    <div class="card" style="border-style: solid; border-color: #62AC83" id="dashboard_side">
        <div class="card-body box-profile" style="border-style: solid; border-color: #62AC83; border-radius: 10px">
        <div class="text-center" style="display: flex; align-items: center; justify-content: center;">  
                <img src="storage/users-avatar/{{ Auth::user()->avatar}}" alt="TaskSwap" height="80" style="border-radius: 10%;">
            </div>

            <h3 class="profile-username text-center" style="font-family: PT Serif, sans-serif">{{ Auth::user()->username }}</h3>
            <a href="{{ route('ratings.view', ['id' => $search->id]) }}">
            <div style="display: flex; align-items: center; justify-content: center;">
            
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $average)
                                    <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                                @else
                                    <i class="fa-star star-light mr-1 main_star text-warning far"></i>
                                @endif
                            @endfor
</a>
            </div><br>

            <p class="text-center" style="font-family: PT Serif, sans-serif">{{ Auth::user()->bio }} </p>

<hr style="color: #62AC83">

<strong style="font-family: PT Serif, sans-serif"><i class="fas fa-book mr-1"></i> Education</strong>

<p style="font-family: PT Serif, sans-serif;">
{{ Auth::user()->education }} 
</p>

<hr style="color: #62AC83">

<strong style="font-family: PT Serif, sans-serif"><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

<p style="font-family: PT Serif, sans-serif;">    {{ Auth::user()->location }} </p>

<hr style="color: #62AC83">

<strong style="font-family: PT Serif, sans-serif"><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

<p style="font-family: PT Serif, sans-serif;">
{{ Auth::user()->skills }} 
</p>

<hr style="color: #62AC83">

<strong style="font-family: PT Serif, sans-serif"><i class="far fa-file-alt mr-1"></i> Notes</strong>

<p style="font-family: PT Serif, sans-serif;">{{ Auth::user()->notes }} </p>
<div>
      <button class="btn btn-special" id="Post_Task"  type="submit" style="width:100%;font-weight:bold; font-family: PT Serif, sans-serif">Post Task</button>

      <button class="btn btn-special" onClick="location.href='Token Page'" type="Button" style="width:100%;font-weight:bold;font-family: PT Serif, sans-serif">My Token Wallet</button> 

      <a href = "{{ Route('Myportfolio.view')}}">
      <button class="btn btn-special"  type="submit" style="width:100%;font-weight:bold; font-family: PT Serif, sans-serif">My Portfolio</button>
      </a>   
      
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


<div class="modal fade" id="Create_post"  >
<div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel" style="font-family:Fira Sans, sans-serif;">CREATE POST</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="{{ route('post.store')}}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group row">
<label for="inputName" class="col-sm-3 col-form-label" ><h5 style="font-family:Fira Sans, sans-serif; ">TASK TITLE:</h5></label>
<div class="col-sm-9">
    <input type="text" id="post_title" name = "post_title" class="form-control rounded-3" style="font-family:Fira Sans, sans-serif; " >
    <x-input-error :messages="$errors->get('post_title')" class="mt-2" style="font-family:Fira Sans, sans-serif; " />
    </div>
    <div class="col-sm-10">
<input type="hidden" id="users_id" name = "users_id" value= "{{ Auth::user()->id }}" class="form-control rounded-3">
<input type="hidden" id="tasker_id" name = "tasker_id" value= "No Tasker Yet" class="form-control rounded-3">
<input type="hidden" id="task_progress" name = "task_progress" value= "0" class="form-control rounded-3">
<input type="hidden" id="comments" name = "comments" value= "No Comment Yet." class="form-control rounded-3">
<input type="hidden" id="file" name = "file" value= "No Task Submitted" class="form-control rounded-3">
<input type="hidden" id="payment_status" name = "payment_status" value= "Not Paid" class="form-control rounded-3">
<input type="hidden" id="Posted_by" name = "Posted_by" value= "{{Auth::user()->username}}" class="form-control rounded-3">

  </div>
    <br>    
<div class="form-group row">
<label for="inputStatus" class="col-sm-3 col-form-label" style="option:hover{background:#003163}"  ><h5 style="font-family:Fira Sans, sans-serif; ">TASK CATEGORY:</h5></label>
<div class="col-sm-9">
    <select id="post_category" name = "post_category" class="form-select rounded-3" aria-placeholder="" style="font-family:Fira Sans, sans-serif; ">
        <option value="" disabled selected>Select your option</option>
    @foreach($data as $row)
        <option value="{{$row->category}}" style="font-family:Fira Sans, sans-serif; ">{{$row->category}}</option>
    @endforeach
    </select>
    <x-input-error :messages="$errors->get('post_category')" class="mt-2" />
</div>

<div class="form-group row">
                <label for="" class="col-sm-3 col-form-label" ><h5 style="font-family:Fira Sans, sans-serif; ">Token Amount:</h5></label>
                <div class="col-sm-9">
                  <input type="Number" name="Amount" class="form-control rounded-3" id="Amount" style="font-family:Fira Sans, sans-serif; ">
                  <x-input-error :messages="$errors->get('Amount')" class="mt-2" />
                  <span id="Amount" class="text-danger"></span>
                </div>
            </div>

<label for="inputDescription" class="col-sm-5 col-form-label" style="option:hover{background:#003163}"  ><h5 style="font-family:Fira Sans, sans-serif; ">TASK DESCRIPTION:</h5></label>
<div class="col-sm-12">

<textarea class="note-editable card-block" name="post_content" id="post_content" cols="30" rows="10" role="textbox" aria-multiline="true" spellcheck="true" 
    style="height: 160px; width:100%; border-style: solid; border-color: #ced4da; border-width: 2px; border-radius: 10px" data-gramm="false" 
    wt-ignore-input="true" data-quillbot-element="ESLAb7FtqB5l7ZgsNvD55"></textarea>
    <br>
    <div class="modal-footer">
            <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" class="btn btn-cancel" style="width:100%;font-weight:bold;font-family:Fira Sans, sans-serif; " data-bs-dismiss="modal">CLOSE</button>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-special" type="submit" style="width:100%;font-weight:bold;font-family:Fira Sans, sans-serif;" >POST TASK</button>
            </div>
    </div>
</div>
</div>
        </form>
        </div>
    </div>
</div>
</div>

@include('dashboard.RatingsScript')

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
                              <h1>Cash Out Requests</h1>
                          </div>
                          </div>
                      </section>
          
                    <!-- /.card-body -->
                    <div class="card-body p-0">
                      <div class="table-container">
                        <table class="table table-hover" style="width: 100%" id="status">
                          <thead style="background-color: #62AC83; color:white">
          
                              <tr >
                                  <th style="width: 1%">
                                      
                                  </th>
                                  <th style="width: 20%">
                                      From
                                  </th>
                                  <th style="width: 30%">
                                      Content
                                  </th>
                                  <th style="width: 20%">
                                    Gcash Number
                                  </th>
                                  <th style="width: 12%">
                                    Balance
                                  </th>

                                  <th style="width: 12%">
                                    QR Code
                                  </th>

                                  <th style="width: 5%" class="text-center">

                                  </th>
                                  <th style="width: 5%"  class="text-center">

                                  </th>
                              </tr> 
                          </thead>
                  <tbody>
                  @foreach($Cash_Out_Request as $Cash)
                      <tr >
                          <td>

                             
                          </td>

                          <td>
                          <div class="row" style="margin-top: 3%;">

                    <div class="col-3">
                        <img src="storage/users-avatar/{{ $Cash->avatar}}" alt="TaskSwap" width="40" height="40">
                        </div>

                        <div class="col-6">

                        <p style="margin-top:5%">{{$Cash->username}}</p>
                        </div>
                    
                          </div>

                          </td>

                          <td>
                            <p style="margin-top: 3%;">
                            {{$Cash->Content}} {{$Cash->Amount}}
                            </p>
                          </td> 

                          <td>
                            <p style="margin-top: 3%;">
                            {{$Cash->GcashNumber}}
                            </p>
                          </td> 

                          <td>
                            <p style="margin-top: 3%;">
                            {{$Cash->token_balance}}
                            </p>
                          </td> 

                          <td>
                        <img src="uploads/Cash_Out_Request/{{ $Cash->Image_QR}}" alt="TaskSwap" style = "width:80px; height:120px;"> 
                          </td> 

                          <td class="project-actions text-center" > 
                          <form method="post" action="{{route('Notification.Decline')}}">
                            @csrf
                            @method('put')
                            <input type="text" name="status" id="status" value="1" hidden>
                            <input type="text" name="id" id="id" value="{{ $Cash->id}}" hidden> 
                            <button type="button" data-bs-toggle="modal" data-bs-target="#Cash_Out" class="btn  btn-Accept text-uppercase fw-bold editBtn"
                          data-id="{{ $Cash->Cash_Out_id }}" data-name="{{ $Cash->username }}" data-GcashNumber = "{{$Cash->GcashNumber}}" 
                          data-GcashName = "{{$Cash->Gcash_name}}" data-value="{{ $Cash->Amount}}" data-token = "{{$Cash->Amount}}" 
                          data-balance = "{{(int)$Cash->token_balance}}" data-toID = "{{$Cash->from_id}}" data-NewTokenBalance = "{{((int)$Cash->token_balance) - $Cash->Amount }}"   >
                            Accept
                          </button>
                          </form>

                          </td>

                          <td class="project-actions text-right">
                          <form method="post" action="{{ route('Notification.Decline') }}">
                            @csrf
                            @method('patch')
                            <input type="text" name="status" id="status" value="2" hidden>
                            <input type="text" name="id" id="id" value="{{ $Cash->id}}" hidden>
                            <button type="button" class="btn btn-decline text-uppercase fw-bold editBtn" data-toggle="modal" data-target="#Cashout_declince" data-id="{{ $Cash->Cash_Out_id }}" data-name="{{ $Cash->username }}" data-GcashNumber = "{{$Cash->GcashNumber}}" data-GcashName = "{{$Cash->Gcash_name}}" data-value="{{ $Cash->Amount}}" data-token = "{{$Cash->Amount * 10}}" data-balance = "{{$Cash->token_balance}}"
                            data-id="{{ $Cash->Cash_Out_id }}" data-name="{{ $Cash->username }}" data-GcashNumber = "{{$Cash->GcashNumber}}" 
                          data-GcashName = "{{$Cash->Gcash_name}}" data-value="{{ $Cash->Amount}}" data-token = "{{$Cash->Amount}}" 
                          data-balance = "{{(int)$Cash->token_balance}}" data-toID = "{{$Cash->from_id}}" data-NewTokenBalance = "{{((int)$Cash->token_balance) }}"   >
                            Decline
                          </button>
                          </form>
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
</div>
    <!-- /.content -->

    <div class="modal fade" id="Cash_Out"  >
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Token Transfer Content</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="margin-left: 5%; margin-right:5%">
            <form action="{{ route('CashOutProcess')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
    <div class="form-group row">


        <h3 class="" style="margin-top: 5%;">Cash Out Information</h3>

        <label for="username" class="col-sm-4 col-form-label" ><h5>Name</h5></label>
    <div class="col-sm-8">
        <input type="text" id="username" name = "username"  readonly class="form-control rounded-3">
        <x-input-error :messages="$errors->get('username')"/>
        </div>

        <input type="text" name="from_id" id="from_id" value="{{Auth::user()->id}}"hidden>
  <input type="text" name="to_id" id="to_id" hidden>
  <input type="text" name="avatar" value="{{Auth::user()->avatar}}"hidden>
  <input type="text" name="adminName" value="{{Auth::user()->username}}"hidden>
  <input type="text" name = "Content" id = "Content" value="Cash Out Sucessfully! Check your balance!"hidden>
  <input type="text" name = "NewTokenBalance" id = "NewTokenBalance"hidden>
  <input type="text" name = "Cash_Out_id" id = "Cash_Out_id"hidden>
  <input type="text" name="status" id="status" value="1"hidden>

      <label for="balance" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Token Balance</h5></label>
      <div class="col-sm-8">
    <input type="number"  onKeyDown="if(this.value.length==11) return false;" id="balance" name = "Token_balance" class="form-control rounded-3" style="margin-top:3%" readonly >
    <x-input-error :messages="$errors->get('Token_balance')"/>
      </div>

        <label for="GcashName" class="col-sm-4 col-form-label" ><h5>Gcash Name</h5></label>
    <div class="col-sm-8">
        <input type="text" id="GcashName" name = "Name_Gcash"  readonly class="form-control rounded-3">
        <x-input-error :messages="$errors->get('GcashName')"/>
        </div>

        <label for="Gcash" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Gcash Number</h5></label>
      <div class="col-sm-8">
    <input type="text" id="Gcash" name = "GcashNumber"  readonly class="form-control rounded-3" style="margin-top:3%" >
    <x-input-error :messages="$errors->get('Gcash')"/>
      </div>   

      <label for="Reference_Number" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Reference Number</h5></label>
      <div class="col-sm-8">
    <input type="text" id="Reference_Number" name = "Reference_Number"  class="form-control rounded-3" style="margin-top:3%" >
    <x-input-error :messages="$errors->get('Reference_Number')"/>
      </div>

    <label for="total" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Amount</h5></label>
      <div class="col-sm-8">
    <input type="number"  onKeyDown="if(this.value.length==11) return false;" id="total" name = "Amount"  class="form-control rounded-3" style="margin-top:3%" readonly >
    <x-input-error :messages="$errors->get('total')"/>
      </div>

    <label for="Value_Value" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Token Value</h5></label>
      <div class="col-sm-8">
    <input type="number"  onKeyDown="if(this.value.length==11) return false;" id="Value_Value" name = "Value_Value"  class="form-control rounded-3" style="margin-top:3%" readonly >
    <x-input-error :messages="$errors->get('Value_Value')"/>
      </div>


      
      <h4 class="" style="margin-top: 5%;">Upload Receipt</h4>
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


  
<div class="modal fade" id="Cashout_declince"  >
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Token Transfer Content</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="margin-left: 5%; margin-right:5%">
            <form action="{{ route('CashOutProcessDecline')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
    <div class="form-group row">


        <h3 class="" style="margin-top: 5%;">Cash Out Information</h3>

        <label for="CashOutUsername" class="col-sm-4 col-form-label" ><h5>Name</h5></label>
    <div class="col-sm-8">
        <input type="text" id="CashOutUsername" name = "username"  readonly class="form-control rounded-3">
        <x-input-error :messages="$errors->get('CashOutUsername')"/>
        </div>      

        <input type="text" name="from_id" id="from_id" value="{{Auth::user()->id}}" hidden>
  <input type="text" name="to_id" id="to_id_cashout" hidden>
  <input type="text" name="avatar" value="{{Auth::user()->avatar}}"hidden>
  <input type="text" name="adminName" value="{{Auth::user()->username}}"hidden>
  <input type="text" name = "NewTokenBalance" id = "NewTokenBalance_CashOut"hidden>
  <input type="text" name = "Id_Id_Cash_out" id = "Id_Id_Cash_out"hidden>
  <input type="text" name="status" id="status" value="1"hidden>
  <input type="text" name = "Image_receipt" value = "0"hidden>
  <input type="text" name = "Reference_Number" value = "0"hidden>
  <input type="text" name = "GcashNumber" value = "0"hidden>
  <input type="text" name="Name_Gcash" id="status" value="0"hidden>


        <label for="token_balance_balance" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Token balance</h5></label>
      <div class="col-sm-8">
    <input type="number"  onKeyDown="if(this.value.length==11) return false;" id="token_balance_balance" name = "token_balance_balance"  class="form-control rounded-3" style="margin-top:3%" readonly >
    <x-input-error :messages="$errors->get('token_balance_balance')"/>
      </div>

    <label for="CashOutAmount" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Amount</h5></label>
      <div class="col-sm-8">
    <input type="number"  onKeyDown="if(this.value.length==11) return false;" id="CashOutAmount" name = "Amount"  class="form-control rounded-3" style="margin-top:3%" readonly >
    <x-input-error :messages="$errors->get('CashOutAmount')"/>
      </div>

    <label for="CashOutTokenValue" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Token Value</h5></label>
      <div class="col-sm-8">
    <input type="number"  onKeyDown="if(this.value.length==11) return false;" id="CashOutTokenValue" name = ""  class="form-control rounded-3" style="margin-top:3%" readonly >
    <x-input-error :messages="$errors->get('CashOutTokenValue')"/>
      </div>

      <div class="col-sm-12">
      <label for="Content_content" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Reason</h5></label>
                    <textarea class="note-editable card-block" name="Content_content" id="Content_content" cols="30" rows="10" role="textbox" aria-multiline="true" spellcheck="true" 
        style="height: 160px; width:100%; border-style: solid; border-color: #ced4da; border-width: 2px; border-radius: 10px" data-gramm="false" 
        wt-ignore-input="true" data-quillbot-element="ESLAb7FtqB5l7ZgsNvD55"></textarea>
                    <span id="Content_content" class="text-danger"></span>
                </div>



</div>
            <div class=" row gap-2 col-12 mx-auto justify-content-end">
            <button type="submit" data-bs-dismiss="modal"  class="btn btn-danger " style="margin-top:3px; height:39px; width:80px ;font-weight:bold">Decline</button>
            <button type="button" class="btn btn-special" style="font-weight:bold; height:40px;">Cancel</button>
              </div>
              
            </form>
            </div>
        </div>
    </div>
  </div>




<style>

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
    border-color: #E72929; /*color ng get started borded*/
    font-family: 'sans-serif';
    margin-top: 2px;
    width: auto;
    border-radius: 10px;
    background-color: #E72929;
    border-color: #E72929;
  }
  .btn-decline:hover{
    color: #E72929; /*color ng get started text*/
    border-color: #E72929; /*color ng get started borded*/
    background-color: #FFFFFF;
  }
td{
            padding: 10px;
            justify-content: center;
            align-items: center;
}
table {
    counter-reset: rowNumber -  1;
}
table tr {
    counter-increment: rowNumber;
}
table tr td:first-child::before {
    content: counter(rowNumber);
    min-width: 1em;
    margin-right: 0.5em;
}
</style>


<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
    <script>
        $(document).ready(function(){
         $('#addRolesForm').submit('click', function(e){
            e.preventDefault();
            let formData = $(this).serialize();
            $.ajax({
                url: '',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function(){
                    $('.addButton').prop('disabled', true);
                },
                complete: function(){
                    $('.addButton').prop('disabled', false);
                },
                success: function(data){
                    if(data.success == true){
                        $('#modal-add-new').modal('hide');
                        printSuccessMsg(data.msg);
                        var reloadInterval = 1000;
                        function reloadPage(){
                            location.reload(true);
                        }
                        var intervalId = setInterval(reloadPage, reloadInterval);
                    }else if(data.success == false){
                        printErrorMsg(data.msg);
                    }else{
                        printValidationErrorMsg(data.msg);
                    }
                }
           });
           return false;
        });
        // DELETE AJAX
        $('.deleteBtn').on('click', function(){
            var roles_id = $(this).attr('data-id');
            var roles_name = $(this).attr('data-name');
            $('.roles_name').html('');
            $('.roles_name').html(roles_name);

            $('.deleteBTN').on('click', function(){
            var url = "";
            url = url.replace('roles_id',roles_id);

            // console.log(url);
            $.ajax({
                url: url,
                type: 'GET',
                contentType: false,
                processData: false,
                beforeSend: function(){
                    $('.deleteBTN').prop('disabled', true);
                },
                complete: function(){
                    $('.deleteBTN').prop('disabled', false);
                },
                success: function(data){
                    if(data.success == true){
                        $('#deleteModal').modal('hide');
                        printSuccessMsg(data.msg);
                        var reloadInterval = 1000;
                        function reloadPage(){
                            location.reload(true);
                        }
                        var intervalId = setInterval(reloadPage, reloadInterval);
                    }else{
                        printErrorMsg(data.msg);
                    }
                }
            });
        });
        });
        // EDIT ROLES FUNCTIONALITY
        $('.editBtn').on('click', function(){
            var Cash_Out_id = $(this).attr('data-id');
            var balance = $(this).attr('data-balance');
            var name = $(this).attr('data-name');
            var GcashNumber = $(this).attr('data-GcashNumber');
            var Amount = $(this).attr('data-value');
            var GcashName = $(this).attr('data-GcashName');
            var token = $(this).attr('data-token');
            var to_id = $(this).attr('data-toID');
            var NewTokenBalance =  $(this).attr('data-NewTokenBalance');


            $('#Cash_Out_id').val(Cash_Out_id);
            $('#Id_Id_Cash_out').val(Cash_Out_id);
            $('#CashOutUsername').val(name);
            $('#token_balance_balance').val(balance);
            $('#CashOutTokenValue').val(token);
            $('#CashOutAmount').val(Amount);
            $('#total').val(Amount);
            $('#to_id').val(to_id);

            $('#NewTokenBalance').val(NewTokenBalance);

            $('#NewTokenBalance_CashOut').val(NewTokenBalance);
            

            $('#Value_Value').val(token);
            $('#balance').val(balance);
            $('#username').val(name);
            $('#GcashName').val(GcashName);
            $('#Gcash').val(GcashNumber);

            $('#to_id_cashout').val(to_id);

            


          


            // EDIT SUBMIT
           $('#editRolesForm').submit('click', function(e){
            e.preventDefault();
            let formData = $(this).serialize();
            $.ajax({
                url: '',
                data: formData,
                contentType: false,
                processData: false,
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
                        var reloadInterval = 1000;
                        function reloadPage(){
                            location.reload(true);
                        }
                        var intervalId = setInterval(reloadPage, reloadInterval);
                    }else if(data.success == false){
                        printErrorMsg(data.msg);
                    }else{
                        printValidationErrorMsg(data.msg);
                    }
                }
           });
        });

        function printValidationErrorMsg(msg){
                $.each(msg, function(field_name,error){
                    console.log(field_name,error);
                    $(document).find('#'+field_name+'_error').text(error);
                });
            }

        });
        function printErrorMsg(msg){
                $('#alert-danger').html('');
                $('#alert-danger').css('display','block');
                $('#alert-danger').append(''+msg+'');
            }
            function printSuccessMsg(msg){
                $('#alert-success').html('');
                $('#alert-success').css('display','block');
                $('#alert-success').append(''+msg+'');
                document.getElementById('addRolesForm').reset();
            }



    });
  </script>


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
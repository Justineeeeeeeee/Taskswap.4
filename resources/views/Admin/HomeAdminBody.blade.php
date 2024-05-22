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
                              <h1>Cash In Requests</h1>
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
                                    Reference Number
                                  </th>

                                  <th style="width: 12%">
                                    Image Receipt
                                  </th>

                                  <th style="width: 5%" class="text-center">

                                  </th>
                                  <th style="width: 5%"  class="text-center">

                                  </th>
                              </tr> 
                          </thead>
                  <tbody>
                  @foreach($Cash_In_Request as $Cash)
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
                            {{$Cash->Reference_Number}}
                            </p>
                          </td> 

                          <td>
                        <img src="uploads/Cash_In_Request/{{ $Cash->Image_receipt}}" alt="TaskSwap" style = "width:80px; height:120px;"> 
                          </td> 

                          <td class="project-actions text-center" > 

                          <button type="button" data-bs-toggle="modal" data-bs-target="#Cash_In_id" class="btn  btn-Accept text-uppercase fw-bold editBtn"
                          data-id="{{ $Cash->Cash_In_Id }}" data-Cash_In_Id = "{{$Cash->Cash_In_Id}}" data-Image_receipt= "{{$Cash->Image_receipt}}" data-NewTokenBalance = "{{(float)$Cash->token_balance + ((float)$Cash->Amount * 10) }}" 
                          data-toID = "{{$Cash->from_id}}" data-name="{{ $Cash->username }}" data-GcashNumber = "{{$Cash->GcashNumber}}" data-reference = "{{$Cash->Reference_Number}}" data-Amount="{{ $Cash->Amount}}" 
                          data-token = "{{$Cash->Amount * 10}}" data-balancce = "{{$Cash->token_balance}}">
                            Accept
                          </button>

                          </td>

                          <td class="project-actions text-right">
                          <form method="post" action="{{ route('Notification.Decline') }}">
                            @csrf
                            @method('patch')
                            <input type="text" name="status" id="status" value="2" hidden>
                            <input type="text" name="id" id="id" value="{{ $Cash->id}}" hidden>
                          <button type="button" class="btn btn-decline text-uppercase fw-bold editBtn" data-toggle="modal" data-target="#Decline_Fill_up" data-id="{{ $Cash->Cash_In_Id }}" data-Cash_In_Id = "{{$Cash->Cash_In_Id}}" data-Image_receipt= "{{$Cash->Image_receipt}}" data-NewTokenBalance = "{{(float)$Cash->token_balance}}" data-toID = "{{$Cash->from_id}}" data-name="{{ $Cash->username }}" data-GcashNumber = "{{$Cash->GcashNumber}}" data-reference = "{{$Cash->Reference_Number}}" data-Amount="{{ $Cash->Amount}}" data-token = "{{ (float)$Cash->Amount * 10}}" data-balancce = "{{ (float)$Cash->token_balance}}">
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


<div class="modal fade" id="Cash_In_id"  >
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Token Transfer Content</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="margin-left: 5%; margin-right:5%">
            <form action="{{ route('CashInProcess')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
    <div class="form-group row">


        <h3 class="" style="margin-top: 5%;">Cash In Information</h3>

        <label for="username" class="col-sm-4 col-form-label" ><h5>Name</h5></label>
    <div class="col-sm-8">
        <input type="text" id="username" name = "username"  readonly class="form-control rounded-3">
        <x-input-error :messages="$errors->get('username')"/>
        </div>

        
      <label for="Reference_Number" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Reference Number</h5></label>
      <div class="col-sm-8">
    <input type="text" id="Reference_Number" name = "Reference_Number"  readonly class="form-control rounded-3" style="margin-top:3%" >
    <x-input-error :messages="$errors->get('Reference_Number')"/>
      </div>

  <input type="text" name="from_id" id="from_id" value="{{Auth::user()->id}}"hidden>
  <input type="text" name="to_id" id="to_id" hidden>
  <input type="text" name="avatar" value="{{Auth::user()->avatar}}"hidden>
  <input type="text" name="adminName" value="{{Auth::user()->username}}"hidden>
  <input type="text" name = "Balance_toke_Cash_in" id = "Balance_toke_Cash_in"hidden>
  <input type="text" name = "Content" id = "Content" value="Cash In Successfully! Check your balance!"hidden>
  <input type="text" name = "NewTokenBalance" id = "NewTokenBalance"hidden>
  <input type="text" name = "Image_receipt" id = "Image_receipt"hidden>
  <input type="text" name = "Cash_In_Id" id = "Cash_In_Id"hidden>
  <input type="text" name="status" id="status" value="1"hidden>

      
      <label for="Gcash" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Gcash Number</h5></label>
      <div class="col-sm-8">
    <input type="text" id="Gcash" name = "GcashNumber"  readonly class="form-control rounded-3" style="margin-top:3%" >
    <x-input-error :messages="$errors->get('Gcash')"/>
      </div>

    <label for="Amount" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Amount</h5></label>
      <div class="col-sm-8">
    <input type="number"  onKeyDown="if(this.value.length==11) return false;" id="Amount" name="Amount"  class="form-control rounded-3" style="margin-top:3%" readonly >
    <x-input-error :messages="$errors->get('Amount')"/>
      </div>

      <label for="TokenValue" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Token Value</h5></label>
      <div class="col-sm-8">
    <input type="number"  onKeyDown="if(this.value.length==11) return false;" id="TokenValue" name="Value_Value"  class="form-control rounded-3" style="margin-top:3%" readonly >
    <x-input-error :messages="$errors->get('TokenValue')"/>
      </div>

</div>
            <div class=" row gap-2 col-12 mx-auto justify-content-end">
            <button type="button" data-bs-dismiss="modal"  class="btn btn-danger " style="margin-top:3px; height:39px; width:80px ;font-weight:bold">Cancel</button>
            <button type="submit" class="btn btn-special" style="font-weight:bold; height:40px;">Send Token</button>
              </div>
              
            </form>
            </div>
        </div>
    </div>
  </div>





<div class="modal fade" id="Decline_Fill_up"  >
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Token Transfer Content</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="margin-left: 5%; margin-right:5%">
            <form action="{{ route('CashInDecline')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
    <div class="form-group row">


        <h3 class="" style="margin-top: 5%;">Cash In Information</h3>

        <label for="username_Cash" class="col-sm-4 col-form-label" ><h5>Name</h5></label>
    <div class="col-sm-8">
        <input type="text" id="username_Cash" name = "username"  readonly class="form-control rounded-3">
        <x-input-error :messages="$errors->get('username')"/>
        </div>      
      <label for="Reference_Number_num" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Reference Number</h5></label>
      <div class="col-sm-8">
    <input type="text" id="Reference_Number_num" name = "Reference_Number"  readonly class="form-control rounded-3" style="margin-top:3%" >
    <x-input-error :messages="$errors->get('Reference_Number_num')"/>
      </div>

      <input type="text" name="from_id" id="from_id" value="{{Auth::user()->id}}"hidden>
  <input type="text" name="to_id" id="to_id_Cash" hidden>
  <input type="text" name="avatar" value="{{Auth::user()->avatar}}"hidden>
  <input type="text" name="adminName" value="{{Auth::user()->username}}"hidden>
  <input type="text" name = "Balance_toke_Cash_in" id = "Balance_toke_Cash_in_Cash"hidden>
  <input type="text" name = "NewTokenBalance" id = "NewTokenBalance_Cash_in"hidden>
  <input type="text" name = "Image_receipt" id = "Image_receipt_Cash"hidden>
  <input type="text" name = "Cash_In_Id" id = "Cash_In_Id_Cash"hidden>
  <input type="text" name="status" id="status" value="1"hidden>


      
      <label for="Gcashnum" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Gcash Number</h5></label>
      <div class="col-sm-8">
    <input type="text" id="Gcashnum" name = "GcashNumber"  readonly class="form-control rounded-3" style="margin-top:3%" >
    <x-input-error :messages="$errors->get('Gcashnum')"/>
      </div>

    <label for="Amount_total" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Amount</h5></label>
      <div class="col-sm-8">
    <input type="number"  onKeyDown="if(this.value.length==11) return false;" id="Amount_total" name = "Amount"  class="form-control rounded-3" style="margin-top:3%" readonly >
    <x-input-error :messages="$errors->get('Amount_total')"/>
      </div>

    <label for="Token_Value" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Token Value</h5></label>
      <div class="col-sm-8">
    <input type="number"  onKeyDown="if(this.value.length==11) return false;" id="Token_Value" name = "Value_Value"  class="form-control rounded-3" style="margin-top:3%" readonly >
    <x-input-error :messages="$errors->get('Token_Value')"/>
      </div>

      <div class="col-sm-12">
      <label for="Content" class="col-sm-4 col-form-label" style="margin-top:2%"><h5>Reason</h5></label>
                    <textarea class="note-editable card-block" name="Content" id="Content" cols="30" rows="10" role="textbox" aria-multiline="true" spellcheck="true" 
        style="height: 160px; width:100%; border-style: solid; border-color: #ced4da; border-width: 2px; border-radius: 10px" data-gramm="false" 
        wt-ignore-input="true" data-quillbot-element="ESLAb7FtqB5l7ZgsNvD55"></textarea>
                    <span id="content_error" class="text-danger"></span>
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


    <!-- /.content -->

           {{-- LOGIN MODAL START --}}
           <script>
            document.getElementById('id').addEventListener('click', function() {
                $('#Cash_In_id').modal('show');
            });

            document.getElementById('transfer').addEventListener('click', function() {
                $('#TransferToken').modal('show');
            });
        </script>


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
            text-align: center;
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
            var token_balance = $(this).attr('data-balancce');
            var Cash_in_id = $(this).attr('data-id');
            var name = $(this).attr('data-name');
            var GcashNumber = $(this).attr('data-GcashNumber');
            var reference = $(this).attr('data-reference');
            var Amount = $(this).attr('data-Amount');
            var token = $(this).attr('data-token');
            var user_name = $(this).attr('data-user_name');
            var to_id = $(this).attr('data-toID');
            var NewTokenBalance =  $(this).attr('data-NewTokenBalance');
            var Image_receipt =  $(this).attr('data-Image_receipt');
            var Cash_In_Id =  $(this).attr('data-Cash_In_Id');

            $('#TokenValue').val(token);
            $('#Image_receipt').val(Image_receipt);
            $('#Balance_toke_Cash_in').val(token_balance);
            $('#to_id').val(to_id);
            $('#username').val(name);
            $('#Gcash').val(GcashNumber);
            $('#Cash_in_id').val(Cash_in_id);
            $('#Reference_Number').val(reference);
            $('#Amount').val(Amount);
            $('#NewTokenBalance').val(NewTokenBalance);
            $('#Cash_In_Id').val(Cash_In_Id);



            $('#Token_Value').val(token);
            $('#Image_receipt_Cash').val(Image_receipt);
            $('#Balance_toke_Cash_in_Cash').val(token_balance);
            $('#to_id_Cash').val(to_id);
            $('#username_Cash').val(name);
            $('#Gcash').val(GcashNumber);
            $('#Cash_in_id').val(Cash_in_id);
            $('#Reference_Number').val(reference);
            $('#Amount').val(Amount);
            $('#NewTokenBalance_Cash_in').val(NewTokenBalance);
            $('#Cash_In_Id_Cash').val(Cash_In_Id);


            $('#user_name').val(user_name);
            $('#Gcashnum').val(GcashNumber);
            $('#Cash_id').val(Cash_in_id);
            $('#Reference_Number_num').val(reference);
            $('#Amount_total').val(Amount);
   
            


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
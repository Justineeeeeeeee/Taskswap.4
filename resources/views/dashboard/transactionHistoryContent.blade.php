<div class="col-md-9" >
<!-- Main content -->
    <section class="content" style="border-style: solid; border-color: #62AC83; border-radius: 10px " id ="transaction_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <h1 style="font-family:Fira Sans, sans-serif; ">Transaction History</h1>
        </div>
        <!-- filter -->
        <div class="row">
        <div class="form-group col-md-6" style="font-family:Fira Sans, sans-serif; ">
                  <label>Date range:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
          </div>
          <div class="form-group col-md-6">
                  <label>Date range button:</label>
                  <div class="input-group">
                    <button type="button" class="btn btn-default float-right" id="daterange-btn">
                      <i class="far fa-calendar-alt"></i> Date range picker
                      <i class="fas fa-caret-down"></i>
                      <input hidden type="text" name="username" id="username" value="{{Auth::user()->username}}">
                    </button>
                  </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>


              <!-- /.card-header -->
              <div class="card-body p-0">
              <div class="table-container">
              <table class="table table-hover" id="transactions">
                <thead style="background-color: #62AC83; color:white">
                  <tr>
                    <th>DATE & TIME</th>
                    <th>TRANSFER TO</th>
                    <th>TRANSFER FROM</th>
                    <th width = "20%">TRANSACTION ID.</th>
                    <th width = "10%">AMOUNT</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($TransactionHistory as $trans)
                    
                  
                  <tr>
                    <td>{{$trans->created_at}}</td>
                    <td><div class="row" style="margin-top: 3%;">
            <div class="col-2">
                <img src="storage/users-avatar/{{ $trans->tasker_avatar}}" alt="TaskSwap" width="40" height="40">
                </div>
             <div class="col-6">
            <p style="margin-top:5%">{{$trans->tasker_id}}</p>
    </div>
                  </td>
                    <td><div class="row" style="margin-top: 3%;">
            <div class="col-2">
                <img src="storage/users-avatar/{{ $trans->avatar}}" alt="TaskSwap" width="40" height="40">
                </div>
             <div class="col-6">
            <p style="margin-top:5%">{{$trans->Posted_by}}</p>
    </div></td>
                    <td>{{ $trans->id}}</td>
                    <td>{{ $trans->Amount}}</td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
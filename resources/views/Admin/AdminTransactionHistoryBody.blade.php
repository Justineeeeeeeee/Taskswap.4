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
                              <h1>Transaction History</h1>
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
                                    Transaction
                                  </th>

                                  <th style="width: 5%" class="text-center">

                                  </th>
                                  <th style="width: 5%"  class="text-center">

                                  </th>
                              </tr> 
                          </thead>
                  <tbody>
                  @foreach($CashInHistory as $Cash)
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
                            Cash In
                          </td> 

                          <td class="project-actions text-center" > 
                          <form method="post" action="{{route('Remove.CashIN')}}">
                            @csrf
                            @method('put')
                            <input type="text" name="status" id="status" value="1" hidden>
                            <input type="text" name="CashInID" id="id" value="{{ $Cash->Cash_in_History}}" hidden> 
                            <button type="submit" data-bs-toggle="modal" data-bs-target="#Cash_Out" class="btn  btn-Accept text-uppercase fw-bold editBtn">
                            Remove
                          </button>
                          </form>

                          </td>
                      </tr>
                      @endforeach
                      @foreach($CashOutHistory as $CashOut)
                      <tr >
                          <td>

                             
                          </td>

                          <td>
                          <div class="row" style="margin-top: 3%;">

                    <div class="col-3">
                        <img src="storage/users-avatar/{{ $CashOut->avatar}}" alt="TaskSwap" width="40" height="40">
                        </div>

                        <div class="col-6">

                        <p style="margin-top:5%">{{$CashOut->username}}</p>
                        </div>
                    
                          </div>

                          </td>

                          <td>
                            <p style="margin-top: 3%;">
                            {{$CashOut->Content}} {{$CashOut->Amount}}
                            </p>
                          </td> 

                          <td>
                            <p style="margin-top: 3%;">
                            {{$CashOut->GcashNumber}}
                            </p>
                          </td> 

                          <td>
                            <p style="margin-top: 3%;">
                            {{$CashOut->token_balance}}
                            </p>
                          </td> 

                          <td>
                            Cash Out
                          </td> 

                          <td class="project-actions text-center" > 
                          <form method="post" action="{{route('Remove.CashOut')}}">
                            @csrf
                            @method('put')
                            <input type="text" name="status" id="status" value="1" hidden>
                            <input type="text" name="idCashOut" id="id" value="{{ $CashOut->Cash_out_History}}" hidden> 
                            <button type="submit" data-bs-toggle="modal" data-bs-target="#Cash_Out" class="btn  btn-Accept text-uppercase fw-bold editBtn">
                            Remove
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

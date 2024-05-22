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
                              <h1 style="font-family:Fira Sans, sans-serif; ">Notifications</h1>
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
                                  <th style="width: 3%" class="text-center">

                                  </th>
                                  <th style="width: 3%"  class="text-center">

                                  </th>
                              </tr>
                          </thead>
                  <tbody>
                  @foreach($Notification as $Notification)
                      <tr >
                          <td>

                            <p style="margin-top:100%;"> 1</p>
                             
                          </td>

                          <td>
                          <div class="row" style="margin-top: 3%;">
                    <div class="col-2">

                        <img src="storage/users-avatar/{{ $Notification->avatar}}" alt="TaskSwap" height="40">
                        </div>
                        <div class="col-6">

                        <p style="margin-top:5%; font-family:Fira Sans, sans-serif; ">{{$Notification->username}}</p>
                        </div>
                    
                          </div>

                          </td>

                          <td>
                            <p style="margin-top: 3%; font-family:Fira Sans, sans-serif; ">
                            {{$Notification->Content}}
                            </p>
                           
                          </td> 

                          <td class="project-actions text-center" style="font-family:Fira Sans, sans-serif; " > 
                          <form method="post" action="{{route('Notification.Decline')}}">
                            @csrf
                            @method('put')
                            <input type="text" name="status" id="status" value="1" hidden>
                            <input type="text" name="id" id="id" value="{{ $Notification->id}}" hidden> 
                          <button type="submit" class="btn btn-special" style="color: white;margin-top: 12%; font-family:Fira Sans, sans-serif; "  data-id="{{$Notification->id}}"    >
                            Accept
                          </button>
                          </form>
  
                          </td>

                          <td class="project-actions text-right">
                          <form method="post" action="{{ route('Notification.Decline') }}">
                            @csrf
                            @method('patch')
                            <input type="text" name="status" id="status" value="2" hidden>
                            <input type="text" name="id" id="id" value="{{ $Notification->id}}" hidden>
                          <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modal-default" style=" color: white;margin-top: 12%; font-family:Fira Sans, sans-serif; ">
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
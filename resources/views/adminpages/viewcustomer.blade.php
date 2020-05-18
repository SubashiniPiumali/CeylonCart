@extends('pageLayouts.adminlayout')

@section('content')
@isset($customerData)
       <div class="row">
           <div class="col-sm-8">
                  <div class="well">
                         
                        
                         <div class="table-responsive">
                            <table class="table">
                            @foreach ($customerData as $customerData)
                            <h4>{{$customerData->name}} <small>- ( Customer )</small></h4>
                            <small>{{$customerData->address}}</small><br>
                              
                              <tr>
                                <td>Name</td>
                                <td>{{$customerData->name}}</td>
                              </tr>
                              <tr>
                                <td>Customer Name</td>
                                <td>{{$customerData->companyname}}</td>
                              </tr>
                              <tr>
                                <td>NIC</td>
                                <td>{{$customerData->nic}}</td>
                              </tr>   
                              <tr>
                                <td>Phone No</td>
                                <td>{{$customerData->phoneNo}}</td>
                              </tr>
                              <tr>
                                <td>E-mail</td>
                                <td>{{$customerData->email}}</td>
                              </tr>
                              <tr>
                                <td>Registered Number</td>
                                <td>{{$customerData->regNo}}</td>
                              </tr>
                             
                              <tr>
                                <td>Address</td>
                                <td>{{$customerData->address}}</td>
                              </tr>
                              <tr>
                                <td>Home Town</td>
                                <td>{{$customerData->homeTown}}</td>
                              </tr> 
                                
                           
                            </table>
                         </div>
                         <a href="/admin/mailbox/{{$customerData->email}}" class="btn btn-primary">Send Email</a>
                         <a href="/admin/removeuser/customer/{{$customerData->customerId}}" class="btn btn-danger" onclick="return confirm('Remove Customer! Are You Sure?');">Remove User</a>
                         
                  </div>
           </div>
           <div class="col-sm-4">
             <div class="">
                
                <img class="img-responsive" style="max-height: 30vh;" src="data:image;base64,{{$customerData->image}}" alt="image"> 
                
              </div>
              @endforeach
           </div>
       </div>
       @endisset   
@endsection
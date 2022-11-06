<!doctype html>
<html lang="en">
  <head>
      @include ('head')
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
          <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        <div>
                    @include('sidebar')
                    @include("navbar")
                      @if ($layout=='index')
                      <section class="col">
                        <div class="content-wrapper">
                          <div class="row">
                                @include('infolist')
                          </div>
                        </div>
                      </section>
                      
                      <section>

                      </section>
            
                      <section class="content">

                              <div class="container-fluid">
                                <!-- Small boxes (Stat box) -->
                                <div class="card card-primary">
                                  <div class="card-header">
                                      @elseif($layout=='create')     
                                        @include('form')
                                  </div>
                              </div>
                      </section>
                      
                      @elseif($layout=='show')
                      <div class="wrapper-content">
                          <div class="container-fluid">
                            <div > 
                           <section class="col">
                             <div class="card">
                              
                               @include('show')
                             </div>
                            </div>
                          </div>
                      </div>
                           </section>

                          <section>
                         </section>
                        
                      @elseif($layout=='edit')
                      <section class="content-wrapper">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-lg-12 col-6">
                              <div class="card">
                                <h5 class="card-header">Edit Your Information </h5>
                                <div class="card-body">
                                  <form class="form-horizontal" action="{{ url('/update/'.$info->id) }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                          <input value="{{$info->name}}" name="name" type="text" class="form-control" id="inputEmail3" placeholder="Input Name" >
                                        </div>  
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Contact Number</label>
                                        <div class="col-sm-10">
                                          <input value="{{$info->number }}"name="number" type="number" class="form-control" id="inputEmail3" placeholder="Input Contact Number" >
                                        </div>  
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Present Address</label>
                                        <div class="col-sm-10">
                                          <input value="{{$info->paddr}}" name="paddr" type="text" class="form-control" id="inputEmail3" placeholder="Input Present Address" >
                                        </div>  
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Present Police Address</label>
                                        <div class="col-sm-10">
                                          <input value="{{$info->ppoliceaddr}}" name="ppoliceaddr" type="text" class="form-control" id="inputEmail3" placeholder="Input Present Police Address" >
                                        </div>  
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Present District</label>
                                        <div class="col-sm-10">
                                          <input value="{{$info->pdist}}" name="pdist" type="text" class="form-control" id="inputEmail3" placeholder="Input Present District" >
                                        </div>  
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Permanent Address</label>
                                        <div class="col-sm-10">
                                          <input value="{{$info->peraddr}}" name="peraddr" type="text" class="form-control" id="inputEmail3" placeholder="Input Permanent Address" >
                                        </div>  
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Permanent Police Address</label>
                                        <div class="col-sm-10">
                                          <input value="{{$info->perpoliceaddr}}" name="perpoliceaddr" type="text" class="form-control" id="inputEmail3" placeholder="Input Permanent Police Address" >
                                        </div>  
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Home Districe</label>
                                        <div class="col-sm-10">
                                          <input value="{{$info->homedist}}" name="homedist" type="text" class="form-control" id="inputEmail3" placeholder="Input Home Districe" >
                                        </div>  
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Occupation</label>
                                        <div class="col-sm-10">
                                          <input value="{{$info->occupation}}" name="occupation" type="text" class="form-control" id="inputEmail3" placeholder="Input Occupation" >
                                        </div>  
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Work Experience</label>
                                        <div class="col-sm-10">
                                          <input type="radio" name="wexp" id="exp" value="yes"> Yes
                                          <input type="radio" name="wexp" id="exp" value="no" checked> No
                                        </div>  
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Age</label>
                                        <div class="col-sm-10">
                                          <input value="{{$info->age}}" name="age" type="number" class="form-control" id="inputEmail3" placeholder="Input Age" >
                                        </div>  
                                      </div>
                                    <div>
                                      <input type="submit" class="btn btn-info" value="Update">
                                       <input type="reset" class="btn btn-warning" value="Reset">
                                    </div>
                                      
                                        </div>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                      </section>
                       <section>
                              
                      </section>

                      @elseif($layout=='view')
                       <div class="container-fluid">
                         <div > 
                        <section class="col">
                          <div class="card">
                            <h5 class="card-header">Edit Your Information </h5>
                          @include('view')
                          </div>
                          </section>
                          <section>
                       </div>
                      </section>
                     </div>
                        
                 @endif
                 <section>
                
                    @include('footer')
                    
                      </div>
                </section>
              
                 
           </div>
    
  </body>
</html>

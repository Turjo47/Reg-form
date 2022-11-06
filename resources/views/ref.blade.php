 <!-- /.content-wrapper -->
               
                <div class="container-fluid">
                  <div>
                        <section>
                          {{-- @include('infolist') --}}
                        </section>
                        <section class="col">
                          <div class="card mb-3">
                            <img src="https://cdn.weatherworksinc.com/blogs/My%20clouds%20900-300.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Registration Form</h5>
                              <form action="{{url('/store')}}" method="post">
                                @csrf
                                {{-- <div class="col-mb-3">
                                  <label>Name</label>
                                  <input name="name" type="text" class="form-control" placeholder="Input Name" >
                                </div> --}}
                                {{-- <div class="mb-3">
                                  <label>Contact Number</label>
                                  <input name="number" type="number" class="form-control" placeholder="Input Conttact Number" >
                                </div> --}}
                                {{-- <div class="mb-3">
                                  <label>Present Address</label>
                                  <input name="paddr" type="text" class="form-control" placeholder="Input Present Address" >
                                </div>
                                <div class="mb-3">
                                  <label>Present Police Address</label>
                                  <input name="ppoliceaddr" type="text" class="form-control" placeholder="Input Present Police Address" >
                                </div> --}}
                                {{-- <div class="mb-3">
                                  <label>Present District</label>
                                  <input name="pdist" type="text" class="form-control" placeholder="Input Present District" >
                                </div> --}}
                                {{-- <div class="mb-3">
                                  <label>Permanent Address</label>
                                  <input name="peraddr" type="text" class="form-control" placeholder="Input Permanent Address" >
                                </div> --}}
                                {{-- <div class="mb-3">
                                  <label>Permanent Police Address</label>
                                  <input name="perpoliceaddr" type="text" class="form-control" placeholder="Input Permanent Police Address" >
                                </div> --}}
                                {{-- <div class="mb-3">
                                  <label>Home Districe</label>
                                  <input name="homedist" type="text" class="form-control" placeholder="Input Home Districe" >
                                </div>
                                <div class="mb-3">
                                  <label>Occupation</label>
                                  <input name="occupation" type="text" class="form-control" placeholder="Input Occupation" >
                                </div>
                                <label>Work Experience</label>
                                <div class="mb-3">
                                  <input type="radio" name="wexp" id="exp" value="yes"> Yes
                                  <input type="radio" name="wexp" id="exp" value="no" checked> No
                                </div> --}}
                                <div class="mb-3">
                                  <label>Age</label>
                                  <input name="age" type="number" class="form-control" placeholder="Input Age" >
                                </div>
                                <div class="mb-3">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                              </form>
                            </div>
                          </div>
                        
                        </section>
                  </div>
                  
                </div>
              @elseif($layout=='show')
              <div class="container-fluid">
                <div class="row">
                  <section class="col">
                    @include('infolist')
                  </section>
                  <section class="col">
            
                  </section>
                </div>
                
              </div>
              @elseif($layout=='edit')
              <div class="container-fluid">
                <div > 
                    <section class="col">
                      
                    </section>
                    <section class="col">
                      <div class="card">
                        <h5 class="card-header">Edit Your Information </h5>
                        <div class="card-body">
                          <form class="form-horizontal">
                            @csrf
                            <div class="card-body">
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                  <input name="name" type="text" class="form-control" id="inputEmail3" placeholder="Input Name" >
                                </div>  
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Contact Number</label>
                                <div class="col-sm-10">
                                  <input name="number" type="number" class="form-control" id="inputEmail3" placeholder="Input Contact Number" >
                                </div>  
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Present Address</label>
                                <div class="col-sm-10">
                                  <input name="paddr" type="text" class="form-control" id="inputEmail3" placeholder="Input Present Address" >
                                </div>  
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Present Police Address</label>
                                <div class="col-sm-10">
                                  <input name="ppoliceaddr" type="text" class="form-control" id="inputEmail3" placeholder="Input Present Police Address" >
                                </div>  
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Present District</label>
                                <div class="col-sm-10">
                                  <input name="pdist" type="text" class="form-control" id="inputEmail3" placeholder="Input Present District" >
                                </div>  
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Permanent Address</label>
                                <div class="col-sm-10">
                                  <input name="peraddr" type="text" class="form-control" id="inputEmail3" placeholder="Input Permanent Address" >
                                </div>  
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Permanent Police Address</label>
                                <div class="col-sm-10">
                                  <input name="perpoliceaddr" type="text" class="form-control" id="inputEmail3" placeholder="Input Permanent Police Address" >
                                </div>  
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Home Districe</label>
                                <div class="col-sm-10">
                                  <input name="homedist" type="text" class="form-control" id="inputEmail3" placeholder="Input Home Districe" >
                                </div>  
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Occupation</label>
                                <div class="col-sm-10">
                                  <input name="occupation" type="text" class="form-control" id="inputEmail3" placeholder="Input Occupation" >
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
                                  <input name="age" type="number" class="form-control" id="inputEmail3" placeholder="Input Age" >
                                </div>  
                              </div>
                            </div>
                          </div>
                        </div>
                       </form>
                        </div>
                      </div>
                    </section>
              </div>
              </div>
              @elseif($layout=='view')
              <div class="container-fluid">
                <div > 
                    <section class="col">
                      
                    </section>
                    <section class="col">
                      <div class="card">
                        <h5 class="card-header">Edit Your Information </h5>
                        @include('view')
                        </div>
                      </div>
                    </section>
              </div>
              </div>
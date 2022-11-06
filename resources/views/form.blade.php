<section class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-6">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Input Your Information Here</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
            <form class="form-horizontal" action="{{ url('/store') }}" method="post">
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
              <div>
                <input type="submit" class="btn btn-info" value="Save">
                 <input type="reset" class="btn btn-warning" value="Reset">
              </div>
                
                  </div>
                </div>
              </div>
            </form>
      

       
      </div>
      </div>
    </div>
  </div>
</section>



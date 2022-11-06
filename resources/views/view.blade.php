<section class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-6">
        <div class="card card-info ">
          <div class="card-header">
            <h3 class="card-title">All Candidates Information</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover wrapper">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Present Address</th>
                    <th scope="col">Present Police Station</th>
                    <th scope="col">Present district</th>
                    <th scope="col">Permanent Address</th>
                    <th scope="col">Permanent Police Station</th>
                    <th scope="col">Home district</th>
                    <th scope="col">Occupation</th>
                    <th scope="col">Work Experience</th>
                    <th scope="col">Age</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($infos as $info)
                  <tr>
                      <td>{{$info->name}}</td>
                      <td>{{$info->number}}</td>
                      <td>{{$info->paddr}}</td>
                      <td>{{$info->ppoliceaddr}}</td>
                      <td>{{$info->pdist}}</td>
                      <td>{{$info->peraddr}}</td>
                      <td>{{$info->perpoliceaddr}}</td>
                      <td>{{$info->homedist}}</td>
                      <td>{{$info->occupation}}</td>
                      <td>{{$info->wexp}}</td>
                      <td>{{$info->age}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>






@include('head')
@include('navbar')
@include('sidebar')
<section class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-6">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">{{$info->name}}'s Information</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="row">Name</th>
                      <th scope="row">Contact Number</th>
                      <th scope="row">Present Address</th>
                      <th scope="row">Present Police Station</th>
                      <th scope="row">Present district</th>
                      <th scope="row">Permanent Address</th>
                      <th scope="row">Permanent Police Station</th>
                      <th scope="row">Home district</th>
                      <th scope="row">Occupation</th>
                      <th scope="row">Work Experience</th>
                      <th scope="row">Age</th>
                    </tr>
                  </thead>
                  <tbody>
                    
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
            
                  </tbody>
                </table>
              </div>
        </div>
        </div>
      </div>
    </div>
  </section>
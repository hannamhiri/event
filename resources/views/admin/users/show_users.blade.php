@extends('master');
@section('content')


<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Events</h5>
            <p>Add lightweight datatables to your project with using the </p>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>User type</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Unity Pugh</td>
                  <td>Unity_Pugh@gmail.com</td>
                  <td>user</td>
                  <td>
                
                    <a href="#" title="Delete" style="margin-left: 10px;">
                      <i class="ri-delete-bin-6-line"></i>
                    </a>
                    <a href="#" title="Show" style="margin-left: 10px;">
                      <i class="bi bi-file-lock2"></i>
                    </a>
                  </td>
                  
                </tr>
                
              
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>


@endsection
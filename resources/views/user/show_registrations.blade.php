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
                  <th>Event title</th>
                  <th>Event owner</th>
                  <th>Category</th>
                  <th>Location</th>
                  <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>webinaire</td>
                  <td>Unity Pugh</td>
                  <td>9958</td>
                  <td>Curicó</td>
                  <td>2005/02/11</td>
                  <td>

                    <a href="#" title="Edit">
                      <i class="ri-edit-2-line" style="color: orange; margin-left: 10px;"></i>
                    </a>
                    <a href="#" title="Delete" style="margin-left: 10px;">
                      <i class="bi bi-trash" ></i>
                    </a>
                    <a href="#" title="Show" style="margin-left: 10px;">
                      <i class="ri-eye-line" style="color:rgb(72, 159, 241);"></i>
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

   <!-- Vertically centered Modal -->
      
  

@endsection
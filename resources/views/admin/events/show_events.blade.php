@extends('master')
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
                  <th>Status</th>
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
                  <td>En cours</td>
                  <td>2005/02/11</td>
                  <td>


                    <a href="#" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                        <i class="bi bi-check2-circle" style="color: rgb(40, 194, 143)"></i>
                      </a>
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
      
      <div class="modal fade" id="verticalycentered" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Accept Or Reject This Event</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Do you want to accept or decline this event ? If you accept, it will be shared.
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-success">Validate</button>
                <button type="submit" class="btn btncolor">Reject</button>
            </div>
          </div>
        </div>
      </div><!-- End Vertically centered Modal-->

   

@endsection
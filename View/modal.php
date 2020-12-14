<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cancel Reservation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="card" id="reserveform">
                 <h3 class="card-header bg-info text-white align-items-center">Cancel Reservation</h3>
                <div class="card-body">
                    <form action="cancelreservationcontroller.php" method="POST">
                                <div class="form-group row">
                                        <label for="nameandemail" class="col-12 col-md-2 col-form-label">Name andPhone</label>
                                    <div class="col-12 col-md-4">
                                        <input type="text" class="form-control" id="nameandphone" name="name" placeholder="Fullname">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input type="number" class="form-control" id="nameandphone" name="phone" placeholder="Phone Number">
                                    </div>
                                    </div>
  
                                <div class="form-group row">
                                        <label for="dateandtime" class="col-12 col-md-2 col-form-label">Date and Session</label>
                                    <div class="col-12 col-md-6">
                                        <input type="date" class="form-control" id="dateandtime" name="date" placeholder="Date">
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input type="text" class="form-control" id="dateandtime" name="session" placeholder="Session">
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="branch" class="col-12 col-md-3 col-form-label">Branch</label>
                                    <div class="col-12 col-md-5">
                                        <input type="text" class="form-control" id="branch" name="branch" placeholder="Branch Name">
                                    </div>
                                    </div>
                                    <div class="form-group row offset-1">
                                                <button type="submit" class="btn btn-primary">Reserve</button>
                                            </div>
                                        </div>
                    </form>
                </div>
             </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h5 class="modal-title" id="exampleModalLabel">Room Reservation</h5>
      </div>
  
      <form action="" method="POST">
      	<div class="modal-body">
          <label for="name">Full Name</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="modal-body">
          <label for="tel">Phone Number</label>
          <input type="text" class="form-control" name="tel">
        </div>
        <div class="modal-body">
          <label for="email">Email address</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="modal-body">
          <label for="room_num">Number of Rooms</label>
          <input type="text" class="form-control" name="room_num">
        </div>
        <div class="modal-body">
          <label for="guest_num">Number of Guests</label>
          <input type="text" class="form-control" name="guest_num">
        </div>
        <div class="modal-body">
        	<label for="start_date">Arrival Date</label>
            <input type="text" name="start_date" class="form-control date" id="date">
      </div>
      <div class="modal-body">
        	<label for="end_date">Departure Date</label>
            <input type="text" name="end_date" class="form-control date" id="date">
      </div>
      <div class="modal-body">
        <button type="submit" class="btn btn-primary" style="float:right">Submit</button>
      </div>
      </form>
      <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
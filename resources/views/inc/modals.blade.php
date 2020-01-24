<!-- Modal -->
<div class="modal fade" style="display:none;" id="reservation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Make a Reservation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="milenia-section milenia-section--no-py milenia-section--stretched-content-no-px">
            <form class="milenia-booking-form milenia-booking-form--style-2">
                <div class="form-group">
                  <div class="form-col form-col--title">
                    <div class="form-control">Book Your Stay</div>
                  </div>
                  <div class="form-col form-col--arrival-date">
                    <div class="form-control">
                     <input type="text" id="start" placeholder="Arrival Date" name="start_date" class=" date start">
                    </div>
                  </div>
                  <div class="form-col form-col--departure-date">
                    <div class="form-control">
                      <label for="booking-form-departure-date-2">Departure Date</label><span class="milenia-field-datepicker milenia-field-datepicker--style-2">Saturday 27th April, 2019</span>
                      <input type="text" id="booking-form-departure-date-2" name="booking-form-arrival-date-2" class="milenia-datepicker milenia-field-datepicker-invoker">
                    </div>
                  </div>
                  <div class="form-col form-col--rooms">
                    <div class="form-control">
                      <label>Rooms</label>
                      <div class="milenia-custom-select">
                        <select data-default-text="1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-col form-col--adults">
                    <div class="form-control">
                      <label>Adults</label>
                      <div class="milenia-custom-select">
                        <select data-default-text="1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-col form-col--children">
                    <div class="form-control">
                      <label>Children</label>
                      <div class="milenia-custom-select">
                        <select data-default-text="1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-col form-col--action">
                    <div class="form-control">
                      <button type="submit" class="milenia-btn milenia-btn--huge milenia-btn--scheme-primary">Check Availability</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
              </form>
        </div>
              <!--================ End of Search Form ================-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary form-control" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <div class="container">
        <div class="row">
            <div class='col-sm-6'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <span class="fa fa-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>

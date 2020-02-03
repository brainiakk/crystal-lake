                                <h5 class="mb-3">General Info</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputEmail4">Event Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ old("title",$event->title) }}"  id="inputEmail4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="inputPassword4">Event Image</label>
                                    <input type="file" name="image" class="form-control" value="{{ old("image",$event->image) }}"  id="inputPassword4" placeholder="Event Image">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputVenue">Venue</label>
                                    <input id="inputVenue" type="text" name="venue" value="{{ old("venue",$event->venue) }}"  class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="inputPrice">Price</label>
                                    <input id="inputPrice" type="text" name="price" value="{{ old("price",$event->price) }}"  class="form-control">
                                    </div>
                                </div>

                                <h5 class="my-4">Description</h5>
                                <div class="form-row">
                                    <textarea name="desc" rows="10" value="{{ old("desc",$event->desc) }}"  class="form-control">{{ old("desc",$event->desc) }}</textarea>
                                </div>
                                <h5 class="my-4">Date and time</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Event Starts</label>
                                        <input type="text" class="form-control start_date" name="start_date" value="{{ old("start_date",$event->start_date) }}"  id="inputPassword4" placeholder="" data-provide="datepicker">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Event Ends</label>
                                        <input type="text" class="form-control end_date" name="end_date" value="{{ old("end_date",$event->end_date) }}"  id="inputPassword4" placeholder="" data-provide="datepicker">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Start Time</label>
                                        <input type="text" class="form-control" name="start_time" value="{{ old("start_time",$event->start_time) }}" id="inputPassword4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">End Time</label>
                                        <input type="text" class="form-control" name="end_time" value="{{ old("end_time",$event->end_time) }}"  id="inputPassword4" placeholder="">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="status" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Publish
                                    </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Publish Event</button>

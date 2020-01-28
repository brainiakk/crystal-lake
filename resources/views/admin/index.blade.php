@extends('layouts.admin')
@section('title', 'Create Event')
@section('content')
 <div class="content-body">
            <!-- row -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Event</h4>
                    </div>
                    <div class="card-body">
                        <div class="create-event-form">
                            <form action="#">
                                <h5 class="mb-3">General Info</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputEmail4">Event Title</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="inputPassword4">Organizer</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputCity">Location</label>
                                    <input id="inputState" class="form-control">
                                    </select>
                                </div>

                                <h5 class="my-4">Date and time</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Event Starts</label>
                                        <input type="text" class="form-control start_date" id="inputPassword4" placeholder="" data-provide="datepicker">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Event Ends</label>
                                        <input type="text" class="form-control end_date" id="inputPassword4" placeholder="" data-provide="datepicker">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Event Ends</label>
                                        <input type="text" class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">End Time</label>
                                        <input type="text" class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check me out
                                    </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

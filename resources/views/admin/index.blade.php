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
                            @if (Session::has('success') )
                            <div class="alert alert-info alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ Session::get('success') }}</strong>
                            </div>
                            @elseif (Session::has('error') )
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ Session::get('error') }}</strong>
                            </div>
                            @endif
                            <form action="{{ route('store.event') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <h5 class="mb-3">General Info</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputEmail4">Event Title</label>
                                    <input type="text" name="title" class="form-control" id="inputEmail4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="inputPassword4">Event Image</label>
                                    <input type="file" name="image" class="form-control" id="inputPassword4" placeholder="Event Image">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputCity">Location</label>
                                    <input id="inputState" type="text" name="venue" class="form-control">
                                    </select>
                                </div>

                                <h5 class="my-4">Description</h5>
                                <div class="form-row">
                                    <textarea name="desc" rows="10" class="form-control"></textarea>
                                </div>
                                <h5 class="my-4">Date and time</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Event Starts</label>
                                        <input type="text" class="form-control start_date" name="start_date" id="inputPassword4" placeholder="" data-provide="datepicker">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Event Ends</label>
                                        <input type="text" class="form-control end_date" name="end_date" id="inputPassword4" placeholder="" data-provide="datepicker">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Start Time</label>
                                        <input type="text" class="form-control" name="start_time" id="inputPassword4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">End Time</label>
                                        <input type="text" class="form-control" name="end_time" id="inputPassword4" placeholder="">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="status" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Publish Event
                                    </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Publish Event</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

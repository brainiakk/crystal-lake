@extends('layouts.admin')
@section('title', 'Edit Event')
@section('content')
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
                            <form action="{{ route('update.event', $event->event_id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            @include('admin.eform')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

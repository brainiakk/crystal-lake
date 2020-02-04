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
                            <form action="{{ route('update.event') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('admin.eform')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

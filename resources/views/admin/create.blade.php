@extends('layouts.admin')
@section('title', 'Create Event')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Event</h4>
                    </div>
                    <div class="card-body">
                        <div class="create-event-form">
                            <form action="{{ route('store.event') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('admin.eform', ['event' => new \App\Events()])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

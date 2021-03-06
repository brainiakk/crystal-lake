@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')
            <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Events</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                    @if (count($events) > 0)
                                <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Deadline</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($events as $event)
                                    <tr>
                                        <td>{{ $event->title }}</td>
                                        <td>{{ $event->price }}</td>
                                        <td>{{ $event->end_date->format('M D Y').' by '. $event->end_time }}</td>
                                        <td>
                                            @if ($event->status < 1)
                                                <span class="badge badge-warning">Not Published</span>
                                            @elseif ($event->status > 0)
                                                <span class="badge badge-success">Published</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span>
                                                <a href="{{ url('/admin/edit', $event->event_id) }}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit Event">
                                                    <i class="fa fa-pencil color-muted"></i>
                                                </a>
                                                @if ($event->user_id == \Auth::id())
                                                <a href="{{ url('/admin/delete', $event->event_id) }}" data-toggle="tooltip" data-placement="top" title="Delete Event">
                                                    <i class="fa fa-close color-danger"></i>
                                                </a>

                                                @endif
                                            </span>
                                        </td>
                                    </tr>
                                        @endforeach
                                        <div class="pagination">{!! $events->links() !!}</div>
                                </tbody>
                                    @else
                                    <tr>
                                        <h6>No Event Created Yet - <a href="{{ url('/admin/create_events') }}" style="color: orange;"> Create New Event</a></h6>
                                    </tr>
                                    @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

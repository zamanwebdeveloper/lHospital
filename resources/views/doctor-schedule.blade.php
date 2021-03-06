@extends('master.master')
@section('content')

<section class="content page-calendar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-4 col-xl-3">
                <div class="card m-t-20">
                    <div class="body">
                        <button type="button" class="btn btn-raised btn-primary btn-sm m-t-0" data-toggle="modal" href="#cal-new-event"> <i class="zmdi zmdi-plus"></i> Events</button>                        
                        <div class="event-name b-greensea"> The Custom Event #1 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-lightred"> The Custom Event #2 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-amethyst"> The Custom Event #3 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-amethyst"> The Custom Event #4 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-success"> The Custom Event #5 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-lightred"> The Custom Event #6 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-greensea"> The Custom Event #7 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-success"> The Custom Event #8 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-success"> The Custom Event #9 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-primary"> The Custom Event #10 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="card m-t-20">
                    <div class="body">
                        <button class="btn btn-raised btn-success btn-sm m-r-0 m-t-0" id="change-view-today">today</button>
                        <button class="btn btn-raised btn-default btn-sm m-r-0 m-t-0" id="change-view-day" >Day</button>
                        <button class="btn btn-raised btn-default btn-sm m-r-0 m-t-0" id="change-view-week">Week</button>
                        <button class="btn btn-raised btn-default btn-sm m-r-0 m-t-0" id="change-view-month">Month</button>                        
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

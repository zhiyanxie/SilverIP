@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-sm-offset-2 col-sm-8">
            @if (count($apartments) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <P>WELCOME</P>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped apartment-table">
                            <tbody>
                            @foreach ($apartments as $apartment)
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img class="media-object" src="http://i42.tinypic.com/2hef1j5.jpg" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{ $apartment->name }}</h4>
                                        <h5>Rent:   ${{$apartment->price}}/month</h5>
                                        <h5>Size:   {{$apartment->max}} bedrooms</h5>
                                        <h5>Availability: {{$apartment->max-$apartment->current}} left!</h5>

                                        Description:{{$apartment->description}}
                                    </div>
                                </div>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $apartments->links()!!}
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="form-group">


                    <a  href="{{route("create")}}" class="btn btn-default">
                        <i class="fa fa-btn fa-plus"></i>Add Apartment
                    </a>

            </div>

            <!-- Current apartments -->
            @if (count($apartments) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current apartments
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped apartment-table">
                            <thead>
                            <th>apartment</th>
                            <th>&nbsp;</th>
                            </thead>
                            <tbody>
                            @foreach ($apartments as $apartment)
                                <tr>
                                    <!--apartment name-->
                                    <td class="table-text"><div>name:   {{ $apartment->name }}</div></td>
                                    <!--apartment price-->
                                    <td class="table-tex"><div>price:   {{$apartment->price}}$</div></td>
                                    <!--apartment current live-->
                                    <td class="table-tex"><div>availability:   {{$apartment->current}}/{{$apartment->max}}</div></td>
                                    <!-- apartment Delete Button -->
                                    <td>
                                        <form action="/apartment/{{ $apartment->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" id="delete-apartment-{{ $apartment->id }}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                    <!-- apartment Edit Button -->
                                    <td>
                                        <form action="/apartment/{{ $apartment->id }}/edit" method="GET">
                                            {{ csrf_field() }}
                                            {{ method_field('GET') }}

                                            <button type="submit" id="edit-apartment-{{ $apartment->id }}" class="btn btn-default">
                                                <i class="fa fa-btn fa-pencil"></i>Edit
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
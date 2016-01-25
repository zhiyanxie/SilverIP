@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New apartment
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                            <!-- New apartment Form -->
                    <form action="/apartment" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                                <!-- apartment Name -->
                        <div class="form-group">
                            <label for="apartment-name" class="col-sm-3 control-label">apartment</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="apartment-name" class="form-control" value="{{ old('apartment') }}">
                            </div>
                        </div>

                        <!-- apartment Price -->

                        <div class="form-group">
                            <label for="apartment-price" class="col-sm-3 control-label">price</label>

                            <div class="col-sm-6">
                                <input type="number" name="price" id="apartment-price" class="form-control" value="{{ old('apartment.price') }}">
                            </div>
                        </div>

                        <!-- apartment description -->

                        <div class="form-group">
                            <label for="apartment-description" class="col-sm-3 control-label">description</label>

                            <div class="col-sm-6">
                                <input type="text" name="description" id="apartment-description" class="form-control" value="{{ old('apartment') }}">
                            </div>
                        </div>

                        <!-- apartment max -->

                        <div class="form-group">
                            <label for="apartment-max" class="col-sm-3 control-label">Capacity:</label>
                            <div class="col-sm-6">
                                <select type="number" name="max" id="apartment-max" class="form-control" value="1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                 </select>
                            </div>

                        </div>
                        <!-- apartment current -->
                        <input type="hidden" name="current" id="apartment-current" class="form-control" value="0">

                        <!-- Add apartment Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add apartment
                                </button>
                                <a  href="{{route('index')}} " class="btn btn-default">
                                    <i class="fa fa-btn fa-ban"></i>Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
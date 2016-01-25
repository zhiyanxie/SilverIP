@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit apartment
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                            <!-- New apartment Form -->
                    <form action="/apartment/{{ $apartment->id }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                                <!-- apartment Name -->
                        <div class="form-group">
                            <label for="apartment-name" class="col-sm-3 control-label">apartment</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="apartment-name" class="form-control" value="{{ old('name',$apartment->name)}}">
                            </div>
                        </div>

                        <!-- apartment Price -->

                        <div class="form-group">
                            <label for="apartment-price" class="col-sm-3 control-label">price</label>

                            <div class="col-sm-6">
                                <input type="number" name="price" id="apartment-price" class="form-control" value="{{ old('price',$apartment->price)}}">
                            </div>
                        </div>

                        <!-- apartment description -->

                        <div class="form-group">
                            <label for="apartment-description" class="col-sm-3 control-label">description</label>

                            <div class="col-sm-6">
                                <input type="text" name="description" id="apartment-description" class="form-control" value="{{ old('description',$apartment->description)}}">
                            </div>
                        </div>
                        <!--apartment now -->
                        <div class="form-group">
                            <label for="apartment-current" class="col-sm-3 control-label">Resident:</label>
                            <div class="col-sm-6">
                                <select  name="current" id="apartment-current" class="form-control">
                                    <option  <?php if(($apartment->current) == '0'){echo("selected");}?> value="0">0</option>
                                    <option  <?php if(($apartment->current) == '1'){echo("selected");}
                                             if(($apartment->max) < '1'){echo('style="display:none;"');}
                                             ?> value="1">1</option>
                                    <option  <?php if(($apartment->current)== '2'){echo("selected");}
                                             if(($apartment->max) < '2'){echo('style="display:none;"');}?> value="2">2</option>
                                    <option  <?php if(($apartment->current) == '3'){echo("selected");}
                                             if(($apartment->max) < '3'){echo('style="display:none;"');}?> value="3">3</option>
                                    <option  <?php if(($apartment->current)== '4'){echo("selected");}
                                             if(($apartment->max) < '4'){echo('style="display:none;"');}?> value="4">4</option>
                                </select>
                            </div>

                        </div>


                        <!-- apartment max -->

                        <div class="form-group">
                            <label for="apartment-max" class="col-sm-3 control-label">Capacity:</label>
                            <div class="col-sm-6" style="text-align: center">
                               {{$apartment->max}}
                            </div>

                        </div>

                        <!-- Add apartment Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Update
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
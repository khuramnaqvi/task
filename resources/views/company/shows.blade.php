@extends('company.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('company.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row text-center bg-clr m-3" style="padding: 5%">
        <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                <strong class="text-manage" >name:</strong>
            <input  type="text" class="show"  name="name"  value=" {{ $data->name }}">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="text-manage">email:</strong>
                <input  type="text" class="show"  name="email"  value=" {{ $data->email }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="text-manage">logo:</strong>
                <input  type="file" class="show"  name="logo"  value=" {{ $data->logo }}">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="text-manage">website:</strong>
                <input  type="text" class="show"  name="website"  value=" {{ $data->website }}">

            </div>
        </div>

    </div>

    @endsection


{{-- <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Adress:</strong>
        {{ $data->adress }}
    </div>
</div> --}}

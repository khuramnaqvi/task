@extends('employee.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Records Display</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row text-center bg-clr m-3" style="padding: 5%">
        <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                <strong class="text-manage" >FirstName:</strong>
            <input  type="text" class="show"  name="FirstName"  value=" {{ $data->FirstName }}">
            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong class="text-manage" >LastName:</strong>
                <input  type="text" class="show" name="LastName"  value=" {{ $data->LastName }}">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="text-manage">company:</strong>
                <input  type="text" class="show"  name="company"  value=" {{ $data->company }}">

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
                <strong  class="text-manage">phone:</strong>
                <input  type="text" class="show"  name="phone"  value=" {{ $data->phone }}">

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

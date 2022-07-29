@extends('company.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb text-center ">
            <div class="pull-left">
                <h1>Edit Data</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary mt-2 px-4" href="{{ route('company.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('company.update',$data->id) }}" method="POST">
        @csrf



         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mt-3">
                    <strong class="text-manage">name:</strong>
                    <input type="text" name="name" value="{{ $data->name }}" class="form-control show" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-manage">email:</strong>
                    <input type="text" name="email" value="{{ $data->email }}" class="form-control show"  placeholder="email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-manage">logo:</strong>
                    <input type="file" name="logo" value="{{ $data->logo }}" class="form-control show"  >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-manage">website:</strong>
                    <input type="text" name="website" value="{{ $data->website }}" class="form-control show"  placeholder="website">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary px-4">Submit</button>
            </div>
        </div>

    </form>
@endsection

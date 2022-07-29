@extends('employee.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb text-center ">
            <div class="pull-left">
                <h1>Edit Data</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary mt-2 px-4" href="{{ route('employee.index') }}"> Back</a>
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

    <form action="{{ url('employee.update',$data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf


         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mt-3">
                    <strong class="text-manage">FirstName:</strong>
                    <input type="text" name="FirstName" value="{{ $data->FirstName }}" class="form-control show" placeholder="FirstName">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-manage">LastName:</strong>
                    <input type="text" name="class" value="{{ $data->LastName }}" class="form-control show" placeholder="LastName">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-manage">company:</strong>
                    <input type="text" name="adress" value="{{ $data->company }}" class="form-control show"  placeholder="company">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-manage">email:</strong>
                    <input type="text" name="adress" value="{{ $data->email }}" class="form-control show"  placeholder="email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-manage">phone:</strong>
                    <input type="text" name="adress" value="{{ $data->phone }}" class="form-control show"  placeholder="phone">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary px-4">Submit</button>
            </div>
        </div>

    </form>
@endsection

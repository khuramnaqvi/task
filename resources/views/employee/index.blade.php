@extends('employee.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Employee Table</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route ('employee.create')}}">create new employee</a>
                        </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered table-striped" >
        <tr>

            <th>FirstName</th>
            <th>LastName</th>
            <th>company</th>
            <th>email</th>
            <th>phone</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($data as $data)


        <tr>
            {{-- <td>{{ ++$i }}</td> --}}

            <td>{{ $data->FirstName }}</td>
            <td>{{ $data->LastName }}</td>
            <td>{{ $data->company }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->phone }}</td>


            <td>
                <form action="{{ route('delete',$data->id) }}" method="POST">

                    <a class="btn btn-info" href="{{url('show',$data->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{url('edit',$data->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>


        </tr>

        @endforeach

    </table>
{{--
    {!! $data->render() !!} --}}
</div>
    {{-- {!! $data ->links() !!} --}}

@endsection

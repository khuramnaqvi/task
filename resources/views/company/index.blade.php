@extends('company.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>company Table</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success m-3" href="{{ route('company.create') }}"> Create New Data</a>
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

            <th>Name</th>
            <th>email</th>
            <th>logo</th>
            <th>website</th>


            <th width="280px">Action</th>
        </tr>

        @foreach ($data as $data)


        <tr>
            {{-- <td>{{ ++$i }}</td> --}}

            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            {{-- <td>{{ $data->logo }}</td> --}}
            {{-- <td class="text-center"><img src="/logo/{{$data->logo}}" width="50px" alt=""></td> --}}
            {{-- <td> <img src="/logo/{{ $data->logo }}" width="50px" alt="" class="img-fluid"></td> --}}
              {{-- /  <h1 class="text-center" ><img src="/image/{{$data->logo}}" width="30%" alt=""></h1> --}}
              <td>
                <img src="{{ url('public/logo/'.$data->logo) }}" style="height: 100px; width: 100px;">
             </td>
            <td>{{ $data->website }}</td>




            <td>
                <form action="{{ route('delete',$data->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('company.shows',$data->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('company.edit',$data->id) }}">Edit</a>

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

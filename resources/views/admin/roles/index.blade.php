@extends('adminlte::page')

@section('breadcrumbs', Breadcrumbs::render('roles.index'))

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Ролларни бошқариш</h2>

        </div>

        <div class="pull-right">

        @can('role-list')

            <a class="btn btn-success" href="{{ route('roles.create') }}"> Қўшиш</a>

            @endcan

        </div>

    </div>

</div>


@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif


<table class="table table-bordered">

  <tr>

     <th>No</th>

     <th>Номи</th>

     <th width="280px">Амаллар</th>

  </tr>

    @foreach ($roles as $key => $role)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $role->name }}</td>

        <td>

            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Кўриш</a>

            @can('role-list')

                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Таҳрирлаш</a>

            @endcan

            @can('role-list')

                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}

                    {!! Form::submit('Ўчириш', ['class' => 'btn btn-danger']) !!}

                {!! Form::close() !!}

            @endcan

        </td>

    </tr>

    @endforeach

</table>


{!! $roles->render() !!}


@endsection
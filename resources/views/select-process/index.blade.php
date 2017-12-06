@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                @if(Session::has('success_message'))
                    <p class="alert {{ Session::get('success-class', 'alert-success') }}">{{ Session::get('success_message') }}</p>
                @endif
                @if(Session::has('error_message'))
                    <p class="alert {{ Session::get('success-class', 'alert-success') }}">{{ Session::get('error_message') }}</p>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Processos Seletivos</div>
                    <div class="panel-body">
                        <a href="{{ url('/select-process/create') }}" class="btn btn-success btn-sm" title="Add New SelectProcess">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/select-process') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>N°</th><th>Nome</th><th>Data Inicial</th><th>Data Final</th><th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($selectprocess as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td><td>{{ $item->nome }}
                                        <td>{{ $item->dataInicio }}</td><td>{{ $item->dataFim }}</td>
                                        <td>
                                            <a href="{{ url('/select-process/' . $item->id) }}" title="View SelectProcess"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                             <!--<a href="{{ url('/select-process/' . $item->id . '/edit') }}" title="Edit SelectProcess"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                             <form method="POST" action="{{ url('/select-process' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-xs" title="Delete SelectProcess" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form> -->
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $selectprocess->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

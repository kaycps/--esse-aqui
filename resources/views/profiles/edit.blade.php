@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Perfil</div>
                    <div class="panel-body">
                        <a href="{{ url('/home') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/profile/' . $profile->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

<<<<<<< HEAD
<<<<<<< HEAD
                            @include ('profiles.form')
=======
                            @include ('profiles.form', ['submitButtonText' => 'Atualizar'])
>>>>>>> c2d9fad1997c5247c08dd29d1c45c6d6a12ce99f
=======
                            @include ('profiles.form', ['submitButtonText' => 'Atualizar'])
>>>>>>> c2d9fad1997c5247c08dd29d1c45c6d6a12ce99f

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

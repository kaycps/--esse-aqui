@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        @if (session('messageAdmin'))
            <div class="alert alert-warning">
            {{ session('messageAdmin') }}
            </div>
        @endif
        @if(Session::has('flash_message'))
            <p class="alert {{ Session::get('success-class', 'alert-success') }}">{{ Session::get('flash_message') }}</p>
        @endif
        @if(Session::has('message'))
            <p class="alert {{ Session::get('success-class', 'alert-success') }}">{{ Session::get('message') }}</p>
        @endif
            <div class="panel panel-default">
            
                <div class="panel-heading">Seja Bem Vindo</div>
                

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <h3>Página do Administrador</h3>
                        <br>
                        
                        
                        <a href="{{ url('select-process') }}" class="btn btn-success btn-lg btn-block" role="button">Ver Editais Cadastrados</a>

                         <a href="{{ url('career') }}" class="btn btn-success btn-lg btn-block" role="button">Cadastrar Cursos</a>

                         <a href="{{ url('quota') }}" class="btn btn-success btn-lg btn-block" role="button" >Cadastrar Cotas</a>

                         <a href="{{ url('special-need') }}" class="btn btn-success btn-lg btn-block" role="button" >Cadastrar Necessidades Especiais</a>
                    </div>
                   
                     
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

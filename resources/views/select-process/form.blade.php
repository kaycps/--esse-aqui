<div class="form-group {{ $errors->has('dataInicio') ? 'has-error' : ''}}">
    <label for="dataInicio" class="col-md-4 control-label">{{ 'Data Inicial' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dataInicio" type="date" id="dataInicio" value="{{ $selectprocess->dataInicio or ''}}" >
        {!! $errors->first('dataInicio', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('dataFim') ? 'has-error' : ''}}">
    <label for="dataFim" class="col-md-4 control-label">{{ 'Data Final' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dataFim" type="date" id="dataFim" value="{{ $selectprocess->dataFim or ''}}" >
        {!! $errors->first('dataFim', '<p class="help-block">:message</p>') !!}
    </div>
</div>       
    
<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="col-md-4 control-label">{{ 'Nome' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nome" type="text" id="nome" value="{{ $selectprocess->nome or ''}}" >
        {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('descrição') ? 'has-error' : ''}}">
    <label for="descrição" class="col-md-4 control-label">{{ 'Descrição' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="descrição" type="text" id="descrição" value="{{ $selectprocess->descrição or ''}}" >
        {!! $errors->first('descrição', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<hr />
<h3>Cursos</h3>

@foreach($career as $c)
    <div class="form-group ">
        <label for="curso" class="col-md-4 control-label"></label>
        <div class="col-md-6">
            <input type="checkbox" name="cursos[{{$c->id}}][id]" value="{{$c->id}}" />
            <label>{{ $c->nome }}</label>
        </div>
    </div>

    <div class="form-group">
        <label for="vagas" class="col-md-4 control-label">{{ 'Vagas' }}</label>
        <div class="col-md-1">
            <input class="form-control" name="cursos[{{$c->id}}][vagas]" type="text" id="descrição" />        
        </div>
    </div>

    <hr />

@endforeach

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
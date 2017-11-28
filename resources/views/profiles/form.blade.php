<div class="col-md-6 form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="col-md-2 control-label">{{ 'Nome' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nome" type="text" id="nome" value="{{ $profile->nome or ''}}" >
        {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="col-md-6 form-group {{ $errors->has('rg') ? 'has-error' : ''}}">
    <label for="rg" class="col-md-2 control-label">{{ 'RG' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="rg" type="text" id="rg" value="{{ $profile->rg or ''}}" >
        {!! $errors->first('rg', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="col-md-5 form-group {{ $errors->has('cpf') ? 'has-error' : ''}}">
    <label for="cpf" class="col-md-2 control-label">{{ 'CPF' }}</label>
    <div class="col-md-5">
        <input class="form-control" name="cpf" type="text" id="cpf" value="{{ $profile->cpf or ''}}" >
        {!! $errors->first('cpf', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="col-md-6 form-group {{ $errors->has('dataNascimento') ? 'has-error' : ''}}">
    <label for="dataNascimento" class="col-md-5 control-label">{{ 'Data de nascimento' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dataNascimento" type="date" id="dataNascimento" value="{{ $profile->dataNascimento or ''}}" >
        {!! $errors->first('dataNascimento', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="col-md-6 form-group {{ $errors->has('sexo') ? 'has-error' : ''}}">
    <label for="sexo" class="col-md-2 control-label">{{ 'Sexo' }}</label>
    <div class="col-md-2">
        <input class="form-control" name="sexo" type="text" id="sexo" value="{{ $profile->sexo or ''}}" >
        {!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nomePai') ? 'has-error' : ''}}">
    <label for="nomePai" class="col-md-2 control-label">{{ 'Nome do pai' }}</label>
    <div class="col-md-2">
        <input class="form-control" name="nomePai" type="text" id="nomePai" value="{{ $profile->nomePai or ''}}" >
        {!! $errors->first('nomePai', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nomeMãe') ? 'has-error' : ''}}">
    <label for="nomeMãe" class="col-md-2 control-label">{{ 'Nome da mãe' }}</label>
    <div class="col-md-2">
        <input class="form-control" name="nomeMãe" type="text" id="nomeMãe" value="{{ $profile->nomeMãe or ''}}" >
        {!! $errors->first('nomeMãe', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('passaporte') ? 'has-error' : ''}}">
    <label for="passaporte" class="col-md-2 control-label">{{ 'Passaporte' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="passaporte" type="text" id="passaporte" value="{{ $profile->passaporte or ''}}" >
        {!! $errors->first('passaporte', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('naturalidade') ? 'has-error' : ''}}">
    <label for="naturalidade" class="col-md-2 control-label">{{ 'Naturalidade' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="naturalidade" type="text" id="naturalidade" value="{{ $profile->naturalidade or ''}}" >
        {!! $errors->first('naturalidade', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('telefone') ? 'has-error' : ''}}">
    <label for="telefone" class="col-md-2 control-label">{{ 'Telefone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="telefone" type="text" id="telefone" value="{{ $profile->telefone or ''}}" >
        {!! $errors->first('telefone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('escolaridade') ? 'has-error' : ''}}">
    <label for="escolaridade" class="col-md-2 control-label">{{ 'Escolaridade' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="escolaridade" type="text" id="escolaridade" value="{{ $profile->escolaridade or ''}}" >
        {!! $errors->first('escolaridade', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('emissorrg') ? 'has-error' : ''}}">
    <label for="emissorrg" class="col-md-2 control-label">{{ 'Emissor rg' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="emissorrg" type="text" id="emissorrg" value="{{ $profile->emissorrg or ''}}" >
        {!! $errors->first('emissorrg', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-2">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>

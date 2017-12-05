<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="col-md-4 control-label">{{ 'Nome' }}</label>
    <div class="col-md-6 ">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-user">
                </i>
            </div>
            <input class="form-control" name="nome" type="text" id="nome" value="{{ $profile->nome or ''}}" >
            {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
        </div></div>
    
</div><div class="form-group {{ $errors->has('RG') ? 'has-error' : ''}}">
    <label for="RG" class="col-md-4 control-label">{{ 'Rg' }}</label>
    <div class="col-md-3">
        <input class="form-control" name="RG" type="text" id="RG" value="{{ $profile->rg or ''}}" >
        {!! $errors->first('rg', '<p class="help-block">:message</p>') !!}
    </div>
    
</div><div class="form-group {{ $errors->has('CPF') ? 'has-error' : ''}}">
    <label for="CPF" class="col-md-4 control-label">{{ 'Cpf' }}</label>
    <div class="col-md-3">
        <input class="form-control" name="CPF" type="text" id="CPF" value="{{ $profile->cpf or ''}}" >
        {!! $errors->first('cpf', '<p class="help-block">:message</p>') !!}
    </div>
    
</div><div class="form-group {{ $errors->has('DataNascimento') ? 'has-error' : ''}}">
    <label for="DataNascimento" class="col-md-4 control-label">{{ 'Data de nascimento' }}</label>
    <div class="col-md-4">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-birthday-cake">
                </i>
            </div>
        <input class="form-control" name="DataNascimento" type="date" id="DataNascimento" value="{{ $profile->dataNascimento or ''}}" >
        {!! $errors->first('dataNascimento', '<p class="help-block">:message</p>') !!}
        </div></div>
    
</div><div class="form-group {{ $errors->has('Sexo') ? 'has-error' : ''}}">
    <label for="Sexo" class="col-md-4 control-label">{{ 'Sexo' }}</label>
    <div class="col-md-4">
        <input class="form-control" name="Sexo" type="text" id="Sexo" value="{{ $profile->sexo or ''}}" >
        {!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
    </div>
    
</div><div class="form-group {{ $errors->has('NomePai') ? 'has-error' : ''}}">
    <label for="NomePai" class="col-md-4 control-label">{{ 'Nome do pai' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="NomePai" type="text" id="NomePai" value="{{ $profile->nomePai or ''}}" >
        {!! $errors->first('nomePai', '<p class="help-block">:message</p>') !!}
    </div>
    
</div><div class="form-group {{ $errors->has('NomeMãe') ? 'has-error' : ''}}">
    <label for="NomeMãe" class="col-md-4 control-label">{{ 'Nome da mãe' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="NomeMãe" type="text" id="NomeMãe" value="{{ $profile->nomeMãe or ''}}" >
        {!! $errors->first('nomeMãe', '<p class="help-block">:message</p>') !!}
    </div>
    
</div><div class="form-group {{ $errors->has('Passaporte') ? 'has-error' : ''}}">
    <label for="Passaporte" class="col-md-4 control-label">{{ 'Passaporte' }}</label>
    <div class="col-md-4">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-plane">
                </i>
            </div>
        <input class="form-control" name="Passaporte" type="text" id="Passaporte" value="{{ $profile->passaporte or ''}}" >
        {!! $errors->first('passaporte', '<p class="help-block">:message</p>') !!}
        </div></div>
    
</div><div class="form-group {{ $errors->has('Naturalidade') ? 'has-error' : ''}}">
    <label for="Naturalidade" class="col-md-4 control-label">{{ 'Naturalidade' }}</label>
    <div class="col-md-6">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-star">
                </i>
            </div>
        <input class="form-control" name="Naturalidade" type="text" id="Naturalidade" value="{{ $profile->naturalidade or ''}}" >
        {!! $errors->first('naturalidade', '<p class="help-block">:message</p>') !!}
        </div></div>
    
</div><div class="form-group {{ $errors->has('Telefone') ? 'has-error' : ''}}">
    <label for="Telefone" class="col-md-4 control-label">{{ 'Telefone' }}</label>
    <div class="col-md-5">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-phone">
                </i>
            </div>
        <input class="form-control" name="Telefone" type="text" id="Telefone" value="{{ $profile->telefone or ''}}" >
        {!! $errors->first('telefone', '<p class="help-block">:message</p>') !!}
        </div></div>
    
</div><div class="form-group {{ $errors->has('Escolaridade') ? 'has-error' : ''}}">
    <label for="Escolaridade" class="col-md-4 control-label">{{ 'Escolaridade' }}</label>
    <div class="col-md-6">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-book">
                </i>
            </div>
        <input class="form-control" name="Escolaridade" type="text" id="Escolaridade" value="{{ $profile->escolaridade or ''}}" >
        {!! $errors->first('escolaridade', '<p class="help-block">:message</p>') !!}
        </div></div>
    
</div><div class="form-group {{ $errors->has('EmissorRG') ? 'has-error' : ''}}">
    <label for="EmissorRG" class="col-md-4 control-label">{{ 'Emissor rg' }}</label>
    <div class="col-md-4">
        <input class="form-control" name="EmissorRG" type="text" id="EmissorRG" value="{{ $profile->emissorRG or ''}}" >
        {!! $errors->first('emissorRG', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- -- começo -->
<div class="form-group ">
    <label  class="col-md-4 control-label">{{'Necessidades Especiais'}}</label>

<div class="form-group ">
    <label  class="col-md-4 control-label"></label>
    <div class="col-md-4">Possui necessidades? <br>
       
    </div>
    <br>   
</div>

@foreach($specialneed as $sp)
    <div class="form-group ">
        <label for="curso" class="col-md-4 control-label"></label>
        <div class="col-md-6">
            <input type="checkbox" name="specialNeed[{{$sp->id}}][id]" value="{{$sp->id}}" />
            <label>{{ $sp->descrição }}</label>
        </div>
    </div>

   <div class="form-group ">
    <label  class="col-md-4 control-label"></label>
    <div class="col-md-4">Permanente<br>
        <label class="radio-inline">
            <input type="radio" name="specialNeed[{{$sp->id}}][permanente]" id="sim" value="1" >
            Sim            
        </label>
    </div>
    <br>
    <div class="col-md-4">
        <label class="radio-inline">
            <input type="radio" name="specialNeed[{{$sp->id}}][permanente]" id="nao" value="0" checked="checked"  >
            Não
        </label>        
    </div>
</div>



<div class="form-group">
    <label for="Telefone" class="col-md-4 control-label">{{ 'Observação' }}</label>
    <div class="col-md-5">
        <div class="input-group">
            
        <input class="form-control" name="specialNeed[{{$sp->id}}][observação]" type="text" id="observação"  >
        
        </div>
    </div>
<hr/> 
</div>   

@endforeach




<div class="form-group">
    <label class="col-md-4 control-label"></label>
    <div class="col-md-4">
        <button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Enviar</button>
        <a href="/home" class="btn btn-danger" value=""><span class="fa fa-times"></span> Cancelar</a>
    </div>    
</div>


<script type="js/jquery.js"></script>
<script type="js/bootstrap.min.js"></script>


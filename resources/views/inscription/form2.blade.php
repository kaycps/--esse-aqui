
@if(Auth::user()->admin==1)
<div class="form-group {{ $errors->has('dataPagamento') ? 'has-error' : ''}}">
    <label for="dataPagamento" class="col-md-4 control-label">{{ 'Data de Pagamento' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dataPagamento" type="datetime-local" id="dataPagamento" value="{{ $inscription->dataPagamento or ''}}" >
        {!! $errors->first('dataPagamento', '<p class="help-block">:message</p>') !!}
    </div>

</div>

<div class="form-group {{ $errors->has('dataInscrição') ? 'has-error' : ''}}">
    <label for="dataInscrição" class="col-md-4 control-label">{{ 'Data de Inscrição' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dataInscrição" type="datetime-local" id="dataInscrição" value="{{ $inscription->dataInscrição or ''}}" >
        {!! $errors->first('dataInscrição', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@endif


<div class="form-group ">
    <label for="curso" class="col-md-4 control-label">{{ 'Curso' }}</label>
    <div class="col-md-6">
        <select name="curso">

            @foreach($selectprocess->careers as $career)
            <option value="<?= $career->id ?>"><?= $career->nome ?></option>
            @endforeach
        </select>
        
    </div>
</div>

<div class="form-group ">
    <label for="quota" class="col-md-4 control-label">{{ 'Cotas' }}</label>
    <div class="col-md-6">
        <select name="quota">
            <?php foreach($quota as $quota): ?>
            <option value="<?= $quota->id ?>"><?= $quota->descrição ?></option>
            <?php endforeach;?>
        </select>
        
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>

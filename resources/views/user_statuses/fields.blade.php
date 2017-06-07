<!-- User Status Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_status_name', 'User Status Name:') !!}
    {!! Form::text('user_status_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userStatuses.index') !!}" class="btn btn-default">Cancel</a>
</div>

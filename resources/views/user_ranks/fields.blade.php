<!-- User Rank Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_rank_name', 'User Rank Name:') !!}
    {!! Form::text('user_rank_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userRanks.index') !!}" class="btn btn-default">Cancel</a>
</div>

<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $userRank->id !!}</p>
</div>

<!-- User Rank Name Field -->
<div class="form-group">
    {!! Form::label('user_rank_name', 'User Rank Name:') !!}
    <p>{!! $userRank->user_rank_name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $userRank->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $userRank->updated_at !!}</p>
</div>


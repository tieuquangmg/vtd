<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'Người gửi:') !!}
    {!! Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control']) !!}
    {!! Form::text('user_id', Auth::user()->full_name, ['class' => 'form-control','disabled'=>'disabled']) !!}
</div>

<!-- Email To User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_to_user_id', 'Người nhận:') !!}
    @foreach($users as $user)
    {!! Form::hidden('email_to_user_id[]', $user->id, ['class' => 'form-control']) !!}
    @endforeach
    @foreach($users as $user)
            <span style="background-color:#0093ff" class="badge">{{$user->full_name}}</span>
        @endforeach
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control','id'=>'ckeditor']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Trạng thái:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', false) !!}
        {!! Form::select('status', ['Lưu nháp','gửi ngay'], 1) !!}
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userEmails.index') !!}" class="btn btn-default">Hủy</a>
</div>
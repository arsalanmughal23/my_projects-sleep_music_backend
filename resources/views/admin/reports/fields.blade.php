<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control', 'placeholder'=>'Enter user_id']) !!}
</div>

<!-- Music Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('music_id', 'Music Id:') !!}
    {!! Form::text('music_id', null, ['class' => 'form-control', 'placeholder'=>'Enter music_id']) !!}
</div>

<!-- Report Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('report_type', 'Report Type:') !!}
    {!! Form::text('report_type', null, ['class' => 'form-control', 'placeholder'=>'Enter report_type']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    @if(!isset($report))
        {!! Form::submit(__('Save And Add Translations'), ['class' => 'btn btn-primary', 'name'=>'translation']) !!}
    @endif
    {!! Form::submit(__('Save And Add More'), ['class' => 'btn btn-primary', 'name'=>'continue']) !!}
    <a href="{!! route('admin.reports.index') !!}" class="btn btn-default">Cancel</a>
</div>
<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12 mb-3">
    {!! Form::label('name', 'User Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
    {!! Form::label('isactive','Is Active:') !!}<br>
    {!! Form:: select('isactive',  array(0 => 'False', 1 =>'True')) !!}<br>
    {!! Form::label('role_id', 'Role:') !!}<br>
    {!! Form:: select ('role_id', array(1 => 'User', 2 =>'Administrator'))!!}
</div>

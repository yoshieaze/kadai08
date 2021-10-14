<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'User_Name:') !!}
    <p>{{ $user->name }}</p>
</div>

{{-- -- <!-- Title Field --> --}}
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('createdat', 'Created:') !!}
    <p>{{ $user->created_at }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('isactive', 'IsActive:') !!}
    <p>{{ $user->isactive }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('role_id', 'Role:') !!}
    <p>{{ $user->role ->role_name }}</p>
</div>

<!-- Icon -->
{{-- <div class="col-sm-12">
    {!! Form::label('icon', 'Icon:') !!}
    <div>
        <p>{{ basename($user->icon) }}</p>
        <img src="{{ asset($user->icon)}}"
             class="user-image elevetion-3" alt="User Image">
    </div>
</div> --}}
{{--
<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $post->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $post->updated_at }}</p>
</div>
 --}}

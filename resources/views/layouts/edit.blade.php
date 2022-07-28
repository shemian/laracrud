@extends('layouts.contact')
@section('content')
<h1>Edit student</h1>
<div class="container">
    <div class="card">
        <div class="card-header">
            Edit student
        </div>
        <div class="card-body">
            <form method="post" action="{{url('update/'.$newStud->id) }}">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group">
                    <label for="studName">Name</label>
                    <input type="text" class="form-control" value = "{{$newStud->name}}" placeholder="Name" name="studName">
                </div>
                <div class="form-group">
                    <label for="studEmail">Email Address</label>
                    <input type="email" class="form-control" value = "{{$newStud->email}}" placeholder="Email" name="studEmail">
                </div>
                <div class="form-group">
                    <label for="studAddress">Address</label>
                    <input type="text" class="form-control" value = "{{$newStud->address}}" placeholder="address" name="studAddress">
                </div>
                <div class="form-group">
                    <label for="studPhone">Phone Number</label>
                    <input type="text" class="form-control"  value = "{{$newStud->mobile}}" placeholder="Phone" name="studPhone">
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            
        </div>
    </div>
</div>

@endsection
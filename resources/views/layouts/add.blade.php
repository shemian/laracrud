@extends('layouts.contact')
@section('content')
<h1>Add New student</h1>
<div class="container">
    <div class="card">
        <div class="card-header">
            Create a new student
        </div>
        <div class="card-body">
            <form method="post" action="">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="studName">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="studName">
                </div>
                <div class="form-group">
                    <label for="studEmail">Email Address</label>
                    <input type="email" class="form-control" placeholder="Email" name="studEmail">
                </div>
                <div class="form-group">
                    <label for="studAddress">Address</label>
                    <input type="text" class="form-control" placeholder="address" name="studAddress">
                </div>
                <div class="form-group">
                    <label for="studPhone">Email Address</label>
                    <input type="text" class="form-control" placeholder="Phone" name="studPhone">
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
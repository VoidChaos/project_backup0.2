@extends('admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">TechGorilla Admin Dashboard</div>

                <div class="panel-body">
                    Admin loged in successfully.
                    <br/><br/>
                    Current running on Alpha v0.2 with Laravel 5.2 framework. No frontend UI has been created yet.
                    <br/><br/>
                    This admin panel is able to manage posts, categories, subscribers(users), and admins. All sensitive data will be stored encrypted.
                    <br/><br/>
                    Note: The following functions are unavailable at this moment: <br/>Manage posts<br/>ManageCategories<br/>Manage subscribers<br/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

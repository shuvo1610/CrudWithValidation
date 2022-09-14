@extends('layouts.master')
@section('content')
    <div class="main-content" style="min-height: 482px;">
        <section class="section">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Teacher profile</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-stripe">
                                    <thead>
                                    <tr>
                                        <td>Name</td><br>
                                        <td>Phone</td><br>
                                        <td>Email</td><br>
                                        <td>Address</td><br>
                                        <td>Salary</td><br>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td>{{ $teacher->name }}</td>
                                        <td>{{ $teacher->phone }}</td>
                                        <td>{{ $teacher->email }}</td>
                                        <td>{{ $teacher->address }}</td>
                                        <td>{{ $teacher->salary }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

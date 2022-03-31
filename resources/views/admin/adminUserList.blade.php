@extends('layouts.adminmaster')
@section('title', 'User List')
@section('content')
    <section class="login-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" action="#" method="POST">
                        <div
                            class="auth-box /home/users/inf/hiaw1/iaw47714462/Documents/m7/streaming/resources/views/formDataUser.htmlblock">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center heading">User List</h3>
                                </div>
                            </div>

                            <table class="table table-sm table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Verified at</th>
                                        {{-- <th scope="col">Password</th> --}}
                                        <th scope="col">Rol</th>
                                        <th scope="col">Auth</th>
                                        <th scope="col">Locked</th>
                                        <th scope="col">Expired</th>
                                        <th scope="col">Card Number</th>
                                        <th scope="col">Remeber Token</th>
                                        <th scope="col">Update at</th>
                                        <th scope="col">Create at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->email_verified_at }}</td>
                                            {{-- <td>{{ $user->password }}</td> --}}
                                            <td>{{ $user->rol }}</td>
                                            <td>{{ $user->auth }}</td>
                                            <td>{{ $user->block }}</td>
                                            <td>{{ $user->card_num }}</td>
                                            <td>{{ $user->remember_token }}</td>
                                            <td>{{ $user->updated_at }}</td>
                                            <td>{{ $user->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </section>
@endsection

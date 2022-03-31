@extends('layouts.adminmaster')
@section('title', 'User List')
@section('content')
    <section class="">
        <div class="container-fluid">
            <div class="">
                <div class="col-sm-12">
                    <form class="form-material" action="#" method="GET">
                        @csrf
                        <div
                            class="auth-box /home/users/inf/hiaw1/iaw47714462/Documents/m7/streaming/resources/views/formDataUser.htmlblock">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center heading">User List</h3>
                                </div>
                            </div>
                            <form class="form-inline "><i class="fas fa-search" aria-hidden="true"></i>
                                <input class="form-control form-control-md ml-4 w-25" name="search_email" type="search"
                                    placeholder="Search by email" aria-label="Search">
                                <button class="btn ntm-outline-success my-2 mysm-0" type="submit">
                                    {{-- <!-- icono lupa --> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search m-1  " viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </button>
                            </form>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Verified at</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Rol</th>
                                        <th scope="col">Auth</th>
                                        <th scope="col">Locked</th>
                                        <th scope="col">Card Number</th>
                                        <th scope="col">Remeber Token</th>
                                        <th scope="col">Update at</th>
                                        <th scope="col">Create at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr name="{{ $user->id }}">
                                            <td style="max-width: 10px; overflow: hidden;">{{ $user->id }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->email_verified_at }}</td>
                                            <td style="max-width: 300px; overflow: hidden;">{{ $user->password }}</td>

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
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


@extends('admin.master')

@section('dashboard')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Our Users</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard">Users</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            {{-- <h5 class="card-title">Table with stripped rows</h5> --}}
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usersArr as $user)
                                        <tr>
                                            <th scope="row">{{ $user['id'] }}</th>
                                            <td>{{ $user['name'] }}</td>
                                            <td>{{ $user['email'] }}</td>
                                            <td>{{ $user['mobile'] }}</td>
                                            <td>{{ $user['city'] }}</td>


                                             <td>
                                                <a href="/delete/{{ $user['id'] }}"
                                                    class="bi bi-trash ms-4" onclick="return confirm('Are you sure?')">

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main><!-- End #main -->

@endsection





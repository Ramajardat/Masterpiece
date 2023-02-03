@extends('admin.master')

@section('owners')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Our Consultants</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="owners">Consultants</a></li>
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
                                        <th scope="col">overview</th>
                                        {{-- <th scope="col">departement_id </th> --}}
                                        {{-- <th scope="col">status</th> --}}
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($conArr as $user)
                                        @php
                                            $userCon = App\Models\User::find($user['user_id']);
                                        @endphp
                                        <tr>
                                            <th scope="row">{{ $user['user_id'] }}</th>
                                            <td>{{ $userCon['name'] }}</td>
                                            <td>{{ $userCon['email'] }}</td>
                                            <td>{{ $user['overview'] }}</td>
                                            {{-- <td>{{ $user['departement_id'] }}</td> --}}
                                            <td>
                                                <a href="/approve/{{ $user['id'] }}"
                                                    class="bi bi-check ms-4"onclick="return confirm('Are you sure?')">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="/delete/{{ $user['id'] }}"
                                                    class="bi bi-trash ms-4"onclick="return confirm('Are you sure?')">


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

@extends('admin.master')

@section('surveys')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>All Services</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="surveys">Services</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">description</th>
                                        <th scope="col">numberOfMembers</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Services as $service)
                                        <tr>
                                            <th scope="row">{{ $service['id'] }}</th>
                                            <td>{{ $service['name'] }}</td>
                                            <td>{{ $service['description'] }}</td>
                                            <td>{{ $service['numberOfMembers'] }}</td>
                                            <td>
                                                <a href="/delete/{{ $service['id'] }}"
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

    </main>
    <!-- End #main -->
@endsection

@extends('admin.master')

@section('surveys')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>All Surveys</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="surveys">surveys</a></li>
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
                                        <th scope="col">Link</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($SurveysArr as $survey) --}}
                                        <tr>
                                            {{-- <th scope="row">{{ $survey['id'] }}</th>
                                            <td>{{ $survey['survey_name'] }}</td>
                                            <td>{{ $survey['survey_link'] }}</td>
                                            <td>{{ $survey['category'] }}</td> --}}
                                            <td>
                                                {{-- <a href="/delete/{{ $survey['id'] }}"
                                                    class="bi bi-trash ms-4"onclick="return confirm('Are you sure?')"> --}}
                                            </td>
                                        </tr>
                                    {{-- @endforeach --}}
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

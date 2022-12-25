@extends('admin.master')


@section('subscribers')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Our Appointement</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="subscribers">Appointement</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            {{-- <h5 class="card-title">Table with stripped rows</h5> --}}
                            <div class="table-responsive">
                                <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                    <tbody>
                                        <!-- row -->
                                        <tr>
                                            <th>#</th>
                                            <th>appointment_time</th>
                                            <th>About the project</th>
                                        </tr>

                                        @foreach($appointments as $appointment)
                                        <tr>
                                                <td>
                                                    {{$appointment->id}}                                                </td>
                                                <td>
                                                    {{$appointment->appointment_time}}                                                </td>
                                                <td>
                                                    {{$appointment->message}}                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </section>

    </main><!-- End #main -->
@endsection

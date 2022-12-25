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
                                            <th>Email</th>
                                            <th>Subscription Date</th>
                                        </tr>

                                        {{-- @foreach ($allSubscribers as $subscriber) --}}
                                            <tr>
                                                <td>
                                                    {{-- {{ $subscriber->id }} --}}
                                                </td>
                                                <td>
                                                    {{-- {{ $subscriber->email }} --}}
                                                </td>
                                                <td>
                                                    {{-- {{ $subscriber->created_at }} --}}
                                                </td>
                                            </tr>
                                        {{-- @endforeach --}}

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

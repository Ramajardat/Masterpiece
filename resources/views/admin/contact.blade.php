@extends('admin.master')


@section('contact')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Contacts</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="contact">contacts</a></li>
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Replay</th>
                                        </tr>

                                        {{-- @foreach ($allContacts as $Contact) --}}
                                            <td>
                                                {{-- <span class="mb-0 text-muted">{{ $Contact->id }} </span> --}}
                                            </td>
                                            <td>
                                                {{-- <span class="mb-0 text-muted">{{ $Contact->name }} </span> --}}
                                            </td>
                                            <td>
                                                {{-- <span class="text-muted">{{ $Contact->email }}</span> --}}
                                            </td>
                                            {{-- <td class="text-muted">{{ $Contact->subject }}</td>
                                            <td><i class="text-muted mr-2">{{ $Contact->message }}</i></td> --}}

                                            {{-- <td class="text-muted "><a href="mailto: abc@example.com "><button
                                                        class="btn btn-primary">Replay</button></a>  </td> --}}
                                            {{-- <td> <a href="mailto:{{ $Contact['email'] }}"><i class="bi bi-messenger ms-3"></i></a> --}}
                                            </td>


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

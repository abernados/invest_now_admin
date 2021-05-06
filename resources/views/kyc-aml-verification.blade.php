<x-default-layout>
    @section('page_title') KYC/AML Verification @endsection
    @section('page_description') Overview of most recent KYC & AML status.@endsection

    <div class="container mt-n10">
        <div class="row">
            <div class="col-xxl-3 col-lg-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">KYC Completed</div>
                                <div class="text-lg font-weight-bold">0</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="user-check"></i>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Report</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">AML Completed</div>
                                <div class="text-lg font-weight-bold">0</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="dollar-sign"></i>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Report</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">KYC Pending</div>
                                <div class="text-lg font-weight-bold">30</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="user-minus"></i>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Report</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">AML Pending</div>
                                <div class="text-lg font-weight-bold">30</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="loader"></i>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Report</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">New Investors</div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTable4" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Investment Date</th>
                                <th>Name</th>
                                <th>KYC Status</th>
                                <th>AML Status</th>
                                <th>KYC Response</th>
                                <th>AML Response</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Investment Date</th>
                                <th>Name</th>
                                <th>KYC Status</th>
                                <th>AML Status</th>
                                <th>KYC Response</th>
                                <th>AML Response</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach([1,2,3,4,5,3,1] as $val)
                                <tr>
                                    <td>
                                        {{ now()->format('m/d/Y @ H:m A') }}
                                    </td>
                                    <td>
                                        <a href="/investor/1">Benjamin Bit</a>
                                    </td>
                                    <td>
                                        <div class='badge badge-warning badge-pill'>Pending</div>
                                    </td>
                                    <td>
                                        <div class='badge badge-warning badge-pill'>Pending</div>
                                    </td>
                                    <td>
                                        @if($loop->even)
                                            {{ Arr::random(['Passed Verification Check', 'KYC Verification in Progress - Follow Up', 'Passed Verification Check']) }}
                                        @else
                                            {{ Arr::random(['Address does not match', 'Unable to confirm SSN']) }}
                                        @endif
                                    </td>
                                    <td>
                                        @if($loop->even)
                                          {{ Arr::random(['Passed Verification Check', 'ID Pending', 'Passed Verification Check']) }}
                                        @else
                                            {{ Arr::random(['AML failed to run', 'Unable to confirm SSN']) }}
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                    </td>

                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-default-layout>

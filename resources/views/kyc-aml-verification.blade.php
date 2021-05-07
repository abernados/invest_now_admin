<div>
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
                                <div class="text-lg font-weight-bold">{{ $this->investors_count }}</div>
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
                                <div class="text-lg font-weight-bold">{{ $this->investors_count }}</div>
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
                            @foreach($investors as $investor)
                                <tr>
                                    <td>
                                        {{ $investor->created_at->format('m/d/Y @ g:i A')  }}
                                    </td>
                                    <td>
                                        <a href="/investor/1">{{ $investor->first_name . ' ' . $investor->last_name }}</a>
                                    </td>
                                    <td>
                                        <div class='badge badge-warning badge-pill'>Pending</div>
                                    </td>
                                    <td>
                                        <div class='badge badge-warning badge-pill'>Pending</div>
                                    </td>
                                    <td>
                                        Pending Verification
                                    </td>
                                    <td>
                                        Pending Check	
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
</div>

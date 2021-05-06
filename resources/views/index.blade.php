<x-default-layout>
    @section('page_title') Dashboard @endsection
    @section('page_description') Overview of most recent investments and activities @endsection

    <div class="container mt-n10">
        <div class="row">
            <div class="col-xxl-3 col-lg-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">New Investors</div>
                                <div class="text-lg font-weight-bold">28</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="user"></i>
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
                                <div class="text-white-75 small">Amount Invested</div>
                                <div class="text-lg font-weight-bold"> $460,300.00</div>
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
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">Average Investment</div>
                                <div class="text-lg font-weight-bold"> $16,439.29</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="check-square"></i>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Report</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">Median Investment</div>
                                <div class="text-lg font-weight-bold"> $16,439.29</div>
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
            <div class="card-header">Investment Overview</div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th></th>
                                <th># Investors</th>
                                <th>$ Amount</th>
                                <th>Average</th>
                                <th>Median</th>
                                <th>Export</th>
                            </tr>
                        </thead>

                        <tbody>
                        <tr>

                                <td><strong>Investment Commitment</strong></td>
                                <td><strong>28</strong></td>
                                <td><strong>$460,300.00</strong></td>
                                <td><strong>$16,439.29</strong></td>
                                <td><strong>$16,439.29</strong></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="download"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Voided</td>
                                <td>0</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="download"></i></button>
                                </td>
                            </tr>
                            <tr>
                            <td>Cancelled</td>
                                <td>0</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="download"></i></button>
                                </td>
                            </tr>
                            <tr>
                            <td>Refunded</td>
                            <td>0</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="download"></i></button>
                                </td>
                            </tr>
                            <tr>
                            <td>Rejected</td>
                            <td>0</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="download"></i></button>
                                </td>
                            </tr>
                            <tr>
                            <td>Funds not recieved</td>
                            <td>0</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="download"></i></button>
                                </td>
                            </tr>
                            <tr>
                            <td>Funds not recieved (<7 Days)</td>
                            <td>0</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="download"></i></button>
                                </td>
                            </tr>
                            <tr>

                                <td><strong>Active Investments</strong></td>
                                <td>0</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="download"></i></button>
                                </td>
                            </tr>
                            <tr>
                            <td>Funds Received</td>
                            <td>0</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="download"></i></button>
                                </td>
                            </tr>
                            <tr>
                        <td><strong>Pending Clearing</strong></td>
                        <td><strong>0</strong></td>
                        <td><strong>$0.00</strong></td>
                        <td><strong>$0.00</strong></td>
                        <td><strong>$0.00</strong></td>
                        <td>
                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="download"></i></button>
                        </td>
                    </tr>
                            <tr>
                            <td>AML Pending</td>
                                <td>0</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="download"></i></button>
                                </td>
                            </tr>
                            <tr>
                            <td>ID Pending</td>
                                <td>0</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="download"></i></button>
                                </td>
                            </tr>
                            <tr>
                            <td>Funds Pending Clearing</td>
                                <td>0</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="download"></i></button>
                                </td>
                            </tr>
                            <tr>
                            <td>Trade Review  Pending</td>
                                <td>0</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="download"></i></button>
                                </td>
                            </tr>
                            <tr>
                        <td><strong>Cleared for Disbursment</strong></td>
                        <td><strong>-</strong></td>
                        <td><strong>-</strong></td>
                        <td><strong>-</strong></td>
                        <td><strong>-</strong></td>
                        <td>
                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="download"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Issued (Official Shareholders)</strong></td>
                        <td><strong>0</strong></td>
                        <td><strong>$0.00</strong></td>
                        <td><strong>$0.00</strong></td>
                        <td><strong>$0.00</strong></td>
                        <td>
                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="download"></i></button>
                        </td>
                    </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-default-layout>

<x-default-layout>
    @section('page_title') Payments Pending @endsection
    @section('page_description') Below is a detailed overview of all investors whos payments are still pending and have not yet settled.@endsection

    <div class="container mt-n10">
        <div class="row">
            <div class="col-xxl-3 col-lg-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">Payments Pending</div>
                                <div class="text-lg font-weight-bold">10</div>
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
                                <div class="text-white-75 small">Pending Amount</div>
                                <div class="text-lg font-weight-bold">$125,400.00</div>
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
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">Failed Payments</div>
                                <div class="text-lg font-weight-bold">3</div>
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
                                <div class="text-white-75 small">Pending Investments</div>
                                <div class="text-lg font-weight-bold">$93,000.00</div>
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
            <div class="card-header">New Investors > Investment Details</div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTable5" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Investment Date</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Investment Progress</th>
                                <th>Internal Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Investment Date</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Investment Progress</th>
                                <th>Internal Status</th>
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
                                        ${{ Arr::random(['1,000', '3,000', '45,000','400']) }}
                                    </td>
                                    <td>
                                        <div class='progress'>
                                            <div class='progress-bar bg-primary' role='progressbar' style='width: 60%' aria-valuenow='0' aria-valuemin='0' aria-valuemax='100'>60%</div>
                                        </div>
                                    </td>
                                    <td>
                                        {{ Arr::random(['Issuer Amin Final Review', 'Payment Failed - Follow Up', 'Payment Pending - Final Review','Submitted for Clearing']) }}
                                    </td>
                                    <td>
                                        <button class='btn btn-datatable btn-icon btn-transparent-dark mr-2'><i data-feather='more-vertical'></i></button>
                                        <button class='btn btn-datatable btn-icon btn-transparent-dark'><i data-feather='trash-2'></i></button>
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

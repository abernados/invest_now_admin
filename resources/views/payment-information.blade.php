<x-default-layout>
    @section('page_title') Complete Investments @endsection
    @section('page_description') Below is an overview of all investors whos funds have been settled and are awaiting final review.@endsection

    <div class="container mt-n10">
        <div class="row">
            <div class="col-xxl-6 col-lg-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">Payment Cleared</div>
                                <div class="text-lg font-weight-bold">6</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="credit-card"></i>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Report</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-lg-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">Total Amount</div>
                                <div class="text-lg font-weight-bold">$480,400.00</div>
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
        </div>

        <div class="card mb-4">
            <div class="card-header">Settled Payments</div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTable3" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Payment Date</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Payment Progress</th>
                                <th>Payment Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Payment Date</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Payment Progress</th>
                                <th>Payment Status</th>
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

<x-default-layout>
    @section('page_title') Incomplete Investments @endsection
    @section('page_description') Below is an overview of the most recent investors who started an application but didn't provide payment information.@endsection

    <div class="container mt-n10">
        <div class="row">
            <div class="col-xxl-3 col-lg-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">New Applications</div>
                                <div class="text-lg font-weight-bold">30</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="edit"></i>
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
                                <div class="text-white-75 small">Average Percent Completed</div>
                                <div class="text-lg font-weight-bold">25%</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="percent"></i>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Report</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6">
                <div class="card bg-info text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">Emails Sent</div>
                                <div class="text-lg font-weight-bold">0</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="at-sign"></i>
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
                                <div class="text-white-75 small">Email Open Rate</div>
                                <div class="text-lg font-weight-bold">0%</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="send"></i>
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
                    <table class="table table-bordered table-hover" id="dataTable2" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Investment Date</th>
                                <th>Name</th>
                                <th>Last Step Completed</th>
                                <th>Follow Up Campaign</th>

                                <th>Last Activity Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Investment Date</th>
                                <th>Name</th>
                                <th>Last Step Completed</th>
                                <th>Follow Up Campaign</th>

                                <th>Last Activity Date</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach([1,2,3,4,5,3,1] as $val)
                            <tr>
                                <td>
                                    {{ now()->format('m/d/Y H:m A') }}
                                </td>
                                <td>
                                    <a href="/investor/1">Benjamin Bit</a>
                                </td>
                                <td>
                                    '{{ Arr::random(['Investing As...', 'Investor Address', 'Lead Form']) }}'
                                </td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar bg-primary' role='progressbar' style='width: 60%' aria-valuenow='0' aria-valuemin='0' aria-valuemax='100'>60%</div>
                                    </div>
                                </td>
                                <td>
                                    {{ now()->format('m/d/Y H:m A') }}
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

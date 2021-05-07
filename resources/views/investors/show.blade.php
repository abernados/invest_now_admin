<div class="container mt-4" x-data="{ subtitle: ''}">
    @section('page_title') Investor Overview @endsection
    @section('page_subtitle')<span x-text="subtitle"></span> @endsection

    <nav class="nav nav-borders">
        <a
            href="#"
            class="nav-link ml-0"
            :class="{ 'active': subtitle == ''}"
            x-on:click.prevent="subtitle=''">
            Overview</a>
        <a
            href="#"
            class="nav-link  ml-0"
            :class="{ 'active': subtitle == 'Payment History'}"
            x-on:click.prevent=" subtitle='Payment History'">
            Payment History</a>
        <a
            href="#"
            class="nav-link ml-0"
            :class="{ 'active': subtitle == 'Compliance'}"
            x-on:click.prevent=" subtitle='Compliance'">
            Compliance</a>
        <a
            href="#"
            class="nav-link ml-0"
            :class="{ 'active': subtitle == 'Audit Trail'}"
            x-on:click.prevent="subtitle='Audit Trail'">
            Audit Trail</a>
            <a
            href="#"
            class="nav-link ml-0"
            :class="{ 'active': subtitle == 'Documents'}"
            x-on:click.prevent="subtitle='Documents'">
            Documents</a>
    </nav>
    <hr class="mt-0 mb-4" />
    <div class="row"
        x-show="subtitle == ''"
        x-cloak>
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header">Investment Details</div>
                <div class="card-body">
                    <form>
                    <h1 class="page-header-title" style="font-size: 1.2rem;">Basic Details</h1>
                        <!-- Form Row-->
                        <div class="form-row">
                            <!-- Form Group (first name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="LeagalFirstName">Legal First name</label>
                                <input class="form-control" id="LeagalFirstName" type="text" wire:model.defer="first_name"/>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputLastName">Legal Last name</label>
                                <input class="form-control" id="inputLastName" type="text" wire:model.defer="last_name"/>
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="form-row">
                            <!-- Form Group (organization name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputOrgName">Email Address</label>
                                <input class="form-control" id="inputOrgName" type="text" wire:model.defer="email_address"/>
                            </div>
                            <!-- Form Group (location)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputLocation">Phone Number</label>
                                <input class="form-control" id="inputLocation" type="text" wire:model.defer="phone_number"/>
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <hr/>
                        <h1 class="page-header-title" style="font-size: 1.2rem;">Investor Details</h1>
                        <div class="form-row">
                            <!-- Form Group (first name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputFirstName">Country</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="No Data" wire:model.defer="country"/>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputLastName">Street Address</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="No Data" wire:model.defer="address" />
                            </div>
                        </div>
                        <div class="form-row">
                            <!-- Form Group (first name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputFirstName">City</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="No Data" wire:model.defer="city" />
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="form-group col-md-3">
                                <label class="small mb-1" for="inputLastName">State</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="No Data" wire:model.defer="state"/>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="small mb-1" for="inputLastName">Zip</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="No Data" wire:model.defer="zip"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <!-- Form Group (first name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputFirstName">Social Security Number</label>
                                <input class="form-control" id="inputFirstName" type="password" placeholder="No Data" wire:model.defer="social_security_number" disabled/>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputLastName">Date of Birth</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="No Data" wire:model.defer="date_of_birth" />
                            </div>
                        </div>
                        <hr/>
                        <h1 class="page-header-title" style="font-size: 1.2rem;">Investment Details</h1>
                        <div class="form-row">
                            <!-- Form Group (first name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputFirstName">Investment Amount</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="No Data" wire:model.defer="investment_amount" />
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputLastName">Accredited Investor?</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="No Data" wire:model.defer="accredited_investor" />
                            </div>
                        </div>
                        <div class="form-row">
                            <!-- Form Group (first name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputFirstName">Accredited Reasoning</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="N/A"/>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputLastName">Annual Revenue</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="N/A" wire:model.defer="annual_income"  />
                            </div>
                        </div>
                        <div class="form-row">
                            <!-- Form Group (first name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputFirstName">Net Worth</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="N/A"  wire:model.defer="net_worth" />
                            </div>
                        </div>
                        <hr/>
                        <h1 class="page-header-title" style="font-size: 1.2rem;">Agreements</h1>
                        <div class="form-row">
                            <!-- Form Group (first name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputFirstName">Subscription Agreement</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="No Data" wire:model.defer="subscription_agreement"/>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputLastName">Broker Dealer Agreement</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="No Data" wire:model.defer="sample_broker_dealer_aggreement"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <!-- Form Group (first name)-->
                            <div class="form-group col-md-4">
                                <label class="small mb-1" for="inputFirstName">Checkbox Agreement #1</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="No Data"/>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="form-group col-md-4">
                                <label class="small mb-1" for="inputLastName">Checkbox Agreement #2</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="No Data"/>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="small mb-1" for="inputLastName">Checkbox Agreement #3</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="No Data"/>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="small mb-1" for="inputLastName">Checkbox Agreement #4</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="No Data"/>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="small mb-1" for="inputLastName">Checkbox Agreement #5</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="No Data"/>
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="button" disabled style="float:right">Update Details</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div
        x-show="subtitle == 'Payment History'"
        x-cloak>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <!-- Billing card 1-->
                <div class="card h-100 border-left-lg border-left-primary">
                    <div class="card-body">
                        <div class="small text-muted">Latest Transaction</div>
                        <div class="h3">{{ $investment_amount }}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <!-- Billing card 2-->
                <div class="card h-100 border-left-lg border-left-secondary">
                    <div class="card-body">
                        <div class="small text-muted">Transaction Totals</div>
                        <div class="h3">$ {{ $investment_amount }}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <!-- Billing card 3-->
                <div class="card h-100 border-left-lg border-left-success">
                    <div class="card-body">
                        <div class="small text-muted">Submitted Transactions</div>
                        <div class="h3 d-flex align-items-center">0</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment methods card-->
        <div class="card card-header-actions mb-4">
            <div class="card-header">
                Payment Methods
                <button class="btn btn-sm btn-primary" type="button" disabled>Send Payment Link</button>
            </div>
            <div class="card-body">
                <div class='d-flex align-items-center justify-content-between'>
                    <div class='d-flex align-items-center'>
                        <i class='fab fa-cc-visa fa-2x cc-color-visa'></i>
                        <div class='ml-4'>
                            <div class='small'>Visa ending in {{ $card_last_four_digits }}</div>
                            <div class='text-xs text-muted'>Expires {{ $card_expiry }}</div>
                        </div>
                    </div>
                    <div class='ml-4 small'>
                        <div class='badge badge-light mr-3'>Default</div>
                        <a href='#!'>Edit</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Billing history card-->
        <div class="card mb-4">
            <div class="card-header">Billing History</div>
            <div class="card-body p-0">
                <!-- Billing history table-->
                <div class="table-responsive table-billing-history">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Transaction ID</th>
                                <th scope="col">Date</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#{{ Str::upper(Str::random(7)) . mt_rand(100000, 999999) }}</td>
                                <td>{{ $investor->created_at->format('m/d/Y @ g:i A') }}</td>
                                <td>{{ $investment_amount }}</td>
                                <td><span class='badge badge-success'>Success</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row"
        x-show="subtitle == 'Compliance'"
        x-cloak>
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">KYC/AML Snapshot</div>
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Timestamp</th>
                                    <th>Verificaiton Check</th>
                                    <th>Status</th>
                                    <th>Service</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Timestamp</th>
                                    <th>Verificaiton Check</th>
                                    <th>Status</th>
                                    <th>Service</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                <td>Null</td>
                                    <td class="alert-danger">Compliance Failed to Start</td>
                                    <td><div class="badge badge-danger badge-pill">Failed</div></td>
                                    <td>Lexus Nexus</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>Validate Date of Birth</td>
                                    <td><div class="badge badge-success badge-pill">Success</div></td>
                                    <td>World Watch</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>Validate SSN</td>
                                    <td><div class="badge badge-success badge-pill">Success</div></td>
                                    <td>World Watch</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>Validate Email Address</td>
                                    <td><div class="badge badge-success badge-pill">Success</div></td>
                                    <td>World Watch</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td class="alert-danger">Validate Street & City</td>
                                    <td><div class="badge badge-danger badge-pill">Failed</div></td>
                                    <td>World Watch</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>Bankruptcy Check</td>
                                    <td><div class="badge badge-success badge-pill">Success</div></td>
                                    <td>World Watch</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>Age Above 18</td>
                                    <td><div class="badge badge-success badge-pill">Success</div></td>
                                    <td>World Watch</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>Watch List Check</td>
                                    <td><div class="badge badge-success badge-pill">Success</div></td>
                                    <td>World Watch</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>Network Watchlist Check</td>
                                    <td><div class="badge badge-success badge-pill">Success</div></td>
                                    <td>World Watch</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>IP Check</td>
                                    <td><div class="badge badge-success badge-pill">Success</div></td>
                                    <td>World Watch</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>Risk Assessment</td>
                                    <td><div class="badge badge-success badge-pill">Success</div></td>
                                    <td>World Watch</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>Blacklist Email Check</td>
                                    <td><div class="badge badge-success badge-pill">Success</div></td>
                                    <td>World Watch</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>
                                    <td>Spam Check</td>
                                    <td><div class="badge badge-success badge-pill">Success</div></td>
                                    <td>World Watch</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row"
        x-show="subtitle == 'Audit Trail'"
        x-cloak>
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">Audit Trail
                <button style="float:right" class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="download"></i></button>
                </div>
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Timestamp</th>
                                    <th>Action/Activity</th>
                                    <th>Export</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Timestamp</th>
                                    <th>Action/Activity</th>
                                    <th>Export</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>
                                    <td>User submitted credit card data for payment processing</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="download"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>User viewed Terms & Conditions on payment processing page</td>
                                    <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="download"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>User signed Subscription Agreement</td>
                                    <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="download"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>User updated investment amount to $10,000</td>
                                    <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="download"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>User entered investment amount of $5,000</td>
                                    <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="download"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>User entered in SSN</td>
                                    <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="download"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>User updated date of birth to 9/10/1976</td>
                                    <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="download"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>User entered date of birth (9/9/1976)</td>
                                    <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="download"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>User logged back in to complete investment</td>
                                    <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="download"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>User ended session</td>
                                    <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="download"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>User entered in Zip Code</td>
                                    <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="download"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>

                                    <td>User entered in State</td>
                                    <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="download"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                <td>02/01/2021 @ 12:43PM</td>
                                    <td>User updated City</td>
                                    <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="download"></i></button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div
        x-show="subtitle == 'Documents'"
        x-cloak>
        <!-- Payment methods card-->
        <div class="card card-header-actions mb-4">
            <div class="card-header">
                Pending Documents
                <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">Request Document</button>
            </div>
            <div class="card-body">
                <!-- Payment method 1-->
                <div id="newDoc" class="d-flex align-items-center justify-content-between hide">
                    <div class="d-flex align-items-center">
                        <i class="far fa-file-alt fa-2x"></i>
                        <div class="ml-4">
                            <div class="small">This Document</div>
                            <div class="text-xs text-muted">Requested on 03/02/2021</div>
                        </div>
                    </div>
                    <div class="ml-4 small">
                        <a href="javascript:void(0)" onclick="deleteDoc()">Delete</a>
                    </div>
                </div>
                <hr id="newLine" class="hide"/>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-file-upload fa-2x"></i>
                        <div class="ml-4">
                            <div class="small">Articles of Incorporation</div>
                            <div class="text-xs text-muted">Requested on 02/04/2021</div>
                        </div>
                    </div>
                    <div class="ml-4 small">
                        <a href="#!">Delete</a>
                    </div>
                </div>
                <hr />
                <!-- Payment method 2-->
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-id-card-alt fa-2x"></i>
                        <div class="ml-4">
                            <div class="small">Birth Certificate</div>
                            <div class="text-xs text-muted">Requested on 02/03/2021</div>
                        </div>
                    </div>
                    <div class="ml-4 small">
                        <a href="#!">Delete</a>
                    </div>
                </div>
                <hr />
                <!-- Payment method 3-->
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i class="far fa-id-card fa-2x"></i>
                        <div class="ml-4">
                            <div class="small">Drivers Licenses</div>
                            <div class="text-xs text-muted">Requested on 02/01/2021</div>
                        </div>
                    </div>
                    <div class="ml-4 small">
                        <a href="#!">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Billing history card-->
        <div class="card mb-4">
            <div class="card-header">Recent Activity</div>
            <div class="card-body p-0">
                <!-- Billing history table-->
                <div class="table-responsive table-billing-history">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Document Requested</th>
                                <th scope="col">Date</th>
                                <th scope="col">Activity</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Company ID</td>
                                <td>02/01/2021</td>
                                <td>Document Requsted by Issuer Admin</td>
                                <td><span class="badge badge-warning">Request</span></td>
                            </tr>
                            <tr>
                                <td>W2-Tax Document</td>
                                <td>05/15/2021</td>
                                <td>Document Requsted by Issuer Admin</td>
                                <td><span class="badge badge-warning">Request</span></td>
                            </tr>
                            <tr>
                                <td>Drivers License</td>
                                <td>04/15/2021</td>
                                <td>Document Uploaded by User</td>
                                <td><span class="badge badge-success">Uploaded</span></td>
                            </tr>
                            <tr>
                                <td>Drivers License</td>
                                <td>03/15/2021</td>
                                <td>Document Requsted by Issuer Admin</td>
                                <td><span class="badge badge-warning">Request</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

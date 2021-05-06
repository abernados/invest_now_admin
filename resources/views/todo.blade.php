<x-default-layout>
    @section('page_title') To-Do's / Task Manager @endsection
    @section('page_description') Please complete the below tasks and to-do's to ensure investor completion.@endsection

    <div class="container mt-4" x-data="{ tab: 'my-tasks'}">
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 1-->
                <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-weight-bold text-primary mb-1">Tasks Completed</div>
                                <div class="h5">1</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 1-->
                <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-weight-bold text-primary mb-1">Tasks Pending</div>
                                <div class="h5">1</div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 1-->
                <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-weight-bold text-primary mb-1">Tasks Assigned</div>
                                <div class="h5">1</div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 1-->
                <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small font-weight-bold text-primary mb-1">Unassigned Tasks</div>
                                <div class="h5">1</div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a
                href="#"
                class="nav-link  ml-0"
                :class="{ 'active': tab == 'my-tasks'}"
                x-on:click.prevent=" tab='my-tasks'">
                My Tasks</a>
            <a
                href="#"
                class="nav-link ml-0"
                :class="{ 'active': tab == 'assigned-tasks'}"
                x-on:click.prevent=" tab='assigned-tasks'">
                Assigned Tasks</a>
            <a
                href="#"
                class="nav-link ml-0"
                :class="{ 'active': tab == 'unassigned-tasks'}"
                x-on:click.prevent="tab='unassigned-tasks'">
                Unassigned Tasks</a>
        </nav>

        <hr class="mt-0 mb-4" />

        <div class="row">
            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4"
                     x-show="tab == 'my-tasks'"
                     x-cloak>
                    <div class="card-header">My Tasks</div>
                    <div class="card-body">
                        <div class="datatable">
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Due Date</th>
                                        <th>Assignee</th>
                                        <th>Status</th>
                                        <th>Task</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Due Date</th>
                                        <th>Assignee</th>
                                        <th>Status</th>
                                        <th>Task</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>2021/03/13</td>
                                        <td>Demo Account</td>
                                        <td><div class="badge badge-warning badge-pill">Pending</div></td>
                                        <td>Example Task</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2021/03/13</td>
                                        <td>Demo Account</td>
                                        <td><div class="badge badge-success badge-pill">Complete</div></td>
                                        <td>Unable to verify identity. Please call user to confirm last 4 digits of SSN</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2021/03/09</td>
                                        <td>Demo Account</td>
                                        <td><div class="badge badge-warning badge-pill">Pending</div></td>
                                        <td>Please follow up in regards to unfinished application.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2021/03/11</td>

                                        <td>Demo Account</td>
                                        <td><div class="badge badge-success badge-pill">Complete</div></td>
                                        <td>User unsubscribed to investment updates. Please call to understand why as these are important.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2021/03/13</td>
                                        <td>Demo Account</td>
                                        <td><div class="badge badge-warning badge-pill">Pending</div></td>
                                        <td>Check never arrived. Please follow up with investor.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2021/02/01</td>
                                        <td>Demo Account</td>
                                        <td><div class="badge badge-danger badge-pill">Over Due</div></td>
                                        <td>Payment failed. Please get another form of payment.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2021/02/01</td>
                                        <td>Demo Account</td>
                                        <td><div class="badge badge-danger badge-pill">Over Due</div></td>
                                        <td>ACH bounced back. Please reach out to investor.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2021/03/21</td>

                                        <td>Demo Account</td>
                                        <td><div class="badge badge-success badge-pill">Complete</div></td>
                                        <td>Unable to confirm identity of investor. Please call to complete KYC/AML verification manually.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2021/03/09</td>
                                        <td>Demo Account</td>
                                        <td><div class="badge badge-warning badge-pill">Pending</div></td>
                                        <td>Check with investor if any other form of payment.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2021/03/13</td>
                                        <td>Demo Account</td>
                                        <td><div class="badge badge-warning badge-pill">Pending</div></td>
                                        <td>Investor has updated address 3 times and it has failed everytime. Please call investor.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2021/02/19</td>
                                        <td>Demo Account</td>
                                        <td><div class="badge badge-danger badge-pill">Over Due</div></td>
                                        <td>Investor charged back investment.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2021/03/15</td>
                                        <td>Demo Account</td>
                                        <td><div class="badge badge-success badge-pill">Complete</div></td>
                                        <td>Please follow up in regards to unfinished application.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2021/03/13</td>
                                        <td>Demo Account</td>
                                        <td><div class="badge badge-success badge-pill">Complete</div></td>
                                        <td>Payment failed. Please follow up in regards to new payment method.</td>
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

                <div class="card mb-4"
                    x-show="tab == 'assigned-tasks'"
                    x-cloak>
                    <div class="card-header">Assigned Tasks</div>
                    <div class="card-body">
                        <div class="datatable">
                            <table class="table table-bordered table-hover" id="dataTable3" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Due Date</th>
                                        <th>Assignee</th>
                                        <th>Status</th>
                                        <th>Task</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Due Date</th>
                                        <th>Assignee</th>
                                        <th>Status</th>
                                        <th>Task</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                    <td>2021/03/15</td>
                                    <td>Demo User</td>
                                        <td><div class="badge badge-warning badge-pill">Pending</div></td>
                                        <td>Exmaple Task</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="check-square"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>2021/02/13</td>

                                        <td>Benjamin Bit</td>
                                        <td><div class="badge badge-success badge-pill">Complete</div></td>
                                        <td>Please verify Drivers License document, recently uploaded.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="check-square"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>2021/02/09</td>

                                    <td>Benjamin Bit</td>
                                        <td><div class="badge badge-warning badge-pill">Pending</div></td>
                                        <td>Reach out to investor about payment issues. **See Notes</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="check-square"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>2021/02/11</td>

                                    <td>Evan Almeida</td>
                                        <td><div class="badge badge-success badge-pill">Complete</div></td>
                                        <td>Please ensure all fields are complete on application.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="check-square"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>2021/03/13</td>

                                    <td>Mike Almeida</td>
                                        <td><div class="badge badge-warning badge-pill">Pending</div></td>
                                        <td>Please update email, emails keep bouncing.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="check-square"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>2021/02/01</td>

                                    <td>Evan Almeida</td>
                                        <td><div class="badge badge-success badge-pill">Complete</div></td>
                                        <td>Final check needed on investment for clearing.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="check-square"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>2021/02/01</td>

                                    <td>Benjamin Bit</td>
                                        <td><div class="badge badge-success badge-pill">Complete</div></td>
                                        <td>Update email settings.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="check-square"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>2021/03/21</td>

                                    <td>Mike Almeida</td>
                                        <td><div class="badge badge-success badge-pill">Complete</div></td>
                                        <td>Please reach out to investor for new 'Phone'.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="check-square"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>2021/03/09</td>

                                    <td>Mike Almeida</td>
                                        <td><div class="badge badge-success badge-pill">Complete</div></td>
                                        <td>Final review needed of application.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="check-square"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>2021/03/13</td>

                                    <td>Evan Almeida</td>
                                        <td><div class="badge badge-success badge-pill">Complete</div></td>
                                        <td>Please ensure all fields are complete on application.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="check-square"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>2021/02/19</td>

                                    <td>Dan Rosen</td>
                                        <td><div class="badge badge-success badge-pill">Complete</div></td>
                                        <td>Please update 'Street Address' field based on investors email.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="check-square"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>2021/03/15</td>

                                    <td>Dan Rosen</td>
                                        <td><div class="badge badge-success badge-pill">Complete</div></td>
                                        <td>Final review needed of application.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="check-square"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>2021/03/13</td>
                                    <td>Benjamin Bit</td>
                                        <td><div class="badge badge-success badge-pill">Complete</div></td>
                                        <td>Payment failed. Please follow up in regards to new payment method.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="check-square"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card mb-4"
                    x-show="tab == 'unassigned-tasks'"
                    x-cloak>
                    <div class="card-header">Unassigned Tasks</div>
                    <div class="card-body">
                        <div class="datatable">
                            <table class="table table-bordered table-hover" id="dataTable2" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Due Date</th>
                                        <th>Assignee</th>
                                        <th>Status</th>
                                        <th>Task</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Due Date</th>
                                        <th>Assignee</th>
                                        <th>Status</th>
                                        <th>Task</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                    <td><em>Not yet set</em></td>
                                    <td><em>Unassigned</em></td>
                                        <td><div class="badge badge-dark badge-pill">Not Started</div></td>
                                        <td>Example Task</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td><em>Not yet set</em></td>

                                        <td><em>Unassigned</em></td>
                                        <td><div class="badge badge-dark badge-pill">Not Started</div></td>
                                        <td>Investor uploaded document, please verify.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td><em>Not yet set</em></td>

                                    <td><em>Unassigned</em></td>
                                        <td><div class="badge badge-dark badge-pill">Not Started</div></td>
                                        <td>Investor uploaded document, please verify.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td><em>Not yet set</em></td>

                                    <td><em>Unassigned</em></td>
                                        <td><div class="badge badge-dark badge-pill">Not Started</div></td>
                                        <td>Investor uploaded document, please verify.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td><em>Not yet set</em></td>

                                    <td><em>Unassigned</em></td>
                                        <td><div class="badge badge-dark badge-pill">Not Started</div></td>
                                        <td>Investor uploaded document, please verify.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td><em>Not yet set</em></td>

                                    <td><em>Unassigned</em></td>
                                        <td><div class="badge badge-dark badge-pill">Not Started</div></td>
                                        <td>Investor uploaded document, please verify.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td><em>Not yet set</em></td>

                                    <td><em>Unassigned</em></td>
                                        <td><div class="badge badge-dark badge-pill">Not Started</div></td>
                                        <td>Investor uploaded document, please verify.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td><em>Not yet set</em></td>

                                    <td><em>Unassigned</em></td>
                                        <td><div class="badge badge-dark badge-pill">Not Started</div></td>
                                        <td>Investor uploaded document, please verify.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td><em>Not yet set</em></td>

                                    <td><em>Unassigned</em></td>
                                        <td><div class="badge badge-dark badge-pill">Not Started</div></td>
                                        <td>Investor uploaded document, please verify.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td><em>Not yet set</em></td>

                                    <td><em>Unassigned</em></td>
                                        <td><div class="badge badge-dark badge-pill">Not Started</div></td>
                                        <td>Investor uploaded document, please verify.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td><em>Not yet set</em></td>

                                    <td><em>Unassigned</em></td>
                                        <td><div class="badge badge-dark badge-pill">Not Started</div></td>
                                        <td>Investor uploaded document, please verify.</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye-off"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit-2"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td><em>Not yet set</em></td>

                                    <td><em>Unassigned</em></td>
                                        <td><div class="badge badge-dark badge-pill">Not Started</div></td>
                                        <td>Investor uploaded document, please verify.</td>
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
    </div>

</x-default-layout>

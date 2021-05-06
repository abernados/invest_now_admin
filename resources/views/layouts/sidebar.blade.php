<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <div class="sidenav-menu-heading">Admin</div>
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{ route('todo') }}">
                    <div class="nav-link-icon"><i data-feather="tool"></i></div>
                    To Do's
                </a>

                <div class="sidenav-menu-heading">Application</div>
                <a class="nav-link" href="{{ route('basic-information') }}">
                    <div class="nav-link-icon"><i data-feather="user"></i></div>
                    Incomplete Investments
                </a>
                <a class="nav-link" href="{{ route('investment-details') }}">
                    <div class="nav-link-icon"><i data-feather="list"></i></div>
                    Payments Pending
                </a>
                <a class="nav-link" href="{{ route('payment-information') }}">
                    <div class="nav-link-icon"><i data-feather="dollar-sign"></i></div>
                    Complete Investments
                </a>
                <a class="nav-link" href="{{ route('kyc-aml-verification') }}">
                    <div class="nav-link-icon"><i data-feather="user-check"></i></div>
                    KYC/AML Verification
                </a>
                <a class="nav-link" href="#">
                    <div class="nav-link-icon"><i data-feather="paperclip"></i></div>
                    Audit Trail
                </a>
                <a class="nav-link" href="#">
                    <div class="nav-link-icon"><i data-feather="user-plus"></i></div>
                    Ready for Clearing
                </a>
                <div class="sidenav-menu-heading">Automation/Campaigns</div>
                <a class="nav-link" href="#">
                    <div class="nav-link-icon"><i data-feather="send"></i></div>
                    Follow-Up Campaigns
                </a>
                <a class="nav-link" href="#">
                    <div class="nav-link-icon"><i data-feather="mail"></i></div>
                    Email Automation
                </a>
                <a class="nav-link" href="#">
                    <div class="nav-link-icon"><i data-feather="smartphone"></i></div>
                    SMS Automation
                </a>



            </div>
        </div>
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">Demo Account</div>
            </div>
        </div>
    </nav>
</div>

@extends('Dashboard.Layouts.master_dashboard')
@section('content')
<div class="profile-page">
    <div class="row">
        <div class="col-lg-4">
            <div class="detailed-user-box">
                <div class="user-img-box">
                    <img src="{{ asset('assets/images/user-profile-image.png') }}" alt="">
                    <h5>Julie Watson</h5>
                </div>
                <div class="user-more-details">
                    <ul>
                        <li>Age : 25</li>
                        <li>City : Chicago</li>
                        <li>State : New York</li>
                        <li>Country : USA</li>
                        <li>Postal Code : 1001</li>
                        <li>Phone : +921 0055 220053</li>
                        <li>Email Address : julie@example.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="credit-report-box">
                <div class="two-things-align">
                    <div class="box">
                        <h6>Credit Report</h6>
                        <p>ABC Bank</p>
                    </div>
                    <div class="box">
                        <a href="#" class="t-btn t-btn-blue t-btn-svg">Download
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.7374 11.575C19.2822 7.98956 16.2114 5.20831 12.5041 5.20831C9.63324 5.20831 7.13949 6.88644 6.00094 9.53123C3.76344 10.2 2.0874 12.3125 2.0874 14.5833C2.0874 17.4552 4.42386 19.7916 7.29574 19.7916H8.3374V17.7083H7.29574C5.57282 17.7083 4.17074 16.3062 4.17074 14.5833C4.17074 13.1208 5.41969 11.7114 6.95511 11.4416L7.56032 11.3354L7.76032 10.7541C8.49261 8.61769 10.3103 7.29165 12.5041 7.29165C15.3759 7.29165 17.7124 9.6281 17.7124 12.5V13.5416H18.7541C19.903 13.5416 20.8374 14.476 20.8374 15.625C20.8374 16.7739 19.903 17.7083 18.7541 17.7083H16.6707V19.7916H18.7541C21.052 19.7916 22.9207 17.9229 22.9207 15.625C22.9195 14.6911 22.6052 13.7847 22.0282 13.0505C21.4511 12.3163 20.6445 11.7968 19.7374 11.575Z" fill="white"/>
                                <path d="M13.5457 14.5834V10.4167H11.4624V14.5834H8.3374L12.5041 19.7917L16.6707 14.5834H13.5457Z" fill="white"/>
                                </svg>
                        </a>
                    </div>
                </div>
                <div class="four-reports-align">
                    <div class="number-box">
                        <h6>122</h6>
                        <p>Overall Points</p>
                    </div>
                    <div class="number-box">
                        <h6>12500</h6>
                        <p>Transactions</p>
                    </div>
                    <div class="number-box">
                        <h6>15</h6>
                        <p>Loans</p>
                    </div>
                    <div class="number-box">
                        <h6>02</h6>
                        <p>House Rentals</p>
                    </div>
                </div>
            </div>
            <div class="profile-basic-info-form">
                <h3>Basic Info</h3>
                <form action="">
                    <div class="two-inputs-boxes-align">
                        <div class="input-box">
                            <label for="">Full Name</label>
                            <input type="text" placeholder="Julie Watson">
                        </div>
                        <div class="input-box">
                            <label for="">Email Address</label>
                            <input type="email" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="two-inputs-boxes-align">
                        <div class="input-box">
                            <label for="">City</label>
                            <input type="text" placeholder="Chicago">
                        </div>
                        <div class="input-box">
                            <label for="">Country</label>
                            <input type="email" placeholder="USA">
                        </div>
                    </div>
                    <div class="two-inputs-boxes-align">
                        <div class="input-box">
                            <label for="">State</label>
                            <input type="text" placeholder="New York">
                        </div>
                        <div class="input-box">
                            <label for="">Postal Code</label>
                            <input type="tel" placeholder="1001">
                        </div>
                    </div>
                    <div class="two-inputs-boxes-align">
                        <div class="input-box">
                            <label for="">Phone Number</label>
                            <input type="tel" placeholder="+921 0055 220053">
                        </div>
                        <div class="input-box">
                            <label for="">Date Of Birth</label>
                            <input type="date" placeholder="01/05/1995">
                        </div>
                    </div>
                    <div class="two-btn-align-sub-del">
                        <button class="form-btn submit">Save Changes  <img src="{{ asset('assets/images/right-arrow.png') }}" alt=""> </button>
                        <button class="form-btn delet">Discard Chnages <img src="{{ asset('assets/images/right-arrow.png') }}" alt=""> </button>
                    </div>
                </form>
                <div class="bank-info-box">
                    <h3>Bank Info</h3>
                    <form action="">
                        <div class="two-inputs-boxes-align">
                            <div class="input-box">
                                <label for="">Bank Name</label>
                                <input type="text" placeholder="ABC Bank">
                            </div>
                            <div class="input-box">
                                <label for="">Branch Code</label>
                                <input type="number" placeholder="XXXX">
                            </div>
                        </div>
                        <div class="two-inputs-boxes-align">
                            <div class="input-box">
                                <label for="">Identity Card Number</label>
                                <input type="number" placeholder="XXXX">
                            </div>
                            <div class="input-box">
                                <label for="">Account Number</label>
                                <input type="number" placeholder="XXXX">
                            </div>
                        </div>
                        <div class="two-btn-align-sub-del">
                            <button class="form-btn submit">Save Changes  <img src="{{ asset('assets/images/right-arrow.png') }}" alt=""> </button>
                            <button class="form-btn delet">Discard Chnages <img src="{{ asset('assets/images/right-arrow.png') }}" alt=""> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

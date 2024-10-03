<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartment One</title>
    <link rel="icon" href="{{ asset('assets/images/apartment-one-favicon.png') }}" type="favicon.png" sizes="32x32">
    <link rel="stylesheet" href="{{ asset('assets/style-folder/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body>

    <section class="dashboard-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left-panel">

                        <div class="header-logo">
                            <a href="#"><img src="{{ asset('assets/images/dash-logo-white.png') }}"
                                    alt=""></a>
                        </div>

                        <div class="left-panel-menu">
                            <div class="panel-box">
                                <h5>Menu</h5>
                                @if (Auth::user()->hasRole('tenant'))
                                <ul>
                                    <li><a href="{{ route('tenant.dashboard') }}" class="dashboard-active"><svg
                                                width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.3794 5.27637C8.4869 5.27637 2.8794 10.8839 2.8794 17.7764C2.87778 19.7056 3.32769 21.6084 4.19315 23.3326C4.40565 23.7576 4.83815 24.0264 5.3119 24.0264H25.4456C25.9194 24.0264 26.3531 23.7576 26.5656 23.3326C27.4311 21.6084 27.881 19.7056 27.8794 17.7764C27.8794 10.8839 22.2719 5.27637 15.3794 5.27637ZM24.6419 21.5264H6.1169C5.62844 20.3366 5.37789 19.0625 5.3794 17.7764C5.3794 12.2626 9.86565 7.77637 15.3794 7.77637C20.8931 7.77637 25.3794 12.2626 25.3794 17.7764C25.3809 19.0625 25.1304 20.3366 24.6419 21.5264Z"
                                                    fill="white" />
                                                <path
                                                    d="M14.0533 16.4501C13.7874 16.624 13.569 16.8614 13.4178 17.1409C13.2667 17.4203 13.1875 17.733 13.1875 18.0508C13.1875 18.3685 13.2667 18.6812 13.4178 18.9606C13.569 19.2401 13.7874 19.4775 14.0533 19.6514C14.2634 19.7896 14.4987 19.8851 14.7457 19.9323C14.9928 19.9794 15.2467 19.9774 15.493 19.9263C15.7392 19.8753 15.973 19.7761 16.1809 19.6345C16.3888 19.493 16.5667 19.3118 16.7045 19.1014L21.657 11.5539C21.661 11.5473 21.6631 11.5397 21.6631 11.532C21.6631 11.5243 21.661 11.5167 21.657 11.5101C21.6511 11.5011 21.6419 11.4948 21.6314 11.4924C21.6209 11.4901 21.6099 11.492 21.6008 11.4976L14.0533 16.4501Z"
                                                    fill="white" />
                                            </svg>
                                            Dashboard</a></li>
                                    <li><a href="{{ route('tenant.properties') }}" class="properties-active"><svg
                                                width="31" height="30" viewBox="0 0 31 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.6716 2.44946H12.1716C10.7929 2.44946 9.67161 3.57071 9.67161 4.94946V11.932L3.78786 17.8157C3.6131 17.9905 3.49409 18.2132 3.44588 18.4557C3.39767 18.6981 3.42242 18.9494 3.51701 19.1778C3.6116 19.4062 3.77177 19.6014 3.97729 19.7387C4.1828 19.8761 4.42442 19.9494 4.67161 19.9495V26.1995C4.67161 26.531 4.8033 26.8489 5.03773 27.0833C5.27215 27.3178 5.59009 27.4495 5.92161 27.4495H25.9216C26.2531 27.4495 26.5711 27.3178 26.8055 27.0833C27.0399 26.8489 27.1716 26.531 27.1716 26.1995V4.94946C27.1716 3.57071 26.0504 2.44946 24.6716 2.44946ZM14.6716 24.9495H7.17161V17.967L10.9216 14.217L14.6716 17.967V24.9495ZM24.6716 24.9495H17.1716V19.9495C17.4191 19.95 17.6611 19.877 17.867 19.7398C18.0729 19.6025 18.2334 19.4072 18.3281 19.1786C18.4228 18.9499 18.4474 18.6983 18.3988 18.4557C18.3503 18.213 18.2307 17.9903 18.0554 17.8157L12.1716 11.932V4.94946H24.6716V24.9495Z"
                                                    fill="white" />
                                                <path
                                                    d="M14.6714 7.44946H17.1714V9.94946H14.6714V7.44946ZM19.6714 7.44946H22.1714V9.94946H19.6714V7.44946ZM19.6714 12.4882H22.1714V14.9495H19.6714V12.4882ZM19.6714 17.4495H22.1714V19.9495H19.6714V17.4495ZM9.67139 18.6995H12.1714V21.1995H9.67139V18.6995Z"
                                                    fill="white" />
                                            </svg>
                                            Properties</a></li>
                                    <li><a href="{{ route('tenant.applyhistory') }}" class="applyhistory-active"><svg
                                                width="31" height="30" viewBox="0 0 31 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M25.3787 10.7325C25.3195 10.5968 25.2365 10.4728 25.1338 10.3663L17.6337 2.86625C17.5272 2.76348 17.4032 2.68051 17.2675 2.62125C17.23 2.60375 17.19 2.59375 17.15 2.58C17.0454 2.54441 16.9365 2.52297 16.8262 2.51625C16.8 2.51375 16.7762 2.5 16.75 2.5H8C6.62125 2.5 5.5 3.62125 5.5 5V25C5.5 26.3788 6.62125 27.5 8 27.5H23C24.3788 27.5 25.5 26.3788 25.5 25V11.25C25.5 11.2238 25.4862 11.2 25.4837 11.1725C25.4776 11.0621 25.4562 10.9532 25.42 10.8487C25.4075 10.8087 25.3962 10.77 25.3787 10.7325ZM21.2325 10H18V6.7675L21.2325 10ZM8 25V5H15.5V11.25C15.5 11.5815 15.6317 11.8995 15.8661 12.1339C16.1005 12.3683 16.4185 12.5 16.75 12.5H23L23.0025 25H8Z"
                                                    fill="white" />
                                                <path
                                                    d="M10.5 15H20.5V17.5H10.5V15ZM10.5 20H20.5V22.5H10.5V20ZM10.5 10H13V12.5H10.5V10Z"
                                                    fill="white" />
                                            </svg>
                                            Apply History</a></li>
                                    <li><a href="{{ route('tenant.profile') }}" class="profile-active"><svg
                                                width="31" height="30" viewBox="0 0 31 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.231 2.01758C11.9288 2.05969 8.77383 3.39017 6.43869 5.72531C4.10355 8.06045 2.77307 11.2155 2.73096 14.5176C2.74639 16.4412 3.20561 18.3353 4.07285 20.0525C4.94009 21.7696 6.19195 23.2634 7.73096 24.4176V24.5176H7.85596C9.97244 26.1394 12.5645 27.0184 15.231 27.0184C17.8974 27.0184 20.4895 26.1394 22.606 24.5176H22.731V24.4176C24.27 23.2634 25.5218 21.7696 26.3891 20.0525C27.2563 18.3353 27.7155 16.4412 27.731 14.5176C27.6888 11.2155 26.3584 8.06045 24.0232 5.72531C21.6881 3.39017 18.5331 2.05969 15.231 2.01758ZM10.3185 23.1801C10.5009 22.3444 10.9636 21.5962 11.6298 21.0596C12.296 20.523 13.1256 20.2303 13.981 20.2301H16.481C17.3363 20.2303 18.1659 20.523 18.8321 21.0596C19.4983 21.5962 19.961 22.3444 20.1435 23.1801C18.6545 24.0561 16.9585 24.518 15.231 24.518C13.5035 24.518 11.8074 24.0561 10.3185 23.1801ZM22.2435 21.5676C21.768 20.4313 20.9674 19.4608 19.9421 18.778C18.9169 18.0953 17.7127 17.7307 16.481 17.7301H13.981C12.7492 17.7307 11.545 18.0953 10.5198 18.778C9.49456 19.4608 8.69392 20.4313 8.21846 21.5676C7.28179 20.6463 6.53583 19.5495 6.02322 18.3398C5.51061 17.1302 5.2414 15.8313 5.23096 14.5176C5.26338 11.8755 6.32736 9.35074 8.19574 7.48236C10.0641 5.61398 12.5889 4.55 15.231 4.51758C17.873 4.55 20.3978 5.61398 22.2662 7.48236C24.1346 9.35074 25.1985 11.8755 25.231 14.5176C25.2205 15.8313 24.9513 17.1302 24.4387 18.3398C23.9261 19.5495 23.1801 20.6463 22.2435 21.5676Z"
                                                    fill="white" />
                                                <path
                                                    d="M15.2308 7.01756C14.57 7.00217 13.9129 7.12098 13.2993 7.3668C12.6858 7.61262 12.1284 7.98036 11.661 8.44775C11.1936 8.91515 10.8259 9.47249 10.5801 10.0861C10.3342 10.6997 10.2154 11.3567 10.2308 12.0176C10.2154 12.6784 10.3342 13.3355 10.5801 13.949C10.8259 14.5626 11.1936 15.12 11.661 15.5874C12.1284 16.0548 12.6858 16.4225 13.2993 16.6683C13.9129 16.9141 14.57 17.033 15.2308 17.0176C15.8916 17.033 16.5487 16.9141 17.1623 16.6683C17.7759 16.4225 18.3332 16.0548 18.8006 15.5874C19.268 15.12 19.6358 14.5626 19.8816 13.949C20.1274 13.3355 20.2462 12.6784 20.2308 12.0176C20.2462 11.3567 20.1274 10.6997 19.8816 10.0861C19.6358 9.47249 19.268 8.91515 18.8006 8.44775C18.3332 7.98036 17.7759 7.61262 17.1623 7.3668C16.5487 7.12098 15.8916 7.00217 15.2308 7.01756ZM15.2308 14.5176C14.8983 14.5336 14.566 14.48 14.2554 14.36C13.9448 14.2401 13.6627 14.0565 13.4273 13.8211C13.1919 13.5856 13.0083 13.3036 12.8883 12.993C12.7684 12.6824 12.7147 12.3501 12.7308 12.0176C12.7147 11.685 12.7684 11.3527 12.8883 11.0422C13.0083 10.7316 13.1919 10.4495 13.4273 10.2141C13.6627 9.97863 13.9448 9.79504 14.2554 9.67509C14.566 9.55514 14.8983 9.50148 15.2308 9.51756C15.5634 9.50148 15.8956 9.55514 16.2062 9.67509C16.5168 9.79504 16.7989 9.97863 17.0343 10.2141C17.2698 10.4495 17.4533 10.7316 17.5733 11.0422C17.6932 11.3527 17.7469 11.685 17.7308 12.0176C17.7469 12.3501 17.6932 12.6824 17.5733 12.993C17.4533 13.3036 17.2698 13.5856 17.0343 13.8211C16.7989 14.0565 16.5168 14.2401 16.2062 14.36C15.8956 14.48 15.5634 14.5336 15.2308 14.5176Z"
                                                    fill="white" />
                                            </svg>
                                            Profile</a></li>
                                </ul>
                                @endif
                                @if (Auth::user()->hasRole('land_lord'))
                                <ul>
                                    <li><a href="{{ route('landlord.dashboard') }}" class="dashboard-active"><svg
                                                width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.3794 5.27637C8.4869 5.27637 2.8794 10.8839 2.8794 17.7764C2.87778 19.7056 3.32769 21.6084 4.19315 23.3326C4.40565 23.7576 4.83815 24.0264 5.3119 24.0264H25.4456C25.9194 24.0264 26.3531 23.7576 26.5656 23.3326C27.4311 21.6084 27.881 19.7056 27.8794 17.7764C27.8794 10.8839 22.2719 5.27637 15.3794 5.27637ZM24.6419 21.5264H6.1169C5.62844 20.3366 5.37789 19.0625 5.3794 17.7764C5.3794 12.2626 9.86565 7.77637 15.3794 7.77637C20.8931 7.77637 25.3794 12.2626 25.3794 17.7764C25.3809 19.0625 25.1304 20.3366 24.6419 21.5264Z"
                                                    fill="white" />
                                                <path
                                                    d="M14.0533 16.4501C13.7874 16.624 13.569 16.8614 13.4178 17.1409C13.2667 17.4203 13.1875 17.733 13.1875 18.0508C13.1875 18.3685 13.2667 18.6812 13.4178 18.9606C13.569 19.2401 13.7874 19.4775 14.0533 19.6514C14.2634 19.7896 14.4987 19.8851 14.7457 19.9323C14.9928 19.9794 15.2467 19.9774 15.493 19.9263C15.7392 19.8753 15.973 19.7761 16.1809 19.6345C16.3888 19.493 16.5667 19.3118 16.7045 19.1014L21.657 11.5539C21.661 11.5473 21.6631 11.5397 21.6631 11.532C21.6631 11.5243 21.661 11.5167 21.657 11.5101C21.6511 11.5011 21.6419 11.4948 21.6314 11.4924C21.6209 11.4901 21.6099 11.492 21.6008 11.4976L14.0533 16.4501Z"
                                                    fill="white" />
                                            </svg>
                                            Dashboard</a></li>
                                    <li><a href="{{ route('landlord.properties') }}" class="properties-active"><svg
                                                width="31" height="30" viewBox="0 0 31 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.6716 2.44946H12.1716C10.7929 2.44946 9.67161 3.57071 9.67161 4.94946V11.932L3.78786 17.8157C3.6131 17.9905 3.49409 18.2132 3.44588 18.4557C3.39767 18.6981 3.42242 18.9494 3.51701 19.1778C3.6116 19.4062 3.77177 19.6014 3.97729 19.7387C4.1828 19.8761 4.42442 19.9494 4.67161 19.9495V26.1995C4.67161 26.531 4.8033 26.8489 5.03773 27.0833C5.27215 27.3178 5.59009 27.4495 5.92161 27.4495H25.9216C26.2531 27.4495 26.5711 27.3178 26.8055 27.0833C27.0399 26.8489 27.1716 26.531 27.1716 26.1995V4.94946C27.1716 3.57071 26.0504 2.44946 24.6716 2.44946ZM14.6716 24.9495H7.17161V17.967L10.9216 14.217L14.6716 17.967V24.9495ZM24.6716 24.9495H17.1716V19.9495C17.4191 19.95 17.6611 19.877 17.867 19.7398C18.0729 19.6025 18.2334 19.4072 18.3281 19.1786C18.4228 18.9499 18.4474 18.6983 18.3988 18.4557C18.3503 18.213 18.2307 17.9903 18.0554 17.8157L12.1716 11.932V4.94946H24.6716V24.9495Z"
                                                    fill="white" />
                                                <path
                                                    d="M14.6714 7.44946H17.1714V9.94946H14.6714V7.44946ZM19.6714 7.44946H22.1714V9.94946H19.6714V7.44946ZM19.6714 12.4882H22.1714V14.9495H19.6714V12.4882ZM19.6714 17.4495H22.1714V19.9495H19.6714V17.4495ZM9.67139 18.6995H12.1714V21.1995H9.67139V18.6995Z"
                                                    fill="white" />
                                            </svg>
                                            Properties</a></li>
                                    {{-- <li><a href="{{ route('landlord.applyhistory') }}" class="applyhistory-active"><svg
                                                width="31" height="30" viewBox="0 0 31 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M25.3787 10.7325C25.3195 10.5968 25.2365 10.4728 25.1338 10.3663L17.6337 2.86625C17.5272 2.76348 17.4032 2.68051 17.2675 2.62125C17.23 2.60375 17.19 2.59375 17.15 2.58C17.0454 2.54441 16.9365 2.52297 16.8262 2.51625C16.8 2.51375 16.7762 2.5 16.75 2.5H8C6.62125 2.5 5.5 3.62125 5.5 5V25C5.5 26.3788 6.62125 27.5 8 27.5H23C24.3788 27.5 25.5 26.3788 25.5 25V11.25C25.5 11.2238 25.4862 11.2 25.4837 11.1725C25.4776 11.0621 25.4562 10.9532 25.42 10.8487C25.4075 10.8087 25.3962 10.77 25.3787 10.7325ZM21.2325 10H18V6.7675L21.2325 10ZM8 25V5H15.5V11.25C15.5 11.5815 15.6317 11.8995 15.8661 12.1339C16.1005 12.3683 16.4185 12.5 16.75 12.5H23L23.0025 25H8Z"
                                                    fill="white" />
                                                <path
                                                    d="M10.5 15H20.5V17.5H10.5V15ZM10.5 20H20.5V22.5H10.5V20ZM10.5 10H13V12.5H10.5V10Z"
                                                    fill="white" />
                                            </svg>
                                            Apply History</a></li> --}}
                                    <li><a href="{{ route('landlord.profile') }}" class="profile-active"><svg
                                                width="31" height="30" viewBox="0 0 31 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.231 2.01758C11.9288 2.05969 8.77383 3.39017 6.43869 5.72531C4.10355 8.06045 2.77307 11.2155 2.73096 14.5176C2.74639 16.4412 3.20561 18.3353 4.07285 20.0525C4.94009 21.7696 6.19195 23.2634 7.73096 24.4176V24.5176H7.85596C9.97244 26.1394 12.5645 27.0184 15.231 27.0184C17.8974 27.0184 20.4895 26.1394 22.606 24.5176H22.731V24.4176C24.27 23.2634 25.5218 21.7696 26.3891 20.0525C27.2563 18.3353 27.7155 16.4412 27.731 14.5176C27.6888 11.2155 26.3584 8.06045 24.0232 5.72531C21.6881 3.39017 18.5331 2.05969 15.231 2.01758ZM10.3185 23.1801C10.5009 22.3444 10.9636 21.5962 11.6298 21.0596C12.296 20.523 13.1256 20.2303 13.981 20.2301H16.481C17.3363 20.2303 18.1659 20.523 18.8321 21.0596C19.4983 21.5962 19.961 22.3444 20.1435 23.1801C18.6545 24.0561 16.9585 24.518 15.231 24.518C13.5035 24.518 11.8074 24.0561 10.3185 23.1801ZM22.2435 21.5676C21.768 20.4313 20.9674 19.4608 19.9421 18.778C18.9169 18.0953 17.7127 17.7307 16.481 17.7301H13.981C12.7492 17.7307 11.545 18.0953 10.5198 18.778C9.49456 19.4608 8.69392 20.4313 8.21846 21.5676C7.28179 20.6463 6.53583 19.5495 6.02322 18.3398C5.51061 17.1302 5.2414 15.8313 5.23096 14.5176C5.26338 11.8755 6.32736 9.35074 8.19574 7.48236C10.0641 5.61398 12.5889 4.55 15.231 4.51758C17.873 4.55 20.3978 5.61398 22.2662 7.48236C24.1346 9.35074 25.1985 11.8755 25.231 14.5176C25.2205 15.8313 24.9513 17.1302 24.4387 18.3398C23.9261 19.5495 23.1801 20.6463 22.2435 21.5676Z"
                                                    fill="white" />
                                                <path
                                                    d="M15.2308 7.01756C14.57 7.00217 13.9129 7.12098 13.2993 7.3668C12.6858 7.61262 12.1284 7.98036 11.661 8.44775C11.1936 8.91515 10.8259 9.47249 10.5801 10.0861C10.3342 10.6997 10.2154 11.3567 10.2308 12.0176C10.2154 12.6784 10.3342 13.3355 10.5801 13.949C10.8259 14.5626 11.1936 15.12 11.661 15.5874C12.1284 16.0548 12.6858 16.4225 13.2993 16.6683C13.9129 16.9141 14.57 17.033 15.2308 17.0176C15.8916 17.033 16.5487 16.9141 17.1623 16.6683C17.7759 16.4225 18.3332 16.0548 18.8006 15.5874C19.268 15.12 19.6358 14.5626 19.8816 13.949C20.1274 13.3355 20.2462 12.6784 20.2308 12.0176C20.2462 11.3567 20.1274 10.6997 19.8816 10.0861C19.6358 9.47249 19.268 8.91515 18.8006 8.44775C18.3332 7.98036 17.7759 7.61262 17.1623 7.3668C16.5487 7.12098 15.8916 7.00217 15.2308 7.01756ZM15.2308 14.5176C14.8983 14.5336 14.566 14.48 14.2554 14.36C13.9448 14.2401 13.6627 14.0565 13.4273 13.8211C13.1919 13.5856 13.0083 13.3036 12.8883 12.993C12.7684 12.6824 12.7147 12.3501 12.7308 12.0176C12.7147 11.685 12.7684 11.3527 12.8883 11.0422C13.0083 10.7316 13.1919 10.4495 13.4273 10.2141C13.6627 9.97863 13.9448 9.79504 14.2554 9.67509C14.566 9.55514 14.8983 9.50148 15.2308 9.51756C15.5634 9.50148 15.8956 9.55514 16.2062 9.67509C16.5168 9.79504 16.7989 9.97863 17.0343 10.2141C17.2698 10.4495 17.4533 10.7316 17.5733 11.0422C17.6932 11.3527 17.7469 11.685 17.7308 12.0176C17.7469 12.3501 17.6932 12.6824 17.5733 12.993C17.4533 13.3036 17.2698 13.5856 17.0343 13.8211C16.7989 14.0565 16.5168 14.2401 16.2062 14.36C15.8956 14.48 15.5634 14.5336 15.2308 14.5176Z"
                                                    fill="white" />
                                            </svg>
                                            Profile</a></li>
                                </ul>
                                @endif
                                @if (Auth::user()->hasRole('admin'))
                                <ul>
                                    <li><a href="{{ route('admin.dashboard') }}" class="dashboard-active"><svg
                                                width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.3794 5.27637C8.4869 5.27637 2.8794 10.8839 2.8794 17.7764C2.87778 19.7056 3.32769 21.6084 4.19315 23.3326C4.40565 23.7576 4.83815 24.0264 5.3119 24.0264H25.4456C25.9194 24.0264 26.3531 23.7576 26.5656 23.3326C27.4311 21.6084 27.881 19.7056 27.8794 17.7764C27.8794 10.8839 22.2719 5.27637 15.3794 5.27637ZM24.6419 21.5264H6.1169C5.62844 20.3366 5.37789 19.0625 5.3794 17.7764C5.3794 12.2626 9.86565 7.77637 15.3794 7.77637C20.8931 7.77637 25.3794 12.2626 25.3794 17.7764C25.3809 19.0625 25.1304 20.3366 24.6419 21.5264Z"
                                                    fill="white" />
                                                <path
                                                    d="M14.0533 16.4501C13.7874 16.624 13.569 16.8614 13.4178 17.1409C13.2667 17.4203 13.1875 17.733 13.1875 18.0508C13.1875 18.3685 13.2667 18.6812 13.4178 18.9606C13.569 19.2401 13.7874 19.4775 14.0533 19.6514C14.2634 19.7896 14.4987 19.8851 14.7457 19.9323C14.9928 19.9794 15.2467 19.9774 15.493 19.9263C15.7392 19.8753 15.973 19.7761 16.1809 19.6345C16.3888 19.493 16.5667 19.3118 16.7045 19.1014L21.657 11.5539C21.661 11.5473 21.6631 11.5397 21.6631 11.532C21.6631 11.5243 21.661 11.5167 21.657 11.5101C21.6511 11.5011 21.6419 11.4948 21.6314 11.4924C21.6209 11.4901 21.6099 11.492 21.6008 11.4976L14.0533 16.4501Z"
                                                    fill="white" />
                                            </svg>
                                            Dashboard</a></li>
                                    <li><a href="{{ route('admin.properties') }}" class="properties-active"><svg
                                                width="31" height="30" viewBox="0 0 31 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.6716 2.44946H12.1716C10.7929 2.44946 9.67161 3.57071 9.67161 4.94946V11.932L3.78786 17.8157C3.6131 17.9905 3.49409 18.2132 3.44588 18.4557C3.39767 18.6981 3.42242 18.9494 3.51701 19.1778C3.6116 19.4062 3.77177 19.6014 3.97729 19.7387C4.1828 19.8761 4.42442 19.9494 4.67161 19.9495V26.1995C4.67161 26.531 4.8033 26.8489 5.03773 27.0833C5.27215 27.3178 5.59009 27.4495 5.92161 27.4495H25.9216C26.2531 27.4495 26.5711 27.3178 26.8055 27.0833C27.0399 26.8489 27.1716 26.531 27.1716 26.1995V4.94946C27.1716 3.57071 26.0504 2.44946 24.6716 2.44946ZM14.6716 24.9495H7.17161V17.967L10.9216 14.217L14.6716 17.967V24.9495ZM24.6716 24.9495H17.1716V19.9495C17.4191 19.95 17.6611 19.877 17.867 19.7398C18.0729 19.6025 18.2334 19.4072 18.3281 19.1786C18.4228 18.9499 18.4474 18.6983 18.3988 18.4557C18.3503 18.213 18.2307 17.9903 18.0554 17.8157L12.1716 11.932V4.94946H24.6716V24.9495Z"
                                                    fill="white" />
                                                <path
                                                    d="M14.6714 7.44946H17.1714V9.94946H14.6714V7.44946ZM19.6714 7.44946H22.1714V9.94946H19.6714V7.44946ZM19.6714 12.4882H22.1714V14.9495H19.6714V12.4882ZM19.6714 17.4495H22.1714V19.9495H19.6714V17.4495ZM9.67139 18.6995H12.1714V21.1995H9.67139V18.6995Z"
                                                    fill="white" />
                                            </svg>
                                            Properties</a></li>
                                    {{-- <li><a href="{{ route('landlord.applyhistory') }}" class="applyhistory-active"><svg
                                                width="31" height="30" viewBox="0 0 31 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M25.3787 10.7325C25.3195 10.5968 25.2365 10.4728 25.1338 10.3663L17.6337 2.86625C17.5272 2.76348 17.4032 2.68051 17.2675 2.62125C17.23 2.60375 17.19 2.59375 17.15 2.58C17.0454 2.54441 16.9365 2.52297 16.8262 2.51625C16.8 2.51375 16.7762 2.5 16.75 2.5H8C6.62125 2.5 5.5 3.62125 5.5 5V25C5.5 26.3788 6.62125 27.5 8 27.5H23C24.3788 27.5 25.5 26.3788 25.5 25V11.25C25.5 11.2238 25.4862 11.2 25.4837 11.1725C25.4776 11.0621 25.4562 10.9532 25.42 10.8487C25.4075 10.8087 25.3962 10.77 25.3787 10.7325ZM21.2325 10H18V6.7675L21.2325 10ZM8 25V5H15.5V11.25C15.5 11.5815 15.6317 11.8995 15.8661 12.1339C16.1005 12.3683 16.4185 12.5 16.75 12.5H23L23.0025 25H8Z"
                                                    fill="white" />
                                                <path
                                                    d="M10.5 15H20.5V17.5H10.5V15ZM10.5 20H20.5V22.5H10.5V20ZM10.5 10H13V12.5H10.5V10Z"
                                                    fill="white" />
                                            </svg>
                                            Apply History</a></li> --}}
                                    <li><a href="{{ route('admin.profile') }}" class="profile-active"><svg
                                                width="31" height="30" viewBox="0 0 31 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.231 2.01758C11.9288 2.05969 8.77383 3.39017 6.43869 5.72531C4.10355 8.06045 2.77307 11.2155 2.73096 14.5176C2.74639 16.4412 3.20561 18.3353 4.07285 20.0525C4.94009 21.7696 6.19195 23.2634 7.73096 24.4176V24.5176H7.85596C9.97244 26.1394 12.5645 27.0184 15.231 27.0184C17.8974 27.0184 20.4895 26.1394 22.606 24.5176H22.731V24.4176C24.27 23.2634 25.5218 21.7696 26.3891 20.0525C27.2563 18.3353 27.7155 16.4412 27.731 14.5176C27.6888 11.2155 26.3584 8.06045 24.0232 5.72531C21.6881 3.39017 18.5331 2.05969 15.231 2.01758ZM10.3185 23.1801C10.5009 22.3444 10.9636 21.5962 11.6298 21.0596C12.296 20.523 13.1256 20.2303 13.981 20.2301H16.481C17.3363 20.2303 18.1659 20.523 18.8321 21.0596C19.4983 21.5962 19.961 22.3444 20.1435 23.1801C18.6545 24.0561 16.9585 24.518 15.231 24.518C13.5035 24.518 11.8074 24.0561 10.3185 23.1801ZM22.2435 21.5676C21.768 20.4313 20.9674 19.4608 19.9421 18.778C18.9169 18.0953 17.7127 17.7307 16.481 17.7301H13.981C12.7492 17.7307 11.545 18.0953 10.5198 18.778C9.49456 19.4608 8.69392 20.4313 8.21846 21.5676C7.28179 20.6463 6.53583 19.5495 6.02322 18.3398C5.51061 17.1302 5.2414 15.8313 5.23096 14.5176C5.26338 11.8755 6.32736 9.35074 8.19574 7.48236C10.0641 5.61398 12.5889 4.55 15.231 4.51758C17.873 4.55 20.3978 5.61398 22.2662 7.48236C24.1346 9.35074 25.1985 11.8755 25.231 14.5176C25.2205 15.8313 24.9513 17.1302 24.4387 18.3398C23.9261 19.5495 23.1801 20.6463 22.2435 21.5676Z"
                                                    fill="white" />
                                                <path
                                                    d="M15.2308 7.01756C14.57 7.00217 13.9129 7.12098 13.2993 7.3668C12.6858 7.61262 12.1284 7.98036 11.661 8.44775C11.1936 8.91515 10.8259 9.47249 10.5801 10.0861C10.3342 10.6997 10.2154 11.3567 10.2308 12.0176C10.2154 12.6784 10.3342 13.3355 10.5801 13.949C10.8259 14.5626 11.1936 15.12 11.661 15.5874C12.1284 16.0548 12.6858 16.4225 13.2993 16.6683C13.9129 16.9141 14.57 17.033 15.2308 17.0176C15.8916 17.033 16.5487 16.9141 17.1623 16.6683C17.7759 16.4225 18.3332 16.0548 18.8006 15.5874C19.268 15.12 19.6358 14.5626 19.8816 13.949C20.1274 13.3355 20.2462 12.6784 20.2308 12.0176C20.2462 11.3567 20.1274 10.6997 19.8816 10.0861C19.6358 9.47249 19.268 8.91515 18.8006 8.44775C18.3332 7.98036 17.7759 7.61262 17.1623 7.3668C16.5487 7.12098 15.8916 7.00217 15.2308 7.01756ZM15.2308 14.5176C14.8983 14.5336 14.566 14.48 14.2554 14.36C13.9448 14.2401 13.6627 14.0565 13.4273 13.8211C13.1919 13.5856 13.0083 13.3036 12.8883 12.993C12.7684 12.6824 12.7147 12.3501 12.7308 12.0176C12.7147 11.685 12.7684 11.3527 12.8883 11.0422C13.0083 10.7316 13.1919 10.4495 13.4273 10.2141C13.6627 9.97863 13.9448 9.79504 14.2554 9.67509C14.566 9.55514 14.8983 9.50148 15.2308 9.51756C15.5634 9.50148 15.8956 9.55514 16.2062 9.67509C16.5168 9.79504 16.7989 9.97863 17.0343 10.2141C17.2698 10.4495 17.4533 10.7316 17.5733 11.0422C17.6932 11.3527 17.7469 11.685 17.7308 12.0176C17.7469 12.3501 17.6932 12.6824 17.5733 12.993C17.4533 13.3036 17.2698 13.5856 17.0343 13.8211C16.7989 14.0565 16.5168 14.2401 16.2062 14.36C15.8956 14.48 15.5634 14.5336 15.2308 14.5176Z"
                                                    fill="white" />
                                            </svg>
                                            Profile</a></li>
                                </ul>
                                @endif
                            </div>
                            <div class="panel-box">

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                                <a href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="t-btn t-btn-blue t-btn-svg"><svg width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 13V11H7V8L2 12L7 16V13H16Z" fill="white" />
                                        <path
                                            d="M20 3H11C9.897 3 9 3.897 9 5V9H11V5H20V19H11V15H9V19C9 20.103 9.897 21 11 21H20C21.103 21 22 20.103 22 19V5C22 3.897 21.103 3 20 3Z"
                                            fill="white" />
                                    </svg>
                                    Logout
                                </a>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="main-dashboard-header">
                        <div class="page-detail-box">
                            <p>Welcome</p>
                            {{-- <h6>{{ Auth::user()->name }}</h6> --}}
                        </div>
                        <div class="right-header-links">
                            <ul>
                                <li><a href="#"><svg width="30" height="31" viewBox="0 0 30 31"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23.7969 17.2387V12.7562C23.7969 8.73498 21.0656 5.34748 17.3656 4.32873C16.9994 3.40623 16.1044 2.75623 15.0469 2.75623C13.9894 2.75623 13.0944 3.40623 12.7281 4.32873C9.02813 5.34873 6.29688 8.73498 6.29688 12.7562V17.2387L4.16313 19.3725C4.04682 19.4884 3.95459 19.6261 3.89173 19.7778C3.82888 19.9294 3.79664 20.092 3.79688 20.2562V22.7562C3.79688 23.0877 3.92857 23.4057 4.16299 23.6401C4.39741 23.8745 4.71536 24.0062 5.04688 24.0062H25.0469C25.3784 24.0062 25.6963 23.8745 25.9308 23.6401C26.1652 23.4057 26.2969 23.0877 26.2969 22.7562V20.2562C26.2971 20.092 26.2649 19.9294 26.202 19.7778C26.1392 19.6261 26.0469 19.4884 25.9306 19.3725L23.7969 17.2387ZM23.7969 21.5062H6.29688V20.7737L8.43063 18.64C8.54693 18.5241 8.63916 18.3864 8.70202 18.2347C8.76488 18.083 8.79711 17.9204 8.79688 17.7562V12.7562C8.79688 9.30998 11.6006 6.50623 15.0469 6.50623C18.4931 6.50623 21.2969 9.30998 21.2969 12.7562V17.7562C21.2969 18.0887 21.4281 18.4062 21.6631 18.64L23.7969 20.7737V21.5062ZM15.0469 27.7562C15.821 27.7572 16.5762 27.517 17.2075 27.0689C17.8388 26.6209 18.3148 25.9873 18.5694 25.2562H11.5244C11.779 25.9873 12.255 26.6209 12.8863 27.0689C13.5176 27.517 14.2728 27.7572 15.0469 27.7562Z"
                                                fill="#777777" />
                                        </svg>
                                        Notifications</a></li>
                                <li><a href="#"><svg width="30" height="31" viewBox="0 0 30 31"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.0001 6.24376C13.6381 4.99139 11.8554 4.29632 10.0051 4.29626C9.02577 4.29728 8.05632 4.49196 7.15252 4.8691C6.24872 5.24624 5.42843 5.79838 4.73885 6.49376C1.7976 9.44751 1.79885 14.0675 4.74135 17.0088L13.9063 26.1738C14.1188 26.5475 14.5288 26.7888 15.0001 26.7888C15.1936 26.7869 15.384 26.7397 15.5559 26.6509C15.7278 26.5621 15.8765 26.4342 15.9901 26.2775L25.2589 17.0088C28.2013 14.0663 28.2013 9.44751 25.2563 6.48876C24.5671 5.79466 23.7475 5.24364 22.8446 4.86737C21.9417 4.4911 20.9733 4.29701 19.9951 4.29626C18.1449 4.29657 16.3622 4.99161 15.0001 6.24376ZM23.4888 8.25626C25.4426 10.22 25.4438 13.2875 23.4913 15.2413L15.0001 23.7325L6.50885 15.2413C4.55635 13.2875 4.5576 10.22 6.50635 8.26126C7.45635 7.31626 8.69885 6.79626 10.0051 6.79626C11.3113 6.79626 12.5488 7.31626 13.4913 8.25876L14.1163 8.88376C14.2323 8.99995 14.3701 9.09212 14.5217 9.15501C14.6734 9.2179 14.8359 9.25027 15.0001 9.25027C15.1643 9.25027 15.3268 9.2179 15.4785 9.15501C15.6301 9.09212 15.7679 8.99995 15.8838 8.88376L16.5088 8.25876C18.3988 6.37251 21.6013 6.37751 23.4888 8.25626Z"
                                                fill="#777777" />
                                        </svg>
                                        Whishlist</a></li>
                                <li><a href="#"><svg width="30" height="31" viewBox="0 0 30 31"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.25 3C4.87125 3 3.75 4.12125 3.75 5.5V20.5C3.75 21.8787 4.87125 23 6.25 23H10.7325L15 27.2675L19.2675 23H23.75C25.1287 23 26.25 21.8787 26.25 20.5V5.5C26.25 4.12125 25.1287 3 23.75 3H6.25ZM23.75 20.5H18.2325L15 23.7325L11.7675 20.5H6.25V5.5H23.75V20.5Z"
                                                fill="#777777" />
                                            <path
                                                d="M8.75 9.25H21.25V11.75H8.75V9.25ZM8.75 14.25H17.5V16.75H8.75V14.25Z"
                                                fill="#777777" />
                                        </svg>
                                        Messages</a></li>
                                <li><a href="#" class="user-profile-link"><img
                                            src="{{ Storage::url(auth()->user()->profile_img ?? '') }}"
                                            alt="">{{ explode(' ', Auth::user()->name)[0] ?? '' }}</a></li>
                            </ul>
                        </div>
                    </div>
                    @yield('content')

                </div>
            </div>
        </div>

    </section>

    <script src="{{ asset('assets/custom-js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Load Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>

</html>

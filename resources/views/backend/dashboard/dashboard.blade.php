@extends('backend.layout.main')
@push('title')
    <title>Dashboard</title>
@endpush
@section('main-content')
	<!--start page wrapper -->

    <div class="page-content">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Revenue</p>
                                <h4 class="my-1">₹ 4805</h4>
                                <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
                            </div>
                            <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
                            </div>
                        </div>
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Patients</p>
                                <h4 class="my-1">5,490</h4>
                                <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>14% Since last week</p>
                            </div>
                            <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-group'></i>
                            </div>
                        </div>
                        <div id="chart2"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Hospital Visitors</p>
                                <h4 class="my-1">6,260</h4>
                                <p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i>12.4% Since last week</p>
                            </div>
                            <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-binoculars'></i>
                            </div>
                        </div>
                        <div id="chart3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row row-cols-1 row-cols-xl-2">
            <div class="col d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">Hospital Metrics</h5>
                                <p class="mb-0 font-13 text-secondary"><i class='bx bxs-calendar'></i>in last 30 days revenue</p>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22  text-option'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-sm-3 mt-4">
                            <div class="col">
                                <div>
                                    <p class="mb-0 text-secondary">Revenue</p>
                                    <h4 class="my-1">₹ 4805</h4>
                                    <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$1458 Since last month</p>
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <p class="mb-0 text-secondary">Total Patients</p>
                                    <h4 class="my-1">8.4K</h4>
                                    <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>12.3% Since last month</p>
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <p class="mb-0 text-secondary">Hospital Visitors</p>
                                    <h4 class="my-1">59K</h4>
                                    <p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i>2.4% Since last month</p>
                                </div>
                            </div>
                        </div>
                        <div id="chart4"></div>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header border-bottom-0">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">Upcoiming Discharge</h5>
                                <p class="mb-0 font-13 text-secondary"><i class='bx bxs-calendar'></i>in 07 days</p>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-list p-3 mb-3">
                        <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="product-img">
                                        <img src="{{url('vertical/assets/images/patient/patient-f.png')}}" alt="" />
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1">Latika Mandal</h6>
                                        <p class="mb-0">Ref.ID: #9568470</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <h6 class="mb-1">Discharge Date</h6>
                                <p class="mb-0">30-06-2023</p>
                            </div>
                            <div class="col-sm tcnt">
                                <h6 class="mb-1"><a href="#">Proceed For Discharge</a></h6>
                            </div>
                            <!--<div class="col-sm">-->
                            <!--	<div id="chart5"></div>-->
                            <!--</div>-->
                        </div>
                        <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="product-img">
                                        <img src="{{url('vertical/assets/images/patient/patient-m.jpg')}}" alt="" />
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1">Niramal Promanik</h6>
                                        <p class="mb-0">Ref.ID: #9568471</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <h6 class="mb-1">Discharge Date</h6>
                                <p class="mb-0">30-06-2023</p>
                            </div>
                            <div class="col-sm tcnt">
                                <h6 class="mb-1"><a href="#">Proceed For Discharge</a></h6>
                            </div>
                        </div>
                        <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="product-img">
                                        <img src="{{url('vertical/assets/images/patient/patient-f.png')}}" alt="" />
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1">Latika Mandal</h6>
                                        <p class="mb-0">Ref.ID: #9568470</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <h6 class="mb-1">Discharge Date</h6>
                                <p class="mb-0">30-06-2023</p>
                            </div>
                            <div class="col-sm tcnt">
                                <h6 class="mb-1"><a href="#">Proceed For Discharge</a></h6>
                            </div>
                        </div>
                        <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="product-img">
                                        <img src="{{url('vertical/assets/images/patient/patient-f.png')}}" alt="" />
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1">Latika Mandal</h6>
                                        <p class="mb-0">Ref.ID: #9568470</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <h6 class="mb-1">Discharge Date</h6>
                                <p class="mb-0">30-06-2023</p>
                            </div>
                            <div class="col-sm tcnt">
                                <h6 class="mb-1"><a href="#">Proceed For Discharge</a></h6>
                            </div>
                        </div>
                        <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="product-img">
                                        <img src="{{url('vertical/assets/images/patient/patient-f.png')}}" alt="" />
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1">Latika Mandal</h6>
                                        <p class="mb-0">Ref.ID: #9568470</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <h6 class="mb-1">Discharge Date</h6>
                                <p class="mb-0">30-06-2023</p>
                            </div>
                            <div class="col-sm tcnt">
                                <h6 class="mb-1"><a href="#">Proceed For Discharge</a></h6>
                            </div>
                        </div>
                        <div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="product-img">
                                        <img src="{{url('vertical/assets/images/patient/patient-f.png')}}" alt="" />
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1">Latika Mandal</h6>
                                        <p class="mb-0">Ref.ID: #9568470</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <h6 class="mb-1">Discharge Date</h6>
                                <p class="mb-0">30-06-2023</p>
                            </div>
                            <div class="col-sm tcnt">
                                <h6 class="mb-1"><a href="#">Proceed For Discharge</a></h6>
                            </div>
                        </div>
                        <div class="row border mx-0 py-2 radius-10 cursor-pointer">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="product-img">
                                        <img src="{{url('vertical/assets/images/patient/patient-f.png')}}" alt="" />
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1">Latika Mandal</h6>
                                        <p class="mb-0">Ref.ID: #9568470</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <h6 class="mb-1">Discharge Date</h6>
                                <p class="mb-0">30-06-2023</p>
                            </div>
                            <div class="col-sm tcnt">
                                <h6 class="mb-1"><a href="#">Proceed For Discharge</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-xl-8 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">Patients Information</h5>
                                <p class="mb-0 font-13 text-secondary"><i class='bx bxs-calendar'></i>in last 30 days revenue</p>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table align-middle mb-0 table-hover" id="Transaction-History">
                                <thead class="table-light">
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Address</th>
                                        <th>Admit Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="{{url('vertical/assets/images/avatars/avatar-1.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #8547846</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Address- Raiganj, U/D W.B.</td>
                                        <td>Jan 10, 2021</td>
                                        <td>
                                            <div class="badge rounded-pill bg-success w-100">Completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="{{url('vertical/assets/images/avatars/avatar-2.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Pauline Bird</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #9653248</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Address- Raiganj, U/D W.B.</td>
                                        <td>Jan 10, 2021</td>
                                        <td>
                                            <div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="{{url('vertical/assets/images/avatars/avatar-3.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Ralph Alva</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #7689524</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Address- Raiganj, U/D W.B.</td>
                                        <td>Jan 10, 2021</td>
                                        <td>
                                            <div class="badge rounded-pill bg-danger w-100">Declined</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="{{url('vertical/assets/images/avatars/avatar-4.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from John Roman</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #8335884</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Address- Raiganj, U/D W.B.</td>
                                        <td>Jan 10, 2021</td>
                                        <td>
                                            <div class="badge rounded-pill bg-success w-100">Completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="{{url('vertical/assets/images/avatars/avatar-7.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from David Buckley</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #7865986</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Address- Raiganj, U/D W.B.</td>
                                        <td>Jan 10, 2021</td>
                                        <td>
                                            <div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="{{url('vertical/assets/images/avatars/avatar-8.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Address- Raiganj, U/D W.B.</td>
                                        <td>Jan 10, 2021</td>
                                        <td>
                                            <div class="badge rounded-pill bg-success w-100">Completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="{{url('vertical/assets/images/avatars/avatar-9.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from James Caviness</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #3775420</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Address- Raiganj, U/D W.B.</td>
                                        <td>Jan 10, 2021</td>
                                        <td>
                                            <div class="badge rounded-pill bg-success w-100">Completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="{{url('vertical/assets/images/avatars/avatar-10.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Peter Costanzo</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #3768920</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Address- Raiganj, U/D W.B.</td>
                                        <td>Jan 10, 2021</td>
                                        <td>
                                            <div class="badge rounded-pill bg-success w-100">Completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="{{url('vertical/assets/images/avatars/avatar-11.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Johnny Seitz</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #9673520</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Address- Raiganj, U/D W.B.</td>
                                        <td>Jan 10, 2021</td>
                                        <td>
                                            <div class="badge rounded-pill bg-danger w-100">Declined</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="{{url('vertical/assets/images/avatars/avatar-12.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Address- Raiganj, U/D W.B.</td>
                                        <td>Jan 10, 2021</td>
                                        <td>
                                            <div class="badge rounded-pill bg-success w-100">Completed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="{{url('vertical/assets/images/avatars/avatar-13.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from David Buckley</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Address- Raiganj, U/D W.B.</td>
                                        <td>Jan 10, 2021</td>
                                        <td>
                                            <div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <img src="{{url('vertical/assets/images/avatars/avatar-14.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1 font-14">Payment from Thomas Wheeler</h6>
                                                    <p class="mb-0 font-13 text-secondary">Refrence Id #4278620</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Address- Raiganj, U/D W.B.</td>
                                        <td>Jan 10, 2021</td>
                                        <td>
                                            <div class="badge rounded-pill bg-success w-100">Completed</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1 text-secondary">Bounce Rate</p>
                                <h4 class="mb-0">48.32%</h4>
                            </div>
                            <div class="ms-auto">
                                <p class="mb-0 font-13 text-success">+12.34 Increase</p>
                                <p class="mb-0 font-13 text-secondary">From Last Week</p>
                            </div>
                        </div>
                    </div>
                    <div id="chart12"></div>
                </div>
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1 text-secondary">Pageviews</p>
                                <h4 class="mb-0">52.64%</h4>
                            </div>
                            <div class="ms-auto">
                                <p class="mb-0 font-13 text-success">+21.34 Increase</p>
                                <p class="mb-0 font-13 text-secondary">From Last Week</p>
                            </div>
                        </div>
                    </div>
                    <div id="chart13"></div>
                </div>
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1 text-secondary">New Sessions</p>
                                <h4 class="mb-0">68.23%</h4>
                            </div>
                            <div class="ms-auto">
                                <p class="mb-0 font-13 text-success">+18.42 Increase</p>
                                <p class="mb-0 font-13 text-secondary">From Last Week</p>
                            </div>
                        </div>
                    </div>
                    <div id="chart14"></div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row row-cols-1 row-cols-lg-3">
            <div class="col d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-0">Top Categories</h5>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-5" id="chart15"></div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Kids <span class="badge bg-success rounded-pill">25</span>
                        </li>
                        <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Women <span class="badge bg-danger rounded-pill">10</span>
                        </li>
                        <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Men <span class="badge bg-primary rounded-pill">65</span>
                        </li>
                        <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Furniture <span class="badge bg-warning text-dark rounded-pill">14</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <p class="font-weight-bold mb-1 text-secondary">Visitors</p>
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="mb-0">43,540</h4>
                            </div>
                            <div class="">
                                <p class="mb-0 align-self-center font-weight-bold text-success ms-2">4.4 <i class='bx bxs-up-arrow-alt mr-2'></i>
                                </p>
                            </div>
                        </div>
                        <div id="chart21"></div>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card radius-10 w-100 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-0">Sales Overiew</h5>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-5" id="chart20"></div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <div class="d-flex align-items-center justify-content-between text-center">
                            <div>
                                <h6 class="mb-1 font-weight-bold">$289.42</h6>
                                <p class="mb-0 text-secondary">Last Week</p>
                            </div>
                            <div class="mb-1">
                                <h6 class="mb-1 font-weight-bold">$856.14</h6>
                                <p class="mb-0 text-secondary">Last Month</p>
                            </div>
                            <div>
                                <h6 class="mb-1 font-weight-bold">$987,25</h6>
                                <p class="mb-0 text-secondary">Last Year</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-12 col-xl-6 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-0">Patient (Pathology)</h5>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="customers-list p-3 mb-3">
                        <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                            <div class="">
                                <img src="{{url('vertical/assets/images/avatars/p1.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-1 font-14">Arman MD.</h6>
                                <p class="mb-0 font-13 text-secondary">emy_jac@xyz.com</p>
                            </div>
                            <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                                <!--<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>-->
                                <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                            <div class="">
                                <img src="{{url('vertical/assets/images/avatars/p2.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-1 font-14">Md. Minal</h6>
                                <p class="mb-0 font-13 text-secondary">martin.hug@xyz.com</p>
                            </div>
                            <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                                <!--<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>-->
                                <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                            <div class="">
                                <img src="{{url('vertical/assets/images/avatars/p1.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-1 font-14">Suprana Karmakar.</h6>
                                <p class="mb-0 font-13 text-secondary">laura_01@xyz.com</p>
                            </div>
                            <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                                <!--<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>-->
                                <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                            <div class="">
                                <img src="{{url('vertical/assets/images/avatars/avatar-24.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-1 font-14">Dip Das</h6>
                                <p class="mb-0 font-13 text-secondary">s.dip@xyz.com</p>
                            </div>
                            <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                                <!--<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>-->
                                <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                            <div class="">
                                <img src="{{url('vertical/assets/images/avatars/p2.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-1 font-14">Kunal Malik</h6>
                                <p class="mb-0 font-13 text-secondary">kunal@xyz.com</p>
                            </div>
                            <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                                <!--<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>-->
                                <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                            <div class="">
                                <img src="{{url('vertical/assets/images/avatars/p1.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-1 font-14">Paul Mandal</h6>
                                <p class="mb-0 font-13 text-secondary">pauly.b@xyz.com</p>
                            </div>
                            <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                                <!--<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>-->
                                <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                            <div class="">
                                <img src="{{url('vertical/assets/images/avatars/p1.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-1 font-14">Swata Maya</h6>
                                <p class="mb-0 font-13 text-secondary">swatamma@xyz.com</p>
                            </div>
                            <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                                <!--<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>-->
                                <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>
                        <div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                            <div class="">
                                <img src="{{url('vertical/assets/images/avatars/p1.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-1 font-14">Danish Kr. Roy</h6>
                                <p class="mb-0 font-13 text-secondary">danish.b@xyz.com</p>
                            </div>
                            <div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
                                <!--<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>-->
                                <a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-0">Orders Summary</h5>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-0 row-cols-1 row-cols-md-3">
                            <div class="col border-end">
                                <div id="chart16"></div>
                            </div>
                            <div class="col border-end">
                                <div id="chart17"></div>
                            </div>
                            <div class="col">
                                <div id="chart18"></div>
                            </div>
                        </div>
                        <div id="chart19"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="mb-0">Order Medicines</h5>
                    </div>
                    <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
                    </div>
                </div>
                <hr/>
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Order id</th>
                                <th>Product</th>
                                <th>Customer/Dr.</th>
                                <th>Date</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#897656</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="recent-product-img">
                                            <img src="{{url('vertical/assets/images/icons/m1.png')}}" alt="">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">medicines 1</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Dr. Alok Mandal.</td>
                                <td>12 Jul 2020</td>
                                <td>640.00</td>
                                <td>
                                    <div class="d-flex align-items-center text-danger">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                        <span>Pending</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
                                        <a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#987549</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="recent-product-img">
                                            <img src="{{url('vertical/assets/images/icons/m1.png')}}" alt="">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">Medicines 4</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Dr. Bk. Mukharji</td>
                                <td>14 Jul 2023</td>
                                <td>450.00</td>
                                <td>
                                    <div class="d-flex align-items-center text-primary">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                        <span>Dispatched</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
                                        <a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#685749</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="recent-product-img">
                                            <img src="{{url('vertical/assets/images/icons/m1.png')}}" alt="">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">Medicines xyz</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Dr. SS Mandal</td>
                                <td>15 Jul 2020</td>
                                <td>670.00</td>
                                <td>
                                    <div class="d-flex align-items-center text-success">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                        <span>Completed</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
                                        <a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
                                    </div>
                                </td>
                            </tr>


                                <td>#224578</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="recent-product-img">
                                            <img src="{{url('vertical/assets/images/icons/m1.png')}}" alt="">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">Medicine n</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Arnav Kr.</td>
                                <td>22 Jul 2023</td>
                                <td>980.00</td>
                                <td>
                                    <div class="d-flex align-items-center text-primary">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                        <span>Dispatched</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
                                        <a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#447896</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="recent-product-img">
                                            <img src="{{url('vertical/assets/images/icons/m1.png')}}" alt="">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">Medicine abc</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Dr. Pratik</td>
                                <td>28 Jul 2020</td>
                                <td>960.00</td>
                                <td>
                                    <div class="d-flex align-items-center text-danger">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                        <span>Pending</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
                                        <a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--end page wrapper -->
@endsection()
@section('script')
<script>
    sidebarSelectMaintain("","home");
</script>
@endsection()

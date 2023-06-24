@extends('backend.layout.main')
@push('title')
    <title>Update Patient Details</title>
@endpush
@section('main-content')
<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">



      <div class="row">
        <div class="col-xl">

            <div class="card">

                <div class="card-body">
                    <h6 class="mb-0 text-uppercase">Patient Details</h6>
                    <hr/>

                    <ul class="nav nav-tabs nav-primary" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-bs-toggle="tab" href="#patient_info" role="tab" aria-selected="true">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-user font-18 me-1"></i>
                                    </div>
                                    <div class="tab-title">Patient Info</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#medicine_info" role="tab" aria-selected="false" tabindex="-1">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-user-pin font-18 me-1"></i>
                                    </div>
                                    <div class="tab-title">Medicine Info</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#service_info" role="tab" aria-selected="false" tabindex="-1">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-pin font-18 me-1"></i>
                                    </div>
                                    <div class="tab-title">Service info</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#payment_info" role="tab" aria-selected="false" tabindex="-1">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-rupee font-18 me-1"></i>
                                    </div>
                                    <div class="tab-title">Payment info</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#log_info" role="tab" aria-selected="false" tabindex="-1">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-info-square font-18 me-1"></i>
                                    </div>
                                    <div class="tab-title">Log Info</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content py-3">
                        <div class="tab-pane fade active show" id="patient_info" role="tabpanel">
                            @include('backend.dashboard.patient.chlid-tab.patient_info')
                        </div>
                        <div class="tab-pane fade" id="medicine_info" role="tabpanel">
                            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                        </div>
                        <div class="tab-pane fade" id="service_info" role="tabpanel">
                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                        </div>
                        <div class="tab-pane fade" id="payment_info" role="tabpanel">
                            @include('backend.dashboard.patient.chlid-tab.patient_payment')
                        </div>
                        <div class="tab-pane fade" id="log_info" role="tabpanel">
                            @include('backend.dashboard.patient.chlid-tab.patient_log')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>



    </div>
    <!-- / Content -->



    <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->

@endsection()
@section('script')
<script>
    sidebarSelectMaintain("role-menu","view-role");

</script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('.datatable').DataTable({
            "columnDefs": [ {
                'targets': 0,
                'searchable': false,
                'orderable': false,
            } ],
            "paging": false
        });

        $("#selectAll").click(function () {
            var checkAll = $("#selectAll").prop('checked');
                if (checkAll) {
                    $(".case").prop("checked", true);
                } else {
                    $(".case").prop("checked", false);
                }
            });

        $(".case").click(function(){
            if($(".case").length == $(".case:checked").length) {
                $("#selectAll").prop("checked", true);
            } else {
                $("#selectAll").prop("checked", false);
            }

        });
    } );




</script>
@endsection()

@extends('layouts.dashboard')
@section('content')


<div class="row">
    <div class="col-xxl-3">
        <div class="card overflow-hidden">

            <div class="card bg-primary">
                <div class="card-body py-2 px-2">
                    <div class="d-flex gap-2 align-items-center">

                        <div class="flex-grow-1 py-4">
                            <h5 class="text-white">Payroll Data</h5>
                            <p class="text-white-50 mb-0">You can Provide your members' Data by either uploading payroll
                                file, Reusing saved
                                file or Clicking the "add member" button below </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end card-->

            <div class="d-flex py-2 px-3 py-4 mt-0">
                <a href="#" class="btn btn-subtle-primary custom-toggle w-100">
                    <span class="icon-on"><i class="bi bi-download align-baseline me-1"></i> Download Payroll
                        Template</span>
                </a>
            </div>


            <form action="#" method='POST' enctype="multipart/form-data">
                <div class="card-body border-top border-dark">
                    @include('shared.notifications')
                    <div class="mb-2 py-4">
                        <h6 class="mb-2 text-center text-muted fs-10">1. Upload File</h6>
                        @csrf
                        <div>
                            <input class="form-control rounded-4 border-dark" type="file" name='file_upload' multiple>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-check mt-3">
                                <input class="form-check-input" value='true' name='save_template' type="checkbox">
                                <label class="form-check-label" for="formCheck6">
                                    Save template for later use
                                </label>
                            </div>
                            <div>
                                <button type='submit'
                                    class="btn btn-sm btn-primary rounded-3 float-end mt-3">Upload</button>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- <button type='submit' class="btn btn-sm btn-success rounded-3 float-end my-2" id="sa-params" >Upload Payroll</button> -->
            </form>

        </div>

    </div>
    <div class="col-9">
        @include('components.topnav')
        <div class="tab-content">
            <div class="tab-pane active" id="personalDetails" role="tabpanel">
                <div class="row">
                    <div class="col-xl-4 col-sm-6">
                        <div class="card file-manager-widgets"
                            style="background-size: 95px;background-position:right bottom;">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-grow-1">
                                        <div class="avatar-sm">
                                            <div class="avatar-title bg-success-subtle text-success rounded fs-xl">
                                                <i class="bi bi-cash-coin"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                    </div>
                                </div>
                                <h4 class="fw-semibold mb-3"><span class="counter-value"
                                        data-target="{{$payment_count??'0'}}">{{$payment_count??'0'}}</span> </h4>
                                <p class="fw-medium text-muted mb-0">Total Payments</p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xl-4 col-sm-6">
                        <div class="card file-manager-widgets"
                            style="background-size: 95px;background-position:right bottom;">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-grow-1">
                                        <div class="avatar-sm">
                                            <div class="avatar-title bg-warning-subtle text-warning rounded fs-xl">
                                                <i class="bi bi-people"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                    </div>
                                </div>
                                <h4 class="fw-semibold mb-3"><span class="counter-value"
                                        data-target="{{($active_employee_count )??'0'}}">{{($active_employee_count)??'0'}}</span>
                                </h4>
                                <p class="fw-medium text-muted mb-0">Total Members</p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xl-4 col-sm-6">
                        <div class="card file-manager-widgets"
                            style="background-size: 95px;background-position:right bottom;">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-grow-1">
                                        <div class="avatar-sm">
                                            <div class="avatar-title bg-danger-subtle text-danger rounded fs-xl">
                                                <i class="bi bi-pie-chart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <p><span class="text-success me-1"><i
                                                    class="ri-arrow-right-up-line fs-sm align-middle"></i> +1</span>
                                            than last Month</p>
                                    </div>
                                </div>
                                <h4 class="fw-semibold mb-3"><span class="counter-value"
                                        data-target="{{$submission_count??'0'}}">{{$submission_count??'0'}}</span></h4>
                                <p class="fw-medium text-muted mb-0">Submissions</p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class=" p-5 card">
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <h5>Recent Submissions</h5>
                            <table class="table table-centered align-middle table-custom-effect table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Submission Code</th>
                                        <th scope="col">Period</th>
                                        <th scope="col">UPN Generated</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Errors </th>
                                        <th scope="col">Members</th>
                                        <!-- <th scope="col">Remarks</th> -->
                                        <th scope="col">Date updated</th>
                                        {{-- <th scope="col" class="text-center">
                                            Action
                                        </th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($submissions??[] as $item)
                                    <tr>
                                        <td>
                                            {{ ($submissions->currentpage()-1) * $submissions->perpage() + $loop->index
                                            + 1 }}
                                        </td>
                                        <td>{{$item->code??'--'}}</td>
                                        <td>{{$item->contribution_month ?? '--' }}/{{$item->contribution_year ?? '--' }}
                                        </td>
                                        <td>
                                            <a href="{{ route('bills.index') }}" style='cursor:pointer'>
                                                {{$item->upn}}
                                            </a>
                                        </td>
                                        <td>
                                            @if($item->status==4)
                                            <span class="text-secondary">
                                                {{$item->contribution_status->name ?? '--' }}</span>
                                            @elseif($item->status==5 || $item->status==14)
                                            <span class="text-success">
                                                Submitted
                                            </span>
                                            @elseif($item->status==13)
                                            <span class="text-danger">
                                                Rejected
                                            </span>
                                            @elseif($item->status==2)
                                            <span class="text-success">
                                                {{$item->contribution_status->name ?? '--' }}</span>
                                            @else
                                            <span class="text-danger">
                                                {{$item->contribution_status->name ?? '--' }}</span> @endif
                                        </td>
                                        <td style='cursor:pointer'>
                                            @if(count($item->errors??[]) > 0)
                                            <a class='text-info'
                                                href='{{route("submission.errors",["uuid"=>$item->uuid])}}'
                                                data-bs-toggle="tooltip" data-bs-custom-class="primary-tooltip"
                                                data-bs-placement="top" title="Click here to check errors found">
                                                View Error(s)
                                            </a> @else
                                            <a href="#" class="dropdown-item" data-bs-toggle="tooltip"
                                                data-bs-custom-class="primary-tooltip" data-bs-placement="top"
                                                title="All Good. No errors Found">
                                                <i class="ph-thumbs-up align-middle me-1">
                                                </i>
                                            </a>
                                            @endif
                                        </td>
                                        <td style='cursor:pointer'>
                                            <a class='text-info'
                                                href='{{route("submission.errors",["uuid"=>$item->uuid])}}'
                                                data-bs-toggle="tooltip" data-bs-custom-class="primary-tooltip"
                                                data-bs-placement="top"
                                                title="Click here to see the list of members in this submission">
                                                {{count($item->employees??[]) ?? '--' }} Member(s)
                                            </a>
                                        </td>
                                        <!-- <td>{{$item->remarks??'--'}}</td> -->
                                        <td>{{$item->updated_at ?? '--' }}</td>
                                        {{-- <td class="text-center">
                                            <div class="dropdown position-static" wire:ignore>
                                                <button class="btn btn-subtle-primary btn-sm btn-icon" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-three-dots-vertical">

                                                    </i>
                                                </button>

                                                @if (in_array($item->status,[13,14]))
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        @if($item->status==13)
                                                        <a class="dropdown-item" data-bs-toggle="tooltip"
                                                            data-bs-custom-class="primary-tooltip"
                                                            data-bs-placement="top"
                                                            title="If you want to resubmit for a different month, edit the period for this submission."
                                                            href="#">
                                                            <i class="ph-arrow-clockwise-light align-middle me-1">
                                                            </i>
                                                            <span data-bs-toggle="modal"
                                                                data-bs-target="#resubmit{{$item->id}}"
                                                                href="#">Re-Submit</span>
                                                        </a>
                                                        @elseif($item->status==14)
                                                        <a class="dropdown-item" data-bs-toggle="tooltip"
                                                            data-bs-custom-class="primary-tooltip"
                                                            data-bs-placement="top"
                                                            title="When you reuse a submission, the same submission is re-tried."
                                                            href="#">
                                                            <i class="ph-arrow-clockwise-light align-middle me-1">

                                                            </i>
                                                            <span data-bs-toggle="modal"
                                                                data-bs-target="#editSubmission{{$item->id}}"
                                                                href="#">Re-Use</span>
                                                        </a>
                                                        @endif
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{route('sf24.index',['uuid'=>$item->uuid])}}"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-custom-class="primary-tooltip"
                                                            data-bs-placement="left"
                                                            title="Gives you a breakdown of your SF-24">
                                                            <i class="ph-eye-thin align-middle me-1">

                                                            </i> View SF-24 </a>
                                                    </li>
                                                    <li>
                                                        @if ($item->invoice_uuid)
                                                        <a class="dropdown-item"
                                                            href="{{route('eslip',['uuid'=>$item->invoice_uuid])}}"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-custom-class="primary-tooltip"
                                                            data-bs-placement="left"
                                                            title="Proceed to pay for your UPN">
                                                            <i class="ph-credit-card-light align-middle me-1">

                                                            </i> Pay UPN </a>
                                                    </li>
                                                    @endif
                                                </ul>
                                                @endif
                                            </div>
                                        </td> --}}
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan='10'>

                                            <div class="text-center py-4">
                                                <i class="ph-magnifying-glass fs-1 text-primary">

                                                </i>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted mb-0">
                                                    We've searched submissions but did not find any...
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                                <!-- end tbody -->
                            </table>
                            <!-- end table -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
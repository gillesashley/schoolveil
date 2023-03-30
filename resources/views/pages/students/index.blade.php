@extends('layouts.app')

@section('content')
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header d-flex">
                                            <h5 class="mr-auto">My Students</h5>
                                            <button type="button" class="btn btn-primary ml-auto" title=""
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    data-original-title="btn btn-primary"><i class="fas fa-plus"></i>Add
                                                Student
                                            </button>
                                        </div>
                                        @include('pages.students.create')

                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <div id="key-act-button_wrapper"
                                                     class="dataTables_wrapper dt-bootstrap4">

                                                </div>
                                                <table id="key-act-button"
                                                       class="display table nowrap table-striped table-hover dataTable"
                                                       style="width: 100%;" role="grid"
                                                       aria-describedby="key-act-button_info">
                                                    <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="key-act-button" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending"
                                                            style="width: 105px;">Name
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="key-act-button" rowspan="1" colspan="1"
                                                            aria-label="Position: activate to sort column ascending"
                                                            style="width: 164px;">Position
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="key-act-button" rowspan="1" colspan="1"
                                                            aria-label="Office: activate to sort column ascending"
                                                            style="width: 72px;">Office
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="key-act-button" rowspan="1" colspan="1"
                                                            aria-label="Age: activate to sort column ascending"
                                                            style="width: 26px;">Age
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="key-act-button" rowspan="1" colspan="1"
                                                            aria-label="Start date: activate to sort column ascending"
                                                            style="width: 68px;">Start date
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="key-act-button" rowspan="1" colspan="1"
                                                            aria-label="Salary: activate to sort column ascending"
                                                            style="width: 42px;">Salary
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>


                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">Airi Satou</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>33</td>
                                                        <td>2008/11/28</td>
                                                        <td>$162,700</td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">Name</th>
                                                        <th rowspan="1" colspan="1">Position</th>
                                                        <th rowspan="1" colspan="1">Office</th>
                                                        <th rowspan="1" colspan="1">Age</th>
                                                        <th rowspan="1" colspan="1">Start date</th>
                                                        <th rowspan="1" colspan="1">Salary</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- [ Main Content ] end -->
@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('assets/plugins/data-tables/css/datatables.min.css')}}">
@endpush

@push('script')
    <script src="{{asset('assets/plugins/data-tables/js/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/tbl-datatable-custom.js')}}"></script>
@endpush

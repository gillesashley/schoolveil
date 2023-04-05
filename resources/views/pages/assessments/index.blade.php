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
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            <h4 class="alert-heading">{{ session('success') }}</h4>
                                        </div>
                                    @endif
                                    <div class="card">
                                        <div class="card-header d-flex">
                                            <h5 class="mr-auto">Assessments</h5>
                                            <button type="button" class="btn btn-primary ml-auto" title=""
                                                    data-toggle="modal" data-target="#createAssessmentModal"
                                                    data-original-title="btn btn-primary"><i class="fas fa-plus"></i>Add
                                                Assessment
                                            </button>
                                            @include('pages.assessments.create')
                                        </div>


                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <div id="key-act-button_wrapper"
                                                     class="dataTables_wrapper dt-bootstrap4">

                                                </div>
                                                @if(count($assessments) < 1)
                                                    <h1 class="text-danger">Create an assessment</h1>
                                                @else
                                                    <table id="key-act-button"
                                                           class="display table nowrap table-striped table-hover dataTable"
                                                           style="width: 100%;" role="grid"
                                                           aria-describedby="key-act-button_info">
                                                        <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0"
                                                                aria-controls="key-act-button" rowspan="1" colspan="1"
                                                                aria-sort="ascending"
                                                                aria-label="hash: activate to sort column descending"
                                                                style="width: 105px;">#
                                                            </th>
                                                            <th class="sorting_asc" tabindex="0"
                                                                aria-controls="key-act-button" rowspan="1" colspan="1"
                                                                aria-sort="ascending"
                                                                aria-label="Name: activate to sort column descending"
                                                                style="width: 105px;">Assessment Name
                                                            </th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="key-act-button" rowspan="1" colspan="1"
                                                                aria-label="Position: activate to sort column ascending"
                                                                style="width: 164px;">Action
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($assessments as $index => $assessment)
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1">{{ $index+1 }}</td>
                                                                <td class="sorting_1">{{ $assessment->assessment_name }}</td>
                                                                <td>
                                                                    <button type="button"
                                                                            class="btn btn-icon btn-success"
                                                                            data-toggle="modal"
                                                                            data-target="#showStudentModal-{{ $assessment->id }}">
                                                                        <i
                                                                            class="fas fa-eye"></i>
                                                                    </button>
                                                                    <!-- Call the show modal -->
                                                                    @include('pages.students.show', ['student' => $assessment])
                                                                    <button
                                                                        class="btn btn-primary btn-sm btn-icon"
                                                                        data-toggle="modal"
                                                                        data-target="#updateStudentModal-{{$assessment->id}}"
                                                                        title="Edit">
                                                                        <i class="fas fa-edit"></i>
                                                                    </button>
                                                                    <!-- Call the edit modal -->
                                                                    @include('pages.assessments.edit', ['student' => $assessment])

                                                                    <form
                                                                        action="{{ route('assessments.destroy', $assessment->id) }}"
                                                                        method="POST" style="display: inline-block">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                                class="btn btn-danger btn-sm btn-icon"
                                                                                title="Delete"
                                                                                onclick="return confirm('Are you sure you want to delete this Assessment?')">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                @endif
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
    <!-- [ Main Content ] end -->
@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('assets/plugins/data-tables/css/datatables.min.css')}}">
@endpush

@push('script')
    <script src="{{asset('assets/plugins/data-tables/js/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/tbl-datatable-custom.js')}}"></script>
@endpush

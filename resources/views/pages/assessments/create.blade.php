<div class="modal fade" id="createAssessmentModal" tabindex="-1" role="dialog"
     aria-labelledby="createAssessmentModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createAssessmentModalLabel">Enter Assessment Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('assessments.store') }}" id="assessmentCreateForm" novalidate>
                    @csrf

                    <div class="form-group">
                        <label for="assessment_name" class="col-form-label">Assessment Name</label>
                        <input type="text" class="form-control @error('assessment_name') is-invalid @enderror"
                               id="assessment_name"
                               name="assessment_name" value="{{old('assessment_name')}}"
                               placeholder="Eg. Homework 1, Classtest 1" required>
                        @error('assessment_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject" class="col-form-label">Subject:</label>
                        <select class="mb-3 form-control @error('subject') is-invalid @enderror" name="subject"
                                id="subject" required>
                            <option value="">--Select--</option>
                            @foreach($subjects as $index => $subject)
                                <option value="{{$subject->name}}">{{$subject->name}}</option>
                            @endforeach
                        </select>
                        @error('subject')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="score_over" class="col-form-label">Score Over?:</label>
                        <input type="number" class="form-control @error('score_over') is-invalid @enderror"
                               id="score_over"
                               name="score_over" value="{{old('score_over')}}" placeholder="Eg. 40" required>
                        @error('score_over')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <h3>Enter Scores of students</h3>
                        @foreach($students as $index => $student)
                            <label
                                for="score-{{ $student->id }}">{{ $student->firstname }} {{ $student->lastname }}</label>
                            <input type="number" class="form-control" id="score-{{ $student->id }}"
                                   name="score[{{ $student->id }}]" max="100" required>
                        @endforeach
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    <!-- hidden inputs -->
                </form>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        $(document).ready(function () {
            $('#assessmentCreateForm').submit(function (event) {
                var form = $(this);
                if (form[0].checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.addClass('was-validated');
            });
        });
    </script>
@endpush

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
                        <label for="score-over" class="col-form-label">Score Over?:</label>
                        <input type="number" class="form-control @error('score-over') is-invalid @enderror"
                               id="score-over"
                               name="score-over" value="{{old('score-over')}}" placeholder="Eg. 40" required>
                        @error('score-over')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <h3>Enter Scores of students</h3>
                    @foreach($students as $index => $student)
                        <p>{{ $student->firstname }} {{{ $student->lastname }}}</p>
                        <input type="number" class="form-control"
                               id="score-over"
                               name="score" required>
                    @endforeach


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

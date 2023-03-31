<div class="modal fade" id="updateSubjectModal-{{$subject->id}}" tabindex="-1" role="dialog"
     aria-labelledby="updateSubjectModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateSubjectModalLabel">
                    Edit {{$subject->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('subjects.update', $subject->id) }}" id="subjectEditForm"
                      novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="firstname" class="col-form-label">Name:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                               name="subject" value="{{ $subject->name }}" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        $(document).ready(function () {
            $('#subjectEditForm').submit(function (event) {
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



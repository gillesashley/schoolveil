<div class="modal fade" id="updateStudentModal-{{$student->id}}" tabindex="-1" role="dialog"
     aria-labelledby="updateStudentModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateStudentModalLabel">
                    Edit {{$student->firstname}} {{ $student->lastname }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('students.update', $student->id) }}" id="studentEditForm"
                      novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="firstname" class="col-form-label">Firstname:</label>
                        <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname"
                               name="firstname" value="{{ $student->firstname }}" required>
                        @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-form-label">Lastname:</label>
                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname"
                               name="lastname"
                               value="{{ $student->lastname }}" required>
                        @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-form-label">Address:</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                               name="address"
                               value="{{ $student->address }}" required>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-form-label">Gender:</label>
                        <select class="mb-3 form-control @error('gender') is-invalid @enderror" name="gender" required>
                            <option selected>--Select--</option>
                            <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>Female</option>
                        </select>
                        @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="guardian" class="col-form-label">Guardian:</label>
                        <input type="text" class="form-control @error('guardian') is-invalid @enderror" id="guardian"
                               name="guardian"
                               value="{{ $student->guardian }}" required>
                        @error('guardian')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="dob" class="col-form-label">Date of Birth:</label>
                        <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob"
                               name="dob" value="{{ $student->dob }}" required>
                        @error('dob')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone_number" class="col-form-label">Phone Number:</label>
                        <input type="tel" class="form-control @error('phone_number') is-invalid @enderror"
                               id="phone_number" name="phone_number"
                               value="{{ $student->phone_number }}" required>
                        @error('phone_number')
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
            $('#studentEditForm').submit(function (event) {
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



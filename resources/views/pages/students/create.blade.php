<div class="modal fade" id="createStudentModal" tabindex="-1" role="dialog" aria-labelledby="createStudentModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createStudentModalLabel">Enter Student Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('students.store') }}" id="studentCreateForm" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="firstname" class="col-form-label">Firstname:</label>
                        <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname"
                               name="firstname" value="{{old('firstname')}}" required>
                        @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-form-label">Lastname:</label>
                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname"
                               name="lastname" value="{{ old('lastname') }}" required>
                        @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-form-label">Address:</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                               name="address" value="{{old('address')}}" required>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gender" class="col-form-label">Gender:</label>
                        <select class="mb-3 form-control @error('gender') is-invalid @enderror" name="gender"
                                id="gender" required>
                            <option value="">--Select--</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
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
                               name="guardian" value="{{old('guardian')}}" required>
                        @error('guardian')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="dob" class="col-form-label">Date of Birth:</label>
                        <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob"
                               value="{{old('dob')}}" required min="1900-01-01" max="{{ date('Y-m-d') }}">
                        @error('dob')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone_number" class="col-form-label">Phone Number:</label>
                        <input type="tel" class="form-control @error('phone_number') is-invalid @enderror"
                               id="phone_number" name="phone_number" value="{{old('phone_number')}}" required>
                        @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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
            $('#studentCreateForm').submit(function (event) {
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

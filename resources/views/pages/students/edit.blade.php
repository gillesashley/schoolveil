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
                <form method="POST" action="{{ route('students.update', $student->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="firstname" class="col-form-label">Firstname:</label>
                        <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname"
                               name="firstname" value="{{ $student->firstname }}">
                        @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-form-label">Lastname:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname"
                               value="{{ $student->lastname }}">
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-form-label">Address:</label>
                        <input type="text" class="form-control" id="address" name="address"
                               value="{{ $student->address }}">
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-form-label">Gender:</label>
                        <select class="mb-3 form-control" name="gender">
                            <option selected>--Select--</option>
                            <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="guardian" class="col-form-label">Guardian:</label>
                        <input type="text" class="form-control" id="guardian" name="guardian"
                               value="{{ $student->guardian }}">
                    </div>
                    <div class="form-group">
                        <label for="dob" class="col-form-label">Date of Birth:</label>
                        <input type="date" class="form-control" id="dob" name="dob" value="{{ $student->dob }}">
                    </div>
                    <div class="form-group">
                        <label for="phone_number" class="col-form-label">Phone Number:</label>
                        <input type="tel" class="form-control" id="phone_number" name="phone_number"
                               value="{{ $student->phone_number }}">
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



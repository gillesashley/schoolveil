<div class="modal fade" id="showStudentModal-{{ $student->id }}" tabindex="-1" role="dialog"
     aria-labelledby="showStudentModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"
                    id="showStudentModalLabel">{{ $student->firstname }} {{ $student->lastname }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th>First Name:</th>
                        <td>{{ $student->firstname }}</td>
                    </tr>
                    <tr>
                        <th>Last Name:</th>
                        <td>{{ $student->lastname }}</td>
                    </tr>
                    <tr>
                        <th>Address:</th>
                        <td>{{ $student->address }}</td>
                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <td>{{ $student->gender }}</td>
                    </tr>
                    <tr>
                        <th>Guardian:</th>
                        <td>{{ $student->guardian }}</td>
                    </tr>
                    <tr>
                        <th>Phone Number:</th>
                        <td>{{ $student->phone_number }}</td>
                    </tr>
                    <tr>
                        <th>Date of Birth:</th>
                        <td>{{ date('M d, Y', strtotime($student->dob)) }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

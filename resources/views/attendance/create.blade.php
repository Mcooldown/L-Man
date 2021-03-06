<x-app title="Create Attendance - {{ auth()->user()->institution->name }}">

    <x-slot name="navbar"></x-slot>

    <div id="content" class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>Create Attendance - {{ $class->name }}</h3>
                <hr>
                <form action="{{ route('attendance.create') }}" method="POST">
                    @csrf
                    <div class="my-3">
                        <label for="class_name" class="form-label">Date</label>
                        <input type="text" value="{{ date_format(date_create(date('y-m-d')),"d F Y") }}"
                            class="form-control" name="date_today" readonly>
                    </div>
                    <hr>
                    <div class="my-3">
                        <input type="checkbox" onClick="presentAll(this)" class="mb-3"> Present all
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead class="table-dark">
                                    <th class="align-middle text-center">Student ID</th>
                                    <th class="align-middle text-center">Student Name</th>
                                    <th class="align-middle text-center">Present</th>
                                </thead>
                                <tbody>
                                    @foreach($class->student as $student)
                                    <tr>
                                        <td class="align-middle text-center">{{ $student->reg_number }}</td>
                                        <td class="align-middle text-center">{{ $student->name }}</td>
                                        <td class="align-middle text-center">
                                            <input type="checkbox" value="1" class="form-check-input attend"
                                                name="{{$student->id}}">
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <input type="hidden" name="class_id" value="{{ $class->id }}">
                    <button type="submit" class="btn btn-primary text-white mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app>

<script>
    function presentAll(source) {
        checkboxes = document.getElementsByClassName('attend');
        for (var i = 0, n = checkboxes.length; i < n; i++) {
            checkboxes[i].checked = source.checked;
        }
    }

</script>

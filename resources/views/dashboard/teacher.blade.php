<div id="admin-content" class="container mb-5">
    <div class="row">
        <div class="col-md-4 my-2">
            <a href="{{ route('attendance.view-teacher-list') }}" class="text-reset text-decoration-none">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3 class="text-white">Daily Attendance</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 my-2">
            <a href="{{ route('activity.view-teacher-list') }}" class="text-reset text-decoration-none">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3 class="text-white">Activity Log</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 my-2">
            <a href="{{ route('class-course.view-teacher') }}" class="text-reset text-decoration-none">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3 class="text-white">Class Schedule</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 my-2">
            <a href="{{ route('thread.index') }}" class="text-reset text-decoration-none">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3 class="text-white">Forum Discussion</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 my-2">
            <a href="{{ route('assignment.index') }}" class="text-reset text-decoration-none">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3 class="text-white">Assignment</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 my-2">
            <a href="{{ route('score.manage', 0) }}" class="text-reset text-decoration-none">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h3 class="text-white">Score</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

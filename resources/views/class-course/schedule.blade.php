<x-app title="Class Schedule">
    <x-slot name="navbar"></x-slot>

    <div id="content" class="container py-5 my-5">
        <h3>Class Schedule</h3>
        <hr>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            @for ($i=0 ; $i < 7 ; $i++) <li class="nav-item me-2" role="presentation">
                <button class="nav-link border border-dark {{ $i ==0 ? 'active' : '' }}" id="{{ $days[$i] }}-tab"
                    data-bs-toggle="pill" data-bs-target="#{{ $days[$i] }}" type="button" role="tab"
                    aria-controls="{{ $days[$i] }}" aria-selected="true">{{ ucwords($days[$i]) }}</button>
                </li>
                @endfor
        </ul>
        <hr>
        <div class="tab-content" id="pills-tabContent">
            @for ($i=0 ; $i < 7 ; $i++) <div class="tab-pane {{ ($i==0) ? 'show active' : '' }}" id="{{ $days[$i] }}"
                role="tabpanel" aria-labelledby="{{ $days[$i] }}-tab">
                @php
                if($i == 0) $courses = $monday_courses;
                else if($i == 1) $courses = $tuesday_courses;
                else if($i == 2) $courses = $wednesday_courses;
                else if($i == 3) $courses = $thursday_courses;
                else if($i == 4) $courses = $friday_courses;
                else if($i == 5) $courses = $saturday_courses;
                else if($i == 6) $courses = $sunday_courses;
                @endphp
                @if(count($courses) > 0)
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <th class="align-middle text-center">Course</th>
                            <th class="align-middle text-center">
                                {{ (auth()->user()->role->name == 'Teacher') ? 'Class' : 'Teacher'}}</th>
                            <th class="align-middle text-center">Start Time</th>
                            <th class="align-middle text-center">End Time</th>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                            <tr>
                                <td class="align-middle text-center">{{ $course->course->name }}</td>
                                <td class="align-middle text-center">
                                    {{(auth()->user()->role->name == 'Teacher') ? $course->class->name : $course->teacher->name }}
                                </td>
                                <td class="align-middle text-center">{{ $course->start_time }}</td>
                                <td class="align-middle text-center">{{ $course->end_time }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <p>No course today</p>
                @endif
        </div>
        @endfor
    </div>
    </div>
</x-app>

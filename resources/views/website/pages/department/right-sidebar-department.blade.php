    <div class="col-sm-12 right-col-fix">
        <div>
            <div class="list-group">
                <div class="list-group-item">Humanities & Science</div>
                @if (isset($data_output_category) && isset($data_output_category['id']))
                    <a href="{{ route('department-profile', ['id' => $data_output_category['id']]) }}"
                        class="list-group-item ">PROFILE</a>
                    <a href="{{ route('department-vision-mission', ['id' => $data_output_category['id']]) }}"
                        class="list-group-item active-rp-link">Vision Mission</a>
                    {{-- <a href="{{ route('department-curriculum', ['id' => $data_output_category['id']]) }}"
class="list-group-item active-rp-link">CURRICULUM</a> --}}
                    {{-- <a href="{{ route('department-faculty', ['id' => $data_output_category['id']]) }}"
class="list-group-item active-rp-link">Faculty</a> --}}
                    {{-- <a href="{{ route('department-syllabus', ['id' => $data_output_category['id']]) }}"
class="list-group-item active-rp-link">Syllabus</a> --}}

                    <a href="{{ route('department-time-table', ['id' => $data_output_category['id']]) }}"
                        class="list-group-item active-rp-link">Time Table</a>
                    <a href="{{ route('department-mentor', ['id' => $data_output_category['id']]) }}"
                        class="list-group-item active-rp-link">MENTOR</a>
                    <a href="{{ route('department-achievements-awards', ['id' => $data_output_category['id']]) }}"
                        class="list-group-item active-rp-link">ACHIEVEMENTS AND AWARDS</a>
                    <a href="{{ route('department-activities-events', ['id' => $data_output_category['id']]) }}"
                        class="list-group-item active-rp-link">ACTIVITIES AND EVENTS</a>
                    <a href="{{ route('department-students-association', ['id' => $data_output_category['id']]) }}"
                        class="list-group-item active-rp-link">STUDENTS ASSOCIATION</a>
                    <a href="{{ route('department-plan', ['id' => $data_output_category['id']]) }}"
                        class="list-group-item active-rp-link">Syllabus</a>
                @else
                    <p> Data not available.</p>
                @endif
                <div class="list-group-item"></div>
            </div>

        </div>
    </div>

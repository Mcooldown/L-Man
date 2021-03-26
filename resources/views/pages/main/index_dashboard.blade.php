<x-app title="Dashboard - L-Man">

     <x-slot name="navbar"></x-slot>

     <div id="content" class="container pt-5 mt-5">
          <h1>Welcome, {{auth()->user()->name}}</h1>
          <p>{{auth()->user()->role->name}} of {{auth()->user()->institution->name}}</p>
          <hr>
     </div>

     @if(auth()->user()->role->name == 'Admin')
          @include('pages.main.admin_dashboard')
     @elseif(auth()->user()->role->name == 'Teacher')
          @include('pages.main.teacher_dashboard')
     @elseif(auth()->user()->role->name == 'Student')
          @include('pages.main.student_dashboard')
     @endif
</x-app>
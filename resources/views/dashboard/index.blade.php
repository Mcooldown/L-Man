<x-app title="Dashboard - L-Man">

     <x-slot name="navbar"></x-slot>

     <div id="content" class="container pt-5 mt-5">
          <h1>Welcome, {{auth()->user()->name}}</h1>
          @if(auth()->user()->role->name != 'Owner')
               <p>{{auth()->user()->role->name}} of {{auth()->user()->institution->name}}</p>
          @else
               Owner of L-Man
          @endif
          <hr>
     </div>

     @if(auth()->user()->role->name == 'Admin')
          @include('dashboard.admin')
     @elseif(auth()->user()->role->name == 'Teacher')
          @include('dashboard.teacher')
     @elseif(auth()->user()->role->name == 'Student')
          @include('dashboard.student')
     @elseif(auth()->user()->role->name == 'Owner')
          @include('dashboard.owner')
     @endif
</x-app>
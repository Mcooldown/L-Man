<x-app title="Class List - L-Man">
     <x-slot name="navbar"></x-slot>

     <div id="content" class="container py-5 my-5">
          <a href="{{route('class-view-create')}}" class="btn btn-primary">Create Class</a>
          <div class="table-responsive">
               <table class="table table-hover">
                    <thead>
                         <th class="align-middle text-center">ID</th>
                         <th class="align-middle text-center">Class Name</th>
                         <th class="align-middle text-center">Homeroom Teacher</th>
                         <th class="align-middle text-center">Action</th>
                    </thead>
                    <tbody>
                         @foreach ($classes as $class)
                              <tr>
                                   <td class="align-middle text-center">{{$class->id}}</td>
                                   <td class="align-middle text-center">{{$class->name}}</td>
                                   <td class="align-middle text-center">{{$class->homeroom->name}}</td>
                                   <td class="align-middle text-center">
                                        <a href="{{route('class-view-student',$class->id)}}"
                                             class="btn btn-success">Student List</a>
                                   </td>
                              </tr>
                         @endforeach
                    </tbody>
               </table>
          </div>
     </div>
</x-app>
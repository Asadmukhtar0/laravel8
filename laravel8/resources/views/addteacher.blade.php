<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teachers') }}
        </h2>
    </x-slot>
    <br />
    <div class="container">
        <div class="card">
            <div class="card-header">
                List of teacher
                <button class="btn btn-danger float-right" data-toggle="modal" data-target="#myModal">Add New teacher</button>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($teachers as $teacher)
                        <tr>
                            <td>
                                {{ $teacher->id }}
                            </td>
                            <td>
                                {{ $teacher->name }}
                            </td>
                            <td>
                                {{ $teacher->email }}
                            </td>
                            <td>
                                {{ $teacher->phone }}
                            </td>
                            <td>
                                <button class="btn btn-success">
                                    Edit
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-danger">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Add New teacher</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ route('teacher.store') }}" method="post">
                        @csrf
                        <div class="col-lg-12">
                            <label for="">Teacher Name</label>
                            <input type="text" class="form-control" name="name" id="" />
                        </div>
                        <div class="col-lg-12">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="phone" id="" />
                        </div>
                        <div class="col-lg-12">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" id="" />
                        </div> <br />
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-info float-right">Save</button>
                        </div>
                    </form>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
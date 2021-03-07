<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('students') }}
        </h2>
    </x-slot>
    <br />
    <div class="container">
        <div class="card">
            <div class="card-header">
                List of student
                <button class="btn btn-danger float-right" data-toggle="modal" data-target="#myModal">Add New student</button>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Badge</th>
                        <th>Date Of Birth</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($students as $student)
                        <tr>
                            <td>
                                {{ $student->id }}
                            </td>
                            <td>
                                {{ $student->name }}
                            </td>
                            
                            <td>
                                {{ $student->email }}
                            </td>
                            <td>
                                {{ $student->badge_id }}
                            </td>
                            <td>
                                {{ $student->dob }}
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
                <h4 class="modal-title">Add New student</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ route('student.store') }}" method="post">
                        @csrf
                        <div class="col-lg-12">
                            <label for="">student Name</label>
                            <input type="text" class="form-control" name="name" id="" />
                        </div>
                        <div class="col-lg-12">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="" />
                        </div>
                        <div class="col-lg-12">
                            <label for="">Date Of Birth</label>
                            <input type="date" class="form-control" name="dob" id="" />
                        </div>
                        <div class="col-lg-12">
                            <label for="">Badge</label>
                            <select name="badge" class="form-control" id="">
                                <option value="">Select Badge</option>
                                @foreach($badges as $badge)
                                <option value="{{ $badge->id }}">{{ $badge->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br />
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
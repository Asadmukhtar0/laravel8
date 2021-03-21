<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Our Badges') }}
        </h2>
    </x-slot>
    <br />
    <div class="container">
        <div class="card">
            <div class="card-header">
                List of badge
                <button class="btn btn-danger float-right" data-toggle="modal" data-target="#myModal">Add New Badge</button>
            </div>
            <div class="card-body">
                 <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <th>Teacher</th>
                        <th>Students</th>
                    </tr>
                    @foreach($badges as $badge)
                        <tr>
                            <td>
                                {{ $badge->title }}
                            </td>
                            <td>
                                {{ $badge->teacher }}
                            </td>
                            <td>
                                <a href="{{ route('badge.search', $badge->id) }}">
                                    <button class="btn btn-danger">
                                        Students
                                    </button>
                                </a>
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
                <h4 class="modal-title">Add New Badge</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ route('badge.store') }}" method="post">
                        @csrf
                        <div class="col-lg-12">
                            <label for="">Badge Name</label>
                            <input type="text" class="form-control" name="title" id="" />
                        </div>
                        <div class="col-lg-12">
                            <label for="">Teacher</label>
                            <select name="teacher" class="form-control" id="">
                                <option value="">Select Teacher</option>
                                @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                        </div> <br />
                        <div class="col-lg-12">
                            <button class="btn btn-info float-right">Save</button>
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
@extends('layouts.app-management')
@section('content')
    <!-- Main -->
    <main class="main-container">
    <div class="container-fluid">
                <hr>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"><a
                                        href="add_manu.html"> <i class="icon-plus"></i>
                                    </a></span>
                                <h5>Users Management</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <table class="table table-bordered
                                    table-striped">
                                    <thead>
                                        <tr>
                                            <th>Avatar</th>
                                            <th>Users ID</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Email</th>
                                            <th>Day of birth</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($users as $user)
                                        <tr class="">
                                            <td width="80">
                                                <div class="avatar-noti">
                                                    <img src="{{ asset('storage/images/' . $user->avatar) }}" alt="Avatar" style="width:100%;height:100%">

                                                </div>
                                            </td>
                                            <td>{{ $user->user_id }}</td>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->DOB }}</td>
                                            <td style="width: 100px">{{ $user->description }}</td>
                                            <td>{{ $user->status == 1 ? 'Active' : 'Deactive' }}</td>
                                            <td>                                          
                                                <a href="{{ url('edit-user/' . $user->user_id) }}" class="btn btn-outline-success-2">Edit</a>
                                                <form action="{{ route('delete-user', $user->user_id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-success-2" style="border:1px solid ; color: red" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach                                       
                                    </tbody>
                                </table>
                                <div class="row" style="margin-left: 18px;">
                                    <ul class="pagination">
                                        <li class="{{ !$users->onFirstPage() ? '' : 'disabled' }}">
                                            <a href="{{ $users->previousPageUrl() }}" class="prev">&laquo; Previous</a>
                                        </li>
                                        @for ($i = 1; $i <= $users->lastPage(); $i++)
                                            <li class="{{ $users->currentPage() == $i ? 'active' : '' }}">
                                                <a href="{{ $users->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                        <li class="{{ !$users->hasMorePages() ? 'disabled' : '' }}">
                                            <a href="{{ $users->nextPageUrl() }}" class="next">Next &raquo;</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <!-- End Main -->

</div>
@endsection

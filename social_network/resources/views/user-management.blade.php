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
                                                <img src="{{ asset('images/resources/' . $user->avatar) }}" alt="Avatar">
                                            </td>
                                            <td>{{ $user->user_id }}</td>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->DOB }}</td>
                                            <td style="width: 100px">{{ $user->description }}</td>
                                            <td>{{ $user->status }}</td>
                                            <td>                                          
                                                <a href="{{ url('edit-user/' . $user->user_id) }}" class="btn btn-success btn-mini">Edit</a>
                                                <a href="#" class="btn btn-danger btn-mini">Delete</a>
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

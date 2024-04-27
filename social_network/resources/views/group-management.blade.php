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
                                <h5>Group Management</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <table class="table table-bordered
                                    table-striped">
                                    <thead>
                                        <tr>
                                            <th>Group ID</th>
                                            <th>Group name</th>
                                            <th>Group creater</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Created at</th>   
                                            <th>Action</th>                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($groups as $group)
                                        <tr class="">                                           
                                            <td>{{ $group->group_id }}</td>                                       
                                            <td>{{ $group->name_group }}</td>                                            
                                            <td>
                                                @if ($group->usergroups->isNotEmpty())
                                                    {{ $group->usergroups->first()->user->first_name }} {{ $group->usergroups->first()->user->last_name }}
                                                @else
                                                    No user
                                                @endif
                                            </td>     
                                            <td>{{ $group->description }}</td>  
                                            <td>
                                                @if ($group->status == 1)
                                                    Active
                                                @else
                                                    Deactive
                                                @endif
                                            </td>                                              
                                            <td>{{ $group->created_at }}</td>                                        
                                            <td>
                                                <a href="{{ url('edit-group/' . $group->group_id) }}" class="btn
                                                    btn-success btn-mini">Edit</a>                            
                                                <form action="{{ route('delete-group', $group->group_id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-mini" onclick="return confirm('Are you sure you want to delete this group?')">Delete</button>
                                                </form>
                                        </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="row" style="margin-left: 18px;">
                                    <ul class="pagination">
                                        <li class="{{ !$groups->onFirstPage() ? '' : 'disabled' }}">
                                            <a href="{{ $groups->previousPageUrl() }}" class="prev">&laquo; Previous</a>
                                        </li>
                                        @for ($i = 1; $i <= $groups->lastPage(); $i++)
                                            <li class="{{ $groups->currentPage() == $i ? 'active' : '' }}">
                                                <a href="{{ $groups->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                        <li class="{{ !$groups->hasMorePages() ? 'disabled' : '' }}">
                                            <a href="{{ $groups->nextPageUrl() }}" class="next">Next &raquo;</a>
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

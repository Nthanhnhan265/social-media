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
                                <h5>Posts Management</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <table class="table table-bordered
                                    table-striped">
                                    <thead>
                                        <tr>
                                            <th>Post ID</th>
                                            <th>Owner</th>
                                            <th>Content</th>
                                            <th>Created at</th>
                                            <th>Update at</th>   
                                            <th>Action</th>                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($posts as $post)
                                        <tr class="">                                         
                                            <td>{{ $post->id }}</td>                                       
                                            <td>{{ $post->user_id_fk }}</td>                                                                                        
                                            <td style="width: 100px">{{ $post->content }}</td>  
                                            <td>{{ $post->created_at }}</td>  
                                            <td>{{ $post->updated_at }}</td>                                       
                                            <td>
                                                <a href="{{ asset('post-detail') }}" class="btn
                                                    btn-success btn-mini">Detail</a>
                                                <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>   
                                        @endforeach                                   
                                    </tbody>
                                </table>
                                <div class="row" style="margin-left: 18px;">
                                    <ul class="pagination">
                                        <li class="{{ !$posts->onFirstPage() ? '' : 'disabled' }}">
                                            <a href="{{ $posts->previousPageUrl() }}" class="prev">&laquo; Previous</a>
                                        </li>
                                        @for ($i = 1; $i <= $posts->lastPage(); $i++)
                                            <li class="{{ $posts->currentPage() == $i ? 'active' : '' }}">
                                                <a href="{{ $posts->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                        <li class="{{ !$posts->hasMorePages() ? 'disabled' : '' }}">
                                            <a href="{{ $posts->nextPageUrl() }}" class="next">Next &raquo;</a>
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

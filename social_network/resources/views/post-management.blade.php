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
                                        <tr class="">                                         
                                            <td>1</td>                                       
                                            <td>John Doe</td>                                                                                        
                                            <td style="width: 100px">AAAAAAAAAAAAAAAA<br>AAAAAAAAAAAAAAAAAAAAA</td>  
                                            <td>20/4/2024</td>  
                                            <td>20/4/2024</td>                                       
                                            <td>
                                                <a href="{{ asset('post-detail') }}" class="btn
                                                    btn-success btn-mini">Detail</a>
                                                <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="">                                         
                                            <td>1</td>                                       
                                            <td>John Doe</td>                                                                                        
                                            <td style="width: 100px">AAAAAAAAAAAAAAAA<br>AAAAAAAAAAAAAAAAAAAAA</td>  
                                            <td>20/4/2024</td>  
                                            <td>20/4/2024</td>                                       
                                            <td>
                                                <a href="edit-user" class="btn
                                                    btn-success btn-mini">Detail</a>
                                                <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="">                                         
                                            <td>1</td>                                       
                                            <td>John Doe</td>                                                                                        
                                            <td style="width: 100px">AAAAAAAAAAAAAAAA<br>AAAAAAAAAAAAAAAAAAAAA</td>  
                                            <td>20/4/2024</td>  
                                            <td>20/4/2024</td>                                       
                                            <td>
                                                <a href="edit-user" class="btn
                                                    btn-success btn-mini">Detail</a>
                                                <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="">                                         
                                            <td>1</td>                                       
                                            <td>John Doe</td>                                                                                        
                                            <td style="width: 100px">AAAAAAAAAAAAAAAA<br>AAAAAAAAAAAAAAAAAAAAA</td>  
                                            <td>20/4/2024</td>  
                                            <td>20/4/2024</td>                                       
                                            <td>
                                                <a href="edit-user" class="btn
                                                    btn-success btn-mini">Detail</a>
                                                <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="">                                         
                                            <td>1</td>                                       
                                            <td>John Doe</td>                                                                                        
                                            <td style="width: 100px">AAAAAAAAAAAAAAAA<br>AAAAAAAAAAAAAAAAAAAAA</td>  
                                            <td>20/4/2024</td>  
                                            <td>20/4/2024</td>                                       
                                            <td>
                                                <a href="edit-user" class="btn
                                                    btn-success btn-mini">Detail</a>
                                                <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row" style="margin-left: 18px;">
                                    <ul class="pagination">
                                        <li><a href="#" class="prev">&laquo; Previous</a></li>
                                        <li><a href="#" class="active">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#" class="next">Next &raquo;</a></li>
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

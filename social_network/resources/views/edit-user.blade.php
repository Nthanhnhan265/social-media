@extends('layouts.app-management')
@section('content')  
    <!-- Main -->
    <main class="main-container">
    <div id="content">
            <div id="content-header">               
                <h1>Edit User</h1>
            </div>
                <hr>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">                          
                            <div class="widget-content nopadding">                               
                                <!-- BEGIN USER FORM -->                                
                                <form action="" method="post"
                                    class="form-horizontal"
                                    enctype="multipart/form-data">
                                    <div class="control-group">
                                        <label class="control-label">User ID : </label>  
                                        <div class="controls">
                                            <input type="text" class="span11"
                                                placeholder="UserID"
                                                name="name" value="{{ $user->user_id }}" readonly/> 
                                        </div>                                     
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Firstname :</label>
                                        <div class="controls">
                                            <input type="text" class="span11"
                                                placeholder="Firstname"
                                                name="name" value="{{ $user->first_name }}"/> *
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Lastname :</label>
                                        <div class="controls">
                                            <input type="text" class="span11"
                                                placeholder="Lastname"
                                                name="name" value="{{ $user->last_name }}"/> *
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Email :</label>
                                        <div class="controls">
                                            <input type="text" class="span11"
                                                placeholder="Email"
                                                name="name" value="{{ $user->email }}"/> *
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Gender :</label>
                                        <div class="controls">                                       
                                            <input style="margin-bottom: 5px" type="radio" id="male" name="gender" value="male">
                                            <label  for="male">Male </label>                                       
                                            <input style="margin-bottom: 5px" type="radio" id="female" name="gender" value="female">
                                            <label  for="female">Female </label>
                                        </div>                                       
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Password :</label>
                                        <div class="controls">
                                            <input type="password" class="span11"
                                                placeholder="Password"
                                                name="name" value=""> *
                                        </div>
                                    </div> 
                                    <div class="control-group">
                                        <label class="control-label">Day of birth :</label>
                                        <div class="controls">
                                            <input type="text" class="span11"
                                                placeholder="dd/MM/yyyy"
                                                name="name" value="{{ $user->DOB }}"> *
                                        </div>
                                    </div>    
                                    <div class="control-group">
                                        <label class="control-label">Description:</label>
                                        <div class="controls">
                                            <textarea class="span11"
                                                placeholder="Description"
                                                name="description">{{ $user->description }}</textarea>
                                        </div>  
                                    </div>                              
                                    <div class="control-group">                                                                         
                                        <div class="control-group">
                                            <label class="control-label">Avatar :</label>
                                            <div class="controls">
                                                <input type="file"
                                                    name="fileUpload"
                                                    id="fileUpload">
                                            </div>
                                        </div>  
                                        <div class="control-group">  
                                        <label class="control-label">Role:</label>
                                            <div class="controls">
                                                <select id="role" name="role">
                                                    <option value="usa">Super Admin</option>
                                                    <option value="canada">User</option>                                               
                                                </select>  
                                            </div> 
                                        </div> 
                                        <div class="control-group">
                                            <label class="control-label">Status:</label>
                                            <div class="controls">
                                                <select id="role" name="role">
                                                    <option value="usa">Active</option>
                                                    <option value="canada">Deactive</option>                                               
                                                </select>  
                                            </div>  
                                        </div>                      
                                        <div class="form-actions">
                                            <button type="submit" class="btn
                                                btn-success">Update</button>
                                        </div>
                                        </div>
                                    </div>                                   
                                </form>
                                <!-- END USER FORM -->
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </main>
    <!-- End Main -->

</div>
@endsection
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
                                <form action="{{ route('update-user', $user->user_id) }}" method="POST"
                                    class="form-horizontal"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')                                
                                    <div class="control-group">
                                        <label class="control-label">User ID : </label>  
                                        <div class="controls">
                                            <input type="text" class="span11"
                                                placeholder="UserID"
                                                name="user_id" value="{{ $user->user_id }}" readonly/> 
                                        </div>                                     
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Firstname :</label>
                                        <div class="controls">
                                            <input type="text" class="span11"
                                                placeholder="Firstname"
                                                name="first_name" value="{{ $user->first_name }}"/> *
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Lastname :</label>
                                        <div class="controls">
                                            <input type="text" class="span11"
                                                placeholder="Lastname"
                                                name="last_name" value="{{ $user->last_name }}"/> *
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Email :</label>
                                        <div class="controls">
                                            <input type="text" class="span11"
                                                placeholder="Email"
                                                name="email" value="{{ $user->email }}"/> *
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Gender :</label>
                                        <div class="controls">
                                            <input style="margin-bottom: 5px" type="radio" id="male" name="gender" value="1" {{ $user->gender == 1 ? 'checked' : '' }}>
                                            <label for="male">Male</label>
                                            <input style="margin-bottom: 5px" type="radio" id="female" name="gender" value="0" {{ $user->gender == 0 ? 'checked' : '' }}>
                                            <label for="female">Female</label>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Password :</label>
                                        <div class="controls">
                                            <input type="password" class="span11"
                                                placeholder="Password"
                                                name="password" value="{{ $user->password }}"> *
                                        </div>
                                    </div> 
                                    <div class="control-group">
                                        <label class="control-label">Day of birth :</label>
                                        <div class="controls">
                                            <input type="text" class="span11"
                                                placeholder="dd/MM/yyyy"
                                                name="DOB" value="{{ $user->DOB }}"> *
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
                                                <img id="avatarPreview" src="{{ asset('images/resources/' . $user->avatar) }}" alt="Current Avatar" width="100">
                                                <input type="file" name="fileUpload" id="fileUpload" onchange="previewImage(event)">
                                            </div>
                                        </div>
                                        <div class="control-group">  
                                            <label class="control-label">Role:</label>
                                            <div class="controls">
                                                <select id="role" name="role_id_fk">
                                                    <option value="1" {{ $user->role_id_fk == 1 ? 'selected' : '' }}>Super Admin</option>
                                                    <option value="2" {{ $user->role_id_fk == 2 ? 'selected' : '' }}>User</option>                                               
                                                </select>  
                                            </div> 
                                        </div> 
                                        <div class="control-group">
                                            <label class="control-label">Status:</label>
                                            <div class="controls">
                                                <select id="role" name="status">
                                                    <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Active</option>
                                                    <option value="2" {{ $user->status == 2 ? 'selected' : '' }}>Deactive</option>                                               
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

@extends('layouts.app-management')
@section('content')
    <!-- Main -->
    <main class="main-container">
    <div id="content">
            <div id="content-header">               
                <h1>Edit group</h1>
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
                                        <label class="control-label">Group ID : </label>  
                                        <div class="controls">
                                            <input type="text" class="span11"
                                                placeholder="UserID"
                                                name="name" value="{{ $group->group_id }}" readonly/> 
                                        </div>                                     
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Group name :</label>
                                        <div class="controls">
                                            <input type="text" class="span11"
                                                placeholder="Group name"
                                                name="name" value="{{ $group->name_group }}"/> *
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Description:</label>
                                        <div class="controls">
                                            <textarea class="span11"
                                                placeholder="Description"
                                                name="description">{{ $group->description }}</textarea>
                                        </div>  
                                    </div>                                                                                                                                 
                                    <div class="control-group">                                                                                                                                                    
                                        <div class="control-group">
                                            <label class="control-label">Status:</label>
                                            <div class="controls">
                                                <select id="role" name="role">
                                                    <option value="1">Active</option>
                                                    <option value="2">Deactive</option>                                               
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

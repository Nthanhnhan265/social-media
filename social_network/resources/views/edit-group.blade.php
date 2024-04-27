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
                                <form action="{{ route('update-group', $group->group_id) }}" method="post"
                                    class="form-horizontal"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="control-group">
                                        <label class="control-label">Group ID : </label>  
                                        <div class="controls">
                                            <input type="text" class="span11"
                                                placeholder="UserID"
                                                name="group_id" value="{{ $group->group_id }}" readonly/> 
                                        </div>                                     
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Group name :</label>
                                        <div class="controls">
                                            <input type="text" class="span11"
                                                placeholder="Group name"
                                                name="name_group" value="{{ $group->name_group }}"/> *
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
                                                <select id="status" name="status">
                                                    <option value="1" {{ $group->status == 1 ? 'selected' : '' }}>Active</option>
                                                    <option value="0" {{ $group->status == 0 ? 'selected' : '' }}>Deactive</option>                                               
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

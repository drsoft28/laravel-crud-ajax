<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
           
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                   
                        <a href="{{ url('/tasks') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                  
                </div>
          

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="min-width:500px">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                   <h1>Tasks</h1>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1">
                        <div class="p-6">
                            <div class="flex items-center">
                                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#saveModal" ><i class="fas fa-plus fa-xs"></i></button>

                               
                            </div>
                            <hr/>
                            <div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <ul class="list-group" id="items">
                                        @foreach ($tasks as $task)
                                        <li class="list-group-item d-flex justify-content-between align-items-center" id="item{{$task->id}}" data-id="{{$task->id}}">{{$task->name}} 
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#saveModal" data-id="{{$task->id}}" data-name="{{$task->name}}"><i class="fas fa-edit fa-xs"></i></button>
                                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{$task->id}}" data-name="{{$task->name}}"><i class="fas fa-trash fa-xs"></i></button>
                                           
                                              </div>
                                        </li>
                                        @endforeach
                                        
                                    </ul>
    
                                </div>
                            </div>
                        </div>
                    </div>
                     

                      

                     
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                  

                    
                </div>
            </div>
        </div>
        <div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">save</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="task" method="get" id="model-form">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Task:</label>
                      <input type="text" class="form-control" name="" id="model-name">
                      <input type="hidden" class="form-control" name="" id="model-id">
                    </div>
                   
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" data-mode="store" id="btn-save" >Save</button>
                </div>
              </div>
        </div>
    </div>


            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="deleteModalLabel">Delete</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <h2>do you want to delete task "<span id="show-name"></span>"?</h2>
                     
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" data-id="" id="btn-delete" >Delete</button>
                    </div>
                  </div>
                </div>
            </div>
              
             
              <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script  src="https://code.jquery.com/jquery-3.6.0.min.js"   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
        
        <script>

            $(function(){
                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                        }
                });
                $("#btn-delete").click(function (e) {
                    e.preventDefault();
                                               

                            var item_id = $("#btn-delete").attr('data-id');;
                            var formData = {
                              
                                id: item_id,
                            };
      
        
                        var ajaxurl = `tasks/destroy`;
                        $.ajax({
                                type: "POSt",
                                url: ajaxurl,
                                data: formData,
                                dataType: 'json',
                                success: function (data) {
                                    console.log('data',data)
                                    $('#deleteModal').modal('hide')
                                    if(!data.success){
                                        Swal.fire(
                                            '',
                                            data.data,
                                            'error'
                                            )
                                        return;
                                    }else{
                                        Swal.fire(
                                            '',
                                            data.data,
                                            'success'
                                            )
                                            jQuery("#item" + item_id).remove();
                                    }
                                    
                                   
                                
                                },
                                error: function (data) {
                                    console.log(data);
                                }
                            });
                });
                $("#btn-save").click(function (e) {
                    
                        var mode = $("#btn-save").attr('data-mode');
                        //alert(mode);
                        //$('#saveModal').modal('hide')
                        //       return;

                            e.preventDefault();

                            var item_id =jQuery('#model-id').val();
                            var formData = {
                                name: jQuery('#model-name').val(),
                                id: item_id,
                            };
      
        
                        var ajaxurl = `tasks/${mode}`;
                        $.ajax({
                                type: "POSt",
                                url: ajaxurl,
                                data: formData,
                                dataType: 'json',
                                success: function (data) {
                                    console.log('data',data)
                                    if(!data.success){
                                        Swal.fire(
                                            '',
                                            data.data,
                                            'error'
                                            )
                                        return;
                                    }
                                    let task =data.data;
                                    var taskItem = '<li class="list-group-item d-flex justify-content-between align-items-center" id="item'+task.id+'" data-id="'+task.id+'">'+task.name+' <i class="fas fa-edit fa-xs" data-toggle="modal" data-target="#saveModal" data-id="'+task.id+'" data-name="'+task.name+'"></i></li>' ;
                                    if (mode == "store") {
                                        jQuery('#items').append(taskItem);
                                    } else {
                                        jQuery("#item" + item_id).replaceWith(taskItem);
                                    }
                                    $('#saveModal').modal('hide')
                                
                                },
                                error: function (data) {
                                    console.log(data);
                                }
                            });
                });
                $('#deleteModal').on('hide.bs.modal', function (event) {
                    var modal = $(this)
                    modal.find('#show-name').val('');
                    modal.find('#model-id').val('');
                    $("#btn-delete").attr('data-id','');
                });
                $('#deleteModal').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) 
                    var id = button.data('id'); 
                    var name = button.data('name'); 
                    var modal = $(this)
                  
                    $("#btn-delete").attr('data-id',id);
                   
                    modal.find('#show-name').text(name);
                    
                    })
                         
                $('#saveModal').on('hide.bs.modal', function (event) {
                    var modal = $(this)
                    modal.find('#model-name').val('');
                    modal.find('#model-id').val('');
                    $("#btn-save").attr('data-mode','store');
                });
                $('#saveModal').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) 
                    var id = button.data('id'); 
                    var name = button.data('name'); 
                    var modal = $(this)
                    var tilte = id?'Edit':'New';
                    var mode = id?'update':'store';
                    $("#btn-save").attr('data-mode',mode);
                    modal.find('.modal-title').text(tilte)
                    modal.find('#model-name').val(name);
                    modal.find('#model-id').val(id);
                    })
                });

                    var el = document.getElementById('items');
                    var sortable = Sortable.create(el,{
                        onEnd: function(/**Event*/evt) {
                        console.log($(evt.item).attr('data-id'),evt.newIndex,evt.oldIndex); 
                        var formData = {
                            newOrder: evt.newIndex+1,
                            id: $(evt.item).attr('data-id'),
                        };
            
        
                                var ajaxurl = `tasks/order`;
                                $.ajax({
                                    type: "POSt",
                                    url: ajaxurl,
                                    data: formData,
                                    dataType: 'json',
                                    success: function (data) {
                                        console.log('data',data)
                                        if(!data.success){
                                            Swal.fire(
                                                '',
                                                data.data,
                                                'error'
                                                )
                                            
                                        }else{

                                        }

                                    
                                    },
                                    error: function (data) {
                                        console.log(data);
                                    }
                                });
	                        }
                        });

        </script>
    </body>
</html>

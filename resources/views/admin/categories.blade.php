@extends('admin.master')
@section('title')
<div class="header-left">
    <div class="dashboard_bar">
        Categories
    </div>
</div>
@endsection
@section('bread')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Categories</a></li>
    </ol>
</div>
@endsection
@section('content')
</script>
    
    <a href="#" class="float" data-toggle="modal" data-target="#basicModal">
        <i class="fa fa-plus my-float"></i>
    </a>
    <div class="modal fade" id="basicModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form action="{{url('/add_category')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' name="image" id="imageUpload" accept=".png, .jpg, .jpeg" onchange="first(this);"/>
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url();">
                            </div>
                        </div>
                    </div>
                    <div class="basic-form">
                        
                            <div class="form-group">
                                <input type="text" name="category" class="form-control input-default " placeholder="Category Name">
                            </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="basicModal1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form action="{{url('/update_category')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">
                    <div class="avatar-upload">
                        <input type="hidden" name="id" class="id">
                        <div class="avatar-edit">
                            <input type='file' name="image" id="imageUpload1" accept=".png, .jpg, .jpeg" onchange="readURL(this);"/>
                            <label for="imageUpload1"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreviewsecond" class="image" style="background-image: url();">
                            </div>
                        </div>
                    </div>
                    <div class="basic-form">
                        
                            <div class="form-group">
                                <input type="text" name="category" class="form-control input-default category" placeholder="Category Name">
                            </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="fas fa-times"></i>
                    </div>						
                    <h4 class="modal-title w-100">Are you sure?</h4>	
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary bg-dark" data-dismiss="modal">Cancel</button>
                    <a href="" class="btn btn-danger category-delete text-white">Delete</a>
                </div>
            </div>
        </div>
    </div>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-responsive-md">
            <thead>
                <tr>
                    <th class="width80"><strong>#</strong></th>
                    <th><strong>Category Name</strong></th>
                    <th><strong>Category Image</strong></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                    <tr>
                        <td><strong>{{$loop->iteration}}</strong></td>
                        <td class="name">{{$item->name}}</td>
                        <td><img src="{{url('/')}}/{{$item->image}}" alt=""></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg>
                                </button>
                                <div class="dropdown-menu">
                                    @csrf
                                    <a class="dropdown-item edit" data-id="{{$item->id}}" data-toggle="modal" data-target="#basicModal1" href="javascript:;">Edit</a>
                                    <a class="dropdown-item delete" data-id="{{$item->id}}" href="#myModal" data-toggle="modal">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    {{$category->links()}}
</div>
@endsection

@section('JS')
@if ($category != null)
<script src="vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <script>
        $('.delete').on('click', function(){
            var id = $(this).data('id');
            $('.category-delete').attr('href', "{{url('/category_delete')}}" + '/' + id);
        });
    </script>
    @if(session('delete'))
    <script>
        $(document).ready(function(){
            toastr.success("Deleted Successfully")
        });
    </script>
    @endif
    
    @if(session('update'))
    <script>
        $(document).ready(function(){
            toastr.success("Updated Successfully")
        });
    </script>
    @endif

<script>
    $('.edit').on('click', function(){
        var id = $(this).data('id');
        var token = $('input[name=_token]').val();
        $.ajax({
            url: "{{url('/get_category')}}",
            cache: false,
            method: 'POST',
            data: {'id' : id,'_token': token},
            success: function(response){
                $('.id').val(response.id);
                $('.image').css('background-image', 'url('+response.image+')');
                $('.category').val(response.name);
            }
          });
    });
</script>
    @if(session('success'))
    <script>
        $(document).ready(function(){
            toastr.success("Successfully Added")
        });
    </script>
    @elseif (session('error'))
    <script>
        $(document).ready(function(){
            toastr.error("Already Have This Category",{
                positionClass: "toast-bottom-right"
            });
        });
    </script>
    
    @elseif (session('image'))
    <script>
        $(document).ready(function(){
            toastr.error("Add Category Image",{
                positionClass: "toast-bottom-right"
            });
        });
    </script>
    @elseif (session('name'))
    <script>
        $(document).ready(function(){
            toastr.error("Add Category Name",{
                positionClass: "toast-bottom-right"
            });
        });
    </script>

    @endif
@endif
@endsection

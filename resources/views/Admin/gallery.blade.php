<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<style>
    table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 14px;
}
table.table td a.add i {
    font-size: 18px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}
</style>
@extends('Admin.simple.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>List of Gallery</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Gallery</li>
<li class="breadcrumb-item active">List</li>
@endsection
{{$i=1;}}
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Footer callback Starts-->
        <div class="col-sm-12">
            <div class="card mt-5">
                <div class="card-body table-responsive">
                    <table class="display" id="example-style-1" style="font-size:14px;">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Title</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($gallery))
                            @foreach ($gallery as $g)
                            <tr>
                                <td>{{$i;}}</td>
                                <td>{{$g->title}}</td>
                                <td>{{date_format(date_create($g->created_at),'d-M-Y')}}</td>
                                <td>{{(isset($g->updated_at) ? date_format(date_create($g->updated_at),'d-M-Y') : 'Not updated yet...')}}</td>
                                <td> <center>
                                    <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                  <a class="view" title="View" data-toggle="tooltip"><i class="material-symbols-outlined">visibility</i></a></center>
                                </td>
                            </tr>
                            <?php $i++ ?>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Footer callback Ends-->
    </div>
</div>
@endsection

@section('script')

<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
<script>
    	// Edit row on edit button click
	$(document).on("click", ".edit", function(){
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
// });
</script>

@endsection

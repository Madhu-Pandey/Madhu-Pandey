@extends('Admin.simple.master')
@section('title', 'Default')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Add Acheveiments</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Acheveiments</li>
<li class="breadcrumb-item active">Add New</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row second-chart-list third-news-update">

        <div class="container-fluid">
            <div class="row size-column">
              <div class="col-xl-12 xl-100 box-col-12">
                <div class="row">
                  <div class="col-xl-12">

                <div class="card" id="form-card" >
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title" id="card-title">Add New Achievement</h4>
                            </div>
                        </div>
                        <br>
                        <form id="product-form" enctype="multipart/form-data" action="{{url('admin/achievements/submit')}}" method="post">@csrf
                            @if(Session::has('Success'))
                            <div class="alert alert-success">{{Session::get('Success')}}</div>
                            @endif
                            @if(Session::has('Fail'))
                            <div class="alert alert-danger">{{Session::get('Fail')}}</div>
                            @endif
                           <div class="form theme-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="field-3" class="form-label">Achievement Title</label>
                                            <input type="text" name="title"  class="form-control" placeholder="Enter Ttile" required>

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="field-3" class="form-label">Upload Image</label>
                                            <input type="file" class="form-control" name="ref_file[]"  onchange="viewFile(this, 'main_viewer')" required>
                                        </div>
                                    </div>
                                </div>
                            <!-- for file preview -->
                            <legend style="color:#7366ff; font-size:19px; font-weight:bold;">Image Preview:</legend>
                            <div class="row pt-4 pb-4 mb-3" style="border: 1px double #22E3ff; border-radius:10px;" id="main_viewer" >
                                <?php if(isset($data->ref_file) && is_array(json_decode($data->ref_file))) { foreach(json_decode($data->ref_file) as $f){
                                if(!(file_exists(asset('uploads/'.$f)))) { ?>
                                    <?php if(is_pdf($f)){ ?>
                                        <object id="po_pdf" data="<?=asset('uploads/'.$f)?>" type="application/pdf" width="100%" height="750">
                                        </object>
                                    <?php } else if(is_image($f)) { ?>
                                        <img src="<?=asset('uploads/'.$f)?>" alt="" width="100%">
                                    <?php }?>
                                        <?php } else {
                                        echo('<br><br><center>FILE NOT FOUND!!!</center><br><br>');
                                    } } } ?>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-danger waves-effect" onclick="history.back();">Cancel</button>
                                <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>


<script>
    function viewFile(e, viewer) {
        PreviewFile(e, viewer, 'style="max-width:240px;"');
    }
    function PreviewFile(e, mc, style) {
    var main_viewer = document.getElementById(mc);
    main_viewer.innerHTML = '';
    for (var i = 0; i < e.files.length; i++)
    {
        pdffile = e.files[i];
        var extarr = pdffile.name.split(".");
        var ext = (extarr[extarr.length - 1]).toLowerCase();
        console.log(ext);
        pdffile_url = URL.createObjectURL(pdffile);
        if (ext == 'pdf') {
            main_viewer.innerHTML += '<object id="' + e.id + i + '" type="application/pdf" width="100%" height="750"> </object> ';
            $('#' + e.id + i).attr('data', pdffile_url);
        } else if (ext == 'png' || ext == 'jpg' || ext == 'jpeg' || ext == 'svg') {
            main_viewer.innerHTML += '<center><img id="' + e.id + i + '" width="80%" height="80%" > </img></center>';
            $('#' + e.id + i).attr('src', pdffile_url);
        }
    }
}
</script>
@endsection

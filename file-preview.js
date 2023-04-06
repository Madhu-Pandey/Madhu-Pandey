
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
            main_viewer.innerHTML += '<center><img id="' + e.id + i + '" width="50%" height="50%" > </img></center>';
            $('#' + e.id + i).attr('src', pdffile_url);
        }
    }
}


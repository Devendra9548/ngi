@section('customcss')
<link rel="stylesheet" type="text/css" href="/assets/css/admin/rte_theme_default.css">
<link rel="stylesheet" type="text/css" href="/assets/css/admin/blogs.css">
@endsection

<form action="" id="addBlog" enctype="multipart/form-data" class="edit-blogs">
    @csrf
    <input type="hidden" name="id" id="hiddenid" value="{{ $members->id }}">
    <label for="title" class="fw-bold fs-4 mb-2">Page Title</label>
    <input type="text" name="title" class="form-control py-3 h6" placeholder="Title here..."
        value="{{ $members->title }}">
    <br>
    <label for="title" class="h6" style="font-size:22px">Upload Feature Image</label>
    <input type="file" class="form-control" name="file" id="imageInput" accept="image/*" onchange="previewImage()">
    <div id="preview" style="width:100%;overflow:hidden;margin-top:20px"><img src="/blogs/{{ $members->file }}" alt=""
            width="150px" class="mb-3"></div>

    <div class="fixedbtn-2 d-flex">
        <input type="submit" class="btn btn-primary read-btn" value="Update Blog">
        <img src="/assets/imgs/spinner.gif" alt="" width="26px" id="CtSpinner">
                <p id="messagehere" class="ps-3 text-success">Blog Updated Successfully</p>
    </div>
</form>
<script src="/assets/js/admin/all_plugins.js"></script>
<script src="/assets/js/admin/rte.js"></script>
<script>
var editor1cfg = {}
editor1cfg.toolbar = "basic";
var editor1 = new RichTextEditor("#div_editor1", editor1cfg);
</script>
<script>
$(document).ready(function() {
    $("#addBlog").submit(function(event) {
        event.preventDefault();
        document.querySelector("#CtSpinner").style.display = "block";
        var formData = new FormData(this);
        var hiddenid = document.querySelector("#hiddenid").value;
        $.ajax({
            type: "POST",
            url: "/admin/update-product",
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                if (res == true) {
                    $("#addBlog")[0].reset();
                    document.querySelector("#messagehere").style.display = "block";
                    window.location.reload('/admin/all-blogs');
                } else {
                    alert("Error!" + res);
                }
            }
        });
    });
});
</script>
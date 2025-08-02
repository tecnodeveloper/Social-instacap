
<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
label{
    width: 100%;
}
.center{
    text-align: center !important;
}
.modelView{
    padding: 6% 20%;
}
.createbutton{
    float: right;
}
</style>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary m-5 createbutton" data-bs-toggle="modal" data-bs-target="#postModal">
 Create New Post
</button>

<form action="{{ url('view_post') }}" method = "get">
    @csrf
    <input value = "View my Post" type = "submit" class = "btn btn-secondary text-center"></input>
</form>

<!-- Modal -->
<div class="modal fade " id="postModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen modelView">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5 class="modal-title text-center my-3" id="exampleModalLabel">Add New Post</h5>
        <form action="{{ url('upload_post') }}" class = "form" method = "POST" enctype="multipart/form-data">
            @csrf
            <label for="title" class = "form-label">
                Enter your title:
            </label>
            <input type="text" class = "form-control" name = "title">
            <label for="postDescription" class="form-label">
                Enter your description
                <input type="text" id="postDescription" class = "form-control" name = "description">
            </label>
            <label for="imageUpload" class = "form-label">
                Upload your Image
                <input type="file" class = "form-control" name = "image">
            </label>
            <input type="submit" class="btn btn-primary  mt-4" value = "Upload Post"></input>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    </x-app-layout>

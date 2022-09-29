<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
</div>
<form class="forms-sample" action="{{ route('save-category') }}" method="post">
  @csrf
  <div class="modal-body">
    <div class="form-group">
      <label for="recipient-name" class="col-form-label">Category Name</label>
      <input type="text" class="form-control" id="category_name" name="category_name">
    </div>
    <div class="form-group">
      <label for="recipient-name" class="col-form-label">Category Slug</label>
      <input type="text" class="form-control" id="category_slug" name="category_slug">
    </div>
    <div class="form-group">
      <div class="form-check form-check-flat form-check-primary">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="is_menu" value="1">
          Show in Menu
        <i class="input-helper"></i></label>
      </div>
    </div>
  </div>
 <div class="modal-footer">
    <button type="submit" class="btn btn-sm btn-block btn-success"> Save </button>
  </div>
</form>
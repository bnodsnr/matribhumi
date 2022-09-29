<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
</div>
<form class="forms-sample" action="{{ route('save-videos') }}" method="post">
  @csrf
  <div class="modal-body">
    <div class="form-group">
      <label for="url" class="col-form-label">YouTube Link</label>
      <input type="text" class="form-control" id="url" name="url">
    </div>
    <div class="form-group">
      <label for="headline" class="col-form-label">Headline</label>
      <textarea name="headline" id="headline" class="form-control"></textarea>
    </div>
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Status</label>
      <div class="col-sm-4">
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="status" id="status" value="1">
            Publish
          <i class="input-helper"></i></label>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="status" id="status" value="2">
            Draft
          <i class="input-helper"></i></label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="is_feature" value="1">
        Is Feature?
      <i class="input-helper"></i></label>
      </div>
    </div>
  </div>
 <div class="modal-footer">
    <button type="submit" class="btn btn-sm btn-block btn-success"> Save </button>
  </div>
</form>
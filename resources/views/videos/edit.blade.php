<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
</div>
<form class="forms-sample" action="{{ route('update-videos', $row->id) }}" method="post">
  @csrf
  <div class="modal-body">
    <div class="form-group">
      <label for="recipient-name" class="col-form-label">Url</label>
      <input type="text" class="form-control" id="url" name="url"  value = "{{ $row->url }}">
    </div>
    <div class="form-group">
      <label for="headline" class="col-form-label">Headline</label>
      <textarea name="headline" id="headline" class="form-control">{{ $row->headline }}</textarea>
    </div>
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Status</label>
      <div class="col-sm-4">
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="status" id="status" value="1" {{ $row->status == 1 ? 'checked':''}}>
            Publish
          <i class="input-helper"></i></label>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="status" id="status" value="2" {{ $row->status == 2 ? 'checked':''}}>
            Draft
          <i class="input-helper"></i></label>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="form-check">
        <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="is_feature" value="1" {{ $row->is_feature == 1 ? 'checked' :'' }}>
        Is Feature?
      <i class="input-helper"></i></label>
      </div>
    </div>
  </div>
 <div class="modal-footer">
    <button type="submit" class="btn btn-sm btn-block btn-success"> Save </button>
  </div>
</form>
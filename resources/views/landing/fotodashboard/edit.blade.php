
<!-- Modal -->
<div class="modal fade" id="edit{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Slider {{$item->judul}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('admin/slider/update') .'/'. $item->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Judul Slider</label>
    <input type="text" name="judul" value="{{ $item->judul }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Urutan</label>
    <input type="number" name="urutan" value="{{ $item->urutan }}" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Gambar</label>
    <input type="file" name="foto" class="form-control" id="exampleInputPassword1">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button></form>

      </div>
    </div>
  </div>
</div>
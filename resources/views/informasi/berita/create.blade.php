@extends('layout.template')

@section('content')
<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Berita</h4>
            <form class="forms-sample" action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
            </div>
            <div class="form-group">
                <label for="keterangan">Konten Berita</label>
                <textarea class="form-control" type="text"  id="keterangan" name="keterangan" placeholder="Konten Berita"></textarea>
            </div>
            <div class="form-group">
                <label for="tgl_publish">Tanggal Publish</label>
                <input type="date" class="form-control" id="tgl_publish" name="tgl_publish" placeholder="Tanggal Publish">
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="img" class="file-upload-default" id="img">
                <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                </span>
                </div>
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                    <select name="author" id="author" class="form-control" required>
                        <option value="" disabled selected>Pilih Author</option> 
                        @foreach($author as $au)
                            <option value="{{$au->id}}">{{$au->nama}}</option>
                        @endforeach
                    </select>
                @error('author')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="d-flex">
                <!-- Tombol Submit -->
                <button type="submit" class="btn btn-primary">Submit</button>
                <!-- Tombol Cancel -->
                <a href="{{ route('berita.index') }}" class="btn btn-light me-2">Cancel</a>
            </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.file-upload-browse').on('click', function() {
            $('#img').trigger('click');
        });
        $('#img').on('change', function() {
            var fileName1 = $(this).val().split('\\').pop();
            $('.file-upload-info').val(fileName1);
        });
    });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#keterangan'))
        .catch(error => {
            console.error(error);
        });
</script>
@endpush




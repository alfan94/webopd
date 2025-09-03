@extends('layout.template')

@section('content')

<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Poliklinik</h4>
            <!-- <form class="forms-sample" action="{{ route('poli.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_poli">Nama Poliklinik</label>
                <input type="text" class="form-control" id="nama_poli" name="nama_poli" placeholder="Nama Poliklinik">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
            </div> -->
            <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light" action="{{ route('poli.index') }}">Cancel</button>
            </form> -->
<form action="{{ route('poli.store') }}" method="POST">
    @csrf
    <!-- Form Fields -->
    <!-- <div class="form-group">
        <label for="nama_poli">Nama Poliklinik</label>
        <input type="text" class="form-control" id="nama_poli" name="nama_poli" placeholder="Nama Poliklinik">
         @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

</div> -->
<div class="container">
    <!-- Flash message untuk success -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Flash message untuk error -->
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="form-group">
        <label for="nama_poli">Nama Poliklinik</label>
        <input type="text" class="form-control @error('nama_poli') is-invalid @enderror" id="nama_poli" name="nama_poli" placeholder="Nama Poliklinik" value="{{ old('nama_poli') }}">

        <!-- Menampilkan pesan error jika ada -->
        @error('nama_poli')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>


    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
    </div>
    <div class="d-flex">
        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- Tombol Cancel -->
        <a href="{{ route('poli.index') }}" class="btn btn-light me-2">Cancel</a>
    </div>
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




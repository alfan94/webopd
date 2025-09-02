@extends('layout.template')

@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Berita</h4>
                <div class="col-sm-2 pt-6">
                    <a href="{{ route('berita.create') }}" type="button" class="btn btn-block btn-primary"> 
                        <i class="fa fa-plus"></i> Tambah 
                    </a> <br>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped nowrap data-table">
                        <thead>
                            <tr>
                                <th class="text-center" width="50px">No</th>
                                <th class="text-center">Judul</th>
                                <th class="text-center">Keterangan</th>
                                <th class="text-center">Tanggal Publish</th>
                                <th class="text-center">Author</th>
                                <th class="text-center">Img</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div> <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    table.dataTable {
        width: 100% !important; 
        table-layout: fixed; 
    }
    .wrap-text {
        white-space: normal !important; 
        word-wrap: break-word !important; 
    }
</style>

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('berita.index') }}",
            scrollX: true,
            autoWidth: false, 
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', class: 'text-center', orderable: false, searchable: false},
                {data: 'judul', name: 'judul', class: 'text-center'}, 
                {data: 'keterangan', name: 'keterangan', class: 'text-center wrap-text'}, 
                {data: 'tgl_publish', name: 'tgl_publish', class: 'text-center wrap-text'},
                {data: 'author_name', name: 'pegawai.nama', class: 'text-center wrap-text'},
                {data: 'img', name: 'img', class: 'text-center wrap-text'},
                {data: 'action', name: 'action', orderable: false, searchable: false, class: 'text-center'},
            ]
        });
    });
</script>
@endpush

@extends('layouts.template')

@section('content')

<div class="container">
    <div class="page-header">
        <h1 class="page-title">
        Posts
        </h1>
    </div>
    
    <div class="row row-cards row-deck">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="btn-list">
                        <a class="btn btn-primary" href="{{ url('post-user/create') }}">
                            <i class="fe fe-plus"></i> Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                
                <div class="table-responsive">
                    <table id="myTable" class="table card-table table-vcenter text-nowrap">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                                <tr>
                                    <td>{{ $d['title'] }}</td>
                                    <td>{{ $d['content'] }}</td>
                                    <td>
                                        <a class="icon btn btn-outline-warning" href="{{ route('edit-post', $d['id']) }}">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                        <a class="delete icon btn btn-outline-danger" data-href="{{ route('destroy-post', $d['id']) }}">
                                            <i class="fe fe-trash-2"></i>
                                        </a>
                                    </td>
                                    
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>

                </div>
                
            </div>
        </div>
    </div>
</div>





@endsection

@section('script')
<script>
require(['datatables', 'jquery'], function(datatable, $){
    $('#myTable').DataTable({
        'responsive': true,
        'paging'      : true,
        'ordering'    : true,
        'searching'   : true,
    });
})
require(['swal', 'jquery'], function(swal, $){
    $(document).ready(function(){
        $(document).on("click", ".delete", function(e) {
                e.preventDefault();
                const el = $(this);
            swal({
                title: "Are you sure?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
            function(isConfirm) {
                if(isConfirm == true){
                    window.location.href = el.data('href');
                } 
            });
        });
    });
})
</script>
@endsection
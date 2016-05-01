@extends('layout.default4')

@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>

            <th>Name</th>
            <th>Email</th>
            <th>Action</th>

        </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('registerd.data') !!}',
            columns: [

                { data: 'first_name', name: 'first_name' },
                { data: 'email', name: 'email' },
                { data: 'action', name: 'action' },

            ]
        });
    });
</script>
@endpush
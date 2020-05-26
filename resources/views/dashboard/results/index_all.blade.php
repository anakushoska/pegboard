
@extends('dashboard.layouts.admin')

@section('headIncludes')
    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">
                        Results
                        <a href="#" class="btn btn-outline-primary btn-flat btn-sm ml-3"><i
                                    class="fa fa-plus"></i> Add new result</a>
                    </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    @if($results->count())
    <div class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    @include('dashboard.includes.flash_messages')

                    <table class="table table-hover table-responsive" id="dataTable">
                        <thead>
                        <tr>
                            <th>Result ID</th>
<th></th>
<th></th>
                           <th>Created</th>


                        </tr>
                        </thead>
                        <tbody>

                        @foreach($results as $result)
                            <tr>
                                <td>
                                    <a class="btn btn-link" href="{{ route('result.details.index', $result->id) }}">
                                        Result {{$result->id}}
                                    </a>
                                </td>
                                <td align="right" style="position: relative" class="p-3">
                                    @include('dashboard.includes.delete-button',['id' => $result->id, 'route' => route('results.destroy', $result->id)])
                                </td>
                                <td>
                                    <a class="btn btn-link" href="{{ route('results.create', $result->id) }}">
                                        {{$result->patient->name}}
                                    </a>
                                </td>
                                <td>
                                    <a href="#">{{$result->created_at}}</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- /.col -->
            </div><!-- /.row -->


        </div>
    </div>
@endif

    @include('dashboard.includes.modal-confirm-delete')
@endsection

@section('footerIncludes')
    <!-- DataTables -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        $(function () {
            $('#dataTable').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "autoWidth": false,
                "order": [[ 3, "desc" ]],
        "aoColumns": [
           null,
           { "bSortable": false },
           { "bSortable": false },
           null
         ]

            });
        });
    </script>
@endsection

@extends('layouts.service_dashboard')
@section('title','Email templates')
@section('content')

    <div class="col-md-10 bg-blue middlecontainer">
        @if(Session::has('success'))
            <p class="alert alert-success">{{ Session::get('success') }}
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </p>
        @endif

        @if(Session::has('alert-warning'))
            <p class="alert alert-warning">{{ Session::get('alert-warning') }}
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </p>
        @endif

        <div class="panel panel-info">
            <div class="row" style="margin-top: 8px;">
                <div class="col-md-12">
                    <h3 style="padding: 20px;">
                        Email Templates
                        <a href="{{ route('email-templates.create') }}" class="btn btn-md btn-primary"
                           style="float: right; margin-top: -10px;">Add Template</a>
                    </h3>
                    <hr>
                    <div class="row" style="padding: 20px;">
                        <div class="col-md-12">
                            <table class="table table-hover table-bordered" id="myTable">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                @foreach($templates as $template)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $template->email_type }}</td>
                                        <td>
                                            @if ($template->status == 1)
                                            <a class="btn btn-sm btn-success"><i class="fa fa-check"></i>&nbsp;Default</a>
                                            @else
                                                <a href="{{ url('/email-templates-default',$template->id) }}" class="btn btn-sm btn-info">
                                                    Set Default
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('email-templates.show',$template->id) }}"
                                               class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Show</a>
                                            <a href="{{ route('email-templates.edit',$template->id) }}"
                                               class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                            <button type="button" data-toggle="modal" data-target="#deleteTemplate"
                                                    onclick="deleteTemplate('{{ $template->id }}')"
                                                    class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
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

    <div class="modal fade" id="deleteTemplate" tabindex="-1" role="dialog" aria-labelledby="basicModal"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Delete Template</h4>
                </div>
                <div class="modal-body">
                    Are you sure to delete template?
                </div>
                <div class="modal-footer">
                    <form action="{{ url('/email-templates/delete') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" id="template_id" name="id">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        function deleteTemplate(id) {
            $('#template_id').val(id);
        }
    </script>
@endsection
@extends('layouts.app')
@section('title','Addons')
@section('sidebar')
    @include('layouts.admin_side_bar', ['modules' => $modules])
@endsection
@section('css')
@endsection
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" />
<style>

.dropdown-toggle::after {
    display:none ;

}
.hr45::before {
  filter: hue-rotate(45deg)
}

.hr90::before {
  filter: hue-rotate(90deg)
}

.hr180::before {
  filter: hue-rotate(180deg)
}

.hr225::before {
  filter: hue-rotate(225deg)
}

.hr327brgtns108::before {
  filter: hue-rotate(327deg) brightness(108%);
}
.custom-control-label{
    cursor: pointer;
}
    </style>
<div class="content-page bg-body">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="col-xl-12">
                <div class="mt-5">
                    <div class="card-body" style="background-color: #fff;">
                        <h3 class="header-title mb-3">All Modules</h3>
                        <div class="table-responsive">
                            <table class="table table-borderless table-nowrap table-hover table-centered m-0">
                                <thead class="" style="background-color: #6658dd">
                                    <tr>
                                        <th>Modules</th>
                                        <th>Adons</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(count($modules) > 0)
                                    @foreach($modules as $key => $module)
                                    <tr>
                                        <td>
                                            <h6 class="m-0 fw-normal ">{{ $module->getName() }}</h6>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-switch ">
                                                <input type="checkbox" class="custom-control-input" module="{{ $module->getName() }}" id="customSwitch{{ $loop->index }}" (click)="changeState($event)" @if($module->isEnabled()) checked @endif>
                                                <label class="custom-control-label text-yb hr327brgtns108" for="customSwitch{{ $loop->index }}">Activate </label>
                                              </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <td>No record found.</td>
                                @endif
                                </tbody>
                            </table>
                        </div> <!-- end .table-responsive-->
                    </div>
                </div> <!-- end card-->
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('.custom-control-input').on('change', function() {
                var status1 = $(this).is(':checked');
                var name1 = $(this).attr('module');
                $.ajax({
                    type: "post",
                    url: "{{ route('addon.change.status') }}",
                    data:{ _token:"{{ csrf_token() }}", name: $(this).attr('module'), status: $(this).is(':checked') },
                    dataType: "json",
                    success: function (data) {
                        console.log(data);
                    }
                });
            });
        });
    </script>
@endsection

@extends('admin.layouts.master')

@section('content')
<div class="page-content">
    <div class="container">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    {{-- <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div> --}}
    <div class="clearfix"></div>
    <div class="content sm-gutter">

      <div class="page-title">
        <h3>Edit Service detail</h3>
        <div class="pull-right">
          <a href="{{ route('servicedetail.index') }}" class="btn btn-success" type="submit">Back</a>
        </div>
      </div>
      <!-- BEGIN DASHBOARD TILES -->
      {{-- <div class="row">
        <div class="col-md-4 col-vlg-3 col-sm-6">
          <div class="tiles green m-b-10">
            <div class="tiles-body">
              <div class="controller">
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
              <div class="tiles-title text-black">OVERALL SALES </div>
              <div class="widget-stats">
                <div class="wrapper transparent">
                  <span class="item-title">Overall Visits</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="widget-stats">
                <div class="wrapper transparent">
                  <span class="item-title">Today's</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="widget-stats ">
                <div class="wrapper last">
                  <span class="item-title">Monthly</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="progress transparent progress-small no-radius m-t-20" style="width:90%">
                <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="64.8%"></div>
              </div>
              <div class="description"> <span class="text-white mini-description ">4% higher <span class="blend">than last month</span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-vlg-3 col-sm-6">
          <div class="tiles blue m-b-10">
            <div class="tiles-body">
              <div class="controller">
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
              <div class="tiles-title text-black">OVERALL VISITS </div>
              <div class="widget-stats">
                <div class="wrapper transparent">
                  <span class="item-title">Overall Visits</span> <span class="item-count animate-number semi-bold" data-value="15489" data- animation-duration="700">0</span>
                </div>
              </div>
              <div class="widget-stats">
                <div class="wrapper transparent">
                  <span class="item-title">Today's</span> <span class="item-count animate-number semi-bold" data-value="551" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="widget-stats ">
                <div class="wrapper last">
                  <span class="item-title">Monthly</span> <span class="item-count animate-number semi-bold" data-value="1450" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="progress transparent progress-small no-radius m-t-20" style="width:90%">
                <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="54%"></div>
              </div>
              <div class="description"> <span class="text-white mini-description ">4% higher <span class="blend">than last month</span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-vlg-3 col-sm-6">
          <div class="tiles purple m-b-10">
            <div class="tiles-body">
              <div class="controller">
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
              <div class="tiles-title text-black">SERVER LOAD </div>
              <div class="widget-stats">
                <div class="wrapper transparent">
                  <span class="item-title">Overall Load</span> <span class="item-count animate-number semi-bold" data-value="5695" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="widget-stats">
                <div class="wrapper transparent">
                  <span class="item-title">Today's</span> <span class="item-count animate-number semi-bold" data-value="568" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="widget-stats ">
                <div class="wrapper last">
                  <span class="item-title">Monthly</span> <span class="item-count animate-number semi-bold" data-value="12459" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="progress transparent progress-small no-radius m-t-20" style="width:90%">
                <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="90%"></div>
              </div>
              <div class="description"> <span class="text-white mini-description ">4% higher <span class="blend">than last month</span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-vlg-3 visible-xlg visible-sm col-sm-6">
          <div class="tiles red m-b-10">
            <div class="tiles-body">
              <div class="controller">
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
              <div class="tiles-title text-black">OVERALL SALES </div>
              <div class="widget-stats">
                <div class="wrapper transparent">
                  <span class="item-title">Overall Sales</span> <span class="item-count animate-number semi-bold" data-value="5669" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="widget-stats">
                <div class="wrapper transparent">
                  <span class="item-title">Today's</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="widget-stats ">
                <div class="wrapper last">
                  <span class="item-title">Monthly</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">0</span>
                </div>
              </div>
              <div class="progress transparent progress-small no-radius m-t-20" style="width:90%">
                <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="64.8%"></div>
              </div>
              <div class="description"> <span class="text-white mini-description ">4% higher <span class="blend">than last month</span></span>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="grid simple form-grid">
            <div class="grid-title">
                <h4>Edit <span class="semi-bold"> Service detail</span></h4>

            </div>
            <div class="grid-body no-border">
              <form action="{{ route('servicedetail.update' , $servicedetail->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="form-label">Svg</label>
                    {{-- <input type="hidden" name="current_svg" value="{{ $service->svg }}"> --}}
                    <input class="form-control" id="form1Amount" name="svg" type="file"><span>{{ $servicedetail->svg }}</span>
                </div>
                <div class="form-group">
                  <label class="form-label">Title</label>
                  <input class="form-control" id="form1Amount" name="title" type="text" value="{{ $servicedetail->title }}">
                </div>

                <div class="form-group">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="4">{{ $servicedetail->description }}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Services</label>
                    <select class="form-control" name="service_id" id="">
                        <option value="">Select Service</option>
                        @foreach ($services as $service)
                        <option value="{{ $service->id }}" {{ $servicedetail->service_id == $service->id ? 'selected' : '' }}>{{ $service->title}}</option>

                        @endforeach
                    </select>
                </div>

                {{-- <div class="form-group">
                    <label class="form-label">Project Image</label> --}}
                    {{-- <input type="hidden" name="current_image" value="{{ $servicedetail->project_overview_image }}"> --}}
                    {{-- <input class="form-control" id="form1Amount" name="project_overview_image" type="file"><span>{{ $servicedetail->project_overview_image }}</span>
                </div>
                <div class="form-group">
                    <label class="form-label">Project Title</label>
                    <input class="form-control" id="form1Amount" name="project_title" type="text" value="{{ $servicedetail->project_title }}">
                </div>

                <div class="form-group">
                    <label class="form-label">Project Description</label>
                    <textarea class="form-control" name="project_description" id="project_description" cols="30" rows="4">{{ $servicedetail->project_description }}</textarea>
                </div> --}}
                <div class="form-group">
                    <div class="checkbox checkbox check-success">
                        <input type="checkbox" name="is_active" value="1" {{ $service->is_active == 1 ? "Checked" : "" }} id="chkTerms">
                        <label for="chkTerms">Active </label>
                      </div>
                </div>
                <div class="form-actions">
                  <div class="pull-right">
                    <button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i>Update</button>
                    <button class="btn btn-white btn-cons" type="button">Cancel</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
</div>
@endsection


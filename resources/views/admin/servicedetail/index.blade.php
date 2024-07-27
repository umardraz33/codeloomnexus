@extends('admin.layouts.master')

@section('content')
<div class="page-content">
    <div class="container">

    <div class="clearfix"></div>
    <div class="content sm-gutter">
        <div>
            <a href="{{ route('servicedetail.create') }}" class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i>Create Service Detail</a>
        </div>
        <x-alert />
    </div>

            <div class="grid-body no-border">
                <div class="row-fluid">
                    <div class="span12">
                      <div class="grid simple ">
                        <div class="grid-title">
                          <h4>All <span class="semi-bold">Service Details</span></h4>

                        </div>
                        <div class="grid-body ">
                          <table class="table" id="example3">
                            <thead>
                              <tr>
                                <th>Svg</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Services</th>
                                {{-- <th>Project Image</th>
                                <th>Project Title</th>
                                <th>Project Description</th> --}}
                                <th>Active</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($servicedetails as $servicedetail)
                                <tr class="gradeA">
                                  <td style="background: black; display: flex;"><img style="width: 70px; height: 70px" src="{{ asset('admin/assets/img/svg/' . $servicedetail->svg) }}" alt=""></td>
                                  <td>{{ $servicedetail->title }}</td>
                                  <td>{{ $servicedetail->slug }}</td>
                                  <td>{{ $servicedetail->description }}</td>
                                  <td>{{ $servicedetail->service->title }}</td>
                                  {{-- <td><img style="width: 70px; height: 70px" src="{{ asset('admin/assets/img/uploads/' . $servicedetail->project_overview_image) }}" alt=""></td>
                                  <td>{{ $servicedetail->project_title }}</td>
                                  <td>{{ $servicedetail->project_description }}</td> --}}
                                  <td>{{ $servicedetail->is_active == 1 ? "Active" :"Inactive" }}</td>
                                  <td class="center">
                                    <a href="{{ route('servicedetail.edit' , $servicedetail->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('servicedetail.destroy' , $servicedetail->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>

                                    </form>

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


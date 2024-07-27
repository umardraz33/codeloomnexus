@extends('admin.layouts.master')

@section('content')
<div class="page-content">
    <div class="container">

    <div class="clearfix"></div>
    <div class="content sm-gutter">
        <div>
            <a href="{{ route('service.create') }}" class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i>Create Service</a>
        </div>
        <x-alert />
    </div>

            <div class="grid-body no-border">
                <div class="row-fluid">
                    <div class="span12">
                      <div class="grid simple ">
                        <div class="grid-title">
                          <h4>All <span class="semi-bold">Services</span></h4>

                        </div>
                        <div class="grid-body ">
                          <table class="table" id="example3">
                            <thead>
                              <tr>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Active</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                <tr class="gradeA">
                                  <td>{{ $service->title }}</td>
                                  <td>{{ $service->slug }}</td>
                                  <td>{{ $service->is_active == 1 ? "Active" :"Inactive" }}</td>
                                  <td class="center">
                                    <a href="{{ route('service.edit' , $service->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('service.destroy' , $service->id) }}" method="POST" style="display: inline;">
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


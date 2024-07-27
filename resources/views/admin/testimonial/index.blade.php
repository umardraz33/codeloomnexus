@extends('admin.layouts.master')

@section('content')
<div class="page-content">
    <div class="container">

    <div class="clearfix"></div>
    <div class="content sm-gutter">
        <div>
            <a href="{{ route('testimonial.create') }}" class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i>Create Testimonial</a>
        </div>
        <x-alert />
    </div>

            <div class="grid-body no-border">
                <div class="row-fluid">
                    <div class="span12">
                      <div class="grid simple ">
                        <div class="grid-title">
                          <h4>All <span class="semi-bold">Testimonials</span></h4>

                        </div>
                        <div class="grid-body ">
                          <table class="table" id="example3">
                            <thead>
                              <tr>
                                {{-- <th>Image</th> --}}
                                <th>Client Name</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Comment</th>
                                <th>Active</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
    @foreach ($testimonials as $testimonial)
    <tr class="gradeA">
        <td><img style="height: 50px; width:50px" src="{{ asset('admin/assets/img/uploads/' . $testimonial->image) }}" alt=""></td>
        <td>{{ $testimonial->name }}</td>
        <td>{{ $testimonial->title }}</td>
        <td>{{ $testimonial->slug }}</td>
        <td>{{ $testimonial->comment }}</td>
        <td>{{ $testimonial->is_active == 1 ? 'Active' : 'Inactive' }}</td>
        <td class="center">
            <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST" style="display: inline;">
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


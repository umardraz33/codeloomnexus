@extends('admin.layouts.master')

@section('content')
<div class="page-content">
    <div class="container">

    <div class="clearfix"></div>
    <div class="content sm-gutter">
        <div>
            <a href="{{ route('blog.create') }}" class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i>Create Blog</a>
        </div>
        <x-alert />
    </div>

            <div class="grid-body no-border">
                <div class="row-fluid">
                    <div class="span12">
                      <div class="grid simple ">
                        <div class="grid-title">
                          <h4>All <span class="semi-bold">Blogs</span></h4>

                        </div>
                        <div class="grid-body ">
                          <table class="table" id="example3">
                            <thead>
                              <tr>
                                <th>Images</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Detailed Description</th>
                                <th>Active</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                                @foreach ($blogs as $blog)
                                <tr class="gradeA">
                                    {{-- @if(isset($blog->images[0]))
                                    <td><img style="height: 50px; width: 50px" src="{{ asset('admin/assets/img/uploads/' . $blog->images[0]) }}" alt="Team Member Image"></td>
                                    @endif --}}
                                    <td>
                                        @if(isset($blog->images) && count($blog->images) > 0)
                                        @foreach($blog->images as $image)
                                            <img style="height: 50px; width: 50px" src="{{ asset('admin/assets/img/uploads/' . $image) }}">
                                        @endforeach
                                        @else "No Image"
                                        @endif
                                    </td>

                                  <td>{{ $blog->title }}</td>
                                  <td>{{ $blog->slug }}</td>
                                  <td>{{ $blog->description }}</td>
                                  <td>{{ $blog->detail_description }}</td>
                                  <td>{{ $blog->is_active == 1 ? 'Active' : 'Inactive' }}</td>
                                  <td class="center">
                                    <a href="{{ route('blog.edit' , $blog->id) }}" class="btn btn-primary">Edit</a>

                                    <form action="{{ route('blog.destroy' , $blog->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')" >Delete</button>

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


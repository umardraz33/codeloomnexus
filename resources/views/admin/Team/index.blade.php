@extends('admin.layouts.master')

@section('content')
<div class="page-content">
    <div class="container">

    <div class="clearfix"></div>
    <div class="content sm-gutter">
        <div>
            <a href="{{ route('team.create') }}" class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i>Create Team</a>
        </div>
        <x-alert />
    </div>

            <div class="grid-body no-border">
                <div class="row-fluid">
                    <div class="span12">
                      <div class="grid simple ">
                        <div class="grid-title">
                          <h4>All <span class="semi-bold">Teams</span></h4>

                        </div>
                        <div class="grid-body ">
                          <table class="table" id="example3">
                            <thead>
                              <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Active</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($teams as $team)
                                <tr class="gradeA">
                                  <td><img style="height: 50px; width:50px" src="{{ asset('admin/assets/img/uploads/' . $team->image) }}" alt="Team Member Image"></td>
                                  <td>{{ $team->name }}</td>
                                  <td>{{ $team->designation }}</td>
                                  <td class="center">{{ $team->is_active == 1 ? 'Active' : 'Inactive'}}</td>
                                  <td class="center">
                                    <a href="{{ route('team.edit' , $team->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('team.destroy', $team->id) }}" method="post" style="display: inline;">
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


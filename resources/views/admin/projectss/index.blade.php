@extends('admin.layouts.master')

@section('content')
    <div class="page-content">
        <div class="container">

            <div class="clearfix"></div>
            <div class="content sm-gutter">
                <div>
                    <a href="{{ route('project.create') }}" class="btn btn-success btn-cons" type="submit"><i
                            class="icon-ok"></i>Create Project</a>
                </div>

                <x-alert />
                {{-- <x-update-alert :showUpdate="!$isCreate" /> --}}
            </div>

            <div class="grid-body no-border">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="grid simple ">
                            <div class="grid-title">
                                <h4>All <span class="semi-bold">Projects</span></h4>

                            </div>
                            <div class="grid-body ">
                                <table class="table" id="example3">
                                    <thead>
                                        <tr>
                                            <th>Project Logo</th>
                                            <th>Title</th>
                                            <th>Slug</th>
                                            <th>Project Image</th>
                                            <th>Description</th>
                                            <th>Services</th>
                                            <th>Service Detail Title</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($projects as $project) --}}
                                        @forelse ($projects as $project)
                                            <tr class="gradeA">
                                                <td><img style="width: 70px; height: 70px"
                                                        src="{{ asset('admin/assets/img/logo/' . $project->project_logo) }}"
                                                        alt=""></td>
                                                <td>{{ $project->title }}</td>
                                                <td>{{ $project->slug }}</td>
                                                <td><img style="width: 70px; height: 70px"
                                                        src="{{ asset('admin/assets/img/uploads/' . $project->image) }}"
                                                        alt=""></td>
                                                <td>{!! $project->description !!}</td>
                                                <td>{{ $project->service->title }}</td>
                                                {{-- <td>{{ $project->serviceDetail->title }}</td> --}}

                                                <td>
                                                    @if ($project->servicedetail_id)
                                                        {{ $project->serviceDetail->title }}
                                                    @else
                                                    @endif
                                                </td>
                                                {{-- <td>{{ $servicedetail->project_title }}</td>
                                  <td>{{ $servicedetail->project_description }}</td> --}}
                                                <td>{{ $project->is_active == 1 ? 'Active' : 'Inactive' }}</td>
                                                <td class="center">
                                                    <a href="{{ route('project.edit', $project->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <form action="{{ route('project.destroy', $project->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>

                                                    </form>

                                                </td>
                                            </tr>

                                        @empty
                                            <tr class="gradeA">
                                                No Record Found!!!
                                            </tr>
                                        @endforelse

                                        {{-- @endforeach --}}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection

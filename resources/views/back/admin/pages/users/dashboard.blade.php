@extends('back.admin.layouts.admin-app')

@section('title')
{{ config('app.name') }} | CMS Admin - Recipes
@endsection

@section('content')
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            <div class="card mb-4 wow fadeIn">
                <div class="card-body d-sm-flex justify-content-between">
                    <h4 class="mb-2 mb-sm-0 pt-1">
                        <a href="{{ route('admin.users.dashboard') }}">Users</a>
                        <span>/</span>
                        <span>Dashboard</span>
                    </h4>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary btn-rounded btn-md waves-effect waves-light" href="" role="button" 
                            data-toggle="modal" data-target="#createUserModal">
                            Create new user 
                            <i class="far fa-plus ml-1 mr-0"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--Modals start-->
    <!-- Create user modal start -->
    <div class="modal fade" id="createUserModal" tabindex="-1" role="dialog" aria-labelledby="createUserModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createUserModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Create user modal end -->
    <!--Modals end-->
@endsection

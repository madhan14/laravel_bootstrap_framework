@extends('layouts.app')
@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tasks</a></li>
                            <li class="breadcrumb-item active">Kanban Board</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Kanban Board
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add-new-task-modal" class="btn btn-success btn-sm ms-3">Add New</a></h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="board">
                    <div class="tasks" data-plugin="dragula" data-containers='["task-list-one", "task-list-two", "task-list-three", "task-list-four"]'>
                        <h5 class="mt-0 task-header">TODO (3)</h5>

                        <div id="task-list-one" class="task-list-items">

                            <!-- Task Item -->
                            <div class="card mb-0">
                                <div class="card-body p-3">
                                    <small class="float-end text-muted">18 Jul 2018</small>
                                    <span class="badge bg-danger">High</span>

                                    <h5 class="mt-2 mb-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">iOS App home page</a>
                                    </h5>

                                    <p class="mb-0">
                                        <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-briefcase-outline text-muted"></i>
                                            iOS
                                        </span>
                                        <span class="text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                            <b>74</b> Comments
                                        </span>
                                    </p>

                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical font-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                        </div>
                                    </div>

                                    <p class="mb-0">
                                        <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                        <span class="align-middle">Robert Carlile</span>
                                    </p>
                                </div> <!-- end card-body -->
                            </div>
                            <!-- Task Item End -->

                            <!-- Task Item -->
                            <div class="card mb-0">
                                <div class="card-body p-3">
                                    <small class="float-end text-muted">18 Jul 2018</small>
                                    <span class="badge bg-secondary text-light">Medium</span>

                                    <h5 class="mt-2 mb-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Topnav layout design</a>
                                    </h5>

                                    <p class="mb-0">
                                        <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-briefcase-outline text-muted"></i>
                                            Hyper
                                        </span>
                                        <span class="text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                            <b>28</b> Comments
                                        </span>
                                    </p>

                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical font-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                        </div>
                                    </div>

                                    <p class="mb-0">
                                        <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                        <span class="align-middle">Coder Themes</span>
                                    </p>
                                </div> <!-- end card-body -->
                            </div>
                            <!-- Task Item End -->

                            <!-- Task Item -->
                            <div class="card mb-0">
                                <div class="card-body p-3">
                                    <small class="float-end text-muted">11 Jul 2018</small>
                                    <span class="badge bg-success">Low</span>

                                    <h5 class="mt-2 mb-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Invite user to a project</a>
                                    </h5>

                                    <p class="mb-0">
                                        <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-briefcase-outline text-muted"></i>
                                            CRM
                                        </span>
                                        <span class="text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                            <b>68</b> Comments
                                        </span>
                                    </p>

                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical font-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                        </div>
                                    </div>

                                    <p class="mb-0">
                                        <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                        <span class="align-middle">Lucas Hardy</span>
                                    </p>
                                </div> <!-- end card-body -->
                            </div>
                            <!-- Task Item End -->

                        </div> <!-- end company-list-1-->
                    </div>

                    <div class="tasks">
                        <h5 class="mt-0 task-header text-uppercase">In Progress (2)</h5>

                        <div id="task-list-two" class="task-list-items">

                            <!-- Task Item -->
                            <div class="card mb-0">
                                <div class="card-body p-3">
                                    <small class="float-end text-muted">22 Jun 2018</small>
                                    <span class="badge bg-secondary text-light">Medium</span>

                                    <h5 class="mt-2 mb-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Write a release note</a>
                                    </h5>

                                    <p class="mb-0">
                                        <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-briefcase-outline text-muted"></i>
                                            Hyper
                                        </span>
                                        <span class="text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                            <b>17</b> Comments
                                        </span>
                                    </p>

                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical font-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                        </div>
                                    </div>

                                    <p class="mb-0">
                                        <img src="{{ asset('assets/images/users/avatar-5.jpg') }}" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                        <span class="align-middle">Sean White</span>
                                    </p>
                                </div> <!-- end card-body -->
                            </div>
                            <!-- Task Item End -->

                            <!-- Task Item -->
                            <div class="card mb-0">
                                <div class="card-body p-3">
                                    <small class="float-end text-muted">19 Jun 2018</small>
                                    <span class="badge bg-success">Low</span>

                                    <h5 class="mt-2 mb-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Enable analytics tracking</a>
                                    </h5>

                                    <p class="mb-0">
                                        <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-briefcase-outline text-muted"></i>
                                            CRM
                                        </span>
                                        <span class="text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                            <b>48</b> Comments
                                        </span>
                                    </p>

                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical font-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                        </div>
                                    </div>

                                    <p class="mb-0">
                                        <img src="{{ asset('assets/images/users/avatar-6.jpg') }}" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                        <span class="align-middle">Louis Allen</span>
                                    </p>
                                </div> <!-- end card-body -->
                            </div>
                            <!-- Task Item End -->

                        </div> <!-- end company-list-2-->
                    </div>


                    <div class="tasks">
                        <h5 class="mt-0 task-header text-uppercase">Review (4)</h5>
                        <div id="task-list-three" class="task-list-items">

                            <!-- Task Item -->
                            <div class="card mb-0">
                                <div class="card-body p-3">
                                    <small class="float-end text-muted">2 May 2018</small>
                                    <span class="badge bg-danger">High</span>

                                    <h5 class="mt-2 mb-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Kanban board design</a>
                                    </h5>

                                    <p class="mb-0">
                                        <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-briefcase-outline text-muted"></i>
                                            CRM
                                        </span>
                                        <span class="text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                            <b>65</b> Comments
                                        </span>
                                    </p>

                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical font-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                        </div>
                                    </div>

                                    <p class="mb-0">
                                        <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                        <span class="align-middle">Coder Themes</span>
                                    </p>
                                </div> <!-- end card-body -->
                            </div>
                            <!-- Task Item End -->

                            <!-- Task Item -->
                            <div class="card mb-0">
                                <div class="card-body p-3">
                                    <small class="float-end text-muted">7 May 2018</small>
                                    <span class="badge bg-secondary text-light">Medium</span>

                                    <h5 class="mt-2 mb-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Code HTML email template</a>
                                    </h5>

                                    <p class="mb-0">
                                        <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-briefcase-outline text-muted"></i>
                                            CRM
                                        </span>
                                        <span class="text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                            <b>106</b> Comments
                                        </span>
                                    </p>

                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical font-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                        </div>
                                    </div>

                                    <p class="mb-0">
                                        <img src="{{ asset('assets/images/users/avatar-9.jpg') }}" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                        <span class="align-middle">Zak Turnbull</span>
                                    </p>
                                </div> <!-- end card-body -->
                            </div>
                            <!-- Task Item End -->

                            <!-- Task Item -->
                            <div class="card mb-0">
                                <div class="card-body p-3">
                                    <small class="float-end text-muted">8 Jul 2018</small>
                                    <span class="badge bg-secondary text-light">Medium</span>

                                    <h5 class="mt-2 mb-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Brand logo design</a>
                                    </h5>

                                    <p class="mb-0">
                                        <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-briefcase-outline text-muted"></i>
                                            Design
                                        </span>
                                        <span class="text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                            <b>95</b> Comments
                                        </span>
                                    </p>

                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical font-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                        </div>
                                    </div>

                                    <p class="mb-0">
                                        <img src="{{ asset('assets/images/users/avatar-8.jpg') }}" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                        <span class="align-middle">Lily Parkin</span>
                                    </p>
                                </div> <!-- end card-body -->
                            </div>
                            <!-- Task Item End -->

                            <!-- Task Item -->
                            <div class="card mb-0">
                                <div class="card-body p-3">
                                    <small class="float-end text-muted">22 Jul 2018</small>
                                    <span class="badge bg-danger">High</span>

                                    <h5 class="mt-2 mb-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Improve animation loader</a>
                                    </h5>

                                    <p class="mb-0">
                                        <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-briefcase-outline text-muted"></i>
                                            CRM
                                        </span>
                                        <span class="text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                            <b>39</b> Comments
                                        </span>
                                    </p>

                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical font-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                        </div>
                                    </div>

                                    <p class="mb-0">
                                        <img src="{{ asset('assets/images/users/avatar-4.jpg') }}" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                        <span class="align-middle">Riley Steele</span>
                                    </p>
                                </div> <!-- end card-body -->
                            </div>
                            <!-- Task Item End -->

                        </div> <!-- end company-list-3-->
                    </div>

                    <div class="tasks">
                        <h5 class="mt-0 task-header text-uppercase">Done (1)</h5>
                        <div id="task-list-four" class="task-list-items">

                            <!-- Task Item -->
                            <div class="card mb-0">
                                <div class="card-body p-3">
                                    <small class="float-end text-muted">16 Jul 2018</small>
                                    <span class="badge bg-success">Low</span>

                                    <h5 class="mt-2 mb-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Dashboard design</a>
                                    </h5>

                                    <p class="mb-0">
                                        <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-briefcase-outline text-muted"></i>
                                            Hyper
                                        </span>
                                        <span class="text-nowrap mb-2 d-inline-block">
                                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                            <b>287</b> Comments
                                        </span>
                                    </p>

                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical font-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                        </div>
                                    </div>

                                    <p class="mb-0">
                                        <img src="{{ asset('assets/images/users/avatar-10.jpg') }}" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                        <span class="align-middle">Harvey Dickinson</span>
                                    </p>
                                </div> <!-- end card-body -->
                            </div>
                            <!-- Task Item End -->

                        </div> <!-- end company-list-4-->
                    </div>

                </div> <!-- end .board-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

    </div> <!-- container -->
    <!--  Add new task modal -->
    <div class="modal fade task-modal-content" id="add-new-task-modal" tabindex="-1" role="dialog" aria-labelledby="NewTaskModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="NewTaskModalLabel">Create New Task</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="p-2">
                        <div class="mb-3">
                            <label class="form-label">Project</label>
                            <select class="form-select form-control-light">
                                <option>Select</option>
                                <option>Hyper - Admin Dashboard</option>
                                <option>CRM - Design & Development</option>
                                <option>iOS - App Design</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="task-title" class="form-label">Title</label>
                                    <input type="text" class="form-control form-control-light" id="task-title" placeholder="Enter title">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="task-priority2" class="form-label">Priority</label>
                                    <select class="form-select form-control-light" id="task-priority2">
                                        <option>Low</option>
                                        <option>Medium</option>
                                        <option>High</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="task-description" class="form-label">Description</label>
                            <textarea class="form-control form-control-light" id="task-description" rows="3"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="task-title" class="form-label">Assign To</label>
                                    <select class="form-select form-control-light" id="task-priority">
                                        <option>Coderthemes</option>
                                        <option>Robert Carlile</option>
                                        <option>Louis Allen</option>
                                        <option>Sean White</option>
                                        <option>Riley Steele</option>
                                        <option>Zak Turnbull</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="task-priority" class="form-label">Due Date</label>
                                    <input type="text" class="form-control form-control-light" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true">
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--  Task details modal -->
    <div class="modal fade task-modal-content" id="task-detail-modal" tabindex="-1" role="dialog" aria-labelledby="TaskDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="TaskDetailModalLabel">iOS App home page <span class="badge bg-danger ms-2">High</span></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="p-2">
                        <h5 class="mt-0">Description:</h5>

                        <p class="text-muted mb-4">
                            Voluptates, illo, iste itaque voluptas corrupti ratione reprehenderit magni similique? Tempore, quos delectus asperiores
                            libero voluptas quod perferendis! Voluptate, quod illo rerum? Lorem ipsum dolor sit amet. With supporting text below
                            as a natural lead-in to additional contenposuere erat a ante.
                        </p>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-4">
                                    <h5>Create Date</h5>
                                    <p>17 March 2018 <small class="text-muted">1:00 PM</small></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-4">
                                    <h5>Due Date</h5>
                                    <p>22 December 2018 <small class="text-muted">1:00 PM</small></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-4" id="tooltip-container">
                                    <h5>Asignee:</h5>
                                    <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                        <img src="{{ asset('assets/images/users/avatar-6.jpg') }}" class="rounded-circle avatar-xs" alt="friend">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end row-->

                        <ul class="nav nav-tabs nav-bordered mb-3">
                            <li class="nav-item">
                                <a href="#home-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                    Comments
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#profile-b1" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Files
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane show active" id="home-b1">
                                <textarea class="form-control form-control-light mb-2" placeholder="Write message" id="example-textarea" rows="3"></textarea>
                                <div class="text-end">
                                    <div class="btn-group mb-2 d-none d-sm-inline-block">
                                        <button type="button" class="btn btn-link btn-sm text-muted font-18"><i class="dripicons-paperclip"></i></button>
                                    </div>
                                    <div class="btn-group mb-2 ms-2 d-none d-sm-inline-block">
                                        <button type="button" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                </div>

                                <div class="d-flex mt-2">
                                    <img class="me-3 avatar-sm rounded-circle" src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="Generic placeholder image">
                                    <div class="w-100">
                                        <h5 class="mt-0">Jeremy Tomlinson</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                        vulputate at, tempus viverra turpis.

                                        <div class="d-flex mt-3">
                                            <a class="pe-3" href="#">
                                                <img src="{{ asset('assets/images/users/avatar-4.jpg') }}" class="avatar-sm rounded-circle" alt="Generic placeholder image">
                                            </a>
                                            <div class="w-100">
                                                <h5 class="mt-0">Kathleen Thomas</h5>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                vulputate at, tempus viverra turpis.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center mt-2">
                                    <a href="javascript:void(0);" class="text-danger">Load more </a>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile-b1">
                                <div class="card mb-1 shadow-none border">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title rounded">
                                                        .ZIP
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col ps-0">
                                                <a href="javascript:void(0);" class="text-muted fw-bold">Hyper-admin-design.zip</a>
                                                <p class="mb-0">2.3 MB</p>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Button -->
                                                <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                    <i class="dripicons-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-1 shadow-none border">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <img src="{{ asset('assets/images/projects/project-1.jpg') }}" class="avatar-sm rounded" alt="file-image" />
                                            </div>
                                            <div class="col ps-0">
                                                <a href="javascript:void(0);" class="text-muted fw-bold">Dashboard-design.jpg</a>
                                                <p class="mb-0">3.25 MB</p>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Button -->
                                                <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                    <i class="dripicons-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-0 shadow-none border">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title bg-secondary rounded">
                                                        .MP4
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col ps-0">
                                                <a href="javascript:void(0);" class="text-muted fw-bold">Admin-bug-report.mp4</a>
                                                <p class="mb-0">7.05 MB</p>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Button -->
                                                <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                    <i class="dripicons-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- .p-2 -->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('script')
    <!-- dragula js-->
    <script src="{{ asset('assets/js/vendor/dragula.min.js') }}"></script>

    <!-- demo js -->
    <script src="{{ asset('assets/js/ui/component.dragula.js') }}"></script>
@endsection
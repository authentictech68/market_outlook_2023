@extends('template.main')

  @section('container')
  <main class="main-content position-relative border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Admin</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">User Table</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">User Table</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here..." />
            </div> -->
          </div>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Import User Accounts</h6>
                </div>
                <!-- <div class="col-6 text-end">
                  <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Card</a>
                </div> -->
              </div>
            </div>
            <div class="card-body p-3">
              <div class="row">
                  <label for="photos" class="form-label">File input</label>
                <div class="col-md-9 mb-md-0 mb-4">
                    <form action="/admin/import_user" method="post" enctype="multipart/form-data">
                      <?= csrf_field(); ?>
                      <input class="form-control form-control-lg" id="file_excel" type="file" name="file_excel" accept=".xls, .xlsx" onchange="this.form.submit()" />
                    </form>
                </div>
                <div class="col-md-3 mb-4">
                  <a href="Import_User_Template.xlsx" class="btn bg-gradient-dark mb-0" download><i class="fas fa-download"></i>&nbsp;&nbsp;Template</a>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
        
      <div class="row mt-4">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Users</h6>
                </div>
                <div class="col-6 text-end">
      
                  <!-- Button trigger modal -->
                  <button type="button" class="btn bg-gradient-dark mb-0 add-user" data-bs-toggle="modal" data-bs-target="#userModal">
                    <i class="fas fa-plus"></i>&nbsp;&nbsp;Add New User
                  </button>
                </div>
              </div>
              
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Profile</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Account</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                      <!--<th class="text-secondary opacity-7"></th>-->
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($users as $u) : ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="<?= '/images/profile-picture/' . $u['profile_picture'] ?>" class="avatar avatar-sm me-3" alt="user" />
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?= $u['full_name']; ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?= $u['username']; ?></p>
                        <p class="text-xs text-secondary mb-0"><?= $u['phone_number']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $u['role']; ?></span>
                      </td>
                      <!-- <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user"> Edit </a>
                      </td> -->
                      <td class="align-middle text-center text-sm">
                        <?= ($u['status'] == 1) ? '<span class="badge badge-sm bg-gradient-success">Present</span>' : ''; ?>
                      </td>
                      <td class="align-middle text-center text-sm">
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-link text-primary text-xs mb-0 edit-user" data-bs-toggle="modal" data-bs-target="#userModal" data-id="<?= $u['id']; ?>">Edit</button>
                              <form action="/admin/delete_user/<?//= $pageUsers; ?>" method="post">
                                  <?= csrf_field(); ?>
                                  <input type="hidden" name="id" value ="<?= $u['id']; ?>"/>
                                  <button type="submit" class="btn btn-link text-danger text-xs mb-0" onclick="confirm('Are you sure to delete user?')">Delete</button>
                              </form>
                          </div>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer align-items-right">
              <?//= $pager->links('users', 'custom_pagination'); ?>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row mt-4">
          <div class="col-12">
              <div class="card mb-4">
                  <div class="card-header pb-0">
                      <div class="row">
                          <div class="col-6 d-flex align-items-center">
                              <h6 class="mb-0">Attendance List</h6>
                          </div>
                          <div class="col-6 text-end">
                              <button type="button" class="btn bg-gradient-dark mb-0 add-user" data-bs-toggle="modal" data-bs-target="#attendanceListModal">
                                <i class="fas fa-undo"></i>&nbsp;&nbsp;Submit & Reset Attendance List
                              </button>
                          </div>
                      </div>
                  </div>
                  <div class="card-body p-4">
                      <div class="row">
                          <div class="col-md-6 mb-2">
                              <a href="/admin/export_attendance_list" class="btn bg-gradient-dark mb-0"><i class="fas fa-download"></i>&nbsp;&nbsp;Export Attendance List</a>
                          </div>
                      </div> 
                  </div> 
              </div>
          </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="attendanceListModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Submit & Reset Attendance List</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/admin/submit_and_reset_attendance_list" method="post">
              <?= csrf_field(); ?>
                <div class="modal-body">
                  <div class="mb-3">
                      <input type="text" class="form-control form-control-lg <?//= ($validation->hasError('agenda')) ? 'is-invalid' : ''; ?>" name="agenda" placeholder="Agenda" aria-label="Agenda" value="<?= old('agenda'); ?>" autofocus/>
                      <div class="invalid-feedback"><?//= $validation->getError('agenda'); ?></div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit & Reset</button>
                </div>
            </form>
          </div>
        </div>
      </div>
      
      <!-- Modal -->
      <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog user-modal">
          <div class="modal-content">
            <div class="modal-header user-modal">
              <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/admin/insert_user" method="post">
              <?= csrf_field(); ?>
                <div class="modal-body">
                  <input type="hidden" name="id" id="id" value="" />
                  <div class="mb-3">
                      <input type="text" class="form-control form-control-lg <?//= ($validation->hasError('full_name')) ? 'is-invalid' : ''; ?>" name="full_name" id="full_name" placeholder="Full Name" aria-label="Full Name" value="<?= old('full_name'); ?>" autofocus/>
                      <div class="invalid-feedback"><?//= $validation->getError('full_name'); ?></div>
                  </div>
                  <div class="mb-3">
                      <input type="text" class="form-control form-control-lg <?//= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" name="username" id="username" placeholder="Username" aria-label="Username" value="<?= old('username'); ?>"/>
                      <div class="invalid-feedback"><?//= $validation->getError('username'); ?></div>
                  </div>
                  <div class="mb-3">
                      <input type="number" class="form-control form-control-lg <?//= ($validation->hasError('phone_number')) ? 'is-invalid' : ''; ?>" name="phone_number" id="phone_number" placeholder="Phone Number" aria-label="Phone Number" />
                      <div class="invalid-feedback"><?//= $validation->getError('phone_number'); ?></div>
                  </div>
                  <div class="mb-3">
                      <select class="form-select" name="role" id="role" aria-label="Role">
                        <option value="">Select Role</option>
                        <option value="committee">Committee</option>
                        <option value="participant">Participant</option>
                      </select>
                      <span class="text-danger"><?//= $validation->getError('role'); ?></span>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Insert</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </main>
    
    <script>
        $(function() {
            
            $('.add-user').on('click', function() {
                console.log('add');
                $('.user-modal .modal-title').html('Add User');
                $('.user-modal .modal-footer button[type=submit]').html('Insert');
                $('.user-modal .modal-content form').attr('action', '/admin/insert_user')
                
                $('#id').val('');
                $('#full_name').val('');
                $('#username').val('');
                $('#phone_number').val('');
                $('#role').val('');
            })
            
            $('.edit-user').on('click', function() {
                console.log('edit');
                $('.user-modal .modal-title').html('Edit User');
                $('.user-modal .modal-footer button[type=submit]').html('Update');
                $('.user-modal .modal-content form').attr('action', '/admin/update_user/<?//= $pageUsers; ?>')
        
                const id = $(this).data('id');
                console.log(id);
                
                $.ajax({
                    url: "/admin/get_user",
					method: "POST",
					data: {id:id},
                    dataType: "json",
                    success: function(data) {
                        $('#id').val(data.id);
                        $('#full_name').val(data.full_name);
                        $('#username').val(data.username);
                        $('#phone_number').val(data.phone_number);
                        $('#role').val(data.role);
                    }
                });
            });
        });
    </script>
@endsection
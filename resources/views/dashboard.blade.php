@extends('template.main')

    @section('container')
    <main class="main-content position-relative border-radius-lg">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Admin</a></li>
              <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
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
          <div class="col-xl-10 col-sm-12 mb-xl-0 mb-4">
            <div class="card bg-transparent shadow-xl">
              <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/card-visa.jpg');">
                <span class="mask bg-gradient-dark"></span>
                <div class="card-body position-relative z-index-1 p-3">
                  <!-- <i class="fas fa-wifi text-white p-2"></i> -->
                  <h5 class="text-white mt-4 mb-5 pb-2">Welcome, <?//= $userName ?></h5>
                  <div class="d-flex">
                    <div class="d-flex">
                      <div class="me-4">
                        <h6 class="text-white mb-0">Use the menu provided to view information about Forum Monev 2022.</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- Video --}}
        <div class="row mt-4">
          <div class="col-xl-10 col-sm-12 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body">
                <video src=""></video>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-lg-6 mb-lg-0 mb-2">
            <div class="row">
              <h6 class="font-weight-bolder text-dark mb-2">Committee Rundown</h6>
              <div class="col-lg-12 mb-lg-0 mb-2">
                <div class="card mb-3">
                  <div class="card-header pb-0 p-3">                    
                      <div class="d-flex justify-content-between">
                        <div>
                          <h6 class="mb-2">Rundown Day-1</h6>
                        </div>
                        <div>
                          <button type="submit" class="btn bg-gradient-secondary text-xs mb-0 ml-4">Download Itinerary</button>
                          <button type="submit" class="btn bg-gradient-dark text-xs mb-0 ml-4">Download Rundown</button>
                          <button class="btn bg-gradient-dark text-xs mb-0 add-rundown mr-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-role="committee" data-day="1" data-type="General">Add</button>
                        </div>
                      </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table align-items-center">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Time</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Activity</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Location</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if( count($rundownCommitteeDay1) < 1) : ?>
                          <tr>Data Not Found</tr>
                        <?php else : ?>
                          <?php foreach($rundownCommitteeDay1 as $rcd) : ?>
                            <tr>
                              <td class="align-middle text-center text-sm">
                                <span class="text-secondary text-xs font-weight-bold"><?= $rcd->time ?></span>
                              </td>
                              <td>
                                <span class="text-secondary text-xs font-weight-bold"><?= $rcd->agenda ?></span>
                              </td>
                              <td>
                                <p class="text-xs font-weight-bold mb-0"><?= $rcd->location ?></p>
                              </td>
                              <td>
                                <p class="text-xs font-weight-bold mb-0"><?= $rcd->description ?></p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <button class="btn btn-link text-primary text-xs mb-0 edit-rundown" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $rcd['id']; ?>">Edit</button>
                                  <form action="/dashboard/delete" method="post">
                                      <?= csrf_field(); ?>
                                      <input type="hidden" name="id" value="<?= $rcd['id']; ?>" />
                                      <button type="submit" class="btn btn-link text-danger text-xs mb-0" onclick="confirm('Are you sure to delete agenda?')">Delete</button>
                                  </form>
                              </div>
                              </td>
                            </tr>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-lg-0 mb-2">
            <div class="row">
              <div class="col-lg-12 mb-lg-0 mb-2">
                <h6 class="font-weight-bolder text-dark mb-2">Participant Rundown</h6>
                <div class="card mb-3">
                  <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h6 class="mb-2">Rundown Day-1</h6>
                      </div>
                      <div>
                        <button type="submit" class="btn bg-gradient-secondary text-xs mb-0 ml-4">Download Itinerary</button>
                            <button type="submit" class="btn bg-gradient-dark text-xs mb-0 ml-4">Download Rundown</button>
                            <button class="btn bg-gradient-dark text-xs mb-0 add-rundown mr-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-role="participant" data-day="1" data-type="General">Add</button>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table align-items-center">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Time</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Activity</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Location</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if( count($rundownCommitteeDay1) < 1) : ?>
                          <tr>Data Not Found</tr>
                        <?php else : ?>
                          <?php foreach($rundownParticipantDay1 as $rpd) : ?>
                            <tr>
                              <td class="align-middle text-center text-sm">
                                <span class="text-secondary text-xs font-weight-bold"><?= $rpd->time ?></span>
                              </td>
                              <td>
                                <span class="text-secondary text-xs font-weight-bold"><?= $rpd->agenda ?></span>
                              </td>
                              <td>
                                <p class="text-xs font-weight-bold mb-0"><?= $rpd->location ?></p>
                              </td>
                              <td>
                                <p class="text-xs font-weight-bold mb-0"><?= $rpd->description ?></p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button class="btn btn-link text-primary text-xs mb-0 edit-rundown" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $rpd['id']; ?>">Edit</button>
                                    <form action="/dashboard/delete" method="post">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?= $rpd['id']; ?>" />
                                        <button type="submit" class="btn btn-link text-danger text-xs mb-0" onclick="confirm('Are you sure to delete agenda?')">Delete</button>
                                    </form>
                                </div>
                              </td>
                            </tr>
                            <?php endforeach ?>
                        <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
        </div>

         <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#" method="post">
                        <?= csrf_field(); ?>
                        <div class="modal-body">
                            <input type="hidden" name="id" id="id" value="" />
                            <input type="hidden" name="role" id="role" value="" />
                            <input type="hidden" name="day" id="day" value="" />
                            <input type="hidden" name="type" id="type" value="" />
                            <div class="mb-3">
                                <input type="text" class="form-control form-control-lg <?//= ($validation->hasError('time')) ? 'is-invalid' : ''; ?>" name="time" id="time" placeholder="Time" aria-label="Time" value="" autofocus />
                                <div class="invalid-feedback"><?//= $validation->getError('time'); ?></div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control form-control-lg <?//= ($validation->hasError('agenda')) ? 'is-invalid' : ''; ?>" name="agenda" id="agenda" placeholder="Agenda" aria-label="Agenda" value="" />
                                <div class="invalid-feedback"><?//= $validation->getError('agenda'); ?></div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control form-control-lg <?//= ($validation->hasError('location')) ? 'is-invalid' : ''; ?>" name="location" id="location" placeholder="Location" aria-label="Location" value="" />
                                <div class="invalid-feedback"><?//= $validation->getError('location'); ?></div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control form-control-lg <?//= ($validation->hasError('description')) ? 'is-invalid' : ''; ?>" name="description" id="description" placeholder="Description" aria-label="Description" value="" />
                                <div class="invalid-feedback"><?//= $validation->getError('description'); ?></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer class="footer pt-3">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  <a href="" class="font-weight-bold" target="_blank">Authentic Tech</a>.
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </main>

    <script>
      $(function() {
      
        console.log(APP_URL);
          $('.add-rundown').on('click', function() {
              console.log('add');
              $('.modal-title').html('Add Rundown');
              $('.modal-footer button[type=submit]').html('Insert');
              $('.modal-content form').attr('action', APP_URL + '/dashboard/store')

              const role = $(this).data('role');
              console.log(role);
              const day = $(this).data('day');
              console.log(day);
              const type = $(this).data('type');
              console.log(type);

              $('#id').val('');
              $('#role').val(role);
              $('#day').val(day);
              $('#type').val(type);
              $('#time').val('');
              $('#agenda').val('');
              $('#location').val('');
              $('#description').val('');
          })

          $('.edit-rundown').on('click', function() {
              console.log('edit');
              $('.modal-title').html('Edit Rundown');
              $('.modal-footer button[type=submit]').html('Update');
              $('.modal-content form').attr('action', '/dashboard/update')

              const id = $(this).data('id');
              console.log(id);

              $.ajax({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  url: "/dashboard/get_rundown",
                  method: "POST",
                  data: {
                      id: id
                  },
                  dataType: "json",
                  success: function(data) {
                      $('#id').val(data.id);
                      $('#role').val(data.role);
                      $('#day').val(data.day);
                      $('#type').val(data.type);
                      $('#time').val(data.time);
                      $('#agenda').val(data.agenda);
                      $('#location').val(data.location);
                      $('#description').val(data.description);
                  }
              });
          });
      });
    </script>
    @endsection    

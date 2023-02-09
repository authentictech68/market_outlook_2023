@extends('template.main');

    @section('container')
    <main class="main-content position-relative border-radius-lg">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Admin</a></li>
              <li class="breadcrumb-item text-sm text-white active" aria-current="page">Documentation</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">Documentation</h6>
          </nav>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group">
                <!-- <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Type here..." /> -->
              </div>
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
                    <h6 class="mb-0">Upload Event Documentation</h6>
                  </div>
                  <!-- <div class="col-6 text-end">
                    <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Card</a>
                  </div> -->
                </div>
              </div>
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-md-9 mb-md-0 mb-4">
                    <div>
                      <label for="formFileLg" class="form-label">Large file input example</label>
                      <input class="form-control form-control-lg" id="formFileLg" type="file" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 mt-4">
            <div class="card h-100">
              <div class="card-header pb-0 p-3">
                <div class="row">
                  <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0">Photos</h6>
                  </div>
                  <!-- <div class="col-6 text-end">
                    <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                  </div> -->
                </div>
              </div>
              <div class="card-body p-3 pb-0">
                <div class="row">
                  <div class="col-md-4 pb-3">
                    <img src="../assets/img/photo-placement.png" class="rounded" alt="..." width="100%" />
                  </div>
                  <div class="col-md-4 pb-3">
                    <img src="../assets/img/photo-placement.png" class="rounded" alt="..." width="100%" />
                  </div>
                  <div class="col-md-4 pb-3">
                    <img src="../assets/img/photo-placement.png" class="rounded" alt="..." width="100%" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 pb-3">
                    <img src="../assets/img/photo-placement.png" class="rounded" alt="..." width="100%" />
                  </div>
                  <div class="col-md-4 pb-3">
                    <img src="../assets/img/photo-placement.png" class="rounded" alt="..." width="100%" />
                  </div>
                  <div class="col-md-4 pb-3">
                    <img src="../assets/img/photo-placement.png" class="rounded" alt="..." width="100%" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 pb-3">
                    <img src="../assets/img/photo-placement.png" class="rounded" alt="..." width="100%" />
                  </div>
                  <div class="col-md-4 pb-3">
                    <img src="../assets/img/photo-placement.png" class="rounded" alt="..." width="100%" />
                  </div>
                  <div class="col-md-4 pb-3">
                    <img src="../assets/img/photo-placement.png" class="rounded" alt="..." width="100%" />
                  </div>
                </div>
              </div>
              <div class="card-footer align-items-right">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">&#60;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&#62;</a></li>
                  </ul>
                </nav>
              </div>
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
    @endsection

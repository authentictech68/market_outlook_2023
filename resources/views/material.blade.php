@extends('template.main');

    @section('container')
    <main class="main-content position-relative border-radius-lg">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Admin</a></li>
              <li class="breadcrumb-item text-sm text-white active" aria-current="page">Material</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">Material</h6>
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
          <div class="col-lg-12">
            <div class="card h-100">
              <div class="card-header pb-0 p-3">
                <div class="row">
                  <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0">Files</h6>
                  </div>
                  <div class="col-6 text-end">
                    <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New File</a>
                  </div>
                </div>
              </div>
              <div class="card-body p-3 pb-0">
                <ul class="list-group">
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>
                      <span class="text-xs">#MS-415646</span>
                    </div>
                    <div class="d-flex align-items-center text-sm">
                      <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                      <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                      <span class="text-xs">#RV-126749</span>
                    </div>
                    <div class="d-flex align-items-center text-sm">
                      <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                      <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                      <span class="text-xs">#FB-212562</span>
                    </div>
                    <div class="d-flex align-items-center text-sm">
                      <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                      <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                      <span class="text-xs">#QW-103578</span>
                    </div>
                    <div class="d-flex align-items-center text-sm">
                      <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                    <div class="d-flex flex-column">
                      <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                      <span class="text-xs">#AR-803481</span>
                    </div>
                    <div class="d-flex align-items-center text-sm">
                      <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                    </div>
                  </li>
                </ul>
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

@include('admin/common/header')
    <div class="content-wrapper">
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body pt-6 pb-6">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Business</p>
                      <h2 class="font-weight-bolder mb-0">
                        53,000
                      </h2>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient2 shadow text-center border-radius-md">
                      <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body pt-6 pb-6">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Categories</p>
                      <h2 class="font-weight-bolder mb-0">24,524</h2>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient3 shadow text-center border-radius-md">
                      <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body pt-6 pb-6">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Users</p>
                      <h2 class="font-weight-bolder mb-0"> 25,240 </h2>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient4 shadow text-center border-radius-md">
                      <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6">
            <div class="card">
              <div class="card-body pt-6 pb-6">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-capitalize font-weight-bold">Active Users</p>
                      <h2 class="font-weight-bolder mb-0"> 2,510 </h2>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                      <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
       
          <div class="col-lg-12">
            <div class="card z-index-2">
              <div class="card-header pb-0">
                <h6>Overview</h6>
                <p class="text-sm">
                  <i class="fa fa-arrow-up text-success"></i>
                  <span class="font-weight-bold">4% more</span> in 2021
                </p>
              </div>
              <div class="card-body p-3">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="500"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('admin/common/footer')
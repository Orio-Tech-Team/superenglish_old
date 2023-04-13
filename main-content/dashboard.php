
  <?php include('header.php'); ?>

  <body class="bg-white">
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
      
         <?php include('aside.php');?>
        
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->



          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
          <div class="row">
            <div class="col-lg-6">
              <div class=" mb-4 p-5 right-aside">
                <h3 class="card-header mt-2">Account Settings</h3>
               
                <hr class="my-0" />
                <h5 class="card-header">Profile</h5>
                <!-- Account -->
                <div class="card-body pb-0">
                  <div class="row">
                  
                    <div class="">
                      <!-- <h6 class="text-muted">Basic</h6> -->
                      <div class="nav-align-top mb-4">
                        <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                            <button
                              type="button"
                              class="nav-link active"
                              role="tab"
                              data-bs-toggle="tab"
                              data-bs-target="#navs-top-home"
                              aria-controls="navs-top-home"
                              aria-selected="true"
                            >
                            Credit Card
                            </button>
                          </li>
                          <li class="nav-item">
                            <button
                              type="button"
                              class="nav-link"
                              role="tab"
                              data-bs-toggle="tab"
                              data-bs-target="#navs-top-profile"
                              aria-controls="navs-top-profile"
                              aria-selected="false"
                            >
                            Pay Pal
                            </button>
                          </li>
                         
                        </ul>
                      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <form id="formAccountSettings" method="POST" onsubmit="return false">
                    <div class="row flex-column">
                      <div class="mb-2 ">
                        <label for="firstName" class="form-label">Card Number</label>
                        <input
                          class="form-control"
                          type="text"
                          id="firstName"
                          name="firstName"
                         
                          autofocus
                        />
                      </div>
                      
                      <div class="mb-3">
                        <div class="mb-2">
                          <label for="exampleFormControlSelect1" class="form-label">Country/Region</label>
                          <select class="form-select" id="exampleFormControlSelect1" >
                            <option selected></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                      </div>
                    
                     
                    
                      <div class="mb-3">
                       <div class="row">
                          <div class="col-md-4">
                            <label for="state" class="form-label">Expiration Date</label>
                            <input class="form-control" type="text" id="state" name="state" placeholder="MM/YY" />
                          </div>
                          <div class="col-md-4">
                            <label for="state" class="form-label">Security Code</label>
                            <input class="form-control" type="text" id="state" name="state" />
                          </div>
                          <div class="col-md-4">
                            <label for="state" class="form-label">Postal Code</label>
                            <input class="form-control" type="text" id="state" name="state" placeholder=" Optional"/>
                          </div>
                       </div>
                      </div>
                    
                          <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-lg" type="button">Checkout</button>
                          </div>
                       
                    </div>
                   
                  </form>
                </div>
                <!-- /Account -->
              </div>
            
            </div>
          </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
   <?php include('footer.php');?>
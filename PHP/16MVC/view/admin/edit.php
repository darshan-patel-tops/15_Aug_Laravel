  <div class="content-wrapper">

  <div class="container-xxl flex-grow-1 container-p-y">

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">

                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Edit User</h5>
                      <!-- <small class="text-muted float-end">Edit User</small> -->
                    </div>

                    <div class="card-body">

                      <form action="" enctype="multipart/form-data" method="post">

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" value="<?php echo $data->username ?>" id="basic-default-name" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" value="<?php echo $data->email ?>" id="basic-default-name" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Password</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="password" value="<?php echo $data->password ?>" id="basic-default-name" />
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Role</label>
                          <div class="col-sm-10">
                            <select class="dropdown form-control" name="role_as" id="">

                              <option value="1">Admin</option>
                              <option value="0">User</option>
                            </select>
                        
                          <!-- <input type="text" class="form-control" name="role_as" value="<?php echo $data->role_as ?>" id="basic-default-name" /> -->
                          </div>
                        </div>


        <button name="update" value="<?php echo $data->user_id; ?>" class="btn btn-lg btn-primary">Update</button>

                      </form>
                    </div>
                  </div>
                </div>
                </div>
                </div>
                </div>
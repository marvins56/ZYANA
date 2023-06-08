<!-- Text alignment -->
<?php include 'auth_header.php' ?>
<?php include 'config.php' ?>
<?php include 'errors.php'; ?>
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="alert alert-warning alert-dismissible " role="alert">
              <p class="card-text">
<h3>WARNING</h3>
During upload of images make sure to follow the following 
<ul>
  
  <li> Product category MUST be the same as the categories in your store</li>
</ul>
</p>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

              <div class="row mb-5">
                <div class="col-md-6 col-lg-4">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h5 class="card-title">PAGE BANNER EDITS</h5>
                      <p class="card-text">website front Banner edits for text and edits are made here</p>
                      <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#backDropModal"
                        >
                          UPDATE CONTENT
                        </button>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card text-center mb-3">
                    <div class="card-body">
                      <h5 class="card-title">CATEGORY MANAGER</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <div class="mt-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTop">
                          ADD CATEGORY
                        </button>
</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card text-center mb-3">
                    <div class="card-body">
                      <h5 class="card-title">PRODUCTS MANAGER</h5>
                      <p class="card-text">                        
                     Uploading of products is done here 
                    </p>
                    
                      <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalScrollable"
                        >
                         UPLOAD PRODUCT
                        </button>

                    </div>
                  </div>
                </div>
         
              </div>
              </div>
              </div>
     <!-- Modal -->
     <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modalScrollableTitle">PRODUCT UPLOAD</h5>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">
                            <form  class="mb-3"  method="POST"  enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="username" class="form-label">PRODUCT NAME</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="productname"  
                    placeholder="Enter product name"
                    autofocus
                  />
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">PRODUCT CATEGORY</label>
                  <input
                    type="number"
                    class="form-control"
                    id="username"
                    name="category"  
                    placeholder="Enter product category"
                    autofocus
                  />
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">PRICE</label>
                  <input
                    type="number"
                    class="form-control"
                    id="username"
                    name="price" value="<?php echo $price; ?>"
                    
                    autofocus
                  />
                </div>
                  <div class="mb-3">
                          <label for="formFile" class="form-label">SHORT DESCRIPTION</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1"  name="description"  value="<?php echo $description5; ?> " rows="3"></textarea>
                        </div>
         
                <div class="mb-3">
                        <label for="formFile" class="form-label">product Image</label>
                        <input class="form-control" name="file" type="file" id="formFile" />
                </div>
                <button class="btn btn-primary d-grid w-100"  type="submit"  name="products">UPLOAD</button>
              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

    <!-- Slide from Top Modal -->
    <div class="col-lg-4 col-md-6">
                        <div class="modal modal-top fade" id="modalTop" tabindex="-1">
                          <div class="modal-dialog">
                            <form class="modal-content" method="POST" enctype="multipart/form-data">
              <?php include('errors.php');?>
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalTopTitle"> PRODUCT CATEGORY</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label"> PRODUCT CATEGORY</label>
                                    <input
                                      type="text"
                                      id="nameSlideTop"
                                      class="form-control"
                                      placeholder="Enter Category"
                                      name="cats"
                                    />
                                  </div>
                                  <div class=" col mb-3">
                        <label for="formFile" class="form-label"> Image</label>
                        <input class="form-control" name="file" type="file" id="formFile" />
                      </div>
                                </div>
                               
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button  type="submit" name="categorysubmit" class="btn btn-primary">Save</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>




     <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                          <div class="modal-dialog">
                            <form class="modal-content" enctype="multipart/form-data" method="POST">
                              <div class="modal-header">
                                <h5 class="modal-title" id="backDropModalTitle">BANNER SETTINGS</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBackdrop" class="form-label">BANNERR HEADER</label>
                                    <input
                                      type="text"
                                     
                                      class="form-control"
                                      placeholder="Enter Name"
                                      name="header"
                                    />
                                  </div>
                                  <div class ="col mb-3">

                                  </div>
                                  <div class="mb-3">
                        <label for="formFile" class="form-label">banner description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"  name="description" rows="3"></textarea>
                      </div>
                                </div>
                                <div class="mb-3">
                        <label for="formFile" class="form-label"> banner image</label>
                        <input class="form-control" name="file" type="file" id="formFile" />
                      </div>
                      <div class="mb-3">
                      <button type="submit"  name="banner"class="btn btn-primary">UPLOAD</button>
 
                      </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary">Save</button>
                              </div>
                            </form>
                          </div>
                        </div>

                           
                        </div>
                        </div>
                        </div>

              <?php include 'auth_footer.php';?>
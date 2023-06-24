<?php include('fun.php');
headers();?>
                                      <!-- table container -->
                                      <div class="container">
                                          <div class="table-responsive p-3">
                                              <button class="btn dpanel-btn float-end mb-2 ">insert record</button>
                                              <table class="table  table-striped
                                              table-hover	
                                              
                                              
                                              align-middle">
                                                  <thead class="table-dark">
                                                      <caption >
                                                        
                                                  </caption>
                                                      <tr>
                                                          <th>ID</th>
                                                          <th>Name</th>
                                                          <th>Email</th>
                                                          <th>address</th>
                                                          <th>action</th>
                                                      </tr>
                                                      </thead>
                                                      <tbody class="table-group-divider">
                                                          <tr class="" >
                                                              <td scope="row">1</td>
                                                              <td>ali khan</td>
                                                              <td>al@gmail.com</td>
                                                              <td>karachi</td>
                                                              <td><button class="btn btn-danger">delete</button> <button class="btn dpanel-btn">edit</button></td>
                                                          </tr>
                                                          <tr class="">
                                                              <td scope="row">2</td>
                                                              <td>Item</td>
                                                              <td>Item</td>
                                                              <td>Item</td>
                                                              <td><button class="btn btn-danger">delete</button> <button class="btn dpanel-btn">edit</button></td>
                                                          </tr>
                                                      </tbody>
                                                      <tfoot > <span class="text-capitalize mb-3">
                                                          user management 
                                                      </span> 
                                                                                              
                                                      </tfoot>
                                              </table>
                                              <nav aria-label="Page navigation " class="">
                                                <ul class="pagination    ms-auto ">
                                                  <li class="page-item disabled">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                      <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                  </li>
                                                  <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                  <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                      <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                  </li>
                                                </ul>
                                              </nav>
                                          </div>
                                          <form action="" class="table-form" method="post">
                                              <div class="row">
                                                  <div class=" dpanel-subtitle mb-3 text-center"> insert record</div>
                                                  <div class="col-6 mb-3 d-flex-center">
                                                      <label for="" class="me-2">Name</label>
                                                      <input type="text" placeholder="enter your name" class="form-control text-capitalize">
                                                  </div>
                                                  <div class="col-6 mb-3 d-flex-center">
                                                      <label for="" class="me-2">email</label>
                                                      <input type="text" placeholder="enter your email" class="form-control text-capitalize">
                                                  </div>
                                                  <div class="col-6 mb-3 d-flex-center">
                                                      <label for="" class="me-2">address</label>
                                                      <input type="text" placeholder="enter your address" class="form-control text-capitalize">
                                                  </div>
                                                  <div class="col-6 mb-3 d-flex-center">
                                                      <label for="" class="me-2">city</label>
                                                            <select class="form-select form-select-md" name="" id="">
                                                                  <option selected>Select one</option>
                                                                  <option value="">New Delhi</option>
                                                                  <option value="">Istanbul</option>
                                                                  <option value="">Jakarta</option>
                                                              </select>
                                                          
                                                  </div>
                                                  <div class="col-6 mb-3 d-flex-center">
                                                      <label for="" class="me-2">Name</label>
                                                      <input type="text" placeholder="enter your name" class="form-control text-capitalize">
                                                  </div>
                                                  <div class="col-6 mb-3 d-flex-center">
                                                      <label for="" class="me-2">Name</label>
                                                      <input type="text" placeholder="enter your name" class="form-control text-capitalize">
                                                  </div>
                                              </div>
                                              <button class="btn dpanel-btn w-100 "> insert </button>
                                          </form>
                                      </div>
  <?php footers();
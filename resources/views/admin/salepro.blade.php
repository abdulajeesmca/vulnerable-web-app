@include('admin.head')
   
        <div id="page-wrapper">
            <div id="page-inner">
               

<?php //echo $product ?>
                <hr />
                <div class="row">

                    <div class="col-md-12">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> Name</th>
                                        <th>Email Address</th>
                                        <th>Contact Number</th>
                                        <th>Address</th>
                                        <th>Product id</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <?php 


                                  foreach($sale as $pro)

                                {
                                    
                            ?>
                                        <tr>
                                        <td><?php echo $pro->id ?></td>
                                        <td><span class="label label-info"><?php echo $pro->name ?></span></td>
                                        <td><?php echo $pro->email ?></td>
                                        <td><?php echo $pro->mob ?></td>
                                        <td><?php echo $pro->add ?></td>
                                        <td><?php echo $pro->pid ?></td>

                                    </tr>

                            <?php

                                }?>
                                    
                                   
                                  
                                   
                                   
                                </tbody>
                            </table>
                        </div>




                    </div>
                    
                </div>
                <!--/.Row-->
                <hr />
              
                <!--/.ROW-->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    @include('admin.footer')

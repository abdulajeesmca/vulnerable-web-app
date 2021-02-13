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
                                        <th>Product  Name</th>
                                        <th>Product  Price</th>
                                        <th>Product  Description</th>
                                        <th>Product Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 


                                  foreach($product as $pro)

                                {
                                    
                            ?>
                                        <tr>
                                        <td><?php echo $pro->id ?></td>
                                        <td><span class="label label-info"><?php echo $pro->pname ?></span></td>
                                        <td><?php echo $pro->price ?></td>
                                        <td><?php echo $pro->pdes ?></td>
                                        <td><img src="{{ URL::to('/images/upload/'.$pro->images)}}"width="30%"></td>
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

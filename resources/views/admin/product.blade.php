@include('admin.head')

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                 
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">

               @if(session('check'))
            <div class="alert alert-success">
            {{ session('check') }}
            </div> 
            @endif
                        <div class="panel-heading">
                          Add your products
                        </div>
                        <div class="panel-body">
                            <form role="form" action="/store" method="POST" enctype="multipart/form-data">
                         {{csrf_field()}}
                                        <div class="form-group">
                                            <label>Product  Name</label>
                                            <input class="form-control" type="text"name="pname" required>
                                        </div>
                                 <div class="form-group">
                                            <label>Product Price</label>
                                            <input class="form-control" type="text" name="pprice" required>
                                        </div>
                                            <div class="form-group">
                                            <label>Product  Description</label>
                                            <textarea class="form-control" rows="3" name="pdec" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Images</label>
                                            <input class="form-control" type="file" name="image" required>
                                        </div>
                                 
                                        <button type="submit" class="btn btn-info">Add </button>

                                    </form>
                            </div>
                        </div>
                            </div>

        </div>
             <!--/.ROW-->
            

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->









@include('admin.footer')

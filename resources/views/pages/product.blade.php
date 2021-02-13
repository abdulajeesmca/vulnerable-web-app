
@include('includes.header')

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4><?php echo $product->pname; ?></h4>
              <h2>Product Details</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-12">
            <div>
              <img src="{{ URL::to('/images/upload/'.$product->images)}}" alt="" class="img-fluid wc-image">
            </div>
            <br>
           
          </div>

          <div class="col-md-8 col-xs-12">
            <form action="#" method="post" class="form">
              <h2><?php echo $product->pname; ?></h2>

              <br>

              <p class="lead">
               <strong class="text-primary">Rs <?php echo $product->price; ?></strong>
              </p>

              <br>

              <p class="lead">
              <?php echo $product->pdes; ?>
              </p>

              <br> 

              <div class="row">
               
                <div class="col-sm-8">

                  <div class="row">
                    

                    <div class="col-sm-6">
                      <a href="/buy/{{\Crypt::encrypt($product->id)}}" class="btn btn-primary btn-block">Buy Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
            </div>
          </div>
        </div>
      </div>
    </footer>





    <!-- Additional Scripts -->
    <script src="/js/custom.js"></script>
    <script src="/js/owl.js"></script>
  </body>

</html>

@include('includes.header')
<!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
    
    </div>
    <!-- Banner Ends Here -->
<div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
          @if(session('status'))
            <div class="alert alert-success">
            {{ session('status') }}
            </div> 
            @endif
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="/buy" method="post">
              {{csrf_field()}}
                <div class="row">
                <input name="pid" type="hidden" class="form-control" id="pid" value="<?php echo $product->id ?>">

                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="contact" type="number" class="form-control" id="number" placeholder="Enter Contact Number" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="add" rows="6" class="form-control" id="message" placeholder="Your Address" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Submit</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <img src="{{ URL::to('/images/upload/'.$product->images)}}" class="img-fluid" alt="">

            <h5 class="text-center" style="margin-top: 15px;"><?php echo $product->pname ?></h5>
            <h6 class="text-center" style="margin-top: 15px;"><?php echo $product->price ?>Rs</h6>

          </div>
        </div>
      </div>
    </div>
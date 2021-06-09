
    <div class="container login-wrap">

        <div class="row row-login">     

            <h2 class="text-center">SCHOOL MANAGEMENT</h2>

            <div class="col-lg-7 col-login">

                <form method="POST" action=" <?php echo base_url()?>LoginController/verify ">
  
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <span class="text-danger"> <?php echo form_error('email');?> </span>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        <span class="text-danger"> <?php echo form_error('password');?> </span>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                
                </form>

            </div>

        </div>

    </div>
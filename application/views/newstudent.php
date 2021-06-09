<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">COLLEGE MANAGEMENT SYSTEM</a>
        </div>
    </nav>

    <div class="container mt-2">
    
        <h2> Add New Student </h2>
    
       
    
        <div class="mt-2 mb-2">
            
            <a href="" class="btn btn-primary"> Back To List </a>
            
    
    <!-- Modal -->
          
                           
                        
        
                        
              
        </div>

       

<div class="row">
    <div class="col-lg-8">
<form method="POST" action=" <?php echo base_url()?>DashboardController/addStudent">
                                <div class="mb-3">
                                    <label for="lastname" class="form-label">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="">
                                </div>
                                <?php echo form_error('last_name');?> 
                                <div class="mb-3">
                                    <label for="lastname" class="form-label">First Name</label>
                                    <input type="text" name="first_name" class="form-control" id="">
                                </div>
                                <div class="mb-3">
                                    <label for="lastname" class="form-label">Middle Name</label>
                                    <input type="text" name="middle_name" class="form-control" id="">
                                </div>
                                <div class="mb-3">
                                    <label for="lastname" class="form-label">Course</label>
                                    <input type="text" name="course" class="form-control" id="">
                                </div>
                                <div class="mb-3">
                                    <label for="lastname" class="form-label">College</label>
                                    <input type="text" name="college" class="form-control" id="">
                                </div>
                            
                                
                         
                            <button type="submit" class="btn btn-primary">Save changes</button>
                       
                                
                                
                            </form>
                            </div>

                            </div>
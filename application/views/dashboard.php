    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">COLLEGE MANAGEMENT SYSTEM</a>
        </div>
    </nav>

    <div class="container mt-4">
    
        <h2> DASHBOARD </h2>
    
        <div>
            <span> Welcome Admin </span>
        </div>
    
        <div class="mt-2">
            
            <a href=" <?php echo base_url()?>DashboardController/showAdd " class="btn btn-primary"> Add Students </a>
            <a href="" class="btn btn-primary"> Add Course </a>
            <a href="" class="btn btn-primary"> Add College </a>
    
    <!-- Modal -->
          
                           
                        
        
                        
              
        </div>

    <table class="table mt-2">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Course</th>
      <th scope="col">College</th>
    </tr>
  </thead>
  <tbody>
   
  </tbody>
</table>
</div>
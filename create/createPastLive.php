<!doctype html>
<html lang="en">
  <head>
    <title>Create Past Live | Stacked State Official Site</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="card mx-auto w-50 border border-0">
           <div class="card-header bg-white text-dark border-0 text-center">
           <div class="container text-left my-2">
            <a role="button" class="btn btn-dark" href="../dashboard.php">Dashboard</a>
           </div>

           <h2>Create Past Live</h2>
           </div>  
           <div class="card-body">
             <form action="../action/pastLiveAction.php" enctype="multipart/form-data" method="post">
               
                <div class="form-row">
                   <div class="form-group col-md-12">
                     <input type="date" name="past_live_date" class="form-control p-4" placeholder="Date">
                   </div>
                    <div class="form-group col-md-12">
                   <select class="form-control p-4" name="past_live_ow" id="">
                   <option value="" disabled selected>Select</option>
                     <option value="sun.">sun</option>
                     <option value="mon.">mon</option>
                     <option value="tue.">tue</option>
                     <option value="wed.">wed</option>
                     <option value="thu.">thu</option>
                     <option value="fri.">fri</option>
                     <option value="sat.">sat</option>
                   </select>
                   </div>

                </div>

                <div class="form-row">
                   <div class="form-group col-md-12">
                   <input type="text" name="past_live_place" class="form-control p-4" placeholder="Place">
                   </div>

                </div>
                <div class="form-row">
                   <div class="form-group col-md-12">
                   <input type="text" name="past_live_title" class="form-control p-4" placeholder="Title">
                   </div>

                </div>
               
                <div class="form-row">
                   <div class="form-group col-md-12">
                   <input type="text" name="past_live_cw" class="form-control p-4" placeholder="coupling">
                   </div>

                </div>

              
                
                <div class="form-row">
                   <div class="form-group col-md-12">
                  <button name="posted" type="submit" class="btn btn-danger form-control">Create</button>   
                  
                  </div>

                </div>


             </form>
           </div>    

        </div>


      </div>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
require_once '../class/Live.php';
$live_id = $_GET['live_id'];
$Live = new Live();
$specificlive = $Live->getOneLive($live_id);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>UpdateLive | Stacked State Official Site</title>
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
            <a role="button" class="btn btn-dark" href="dashboard.php">Dashboard</a>
           </div>

           <h2>Edit Live</h2>
           </div>  
           <div class="card-body">
             <form action="../action/liveAction.php?live_id=<?php echo $specificlive['live_id']?>" enctype="multipart/form-data" method="post">
               
                <div class="form-row">
                   <div class="form-group col-md-12">
                     <input type="date" name="new_live_date" class="form-control p-4" placeholder="<?php echo $specificlive['live_date']?>">
                     <input type="hidden" name="old_live_date" class="form-control p-4" value="<?php echo $specificlive['live_date']?>">
                    
                   </div>
                    <div class="form-group col-md-12">
                   <select class="form-control p-4" name="new_live_ow" id="">
                   <option value="" disabled selected><?php echo $specificlive['live_ow']?></option>
                     <option value="sun.">sun</option>
                     <option value="mon.">mon</option>
                     <option value="tue.">tue</option>
                     <option value="wed.">wed</option>
                     <option value="thu.">thu</option>
                     <option value="fri.">fri</option>
                     <option value="sat.">sat</option>
                   </select>
                   <input type="hidden" name="old_live_ow" class="form-control p-4" value="<?php echo  $specificlive['live_ow']?>">
                   </div>

                </div>

                <div class="form-row"> 
                   <div class="form-group col-md-12">
                   <input type="text" name="new_live_place" class="form-control p-4" placeholder="<?php echo $specificlive['live_place']?>">
                   <input type="hidden" name="old_live_place" class="form-control p-4" value="<?php echo $specificlive['live_place']?>">
                   </div>

                </div>
                <div class="form-row">
                   <div class="form-group col-md-12">
                   <input type="text" name="new_live_title" class="form-control p-4" placeholder="<?php echo $specificlive['live_title']?>">
                   <input type="hidden" name="old_live_title" class="form-control p-4" value="<?php echo $specificlive['live_title']?>">
                   </div>

                </div>
                <div class="form-row">
                   <div class="form-group col-md-12">
                   <input type="text" name="new_live_details" class="form-control p-4" placeholder="<?php echo $specificlive['live_details']?>">
                   <input type="hidden" name="old_live_details" class="form-control p-4" value="<?php echo $specificlive['live_details']?>">
                   </div>

                </div>
                <div class="form-row">
                   <div class="form-group col-md-12">
                   <input type="text" name="new_live_cw" class="form-control p-4" placeholder="<?php echo $specificlive['live_cw']?>">
                   <input type="hidden" name="old_live_cw" class="form-control p-4" value="<?php echo $specificlive['live_cw']?>">
                   </div>

                </div>

                <div class="form-row">
                   <div class="form-group col-md-12">
                   <input type='file' name="new_live_picture" class="form-control">
                   </div>

                </div>
                <div class="form-row">
                   <div class="form-group col-md-12">
                   <input type="text" name="new_live_locate" class="form-control p-4" placeholder='<?php echo $specificlive['live_locate']?>'>
                   <input type="hidden" name="old_live_locate" class="form-control p-4" value='<?php echo $specificlive['live_locate']?>'>
                   </div>

                </div>
                
                <div class="form-row">
                   <div class="form-group col-md-12">
                  <button name="edit" type="submit" class="btn btn-danger form-control">Edit</button>   
                  
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
  <!DOCTYPE html>
  <html>
  <head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>LOCUS</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  </style>
  </head>

  <body>
  <div class="container">
  <script>alert('<?php $status; ?>');</script>
  <?php if($status!=""){ ?>
  <div ><h4><?php $status?></h4></div> <?php } ?>
  <form method="post" action="<?=base_url()?>index.php/locus/insert_values">

  <input type="text" class="form-control" name="name" id="name" required /><br>

  descriptn:<textarea name="description" required></textarea><br><br><br>

  address:<textarea name="address" required></textarea><br><br>

  phone:<input type="text" class="form-control" name="phone" id="phone" required /><br>

  type:<select required class="form-control" id="type">
          <option value="0" selected>Select </option>
          <option value="1">Food</option>
           <option value="2">Stores</option>
          <option value="3">Entertainment</option>
           <option value="4">Travel & Living</option>
            <option value="5">Health</option>
             <option value="6">Beauty & Fitness</option>
        </select><br><br>

   category:<select required class="form-control" id="category">
          <option value="0" selected>Select category </option>
          <option value="1">Cafes</option>
           <option value="2">Restaurants</option>
          <option value="3">Beverages</option>
           <option value="4">Desserts & Bakeries</option>
        </select>
  <br><br>
  thumbnail:<input type="text" class="form-control" name="phone" id="name" required />
  <br>
  <input type="submit" name="submit" value="submit"></input>
  </form>
  </div>
  <script>



  </script>
  </body>

  </html>
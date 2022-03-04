<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <title>Student ID Card Generator</title>
   </head>
   <body class="bg-danger">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-lg-6">
                  <div class="card mt-5">
                  <form action="./id-generate.php" method="POST" enctype="multipart/form-data">
                     <div class="card-header bg-info text-center">
                        <h1>Student Details</h1>
                     </div>
                     <div class="card-body">
                        <div class="input-group mb-3">
                           <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                           <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                           <span class="input-group-text" id="inputGroup-sizing-default">Phone</span>
                           <input type="number" name="phone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                           <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                           <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                           <span class="input-group-text" id="inputGroup-sizing-default">Course</span>
                           <input type="text" name="course" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                           <span class="input-group-text" id="inputGroup-sizing-default">Batch</span>
                           <input type="number" name="batch" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                           <input type="file" name="up_image" class="form-control" id="inputGroupFile02">
                           <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                     </div>

                     <div class="card-footer">
                        <div class="d-grid gap-2">
                           <button class="btn btn-primary" name="submit" type="submit">Generate</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>

         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>

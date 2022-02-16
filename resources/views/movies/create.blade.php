<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

          <title>Netflix-clone</title>
</head>
<body>
<div class="container mt-5">

    <form   action="{{ route('movies.store') }}" method="post" >
        
        <h3 class="mb-3 text-center"> Create movie </h3>
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">name</label>
            <input type="text" name="name" class="form-control" id="name" >  
              </div>
 
        {{-- <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">genre</label>
            <input type="text" name="genre" class="form-control" id="genre" >  
        </div> --}}
        <div class="mb-5">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <div class="form-group mb-5">
            <label class="form-label">Category :</label><br>
            <label><input type="checkbox" name="genre[]" value="1"> Action</label>
            <label><input type="checkbox" name="genre[]" value="2"> Comedy</label>
            <label><input type="checkbox" name="genre[]" value="3"> adventure</label>
            <label><input type="checkbox" name="genre[]" value="4"> horror</label>
            <label><input type="checkbox" name="genre[]" value="5"> drama</label>
        </div> 
        <input type="submit" value="Create">
    </form>

</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>
</html>

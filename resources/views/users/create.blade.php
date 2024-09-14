<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simple Laravel 11</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

<!-- margin & padding -->
 <div class="m-1 p-1 bg-primary">small margin & padding</div>
 <div class="m-5 p-5 bg-secondary">large margin padding</div>
 <div class="my-3 px-5 bg-warning">my-3 and py-5 margin padding</div>
 <div class="mt-3 mb-4 ps-5 pt-4 pb-1 bg-primary">m & p for each direction</div>







  <!-- basic button -->
   <h2>button</h2>

   <button>deafault button</button>
   <button class="btn btn-primary">primary button</button>
   <button class="btn btn-secondary">secondary button</button>

   <!-- anchor tags on button -->
    <p class="display-2">links as button</p>
    <a href="#" class="btn btn-info">info anchor tag</a>
    <a href="#" class="btn btn-success">success anchor tag</a>


    <!-- button sizes -->
     <h2>button sizes</h2>
     <button class="btn btn-lg btn-danger">large danger button</button>
     <button class="btn btn-sm btn-warning">small waring button</button>

     <!-- outline style -->
      <h2>button styles</h2>

      <button class="btn btn-outline-primary">outline primary button</button>
      <button class="btn btn-outline-secondary btn-lg">large outlined button secondary</button>

      <!-- button group -->
       <div class="btn-group">
        <a href="#" class="btn btn-primary">button 1</a>
        <a href="#" class="btn btn-warning">button 2</a>
        <a href="#" class="btn btn-success">button 3</a>
       </div>



<!-- Heading tags -->
  <h1>bootstrap 5 tutorial</h1>
  <h2>this is an h2</h2>
  <h3>this is an h3</h3>
  <h2 class="h3">this is class h3 in h2</h2>

  <!-- display heading -->
  <h1 class="display-1">display-1 heading</h1> 
  <h1 class="display-2">display-2 heading</h1>
  <h3 class="display-6">display-6 heading</h3>

  <!-- lead text & alignment -->
   <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
   <p class="lead text-center">Lorem ipsum dolor sit.</p>
   <p class="lead text-end">Lorem ipsum dolor sit.</p>
   <p class="lead text-start">Lorem ipsum dolor sit amet.</p>

  <!-- text decoration & font weight -->
   <p class="text-decoration-underline">Lorem ipsum dolor sit amet.</p>
   <p class="text-decoration-line-through">Lorem ipsum dolor sit amet.</p>
   <p class="fw-bold">Lorem ipsum dolor sit. fw-bold</p>
   <small>this is a small text</small>

   <!-- text-color -->
    <p class="text-primary">theme primary text-primary</p>
    <p class="text-secondary">theme text-secondary</p>
    <p class="text-info">theme text info colour</p>
    <p class="text-warning">theme text text-warning</p>
    <p class="text-success">theme text-success</p>
    <p class="text-danger">theme text-danger</p>
    <p class="text-muted">theme text-muted colour</p>


    <!-- bg colour -->
     <p class="text-white bg-primary">here theme text-white and bd-primary</p>
     <p class="text-white bg-secondary">white text on secondary bg</p>
     <p class="text-light bg-danger">light text on bg danger</p>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>
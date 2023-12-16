<!---Question4-->


<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $city = $_POST['city'];
        
        echo "My name is $name. I am $age years old. I live in $city.";
    }


?>

<div class="container mt-5">
  <form action="/phpday/q4.php" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="Age">Age</label>
      <input type="number" class="form-control" id="Age" name="age" placeholder="Enter your age">
    </div>
    <div class="form-group">
      <label for="City">City</label>
      <input type="text" class="form-control" id="City" name="city" placeholder="Enter the city">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

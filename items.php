<?php include 'include/header.php';?>
  <div class="items">
    <div class="container">
      <div class="col-md-6">
        <h1>Add items</h1>
        <div class="item-form">
          <form action="" method="post">
            <div class="group-add">
              <label for="">Description</label>
              <input type="text" name="" placeholder="Ex. Oishi Large" value="" required="" autofocus="">
            </div>
            <div class="group-add">
              <label for="">Price</label>
              <input type="text" name="" placeholder="Ex. 9.50" value="" required="">
            </div>
            <div class="group-add">
              <label for="">Quantity</label>
              <input type="number" name="" placeholder="Ex. 10" value="" required="">
            </div>
            <div class="group-add">
              <input type="submit" name="" class="btn btn-success" value="Add to list">
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-12">
        <hr>
      </div>
    </div>
    <div class="container">
      <div class="col-md-6">
        <h1>Search</h1>
        <div class="search-item">
          <form action="" method="post">
            <div class="group-add">
              <label for="">Enter item name</label>
              <input type="text" name="" placeholder="Ex. Oishi" value="" required="">
              <input type="submit" name="" class="btn btn-danger" value="Enter">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php include 'include/footer.php';?>

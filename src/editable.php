<?php
echo $_POST['action'];
echo $_POST['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form  class="row" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="hidden" name="id" value="1"/>
        <div class="form-group row">
            <div class="col">
                <h1>Ultimate Water Tecg</h1>t
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-info" name="action" value="edit">Edit</button>
                <button type="submit" class="btn btn-danger" name="action" value="delete">Delete</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul>
                    <li>Test item 1</li>
                    <li>Test item 2</li>
                    <li>Test item 3</li>
                    <li>Test item 4</li>
                    <li>Test item 5</li>
                    <li>Test item 6</li>
                    <li>Test item 12</li>
                </ul>
            </div>
            <div class="col">
                <div class="row">
                    <h3>P 42,213.12</h3>
                </div>
                <div class="row">
                    <p>Description</p>
                </div>
            </div>
        </div>

    </form>
    <form  class="row" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="hidden" name="id" value="1"/>
        <div class="form-group row">
            <label for="name1" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name1" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="price1" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="price1" placeholder="Price" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="desc1" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" id="desc1" placeholder="Description" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="items1" class="col-sm-2 col-form-label">Items</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" id="items1" rows="7" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="submit" class="btn btn-primary">Cancel</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
<?php namespace lib\app\widgets;

class FooterWidget
{
    public function build(): string {
        return <<<Footer

        Footer;
    }
}

/*
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
 */
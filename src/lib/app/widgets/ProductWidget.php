<?php namespace lib\app\widgets;

use lib\domain\models\Product;

class ProductWidget {
    public function __construct(
        private ?Product $product
    ) {}

    public function build(bool $isEdit, bool $isLoggedIn): string
    {
        return $isEdit ? $this->editMode() : $this->viewMode($isLoggedIn);
    }

    public function editMode(): string {
        $isCreate = false;
        if (is_null($this->product)) {
            $isCreate = true;
            $this->product = new Product(0, "", "", "", 1);
        }

        $controlButtons = !$isCreate ?
            <<<SaveBtns
                    <button type="submit" class="btn btn-primary" name="action" value="save">Save</button>
                    <button type="submit" class="btn btn-primary" name="action" value="cancel">Cancel</button>
            SaveBtns :
            <<<CreateBtns
                    <button type="submit" class="btn btn-primary" name="action" value="submit">Add</button>
            CreateBtns;


        $id = $this->product->id;
        return <<<Product
        <form  class="row  shadow p-3 mb-5 bg-body rounded" action="products.php" method="post">
            <input type="hidden" name="id" value="$id"/>
            <div class="form-group row">
                <label for="name$id" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name$id" placeholder="Name" name="name" required value="{$this->product->name}">
                </div>
            </div>
            <div class="form-group row">
                <label for="price$id" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" min="0" class="form-control" id="price$id" name="price" placeholder="Price" required value="{$this->product->price}">
                </div>
            </div>
            <div class="form-group row">
                <label for="desc$id" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="desc$id" name="description" placeholder="Description" required>{$this->product->description}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="items$id" class="col-sm-2 col-form-label">Items</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="items$id" name="items" rows="7" required>{$this->product->items}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    $controlButtons
                </div>
            </div>
        </form>
        Product;
    }

    public function viewMode(bool $isLoggedIn): string {
        $controlButtons = !$isLoggedIn ? "" : <<<ControlButtons
        <div class="col-auto">
            <button type="submit" class="btn btn-info" name="action" value="edit">Edit</button>
            <button type="submit" class="btn btn-danger" name="action" value="delete">Delete</button>
        </div>
        ControlButtons;
        $items = preg_split('/\r\n|\r|\n/', $this->product->items);
        $itemMapped = "";
        foreach ($items as $item) {
            $itemMapped = $itemMapped . "<li>$item</li>";
        }
        $price = number_format($this->product->price, 2, '.', ',');
        $id = $this->product->id;
        return <<<Product
            <form  class="row  shadow p-3 mb-5 bg-body rounded" action="products.php" method="post">
                <input type="hidden" name="id" value="$id"/>
                <div class="form-group row">
                    <div class="col">
                        <h1 style="text-align: left">{$this->product->name}</h1>
                    </div>
                    $controlButtons
                </div>
                <div class="row">
                    <div class="col">
                    Included Items:
                        <ul>
                            $itemMapped
                        </ul>
                    </div>
                    <div class="col">
                        <div class="row">
                            <h3>$price Php</h3>
                        </div>
                        <div class="row">
                            <p>{$this->product->description}</p>
                        </div>
                    </div>
                </div>
            </form>
        Product;

    }
}

/*

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
 */
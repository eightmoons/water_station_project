<?php

namespace lib\app\widgets;

use lib\domain\models\User;
use lib\domain\params\ReadUserParams;
use lib\WaterStation;

class NavBarWidget {

    private readonly ?User $user;
    public function __construct(
        private readonly ?int $id
    ){
        $readUserById = WaterStation::instance()->readUserById;
        $this->user = $id == null ? null : $readUserById(new ReadUserParams($this->id));
    }

    public function __invoke(int $page): string
    {
        $index_active = $page == 1 ? "active" : "";
        $products_active = $page == 2 ? "active" : "";
        $tutorials_active = $page == 3 ? "active" : "";
        $about_active = $page == 4 ? "active" : "";
        $contact_active = $page == 5 ? "active" : "";
        $profile = "";

        if ($this->user != null) {
            $username = $this->user->username;
            $profile = <<<Profile
            <div class="dropdown">
                <a href="nav-item nav-link">$username</a>
                <div class="dropdown-content">
                    <a href="logout.php">Logout</a>
                </div>
            </div>
            Profile;
        }
        return <<<NavBarBody
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <img class="logo" src="img/fgblogo.png"> FGB 888 Water Refilling Station </img>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link $index_active" >Home</a>
                    <a href="products.php" class="nav-item nav-link $products_active">Products</a>
                    <a href="tutorials.php" class="nav-item nav-link $tutorials_active">Tutorials</a>
                    <a href="aboutus.php" class="nav-item nav-link $about_active">About Us</a>
                    <a href="contacts.php" class="nav-item nav-link $contact_active">Contact</a>
                    $profile
                    <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Schedule Now!<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </nav>
        NavBarBody;

    }
}
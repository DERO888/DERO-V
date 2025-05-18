<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm align-middle">
        <div class="container px-3">
            <a class="navbar-brand" href="<?= site_url() ?>"><i class="bi bi-github"></i><?= BASE_NAME ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php if (session()->has('userid')) : ?>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                                        <a class="text-center nav-link bi-keys-circle text-white" href="<?= site_url('keys') ?>">Keys</a>
                                        </li>
            <li class="nav-item">
                                        <a class="text-center nav-link bi-generate-circle text-white" href="<?= site_url('keys/generate') ?>">Generate</a>
                                        </li>
            <li class="nav-item">
                                        <a class="text-center nav-link bi-home-circle text-white" href="<?= site_url('dashboard') ?>">Home</a>
            </li>
            </ul>
                                        <div class="float-right">
                                        <ul class="text-center navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="text-center nav-item dropdown">
                                        <a class="text-center nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="text-center bi bi-person-circle pe-2"></i><?= getName($user) ?> </a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="navbarDropdown">
            <li>
                                        <a class="text-center dropdown-item" href="https://t.me/Mex_6">
                                         <font size="3" >
                                        <i class="bi bi-code-slash"></i> DvE DOLLAR
                                         </font>
                                         </font>
            </a>
            </li>
            <li>
                                        <hr class="dropdown-divider">
            </li>
                                    <?php if ($user->level == 1) : ?>
                                        <li class="text-center text-dark dropdown-item">Admin</li>
            <li>
                                        <a class="dropdown-item" href="<?= site_url('Server') ?>">
                                        <i class="bi bi-controller"></i> Online System
            </a>
            </li>
            <li>

                                        <a class="dropdown-item" href="https://t.me/Mex_6">
                                        <i class="bi-controller"></i> Src Code By --> @M_147
            </a>
            </li>
            <li>
            <li>
            <li>
                                            <a class="dropdown-item" href="<?= site_url('admin/manage-users') ?>">
                                                <i class="bi bi-person-check"></i> Manage Users
            </a>
            </li>
            <li>
                                            <a class="dropdown-item" href="<?= site_url('admin/create-referral') ?>">
                                                <i class="bi bi-person-plus"></i> Create Referal
                                            </a>
            </li>
            <li>
                                            <hr class="dropdown-divider">
            </li>
                                    <?php endif; ?>
                                    <li>
                                        <a class="dropdown-item text-danger" href="<?= site_url('logout') ?>">
                                            <i class="bi bi-box-arrow-in-left"></i> Logout
            </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
            </div>
        <?php endif; ?>

        </div>
    </nav>
</header>
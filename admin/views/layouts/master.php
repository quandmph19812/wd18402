<!--begin::Header--><?= require_once PATH_VIEW_ADMIN . 'layouts/partials/header.php'?>

<!--begin::Sidebar Brand--><?= require_once PATH_VIEW_ADMIN . 'layouts/partials/siderbar.php'?>

<!--begin::App Main-->
<?= require_once PATH_VIEW_ADMIN . $view . '.php'?>

<!--begin::To the end--><?= require_once PATH_VIEW_ADMIN . 'layouts/partials/footer.php'?>
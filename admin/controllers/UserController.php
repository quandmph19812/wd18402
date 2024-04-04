<?php
function userListAll() {
  $title = 'Danh sách user';
  $view = 'users/index';
  $users = listAll('users');

  require_once PATH_VIEW_ADMIN . 'layouts/master.php';
//   require_once PATH_VIEW_ADMIN . 'users/show.php';
}
function userShowOne($id){
    
    $view = 'users/show';
    $user = showOne('users', 'id',$id);
    
    if(empty($user)) {
        e404();
    }
    // $title = 'Chi tiết user' . $user['name'];
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
function userCreate() {
    $title = 'Thêm mới user';
    $view = 'users/create';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
function userUpdate($id){
    $title = 'Danh sách user';
    $view = 'users/update';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
function userDelete($id){
    

}
<?php
namespace App\Controller\admin;
use Sifoni\Controller\Base;

abstract class AuthorController extends Base {
    protected $authed = null;   

    public function __construct() {
        parent::__construct();
        if ($authed = $this->app['session']->get('admin_authed', false)) {
            $this->authed = $authed;
        } else {
            $response = $this->redirect('admin_login');
            $response->send();
            return $this->app->terminate($this->request, $response);
        }
    }
}
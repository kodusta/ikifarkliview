<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_controller extends Admin_Core_Controller {
    public function ilkview() {
        $data['title'] = "Bu ayrı ayrı header footer çağırarak view gönderme";
        $this->load->view('header', $data);
        $this->load->view('view');
        $this->load->view('footer');
    }
    public function ilkview() {
        $data['title'] = "Buda sadece bir dosya içine çağırmak ve o dosya içinde değişken olarak view çağırma (örnek aşağıda)";
        $data['sayfaadi'] = "anasayfa";
        $this->load->view('view', $data);
    }
    //VİEW ÖRNEK//
    $this->load->view('header');
    $this->load->view($sayfaadi);
    $this->load->view('footer');
}
?>
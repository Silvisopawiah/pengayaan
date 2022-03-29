<?php
class Portofolio extends Controller
{
    public function index()
    {

        $data['profile'] = $this->model('PortofolioModel')->getProfile();
        $data['about'] = $this->model('PortofolioModel')->getAbout();
        $data['project'] = $this->model('PortofolioModel')->getProject();

        $this->view('portofolio/index', $data);
    }
    public function Pesan()
    {
        if ($this->model('PortofolioModel')->tampungPesan($_POST) > 0) {
            echo "
            <script>
            alert('Data berhasil dikirim')
            window.location.herf='http://localhost/Silvi/public/'
            </script>
            ";
        } else {
            echo "
            <script>
            alert ('gagal terkirim')
            window.location.herf='http://localhost/Silvi/public/'
            </script>
            ";
        }
    }
}
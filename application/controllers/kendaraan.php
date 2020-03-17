<?php 
    class kendaraan extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function index() {
        $this->load->model('m_kendaraan');
        $data['kendaraan'] = $this->m_kendaraan->tampil_data()->result();

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kendaraan', $data);
		$this->load->view('templates/footer');
        }

        public function tambah() {
        $this->load->model('m_kendaraan');
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kendaraan');
		$this->load->view('templates/footer');
        }

        public function tambah_kendaraan() {
            $this->load->model('m_kendaraan');
            $no_pol = $this->input->post('no_pol');
            $jenis = $this->input->post('jenis');
            $merek = $this->input->post('merek');
            $harga_sewa = $this->input->post('harga_sewa');

            $data = array(
                'no_pol'               => $no_pol,
                'jenis'                => $jenis,
                'merek'                => $merek,
                'harga_sewa'           => $harga_sewa,
            );

            $this->m_kendaraan->input_data($data, 'kendaraan');
            redirect('kendaraan');
        }

        public function hapus($jenis) {
            $this->load->model('m_kendaraan');
            $where = array('jenis' => $jenis);
            $this->m_kendaraan->hapus_data($where, 'kendaraan');
            redirect('kendaraan');
        }

        public function editkendaraan($jenis) {
            $this->load->model('m_kendaraan');
            $where = array ('jenis' => $jenis);
            $data['kendaraan'] = $this->m_kendaraan->edit_data($where, 'kendaraan')->result();

            $this->load->view('templates/header');
		    $this->load->view('templates/sidebar');
		    $this->load->view('editkendaraan', $data);
		    $this->load->view('templates/footer');
        }

        public function update($jenis) {
            $this->load->model('m_kendaraan');
            $no_pol = $this->input->post('no_pol');
            $jenis = $this->input->post('jenis');
            $merek = $this->input->post('merek');
            $harga_sewa = $this->input->post('harga_sewa');

            $data = array(
                'no_pol'               => $no_pol,
                'jenis'                => $jenis,
                'merek'                => $merek,
                'harga_sewa'           => $harga_sewa,
            );

            $where = array ('jenis' =>$jenis);
            $this->m_kendaraan->update_data($where,$data,'kendaraan');
            redirect('kendaraan');
        }

    }
?>
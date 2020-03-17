<?php 
    class penyewa extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function index() {
        $data['penyewa'] = $this->m_penyewa->tampil_data()->result();

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('penyewa', $data);
		$this->load->view('templates/footer');
        }

        public function tambah() {
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('penyewa');
		$this->load->view('templates/footer');
        }

        public function tambah_penyewa() {
            $id_penyewa = $this->input->post('id_penyewa');
            $nm_penyewa = $this->input->post('nm_penyewa');
            $jk = $this->input->post('jk');
            $alamat_penyewa = $this->input->post('alamat_penyewa');
            $no_hp = $this->input->post('no_hp');

            $data = array(
                'id_penyewa'        => $id_penyewa,
                'nm_penyewa'        => $nm_penyewa,
                'jk'                => $jk,
                'alamat_penyewa'    => $alamat_penyewa,
                'no_hp'             => $no_hp,
            );

            $this->m_penyewa->input_data($data, 'penyewa');
            redirect('penyewa');
        }

        public function hapus($id_penyewa) {
            $where = array('id_penyewa' => $id_penyewa);
            $this->m_penyewa->hapus_data($where, 'penyewa');
            redirect('penyewa');
        }

        public function editpenyewa($id_penyewa) {
            $where = array ('id_penyewa' => $id_penyewa);
            $data['penyewa'] = $this->m_penyewa->edit_data($where, 'penyewa')->result();

            $this->load->view('templates/header');
		    $this->load->view('templates/sidebar');
		    $this->load->view('editpenyewa', $data);
		    $this->load->view('templates/footer');
        }

        public function update() {
            $id_penyewa = $this->input->post('id_penyewa');
            $nm_penyewa = $this->input->post('nm_penyewa');
            $jk = $this->input->post('jk');
            $alamat_penyewa = $this->input->post('alamat_penyewa');
            $no_hp = $this->input->post('no_hp');

            $data = array(
                'id_penyewa'        => $id_penyewa,
                'nm_penyewa'        => $nm_penyewa,
                'jk'                => $jk,
                'alamat_penyewa'    => $alamat_penyewa,
                'no_hp'             => $no_hp,
            );

            $where = array ('id_penyewa' => $id_penyewa);

            $this->m_penyewa->update_data($where,$data,'penyewa');
            redirect('penyewa');
        }

        public function detailpenyewa($id_penyewa){
        $this->load->model('m_penyewa');
        $detailpenyewa = $this->m_penyewa->detail_data($id_penyewa);
        $data['detailpenyewa'] = $detailpenyewa;
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detailpenyewa', $data);
		$this->load->view('templates/footer');
        }
    }
?>
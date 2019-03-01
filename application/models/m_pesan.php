<?php 

class m_pesan extends CI_Model{
	public function getAllmenu(){
		$this->db->from('menu');
		$query = $this->db->get();

		return $query->result();
	}

		public function input(){
		$data = [
			"jumlah" => $this->input->post('jumlah',true)
		];

		$this->db->insert('pesanmakanan', $data);

		$query = mysqli_query($conn, $sql);
	}
}

 ?>
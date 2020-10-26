<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Dashboard extends CI_Model
{
	public function getlist_data()
	{
		$sql = "SELECT * FROM `laporan_produksi` LEFT JOIN `m_user` ON laporan_produksi.user_create = m_user.id";
		$query = $this->db->query($sql);
		$data = $query->result();
		$data_list=array();
		
		$i=1;
		foreach($data as $dt){
			$data_list[$i]=array(
				"no"=>$dt->no,
				"tanggal"=>$dt->tanggal,
				"wilayah"=>$dt->wilayah,
				"produksi"=>$dt->produksi,
				"create_date"=>$dt->create_date,
				"user_create"=>$dt->user_create,
				"status"=>$dt->status,
				"email"=>$dt->email
			);
			$i++;
		}
		return $data_list;
	}
	
	public function search_report($no)
	{
		$sql = "SELECT * FROM `laporan_produksi` LEFT JOIN `m_user` ON laporan_produksi.user_create = m_user.id WHERE `no`='$no'";
		$query = $this->db->query($sql);
		$data = $query->result();
		
        return $data;
	}
	
	public function delete_report($no)
	{
		$sql = "DELETE FROM `laporan_produksi` WHERE `no`='$no'";
		$query = $this->db->query($sql);
	}
	
	public function update_data($no, $tanggal, $wilayah, $produksi, $user, $status)
	{
		$sql = "UPDATE `laporan_produksi` SET `tanggal`='$tanggal',`wilayah`='$wilayah',`produksi`='$produksi',`user_create`='$user',`status`='$status' WHERE `no`='$no'";
		$query = $this->db->query($sql);
	}
}
?>




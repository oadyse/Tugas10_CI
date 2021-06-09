<?php
class Model_Home extends CI_Model
{
	public function getAll()
	{
		// Query Builder versi panjang
		$query = $this->db->get('penumpang'); // SELECT * FROM mahasiswa
		return $query->result(); // Object

		// Query Builder versi pendek
		// return $this->db->get('penumpang')->result();
	}

	public function save($data)
	{
		return $this->db->insert('penumpang', $data);
	}

	public function getById($id)
	{
		return $this->db->get_where('penumpang', ['id' => $id])->row();
	}

	public function update($data, $id)
	{
		return $this->db->update('penumpang', $data, ['id' => $id]);
	}

	public function delete($id)
	{
		return $this->db->delete('penumpang', ['id' => $id]);
	}

	public function getAlljadwal()
	{
		$query = $this->db->get('jadwal');
		return $query->result(); // Object
	}

	public function savejadwal($data)
	{
		return $this->db->insert('jadwal', $data);
	}
}

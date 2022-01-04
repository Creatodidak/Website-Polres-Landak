<?PHP
class counter{
	function hitung($d){
        $this->db->like('postid', $d);
        $this->db->from('counter');
        echo $this->db->count_all_results();
	}
}
?>
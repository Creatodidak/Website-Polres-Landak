 <?php if(! defined('BASEPATH'))exit('No direct script allowed access');

Class My_Model extends CI_Model{
 function __construct(){
  parent::__construct();
 }
 
 function get_last_query()
    { 	
        $query = $this->db->get('laphar');
  return $this->db->last_query(); // Return Last Query
    }
}
?>
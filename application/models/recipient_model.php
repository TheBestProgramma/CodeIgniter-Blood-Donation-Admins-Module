<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Recipient_model extends CI_Model {

	//select * from tbl donors   
    function fetch_data() {
        $query = $this->db->query("SELECT * FROM donors ORDER BY id DESC");
    	return $query;
    }
}
?>
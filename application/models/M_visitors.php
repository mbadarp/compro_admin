<?php
class M_visitors extends CI_Model
{

    function set_visitors($user_ip)
    {
        $hsl = $this->db->query("INSERT INTO tbl_visitors (visitors_ip) VALUES ('$user_ip')");
        return $hsl;
    }

    function statistics_visitors()
    {
        $query = $this->db->query("SELECT DATE_FORMAT(visitors_date, '%d') AS tgl, COUNT(visitors_ip) AS amount FROM tbl_visitors WHERE MONTH(visitors_date)=MONTH(CURDATE()) GROUP BY DATE (visitors_date)");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $results[] = $data;
            }
            return $results;
        }
    }

    function save_user_agent($user_ip, $agent)
    {
        $hsl = $this->db->query("INSERT INTO tbl_visitors (visitors_ip, visitors_device) VALUES('$user_ip', '$agent')");
        return $hsl;
    }
}

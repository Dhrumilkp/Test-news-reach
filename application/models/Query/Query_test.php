<?php 

class Query_test extends CI_Model 
{
    public function first_query()
    {
        $sql = "SELECT First_name, Last_name, Salary FROM employee_table WHERE First_name LIKE '%n';";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    public function second_query()
    {
        // $sql = "SELECT * FROM employee_table WHERE Employee_id = (SELECT amount FROM reward_table WHERE amount < 5100);";
        $sql = "SELECT emp.First_name,emp.Last_name,rwd.amount FROM employee_table as emp RIGHT JOIN reward_table as rwd ON emp.Employee_id = rwd.Employee_ref_id WHERE rwd.amount < 5100";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    public function third_query()
    {
        $sql = "SELECT First_name,Last_name,Joining_date FROM employee_table WHERE Joining_date <= '2019-02-25'";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
}

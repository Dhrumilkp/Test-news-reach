<?php 

class Auth_req extends CI_Model
{
    public function auth_request($headers)
    {
        if(isset($headers['Host']))
        {
            if($headers['Host'] == HOST_URL) 
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
}

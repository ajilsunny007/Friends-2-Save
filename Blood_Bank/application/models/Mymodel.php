<?php
class Mymodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
//admin LOGIN
	
	function adminlog($username,$password)
	{
		$query=$this->db->get_where('admin_login',array('username'=>$username,'password'=>$password));
		return $query->result();
	}
// END OF ADMIN LOGIN 

//user registraion details insert	
	function insertuser($userdata)
	{
		$this->db->insert('tbl_details',$userdata);	
	}
	function insertbooking($data)
	{
		$this->db->insert('tbl_booking',$data);
	}
	function insertlogin($data)
	{
		$this->db->insert('tbl_login',$data);
		
	}
// END OF usert registraion details insert
	
	
	
//login
	function loguser($duser,$dpass)
	{
		$querys=$this->db->get_where('tbl_login',array('uname'=>$duser,'password'=>$dpass));
		return $querys->result();
	}
	function checkreguser($duser)
	{
		$querys=$this->db->get_where('tbl_login',array('uname'=>$duser));
		return $querys->result();
	}
	
	function disuser($duser)
	{
		$querys=$this->db->get_where('tbl_details',array('email'=>$duser));
		return $querys->result();
	}
	function donors($a)
	{
		$this->db->join('tbl_details','tbl_login.uname=tbl_details.email','inner');
		$querys=$this->db->get_where('tbl_login',array('type'=>$a,'status'=>'unblock'));
		return $querys->result();
	}
	function userbookers($user)
	{
		$this->db->join('tbl_details','tbl_booking.donor=tbl_details.email','inner');
		$querys=$this->db->get_where('tbl_booking',array('user'=>$user));
		return $querys->result();
	}
	function donorbookers($user)
	{
		$this->db->join('tbl_details','tbl_booking.user=tbl_details.email','inner');
		$querys=$this->db->get_where('tbl_booking',array('donor'=>$user));
		return $querys->result();
	}
	function lists($type)
	{
		$this->db->join('tbl_details','tbl_login.uname=tbl_details.email','inner');
		$query=$this->db->get_where('tbl_login',array('type'=>$type));
		return $query->result();
	}
	function diss()
	{
	$querys=$this->db->get_where('dregister',array());
	return $querys->result();
	}
	
	function updateblock($email,$block)
	{
		$this->db->where('uname',$email);
		$this->db->update('tbl_login',array('status'=>$block));
	}
	
	function deletebookeddonor($deleteid)
	{
		$this->db->where('bid',$deleteid);
		$this->db->delete('tbl_booking');
	}
// END OF login
	function userjoin()
	{
	$this->session->set_userdata('id',$did);
			$this->session->set_userdata('username',$dusername);
			$this->session->set_userdata('password',$dpassword);
	}
	
	
//search
	function searchdetails($bloodg,$districts)
	{
		$query=$this->db->get_where('doner_reg',array('blood_group'=>$bloodg,'district'=>$districts));
		
		return $query->result();
	}
// END OF search
	
	function displ()
	{
		
		$queryp=$this->db->get('questios');
		return $queryp->result();
	}
	
	
	
	function del($id)
	{
		$this->db->where('q_id',$id);
		$this->db->delete('questios');
	}
	function editq($id)
	{
		$this->db->where('q_id',$id);
		$quer=$this->db->get('questios');
		return $quer->result();
	}
	function updatq($id,$dat)
	{
		$this->db->where('q_id',$id);
		$this->db->update('questios',$dat);
	}
	function dispregistrad()
	{
		$query=$this->db->get('registration');
		return $query->result();
	}
	//delet registerd users
	function dele($id)
	{
		$this->db->where('user_id',$id);
		$this->db->delete('registration');
	}
	
	//User
	//user insert registration details
	function insertreg($userdat)
	{
		$this->db->insert('registration',$userdat);
	}
	//user login chek
	function userlog($username,$pass)
	{
		$query=$this->db->get_where('registration',array('username'=>$username,'password'=>$pass,'status'=>1));
		return $query->result();
	}
	function userdetails($id)
	{
		$this->db->where('user_id',$id);
		$quer=$this->db->get('registration');
		return $quer->result();
	}
	function course($course)
	{
		$this->db->where('course',$course);
		$quer=$this->db->get('registration');
		return $quer->result();
	}
	function questionsd($course)
	{
		$this->db->where('category',$course);
		$quer1=$this->db->get('questios');
		return $quer1->result();
	}
	function apro($id,$datr)
	{
	$this->db->where('user_id',$id);
		$this->db->update('registration',$datr);	
	}
	
	//code for score of students
	function score()
	{
		$qu=$this->db->get('questios');
		return $qu->result();
	}
	function insertscor($markresult)
	{
		$this->db->insert('score',$markresult);
	}
	function dispscore()
	{
		$qu=$this->db->get('score');
		return $qu->result();
	}
	function deletscore($id)
	{
		$this->db->where('score_id',$id);
		$this->db->delete('score');
	}
	function pass($id,$statusa)
	{
		$this->db->where('score_id',$id);
		$this->db->update('score',$statusa);	
	}
	
	function ForgotPassword($email)
	{
		$querys=$this->db->get_where('tbl_login',array('uname'=>$email));
		return $querys->result();
	}
	
	public function sendpassword($email)
	{
    $query1=$this->db->get_where('tbl_login',array('uname'=>$email));
    $row=$query1->result_array();
    if ($query1->num_rows()>0)
	{
        $passwordplain = "";
        $passwordplain  = rand(999999999,9999999999);
        $newpass['password'] = md5($passwordplain);
        $this->db->where('uname', $email);
        $this->db->update('tbl_login', $newpass);
        $mail_message='Dear '.$row[0]['name'].','. "\r\n";
        $mail_message.='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
        $mail_message.='<br>Please Update your password.';
        $mail_message.='<br>Thanks & Regards';
        $mail_message.='<br>Your company name';
        require 'PHPMailerAutoload.php';
        require 'class.phpmailer.php';
        $mail = new PHPMailer;
        $mail->IsSendmail();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "localhost";
        $subject = 'Testing Email';
        $mail->AddAddress($email);
        $mail->IsMail();
        $mail->From = 'ajilsunny007@gmail.com';
        $mail->FromName = 'admin';
        $mail->IsHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $mail_message;
        $mail->Send();
        if (!$mail->send()) {

            echo "<script>alert('msg','Failed to send password, please try again!')</script>";
        } else {

            echo "<script>alert('msg','Password sent to your email!')</script>";
        }
        redirect(base_url().'controller/index','refresh');
    }
    else
    {

        echo "<script>alert('msg','Email not found try again!')</script>";
        redirect(base_url().'controller/index','refresh');
    }
}
}
?>

<?php
class controller extends CI_Controller
{
	function __construct()
	
	{
		parent::__construct(); 
		$this->load->model('Mymodel');
		$this->load->helpers(array('url','form'));
		$this->load->library(array('session','upload'));
	}
	function index()
	{
		$this->load->view('home');
	}
	function about()
	{
		$this->load->view('about');
	}
	function dregistration()
	{
		$this->load->view('donor');
	}
	function register()
	{
		$this->load->view('user_register');
	}
	function donor_register()
	{
		$this->load->view('donor_register');
	}
	function login()
	{
		$this->load->view('login');
	}
	function forgotpassword()
	{
		$this->load->view('forgotpassword');
	}
	function uindex()
	{
		$uname=$this->session->userdata('username');
		$result['dis']=$this->Mymodel->disuser($uname);
		$this->load->view('user_home',$result);
	}
	function aindex()
	{
		$uname=$this->session->userdata('username');
		$this->load->view('admin_home',$uname);
	}
	function dindex()
	{
		$uname=$this->session->userdata('username');
		$this->load->view('donor_home',$uname);
	}
	
function insertdonor()
{
	$dname=$this->input->post('dname');	
	$address=$this->input->post('address');
	$gender=$this->input->post('gender');
	$demail=$this->input->post('demail');	
	$dphone=$this->input->post('dphone');
	$bgroup=$this->input->post('bgroup');
	$cpassword=$this->input->post('cpassword');
	
	$result['id']=$this->Mymodel->checkreguser($demail);
	if(!$result['id'])
	{	
		$donordata=array('name'=>$dname,'address'=>$address,'gender'=>$gender,'email'=>$demail,'phone'=>$dphone,'bloodgroup'=>$bgroup);
		$donordata1=array('lid'=>NULL,'uname'=>$demail,'password'=>$cpassword,'type'=>'donor','status'=>'approve');
		$this->Mymodel->insertuser($donordata);
		$this->Mymodel->insertlogin($donordata1);
		echo "Registeration successfully..!!";
		$this->load->view('donor_register',$donordata);
	}
	else
	{
		echo "User already exist...!!";
		$this->load->view('donor_register');
	}		
	
}
function insertuser()
{
	$uname=$this->input->post('uname');	
	$address=$this->input->post('address'); 
	$gender=$this->input->post('gender');
	$uemail=$this->input->post('uemail');
	$uphone=$this->input->post('uphone');
	$cpassword=$this->input->post('cpassword');
				
	$result['id']=$this->Mymodel->checkreguser($uemail);
	if(!$result['id'])
	{		
		$userdata=array('name'=>$uname,'address'=>$address,'gender'=>$gender,'email'=>$uemail,'phone'=>$uphone,'bloodgroup'=>'NULL');
		$userdata1=array('lid'=>NULL,'uname'=>$uemail,'password'=>$cpassword,'type'=>'user','status'=>'approve');
		$this->Mymodel->insertuser($userdata);
		$this->Mymodel->insertlogin($userdata1);
		$data="Registeration successfully..!!";
		$this->load->view('user_register',$userdata);
	}
	else
	{
		echo 'User already exist..!!';
		$this->load->view('user_register');
	}		
	
}
function listdisplay()
{
$display['dis']=$this->Mymodel->diss();
$this->load->view('list',$display);
}

function loginn()
	{
		$uname=$this->input->post('uname');
		$pass=$this->input->post('pass');
		$loginresult['login']=$this->Mymodel->loguser($uname,$pass);
		if(!$loginresult['login'])
		{
			echo  "Invalid login...!!";
			$this->load->view('login');
		}
		else
		{
			foreach($loginresult['login'] as $row)
			{
				$lid=$row->lid;
				$username=$row->uname;
				$password=$row->password;
				$type=$row->type;
				$status=$row->status;
				if($status=='approve')
				{
					echo  "Not Approved";
					$this->load->view('home');
				}
				elseif($status=='block')
				{
					echo  "Blocked login";
					$this->load->view('home');
				}
				else
				{
					if($type=='admin')
					{
						$this->session->set_userdata('id',$lid);
						$this->session->set_userdata('username',$username);
						$this->session->set_userdata('password',$password);
			
						$result['dis']=$this->Mymodel->disuser($username);
			
						$this->load->view('admin_home',$result);
					}
					else if($type=='user')
					{
						$this->session->set_userdata('id',$lid);
						$this->session->set_userdata('username',$username);
						$this->session->set_userdata('password',$password);
			
						$result['dis']=$this->Mymodel->disuser($username);
			
						$this->load->view('user_home',$result);
					}
					else
					{
						$this->session->set_userdata('id',$lid);
						$this->session->set_userdata('username',$username);
						$this->session->set_userdata('password',$password);
			
						$result['dis']=$this->Mymodel->disuser($username);
			
						$this->load->view('donor_home',$result);
					}
				
				}
			}
		}
	}

function userprofile()
{
	$uname=$this->session->userdata('username');
	$result['dis']=$this->Mymodel->disuser($uname);
	$this->load->view('user_profile',$result);
}
function donorprofile()
{
	$uname=$this->session->userdata('username');
	$result['dis']=$this->Mymodel->disuser($uname);
	$this->load->view('donor_profile',$result);
}			
		
function donors()
{
	$a='donor';
	$result['a']=$this->Mymodel->donors($a);
	$this->load->view('user_donors',$result);
}		

function bookblood()
{
	$loged_user=$this->input->post('logid');
	$booked_user=$this->input->post('bookid');
	$booked_date=$this->input->post('bookdate');
	$data=array('bid'=>NULL,'user'=>$loged_user,'donor'=>$booked_user,'date'=>$booked_date);
	$this->Mymodel->insertbooking($data);
	$a='donor';
	$result['a']=$this->Mymodel->donors($a);
	$this->load->view('user_donors',$result);
}

function bookeddonors()
{
	$uname=$this->session->userdata('username');
	$result['userbook']=$this->Mymodel->userbookers($uname);
	$this->load->view('user_selecteddonors',$result);
}

function selectusers()
{
	$uname=$this->session->userdata('username');
	$result['donorbook']=$this->Mymodel->donorbookers($uname);
	$this->load->view('donor_bookedusers',$result);
}
function userlist()
{
	$type='user';
	$result['type']=$this->Mymodel->lists($type);
	$this->load->view('admin_userlist',$result);
}
function donorlist()
{
	$type='donor';
	$result['type']=$this->Mymodel->lists($type);
	$this->load->view('admin_donorlist',$result);
}
function blockuseraction()
{
	$uname=$this->input->post('blockid');
	$block=$this->input->post('block');
	if($block=='block' || $block=='approve')
	{
		$action='unblock';
		$this->Mymodel->updateblock($uname,$action);
		$type='user';
		$result['type']=$this->Mymodel->lists($type);
		$this->load->view('admin_userlist',$result);
	}
	else
	{
		$action='block';
		$this->Mymodel->updateblock($uname,$action);
		$type='user';
		$result['type']=$this->Mymodel->lists($type);
		$this->load->view('admin_userlist',$result);
	}
}
function blockdonoraction()
{
	$uname=$this->input->post('blockid');
	$block=$this->input->post('block');
	if($block=='block' || $block=='approve')
	{
		$action='unblock';
		$this->Mymodel->updateblock($uname,$action);
		$type='donor';
		$result['type']=$this->Mymodel->lists($type);
		$this->load->view('admin_donorlist',$result);
	}
	else
	{
		$action='block';
		$this->Mymodel->updateblock($uname,$action);
		$type='donor';
		$result['type']=$this->Mymodel->lists($type);
		$this->load->view('admin_donorlist',$result);
	}
}
function bookdonordelete()
{
	$deleteid=$this->input->post('deleteid');
	$this->Mymodel->deletebookeddonor($deleteid);
	$uname=$this->session->userdata('username');
	$result['userbook']=$this->Mymodel->userbookers($uname);
	$this->load->view('user_selecteddonors',$result);
}
function logout()
{
	$this->session->sess_destroy();
	redirect('controller/index');
}

function ForgotPass()
{
    $email = $this->input->post('email');
    $findemail = $this->Mymodel->ForgotPassword($email);
    if ($findemail) 
	{
        $this->Mymodel->sendpassword($findemail);
    } else 
	{
        echo "<script>alert(' $email not found, please enter correct email id')</script>";
        redirect('controller/login');
    }
}

function myprof()
{
	$this->load->view('user');
}
	
}

?>
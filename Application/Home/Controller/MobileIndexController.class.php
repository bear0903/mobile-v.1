<?php
namespace Home\Controller;
use Think\Controller;

class MobileIndexController extends HomeController {
	function index(){
		$this->display(Index/index);
	}
	
	function login() {
	$companyid = '';
		$username  = '';
		$passwd    = '';
		$error  = '';
		$cookieDomain = dirname(dirname($_SERVER['PHP_SELF']));
		 
			if (isset($_POST['companyno']) &&
					isset($_POST['username'])  &&
					isset($_POST['password']))
			{
				$username  = htmlentities ($_POST['username'], ENT_QUOTES, 'UTF-8' );
				$companyid = $_POST['companyno'];
				$passwd    = $_POST['password'];
			}

			if(!empty($companyid) && !empty($username) && !empty($passwd)){
				$langcode  = isset($_POST['lang']) && !empty($_POST['lang']) ?
				$_POST['lang']:
				$GLOBALS['config']['default_lang'];
				$username = $_POST['username'];
				$companyidname = $_POST['companyno'];
				//echo $companyidname;
				$Compid = M('gl_segment');
				$where['segment_no_sz'] = $companyidname;
				$companyid = $Compid->where($where)->getField('segment_no');
				$app_users_base = M('app_users_base');
				$where['username_no_sz'] = $username;
				$where['seg_segment_no'] = $companyid;
				 
				$arr = $app_users_base->where($where)->find();

				if ($arr){
  					$arb = M('app_users');
 					$arb->execute('begin dodecrypt; end;');
					$app_users = M('app_users');
					//exit();
					$where['username_no_sz'] = $username;
					$where['username_password'] = $passwd;
					$arc = $app_users->where($where)->find();
					//dump($arc);
					//exit();
					if ($arc){
							setCookie ('companyid',$companyid, time () + 3600 * 24 * 365, $cookieDomain );
							setCookie ('language', $langcode, time () + 3600 * 24 * 365, $cookieDomain );
							setCookie ('username', $username, time () + 3600 * 24 * 365, $cookieDomain );
							$_SESSION ['user']['language'] = $langcode;
							$User = new \Org\Util\libs\AresUser($companyid, $username);
							$result=$User->GetUserInfo();
							session('user.company_id',$companyid);
							session('user.user_seq_no',$result['0']['user_seq_no']); 
							//echo $result['0']['user_seq_no'];exit();
							session('user.emp_seq_no',$result['0']['user_emp_seq_no']);
							session('user.emp_id',$result['0']['user_emp_id']);
							session('user.emp_name',$result['0']['user_emp_name']);
							session('user.user_name',$username);
							session('user.sex',$result['0']['sex']);
							session('user.dept_seqno',$result['0']['dept_seqno']);     						
							session('user.dept_id',$result['0']['dept_id']);
							session('user.dept_name',$result['0']['dept_name']);
							session('user.title_id',$result['0']['title_id']);
							session('user.title_name',$result['0']['title_name']);
							session('user.title_level',$result['0']['title_level']);
							session('user.join_date',$result['0']['join_date']);
							//session('user.is_manager1')=$User->IsManager($result ['USER_EMP_SEQ_NO']);
							session('user.is_manager1','true');
							session('user.is_manager','$mss_perm');
							session('user.not_first_login','Y');
// 							$data = 'ok';
// 							$this->ajaxReturn($data);
 							$this->redirect('Index/redirect');
 							exit();
						}
					}else {
						//echo '1';
						$this->ajaxReturn('Password error.');
						exit();
					}
				}else {
					$this->ajaxReturn('The user name does not exist.');
					exit();
				}
			}
		}
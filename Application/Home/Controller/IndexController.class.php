<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
define('APP_DEBUG', true);
define('APP_PATH','./Application/');
import('Org.Util.libs.AresUser');
import('Org.Util.libs.KL_AresUser');
import('Org.Util.libs.adodb.adodb.ini');

$language = isset ( $_POST ['lang'] ) ?
$_POST ['lang'] :
(isset ( $_GET ['lang'] ) ? $_GET ['lang'] : $GLOBALS['config']['default_lang']);


class IndexController extends HomeController {
	function index(){
		header('Content-Type:text/html; charset=utf-8');
		/*$Model = new Model();
		 $Model->execute("begin dodecrypt();end;");*/
		$Comp  = M('gl_segment'); //实例化Data数据模型
		/* $Comp = $Data->find($username);
		 $map['username_no_sz'] = array(array('gt', '0000'),array('lt', '0015')); */
		$map['segment_type'] = 'COMPANY';
		$map['segment_no_sz'] = array('in','SiLanAz,SZCNHR');
		$this->Com = $Comp->where($map)->select();//getField('user_desc');

		 
		//$map['segment_no_sz'] = array('in','APLUS_SZ,ARES_SH,SiLanAz,SZCNHR');
		//$this->Com = $Comp->where($map)->select();//getField('user_desc');
		//$this->data = $Data->select();
		//dump($Comp);
		//$this->assign('name',$name);
		 
		$Muti  = M('thinkphp_multilang_list'); //实例化Data数据模型
		$this->Mut = $Muti->select();//getField('user_desc');
		$data = array('a'=>1,'b'=>2,'c'=>3,'d'=>4);
		$this->assign('test',$data);
		$this->display();
		 
		 
		//$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
		//echo '123';
		/* $user=M('ehr_department_v');
		 $condition['dept_type']='COMPANY'; */
		/* $username="admin";
		 $this->assign("username",$username);
		 $this->display(); */
		 
		 
		 
		//$type = M("ehr_multilang_list");
		//$data = $type->find();
		//dump($data);
		/* $_POST = cleanArray($_POST); */
		  
		/* $language = isset ( $_POST ['lang'] ) ?
		 $_POST ['lang'] :
		 (isset ( $_GET ['lang'] ) ? $_GET ['lang'] : $GLOBALS['config']['default_lang']);
		  
		 $type=M("ehr_multilang_list");
		 $langlist=$type->field('language_name')->select();
		 dump($langlist);
		 $this->assign('langlist',$langlist);
		  
		 $type=M("ehr_department_v");
		 $cpnlist = $type->field('dept_name')->select();
		 $this->assign('cpnlist',$cpnlist);
		 //dump($cpnlist);
		 $this->display(); */
		 
	}

	function login(){
		$companyid = '';
		$username  = '';
		$passwd    = '';
		$cookieDomain = dirname(dirname($_SERVER['PHP_SELF']));
		/* $home_url  = $GLOBALS['config']['curr_home'] . '/index.php'; */
		/* $authtype = isset($_GET['authtype']) && !empty($_GET['authtype']) ?
		 $_GET['authtype'] : 'default'; */
		 
		if($_POST['username'] != "请输入账号" and $_POST['password'] != "请输入密码"){

			if (isset($_POST['companyno']) &&
					isset($_POST['username'])  &&
					isset($_POST['password']))
			{
				$username  = htmlentities ($_POST['username'], ENT_QUOTES, 'UTF-8' );
				$companyid = $_POST['companyno'];
				$passwd    = $_POST['password'];
			}

			/* $login = D('login');
			 $db = M('app_users_base');

			 if(!$data = $login->create()){
			 header("Content-type:text/html; charset=utf-8");
			 exit($login->getError());
			 }

			 $data = array();
			 $where['username'] = $data['username'];
			 $result = $db->where($where)->field('companyno,username,password')->find(); */

			//验证用户
			/* if($result && $result['password'] == $result['password']){
			 //存储session
			 session('username',$result['username']);
			 session();
			 } */

			if(!empty($companyid) && !empty($username) && !empty($passwd)){
				$langcode  = isset($_POST['lang']) && !empty($_POST['lang']) ?
				$_POST['lang']:
				$GLOBALS['config']['default_lang'];
				 
				/* echo $companyid ;
				 echo $username; */
				 
				   
				/* $KLUser = new \Kl_AresUser($companyid,$username);
				 $username = $KLUser->KL_check_user($username);
				  
				 echo $companyid;
				 echo $username; */
				 
				//$User = new \AresUser($companyid, $username);
				/* $home_url .= '?lang=' .$langcode. '&companyno=' .$companyid;
				 $home_url .= '&loginerror='; */
				 
				 
				$username = $_POST['username'];
				$companyidname = $_POST['companyno'];
				//echo $companyidname;
				$Compid = M('gl_segment');
				$where['segment_no_sz'] = $companyidname;
				$companyid = $Compid->where($where)->getField('segment_no');
				 
				//$companyid->query('select SEGMENT_NO from gl_segment where SEGMENT_NAME = "$companyidname"');
				//dump($companyid->data());
				$app_users_base = M('app_users_base');
// 				echo $username;
// 				echo $companyid;
				 
				$where['username_no_sz'] = $username;
				$where['seg_segment_no'] = $companyid;
				 
				//$where["pk_history_data.f_get_value(seg_segment_no,psn_id, sysdate, 'E')"] = 'JS1';
				$arr = $app_users_base->where($where)->find();
				
				//dump($arr);
				//echo $arr;
				if ($arr){
 					//$arc = new Model();
  					$arb = M('app_users');
 					$arb->execute('begin dodecrypt; end;');
//  					dump($arb);
					$app_users = M('app_users');
					//exit();
					$where['username_no_sz'] = $username;
					$where['username_password'] = $passwd;
					$arc = $app_users->where($where)->find();
					//dump($arc);
					//exit();
					if ($arc){

						//$mss_perm = $User->CheckPermission('MDN');
						/* $mss_perm = $User->CheckPermission('MDN');
						 echo $mss_perm; */
						//if ($User->CheckPermission ('ESN') or '1' == $mss_perm ){
						if (1 == 1 ){
							setCookie ('companyid',$companyid, time () + 3600 * 24 * 365, $cookieDomain );
							setCookie ('language', $langcode, time () + 3600 * 24 * 365, $cookieDomain );
							setCookie ('username', $username, time () + 3600 * 24 * 365, $cookieDomain );
							$_SESSION ['user']['language'] = $langcode;
							//get user information
							//echo $companyid;echo $username;
							$User = new \Org\Util\libs\AresUser($companyid, $username);
							$result=$User->GetUserInfo();
 							//dump($result);
 							//exit();
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
							//unset($result);
							//session('user.not_first_login')=$User->isFirstLogin($passwd);
							session('user.not_first_login','Y');
							//var_export($_SESSION);
// 							dump($_SESSION);
// 							exit();
							//echo $passwd;
							$this->redirect('Home/Redirect/index');
							exit();
						}else {
							header('__APP__/Home/Index/index'.urldecode('未授权'));
							exit();
						}
					}else {
						//echo '1';
						$this->error('__APP__/Home/Index/index'.urldecode('Password error.'));
						exit();
					}
				}else {

					$this->error('__APP__/Home/Index/index'.urldecode('The user name does not exist.'));
					exit();
				}
			}
		}else {
				//echo $_POST['companyno'];
				$this->error('__APP__/Home/Index/index'.urldecode('Attack error.'));
				exit();
			}
	}

	function logout(){
		 
		$this->display();
	}

	/* public function lang(){
	 $type=M('ehr_multilang_list');
	 $type->field('language_code,language_name')->select();
	 //dump($type);
	 $this->assign('type',$type);
	 $this->display();
	 } */

	/* function ff(){
	 $this->
	 $this->redirect('www.baidu.com','',3,"页面跳转中...");
	 } */


	/* public function index2(){
	 $form = D('Form')->find();
	 dump($form);
	 exit;
	 } */

}

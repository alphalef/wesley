<?php namespace App\Controllers;
use App\Models\PostModel;

use App\Libraries\Attachment;
use App\Libraries\Auth;
use CodeIgniter\Controller;


class Posts extends Controller
{
	// public $category_title = [
	// 	'mydevotion' => '나의 묵상 노트',
	// 	'biblewriting' => '나의 성경 필사'
	// ];

	public function view($url = false)
	{
		$model = new PostModel();
		$id = explode("-", $url);
		$session = session();
		$userid = $session->get('userid');

		if($url) {
			$posts = $model->getPost($id[0]);

			if(!isset($_GET['page_group1'])) {
				$returnPage = 0;
			} else {
				$returnPage = $_GET['page_group1'];
			}
			
			$data = [
				'returnPage'=>$returnPage,
			];

			$final_data = array_merge($data, $posts);

			echo view('template/header');
			echo view('post/view', $final_data);
			echo view('template/footer');
			echo view('post/navwhite');

		} else {
			return redirect()->to('/');
		}
	}

	public function add($option)
	{
		$session = session();
		$userid = $session->get('userid');
		$name = $session->get('name');

		if($userid) {
			$postmodel = new PostModel();

			if($option == 'form') {
				$data = [
					'attached'=>sha1(time()),
					'url'=>'',
					'userid'=>$userid,
					// 'date' => $date,
					'option' => $option,
					'title' => '',
					'open' => '',
				];
				echo view('admin/header');
				echo view('admin/post/add', $data);
				echo view('admin/editor/editor');
				echo view('admin/footer');

			} elseif($option == 'put') {

				$title = addslashes(trim($this->request->getVar('title')));
				$content = nl2br($this->request->getVar('content'));
				$category = $this->request->getVar('category');
				$attached = $this->request->getVar('attached');
				$open = $this->request->getVar('open');
				// $date = str_replace("-", "", $this->request->getVar('date'));
				
				$url_string = preg_replace("/[#\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $title);
				$url = str_replace(" ", "-", $url_string);

				$attachlib = new Attachment();

				//이미지를 새로운 폴더로 옮기고 새로운 content 값 반환
				$new_content = $attachlib->copyimage($content, $attached);

				// 외부 이미지 파일 다운로드(백업작업용)
				// $new_content = $attachlib->downimage($content, $attached);
				
				$postmodel->save([
					'content' => $new_content,
					'title' => $title,
					'url' => $url,
					'attached' => $attached,
					'category' => $category,
					'date' => time(),
					'edited_date' => time(),
					'userid' => $userid,
					'name' => $name,
					'open' => $open,
					'created_date' => time(),
					'approved_date' => ''
				]);

				return redirect()->to('/adm');
			} 
		} else {
			return redirect()->to('/');
		}
	
	}

	public function edit($option,$id)
	{
		$session = session();
		$userid = $session->get('userid');
		$name = $session->get('name');

        if($userid) {
			$postmodel = new PostModel();

			if($option == 'form') {
				$data = $postmodel->getPost($id);
				$option = ['option'=>'editform'];
				$final_data = array_merge($data, $option);

				echo view('admin/header');
				echo view('admin/post/add', $final_data);
				echo view('admin/editor/editor');
				echo view('admin/footer');

			} elseif($option == 'put') {
				$title = addslashes(trim($this->request->getVar('title')));
				$content = $this->request->getVar('content');
				$category = $this->request->getVar('category');
				$attached = $this->request->getVar('attached');
				$open = $this->request->getVar('open');
				$date = str_replace("-", "", $this->request->getVar('date'));
				
				$url_string = preg_replace("/[#\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $title);
				$url = str_replace(" ", "-", $url_string);

				$attachlib = new Attachment();

				//이미지를 새로운 폴더로 옮기고 새로운 content 값 반환
                $new_content = $attachlib->copyimage($content, $attached);
			
				$data = [
					'content' => $new_content,
					'title' => $title,
					'url' => $url,
					'attached' => $attached,
					'category' => $category,
					'date' => $date,
					'edited_date' => time(),
					'userid' => $userid,
					'name' => $name,
					'open' => $open
				];

				$postmodel->update($id, $data);

				return redirect()->to('/posts/edit/form/'.$id);
			}
		} else {
			return redirect()->to('/');
		}
	}

	

	public function openlist($category) {
		$model = new PostModel();

		switch($category) {
			case 'mydevotion':
				$title = "말씀 묵상 나눔";
				break;
			case 'biblewriting':
				$title = "공개 성경 필사";
				break;
		}

		if(!isset($_GET['page_group1'])) {
			$returnPage = 0;
		} else {
			$returnPage = $_GET['page_group1'];
		}
	
		$posts = $model->getopenpost($category);
		$totalcount = $model->getopenpostcount($category);

		$data = [
			'category'=>$category,
			'title'=> $title,
			'totalcount'=>$totalcount,
			'countperpage'=>$model->posts_per_page,
			'returnPage'=>$returnPage,
		];
		
		$final_data = array_merge($data, $posts);

		echo view('template/header');
		echo view('post/openlistview', $final_data);
		echo view('ddm');
		echo view('template/footer');

	}

	public function remove($id)
	{
		if(!$this->request->getVar('remove_confirm')) {
			echo "<script>alert('글을 삭제 하시려면 확인란에 체크를 하셔야 합니다'); history.go(-1);</script>";
		} else {

			$session = session();
			$userid = $session->get('userid');
			$model = new PostModel();
			$data = $model->getPost($id);

			if($userid == $data['userid']) {
				$model->where('id', $data['id']);
				$model->delete();
				return redirect()->to('/adm/mylist/');
			} else {
				return redirect()->to('/');
			}
		}
	}


	public function removefile($attached, $filename)
	{
		$auth = new Auth();
		$isadmin = $auth->isadmin();
		if($isadmin) { 
			$file = ROOTPATH . 'public/attached/'.$attached.'/resourcefile/'.$filename;

			if(file_exists($file)) {
				unlink($file);
			}
		} else {
			return redirect()->to('/');
		}
	}

}
 
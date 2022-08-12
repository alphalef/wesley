<?php namespace App\Controllers;
use App\Libraries\Attachment;
use CodeIgniter\Controller;


class Attach extends Controller
{

	public function uploadimgfile()
	{
        $uploaded = $this->request->getFile('upload');

        $uploaded_name = $uploaded->getRandomName();

		//upload 폴더이름은 닷홈 호스팅에서 접근 안됨
		$uploaded->move('attached/temp/', $uploaded_name); 
		
		$data = [ 
			"uploaded" => true, 
			"url" => base_url("attached/temp")."/".$uploaded_name
		];
		// return json_encode($data);
		return $this->response->setJson($data);
    }
	//--------------------------------------------------------------------

    
	// url로 이미지 복사 
	public function copyimage($content, $attached) 
	{
		// 이미지 파일 옮기고 temp 폴더 내 파일 삭제
		preg_match_all("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $content, $matches);
		if(count($matches[1]) > 0) {
			$directory = ROOTPATH . "public/attached/".$attached."/";
			for($i=0; $i<count($matches[1]); $i++) {
				// if(strpos($matches[1][$i], 'http://') === false && strpos($matches[1][$i], 'https://') === false && strpos($matches[1][$i], '/attached/temp') === false) {
				if(!is_dir($directory)) {
					mkdir($directory, 0777, true);
				}

				$filename = explode('/', $matches[1][$i]);

				$tempfile = ROOTPATH . 'public/attached/temp/' . end($filename);

				echo $matches[1][$i];

				if(file_exists($tempfile)) {
					copy($tempfile, $directory.end($filename));
					unlink($tempfile);
					
					//테스트용
					$content = str_replace($matches[1][$i], '/attached/'.$attached.'/'.end($filename), $content);

					// 호스트용
					// $content = str_replace($matches[1][$i], '/public/attached/'.$attached.'/'.end($filename), $content);
				}
			}
		}
		return $content;
	} 
}
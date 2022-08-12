<?php namespace App\Libraries;

class Attachment
{
    
	// 이미지 업로드
	public function uploadimgfile($uploaded) 
	{
		$uploaded_name = $uploaded->getRandomName();
		// $uploaded_folder = sha1(time());

		//upload 폴더이름은 닷홈 호스팅에서 접근 안됨
		$uploaded->move('attached/temp/', $uploaded_name); 
		
		$data = [ 
			"uploaded" => true, 
			"url" => base_url("attached/temp")."/".$uploaded_name
		];
		// return json_encode($data);
		return $this->response->setJson($data);
    }

    public function downimage($content, $attached) 
	{
		// 이미지 파일 옮김
		preg_match_all("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $content, $matches);
		if(count($matches[1]) > 0) {
			$directory = ROOTPATH . "public/attached/".$attached."/";
			for($i=0; $i<count($matches[1]); $i++) {
				if(!is_dir($directory)) {
					mkdir($directory, 0777, true);
				}
                $url = $matches[1][$i];
                $filename = $this->download($url, $directory);

                //테스트용
                $content = str_replace($matches[1][$i], '/attached/'.$attached.'/'.end($filename), $content);

                // 호스트용
                // $content = str_replace($matches[1][$i], '/public/attached/'.$attached.'/'.$filename, $content);
			}
		}
		return $content;
	}
    
    
    public function download($url, $dir) {
        if(preg_match("/\.(gif|jpg|jpeg|png)$/i", $url)) {
            $ext = substr(strrchr($url, '.'), 1); 
            $filename = $this->genstr(10).".".$ext;
            $target = $dir.'/'.$filename;
            
            $fp = fopen($target, "w"); 
            $ch = curl_init(); 
            curl_setopt($ch, CURLOPT_URL, $url); 
            curl_setopt($ch, CURLOPT_HEADER, 0); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)"); 
            curl_setopt($ch, CURLOPT_FILE, $fp); 
            curl_exec($ch); 
            fclose($fp); 
            curl_close($ch);

            return $filename;
        }
    }
    	

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
	//--------------------------------------------------------------------

	public function getThumbnail($content)
	{
		preg_match_all("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $content, $matches);
		if(count($matches[1]) > 0) {
			$matches[1][0] = str_replace('/public', '', $matches[1][0]);
			$thumbnail = base_url($matches[1][0]);
		}
		else {
			$thumbnail = base_url('/images/post_img.png');
		}
		return $thumbnail;
	}	

	public function removeImgTag($content)
	{
		preg_match_all("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $content, $matches);

		if(count($matches[0]) > 0) {

			for ($i=0; $i<count($matches[0]); $i++) {
                $content = str_replace($matches[0][$i], '', $content);
			}
			
			return $content;
		}
		else {
            return $content;
		}

    }	
    
    public function genstr($length)  
    {  
        $characters  = "0123456789";  
        $characters .= "abcdefghijklmnopqrstuvwxyz";  
        $characters .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";  
        $characters .= "_";  
          
        $string_generated = "";  
          
        $nmr_loops = $length;  
        while ($nmr_loops--)  
        {  
            $string_generated .= $characters[mt_rand(0, strlen($characters) - 1)];  
        }  
          
        return $string_generated;  
    }  

}
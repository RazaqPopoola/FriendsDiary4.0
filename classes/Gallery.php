<?php
class Gallery {
	
	public $path;
	
	public function __construct() {
		$this->path = __DIR__ . '\uploads\images';
		$this->path = __DIR__ . '\uploads\musics';
		//$this->path = __DIR__ . '\uploads\videos';
	}
	
	public function setPath($path) {
		
		if(substr($path, -1) === '/') {
			$path = substr($path, 0, -1);
		}
		 $this->path = $path;
	}
		
		private function getDirectory($path) {
			return scandir($path);
		}
		
		 function getImages($extensions = array('jpg', 'png', 'jpeg', 'gif')) {
			$images = $this->getDirectory($this->path);
			
			foreach($images as $index => $image) {
				
				$bits = (explode('.', $image));
				$extension = strtolower(end($bits));
											
				if (!in_array($extension, $extensions)) {
					unset($images[$index]);
				} else {
					$images[$index] = array(
						'full' => $this->path . '/' . $image,
						'thumb' => $this->path . '/thumbs/' . $image
					);
				}
				
			}
			return (count($images)) ? $images : false;
		}
		
		/*
		public function getVideos($extensions = array('mp4', 'avi', 'wmv')) {
			$videos = $this->getDirectory($this->path);
			
			foreach($videos as $index => $video) {
				
				$bits = (explode('.', $video));
				$extension = strtolower(end($bits));
											
				if (!in_array($extension, $extensions)) {
					unset($videos[$index]);
				} else {
					$videos[$index] = array(
						'full' => $this->path . '/' . $video,
					);
				}
				
		}
			return (count($videos)) ? $videos : false;
		}*/
		
		public function getMusics($extensions = array('mp3', 'wav')) {
			$musics = $this->getDirectory($this->path);
			
			foreach($musics as $index => $music) {
				
				$bits = (explode('.', $music));
				$extension = strtolower(end($bits));
											
				if (!in_array($extension, $extensions)) {
					unset($musics[$index]);
				} else {
					$musics[$index] = array(
						'full' => $this->path . '/' . $music,
					);
				}
				
		}
			return (count($musics)) ? $musics : false;
		}
		
}
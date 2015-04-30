<?php
class Gallery {
	
	public $path;
	
	public function __construct() {
		$this->path = __DIR__ . '\uploads\musics';
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
<?php 
/*
By Solve Techy 
Website: https://solvetechy.com/

 */ 
class STYDownloader { 

    /* 
    Getting Video ID
    */

    public $video_id; 

     
    /*
        Set the Given ID
    */

    public function setID($video_id){ 
        $this->video_id = $video_id; 
        return $this;
    } 
     
    /*
        Getting Video Contents
    */
    public function get_video_contents(){ 
        return file_get_contents("https://www.youtube.com/get_video_info?video_id=". $this->video_id); 
    } 



    /*
        Storing data in an array
    */

    public function get_info(){ 
        $code = $this->get_video_contents();
    parse_str($code);
    $response = json_decode($player_response);
    foreach( $response->streamingData->formats as $key => $format ) {
        $links[$key]['url']         = $format->url;
        $links[$key]['height']      = $format->height;
        $links[$key]['width']       = $format->width;
        $links[$key]['quality']     = $format->quality;
        $links[$key]['qualityLabel']= $format->qualityLabel;
        $links[$key]['thumb']       = $response->videoDetails->thumbnail->thumbnails[3]->url;
        $links[$key]['title']       = $response->videoDetails->title;


    }
		
			return $links;
		
    }

     public function validate_video(){ 
        $valid = true; 
        parse_str($this->get_video_contents(), $data); 
        if($data["status"] == "fail"){ 
            $valid = false; 
        }  
        return $valid; 
    }  
      

      
}

?>
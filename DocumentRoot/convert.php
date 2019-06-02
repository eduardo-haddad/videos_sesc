<?php

 class Convert {

     public $teste = "aaa";

     public function convert_files($video, $audio){

         exec("cd video_files/final && \
                ffmpeg -hide_banner -loglevel 'verbose' -y -i $video.mp4 -i $audio.m4a output.mp4",$output, $status);

         return !$status;
     }
 }






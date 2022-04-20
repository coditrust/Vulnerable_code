<?php

namespace FS;

class DownloadFile{
    
    private $contentType = array(

        /* Archives */
        'zip'       => 'application/zip',
        '7z'        => 'application/x-7z-compressed',

        /* Documents */
        'txt'       => 'text/plain',
        'pdf'       => 'application/pdf',

        /* Images */
        'gif'       => 'image/gif',
        'png'       => 'image/png',
        'jpg'       => 'image/jpeg',
        'jpeg'      => 'image/jpeg'

    );    
    
    /**
     * The download speed in kb/s
     */
    private $speed = null;
    
    /**
     * Set the download speed
     * 
     * @param double $rate Download speed in kb/s
     */
    public function speed($rate){
        if(is_numeric($rate)){
            $this->speed = $rate;
        }
    }
    
    /**
     * Downloading files with automatic detection of the type
     * 
     * @param string $file File name with path
     * @param string $name Set file name
     * @param string $contentType Set content type
     */
    public function download($file, $name = null, $contentType = null){
      $file = htmlentities(addslashes($file));
      $extension = pathinfo($file, PATHINFO_EXTENSION);
      $dir = pathinfo($file,  PATHINFO_DIRNAME);
           
      if(is_null($name)){
         $name = basename($file);
      }
            
      if(!in_array($extension, array_keys($this->contentType))){
          print("Extension unauthorized");
          exit();
       }
            
       header('Content-Description: File Transfer');
       header('Content-Type: ' . $contentType);
       header('Content-Disposition: attachment; filename=' . $name);
       header('Content-Transfer-Encoding: binary');
       header('Expires: 0');
       header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
       header('Pragma: public');
       ob_clean();
       flush();
            
       // Download speed
       if(is_null($this->speed)){
           include($file);
        }else{
           $file = fopen($file, 'r');
           while(!feof($file)){
               print fread($file, round($this->speed * 1024));
               flush();
               sleep(1);
           }
         fclose($file);
        }
           
      exit;
        
    }
}

if(isset($_GET['file']))
{
  $downloadFile = new \FS\DownloadFile;
  $downloadFile->download($_GET['file']);
}

?> 

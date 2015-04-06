<?php 
// function encrypt_decrypt($action, $string) {
//     $output = false;

//     $encrypt_method = "AES-256-CBC";
//     $secret_key = 'trygjkz8dsf0ak84uha7ghr';
//     $secret_iv = 'asdas345hghasd3e4';
//     // hash
//     $key = hash('sha256', $secret_key);
    
//     // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
//     $iv = substr(hash('sha256', $secret_iv), 0, 16);

//     if( $action == 'encrypt' ) {
//         $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
//         return base64_encode($output);
//     }
//     else if( $action == 'decrypt' ){
//          return openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
//     }
//     #return $output;
// 	}

// //echo encrypt_decrypt('encrypt', 'ravi.t@cisinlabs.com');
//     //preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $matches);

//     $your_url='http://www.youtube.com/watch?v=V5oczV9Mieg';

// function get_youtube_id_from_url($url){
//     if (stristr($url,'youtu.be/'))
//         { preg_match('/(https:|http:|)(\/\/www\.|\/\/|)(.*?)\/(.{11})/i', $url, $final_ID); return $final_ID[4]; }
//     else 
//         { preg_match('/(https:|http:|):(\/\/www\.|\/\/|)(.*?)\/(embed\/|watch\?v=|(.*?)&v=|v\/|e\/|.+\/|watch.*v=|)([a-z_A-Z0-9]{11})/i', $url, $IDD); return $IDD[6]; }
// }
// $_GET['id'] = "1 ";

//     echo "test".mysql_real_escape_string($_GET['id']);
//    // mysql_query('SELECT a,b,c FROM mytable WHERE id='.mysql_real_escape_string($_GET['id']));
//     $var = 'SELECT a,b,c FROM mytable WHERE id='.mysql_real_escape_string($_GET['id'].' limit 1' );
//     echo $var;
?>
 <?php
// $num = 10;
// $c = 0;
// for($x = 10; $x >= 0; $x--) {
//     /* print spaces - you can figure this out yourself */
//     for($y = 0; $y <= 10; $y++) {
//         if($c >= $y){
//             echo "&nbsp;";
            
//         }else{
//             echo "*";
//         }
        
        
//     }
//      $c++;
//     echo "<br/>";
    
// }

?>

<!-- <a  data-card-width="383"  class="embedly-card" href="http://birdeatsbaby.bandcamp.com/album/bigger-teeth"></a>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script> -->
<!-- <iframe id = "player"></iframe> -->
<!-- <iframe style="border: 0; width: 350px; height: 470px;" src="http://bandcamp.com/EmbeddedPlayer/album=3575636560/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/transparent=true/" seamless><a href="http://birdeatsbaby.bandcamp.com/album/bigger-teeth">Bigger Teeth by Birdeatsbaby</a></iframe>

<iframe style="border: 0; width: 100%; height: 120px;" src="http://bandcamp.com/EmbeddedPlayer/album=3575636560/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/artwork=small/transparent=true/" seamless><a href="http://birdeatsbaby.bandcamp.com/album/bigger-teeth">Bigger Teeth by Birdeatsbaby</a></iframe> -->
<?php  $url = urlencode('http://birdeatsbaby.bandcamp.com/album/bigger-teeth');?>
<!-- <iframe class="embedly-embed" src="//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fbandcamp.com%2FEmbeddedPlayer%2Fv%3D2%2Falbum%3D1031923576%2Fsize%3Dlarge%2Flinkcol%3D0084B4%2Fnotracklist%3Dtrue%2Ftwittercard%3Dtrue%2F&url=<?php echo $url; ?>&image=http%3A%2F%2Ff1.bcbits.com%2Fimg%2Fa1820210198_2.jpg&key=internal&type=text%2Fhtml&schema=bandcamp" width="350" height="467" scrolling="no" frameborder="0" allowfullscreen></iframe> -->

<!-- 
<iframe class="embedly-embed" src="//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fbandcamp.com%2FEmbeddedPlayer%2Fv%3D2%2Falbum%3D1031923576%2Fsize%3Dlarge%2Flinkcol%3D0084B4%2Fnotracklist%3Dtrue%2Ftwittercard%3Dtrue%2F&url=<?php echo $url; ?>&image=http%3A%2F%2Ff1.bcbits.com%2Fimg%2Fa1820210198_2.jpg&key=internal&type=text%2Fhtml&schema=bandcamp" width="250" height="450" scrolling="no" frameborder="0" allowfullscreen></iframe> -->

<!-- <iframe src="http://docs.google.com/gview?url=http://dev.millioninone.com/school_competition/assets/uploads/submissions/text/SDD1.101.doc&embedded=true" style="width:600px; height:500px;" frameborder="0"></iframe> -->


<?php 
// $action = "decrypt";
// $string = "2rb8FNJQoUdhEdAQN5MRgXJ5ccBPiCtQciA/1Hn6CMI=";
// echo $a =  encrypt_decrypt($action,$string);
// function encrypt_decrypt($action, $string) {
//     $output = false;

//     $encrypt_method = "AES-256-CBC";
//     $secret_key = 'trygjkz8dsf0ak84uha7ghr';
//     $secret_iv = 'asdas345hghasd3e4';
//     // hash
//     $key = hash('sha256', $secret_key);
    
//     // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
//     $iv = substr(hash('sha256', $secret_iv), 0, 16);

//     if( $action == 'encrypt' ) {
//        echo  $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
//        // return base64_encode($output);
//     }
//     else if( $action == 'decrypt' ){    	
//     	echo openssl_decrypt($string, $encrypt_method, $key, 0, $iv);
//          //return openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
//     }
//     #return $output;
//   }

$b= test();
var_dump($b);

function test(){
  echo "test";
  $a = array("1","2","3");
  // if($a){
  //   echo "if";
  //   return $a;
  // }else{
  //   return false;
  // }
  return (bool)$a;
  //return $a;
}



  ?>
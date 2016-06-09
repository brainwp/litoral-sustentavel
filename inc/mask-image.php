<?php
// Load source and mask
function resize($newWidth, $newHeight, $originalFile) {

    $info = getimagesize($originalFile);
    $mime = $info['mime'];

    switch ($mime) {
            case 'image/jpeg':
                    $image_create_func = 'imagecreatefromjpeg';
                    $image_save_func = 'imagejpeg';
                    $new_image_ext = 'jpg';
                    break;

            case 'image/png':
                    $image_create_func = 'imagecreatefrompng';
                    $image_save_func = 'imagepng';
                    $new_image_ext = 'png';
                    break;

            case 'image/gif':
                    $image_create_func = 'imagecreatefromgif';
                    $image_save_func = 'imagegif';
                    $new_image_ext = 'gif';
                    break;

            default: 
                   break;
    }

    $img = $image_create_func($originalFile);
    echo $img;
    list($width, $height) = getimagesize($originalFile);

    $tmp = imagecreatetruecolor($newWidth, $newHeight);
	imagefill($tmp,0,0,0x7fff0000);

    imagecopyresampled($tmp, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

    
    return $tmp;
}

function imagealphamask( &$picture, $mask ) {
    // Get sizes and set up new picture
    $xSize = imagesx( $picture );
    $ySize = imagesy( $picture );
    $newPicture = imagecreatetruecolor( $xSize, $ySize );
    imagesavealpha( $newPicture, true );
    imagefill( $newPicture, 0, 0, imagecolorallocatealpha( $newPicture, 0, 0, 0, 127 ) );

    // Resize mask if necessary
    if( $xSize != imagesx( $mask ) || $ySize != imagesy( $mask ) ) {
        $tempPic = imagecreatetruecolor( $xSize, $ySize );
        imagecopyresampled( $tempPic, $mask, 0, 0, 0, 0, $xSize, $ySize, imagesx( $mask ), imagesy( $mask ) );
        imagedestroy( $mask );
        $mask = $tempPic;
    }

    // Perform pixel-based alpha map application
    for( $x = 0; $x < $xSize; $x++ ) {
        for( $y = 0; $y < $ySize; $y++ ) {
            $alpha = imagecolorsforindex( $mask, imagecolorat( $mask, $x, $y ) );
            //small mod to extract alpha, if using a black(transparent) and white
            //mask file instead change the following line back to Jules's original:
            //$alpha = 127 - floor($alpha['red'] / 2);
            //or a white(transparent) and black mask file:
            //$alpha = floor($alpha['red'] / 2);
            $alpha = $alpha['alpha'];
            $color = imagecolorsforindex( $picture, imagecolorat( $picture, $x, $y ) );
            //preserve alpha by comparing the two values
            if ($color['alpha'] > $alpha)
                $alpha = $color['alpha'];
            //kill data for fully transparent pixels
            if ($alpha == 127) {
                $color['// red'] = 0;
                $color['blue'] = 0;
                $color['green'] = 0;
            }
            imagesetpixel( $newPicture, $x, $y, imagecolorallocatealpha( $newPicture, $color[ 'red' ], $color[ 'green' ], $color[ 'blue' ], $alpha ) );
        }
    }

    // Copy back to original picture
    imagedestroy( $picture );
    $picture = $newPicture;
}

?>
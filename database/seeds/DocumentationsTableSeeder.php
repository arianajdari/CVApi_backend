<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('documentations')->insert([
    		[
    		'name' => 'adaptiveThreshold',
    		'description' => 'adaptiveThreshold - adaptive binary thresholding of an image',
    		'prototype' => 'public CVApi\CVApi adaptiveThreshold($type)',
    		'explanation' => 'This function receives 1 parameter which determines thresholding of an image',
    		'parameters' => '<ul><li>$type - type of thresholding</li></ul>',
    		'example' => '$image = CVApi::make(["image.jpg"])->adaptiveThreshold(1); <br>$image->save();',
    		'links' => "<ul><li><a class='callFunction' href='#'>threshold</a></li></ul>",
    		], [
    		'name' => 'bgrToGray',
    		'description' => 'bgrToGray - convert an BGR image to grayscale',
    		'prototype' => 'public CVApi\CVApi bgrToGray(void)',
    		'explanation' => 'This function receives a coloured BGR image (3-dimensional array) and converts it to grayscale version',
    		'parameters' => '<ul><li>void</li></ul>',
    		'example' => '$image = CVApi::make("image.jpg")->bgrToGray(); <br>$image->save();',
    		'links' => "<ul>
    			<li><a class='callFunction' href='#'>bgrToHsv</a></li>
    			<li><a class='callFunction' href='#'>bgrToRgb</a></li>
    			<li><a class='callFunction' href='#'>grayscale</a></li>
    			<li><a class='callFunction' href='#'>grayToBgr</a></li>
    			<li><a class='callFunction' href='#'>grayToRgb</a></li>
    			<li><a class='callFunction' href='#'>hsvToBgr</a></li>
    			<li><a class='callFunction' href='#'>hsvToRgb</a></li>
				<li><a class='callFunction' href='#'>rgbToBgr</a></li>
				<li><a class='callFunction' href='#'>rgbToGray</a></li><li><a class='callFunction' href='#'>rgbToHsv</a></li></ul>",
    		], [
    		'name' => 'bgrToHsv',
    		'description' => 'bgrToHsv - convert an BGR image to HSV',
    		'prototype' => 'public CVApi\CVApi bgrToHsv(void)',
    		'explanation' => 'This function receives a coloured BGR image (3-dimensional array) and converts it to HSV version',
    		'parameters' => '<ul><li>void</li></ul>',
    		'example' => '$image = CVApi::make("image.jpg")->bgrToHsv(); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>bgrToGray</a></li>
					<li><a class='callFunction' href='#'>bgrToRgb</a></li>
					<li><a class='callFunction' href='#'>grayscale</a></li>
					<li><a class='callFunction' href='#'>grayToBgr</a></li>
					<li><a class='callFunction' href='#'>grayToRgb</a></li>
					<li><a class='callFunction' href='#'>hsvToBgr</a></li>
					<li><a class='callFunction' href='#'>hsvToRgb</a></li>
					<li><a class='callFunction' href='#'>rgbToBgr</a></li>
					<li><a class='callFunction' href='#'>rgbToGray</a></li>
					<li><a class='callFunction' href='#'>rgbToHsv</a></li>
				</ul>",
    		], [
    		'name' => 'bgrToRgb',
    		'description' => 'bgrToRgb - convert an BGR image to RGB',
    		'prototype' => 'public CVApi\CVApi bgrToRgb(void)',
    		'explanation' => 'This function receives a coloured BGR image (3-dimensional array) and converts it to RGB version',
    		'parameters' => '<ul><li>void</li></ul>',
    		'example' => '$image = CVApi::make("image.jpg")->bgrToRgb(); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>bgrToGray</a></li>
					<li><a class='callFunction' href='#'>bgrToHsv</a></li>
					<li><a class='callFunction' href='#'>grayscale</a></li>
					<li><a class='callFunction' href='#'>grayToBgr</a></li>
					<li><a class='callFunction' href='#'>grayToRgb</a></li>
					<li><a class='callFunction' href='#'>hsvToBgr</a></li>
					<li><a class='callFunction' href='#'>hsvToRgb</a></li>
					<li><a class='callFunction' href='#'>rgbToBgr</a></li>
					<li><a class='callFunction' href='#'>rgbToGray</a></li>
					<li><a class='callFunction' href='#'>rgbToHsv</a></li>
				</ul>",
    		], [
    		'name' => 'bilateralBlur',
    		'description' => 'bilateralBlur - blurs an image',
    		'prototype' => 'public CVApi\CVApi bilateralBlur(void)',
    		'explanation' => 'This function blurs an image',
    		'parameters' => '<ul><li>void</li></ul>',
    		'example' => '$image = CVApi::make("image.jpg")->bgrToRgb(); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>blur</a></li>
					<li><a class='callFunction' href='#''>gaussianBlur</a></li>
					<li><a class='callFunction' href='#'>medianBlur</a></li>
					<li><a class='callFunction' href='#''>normalBlur</a></li>
					<li><a class='callFunction' href='#'>sharpen</a></li>
				</ul>",
    		], [
    		'name' => 'blackHat',
    		'description' => 'blackHat - perform blackHat on an image',
    		'prototype' => 'public CVApi\CVApi blackHat($kernel_size = 3)',
    		'explanation' => 'This function receives 1 parameter which perform blackHat on an image',
    		'parameters' => '<ul>
					<li>
						$kernel_size - size of the kernel
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->blackHat(3); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>dilate</a></li>
					<li><a class='callFunction' href='#'>erode</a></li>
					<li><a class='callFunction' href='#'>opening</a></li>
					<li><a class='callFunction' href='#'>closing</a></li>
					<li><a class='callFunction' href='#'>morphGradient</a></li>
					<li><a class='callFunction' href='#'>topHat</a></li>
				</ul>",
    		], [
    		'name' => 'blur',
    		'description' => 'blur - blurs an image',
    		'prototype' => 'public CVApi\CVApi blur($kernel_size)',
    		'explanation' => 'This function receives 1 parameter which specifies the size of the kernel',
    		'parameters' => '<ul>
					<li>
						$kernel_size - kernel size value	
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->blur(3); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>bilateralBlur</a></li>
					<li><a class='callFunction' href='#'>gaussianBlur</a></li>
					<li><a class='callFunction' href='#'>medianBlur</a></li>
					<li><a class='callFunction' href='#'>normalBlur</a></li>
					<li><a class='callFunction' href='#'>sharpen</a></li>
				</ul>",
    		], [
    		'name' => 'brightness',
    		'description' => 'brightness - brighten an image',
    		'prototype' => 'public CVApi\CVApi brightness($value)',
    		'explanation' => 'This function receives 1 parameter which brighten an image',
    		'parameters' => '<ul>
					<li>
						$value - brightness value (0 - 255)	
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->brightness(230); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#''>darken</a></li>
				</ul>",
    		], [
    		'name' => 'closing',
    		'description' => 'closing - perform erosion followed by dilation on an image',
    		'prototype' => 'public CVApi\CVApi closing($kernel_size = 3)',
    		'explanation' => 'This function receives 1 parameter which performs closing on an image',
    		'parameters' => '<ul>
					<li>
						$kernel_size - size of the kernel
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->closing(3); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>dilate</a></li>
					<li><a class='callFunction' href='#'>erode</a></li>
					<li><a class='callFunction' href='#'>opening</a></li>
					<li><a class='callFunction' href='#'>morphGradient</a></li>
					<li><a class='callFunction' href='#'>blackHat</a></li>
					<li><a class='callFunction' href='#'>topHat</a></li>
				</ul>",
    		], [
    		'name' => 'crop',
    		'description' => 'crop - crops an image',
    		'prototype' => 'public CVApi\CVApi crop($y1, $y2, $x1, $x2)',
    		'explanation' => 'This function receives 4 parameters which crops an image',
    		'parameters' => '<ul>
					<li>
						$y1 - first point\'s y coordinate	
					</li>
					<li>
						$y2 - second point\'s y coordinate
					</li>
					<li>
						$x1 - first point\'s x coordinate
					</li>
					<li>
						$x2 - second point\'s x coordinate
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->crop(200, 450, 200, 450); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>pyrDown</a></li>
					<li><a class='callFunction' href='#'>pyrUp</a></li>
					<li><a class='callFunction' href='#'>enlarge</a></li>
					<li><a class='callFunction' href='#'>reduce</a></li>
					<li><a class='callFunction' href='#'>resize</a></li>
					<li><a class='callFunction' href='#'>rotate</a></li>
					<li><a class='callFunction' href='#'>translate</a></li>
					<li><a class='callFunction' href='#'>transpose</a></li>
				</ul>",
    		], [
    		'name' => 'darken',
    		'description' => 'darken - darkens an image',
    		'prototype' => 'public CVApi\CVApi darken($value)',
    		'explanation' => 'This function receives 1 parameter which darkens an image',
    		'parameters' => '<ul>
					<li>
						$value - darkness value (0 - 255)	
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->darken(200); <br>$image->save()',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>brightness</a></li>
				</ul>",
    		], [
    		'name' => 'dilate',
    		'description' => 'dilate - perform dilation on an image',
    		'prototype' => 'public CVApi\CVApi dilate($kernel_size = 3, $iterations = 1)',
    		'explanation' => 'This function receives 2 parameters which perform dilation on an image',
    		'parameters' => '<ul>
					<li>
						$kernel_size - size of the kernel
					</li>
					<li>
						$iterations - number of times that operation will be performed
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->dilate(3, 2); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>erode</a></li>
					<li><a class='callFunction' href='#'>opening</a></li>
					<li><a class='callFunction' href='#'>closing</a></li>
					<li><a class='callFunction' href='#'>morphGradient</a></li>
					<li><a class='callFunction' href='#'>blackHat</a></li>
					<li><a class='callFunction' href='#'>topHat</a></li>
				</ul>",
    		], [
    		'name' => 'enlarge',
    		'description' => 'enlarge - enlarge an image',
    		'prototype' => 'public CVApi\CVApi enlarge($fx, $fy, $interpolation)',
    		'explanation' => 'This function receives 3 parameters which enlarge an image (without skew)',
    		'parameters' => '<ul>
					<li>
						$fx - x-axis aspect-ratio	
					</li>
					<li>
						$fy - y-axis aspect-ratio
					</li>
					<li>
						$interpolation - interpolation method
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->enlarge(0.5, 0.5, 0); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>crop</a></li>
					<li><a class='callFunction' href='#'>pyrDown</a></li>
					<li><a class='callFunction' href='#'>pyrUp</a></li>
					<li><a class='callFunction' href='#'>reduce</a></li>
					<li><a class='callFunction' href='#'>resize</a></li>
					<li><a class='callFunction' href='#'>rotate</a></li>
					<li><a class='callFunction' href='#'>translate</a></li>
					<li><a class='callFunction' href='#'>transpose</a></li>
				</ul>",
    		], [
    		'name' => 'erode',
    		'description' => 'erode - performs erosion an image',
    		'prototype' => 'public CVApi\CVApi erode($kernel_size = 3, $iterations = 1)',
    		'explanation' => 'This function receives 2 parameters which perform erosion on an image',
    		'parameters' => '<ul>
					<li>
						$kernel_size - size of the kernel
					</li>
					<li>
						$iterations - number of times that operation will be performed
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->erode(3, 2); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>dilate</a></li>
					<li><a class='callFunction' href='#'>opening</a></li>
					<li><a class='callFunction' href='#'>closing</a></li>
					<li><a class='callFunction' href='#'>morphGradient</a></li>
					<li><a class='callFunction' href='#'>blackHat</a></li>
					<li><a class='callFunction' href='#'>topHat</a></li>
				</ul>",
    		], [
    		'name' => 'gaussianBlur',
    		'description' => 'gaussianBlur - blurs an image',
    		'prototype' => 'public CVApi\CVApi gaussianBlur($kernel_size)',
    		'explanation' => 'This function receives 1 parameter which specifies the size of the kernel',
    		'parameters' => '<ul>
					<li>
						$kernel_size - kernel size value	
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->gaussianBlur(3); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>bilateralBlur</a></li>
					<li><a class='callFunction' href='#'>blur</a></li>
					<li><a class='callFunction' href='#'>medianBlur</a></li>
					<li><a class='callFunction' href='#'>normalBlur</a></li>
					<li><a class='callFunction' href='#'>sharpen</a></li>
				</ul>",
    		], [
    		'name' => 'grayscale',
    		'description' => 'grayscale - convert an image to grayscale',
    		'prototype' => 'public CVApi\CVApi grayscale(void)',
    		'explanation' => 'This function receives a coloured image (3-dimensional array) and converts it to grayscale version',
    		'parameters' => '<ul>
					<li>
						void	
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->grayscale(); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>bgrToGray</a></li>
					<li><a class='callFunction' href='#'>bgrToHsv</a></li>
					<li><a class='callFunction' href='#'>bgrToRgb</a></li>
					<li><a class='callFunction' href='#'>grayToBgr</a></li>
					<li><a class='callFunction' href='#'>grayToRgb</a></li>
					<li><a class='callFunction' href='#'>hsvToBgr</a></li>
					<li><a class='callFunction' href='#'>hsvToRgb</a></li>
					<li><a class='callFunction' href='#'>rgbToBgr</a></li>
					<li><a class='callFunction' href='#'>rgbToGray</a></li>
					<li><a class='callFunction' href='#'>rgbToHsv</a></li>
				</ul>",
    		], [
    		'name' => 'grayToBgr',
    		'description' => 'grayToBgr - convert a grayscale image to BGR',
    		'prototype' => 'public CVApi\CVApi grayToBgr(void)',
    		'explanation' => 'This function receives a grayscale image (2-dimensional array) and converts it to BGR version',
    		'parameters' => '<ul>
					<li>
						void	
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->grayToBgr(); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>bgrToGray</a></li>
					<li><a class='callFunction' href='#'>bgrToHsv</a></li>
					<li><a class='callFunction' href='#'>bgrToRgb</a></li>
					<li><a class='callFunction' href='#'>grayscale</a></li>
					<li><a class='callFunction' href='#'>grayToRgb</a></li>
					<li><a class='callFunction' href='#'>hsvToBgr</a></li>
					<li><a class='callFunction' href='#'>hsvToRgb</a></li>
					<li><a class='callFunction' href='#'>rgbToBgr</a></li>
					<li><a class='callFunction' href='#'>rgbToGray</a></li>
					<li><a class='callFunction' href='#'>rgbToHsv</a></li>
				</ul>",
    		], [
    		'name' => 'grayToRgb',
    		'description' => 'grayToRgb - convert a grayscale image to RGB',
    		'prototype' => 'public CVApi\CVApi grayToRgb(void)',
    		'explanation' => 'This function receives a grayscale image (2-dimensional array) and converts it to RGB version',
    		'parameters' => '<ul>
					<li>
						void	
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->grayToRgb(); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>bgrToGray</a></li>
					<li><a class='callFunction' href='#'>bgrToHsv</a></li>
					<li><a class='callFunction' href='#'>bgrToRgb</a></li>
					<li><a class='callFunction' href='#'>grayscale</a></li>
					<li><a class='callFunction' href='#'>grayToBgr</a></li>
					<li><a class='callFunction' href='#'>hsvToBgr</a></li>
					<li><a class='callFunction' href='#'>hsvToRgb</a></li>
					<li><a class='callFunction' href='#'>rgbToBgr</a></li>
					<li><a class='callFunction' href='#'>rgbToGray</a></li>
					<li><a class='callFunction' href='#'>rgbToHsv</a></li>
				</ul>",
    		], [
    		'name' => 'histogram',
    		'description' => 'histogram - extract a histogram of the image',
    		'prototype' => 'public CVApi\CVApi histogram($bean_size = 256, $range_min = 0, $range_max = 256)',
    		'explanation' => 'This function receives 3 parameters and creates a histogram by plotting it as a graph',
    		'parameters' => '<ul>
					<li>
						$bean_size - makes binization of the colour values	
					</li>
					<li>
						$range_min - sets the minimum range of the colour channels
					</li>
					<li>
						$range_max - sets the maximum range of the colour channels
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->histogram(10, 100, 200); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>imageChannels</a></li>
				</ul>",
    		], [
    		'name' => 'hsvToBgr',
    		'description' => 'hsvToBgr - convert an HSV image to BGR',
    		'prototype' => 'public CVApi\CVApi hsvToBgr(void)',
    		'explanation' => 'This function receives a coloured HSV image (3-dimensional array) and converts it to BGR version',
    		'parameters' => '<ul>
					<li>
						void	
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->hsvToBgr(); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>bgrToGray</a></li>
					<li><a class='callFunction' href='#'>bgrToHsv</a></li>
					<li><a class='callFunction' href='#'>bgrToRgb</a></li>
					<li><a class='callFunction' href='#'>grayscale</a></li>
					<li><a class='callFunction' href='#'>grayToBgr</a></li>
					<li><a class='callFunction' href='#'>grayToRgb</a></li>
					<li><a class='callFunction' href='#'>hsvToRgb</a></li>
					<li><a class='callFunction' href='#'>rgbToBgr</a></li>
					<li><a class='callFunction' href='#'>rgbToGray</a></li>
					<li><a class='callFunction' href='#'>rgbToHsv</a></li>
				</ul>",
    		], [
    		'name' => 'hsvToRgb',
    		'description' => 'hsvToRgb - convert an HSV image to RGB',
    		'prototype' => 'public CVApi\CVApi hsvToRgb(void)',
    		'explanation' => 'This function receives a coloured HSV image (3-dimensional array) and converts it to RGB version',
    		'parameters' => '<ul>
					<li>
						void	
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->hsvToRgb(); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>bgrToGray</a></li>
					<li><a class='callFunction' href='#'>bgrToHsv</a></li>
					<li><a class='callFunction' href='#'>bgrToRgb</a></li>
					<li><a class='callFunction' href='#'>grayscale</a></li>
					<li><a class='callFunction' href='#'>grayToBgr</a></li>
					<li><a class='callFunction' href='#'>grayToRgb</a></li>
					<li><a class='callFunction' href='#'>hsvToBgr</a></li>
					<li><a class='callFunction' href='#'>rgbToBgr</a></li>
					<li><a class='callFunction' href='#'>rgbToGray</a></li>
					<li><a class='callFunction' href='#'>rgbToHsv</a></li>
				</ul>",
    		], [
    		'name' => 'imageChannels',
    		'description' => 'imageChannels - extract individual image channels.',
    		'prototype' => 'public CVApi\CVApi imageChannels($array = [\'B\', \'G\', \'R\'])',
    		'explanation' => 'This function receives an array containing image channels which are to be extracted',
    		'parameters' => '<ul>
					<li>
						$array - an array specifying which image channels to be extracted. \'B\' stands for blue, \'G\' for green and \'R\' for red.	
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->imageChannels([\'B\', \'G\', \'R\']); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>histogram</a></li>
				</ul>",
    		], [
    		'name' => 'medianBlur',
    		'description' => 'medianBlur - blurs an image',
    		'prototype' => 'public CVApi\CVApi medianBlur($size)',
    		'explanation' => 'This function receives 1 parameter which specifies the magnitude of the blur',
    		'parameters' => '<ul>
					<li>
						$size - magnitude of the blur	
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->medianBlur(3); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>bilateralBlur</a></li>
					<li><a class='callFunction' href='#'>blur</a></li>
					<li><a class='callFunction' href='#'>gaussianBlur</a></li>
					<li><a class='callFunction' href='#'>normalBlur</a></li>
					<li><a class='callFunction' href='#'>sharpen</a></li>
				</ul>",
    		], [
    		'name' => 'morphGradient',
    		'description' => 'morphGradient - perform morphGradient on an image',
    		'prototype' => 'public CVApi\CVApi morphGradient($kernel_size = 3)',
    		'explanation' => 'This function receives 1 parameter which perform morphGradient on an image',
    		'parameters' => '<ul>
					<li>
						$kernel_size - size of the kernel
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->morphGradient(3); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>dilate</a></li>
					<li><a class='callFunction' href='#'>erode</a></li>
					<li><a class='callFunction' href='#'>opening</a></li>
					<li><a class='callFunction' href='#'>closing</a></li>
					<li><a class='callFunction' href='#'>blackHat</a></li>
					<li><a class='callFunction' href='#'>topHat</a></li>
				</ul>",
    		], [
    		'name' => 'normalBlur',
    		'description' => 'normalBlur - blurs an image',
    		'prototype' => 'public CVApi\CVApi normalBlur($box_size)',
    		'explanation' => 'This function receives 1 parameter which specifies the size of the box',
    		'parameters' => '<ul>
					<li>
						$box_size - box size value	
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->normalBlur(3); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>bilateralBlur</a></li>
					<li><a class='callFunction' href='#'>blur</a></li>
					<li><a class='callFunction' href='#'>gaussianBlur</a></li>
					<li><a class='callFunction' href='#'>medianBlur</a></li>
					<li><a class='callFunction' href='#'>sharpen</a></li>
				</ul>",
    		], [
    		'name' => 'opening',
    		'description' => 'opening - perform dilation followed by erosion on an image',
    		'prototype' => 'public CVApi\CVApi opening($kernel_size = 3)',
    		'explanation' => 'This function receives 1 parameters which perform opening on an image',
    		'parameters' => '<ul>
					<li>
						$kernel_size - size of the kernel
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->opening(3); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>dilate</a></li>
					<li><a class='callFunction' href='#'>erode</a></li>
					<li><a class='callFunction' href='#'>closing</a></li>
					<li><a class='callFunction' href='#'>morphGradient</a></li>
					<li><a class='callFunction' href='#'>blackHat</a></li>
					<li><a class='callFunction' href='#'>topHat</a></li>
				</ul>",
    		], [
    		'name' => 'pyrDown',
    		'description' => 'pyrDown - perform gradual decrease in size of image',
    		'prototype' => 'public CVApi\CVApi pyrDown($times = 1)',
    		'explanation' => 'This function receives 1 parameter which performs pyrDown on an image',
    		'parameters' => '<ul>
					<li>
						$times - number of iterations
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->pyrDown(2); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>crop</a></li>
					<li><a class='callFunction' href='#'>pyrUp</a></li>
					<li><a class='callFunction' href='#'>enlarge</a></li>
					<li><a class='callFunction' href='#'>reduce</a></li>
					<li><a class='callFunction' href='#'>resize</a></li>
					<li><a class='callFunction' href='#'>rotate</a></li>
					<li><a class='callFunction' href='#'>translate</a></li>
					<li><a class='callFunction' href='#'>transpose</a></li>
				</ul>",
    		], [
    		'name' => 'pyrUp',
    		'description' => 'pyrUp - perform gradual increase in size of image',
    		'prototype' => 'public CVApi\CVApi pyrUp($times = 1)',
    		'explanation' => 'This function receives 1 parameter which performs pyrUp on an image',
    		'parameters' => '<ul>
					<li>
						$times - number of iterations
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->pyrUp(2); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>crop</a></li>
					<li><a class='callFunction' href='#'>pyrDown</a></li>
					<li><a class='callFunction' href='#'>enlarge</a></li>
					<li><a class='callFunction' href='#'>reduce</a></li>
					<li><a class='callFunction' href='#'>resize</a></li>
					<li><a class='callFunction' href='#'>rotate</a></li>
					<li><a class='callFunction' href='#'>translate</a></li>
					<li><a class='callFunction' href='#'>transpose</a></li>
				</ul>",
    		], [
    		'name' => 'reduce',
    		'description' => 'reduce - reduces an image',
    		'prototype' => 'public CVApi\CVApi reduce($fx, $fy)',
    		'explanation' => 'This function receives 2 parameters which reduces an image (without skew)',
    		'parameters' => '<ul>
					<li>
						$fx - x-axis aspect-ratio	
					</li>
					<li>
						$fy - y-axis aspect-ratio
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->reduce(0.5, 0.5); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>crop</a></li>
					<li><a class='callFunction' href='#'>pyrDown</a></li>
					<li><a class='callFunction' href='#'>pyrUp</a></li>
					<li><a class='callFunction' href='#'>enlarge</a></li>
					<li><a class='callFunction' href='#'>resize</a></li>
					<li><a class='callFunction' href='#'>rotate</a></li>
					<li><a class='callFunction' href='#'>translate</a></li>
					<li><a class='callFunction' href='#'>transpose</a></li>
				</ul>",
    		], [
    		'name' => 'resize',
    		'description' => 'resize - resize an image',
    		'prototype' => 'public CVApi\CVApi resize($x, $y, $interpolation)',
    		'explanation' => 'This function receives 3 parameters which resize an image (with skew)',
    		'parameters' => '<ul>
					<li>
						$x - width	
					</li>
					<li>
						$y - height
					</li>
					<li>
						$interpolation - interpolation method
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->resize(400, 350, 0); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>crop</a></li>
					<li><a class='callFunction' href='#'>pyrDown</a></li>
					<li><a class='callFunction' href='#'>pyrUp</a></li>
					<li><a class='callFunction' href='#'>enlarge</a></li>
					<li><a class='callFunction' href='#'>reduce</a></li>
					<li><a class='callFunction' href='#'>rotate</a></li>
					<li><a class='callFunction' href='#'>translate</a></li>
					<li><a class='callFunction' href='#'>transpose</a></li>
				</ul>",
    		], [
    		'name' => 'rgbToBgr',
    		'description' => 'rgbToBgr - convert an RGB image to BGR',
    		'prototype' => 'public CVApi\CVApi rgbToBgr(void)',
    		'explanation' => 'This function receives a coloured RGB image (3-dimensional array) and converts it to BGR version',
    		'parameters' => '<ul>
					<li>
						void	
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->rgbToBgr(); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>bgrToGray</a></li>
					<li><a class='callFunction' href='#'>bgrToHsv</a></li>
					<li><a class='callFunction' href='#'>bgrToRgb</a></li>
					<li><a class='callFunction' href='#'>grayscale</a></li>
					<li><a class='callFunction' href='#'>grayToBgr</a></li>
					<li><a class='callFunction' href='#'>grayToRgb</a></li>
					<li><a class='callFunction' href='#'>hsvToBgr</a></li>
					<li><a class='callFunction' href='#'>hsvToRgb</a></li>
					<li><a class='callFunction' href='#'>rgbToGray</a></li>
					<li><a class='callFunction' href='#'>rgbToHsv</a></li>
				</ul>",
    		], [
    		'name' => 'rgbToGray',
    		'description' => 'rgbToGray - convert an RGB image to grayscale',
    		'prototype' => 'public CVApi\CVApi rgbToGray(void)',
    		'explanation' => 'This function receives a coloured RGB image (3-dimensional array) and converts it to grayscale version',
    		'parameters' => '<ul>
					<li>
						void	
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->rgbToGray(); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>bgrToGray</a></li>
					<li><a class='callFunction' href='#'>bgrToHsv</a></li>
					<li><a class='callFunction' href='#'>bgrToRgb</a></li>
					<li><a class='callFunction' href='#'>grayscale</a></li>
					<li><a class='callFunction' href='#'>grayToBgr</a></li>
					<li><a class='callFunction' href='#'>grayToRgb</a></li>
					<li><a class='callFunction' href='#'>hsvToBgr</a></li>
					<li><a class='callFunction' href='#'>hsvToRgb</a></li>
					<li><a class='callFunction' href='#'>rgbToBgr</a></li>
					<li><a class='callFunction' href='#'>rgbToHsv</a></li>
				</ul>",
    		], [
    		'name' => 'rgbToHsv',
    		'description' => 'rgbToHsv - convert an RGB image to HSV',
    		'prototype' => 'public CVApi\CVApi rgbToHsv(void)',
    		'explanation' => 'This function receives a coloured RGB image (3-dimensional array) and converts it to HSV version',
    		'parameters' => '<ul>
					<li>
						void	
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->rgbToHsv(); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>bgrToGray</a></li>
					<li><a class='callFunction' href='#'>bgrToHsv</a></li>
					<li><a class='callFunction' href='#'>bgrToRgb</a></li>
					<li><a class='callFunction' href='#'>grayscale</a></li>
					<li><a class='callFunction' href='#'>grayToBgr</a></li>
					<li><a class='callFunction' href='#'>grayToRgb</a></li>
					<li><a class='callFunction' href='#'>hsvToBgr</a></li>
					<li><a class='callFunction' href='#'>hsvToRgb</a></li>
					<li><a class='callFunction' href='#'>rgbToBgr</a></li>
					<li><a class='callFunction' href='#'>rgbToGray</a></li>
				</ul>",
    		], [
    		'name' => 'rotate',
    		'description' => 'rotate - rotates an image',
    		'prototype' => 'public CVApi\CVApi rotate($x, $y, $angle)',
    		'explanation' => 'This function receives 3 parameters which rotate an image',
    		'parameters' => '<ul>
					<li>
						$x - x coordinate of the rotation center	
					</li>
					<li>
						$y - y coordinate of the rotation center
					</li>
					<li>
						$angle - the angle of the rotation
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->rotate(50, 50, 45); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>crop</a></li>
					<li><a class='callFunction' href='#'>pyrDown</a></li>
					<li><a class='callFunction' href='#'>pyrUp</a></li>
					<li><a class='callFunction' href='#'>enlarge</a></li>
					<li><a class='callFunction' href='#'>reduce</a></li>
					<li><a class='callFunction' href='#'>resize</a></li>
					<li><a class='callFunction' href='#'>translate</a></li>
					<li><a class='callFunction' href='#'>transpose</a></li>
				</ul>",
    		], [
    		'name' => 'sharpen',
    		'description' => 'sharpen - sharpens an image',
    		'prototype' => 'public CVApi\CVApi sharpen(void)',
    		'explanation' => 'This function sharpens an image',
    		'parameters' => '<ul>
					<li>
						void
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->sharpen(); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>bilateralBlur</a></li>
					<li><a class='callFunction' href='#'>blur</a></li>
					<li><a class='callFunction' href='#'>gaussianBlur</a></li>
					<li><a class='callFunction' href='#'>medianBlur</a></li>
					<li><a class='callFunction' href='#'>normalBlur</a></li>
				</ul>",
    		], [
    		'name' => 'threshold',
    		'description' => 'threshold - binary thresholding of an image',
    		'prototype' => 'public CVApi\CVApi threshold($min, $max, $type)',
    		'explanation' => 'This function receives 3 parameters which determine thresholding of an image',
    		'parameters' => '<ul>
					<li>
						$min - minimum value for thresholding	
					</li>
					<li>
						$max - maximum value for thresholding
					</li>
					<li>
						$type - type of thresholding
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->threshold(127, 255, 0); <br>$image->save();',
    		'links' => "<ul>
					<li>
						<a class='callFunction' href='#'>adaptiveThreshold</a>
					</li>
				</ul>",
    		], [
    		'name' => 'topHat',
    		'description' => 'topHat - perform topHat on an image',
    		'prototype' => 'public CVApi\CVApi topHat($kernel_size = 3)',
    		'explanation' => 'This function receives 1 parameter which performs topHat on an image',
    		'parameters' => '<ul>
					<li>
						$kernel_size - size of the kernel
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->topHat(3); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>dilate</a></li>
					<li><a class='callFunction' href='#'>erode</a></li>
					<li><a class='callFunction' href='#'>opening</a></li>
					<li><a class='callFunction' href='#'>closing</a></li>
					<li><a class='callFunction' href='#'>morphGradient</a></li>
					<li><a class='callFunction' href='#'>blackHat</a></li>
				</ul>",
    		], [
    		'name' => 'translate',
    		'description' => 'translate - translates an image',
    		'prototype' => 'public CVApi\CVApi translate($x, $y)',
    		'explanation' => 'This function receives 2 parameters which translates an image',
    		'parameters' => '<ul>
					<li>
						$x - translate according to x-axis	
					</li>
					<li>
						$y - translate according to y-axis
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->translate(50, 50); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>crop</a></li>
					<li><a class='callFunction' href='#'>pyrDown</a></li>
					<li><a class='callFunction' href='#'>pyrUp</a></li>
					<li><a class='callFunction' href='#'>enlarge</a></li>
					<li><a class='callFunction' href='#'>reduce</a></li>
					<li><a class='callFunction' href='#'>resize</a></li>
					<li><a class='callFunction' href='#'>rotate</a></li>
					<li><a class='callFunction' href='#'>transpose</a></li>
				</ul>",
    		], [
    		'name' => 'transpose',
    		'description' => 'transpose - gets a transpose of an image (90 degree rotation)',
    		'prototype' => 'public CVApi\CVApi transpose(void)',
    		'explanation' => 'This function transposes an image',
    		'parameters' => '<ul>
					<li>
						void
					</li>
				</ul>',
    		'example' => '$image = CVApi::make("image.jpg")->transpose(); <br>$image->save();',
    		'links' => "<ul>
					<li><a class='callFunction' href='#'>crop</a></li>
					<li><a class='callFunction' href='#'>pyrDown</a></li>
					<li><a class='callFunction' href='#'>pyrUp</a></li>
					<li><a class='callFunction' href='#'>enlarge</a></li>
					<li><a class='callFunction' href='#'>reduce</a></li>
					<li><a class='callFunction' href='#'>resize</a></li>
					<li><a class='callFunction' href='#'>rotate</a></li>
					<li><a class='callFunction' href='#'>translate</a></li>
				</ul>",
    		],
    	]);
    }
}

@extends('documentationmaster')


@section('content')

<div id="content">

		<div id="sidebar">
			<ul>
				<li><a href="{{ route('getDocumentation', ['id' => 1]) }}">adaptiveThreshold</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 2]) }}">bgrToGray</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 3]) }}">bgrToHsv</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 4]) }}">bgrToRgb</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 5]) }}">bilateralBlur</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 6]) }}">blackHat</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 7]) }}">blur</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 8]) }}">brightess</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 9]) }}">closing</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 10]) }}">crop</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 11]) }}">darken</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 12]) }}">dilate</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 13]) }}">enlarge</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 14]) }}">erode</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 15]) }}">gaussianBlur</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 16]) }}">grayscale</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 17]) }}">grayToBgr</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 18]) }}">grayToRgb</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 19]) }}">histogram</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 20]) }}">hsvToBgr</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 21]) }}">hsvToRgb</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 22]) }}">imageChannels</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 23]) }}">medianBlur</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 24]) }}">morphGradient</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 25]) }}">normalBlur</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 26]) }}">opening</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 27]) }}">pyrDown</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 28]) }}">pyrUp</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 29]) }}">reduce</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 30]) }}">resize</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 31]) }}">rgbToBgr</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 32]) }}">rbgToGray</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 33]) }}">rgbToHsv</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 34]) }}">rotate</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 35]) }}">sharpen</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 36]) }}">threshold</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 37]) }}">topHat</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 38]) }}">translate</a></li>
				<li><a href="{{ route('getDocumentation', ['id' => 39]) }}">transpose</a></li>
			</ul>
		</div>


		<div id="functions">
			<div id="description">
				<?php echo $data[0]->description;   ?> 
			</div>
			<div class="description">
				Description
			</div>
			<div id="prototype">
				<?php echo $data[0]->prototype;   ?> 
			</div>
			<div class="return">
				<?php echo $data[0]->explanation;   ?> 
			</div>
			<div class="description">
				Parameters
			</div>
			<div class="return_big">
				<?php echo $data[0]->parameters;   ?> 
			</div>
			<div class="description">
				Examples
			</div>
			<div id="example">
				<?php echo $data[0]->example;   ?> 
			</div>
			<div class="return_small">
				<?php echo $data[0]->links; ?>
			</div>
		</div>
	</div>
@endsection
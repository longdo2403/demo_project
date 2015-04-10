@extends('frontend.layouts.master')
@section('content')
<script type="text/javascript" src="{{asset('public/packages/utils/jwplayer/jwplayer.js')}}" ></script>
<script type="text/javascript">jwplayer.key="Tl/cGRKD5+mHxuBA9abJoeWYGnxLoRlF9Xt8VQHJS2nHMmlibF4GZ6FPp4Zk0206";</script>

<div id='player'></div>
<br>
<div id="groupBtn">
	<button class="btn btn-success" onclick="playVideo(0);">Part 1</button>
	<button class="btn btn-success" onclick="playVideo(1);">Part 2</button>
	<button class="btn btn-success" onclick="playVideo(2);">Part 3</button>
</div>
<br>
<div id="listEpisode">
    <div class="border-head">
        <h3>
            <strong class="color-blue">Always (2011) Episodes</strong>
        </h3>
    </div>
    <?php for ($i = 0; $i < 10; $i++): ?>
    <dl class="ele-item">
        <dd class="ele-item"><i class="fa fa-long-arrow-right text-primary"></i> <a href="{{route('watch', array('bouty-lady-123', '999'))}}">Hyde, Jekyll, Me Episode 20 FINAL</a></dd>
    </dl>
    <?php endfor; ?>
</div>
<script type='text/javascript'>
	jwplayer('player').setup({
		height: 400,
		width: 740,
		skin: 'bekle',

		playlist: [
			{
				image: "4.png",
				file: "http://content.jwplatform.com/videos/HkauGhRi-640.mp4",
				title: "Sintel Movie Trailer 123"
			},
			{
				image: "4.png",
				sources: [{ 
				  file: "http://vjs.zencdn.net/v/oceans.mp4"
				}],
				title: "Sintel Movie Trailer 2",
				tracks: [{
				  file: "http://vjs.zencdn.net/v/oceans.mp4"
				}]
			}
		]
	});
	function playVideo(index) {
		jwplayer().playlistItem(index);
	}
</script>
@stop
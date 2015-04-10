@extends('frontend.layouts.master')
@section('content')
<script type="text/javascript" src="{{asset('public/packages/utils/jwplayer/jwplayer.js')}}" ></script>
<script type="text/javascript">jwplayer.key="Tl/cGRKD5+mHxuBA9abJoeWYGnxLoRlF9Xt8VQHJS2nHMmlibF4GZ6FPp4Zk0206";</script>

<div id='player'></div>
<br>
<div id="groupBtn">
    <?php foreach ($listParts as $key=>$item): ?>
    <button class="btn btn-success" onclick="playVideo(<?= $key; ?>);">Part {{ $item->part_no; }}</button>
    <?php endforeach; ?>
    
</div>
<br>
<div id="listEpisode">
    <div class="border-head">
        <h3>
            <strong class="color-blue">{{$objMovie->title;}}</strong>
        </h3>
    </div>
    <?php foreach ($listEpisode as $item): ?>
    <dl class="ele-item">
        <dd class="ele-item">
            <i class="fa fa-long-arrow-right text-primary"></i>
            <a href="<?= route('watch', array($objMovie->friendly_title, $item->episode_id)) ?>">
                {{$objMovie->title;}} Episode {{$item->episode_id;}}
            </a> <?= ($current_ep == $item->episode_id) ? '<span class="label label-primary">Watching ..</span>' : '' ?>
        </dd>
    </dl>
    <?php endforeach; ?>
</div>
<script type='text/javascript'>
	jwplayer('player').setup({
		height: 400,
		width: 740,
		skin: 'bekle',
		playlist: [
		   	<?php foreach ($listParts as $item): ?>
		   	{
				file: window.atob("<?= base64_encode($item->link); ?>"),
			},
		   	<?php endforeach; ?>
		]
	});
	function playVideo(index) {
		jwplayer().playlistItem(index);
	}
</script>
@stop
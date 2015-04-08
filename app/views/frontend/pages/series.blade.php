@extends('frontend.layouts.master')
@section('content')
<div class="col-xs-8" id="box-content">
    <h3 style="margin-top:0px;"><strong class="text-orange">Always (2011)</strong></h3>
    <p><strong>Alternative Titles: </strong>Always, Only You, Ohjik Geudaeman, Only You (2011)</p>
    <p><strong>Cast: </strong>So Ji-sub, Han Hyo-joo, Yun Jong-Hwa, Kang Shin-Il, Park Cheol-Min, Jo Sung-Ha</p>
    <p><strong>Episodes: </strong>Finished</p>
    <p><strong>Category: </strong>Korean Drama Movies</p>
    <p><strong>Genres : </strong> Drama, Romance</p>
    <p><strong>Type: </strong>Movie</p>
    <p><strong>Release: </strong>2013</p>
    <p><strong>Status: </strong>Finished</p>
    <p><strong>Description : </strong>Cheol-Min (So Ji-Sub), a man with a dark, mysterious past, picks up a part-time night job as a parking lot attendant. He sits in the tiny pay booth in the parking lot and stares at the small television. A woman named Jung-Hwa (Han Hyo-Joo) walks into the booth. She offers something to Cheol-Min and sits next to him. Cheol-Min realizes the woman is blind and she is confusing him for the parking attendant who worked their previously. </p>
     
</div>
<div class="col-xs-4">
    <img class="thumbnail" alt="" src="http://placehold.it/210x300">
</div>

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

<div id="similarDramas">
    <div class="border-head">
        <h3>
            <strong class="color-blue">Smilar Dramas</strong>
        </h3>
    </div>
    <?php for ($i = 0; $i< 4; $i++): ?>
    <?php $a = htmlspecialchars('Set in the town of Furano in Hokkaido, Kita no Kunikara centers around the story of the Kuroita family.', ENT_QUOTES) ?>
    <a href="{{route('series', 'bouty-lady-23')}}" class="col-xs-3 drama-box popoverData" data-content="<?php echo htmlentities('<span class="text-danger">Cast: </span> Long Do, Luu Do ..... <br><span class="text-info">Description: </span> ' . $a .' <br> '); ?>"
    rel="popover" data-placement="top" data-original-title="Bouty Lady <?php echo $i; ?>" data-trigger="hover">
        <div class="thumbnail">
            <img src="http://placehold.it/170x180">
            <div class="caption">
                <h5 style="margin-top:0px;" class="text-center text-orange">Bouty Lady <?= $i ?></h5>
                <p style="margin: 0px; font-size:85%;"><strong class="text-purple">Genres</strong> <span class="text-concrete">Drama, Romance, Family</span></p>
            </div>
        </div>
    </a>
    <a href="#" class="col-xs-3 drama-box popoverData" data-content="Popover with data-trigger" rel="popover" data-placement="top" data-original-title="In The Room Large Large <?= $i ?>" data-trigger="hover">
        <div class="thumbnail">
            <img src="http://placehold.it/170x180">
            <div class="caption">
                <h5 style="margin-top:0px;" class="text-center text-orange">In The Room Large Large <?= $i ?></h5>
                <p style="margin: 0px; font-size:85%;"><strong class="text-purple">Genres</strong> <span class="text-concrete">Drama, Romance, Family</span></p>
            </div>
        </div>
    </a>
    <?php endfor; ?>
</div>
@stop
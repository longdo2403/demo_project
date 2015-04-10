@extends('frontend.layouts.master')
@section('content')
<div class="col-xs-8" id="box-content">
    <h3 style="margin-top:0px;"><strong class="text-orange">{{$objMovie->title;}}</strong></h3>
    <p><strong>Alternative Titles: </strong>{{$objMovie->alt_title;}}</p>
    <p><strong>Cast: </strong>{{$str_casts;}}</p>
    <p><strong>Episodes: </strong>{{$objMovie['relations']['status']->name;}}</p>
    <p><strong>Category: </strong>Korean Drama Movies</p>
    <p><strong>Genres : </strong> {{$str_genres;}}</p>
    <p><strong>Type: </strong>Movie</p>
    <p><strong>Release: </strong><?php echo date('Y', strtotime($objMovie->release)); ?></p>
    <p><strong>Status: </strong>{{$objMovie['relations']['status']->name;}}</p>
    <p><strong>Description : </strong>{{$objMovie->description;}}</p>
     
</div>
<div class="col-xs-4">
    <img width="210" height="300" class="thumbnail" alt="{{$objMovie->title;}}" src="<?= asset("public/packages/images/$objMovie->main_picture") ?>">
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
            <div class="caption" style="height: 90px;">
                <div style="height: 33px; ">
                    <h5 style="margin-top:0px;" class="text-center text-orange">Bouty Lady <?= $i ?></h5>
                </div>
                <div>
                    <p style="margin: 0px; font-size:85%;"><strong class="text-purple">Genres</strong> <span class="text-concrete">Drama, Romance, Family</span></p>
                </div>
                
            </div>
        </div>
    </a>
    <a href="#" class="col-xs-3 drama-box popoverData" data-content="Popover with data-trigger" rel="popover" data-placement="top" data-original-title="In The Room Large Large <?= $i ?>" data-trigger="hover">
        <div class="thumbnail">
            <img src="http://placehold.it/170x180">
            <div class="caption" style="height: 90px;">
                <div style="height: 33px; ">
                    <h5 style="margin-top:0px;" class="text-center text-orange">In The Room Large Large <?= $i ?></h5>
                </div>
                <div style="height: 25px; ">
                    <p style="margin: 0px; font-size:85%;"><strong class="text-purple">Genres</strong> <span class="text-concrete">Drama, Romance, Family</span></p>
                </div>
            </div>
        </div>
    </a>
    <?php endfor; ?>
</div>
@stop
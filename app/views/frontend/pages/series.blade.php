@extends('frontend.layouts.master')
@section('content')
<div class="col-xs-8" id="box-content">
    <h3 style="margin-top:0px;"><strong class="text-orange">{{$objMovie->title;}}</strong></h3>
    <p><strong>Alternative Titles: </strong>{{$objMovie->alt_title;}}</p>
    <p><strong>Cast: </strong>{{$str_casts;}}</p>
    <p><strong>Episodes: </strong>{{$objMovie['relations']['status']->name;}}</p>
    <p><strong>Category: </strong>Korean Drama Movies</p>
    <p><strong>Genres : </strong> {{$str_genres;}}</p>
    <p><strong>Type: </strong>{{$objMovie['relations']['type']->type_name}}</p>
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
    <?php foreach ($listEpisode as $item): ?>
    <dl class="ele-item">
        <dd class="ele-item"><i class="fa fa-long-arrow-right text-primary"></i> <a href="<?= route('watch', array($objMovie->friendly_title, $item->episode_id)) ?>">{{$objMovie->title;}} Episode {{$item->episode_id;}}</a></dd>
    </dl>
    <?php endforeach; ?>
</div>

<div id="similarDramas">
    <div class="border-head">
        <h3>
            <strong class="color-blue">Smilar Dramas</strong>
        </h3>
    </div>
    
    <?php if (!$listRelativeMovie->isEmpty()): ?>
        <?php foreach ($listRelativeMovie as $item): ?>
        <?php $description = htmlspecialchars($item->description, ENT_QUOTES); ?>
        <a href="{{route('series', $item->friendly_title)}}" class="col-xs-3 drama-box popoverData" data-content="
        <?php echo htmlentities(
            '<span class="text-danger">Status: </span>' . $item['relations']['status']->name . '<br>
             <span class="text-danger">Cast: </span> ' . FrontHelper::generateCastString($item->cast_ids, $arrCast) . ' ... <br>
             <span class="text-info">Description: </span> ' . str_limit($description, $limit = 150, $end = '...') .' <br> '); ?>"
        rel="popover" data-placement="top" data-original-title="{{{$item->title}}}" data-trigger="hover">
            <div class="thumbnail" style="height: 270px;">
                <img class="boxImgMovie" src="<?= asset("public/packages/images/$item->main_picture") ?>" title="{{$item->title}}" alt="{{$item->title}}">
                <div class="caption">
                    <div style="height: 33px; ">
                        <h5 style="margin-top:0px;" class="text-center text-orange">{{str_limit($item->title, 30, '...')}}</h5>
                    </div>
                    <div style="height: 25px; ">
                        <p style="margin: 0px; font-size:85%;"><strong class="text-purple">Genres</strong> <span class="text-concrete"><?= str_limit(FrontHelper::generateGenresString($item->genre_ids, $arrGenres), 35, '...') ?></span></p>
                    </div>
                </div>
            </div>
        </a>
        
        <?php endforeach; ?>
        <span class="clearfix"></span>
    <?php else: ?>
    <p class="alert alert-warning">The content is empty !!</p>
    <?php endif; ?>
    <script>
    $(document).ready(function(){
        $(".popoverData").popover({
        	html : true,
        	content: function() {
        		return $('#popover_content_wrapper').html();
            }
        });
    })
    </script>
</div>
@stop
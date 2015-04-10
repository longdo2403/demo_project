@extends('frontend.layouts.master')
@section('content')
    <?php if (!$listByCast->isEmpty()): ?>
        <?php foreach ($listByCast as $item): ?>
        <div class="col-xs-8" id="box-content">
		    <h3 style="margin-top:0px;"><strong class="text-orange">{{$item->title;}}</strong></h3>
		    <p><strong>Alternative Titles: </strong>{{$item->alt_title;}}</p>
		    <p><strong>Cast: {{FrontHelper::generateCastString($item->cast_ids, $arrCast)}}</strong></p>
		    <p><strong>Episodes: </strong>{{$item['relations']['status']->name;}}</p>
		    <p><strong>Genres : </strong>{{FrontHelper::generateGenresString($item->genre_ids, $arrGenres, true)}}</p>
		    <p><strong>Category: </strong>{{$item['relations']['category']->name}}</p>
		    <p><strong>Type: </strong>{{$item['relations']['type']->type_name}}</p>
		    <p><strong>Release: </strong><?php echo date('Y', strtotime($item->release)); ?></p>
		    <p><strong>Status: </strong>{{$item['relations']['status']->name;}}</p>
		    <p><strong>Description : </strong>{{$item->description;}}</p>
		</div>
		
		<div class="col-xs-4">
		    <img width="210" height="300" class="thumbnail" title="{{$item->title;}}" alt="{{$item->title;}}" src="<?= asset("public/packages/images/$item->main_picture") ?>">
		</div>
		
		<span class="clearfix"></span>
        <?php endforeach; ?>
        <nav class="text-center ">
          <?php echo $listByCast->links(); ?>
        </nav>
    <?php else: ?>
    <p class="alert alert-warning">The content is empty !!</p>
    <?php endif; ?>
@stop
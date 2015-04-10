<div class="panel panel-default sideBox">
	<div class="panel-heading">
		<strong class="color-blue">Browse by Genre</strong>
	</div>
	<div class="list-group">
	<a class="list-group-item <?= ($track == 'all') ? 'active' : '' ?>" href="{{route('index.genres', array('all')) }}"><i class="fa fa-caret-right text-success"></i>&nbsp;&nbsp;All</a>
	<?php foreach ($listGenre as $item): ?>
		
		<a class="list-group-item <?= ($track == $item->friendly_name) ? 'active' : '' ?>" href="{{route('index.genres', array($item->friendly_name))}}">
		  <i class="fa fa-caret-right"></i>&nbsp;&nbsp;<?php echo $item->name; ?>
	  </a>
	<?php endforeach; ?>
	</div>
</div>

<div class="panel panel-default sideBox">
	<div class="panel-heading">
		<strong class="color-blue">Popular Movies</strong>
	</div>
	<div class="bodyBox">
	    <?php foreach ($listPopular as $item): ?>
	    <ul class="media-list sidebar-list">
	      <li class="media">
	        <div class="media-left">
	          <a href="{{route('series', $item->friendly_title)}}" title="{{$item->title;}}">
	            <img width="60" height="85" class="media-object" src="<?= asset("public/packages/images/$item->main_picture") ?>" title="{{$item->title}}" alt="{{$item->title}}">
	          </a>
	        </div>
	        <div class="media-body">
	          <strong class="media-heading">{{str_limit($item->title, 60, '...')}}</strong><br>
	          <span>Watched {{$item->watched}} times.</span><br>
	          <a href="{{route('series', $item->friendly_title)}}" title="See all episodes {{$item->title;}}" class="btn btn-success btn-xs">See episodes</a>
	        </div>
	      </li>
	    </ul>
	    <?php endforeach; ?>
	</div>
</div>


<div class="panel panel-default sideBox">
	<div class="panel-heading">
        <strong class="color-blue">Newly Added</strong>
	</div>
	<div class="bodyBox">
	    <?php foreach ($listNewlyAdded as $item): ?>
	    <ul class="media-list sidebar-list">
	      <li class="media">
	        <div class="media-left">
	          <a href="{{route('series', $item->friendly_title)}}" title="{{$item->title;}}">
	            <img width="60" height="85" class="media-object" src="<?= asset("public/packages/images/$item->main_picture") ?>" title="{{$item->title}}" alt="{{$item->title}}">
	          </a>
	        </div>
	        <div class="media-body">
	          <strong class="media-heading">{{str_limit($item->title, 60, '...')}}</strong><br>
	          <span>Watched {{$item->watched}} times.</span><br>
	          <a href="{{route('series', $item->friendly_title)}}" title="See all episodes {{$item->title;}}" class="btn btn-success btn-xs">See episodes</a>
	        </div>
	      </li>
	    </ul>
	    <?php endforeach; ?>
	</div>
</div>
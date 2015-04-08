@extends('frontend.layouts.master')
@section('content')
<div id="list-items">
    <?php for ($i = 0; $i<7; $i++): ?>
    <dl class="ele-item">
      <dt>
        <i class="fa fa-folder-open-o"></i> <span class="text-success">Hyde, Jekyll, Me </span><span class="btn btn-xs btn-danger">HOT</span>
        <p style="float:right;font-weight:normal;">23 March 2015</p>
      </dt>
      
      <dd class="ele-item"><i class="fa fa-long-arrow-right text-primary"></i> Hyde, Jekyll, Me Episode 20 FINAL</dd>
      <dd class="ele-item"><i class="fa fa-long-arrow-right text-primary"></i> Hyde, Jekyll, Me Episode 19</dd>
      <dd class="ele-item"><i class="fa fa-long-arrow-right text-primary"></i> Hyde, Jekyll, Me Episode 18</dd>
    </dl>
    
    <dl class="ele-item">
      <dt>
        <i class="fa fa-folder-open-o"></i> <span class="text-success">Hyde, Jekyll, Me </span><span class="btn btn-xs btn-info">NEW</span>
        <p style="float:right;font-weight:normal;">23 March 2015</p>
      </dt>
      
      <dd class="ele-item"><i class="fa fa-long-arrow-right text-primary"></i> Hyde, Jekyll, Me Episode 20 FINAL</dd>
      <dd class="ele-item"><i class="fa fa-long-arrow-right text-primary"></i> Hyde, Jekyll, Me Episode 19</dd>
      <dd class="ele-item"><i class="fa fa-long-arrow-right text-primary"></i> Hyde, Jekyll, Me Episode 18</dd>
    </dl>
    
    <dl class="ele-item">
      <dt>
        <i class="fa fa-folder-open-o"></i> <span class="text-success">Hyde, Jekyll, Me </span><span class="btn btn-xs btn-success">OK</span>
        <p style="float:right;font-weight:normal;">23 March 2015</p>
      </dt>
      
      <dd class="ele-item"><i class="fa fa-long-arrow-right text-primary"></i> Hyde, Jekyll, Me Episode 20 FINAL</dd>
      <dd class="ele-item"><i class="fa fa-long-arrow-right text-primary"></i> Hyde, Jekyll, Me Episode 19</dd>
      <dd class="ele-item"><i class="fa fa-long-arrow-right text-primary"></i> Hyde, Jekyll, Me Episode 18</dd>
    </dl>
    <?php endfor;?>
    <div class="text-center btn-home">
        <a href="{{route('on-going')}}" class="btn btn-outline">View All Daily Update</a>
    </div>
</div>
@stop
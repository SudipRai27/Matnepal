<?php
	$blocks = Modules\Blocks\Entities\Blocks::orderBy('created_at','DESC')
											->where('show_in_frontend', 'yes')
											->take(3)
											->get();

?>

<!--blocks-->
<section id="review">
    <div class="review">
        <div class="container">
            <div class="row">
                <!-- Boxes de Acoes -->
                @foreach($blocks as $index => $d)
                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="box">
                        <div class="icon">
                            <div class="info">
                                <h3 class="title">
                                	{{$d->title}}
                                    <hr>
                                </h3>
                                <p>
                                    {!! substr($d->description , 0 ,500) !!} {{ strlen($d->description )>500 ? "..." : "" }}
                                </p>
                                {{--<div class="more">
                                    <a href="#" title="Title Link">
                                        Read More <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                                --}}
                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>
                @endforeach                            
            </div>
        </div>
    </div>
</section>
<!--blocks-->
<div class="tab-pane fade" id="c-tab2-opt1-2">
    <div class="c-tab-pane">
        <div class="c-content-box c-size-md" style="padding: 0;">
	<div class="container">
		<!-- Begin: Testimonals 1 component -->
		<div class="c-content-team-1-slider" data-slider="owl" data-items="3">
			<div class="row">
                @foreach($coaches as $coach)
    				<div class="col-md-3 col-sm-6">
    					<div class="c-content-person-1 c-option-2">
    			  			<div class="c-caption c-content-overlay">
    			  				<img class="c-overlay-object img-responsive" src="{{\Storage::url($coach->picture)}}" alt="">
    			  			</div>
    			  			<div class="c-body">
    				  			<div class="c-head">
    				  				<div class="c-name c-font-uppercase c-font-bold">
                                        {{$coach->name}}
                                    </div>
    				  			</div>
								<p>
    					  		    Tel. {{$coach->phone}}
    			                </p>
    				  			<div style="white-space: pre-wrap">{{$coach->description}}</div>
    					  	
    		                </div>
    	                </div>
    				</div>
                @endforeach

	        <!-- End-->
	    </div>
	    <!-- End-->
	</div>
</div><!-- END: CONTENT/MISC/TEAM-3 -->

		<!-- END: PAGE CONTENT -->
	</div>
    </div>
</div>

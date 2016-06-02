@extends('layouts.app')

@section('htmlheader_title')
	Dashboard
@endsection


@section('main-content')
	<section>
		<div class="row">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title"><button type="button" autocomplete="off" id="startMinotor" data-loading-text="启动监测中..." class="btn btn-primary">启动实时监测</button>
						<a href="{{ url('') }}"  class="btn btn-info">分析视频</a></h3>
				</div>
				<div class="box-body">
					<div class="col-lg-12  connectedSortable">
						<div class="row">
							<div class="col-lg-6">
								<canvas id="timePeople"></canvas>
							</div>
							<div class="col-lg-6">
								<canvas id="sexPeople"></canvas>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-lg-6">
								<canvas id="agePeople"></canvas>
							</div>
							<div class="col-lg-6">
								<canvas id="exaPeople"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@extends('layouts.app')

@section('htmlheader_title')
    Dashboard
@endsection


@section('main-content')
    <section>
        <div class="row">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        <button type="button" autocomplete="off" id="startMinotor" data-loading-text="启动监测中..."
                                class="btn btn-primary">启动实时监测
                        </button>
                        <a href="{{ url('') }}" class="btn btn-info">分析视频</a></h3>
                </div>
                <div class="box-body">
                    <div class="col-lg-12  connectedSortable">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">时段人数图</h3>
                                        <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="chart">
                                            <canvas id="timePeople" width="400px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3">
                                <btton class="btn btn-default">第一区域</btton>
                            </div>
                            <div class="col-lg-3">
                                <btton class="btn btn-success">第二区域</btton>
                            </div>
                            <div class="col-lg-3">
                                <btton class="btn btn-info">第三区域</btton>
                            </div>
                            <div class="col-lg-3">
                                <btton class="btn btn-danger">第四区域</btton>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box box-info">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">注视时长图</h3>

                                        <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="chart">
                                            <canvas id="seeTimePeople"></canvas>                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="box box-warning">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">微笑分布图</h3>

                                        <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="chart">
                                            <canvas id="smilePeople"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="row">
                                <div class="col-lg-2 col-lg-offset-2">
                                    <btton class="btn btn-default">1-10</btton>
                                </div>
                                <div class="col-lg-2">
                                    <btton class="btn btn-success">11-20</btton>
                                </div>
                                <div class="col-lg-2">
                                    <btton class="btn btn-info">21-30</btton>
                                </div>
                                <div class="col-lg-2">
                                    <btton class="btn btn-danger">>30</btton>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="box box-danger">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">年龄分布图</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="chart">
                                                <canvas id="agePeople"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="box box-success">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">性别分布图</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="chart">
                                                <canvas id="sexPeople"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

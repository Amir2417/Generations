@extends('home')
@section('admin')
<div class="content">
    <div class="row">
      <div class="col-xl-3 col-sm-6">
        <div class="card card-mini mb-4">
          <div class="card-body">
            <h2 class="mb-1">250</h2>
            <p>Total Members</p>
            <div class="chartjs-wrapper">
              <canvas id="barChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card card-mini  mb-4">
          <div class="card-body">
            <h2 class="mb-1">80</h2>
            <p>Dead Members</p>
            <div class="chartjs-wrapper">
              <canvas id="dual-line"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card card-mini mb-4">
          <div class="card-body">
            <h2 class="mb-1">170</h2>
            <p>Alive Members</p>
            <div class="chartjs-wrapper">
              <canvas id="area-chart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card card-mini mb-4">
          <div class="card-body">
            <h2 class="mb-1">45</h2>
            <p>Childs</p>
            <div class="chartjs-wrapper">
              <canvas id="line"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-xl-8 col-md-12">
            <!-- Sales Graph -->
            <div class="card card-default">
            <div class="card-header">
                <h2>Site Visits</h2>
            </div>
            <div class="card-body">
                <canvas id="linechart" class="chartjs"></canvas>
            </div>
            <div class="card-footer d-flex flex-wrap bg-white p-0">
                <div class="col-6 px-0">
                <div class="text-center p-4">
                    <h4>455</h4>
                    <p class="mt-2">Total Visit of this year</p>
                </div>
                </div>
                <div class="col-6 px-0">
                <div class="text-center p-4 border-left">
                    <h4>150</h4>
                    <p class="mt-2">Total Work of this year</p>
                </div>
                </div>
            </div>
            </div>

        </div>
        <div class="col-xl-4 col-md-12">

            <!-- Doughnut Chart -->
            <div class="card card-default">
            <div class="card-header justify-content-center">
                <h2>Sites Overview</h2>
            </div>
            <div class="card-body" >
                <canvas id="doChart" ></canvas>
            </div>
            <a href="#" class="pb-5 d-block text-center text-muted"><i class="mdi mdi-download mr-2"></i> Download Sites report</a>
            <div class="card-footer d-flex flex-wrap bg-white p-0">
                <div class="col-6">
                <div class="py-4 px-4">
                    <ul class="d-flex flex-column justify-content-between">
                    <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #4c84ff"></i>Order Completed</li>
                    <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #80e1c1 "></i>Order Unpaid</li>
                    </ul>
                </div>
                </div>
                <div class="col-6 border-left">
                <div class="py-4 px-4 ">
                    <ul class="d-flex flex-column justify-content-between">
                    <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #8061ef"></i>Order Pending</li>
                    <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #ffa128"></i>Order Canceled</li>
                    </ul>
                </div>
                </div>
            </div>
            </div>

        </div>
    </div>
</div>
@endsection

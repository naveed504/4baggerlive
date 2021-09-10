@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-xl-3 col-md-3">
          <div class="card card__one--wrapper text-white mb-4">
            <div class="card-body">
              <div class="flex__wrapper-two">
                <div class="float-left">
                  <i class="fas fa-users team_box1"></i>
                </div>
                <div>
                  <p class="card-label-one">Team</p>
                  <h3 class="card-heading-one">1000</h3>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-3">
          <div class="card card__two--wrapper text-white mb-4">
            <div class="card-body">
              <div class="flex__wrapper-two">
              <div class="float-left">

                <i class="fas fa-football-ball team_box1"></i>
                </div>
                <div>
                  <p class="card-label-one">Player</p>
                  <h3 class="card-heading-one">1000</h3>
                </div>

              </div>
            </div>
          </div>
        </div>
         <div class="col-xl-3 col-md-3">
          <div class="card card__three--wrapper text-white mb-4">
            <div class="card-body">
              <div class="flex__wrapper-two">
              <div class="float-left">

                  <i class="far fa-calendar-alt team_box1"></i>
                </div>
                <div>
                  <p class="card-label-one">Schedule</p>
                  <h3 class="card-heading-one">3343</h3>
                </div>

              </div>
            </div>

          </div>
        </div>
        <div class="col-xl-3 col-md-3">
          <div class="card card__four--wrapper text-white mb-4">
            <div class="card-body">
              <div class="flex__wrapper-two">
              <div class="float-left">

                 <i class="far fa-edit team_box1"></i>
                </div>
                <div>
                  <p class="card-label-one">  Register   </p>
                  <h3 class="card-heading-one">3343</h3>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>

    </div>


  </div>

    <div class="col-md-12">
     <div class="row">

    <div class="col-xl-6 col-md-6 p-0">
        <div class="graph__wrapper-width">
        <h2 class="main-right-heading">Team parformance</h2>
          <img
            class="img-fluid"
            src="{{ asset('admin/assets/img/graph.jpg') }}"
            alt=""
          />
        </div>

      </div>

      <div class="col-md-6">
      <div class="sidebar--box h-100">
         <h2 class="main-right-heading">Team Position Avg</h2>
        <img
          class="img-fluid"
          src="{{ asset('admin/assets/img/graph4.png') }}"
          alt=""
        />

      </div>
    </div>

      </div>


  </div>






  <div class="card mb-4">

    <div class="card-body">
      <div class="table-responsive">
        <table
          class="table"
          id="dataTable"
          width="100%"
          cellspacing="0"
        >
          <thead>
            <tr>
              <th class="table__border--none">Team Member</th>
              <th class="table__border--none">Team </th>
              <th align="center" class="table__border--none">Total Home Runs </th>
              <th align="center" class="table__border--none">Streak</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td align="center" class="table__border--none">1
              </td>
              <td align="center" class="table__border--none">                              Baltimore Orioles.
              </td>
              <td align="center" class="table__border--none">
                100


                </td>
              <td align="center" class="table__border--none">
              Won 2</td>
            </tr>

            <tr class="bg_color_table2">
              <td align="center" class="table__border--none">2</td>
              <td align="center" class="table__border--none">Boston Red Sox.</td>
              <td align="center" class="table__border--none">100</td>
              <td align="center" class="table__border--none">Lost 1</td>
            </tr>
            <tr>
              <td align="center" class="table__border--none">3</td>
              <td align="center" class="table__border--none">Detroit Tigers.</td>
              <td align="center" class="table__border--none">97</td>
              <td align="center" class="table__border--none">Lost 3</td>
            </tr>
             <tr class="bg_color_table2">
              <td align="center" class="table__border--none">4</td>
              <td align="center" class="table__border--none">Houston Astros.</td>
              <td align="center" class="table__border--none">44</td>
              <td align="center" class="table__border--none">Won 4</td>
            </tr>
            <tr>
              <td align="center" class="table__border--none">5</td>
              <td align="center" class="table__border--none">Kansas City Royals.</td>
              <td align="center" class="table__border--none">39</td>
              <td align="center" class="table__border--none">Lost 2</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

<dashboard-pie-chart></dashboard-pie-chart>

<div class="row">
  <div class="col-xlg-9 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="row">
      <div class="col-xlg-8 col-lg-12 col-md-12 col-sm-7 col-xs-12"
           ba-panel
           ba-panel-title="Revenue"
           ba-panel-class="medium-panel">
       <div id="areaChart" class="admin-chart" ng-controller="dashboardRchart" style="height:335px;"></div>
      </div>
    
    </div>
  </div>
  <div class="col-xlg-9 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="row">
      <div class="col-xlg-8 col-lg-12 col-md-12 col-sm-7 col-xs-12"
           ba-panel
           ba-panel-title="Student"
           ba-panel-class="medium-panel">
       <div id="areaChart2" class="admin-chart" ng-controller="dashboardSchart" style="height:335px;"></div>
      </div>
    
    </div>
  </div>
</div>

<div class="row shift-up">
  <div class="col-xlg-3 col-lg-6 col-md-6 col-xs-12"
       ba-panel
       ba-panel-title="To Do List"
       ba-panel-class="xmedium-panel feed-comply-panel with-scroll todo-panel">
    <dashboard-todo></dashboard-todo>
  </div>
  <div class="col-xlg-6 col-lg-6 col-md-6 col-xs-12"
       ba-panel
       ba-panel-title="Calendar"
       ba-panel-class="xmedium-panel feed-comply-panel with-scroll calendar-panel">
    <dashboard-calendar></dashboard-calendar>
  </div>
</div>

<!--<div class="row">
  <div class="col-lg-4 col-sm-6 col-xs-12">
    <div ba-panel ba-panel-title="Weather" ba-panel-class="medium-panel with-scroll">
      <blur-weather forecast="5"></blur-weather>
    </div>
  </div>
</div>-->

<div class="task-todo-container" ng-class="{'transparent': transparent}">
 <!-- <input type="text" value="" class="form-control task-todo" placeholder="Task to do.." ng-keyup="addToDoItem($event)" ng-model="newTodoText"/>-->
  <i ng-click="addToDoItem('',true)" class="add-item-icon ion-plus-round"></i>
  <div class="box-shadow-border"></div>
  <ul class="todo-list"  ng-model="todoList">
    <li ng-repeat="item in todoList" ng-if="!item.deleted" ng-init="activeItem=false"
        ng-class="{checked: isChecked, active: activeItem}"
        ng-mouseenter="activeItem=true" ng-mouseleave="activeItem=false">
      <div class="blur-container"><div class="blur-box"></div></div>
      <i class="mark" style="background-color: {{::item.color}}"></i>
      <label class="todo-checkbox custom-checkbox custom-input-success">
        <span class="cut-with-dots">{{ item.text }}  <b class="pull-right">{{ item.date | date : 'dd/MM/yyyy' }}</b></span>
      </label>
     <!-- <i class="remove-todo ion-ios-close-empty" ng-click="item.deleted = true"></i>-->
    </li>
  </ul>
</div>

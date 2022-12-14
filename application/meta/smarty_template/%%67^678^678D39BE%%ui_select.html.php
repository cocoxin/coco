<?php /* Smarty version 2.6.19, created on 2016-05-21 07:46:07
         compiled from ui_select.html */ ?>
<!-- BEGIN PAGE HEADER-->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="#/dashboard.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#/ui_select.html">UI Select</a>
        </li>
    </ul>
    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" dropdown-menu-hover data-delay="1000" data-close-others="true"> Actions
                <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li>
                    <a href="#">
                        <i class="icon-user"></i> New User </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-present"></i> New Event
                        <span class="badge badge-success">4</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-basket"></i> New order </a>
                </li>
                <li class="divider"> </li>
                <li>
                    <a href="#">
                        <i class="icon-flag"></i> Pending Orders
                        <span class="badge badge-danger">4</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-users"></i> Pending Users
                        <span class="badge badge-warning">12</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<h3 class="page-title"> UI Select
    <small>AngularJS-native version of Select2</small>
</h3>
<!-- END PAGE HEADER-->
<!-- BEGIN MAIN CONTENT -->
<div class="note note-success">
    <h3>UI Select</h3>
    <p> AngularJS-native version of Select2 </p>
    <p> For more info please check the
        <a href="https://github.com/angular-ui/ui-select">official github page</a>
    </p>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered" ng-controller="UISelectController">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="icon-settings font-green-sharp"></i>
                    <span class="caption-subject bold uppercase">UI Select Demo</span>
                    <span class="caption-helper hide"></span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle btn-icon-only btn-default" href="#">
                        <i class="icon-cloud-upload"></i>
                    </a>
                    <a class="btn btn-circle btn-icon-only btn-default" href="#">
                        <i class="icon-wrench"></i>
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <form class="form-horizontal" role="form">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Default:</label>
                            <div class="col-md-6">
                                <ui-select ng-model="person.selected" theme="bootstrap">
                                    <ui-select-match placeholder="Select or search a person in the list...">{{$select.selected.name}}</ui-select-match>
                                    <ui-select-choices repeat="person in people | filter: $select.search">
                                        <div ng-bind-html="person.name | highlight: $select.search"></div>
                                        <small ng-bind-html="person.email | highlight: $select.search"></small>
                                    </ui-select-choices>
                                </ui-select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Grouped:</label>
                            <div class="col-md-6">
                                <ui-select ng-model="person.selected" theme="bootstrap">
                                    <ui-select-match placeholder="Select or search a person in the list...">{{$select.selected.name}}</ui-select-match>
                                    <ui-select-choices group-by="'group'" repeat="item in people | filter: $select.search">
                                        <span ng-bind-html="item.name | highlight: $select.search"></span>
                                        <small ng-bind-html="item.email | highlight: $select.search"></small>
                                    </ui-select-choices>
                                </ui-select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">With a clear button:</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <ui-select ng-model="person.selected" theme="bootstrap">
                                        <ui-select-match placeholder="Select or search a person in the list...">{{$select.selected.name}}</ui-select-match>
                                        <ui-select-choices repeat="item in people | filter: $select.search">
                                            <span ng-bind-html="item.name | highlight: $select.search"></span>
                                            <small ng-bind-html="item.email | highlight: $select.search"></small>
                                        </ui-select-choices>
                                    </ui-select>
                                    <span class="input-group-btn">
                                        <button ng-click="person.selected = undefined" class="btn btn-default">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Disabled:</label>
                            <div class="col-md-6">
                                <ui-select ng-model="person.selected" theme="bootstrap" ng-disabled="true">
                                    <ui-select-match placeholder="Select or search a person in the list...">{{$select.selected.name}}</ui-select-match>
                                    <ui-select-choices repeat="item in people | filter: $select.search">
                                        <div ng-bind-html="item.name | highlight: $select.search"></div>
                                        <small ng-bind-html="item.email | highlight: $select.search"></small>
                                    </ui-select-choices>
                                </ui-select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Multiselect:</label>
                            <div class="col-md-6">
                                <ui-select multiple ng-model="multipleDemo.selectedPeople" theme="bootstrap" ng-disabled="disabled">
                                    <ui-select-match placeholder="Select person...">{{$item.name}} &lt;{{$item.email}}&gt;</ui-select-match>
                                    <ui-select-choices repeat="person in people | propsFilter: {name: $select.search, age: $select.search}"> {{person.name}} - {{person.email}} </ui-select-choices>
                                </ui-select>
                                <p>Selected: {{multipleDemo.selectedPeople}}</p>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Submit</button>
                                    <button type="button" class="btn default">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->
<!-- BEGIN MAIN JS-->
<script>
</script>
<!-- BEGIN MAIN JS -->
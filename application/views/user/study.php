<script src="<?php echo base_url();?>assets/js/ui-bootstrap-tpls-0.10.0.min.js"></script>
<script src="<?php echo base_url();?>assets/js/car.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-sortable.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.tablesorter.min.js"></script>


<style type="text/css">
    .row{
        margin-left: 15px !important;
        margin-right: 15px !important;
    }
</style>
<div ng-controller="controller_study">
<section class="content">
    <div class="col-sm-12">
                    <div class="btn-group pull-right">
                        <input type="submit" class="btn btn-info"  id="btnAdd" value="Add Car" />
                    </div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <span>Filter:</span>
                                <input type="text" class="form-control" ng-model="search" ng-change="filter()" placeholder="Filter"/>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12" ng-show="filteredItems > 0">
                                <table class="table table-hover" id="customers" >
                                    <thead>
                                    <tr>
                                        <th>Car ID</th>
                                        <th>Car Name</th>
                                        <th>Car Color</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody ng-init="get_cars()">
                                    <tr ng-repeat="tbl_car in filtered = (pagedItems | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                                        <td>{{ tbl_car.car_id }}</td>
                                        <td>{{ tbl_car.car_name }}</td>
                                        <td>{{ tbl_car.car_color }}</td>
                                        <td><p ng-click="car_edit(tbl_car.car_id)" id="btnEdit" class="btn btn-primary">Edit</p>&nbsp;<a href="" ng-click="car_delete(tbl_car.car_id)" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="col-md-12" ng-show="filteredItems == 0">
                                    <div class="col-md-12">
                                        <h4>No Record found</h4>
                                    </div>
                                </div>
                                <div class="col-md-12" ng-show="filteredItems > 0">
                                    <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>
                                    <div class="col-sm-4 pull-right">
                                        <h5>Filtered : {{ filtered.length }} of {{ totalItems }} total Cars</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
</section>


<div id="CarEdit" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Car Update</h4>
            </div>
            <div class="modal-body">
                <form name="FormCarEdit">
                    <input type="hidden" ng-model="cid" name="cid" />
                    <div class="form-group col-sm-12">
                        <div class="form-group">
                            <label>Car Name</label>
                        </div>
                        <input type="text" class="form-control" ng-model="cname" name="cname" required />
                        <span ng-show="FormCarEdit.cname.$dirty && FormCarEdit.cname.$invalid">
                        <span class="form-validation-msg" ng-show="FormCarEdit.cname.$error.required">Car Name is required.</span>
                        </span>
                    </div>
                    <div class="form-group col-sm-12">
                        <div class="form-group">
                            <label>Car Color</label>
                        </div>
                        <input type="text" class="form-control" ng-model="ccolor" name="ccolor" required />
                        <span class="form-validation-msg" ng-show="FormCarEdit.ccolor.$error.required">Car Color is required.</span>
                    </div>
            </div>
            <div class="modal-footer">
                <input type="button" name="update_product" value="Update" ng-click="update_car()" class="btn btn-info" ng-disabled="FormCarEdit.cname.$dirty && FormCarEdit.cname.$invalid || FormCarEdit.ccolor.$dirty && FormCarEdit.ccolor.$invalid">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="CarAdd" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Car Add</h4>
            </div>
            <div class="modal-body">
                <form name="FormCartAdd">
                    <div class="form-group col-sm-12">
                        <input type="text" class="form-control" ng-model="cname" name="cname" placeholder="Car Name" required/>
                        <span ng-show="FormCartAdd.cname.$dirty && FormCartAdd.cname.$invalid">
                        <span class="form-validation-msg" ng-show="FormCartAdd.cname.$error.required">User Name is required.</span>
                        </span>
                    </div>
                    <div class="form-group col-sm-12">
                        <input type="text" class="form-control" ng-model="ccolor" name="ccolor" placeholder="Car Color" required/>
                        <span ng-show="FormCartAdd.ccolor.$dirty && FormCartAdd.ccolor.$invalid">
                        <span class="form-validation-msg" ng-show="FormCartAdd.ccolor.$error.required">User Name is required.</span>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info"  name="submit_car" value="Submit" ng-click="car_submit()" ng-disabled="!FormCartAdd.cname.$dirty && FormCartAdd.cname.$invalid || FormCartAdd.ccolor.$dirty && FormCartAdd.ccolor.$invalid ">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
$(document).ready(function(){
    //$("#customers").tablesorter();
    $('tbody').sortable({
        containment: 'document',
        tolerance: 'pointer',
        cursor: 'pointer',
        revert: true
    });
    $( "table" ).delegate( "#btnEdit", "click", function() {
        $('#CarEdit').modal('show');
    });
    $('#btnAdd').on('click', function(){
        $('#CarAdd').modal('show');
    });
});
var baseurl = $('#baseurl').val();

var listApp = angular.module('listpp', ['ui.bootstrap']);
listApp.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
});

listApp.controller('controller_study', function ($scope,$http) {
    //display
    $scope.get_cars = function(){
        $http.get(baseurl + "/main/get_cars").success(function(data)
        {
            //display data from database
            $scope.pagedItems = data;
            $scope.entryLimit = 5; //max no of items to display in a page
            $scope.filteredItems = $scope.pagedItems.length; //Initially for no filter
            $scope.totalItems = $scope.pagedItems.length;
        });
    }
    $scope.car_edit = function(index) {
        $http.post(baseurl + '/main/car_edit',
            {
                'car_index'     : index
            }
        )
            .success(function (data, status, headers, config) {
                $scope.cid          =   data[0]["car_id"];
                $scope.cname        =   data[0]["car_name"];
                $scope.ccolor        =   data[0]["car_color"];
            })

            .error(function(data, status, headers, config){
                alert(data);
            });
    }
    $scope.update_car = function() {
        $http.post(baseurl + '/main/update_car',
            {
                'car_id'            : $scope.cid,
                'car_name'            : $scope.cname,
                'car_color'            : $scope.ccolor
            }
        )
            .success(function (data, status, headers, config) {
                $scope.get_cars();
                alert("Car has been Updated Successfully");
                location.reload();
            })
            .error(function(data, status, headers, config){
                alert(data);
            });
    }
    $scope.car_delete = function(index) {
        var x = confirm("Are you sure to delete the selected Car");
        if(x){
            $http.post(baseurl + '/main/car_delete',
                {
                    'car_index'     : index
                }
            )
                .success(function (data, status, headers, config) {
                    $scope.get_cars();
                    alert("Car has been deleted Successfully");
                })

                .error(function(data, status, headers, config){
                    alert(data);
                });
        }else{

        }
    }
    $scope.car_submit = function() {
        $http.post(baseurl + '/main/car_insert',
            {
                'car_name': $scope.cname,
                'car_color': $scope.ccolor
            }
        )
            .success(function (data, status, headers, config) {
                alert("Product has been Submitted Successfully");
                $scope.get_cars();
                location.reload();
            })
            .error(function (data, status, headers, config) {
                alert(data);
            });
    }
});
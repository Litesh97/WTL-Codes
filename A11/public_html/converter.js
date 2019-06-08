var app = angular.module("Convert", []);
app.controller("abc", function ($scope) {

    $scope.conv = function() {
      var r = Number($scope.rupees);
      var d = Number($scope.dollar);

      if($scope.rupees)
      {
          $scope.dollar = 0.015*r;
      }
      if($scope.dollar)
      {
          $scope.rupees = 64.91*d;
      }
    };
});

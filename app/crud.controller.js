angular.module("Crud").controller('TesteController', function($scope, $http){

    $scope.listar=function(){
        $http.get("php/consulta.php").success(function(data){
            $scope.contents=data;
        })
    }
    $scope.listar();

    $scope.deletar=function(id){
        $http.post("php/delete.php",{'id': id}).success(function(){
            $scope.listar();
        })
    }
    $scope.inserirDados=function(){
        $http.post("php/insert.php",{'nome':$scope.nome, 'valor':$scope.valor}).success(function(){
            //console.log(data);
            $scope.nome = '';
            $scope.valor = '';
            $scope.listar();
            
        })
    }
})


var myApp =angular.module("myApp",["ngRoute",'angularUtils.directives.dirPagination']);


myApp.config(function($routeProvider) {
    $routeProvider
        .when("/", {
            templateUrl : "personel/index.blade.php",
            controller: "CRUDController"
        })

        .when("/personal/:id", {
             templateUrl: "personel/edit.blade.php",
             controller: "CRUDController1"

        })

        .when("/create", {
        templateUrl: "personel/create.blade.php",
        controller: "CRUDController1"
    })

        // .when("/search", {
        //     templateUrl: "personel/index.blade.php",
        //     controller: "search"
        // })

        .otherwise({
            template : "<h1>None</h1><p>Nothing has been selected</p>"
        });

});



myApp.controller("CRUDController", function ($scope ,$http,$routeParams,$window) {

    $scope.personal = [];
    $scope.country = [];
    $scope.city = [];
    $scope.governorate = [];
    $scope.neighborhood = [];
    $scope.nationality = [];




//******* for index using pagination

    var vm = this;
    vm.personal = [];
    vm.pageno = 1;
    vm.total_count = 0;
    vm.itemsPerPage = 2;
    vm.getData = function(pageno){ // This would fetch the data on page change.
        vm.personal = [];
        $http.get("personal")
            . then (function success(response) {
                vm.personal = response.data.personal;
                vm.total_count = response.total_count;
            });
    };
    vm.getData(vm.pageno);

    //*********

    $scope.loadsponsor = function () {

        $http.get('/personal')

            .then(function success(e) {
                console.log(e);
                $scope.personal = e.data.personal;
                $scope.personal = e.data.personal;
                $scope.country = e.data.country;
                $scope.city = e.data.city;
                $scope.governorate = e.data.governorate;
                $scope.neighborhood = e.data.neighborhood;
                $scope.nationality = e.data.nationality;

            });
    };
    $scope.loadsponsor();


//******** for delete

    $scope.confirmDelete = function(id) {
        var isConfirmDelete = confirm('Are you sure you want this record?');
        if (isConfirmDelete) {
            var url='/personal/' + id;
            $http.delete(url).then(function (data) {
                console.log(data);
                 location.reload();

            })
        }else {
            console.log(data);
            alert('Unable to delete');
            return false;
        }
    }


    //********** search
    $scope.search = function () {

        $http.post('/personal/search', {
            type: $scope.personal.type,
            firstName: $scope.personal.firstName,
            secondName: $scope.personal.secondName,
            thirdName: $scope.personal.thirdName,
            fourthName: $scope.personal.fourthName,
            CountryOfResidence: $scope.personal.CountryOfResidence,
            nationality: $scope.personal.nationality,
            governorate: $scope.personal.governorate,
            identificationNumber: $scope.personal.identificationNumber,
            ContactPerson : $scope.personal.ContactPerson,



        }).then(function success(e) {
            $scope.personal = e.data.personal;
            alert(' Success');

        }, function error(response) {
            console.log(response);
            alert('search Error');
        });



    }

});


//************ for edit and  add New Controller
myApp.controller("CRUDController1", function ($scope ,$http ,$window,$routeParams){

    $scope.personal = [];
    $scope.country = [];
    $scope.city = [];
    $scope.governorate = [];
    $scope.neighborhood = [];
    $scope.nationality = [];

    $scope.personal = {
        type:'',
        firstName: '',
        secondName: '',
        thirdName: '',
        fourthName: '',
        addressDetails: '',
        CountryOfResidence: '',
        telephoneNumber: '',
        identificationNumber:'',
        definitionType:'',
        governorate:'',
        mobileNumber:'',
        neighborhood:'',
        nationality:'',
        password:'',
        email:'',
         city:'',
        ContactPerson:'',
        telephoneNumber2:'',

    };

    $http.get('personal/create')
        .then(function success(e) {
            console.log(e);
            $scope.personal = e.data.personal;
            $scope.country = e.data.country;
            $scope.city = e.data.city;
            $scope.governorate = e.data.governorate;
            $scope.neighborhood = e.data.neighborhood;
            $scope.nationality = e.data.nationality;


        });

    //******************//

    $scope.editsponsor = function(id) {

        $http({
            method: 'get',
            url: '/personal/' + $routeParams.id + '/edit'
        })
            .then(function success(e) {
                console.log(e);
                $scope.personal = e.data.personal;
                $scope.country = e.data.country;

            });
    }
    $scope.editsponsor();

//  /******* update


    $scope.updatesponsor =function (id) {

        $http.put('/personal/' + $scope.personal.id,
            {firstName: $scope.personal.firstName,
                secondName: $scope.personal.secondName,
                thirdName: $scope.personal.thirdName,
                fourthName: $scope.personal.fourthName,
                addressDetails: $scope.personal.addressDetails,
                telephoneNumber: $scope.personal.telephoneNumber,
                CountryOfResidence: $scope.personal.CountryOfResidence
            })
            .then(function success(response) {
                console.log(response);
                alert(' edit successfully');
                $window.location.href = '/';

            }
            , function error(response) {
                console.log(response);
                alert('Submit Error');
            });
    }

    //********* add


    $scope.addsponsor = function () {

        if ($scope.personal.type == 'شخصي') {

            $http.post('/personal', {

                type: $scope.personal.type,
                firstName: $scope.personal.firstName,
                secondName: $scope.personal.secondName,
                thirdName: $scope.personal.thirdName,
                fourthName: $scope.personal.fourthName,
                identificationNumber: $scope.personal.identificationNumber,
                definitionType: $scope.personal.definitionType,
                neighborhood: $scope.personal.neighborhood,
                addressDetails: $scope.personal.addressDetails,
                telephoneNumber: $scope.personal.telephoneNumber,
                governorate: $scope.personal.governorate,
                mobileNumber: $scope.personal.mobileNumber,
                email: $scope.personal.email,
                city: $scope.personal.city,
                CountryOfResidence: $scope.personal.CountryOfResidence,
                nationality: $scope.personal.nationality,
                password: $scope.personal.password


            }).then(function success(e) {
                    alert(' Success');
                    $window.location.href = '/';


                }, function error(error) {
                console.log(error);
                alert('Submit Error');
                // $scope.recordErrors(error);
            });
        }
        else if ($scope.personal.type == 'مؤسسي') {

            $http.post('/personal', {
                type: $scope.personal.type,
                firstName: $scope.personal.firstName,
                secondName: $scope.personal.secondName,
                thirdName: $scope.personal.thirdName,
                fourthName: $scope.personal.fourthName,
                addressDetails: $scope.personal.addressDetails,
                telephoneNumber: $scope.personal.telephoneNumber,
                telephoneNumber2: $scope.personal.telephoneNumber2,
                email: $scope.personal.email,
                CountryOfResidence: $scope.personal.CountryOfResidence,
               ContactPerson : $scope.personal.ContactPerson,
                password: $scope.personal.password


            }).then(function success(e) {
                    alert(' Success');
                    $window.location.href = '/';


                }, function error(error) {
                    console.log(response);
                    alert('Submit Error');
                    // $scope.recordErrors(error);
                }
            )}


    };
    //
    //
    // $scope.recordErrors = function (error) {
    //     $scope.errors = [];
    //     if (error.data.errors.FirstName) {
    //         $scope.errors.push(error.data.errors.FirstName[0]);
    //     } else if (error.data.errors.SecondName) {
    //         $scope.errors.push(error.data.errors.SecondName[0]);
    //     }else if (error.data.errors.ThirdName) {
    //         $scope.errors.push(error.data.errors.ThirdName[0]);
    //     }else if (error.data.errors.FourthName) {
    //         $scope.errors.push(error.data.errors.FourthName[0]);
    //     }else if (error.data.errors.relative_relation) {
    //         $scope.errors.push(error.data.errors.relative_relation[0]);
    //     }else if (error.data.errors.Date_of_Birth) {
    //         $scope.errors.push(error.data.errors.Date_of_Birth[0]);
    //     }else if (error.data.errors.Social_status) {
    //         $scope.errors.push(error.data.errors.Social_status[0]);
    //     }else if (error.data.errors.Study) {
    //         $scope.errors.push(error.data.errors.Study[0]);
    //     }else if (error.data.errors.work) {
    //         $scope.errors.push(error.data.errors.work[0]);
    //     }else if (error.data.errors.image) {
    //         $scope.errors.push(error.data.errors.image[0]);
    //
    //
    //     }
    // }

});
//********************






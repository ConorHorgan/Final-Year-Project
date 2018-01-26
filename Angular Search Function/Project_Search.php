<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="/Angular Search Function/script.js"></script>
    <link href="/Angular Search Function/styles.css" rel="stylesheet" />
</head>
<body ng-app="myModule">
    <div ng-controller="myController">
        <input type="text" placeholder="Search name" ng-model="searchText.name" />
        <input type="text" placeholder="Search city" ng-model="searchText.city" />
        <input type="checkbox" ng-model="exactMatch" /> Exact Match
        <br /><br />
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Salary</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="employee in employees | filter: searchText : exactMatch">
                    <td> {{ employee.name }} </td>
                    <td> {{ employee.gender }} </td>
                    <td> {{ employee.salary  }} </td>
                    <td> {{ employee.city  }} </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
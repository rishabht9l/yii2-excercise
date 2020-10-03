<h2 align="left">Project By: Rishabh Mehrotra</h2>
<h2 align="left">Designation: Senior PHP Developer</h2>
<h1 align="center">PHP Project Excercise by using Yii2 (MVC Framework)</h1>

Please follow below Steps for Project Setup and Running 
different modules.

1. Clone this project.
2. run composer install and then composer update.
3. create new mysql db named ntt-excercise
4. run migration command, <b> php yii migrate </b>
5. set up virtual host for the Apis and admin
6. for Apis set virtual host path to yii2-excercise/apis/web/ example - apis.test.localhost
7. for Admin set virtual host path to yii2-excercise/backend/web/ example - admin.test.localhost
8. for excercise 1, point number 2 open admin URL i.e admin.test.localhost(assumed)
9. for excercise 1, point number 3 run command <b> php yii router -n=2  </b> (where value of n can be vary)
10. for excercise 3, Apis access i have integrated Swagger Documentation. to see documentation open Url apis.test.localhost/v1/swagger/docs
11. Apis can be accesed via token "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImtpZCI6IjI5NTI4MTRmZjZiNDkyMyJ9.eyJzdWIiOiIyOTUyODE0ZmY2YjQ5MjMiLCJpc3MiOiIiLCJhdWQiOiIiLCJpYXQiOjE2MDE2NDk2NjQsImV4cCI6MTYwMTY1MzI2NCwianRpIjoiNzMwMzZjZDE2MDhlOTViIn0.XfnSXcX2hWiH6EoiNJdI3fX5iMgBQjdWadNZwhJTQF8"

<?php

/**
 * @SWG\Get(path="/v1/router/index",
 *     tags= {"Router"},
 *     summary="Get List of all Routers",
 *    produces = {"application/json"},
 *    consumes = {"application/x-www-form-urlencoded"},
 * @SWG\Parameter(
 *        in = "header",
 *        name = "Authorization",
 *        description = "User unique bearer access token",
 *        default = "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImtpZCI6IjI5NTI4MTRmZjZiNDkyMyJ9.eyJzdWIiOiIyOTUyODE0ZmY2YjQ5MjMiLCJpc3MiOiIiLCJhdWQiOiIiLCJpYXQiOjE2MDE2NDk2NjQsImV4cCI6MTYwMTY1MzI2NCwianRpIjoiNzMwMzZjZDE2MDhlOTViIn0.XfnSXcX2hWiH6EoiNJdI3fX5iMgBQjdWadNZwhJTQF8",
 *        required = true,
 *        type = "string"
 *     ),
 * @SWG\Response(
 *         response = 200,
 *         description = "details fetched successfully",
 *  ),
 * )
 */
/**
 * @SWG\Post(path="/v1/router/create",
 *     tags={"Router"},
 *     summary="Create new Router Deatils",
 *    produces = {"application/json"},
 *    consumes = {"application/x-www-form-urlencoded"},
 * @SWG\Parameter(
 *        in = "header",
 *        name = "Authorization",
 *        description = "User unique bearer access token",
 *        default = "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImtpZCI6IjI5NTI4MTRmZjZiNDkyMyJ9.eyJzdWIiOiIyOTUyODE0ZmY2YjQ5MjMiLCJpc3MiOiIiLCJhdWQiOiIiLCJpYXQiOjE2MDE2NDk2NjQsImV4cCI6MTYwMTY1MzI2NCwianRpIjoiNzMwMzZjZDE2MDhlOTViIn0.XfnSXcX2hWiH6EoiNJdI3fX5iMgBQjdWadNZwhJTQF8",
 *        required = true,
 *        type = "string"
 *     ),
 * @SWG\Parameter(
 *        in = "formData",
 *        name = "sap_id",
 *        description = "Enter SAPID",
 *        required = true,
 *        type = "string"
 *     ),
 * @SWG\Parameter(
 *        in = "formData",
 *        name = "hostname",
 *        description = "enter Hostname",
 *        required = true,
 *        type = "string"
 *     ),
 * @SWG\Parameter(
 *        in = "formData",
 *        name = "loopback",
 *        description = "Enter Loopback (ipv4) address",
 *        required = true,
 *        type = "string"
 *     ),
 * @SWG\Parameter(
 *        in = "formData",
 *        name = "mac_address",
 *        description = "Enter MAC address",
 *        required = true,
 *        type = "string"
 *     ),
 *     @SWG\Response(
 *         response = 200,
 *         description = "Router has been created sucessfully",
 *     ),
 * )
 */

/**
 * @SWG\Put(path="/v1/router/update",
 *     tags={"Router"},
 *     summary="Update Router Deatils",
 *    produces = {"application/json"},
 *    consumes = {"application/x-www-form-urlencoded"},
 * @SWG\Parameter(
 *        in = "header",
 *        name = "Authorization",
 *        description = "User unique bearer access token",
 *        default = "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImtpZCI6IjI5NTI4MTRmZjZiNDkyMyJ9.eyJzdWIiOiIyOTUyODE0ZmY2YjQ5MjMiLCJpc3MiOiIiLCJhdWQiOiIiLCJpYXQiOjE2MDE2NDk2NjQsImV4cCI6MTYwMTY1MzI2NCwianRpIjoiNzMwMzZjZDE2MDhlOTViIn0.XfnSXcX2hWiH6EoiNJdI3fX5iMgBQjdWadNZwhJTQF8",
 *        required = true,
 *        type = "string"
 *     ),
 * @SWG\Parameter(
 *        in = "formData",
 *        name = "loopback",
 *        description = "Enter Loopback (ipv4) address",
 *        required = true,
 *        type = "string"
 *     ),
 * @SWG\Parameter(
 *        in = "formData",
 *        name = "sap_id",
 *        description = "Enter SAPID",
 *        required = true,
 *        type = "string"
 *     ),
 * @SWG\Parameter(
 *        in = "formData",
 *        name = "hostname",
 *        description = "enter Hostname",
 *        required = true,
 *        type = "string"
 *     ),
 * @SWG\Parameter(
 *        in = "formData",
 *        name = "mac_address",
 *        description = "Enter MAC address",
 *        required = true,
 *        type = "string"
 *     ),
 *     @SWG\Response(
 *         response = 200,
 *         description = "Router has been created sucessfully",
 *     ),
 * )
 */

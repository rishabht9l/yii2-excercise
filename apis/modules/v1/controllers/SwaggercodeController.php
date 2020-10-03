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
